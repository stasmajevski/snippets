<template>
  <SnippetCard :snippet="snippet">
    <nuxt-link :to="{}">{{ snippet.author.data.name }}</nuxt-link>
  </SnippetCard>
</template>

<script>
import SnippetCard from "@/components/snippets/SnippetCard";

export default {
  components: {
    SnippetCard
  },

  props: {
    snippet: {
      required: true,
      type: Object
    }
  }
};
</script>
