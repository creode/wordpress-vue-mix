import { createApp } from 'vue';
import Alert from './Alert.vue';

addEventListener("DOMContentLoaded", (event) => {
    var dom = document.getElementById('content');
    const app = createApp({
        components: {
            Alert
        }
    }).mount(dom);
});
