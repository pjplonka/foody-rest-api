<template>
    <form @submit.prevent="submit">
        <label for="name">Name</label>
        <input type="text" id="name" v-model="form.name" />
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
});

onMounted(() => {
    form.name = props.item.name;
});

const submit = () => {
    form.patch(`/meals/${props.item.id}`)
};
</script>
<style lang="scss" scoped></style>
