<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
    import SidebarItem from "./SidebarItem.svelte";
</script>
<!-- END TYPESCRIPT -->
    
<!-- BEGIN HTML -->
<aside class="bg-stone-700 xl:w-[200px] py-8 ">
    <div id="floating-sidebar" class="float-left rounded-[1.5rem] py-4 bg-gradient-to-b from-stone-800 from-10% to-violet-900 sticky top-24 h-[80vh] w-full flex flex-col justify-between">
        <div class="sidebar-section">
            <SidebarItem to="/" bi="bi-film" text="Inicio"/>
            <SidebarItem to="/list" bi="bi-plus-lg" text="Mi Lista"/>
            <SidebarItem to="/categories" bi="bi-graph-up-arrow" text="Categorías"/>
            <SidebarItem to="/featured" bi="bi-calendar" text="Novedades"/>
        </div>
        <div class="sidebar-section">
            <SidebarItem to="/friends" bi="bi-person-add" text="Amigos"/>
            <SidebarItem to="/social" bi="bi-chat" text="Social"/>
        </div>
        <div class="sidebar-section">
            <SidebarItem to="/settings" bi="bi-sliders2-vertical" text="Ajustes"/>
            <SidebarItem to="/logout" bi="bi-box-arrow-right" text="Logout"/>
        </div>


    </div>
    
</aside>
<!-- END HTML -->
    
<!-- BEGIN CSS -->
<style>
    
</style>
<!-- END CSS -->