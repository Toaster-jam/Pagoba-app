<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

<script setup>
const posts = [
  {
    id: 1,
    name: 'user 1',
    href: '#',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg',
    imageAlt: "GIF 1",
    text: 'Thought this was funny',
  },
  {
    id: 2,
    name: 'user 2',
    href: '#',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg',
    imageAlt: "GIF 2",
    text: 'Love thissss',
  },
  // More posts...
]
</script>

<template>
  <div class="bg-white mt-6">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Explore Feed</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10">
        <div v-for="post in posts" :key="post.id" class="group relative">
          
          <div class="flex between">
            <div class="aspect-h-1 aspect-w-1 w-40 overflow-hidden rounded-md bg-gray-500 lg:aspect-none group-hover:opacity-75 lg:h-40">
                <img :src="post.imageSrc" :alt="post.imageAlt" class="h-40 w-40 object-cover object-center lg:h-40 lg:w-40" />
            </div>
            <div class="px-3">
              <h3 class="text-lg text-gray-900">
                <a :href="post.href">
                  <span aria-hidden="true" class="absolute inset-0" />
                  {{ post.name }}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-700">{{ post.text }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>