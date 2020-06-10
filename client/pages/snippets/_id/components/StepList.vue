<template>
  <ul>
    <li class="mb-1" v-for="(step, index) in steps" :key="index">
      <nuxt-link
        :class="{ 'font-bold': currentStep.uuid === step.uuid }"
        :to="{
          query: {
            step: step.uuid
          }
        }"
        >{{ index + 1 }}. {{ step.title }}</nuxt-link
      >
    </li>
  </ul>
</template>

<script>
export default {
  props: {
    steps: {
      required: true,
      type: Array
    },

    currentStep: {
      required: true,
      type: Object
    }
  }
};
</script>
