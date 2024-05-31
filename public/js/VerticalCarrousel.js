function carrousel(carrouselName) {
    const prev = document.getElementById("prev-" + carrouselName);
    const next = document.getElementById("next-" + carrouselName);
    const carrousel = document.getElementById("carrousel-wrapper-" + carrouselName);
    const container = document.getElementById("carrousel-container-" + carrouselName);

    let cardWidth = parseFloat(window.getComputedStyle(Array.from(document.getElementsByClassName("carrousel-card-v"))[0]).getPropertyValue("width").replace("px", ""));
    let gapWidth = parseFloat(window.getComputedStyle(carrousel).getPropertyValue("row-gap").replace("px", ""));
    let carrouselWidth = parseFloat(window.getComputedStyle(carrousel).getPropertyValue("width").replace("px", ""));
    let carrouselHeight = parseFloat(window.getComputedStyle(carrousel).getPropertyValue("height").replace("px", ""));
    let containerHeight = parseFloat(window.getComputedStyle(container).getPropertyValue("height").replace("px", ""));

    let width = cardWidth + gapWidth;
    let cardCount = Array.from(document.getElementsByClassName("carrousel-card-v")).length;

    let offset = 0;

    container.style.height = (containerHeight + carrouselHeight) + "px";

    prev.addEventListener("click", () => {
        if (offset + width <= 0) {
            offset += width;
            setOffset();
        }
    })

    next.addEventListener("click", () => {
        if (offset - width >= -width * cardCount) {
            offset -= width;
            setOffset();
        }
    });

    function setOffset() {
        console.log(offset);
        if (offset <= 0 && offset >= -width * cardCount) {
            carrousel.style.transform = "translateX(" + offset + "px)";
        }
    
    }
}

carrousel("1");
carrousel("2");
carrousel("3");