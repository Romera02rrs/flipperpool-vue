<template>
  <section>
    <headline-group sectionTitle="Una larga experiencia<br>en el sector"
      sectionSubTitle="La mayor calidad y durabilidad a su alcance" orientation="right" />
    <div class="image-container">
      <img src="../assets/levantar.jpg">
      <div class="content">
        <h5>Construímos piscinas<br>desde 1991</h5>
      </div>
    </div>
  </section>
</template>

<script>
import HeadlineGroup from "@/components/HeadlineGroup.vue";
export default {
  components: { HeadlineGroup },
};
</script>

<style scoped>
.image-container {
  width: 100%;
  min-height: 300px;
  max-height: 80vh;
  height: 70vw;
  filter: brightness(90%);
  position: relative;
}

img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
}

.content {
  position: absolute;
  width: 75%;
  height: 50%;
  background-color: var(--main-faded-color);
  z-index: 2;
  left: calc(50% - (75% / 2));
  top: calc(50% - (50% / 2));
  display: flex;
  justify-content: center;
  align-items: center;
}

h5 {
  text-align: center;
  font-size: var(--font-size-4);
  /*TODO: No usar medidas absoultas*/
  color: white;
  margin: 15px;
  line-height: var(--font-size-3);
}
</style>