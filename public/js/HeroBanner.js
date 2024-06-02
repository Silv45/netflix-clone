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