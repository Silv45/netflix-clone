<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
    import Header from "../components/Header.svelte";
    import HeroBanner from "../components/HeroBanner.svelte";
    import FeatureSidebar from "../components/FeatureSidebar.svelte";
</script>
<!-- END TYPESCRIPT -->
    
<!-- BEGIN HTML -->
<div id="home-view" class="min-h-screen flex flex-col">
    <Header/>
    <main id="page-content" class="flex flex-1">
        <FeatureSidebar/>
        <HeroBanner/>
    </main>
</div>
<!-- END HTML -->
    
<!-- BEGIN CSS -->
<style>
    
</style>
<!-- END CSS -->