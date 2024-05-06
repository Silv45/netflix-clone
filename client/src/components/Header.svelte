<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
    import { onMount } from "svelte";
    import { Link } from "svelte-routing";
    import SiteLogo from "./SiteLogo.svelte";

    const breakpoints: { [key: string]: number } = {
        "sm": 640,

        "md": 768,

        "lg": 1024,

        "xl": 1280,

        "2xl": 1536,
    };

    function toggleNavbar() {
        const navbar = document.getElementById("header-navbar") as HTMLElement;

        navbar.classList.toggle("hidden");
        navbar.classList.toggle("grid");
    }

    function resizeEvents() {
        const navbar = document.getElementById("header-navbar") as HTMLElement;
        const searchbox = document.getElementById("search") as HTMLInputElement;

        if (window.innerWidth < breakpoints.md) {
            navbar.classList.add("hidden");
            navbar.classList.remove("grid");
        } else {
            navbar.classList.add("grid");
            navbar.classList.remove("hidden");
        }

        if (window.innerWidth < breakpoints.lg) {
            searchbox.placeholder = "";
            searchbox.style.width = "40px";
        } else {
            searchbox.placeholder = "Búsqueda";
            searchbox.style.width = "initial";
        }
    }

    onMount(() => {
        resizeEvents();
        window.addEventListener("resize", resizeEvents);
    });
</script>

<!-- END TYPESCRIPT -->

<!-- BEGIN HTML -->
<header id="website-header" class="flex justify-between items-center px-4 lg:px-12 py-2 bg-gradient-to-r from-stone-700 from-60% to-purple-900 text-neutral-200 sticky top-0 z-50">
    <div id="navbar-container" class="flex items-center">
        <div id="logo-wrapper" class="mr-4 lg:mr-12">
            <SiteLogo />
        </div>
        <button class="text-xl px-2 py-1" on:click={toggleNavbar}>
            <i id="dropdown" class="bi bi-list inline md:hidden horizontal ease-in-out duration-200"></i>
        </button>
        <nav id="header-navbar" class="bg-stone-700 top-20 left-16 rounded md:rounded-0 absolute md:static md:grid grid-flow-row md:grid-flow-col gap-x-12 ml-4 lg:ml-12">
            <Link to="/movies" class="text-xl block md:inline hover:bg-stone-800 active:bg-stone-900 py-2 px-4 rounded duration-150">Películas</Link>
            <Link to="/series" class="text-xl block md:inline hover:bg-stone-800 active:bg-stone-900 py-2 px-4 rounded duration-150">Series</Link>
        </nav>
    </div>

    <div class="grid grid-flow-col items-center gap-8">
        <div id="searchbox" class="flex flex-row-reverse items-center rounded-lg bg-neutral-800">
            <input
                type="text"
                name="search"
                id="search"
                class="flex-1 bg-transparent text-neutral-200 focus:outline-none py-1 px-2 text-lg"
                placeholder="Búsqueda"
            />
            <button type="submit" class="mx-1 px-1">
                <i class="bi bi-search"></i>
            </button>
        </div>
        <div id="notification-wrapper">
            <button id="notifications" class="px-2 py-1">
                <i class="bi bi-bell text-xl"></i>
            </button>
        </div>
        <div id="profile-wrapper">
            <div id="profile" class="rounded-full overflow-hidden bg-center w-auto h-[60px] aspect-square">
                <img src="https://via.placeholder.com/60" alt="Someone's profile" id="profile-picture" class="w-full h-full" />
            </div>
        </div>
    </div>
</header>

<!-- END CSS -->

<!-- END HTML -->
