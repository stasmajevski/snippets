<template>
  <div class="bg-white flex items-center py-8 lg:py-0">
    <div class="container flex flex-wrap items-center lg:flex-no-wrap">
      <nuxt-link :to="{ name: 'home' }" class="mr-10 flex-shrink-0">
        <img src="~/assets/logo.svg" alt="Logo" class="h-8" />
      </nuxt-link>

      <a
        href="#"
        class="lg:hidden ml-auto"
        @click.prevent="mobileNavOpen = !mobileNavOpen"
        >Open</a
      >

      <div
        class="w-full flex"
        :class="{ 'hidden lg:flex': !mobileNavOpen, 'mt-8': mobileNavOpen }"
      >
        <ul class="lg:h-24 lg:flex items-center w-full lg:w-auto">
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
              >Browse</nuxt-link
            >
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
              >Search</nuxt-link
            >
          </li>
        </ul>
        <ul
          class="lg:h-24 lg:flex items-center ml-auto text-right w-full lg:w-auto"
        >
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
              >Dashboard</nuxt-link
            >
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
              >Stanislav</nuxt-link
            >
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
              >Sign in</nuxt-link
            >
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
              >Create an account</nuxt-link
            >
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:py-8 lg:px-4"
              >Sign out</nuxt-link
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      mobileNavOpen: false
    };
  }
};
</script>
