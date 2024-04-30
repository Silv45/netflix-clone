<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
</script>

<!-- END TYPESCRIPT -->

<!-- BEGIN HTML -->
<div id="banner-wrapper" class="w-full h-fit">
    <div id="hero-banner" class="w-full aspect-[10/4] relative">
        <div id="bottom" class="w-full h-full absolute top-0 left-0 z-0 overflow-hidden"></div>
        <div id="middle"
            class="w-full h-full absolute top-0 left-0 z-10 bg-black opacity-30 hover:opacity-50 duration-200"></div>
        <div id="top" class="w-full h-full absolute top-0 left-0 z-20 pointer-events-none flex flex-col justify-between px-4">
            <div class="flex-1">
                &nbsp;
            </div>
            <div id="carousel-buttons" class="w-full justify-self-center flex justify-between flex-1">
                <button id="backward" class="pointer-events-auto">
                    <i class="bi bi-arrow-left-circle-fill text-6xl"></i>
                </button>
                <button id="forward" class="pointer-events-auto">
                    <i class="bi bi-arrow-right-circle-fill text-6xl"></i>
                </button>
            </div>
            <div id="info-container" class="w-full justify-self-end flex flex-col justify-end my-6 flex-1">
                <div id="banner-info" class="flex flex-col max-w-lg">
                    <h1 class="text-8xl font-semibold mb-4">
                        La La Land
                    </h1>
                    <span class="text-lg mb-4">2016 | Public | Static | Void</span>
                    <div id="interaction-buttons" class="flex items-center">
                        <button class="py-4 px-6 mr-8 text-xl bg-violet-600 hover:bg-violet-700 active:bg-violet-800 text-white duration-150 rounded-lg pointer-events-auto">
                            Ver ahora
                        </button>
                        <button class="py-4 px-6 ml-8 text-xl bg-neutral-400 hover:bg-neutral-500 active:bg-neutral-600 text-white duration-150 rounded-lg pointer-events-auto">
                            Mi lista <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END CSS -->

<!-- END HTML -->

<!-- BEGIN CSS -->
<style>
    #bottom {
        background-image: url("media/img/la_la_land_banner.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
