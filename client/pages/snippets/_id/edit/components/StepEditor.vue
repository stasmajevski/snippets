<template>
  <div>
    <textarea ref="textarea"> </textarea>
    <div class="bg-white p-8 rounded-lg text-gray-600">
      <StepMarkdown :value="step.body" />
    </div>
  </div>
</template>

<script>
import StepMarkdown from "@/components/snippets/StepMarkdown";

export default {
  components: {
    StepMarkdown
  },

  data() {
    return {
      codeMirror: null
    };
  },

  props: {
    step: {
      required: true,
      type: Object
    }
  },

  watch: {
    "step.uuid"() {
      this.document.setValue(this.step.body);
    }
  },

  computed: {
    document() {
      return this.codeMirror.getDoc();
    }
  },

  mounted() {
    let CodeMirror = require("codemirror");
    this.codeMirror = CodeMirror.fromTextArea(this.$refs.textarea, {
      indentUnit: 2,
      indentWithTabs: false,
      smartIndent: true,
      lineWrapping: true,
      lineNumbers: false,
      scrollbarStyle: null,
      extraKeys: {
        Tab: codemirror => codemirror.execCommand("indentMore"),
        "Shift-Tab": codemirror => codemirror.execCommand("indentLess")
      }
    });

    this.document.setValue(this.step.body);
    this.document.on("change", document => {
      this.$emit("input", document.getValue());
    });
  }
};
</script>

<style lang="scss">
.CodeMirror {
  @apply font-sans text-base w-full max-w-full border-gray-400 border-dashed border-2 rounded-lg mb-6 p-8;
}
</style>
