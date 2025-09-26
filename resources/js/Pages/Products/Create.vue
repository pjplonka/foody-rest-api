<template>
    <form @submit.prevent="submit">
        <label for="name">Name</label>
        <input type="text" id="name" v-model="form.name" />
        <label for="price">Cena</label>
        <input type="text" id="price" v-model="form.price" />
        <button type="submit">Submit</button>
    </form>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name: "",
    price: "",
});
const submit = () => {
    form.post("/products");
};
</script>
<style lang="scss" scoped></style>
