<template>
    <form @submit.prevent="submit">
        <br>
        <label for="name">Name</label>
        <input type="text" id="name" v-model="form.name" />

        <br>

        <button
            type="button"
            class="flex justify-start ml-2 rounded-md border px-3 py-2 bg-pink-600 text-white"
            @click="addMore()"
        >
            Add More
        </button>

        <select name="ingredient" id="ingredient">
            <option value="">--Please choose an option--</option>
            <option value="1">Mleko</option>
            <option value="2">Twaróg</option>
        </select>

        <div v-for="(ingredient, index) in form.ingredients" :key="index">
            siema
            <div class="flex justify-start ml-2 mt-4">

                <select name="ingredient" id="ingredient" v-model="form.ingredients[index].name">
                    <option value="">--Please choose an option--</option>
                    <option value="1">Mleko</option>
                    <option value="2">Twaróg</option>
                </select>

                <input
                    v-model="ingredient.courseName"
                    placeholder="enter you course name"
                    class="w-full py-2 border border-indigo-500 rounded"
                />

                <button
                    type="button"
                    class="ml-2 rounded-md border px-3 py-2 bg-red-600 text-white"
                    @click="remove(index)"
                    v-show="index != 0"
                >
                    Remove
                </button>
            </div>
        </div>

        <br>
        <button type="submit">Submit</button>
    </form>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";

// const ingredients = ref([])

const form = useForm({
    name: "",
    ingredients: []
});

const submit = () => {
    form.post("/meals");
};

const addMore = () => {
    form.ingredients.push({
        name: "",
    });
    console.log(form.ingredients)
};

const remove = () => {
    form.ingredients.splice(index, 1);
};

</script>
<style lang="scss" scoped></style>
