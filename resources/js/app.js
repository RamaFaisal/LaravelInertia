import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import '../css/app.css';
import Layout from "./Shared/Layout.vue";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue"); //{ eager: true }
        // let page = pages[`./Pages/${name}.vue`];
        // page.default.layout = page.default.layout || Layout;
        // return page;
        return pages[`./Pages/${name}.vue`]();
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },

    title : (title) => `${title} - Inertia`,
    // progress: {
    //     delay: 250,
    //     color: "#4B5563",
    //     includeCSS: true,
    //     showSpinner: true,
    // },
});
