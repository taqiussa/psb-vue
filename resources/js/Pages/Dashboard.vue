<script setup>
import { Head } from "@inertiajs/inertia-vue3";
</script>
<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout
};
</script>
<template>
    <Head title="Dashboard" />
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">You're logged in!</div>
            </div>
        </div>
    </div>
</template>
