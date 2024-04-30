import "./assets/global.css";
import "bootstrap-icons/font/bootstrap-icons.min.css";
import App from "./App.svelte";

const app = new App({
    target: document.getElementById("app") as HTMLElement
});

export default app;