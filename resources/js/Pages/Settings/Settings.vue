<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import NavLink from '@/Components/NavLink.vue';

</script>

<template>
    <Head title="Settings" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Settings</h2>
        </template>
        
        <!--Notifications Button--> 
        <div class="flex justify-center"> 
            <div class="pt-3">
                <div class="sm:px-6 lg:px-8">
                    <div class="outline outline-1 outline-gray-300 w-96 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        Notifications
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center"> 
            <!--Account Privacy Button-->
            <div class="pt-3">
                <div class="sm:px-6 lg:px-8">
                    <div class="outline outline-1 outline-gray-300 w-96 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        Account Privacy
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center"> 
            <!--GIF+ Button-->
            <div class="pt-3">
                <div class="sm:px-6 lg:px-8">
                    <div class="outline outline-1 outline-gray-300 w-96 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 <!--text-center text-red-50-->">
                        Upgrade to GIF+
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center"> 
            <!--GIF+ Button-->
            <div class="pt-3">
                <div class="sm:px-6 lg:px-8">
                    <div class="outline outline-1 outline-gray-300 w-96 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 text-slate-950 text-base">
                        Network Settings
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center"> 
            <!--GIF+ Button-->
            <NavLink class="pt-3" :href="route('profile.edit')">
                <div class="sm:px-6 lg:px-8">
                    <div class="outline outline-1 outline-gray-300 w-96 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 text-slate-950 text-base">
                        Manage Profile
                    </div>
                </div>
            </NavLink>
        </div>
        <div class="flex justify-center"> 
            <!--GIF+ Button-->
            <div class="pt-3">
                <div class="sm:px-6 lg:px-8">
                    <div class="outline outline-1 outline-gray-300 w-96 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 <!--text-center text-red-50-->">
                        Logout
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center"> 
            <!--GIF+ Button-->
            <div class="pt-3">
                <div class="sm:px-6 lg:px-8">
                    <div class="outline outline-1 outline-gray-300 w-96 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        Delete Account
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>