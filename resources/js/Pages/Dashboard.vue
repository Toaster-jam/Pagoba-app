<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GifFeed from '@/Components/GifFeed.vue';
import { Head } from '@inertiajs/vue3';

defineProps (['posts'])
</script>

<template>
    <Head title="Feed" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Feed</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>

                <GifFeed/>

            </div>
        </div>

        <div>
            
        </div>
    </AuthenticatedLayout>
</template>
