    <!-- BEGIN HEADER -->
    <?php $content = json_decode(file_get_contents($_COOKIE["lang"]), true); ?>
    <header id="website-header">
        <div id="navbar-container">
            <a href="/" id="website-logo">
                <h1>
                    <span class="logo-text">Cinexpl</span><i class="icon bi bi-compass"></i><span
                        class="logo-text">re</span>
                </h1>
            </a>
            <nav id="header-navbar">
                <a href="/movies"> <?php echo $content["header"]["movies"] ?> </a>
                <a href="/series"> <?php echo $content["header"]["series"] ?> </a>
            </nav>
        </div>
        <div id="header-items">
            <div id="notifications-wrapper">
                <button id="notifications">
                    <i class="bi bi-bell icon"></i>
                </button>
            </div>
            <div id="searchbox">
                <?php echo "<input type=\"text\" name=\"search\" id=\"search\" placeholder=\"". $content["header"]["search"] ."\">" ?>
                <button type="submit"><i class="bi bi-search"></i></button>
            </div>
            <div id="pfp-container">
                <img src="http://via.placeholder.com/60" alt="Someone's profile picture" id="pfp">
            </div>
        </div>
    </header>
    <!-- END HEADER -->