<template>
  <section>
    <headline-group
      sectionTitle="Constructores de piscinas<br> a hormigón proyectado"
      sectionSubTitle="Construir es lo que hacemos"
    />
    <div class="mosaic">
        <div>
            <img src="../assets/levantar.jpg" alt="Proceso de levantar la piscina con ladrillos y hierros">
        </div>
        <div>
            <img src="../assets/gunitado.jpg" alt="Piscina completamente gunitada">
        </div>
        <div>
            <img src="../assets/terminado.jpg" alt="Piscina terminada con corona, escalera y chapado">
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

.mosaic {
    display: flex;
    justify-content: space-between;
    margin: 0px var(--second-margin-sides);
}

.mosaic div {
    height: 300px;
    width: calc(100% / 3 - 6px);
}

img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

</style>