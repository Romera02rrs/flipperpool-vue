<template>
  <section>
    <headline-group
        sectionTitle="Descubre lo que opinan<br>nuestros clientes"
        sectionSubTitle="Siempre contentos con nuestro servicio"
        orientation="right"
    />
    <div class="image-container">
      <div class="content">
        <h5>"Es una empresa familiar 100% recomendable y muy seria."</h5>
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
  background-color: var(--main-color)
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