<template>
  <div class="container mt-16">
    <a href="" @click.prevent="submit">sign in</a>
  </div>
</template>

<script>
export default {
  methods: {
    async submit() {
      await this.$auth.loginWith("local", {
        data: {
          email: "test@test.ee",
          password: "password"
        }
      });
    }
  }
};
</script>
