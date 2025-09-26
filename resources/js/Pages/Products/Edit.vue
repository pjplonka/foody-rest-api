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
import { onMounted } from "vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    item: {
        type: Object,
        default: null,
    },
});

const form = useForm({
    name: "",
    price: "",
});

onMounted(() => {
    console.log(props.item)
    form.name = props.item.name;
    form.price = props.item.price;
});

const submit = () => {
    form.patch(`/products/${props.item.id}`)
};
</script>
<style lang="scss" scoped></style>
