<template>
  <section>
    <headline-group
        sectionTitle="Descubre lo que opinan<br>nuestros clientes"
        sectionSubTitle="Siempre contentos con nuestro servicio"
        orientation="right"
    />
    <div class="reviews-container">
      <div class="content">
        <i class="fa-solid fa-angle-left"></i>
        <h5>‘ Es una empresa familiar 100% recomendable y muy seria ’</h5>
        <i class="fa-solid fa-angle-right"></i>
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

.reviews-container {
  width: 100%;
  min-height: 300px;
  max-height: 70vh;
  height: 50vw;
  position: relative;
  background-color: var(--main-color);
}

.content {
  width: 100%;
  height: 100%;
  position: absolute;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

i {
  height: 100%;
  display: flex;
  justify-content: center;
  width: 25%;
  align-items: center;
  font-size: var(--font-size-2);
  color: #ffff;
  margin: var(--main-margin-sides);
  cursor: pointer;
}

i:hover{
  color: #000;
  transition: all 1.5s;
}

h5 {
  display: inline-block;
  width: 50%;
  heigth: 100%;
  text-align: center;
  font-size: var(--font-size-4);
  color: white;
  margin: 15px;
}

</style>