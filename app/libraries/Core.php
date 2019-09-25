<?php
    /*
     * App Core Class
     * Kreira URL i ucitava core controller
     * URL FORMAT - /controller/method/params
     */

    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            // print_r($this->getUrl());
            $url = $this->getUrl();

            // Gleda u controllers ka prvoj vrednosti
            // ucwords() menja prvo slovo u veliko slovo.
            // iako smo u folderu libraries putanju definisemo kao da smo u index.php jer smo sve preusmerili na taj fajl
            if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                // ako postoji setujemo ga kao controller
                $this->currentController = ucwords($url[0]);
                // unsetujemo [0] index
                unset($url[0]);
            }

            // Require controller
            require_once '../app/controllers/' . $this->currentController . '.php';

            // instanciramo controller klasu npr:
            // ako je pages onda bi ovaj kod odradio: $pages = new Pages;
            $this->currentController = new $this->currentController;

            // drugi deo url-a (/metod/)
            if(isset($url[1])){
                // proveravamo da li metod postoji u controller
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    // unset 1 index
                    unset($url[1]); 
                }
            }

            // Get params 
            $this->params = $url ? array_values($url) : [];

            // pozivamo callback sa redom params-a
            // https://www.php.net/manual/en/function.call-user-func-array.php
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        // Ovaj metod je kljuc svega jer fecuje URL i ubacuje ga u array na primer:
        // ako u url-u imamo: MVC/post/edit/1 
        // u promenljivoj $_GET['url'] cemo imati: post/edit/1
        // ovo mozemo da uradimo jer smo u .htaccess mapirali url ->  /index.php?url=$1 
        public function getUrl(){
            if(isset($_GET['url'])){
                // rtrim f-ja skida karakter koji navedemo u nasem slucaju '/'. 
                // https://www.php.net/manual/en/function.rtrim.php
                $url = rtrim($_GET['url'], '/');
                // filter_var f-ja filtrira promenljive.U pvom slucaju skida sve nedozvoljene url karaktere u stringu. 
                // https://www.php.net/manual/en/filter.filters.sanitize.php
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // explode f-ja vraca niz substringova od zadatog stringa. 
                // https://www.php.net/manual/en/function.explode.php
                $url = explode('/', $url);
                return $url;
            }
        }
    }