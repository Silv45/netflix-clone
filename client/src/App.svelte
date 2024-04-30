<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
    import { Router, Route } from "svelte-routing";
    import HomeView from "./views/HomeView.svelte";
</script>
<!-- END TYPESCRIPT -->
    
<!-- BEGIN HTML -->
<div id="svelte">
    <Router>
        <Route path="/" component={HomeView}/>
    </Router>
</div>
<!-- END HTML -->
    
<!-- BEGIN CSS -->
<style>
    
</style>
<!-- END CSS -->