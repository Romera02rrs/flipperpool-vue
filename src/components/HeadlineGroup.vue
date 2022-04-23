<template>
  <div v-if="orientationBool" class="hgroup-left">
    <h4 v-html="sectionSubTitle"></h4>
    <h3 v-html="sectionTitle"></h3>
  </div>

  <div v-else class="hgroup-right">
    <h4 v-html="sectionSubTitle"></h4>
    <h3 v-html="sectionTitle"></h3>
  </div>
</template>

<script>
export default {
  props: {
    sectionTitle: {
      type: String,
    },
    sectionSubTitle: {
      type: String,
    },
    orientation: {
      type: String,
      default: 'left',
    },
  },
  data() {
    return {
      orientationBool: this.calculateOrientation()
    }
  },
  methods: {
    calculateOrientation() {
      return this.orientation === 'left'
    }
  }
};
</script>

<style scoped>
.hgroup-left {
  margin-bottom: 10px;
  margin-left: var(--main-margin-sides);
}

.hgroup-right {
  margin-bottom: 10px;
  margin-right: var(--main-margin-sides);
  text-align: right;
}

h4 {
  color: #000000;
  font-family: Default-Light;
  font-size: 15px;
}

h3 {
  font-family: Default-Bold;
  font-size: 24px;
  color: var(--main-color);
}
</style>