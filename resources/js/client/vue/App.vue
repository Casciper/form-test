<template>
    <router-view></router-view>
</template>

<script>
import FormPage from './components/FormPage.vue';
import ListPage from './components/ListPage.vue';

export default {
    name: 'App',
    components: {
        FormPage,
        ListPage,
    },
};
</script>
