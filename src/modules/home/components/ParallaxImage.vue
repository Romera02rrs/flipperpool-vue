<template>
  <section>
    <headline-group
      sectionTitle="Una larga experiencia<br>en el sector"
      sectionSubTitle="La mayor calidad y durabilidad a su alcance"
      orientation="right"
    />
    <div class="image-container">
      <img src="../assets/02.jpg">
      <div class="content">
        <h5>Construímos mas de 30 piscinas anuales</h5>
      </div>
    </div>
  </section>
</template>

<script>
import HeadlineGroup from "@/components/HeadlineGroup.vue";
import Header from '@/components/Header.vue';
export default {
  components: { HeadlineGroup },
};
</script>

<style scoped>

.image-container {
  with: 100%;
  height: 300px;
  filter: brightness(90%);
  position: relative;
}

img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.content {
  position: absolute;
  width: 75%;
  height: 50%;
  background-color: #8cccffaa;
  z-index: 2;
  left: calc(50% - (75% / 2));
  top: calc(50% - (50% / 2));
  display: flex;
  justify-content: center;
  align-items: center;
}

h5 {
  text-align: center;
  font-size: 24px;
  color: white;
  margin: 15px;
}

</style>