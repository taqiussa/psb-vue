<script setup>
import { Head, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

defineProps({
    users: {},
});

const form = useForm({
    email: "",
    selects: "",
});

let myselects = ref();
</script>

<script>
import Layout from "@/Layouts/Layout.vue";

export default{
    layout:Layout
};
</script>
<template>
    <Head title="Home" />

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="min-h-screen p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg lg:grid lg:grid-cols-2 lg:gap-4"
            >
                <div>
                    <v-select
                        v-model="myselects"
                        :options="users"
                        placeholder="Pilih User"
                    />
                </div>
                <div><span v-text="myselects"></span></div>
            </div>
        </div>
    </div>
</template>
