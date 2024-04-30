<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
    import SiteLogo from "./SiteLogo.svelte";
    import { Link } from "svelte-routing";
</script>

<!-- END TYPESCRIPT -->

<!-- BEGIN HTML -->
<header
    id="website-header"
    class="sticky top-0 bg-gradient-to-r from-stone-800 from-60% to-violet-900 py-2 px-4 lg:px-16 flex items-center"
>
    <div id="navbar-wrappper" class="grid grid-flow-col items-center place-content-start gap-24">
        <div id="logo-wrapper">
            <SiteLogo />
        </div>
        <nav id="header-navbar" class="grid grid-flow-col gap-12">
            <button class="flex md:hidden">
                <i class="bi bi-list"></i>
            </button>
            <Link to="/movies" class="text-xl p-1 rounded duration-150 hover:bg-neutral-900 active:bg-neutral-950 hidden md:flex">Películas</Link>
            <Link to="/series" class="text-xl p-1 rounded duration-150 hover:bg-neutral-900 active:bg-neutral-950 hidden md:flex">Series</Link>
        </nav>
    </div>
    <div id="options-wrapper" class="grid grid-flow-col place-content-end items-center gap-8 flex-1">
        <div id="searchbox">
            <form
                action=""
                id="search"
                class="px-1 bg-neutral-800 rounded-lg flex flex-row-reverse items-center text-neutral-300"
            >
                <input
                    type="text"
                    name="explore"
                    id="explore"
                    placeholder="Búsqueda..."
                    class="px-2 bg-transparent focus:outline-none flex-1 text-lg py-1 w-fit md:w-100%"
                />
                <button type="submit" class="px-2">
                    <i class="bi bi-search text-lg"></i>
                </button>
            </form>
        </div>
        <button id="notifications">
            <i class="bi bi-bell text-2xl"></i>
        </button>
        <div id="profile-wrapper" class="rounded-full flex justify-center items-center overflow-hidden h-12 w-12">
            <img src="http://via.placeholder.com/60" alt="someone's profile" />
        </div>
    </div>
</header>

<!-- END HTML -->

<!-- BEGIN CSS -->
<style></style>
<!-- END CSS -->
