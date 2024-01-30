<template>
    <div>
        <h1>Форма</h1>
        <form @submit.prevent="submitForm">
            <label for="name">Имя:</label>
            <input type="text" id="name" v-model="name" required>
            <br>
            <label for="salutation">Обращение:</label>
            <input type="text" id="salutation" v-model="salutation" required>
            <br>
            <button type="submit">Отправить</button>
        </form>

        <router-link :to="{name: 'ListPage'}">Страница списка</router-link>
    </div>
</template>

<script>
import {mapActions, mapGetters} from 'vuex';

export default {
    data() {
        return {
            name: '',
            salutation: '',
        };
    },
    computed: {
        ...mapGetters(['forms'])
    },
    methods: {
        ...mapActions(['addForm']),
        submitForm() {
            axios.post('/api/form/send', { name: this.name, salutation: this.salutation })
                .then(response => {
                    // Сохраните данные формы в локальном хранилище Vuex
                    this.$store.commit('addForm', response.data);
                    this.name = '';
                    this.salutation = '';
                    console.log(this.$store.state.forms)
                });
        },
    },
};
</script>
