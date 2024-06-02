<?php $content = json_decode(file_get_contents($_COOKIE["lang"]), true); ?>
<footer>
    <div>
        <form id="set-lang" action="/lang/set" method="post">
            <select name="lang" id="lang">
                <option value="0" selected disabled hidden>
                    <?php echo $content["footer"]["lang"] ?>
                </option>
                <option value="1">Español</option>
                <option value="2">English</option>
                <option value="3">-Otro lenguaje-</option>
            </select>
        </form>
        <button id="rm-cookie">
            <i class="bi bi-cookie"></i>
            <span><?php echo $content["footer"]["cookies"] ?></span>
        </button>
    </div>
    <div>
        <h3><?php echo $content["footer"]["navigation"]["navigation"] ?></h3>
        <ul class="footer-columns">
            <li><a href="#"><?php echo $content["footer"]["navigation"]["home"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["navigation"]["faq"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["navigation"]["invrel"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["navigation"]["jobs"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["navigation"]["about"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["navigation"]["help"] ?></a></li>
        </ul>
    </div>
    <div>
        <h3><?php echo $content["footer"]["legal"]["legal"] ?></h3>
        <ul class="footer-columns">
            <li><a href="#"><?php echo $content["footer"]["legal"]["privacy"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["legal"]["tos"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["legal"]["cookie"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["legal"]["corporate"] ?></a></li>
        </ul>
    </div>
    <div>
        <h3><?php echo $content["footer"]["talk"]["talk"] ?></h3>
        <ul class="footer-columns">
            <li><a href="#"><?php echo $content["footer"]["talk"]["mail"] ?></a></li>
            <li><a href="#"><?php echo $content["footer"]["talk"]["phone"] ?></a></li>
        </ul>
    </div>
    <div>
        <h3><?php echo $content["footer"]["follow"]?></h3>
        <ul class="socials">
            <li>
                <a href="#">
                    <i class="bi bi-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-twitter"></i>
                </a>
            </li>
        </ul>
</footer>
<script>
    const button = document.getElementById("rm-cookie");

    button.addEventListener("click", () => {
        let xhr = new XMLHttpRequest();

        xhr.open("POST", "/cookies/rm");

        xhr.onreadystatechange = () => {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    console.log("Okay");
                    console.log(xhr.responseText);
                } else {
                    console.log(xhr.status);
                }
            }
        }

        xhr.send();
    });

    const select = document.getElementById("lang");

    select.addEventListener("change", (event) => {
        const form = document.getElementById("set-lang");
        form.submit();
    })
</script>