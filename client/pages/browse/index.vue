<template>
  <div>
    <div class="bg-white mb-16">
      <div class="container py-10 pb-16">
        <h1 class="text-4xl text-gray-700 font-medium leading-tight mb-4">
          Browse
        </h1>
      </div>
    </div>

    <div class="container">
      <h1 class="text-xl text-gray-600 font-medium mb-6">
        All snippets ({{ snippets.length }})
      </h1>

      <BrowseSnippetCard
        v-for="snippet in snippets"
        :key="snippet.uuid"
        :snippet="snippet"
      />
    </div>
  </div>
</template>

<script>
import BrowseSnippetCard from "./components/BrowseSnippetCard";

export default {
  components: {
    BrowseSnippetCard
  },

  data() {
    return {
      snippets: []
    };
  },

  async asyncData({ app }) {
    let snippets = await app.$axios.$get("snippets");

    return {
      snippets: snippets.data
    };
  }
};
</script>
