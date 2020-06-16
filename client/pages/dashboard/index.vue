<template>
  <div class="container mt-16">
    <div class="flex justify-between">
      <h1 class="text-xl text-gray-600 font-medium mb-6">
        Your snippets ({{ snippets.length }})
      </h1>
      <a href="#" @click.prevent="createSnippet">Create a snippet</a>
    </div>

    <div v-if="snippets.length === 0" class="text-gray-500 font-medium">
      There are no snippets here. You know what to do.
    </div>

    <DashboardSnippetCard
      v-for="snippet in snippets"
      :key="snippet.uuid"
      :snippet="snippet"
    />
  </div>
</template>

<script>
import DashboardSnippetCard from "./components/DashboardSnippetCard";

export default {
  components: {
    DashboardSnippetCard
  },

  data() {
    return {
      snippets: []
    };
  },

  methods: {
    async createSnippet() {
      let snippet = await this.$axios.$post("snippets");

      this.$router.push({
        name: "snippets-id-edit",
        params: {
          id: snippet.data.uuid
        }
      });
    }
  },

  async asyncData({ app }) {
    let snippets = await app.$axios.$get("me/snippets");

    return {
      snippets: snippets.data
    };
  }
};
</script>
