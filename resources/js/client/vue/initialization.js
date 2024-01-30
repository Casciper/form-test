import { createApp } from 'vue/dist/vue.esm-bundler';
import { store } from './store/store';
import router from "./router";
import App from './App.vue';


createApp(App).use(router).use(store).mount("#app");


