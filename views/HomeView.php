<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/styles.css"> 
    <link rel="stylesheet" href="public/css/home.css">
    <title>Cinexplore</title>
</head>

<body>
    <?php include("components/Header.php") ?>
    <!-- BEGIN MAIN PAGE CONTENT -->
    <div id="content">
        <!-- BEGIN SIDEBAR -->
        <?php include("components/Sidebar.php") ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN DYNAMIC CONTENT -->
        <main id="main-content">
            <?php include("components/HeroBanner.php") ?>
            <div id="box">
                <div id="carrousel-container-1" class="carrousel-container">
                    <div id="sliders">
                        <h2>Tendencias</h2>
                        <div id="slider-buttons">
                            <button id="prev-1">
                                <i class="bi bi-caret-left-fill"></i>
                            </button>
                            <button id="next-1">
                                <i class="bi bi-caret-right-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div id="carrousel-wrapper-1" class="carrousel-wrapper">
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                    </div>
                </div>
                <div id="carrousel-container-2" class="carrousel-container">
                    <div id="sliders">
                        <h2>Recomendadas para ti</h2>
                        <div id="slider-buttons">
                            <button id="prev-2">
                                <i class="bi bi-caret-left-fill"></i>
                            </button>
                            <button id="next-2">
                                <i class="bi bi-caret-right-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div id="carrousel-wrapper-2" class="carrousel-wrapper">
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                    </div>
                </div>
                <div id="carrousel-container-3" class="carrousel-container">
                    <div id="sliders">
                        <h2>Películas clásicas</h2>
                        <div id="slider-buttons">
                            <button id="prev-3">
                                <i class="bi bi-caret-left-fill"></i>
                            </button>
                            <button id="next-3">
                                <i class="bi bi-caret-right-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div id="carrousel-wrapper-3" class="carrousel-wrapper">
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                        <a href="" class="carrousel-card-h">
                            <img src="../public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <!-- END DYNAMIC CONTENT -->
    </div>
    <!-- END MAIN PAGE CONTENT -->

    <!-- BEGIN FOOTER -->
    <?php include("components/Footer.php") ?>
    <!-- END FOOTER -->
    <script src="../public/js/HorizontalCarrousel.js"></script>
    <script src="../public/js/ResizeEvents.js"></script>
</body>

</html>