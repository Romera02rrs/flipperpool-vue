<template>
  <hgroup>
    <h4 v-html="sectionSubTitle"></h4>
    <h3 v-html="sectionTitle"></h3>
  </hgroup>
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
  },
};
</script>

<style scoped>
hgroup {
  margin-bottom: 10px;
  margin-left: var(--main-margin-sides);
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