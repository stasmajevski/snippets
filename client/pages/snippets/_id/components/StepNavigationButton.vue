<template>
  <nuxt-link
    :to="
      step
        ? {
            query: {
              step: step.uuid
            }
          }
        : {}
    "
    class="block mb-2 p-3 bg-blue-500 rounded-lg mr-2 lg:mr-0"
    :class="{
      'opacity-25 pointer-events-none': !step
    }"
  >
    <slot />
  </nuxt-link>
</template>

<script>
export default {
  props: {
    step: {
      required: true
    }
  }
};
</script>
