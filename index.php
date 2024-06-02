<?php
    include("controllers/MainController.php");
    include("controllers/MoviesController.php");
    include("controllers/SeriesController.php");
    include("controllers/SocialController.php");

    $main = new MainController();
    $movies = new MoviesController();
    $series = new SeriesController();
    $social = new SocialController();

    if (!isset($_COOKIE["lang"])) {
        setcookie("lang", "public/lang/en.json", time() + (86400 * 30), "/");
        header("Location: " . $_SERVER["REQUEST_URI"]);
        exit();
    }

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
        case "/movies":
            $movies -> list();
            break;
        case "/series":
            $series -> list();
            break;
        case "/social": 
            $social -> social();
        case "/cookies/rm":
            $main -> rmCookies();
            break;
        case "/lang/set":
            $lang = $_POST["lang"];
            $main -> setLang($lang);
            break;
        /* MORE CASES */

        case "/lalaland":
            $movies -> lalaland(); //test
            break;
        default:
            $main -> notFound();
    }
?>