<?php
    class MainController {
        public function index() {
            require("./views/HomeView.php");
        }

        public function notFound() {
            require("./views/NotFoundView.php");
            http_response_code(404);
        }

        public function rmCookies() {
            foreach($_COOKIE as $key => $value) {
                setcookie($key, "", time() - 3600, "/");
            }
        }

        public function setLang($lang) {
            $langs = array(
                1 => "public/lang/es.json",
                2 => "public/lang/en.json"
            );

            setcookie("lang", $langs[$lang], time() + 86400*30, "/");
            header("Location: /");
        }
    }
?>