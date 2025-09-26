<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        Menu:
        <ul>
            <li><Link href="/products">Produkty</Link></li>
            <li><Link href="/meals">Posiłki</Link></li>
        </ul>

        <hr class="mb-10">

        <main>
            <slot />
        </main>
    </div>
</template>
