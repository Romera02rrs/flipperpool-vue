<template>
  <section>
    <headline-group sectionTitle="Constructores de piscinas<br> a hormigón proyectado"
      sectionSubTitle="Construir es lo que hacemos" orientation="left" />
    <div class="mosaic">
      <div>
        <img src="../assets/atzubia_1_editado.jpeg" alt="Proceso de levantar la piscina con ladrillos y hierros"
          id="imagen-1" @click="sendImageId" loading="lazy">
      </div>
      <div>
        <img src="../assets/atzubia_2.jpeg" alt="Piscina completamente gunitada" id="imagen-2" @click="sendImageId"
          loading="lazy">

      </div>
      <div>
        <img src="../assets/atzubia_3.jpeg" alt="Piscina terminada con corona, escalera y chapado" id="imagen-3"
          @click="sendImageId" loading="lazy">
      </div>
    </div>
  </section>
</template>

<script>
import HeadlineGroup from "@/components/HeadlineGroup.vue";

export default {
  components: { HeadlineGroup },
  props: ['imageId'],
  methods: {
    sendImageId({ target: { id } }) {
      this.imageId(id)
    }
  }
};
</script>

<style scoped>
.mosaic {
  display: flex;
  justify-content: space-between;
  margin: 0px var(--second-margin-sides);
}

.mosaic div {
  min-height: 300px;
  max-height: 80vh;
  height: 50vw;
  width: calc(100% / 3 - 6px);
}

img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
</style>