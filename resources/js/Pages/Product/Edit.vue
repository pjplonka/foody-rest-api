<script setup>
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import { Head } from '@inertiajs/vue3';
import AntyAuthenticatedLayout from "@/Layouts/AntyAuthenticatedLayout.vue";
import UpdateProductForm from "@/Pages/Product/Partials/UpdateProductForm.vue";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Profile" />

    <AntyAuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Product
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <div
                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8"
                >
                    <UpdateProductForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

<!--                <div-->
<!--                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8"-->
<!--                >-->
<!--                    <UpdatePasswordForm class="max-w-xl" />-->
<!--                </div>-->

                <div
                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8"
                >
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AntyAuthenticatedLayout>
</template>
