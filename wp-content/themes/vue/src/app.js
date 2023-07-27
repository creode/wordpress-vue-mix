import { createApp } from 'vue';
import Alert from './Alert.vue';
import BaseCard from "./UI/BaseCard.vue";
import BlogListing from "./Blog/BlogListing.vue";
import BlogListingItem from "./Blog/BlogListingItem.vue";
import BlogCategories from "./Blog/BlogCategories.vue";
import { Teaser } from 'vue3-customised-component-library';

addEventListener("DOMContentLoaded", (event) => {
    var dom = document.getElementById("content");

    const app = createApp({
        components: {
            Alert,
            BlogListing,
            BlogListingItem,
            BlogCategories,
            Teaser,
        },
    });

    app.component("base-card", BaseCard);

    app.mount(dom);
});
