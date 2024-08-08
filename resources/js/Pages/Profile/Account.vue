<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DropDown from '@/Components/Dropdown.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, router } from '@inertiajs/vue3';
defineProps(['user']);
</script>

<template>
    <Head title="Account" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Account</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <div class="flex justify-between p-4">
                        <div class="p-2 text-gray-900">{{user.name}}</div>
                        
                        <PrimaryButton @click="router.visit(route('profile.edit'))">
                           Edit
                        </PrimaryButton>
                    </div>

                </div>
            </div>
        </div>
        <DropDown>

        </DropDown>

    </AuthenticatedLayout>
</template>