import { orderBy as _orderBy } from "lodash";
import hotkeys from "hotkeys-js";

export default {
  computed: {
    orderedStepsAsc() {
      return _orderBy(this.steps, "order", "asc");
    },

    orderedStepsDesc() {
      return _orderBy(this.steps, "order", "desc");
    },

    firstStep() {
      return this.orderedStepsAsc[0];
    },

    currentStep() {
      return (
        this.orderedStepsAsc.find(
          step => step.uuid === this.$route.query.step
        ) || this.firstStep
      );
    },

    currentStepIndex() {
      return this.orderedStepsAsc
        .map(step => step.uuid)
        .indexOf(this.currentStep.uuid);
    },

    nextStep() {
      return (
        this.orderedStepsAsc.find(
          step => step.order > this.currentStep.order
        ) || null
      );
    },

    previousStep() {
      return (
        this.orderedStepsDesc.find(
          step => step.order < this.currentStep.order
        ) || null
      );
    }
  },

  mounted() {
    this.registerKeyboardShortcuts();
  },

  methods: {
    goToStep(step) {
      this.$router.push({
        query: {
          step: step.uuid
        }
      });
    },

    registerKeyboardShortcuts() {
      // Key Combination
      hotkeys("ctrl+shift+left,ctrl+shift+right", function(event, handler) {
        switch (handler.key) {
          case "ctrl+shift+left":
            if (this.previousStep) {
              this.goToStep(this.previousStep);
            }
            break;
          case "ctrl+shift+right":
            if (this.nextStep) {
              this.goToStep(this.nextStep);
            }
            break;
        }
      });
    }
  }
};
