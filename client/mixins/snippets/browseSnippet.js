import { orderBy as _orderBy } from "lodash";

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
  }
};
