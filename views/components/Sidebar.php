<?php $content = json_decode(file_get_contents($_COOKIE["lang"]), true); ?>
<aside id="sidebar">
    <nav id="sidebar-navigation">
        <div>
            <a href="/" class="sidebar-navlink">
                <i class="bi bi-film"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["home"] ?></span>
            </a>
            <a href="/" class="sidebar-navlink">
                <i class="bi bi-plus"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["list"] ?></span>
            </a>
            <a href="/" class="sidebar-navlink">
                <i class="bi bi-graph-up-arrow"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["categories"] ?></span>
            </a>
            <a href="/" class="sidebar-navlink">
                <i class="bi bi-calendar"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["news"] ?></span>
            </a>
        </div>
        <div>
            <a href="/" class="sidebar-navlink">
                <i class="bi bi-person-add"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["friends"] ?></span>
            </a>
            <a href="/social" class="sidebar-navlink">
                <i class="bi bi-chat"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["social"] ?></span>
            </a>
        </div>
        <div>
            <a href="/" class="sidebar-navlink">
                <i class="bi bi-sliders2-vertical"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["settings"] ?></span>
            </a>
            <a href="/" class="sidebar-navlink">
                <i class="bi bi-box-arrow-right"></i>
                <span class="md-hidden"><?php echo $content["sidebar"]["logout"] ?></span>
            </a>
        </div>
    </nav>
</aside>