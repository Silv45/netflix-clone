<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/css/global.css">
    <title>Document</title>
</head>

<body>
    <!-- BEGIN HEADER -->
    <?php include("components/Header.php") ?>
    <!-- END HEADER -->
    <!-- BEGIN MAIN PAGE CONTENT -->
    <div id="content">
        <!-- BEGIN SIDEBAR -->
        <?php include("components/Sidebar.php") ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN DYNAMIC CONTENT -->
        <main id="main-content">
            <div id="video-container">
                <video src="../public/media/video/la-la-land.mp4" id="trailer" controls></video>
            </div>
            <div id="movie-overview">
                <div id="poster-container">
                    <div id="poster-wrapper">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La La Land (2016)" id="poster">
                        <div id="star-ratings">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                    </div>
                </div>
                <div id="info-container">
                    <div id="description-container">
                        <h1 id="movie-title">
                            <span id="movie-name">La La Land</span>
                            <span id="year">(2016)</span>
                        </h1>
                        <p id="synopsis">
                            <span>SINOPSIS:</span>
                            <br>
                            <span id="synopsis-text">While stuck in Los Angeles traffic, jazz pianist Sebastian "Seb"
                                Wilder has a moment of road rage directed at aspiring actress Mia Dolan. After a hard
                                day at work, Mia's next audition goes awry when the casting director takes a phone call
                                during an emotional scene. That night, her roommates take her to a lavish party in the
                                Hollywood Hills, promising her that someone in the crowd could jump-start her career.
                                After her car is towed, she walks home in disappointment.</span>
                        </p>
                    </div>
                    <div id="ratings-container">
                        <div id="buttons">
                            <button id="watch-now">
                                VER AHORA
                            </button>
                            <button id="my-list">
                                <i class="bi bi-plus"></i>
                                MI LISTA
                            </button>
                        </div>
                        <div id="ratings">
                            <div class="row">
                                <h2>Calificación</h2>
                                <img height="20" src="../public/media/img/svg/imdb.svg" alt="imdb logo">
                                <p>
                                    <span id="relative-rating">8.0</span>
                                    <span id="voters">(621 K)</span>
                                </p>
                            </div>
                            <hr>
                            <div class="row">
                                <h2>Géneros</h2>
                                <p id="genres">
                                    comedia, drama, romance, música
                                </p>
                            </div>
                            <hr>
                            <div class="row">
                                <h2>Duración</h2>
                                <p id="duration">
                                    2h 8m
                                </p>
                            </div>
                            <hr>
                            <div class="row">
                                <h2>Clasificación por edades</h2>
                                <p id="pg-rating">
                                    PG-13
                                </p>
                            </div>
                            <hr>
                            <div class="row">
                                <h2>Director</h2>
                                <p id="director">
                                    Damien Chazelle
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carrousel-container-1" class="carrousel-contianer">
                <div id="sliders">
                    <h2>Qué más te podría interesar</h2>
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
                    <a href="" class="carrousel-card-v">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La la land">
                    </a>
                    <a href="" class="carrousel-card-v">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La la land">
                    </a>
                    <a href="" class="carrousel-card-v">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La la land">
                    </a>
                    <a href="" class="carrousel-card-v">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La la land">
                    </a>
                    <a href="" class="carrousel-card-v">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La la land">
                    </a>
                    <a href="" class="carrousel-card-v">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La la land">
                    </a>
                    <a href="" class="carrousel-card-v">
                        <img src="../public/media/img/posters/veritcal/la-la-land.jpg" alt="La la land">
                    </a>
                </div>
            </div>
        </main>
        <!-- END DYNAMIC CONTENT -->
    </div>
    <!-- END MAIN PAGE CONTENT -->

    <!-- BEGIN FOOTER -->
    <?php include("components/Footer.php") ?>
    <!-- END FOOTER -->
    <style>

    </style>
    <script src="../public/js/ResizeEvents.js"></script>
    <script src="../public/js/VerticalCarrousel.js"></script>
</body>

</html>