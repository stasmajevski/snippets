<template>
  <SnippetCard :snippet="snippet">
    Links
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
