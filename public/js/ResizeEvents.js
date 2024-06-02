const breakpoints = {
    "sm": 640,

    "md": 768,

    "lg": 1024,

    "xl": 1280,

    "2xl": 1536,
};

const content = document.getElementById("main-content");

function resizeEvents() {
    const navbar = document.getElementById("header-navbar");
    const searchbox = document.getElementById("search");

    if (window.innerWidth < breakpoints.md) {
        navbar.style.display = "none";
    } else {
        navbar.style.display = "grid";
    }

    if (window.innerWidth < breakpoints.lg) {
        searchbox.placeholder = "";
        searchbox.style.width = "40px";
    } else {
        searchbox.placeholder = "Búsqueda";
        searchbox.style.width = "initial";
    }
}

resizeEvents();

window.addEventListener("resize", resizeEvents);