<footer>
    <div>
        <select name="lang" id="lang">
            <option value="0" selected disabled hidden>
                <i class="bi bi-globe-americas"></i>
                Select language
            </option>
            <option value="1">Español</option>
            <option value="2">English</option>
            <option value="3">-Otro lenguaje-</option>
        </select>
        <button id="rm-cookie">
            <i class="bi bi-cookie"></i>
            <span>Reset cookies</span>
        </button>
    </div>
    <div>
        <h3>NAVIGATION</h3>
        <ul class="footer-columns">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Investor Relation</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Help Centre</a></li>
        </ul>
    </div>
    <div>
        <h3>LEGAL</h3>
        <ul class="footer-columns">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Cookie Preferences</a></li>
            <li><a href="#">Corporate Information</a></li>
        </ul>
    </div>
    <div>
        <h3>TALK TO US</h3>
        <ul class="footer-columns">
            <li><a href="#">support@ercom.com</a></li>
            <li><a href="#">+66 2399 1145</a></li>
        </ul>
    </div>
    <div>
        <h3>FOLLOW US</h3>
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
        let xhr = new XMLHttpRequest();
        const lang = event.target.value;
    })
</script>