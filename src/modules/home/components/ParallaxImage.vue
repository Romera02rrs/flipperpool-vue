<template>
  <section>
    <headline-group
      sectionTitle="Una larga experiencia<br>en el sector"
      sectionSubTitle="La mayor calidad y durabilidad a su alcance"
    />
    <div class="imagen">
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

.imagen {
  with: 100%;
  height: 250px;
  background: center fixed url('../assets/terminado.jpg');
  filter: brightness(90%);
}

</style>