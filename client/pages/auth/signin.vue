<template>
  <div class="container mt-16">
    <div class="flex flex-col items-center">
      <h1 class="text-3xl text-gray-700 font-medium mb-10">
        Hello
      </h1>
      <form
        @submit.prevent="submit"
        action="#"
        class="bg-white p-8 rounded w-full md:w-6/12 lg:w-4/12 mb-6"
      >
        <div class="mb-6">
          <label
            :class="{
              'text-red-500': validation.email
            }"
            class="block text-gray-600 font-medium mb-2"
            for="email"
            >Email</label
          >
          <input
            :class="{
              'border-red-500': validation.email
            }"
            class="border-2 border-gray-400 rounded block w-full p-3"
            id="email"
            type="text"
            name="email"
            v-model="form.email"
          />
          <div
            v-if="validation.email"
            class="text-red-500 mb-4 text-sm mt-1 font-medium"
          >
            {{ validation.email[0] }}
          </div>
        </div>
        <div class="mb-6">
          <label
            :class="{
              'text-red-500': validation.password
            }"
            class="block text-gray-600 font-medium mb-2"
            for="password"
            >Password</label
          >
          <input
            :class="{
              'border-red-500': validation.password
            }"
            class="border-2 border-gray-400 rounded block w-full p-3"
            id="password"
            type="password"
            name="password"
            v-model="form.password"
          />
          <div
            v-if="validation.password"
            class="text-red-500 mb-4 text-sm mt-1 font-medium"
          >
            {{ validation.password[0] }}
          </div>
        </div>
        <div>
          <button
            type="submit"
            class="bg-blue-500 text-white p-4 rounded text-center font-medium block w-full"
          >
            Sign in
          </button>
        </div>
      </form>
      <div class="text-center text-gray-700">
        No account?
        <nuxt-link :to="{ name: 'index' }">Create an account</nuxt-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: "",
        password: ""
      },
      validation: {}
    };
  },

  head() {
    return {
      title: "Sign in"
    };
  },

  methods: {
    async submit() {
      try {
        await this.$auth.loginWith("local", {
          data: this.form
        });
      } catch (error) {
        if (error.response.status === 422) {
          this.validation = error.response.data.errors;
        }
      }
    }
  }
};
</script>
