<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/styles.css">
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
            <div id="not-found">
                <h1><?php echo $content["404"]["h1"] ?></h1>
                <hr>
                <p><?php echo $content["404"]["p"] ?></p>
                <a id="tp" href="/"><?php echo $content["404"]["a"] ?></a>
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