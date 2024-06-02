<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/global.css">
    <title>Document</title>
</head>

<body>
<?php $content = json_decode(file_get_contents($_COOKIE["lang"]), true); ?>
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
            <div id="movie-list-box">
                <h1 class="page-header"><?php echo $content["movies"]["movies"] ?></h1>
                <div id="carrousel-container-1" class="carrousel-contianer">
                    <div id="sliders">
                        <h2><?php echo $content["movies"]["action"] ?></h2>
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
                <div id="carrousel-container-2" class="carrousel-contianer">
                    <div id="sliders">
                        <h2><?php echo $content["movies"]["romance"] ?></h2>
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
                <div id="carrousel-container-3" class="carrousel-contianer">
                    <div id="sliders">
                        <h2><?php echo $content["movies"]["classics"] ?></h2>
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
    <script src="../public/js/VerticalCarrousel.js"></script>
    <script src="../public/js/ResizeEvents.js"></script>
</body>

</html>