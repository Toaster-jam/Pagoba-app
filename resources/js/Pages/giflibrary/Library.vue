<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="GIF Library" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">GIF Library</h2>
        </template>

        
        <div class="px-8 mt-12 flex justify-center">
          <input id="email" name="email" type="email" autocomplete="email" placeholder="Search" required 
                class="block w-1/2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>

        <div class="px-8">
            <div class="pt-4 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="pt-4 pt-4 flex justify-end">
                    <div class="p-4 w-96 h-72 bg-white shadow-sm sm:rounded-lg text-neutral-900 flex justify-center items-center">
                        Your GIFs!
                    </div>
                </div>

                <div class="pt-4 pt-4 flex justify-start">
                    <div class="p-4 w-96 h-72 bg-white shadow-sm sm:rounded-lg text-neutral-900 flex justify-center items-center">
                        Popular GIFs!
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

