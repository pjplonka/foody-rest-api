<template>
    <MainLayout>
        <Link href="meals/create">Create new Meal</Link>

        <div>
            <h1>My Inertia CRUD</h1>
            <table>
                <thead>
                <tr>
                    <th v-for="header in headers" :key="header">
                        {{ header }}
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in collection" :key="item.id">
                    <td>{{ item.name }}</td>
                    <td><Link :href="'meals/' + item.id + '/edit'">Edytuj</Link></td>
                    <td><button @click="deletePost(item.id)">Delete</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </MainLayout>
</template>

<script setup>
import {Link, useForm} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
    collection: {
        type: Array,
        default: () => [],
    },
});

const headers = ["Nazwa"];

const form = useForm({});

const deletePost = (id) => {
    form.delete(`meals/${id}`);
};
</script>
