<template>
  <div>
    <div class="bg-white mb-16">
      <div class="container py-10 pb-16">
        <div class="w-10/12">
          <h1 class="text-4xl text-gray-700 font-medium leading-tight mb-4">
            Snippet title
          </h1>
          <div class="text-gray-600">
            Created by
            <nuxt-link :to="{ name: 'index' }">
              Stanislav M
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h1 class="text-xl text-gra-600 font-medium mb-6">
        1/1. Step one
      </h1>
      <div class="flex flex-wrap lg:flex-no-wrap">
        <div
          class="w-full lg:w-8/12 lg:mr-16 flex flex-wrap lg:flex-no-wrap justify-between items-start mb-8"
        >
          <div class="order-first">
            <nuxt-link
              :to="{}"
              class="block mb-2 p-3 bg-blue-500 rounded-lg mr-2"
            >
              <svg
                class="fill-current text-white h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M5.41 11H21a1 1 0 0 1 0 2H5.41l5.3 5.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 1.4L5.4 11z"
                />
              </svg>
            </nuxt-link>
          </div>
          <div class="bg-white p-8 rounded-lg text-gray-600 w-full lg:mr-2">
            Markdown content
          </div>
          <div class="order-first lg:order-last flex flex-row lg:flex-col">
            <nuxt-link :to="{}" class="block mb-2 p-3 bg-blue-500 rounded-lg">
              <svg
                class="fill-current text-white h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"
                />
              </svg>
            </nuxt-link>
            <nuxt-link
              :to="{}"
              class="block mb-2 p-3 bg-blue-500 rounded-lg order-first lg:order-last mr-2 lg:mr-0"
              title="Edit step"
            >
              <svg
                class="fill-current text-white h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"
                />
              </svg>
            </nuxt-link>
          </div>
        </div>
        <div class="w-full lg:w-4/12">
          <div class="mb-8">
            <h1 class="text-xl text-gra-600 font-medium mb-6">
              Steps
            </h1>
            <ul>
              <li class="mb-1" v-for="(step, index) in 5" :key="index">
                <nuxt-link :class="{ 'font-bold': index === 0 }" :to="{}"
                  >{{ index + 1 }}. Step title</nuxt-link
                >
              </li>
            </ul>
          </div>
          <div class="text-gray-500 text-sm">
            Use
            <div
              class="inline-block px-2 rounded bg-gray-400 text-gray-600 text-sm leading-relaxed"
            >
              ctrl
            </div>
            +
            <div
              class="inline-block px-2 rounded bg-gray-400 text-gray-600 text-sm leading-relaxed"
            >
              shift
            </div>
            +
            <div
              class="inline-block px-2 rounded bg-gray-400 text-gray-600 text-sm leading-relaxed"
            >
              left or right
            </div>
            on your keyboard to navigate between steps
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
