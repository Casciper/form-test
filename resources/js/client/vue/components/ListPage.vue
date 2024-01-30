<template>
    <div>
        <h1>Сохраненные формы</h1>
        <ul v-if="forms && Object.keys(forms).length">
            <li v-for="form in forms" :key="form.id">
                Name:{{ form.data.name }}<br>
                Salutation:{{ form.data.salutation }}<br>
                FabricType: {{ form.message }}<br>
                ---------------------------
            </li>
        </ul>
        <div v-else> Список форм пуст </div><br>
    </div>
    <router-link :to="{name: 'FormPage'}">Страница формы</router-link>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
    computed: {
        ...mapGetters(['forms'])
    }
}
</script>
