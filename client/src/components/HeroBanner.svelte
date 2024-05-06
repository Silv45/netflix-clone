<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
    import { onMount } from "svelte";
    import type IMedia from "../lib/interfaces/IMedia";
    import { toTextDuration } from "../lib/Helpers";

    let media: IMedia = {
        title: "La La Land",
        synopsis: "",
        duration: 128,
        type: "movie",
        year: 2016,
        genres: ["Musical", "Romance"],
        imgSrc: { horizontal: "/media/img/horizontal/lalaland.jpg", vertical: "/media/img/vertical/lalaland.jpg" },
    };

    const breakpoints: { [key: string]: number } = {
        "sm": 640,

        "md": 768,

        "lg": 1024,

        "xl": 1280,

        "2xl": 1536,
    };

    function viewportImg() {
        const bottom = document.getElementById("bottom") as HTMLDivElement;

        if (window.innerWidth < breakpoints.md) {
            bottom.style.backgroundImage = media.imgSrc.vertical;
        } else {
            bottom.style.backgroundImage = media.imgSrc.horizontal;
        }
    }

    function separateGenres(genres: string | string[]) {
        if (typeof genres == "string") {
            return genres;
        } else {
            return genres.join("/");
        }
    }

    onMount(() => {
        viewportImg();
        window.addEventListener("resize", viewportImg);
    });
</script>

<!-- END TYPESCRIPT -->

<!-- BEGIN HTML -->
<div id="hero-container" class="relative w-full aspect-[4/6] md:aspect-[10/4]">
    <div id="bottom" class="absolute top-0 left-0 w-full h-full z-0 bg-cover bg-center bg-no-repeat overflow-hidden"></div>
    <div id="middle" class="absolute top-0 left-0 w-full h-full z-10 bg-black opacity-15 hover:opacity-50 duration-200"></div>
    <div id="top" class="absolute top-0 left-0 w-full h-full z-20 pointer-events-none grid grid-flow-row p-4">
        <div></div>
        <div id="slider-buttons" class="w-full h-full flex md:px-4 justify-bewteen items-center text-4xl text-neutral-200">
            <div class="flex-1 flex justify-start pointer-events-auto">
                <button class="hover:text-neutral-400 active:text-neutral-500 p-2 rounded-full">
                    <i class="bi bi-caret-left-fill"></i>
                </button>
            </div>
            <div class="flex-1 flex justify-end pointer-events-auto">
                <button class="hover:text-neutral-400 active:text-neutral-500 p-2 rounded-full">
                    <i class="bi bi-caret-right-fill"></i>
                </button>
            </div>
        </div>
        <div id="movie info">
            <h2>{media.title}</h2>
            <p>
                <span>{media.year}</span>
                &nbsp;|&nbsp;
                <span>{separateGenres(media.genres)}</span>
                &nbsp;|&nbsp;
                <span>{toTextDuration(media.duration)}</span>
            </p>
        </div>
    </div>
</div>
<!-- END CSS -->

<!-- END HTML -->
