<!-- BEGIN TYPESCRIPT -->
<script lang="ts">
    import { Link } from "svelte-routing";

    export let to: string = "/";
    export let bi: string = "bi-question-circle";
    export let text: string = "undefined";

</script>
<!-- END TYPESCRIPT -->
    
<!-- BEGIN HTML -->
    <Link to={to} class="w-full flex items-center px-4 hover:text-white duration-150 hover:bg-stone-900 py-4">
        <i class="bi {bi} text-2xl mr-2"></i>
        <span class="text-lg ml-2 font-semibold hidden md:inline">{ text }</span>
    </Link>
<!-- END HTML -->
    
<!-- BEGIN CSS -->
<style>
    
</style>
<!-- END CSS -->