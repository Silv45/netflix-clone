<?php
    include("controllers/MainController.php");

    $main = new MainController();

    function countVisits() {
        if(isset($_COOKIE["timeout"])) {
            return;
        }

        if(isset($_COOKIE["visits"])) {
            setcookie("visits", $_COOKIE["visits"] + 1, time() + 86400 * 30, "/");
            setcookie("timeout", time(), time() + 5, "/" );
        } else {
            setcookie("visits", 0, time() + 86400 * 30, "/");
        }
    }

    countVisits();

    switch($_SERVER["REQUEST_URI"]) {
        case "/":
            $main -> index();
            break;
        case "/cookies/rm":
            $main -> rmCookies();
            break;
        case "/lang/set":
            $lang = $_POST["lang"];
            $main -> setLang($lang);
        /* MORE CASES */
        default:
            $main -> notFound();
    }
?>