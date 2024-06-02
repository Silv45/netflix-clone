<div id="hero-container">
    <div id="hero-wrapper">
        <button class="hero-slider" id="hero-prev">
            <i class="bi bi-caret-left-fill"></i>
        </button>
        <button class="hero-slider" id="hero-next">
            <i class="bi bi-caret-right-fill"></i>
        </button>
        <ul id="hero-banner">
            <li class="slide" data-active>
                <img src="public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
            </li>
            <li class="slide">
                <img src="public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
            </li>
            <li class="slide">
                <img src="public/media/img/posters/horizontal/la-la-land.jpg" alt="La la land">
            </li>
        </ul>
    </div>
</div>

<script>
    const buttons = document.getElementsByClassName("hero-slider");

    for(let button of buttons) {
        button.addEventListener("click", () => {
            const offset = button.id === "hero-next" ? 1 : -1;
            const slides = document.getElementById("hero-banner");

            const active = slides.querySelector("[data-active]");

            let newIndex = [...slides.children].indexOf(active) + offset
            if (newIndex < 0) newIndex = slides.children.length - 1
            if (newIndex >= slides.children.length) newIndex = 0

            slides.children[newIndex].dataset.active = true
            delete active.dataset.active
        });
    }
</script>

<style>

</style>