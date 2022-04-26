<template>
  <section>
    <headline-group
        sectionTitle="Póngase en contacto<br>Flipper Pool le espera"
        sectionSubTitle="No se quede sin su piscina al mejor precio"
        orientation="left"
    />
    <div class="content">
      <div>
        <div class="back-image">
          <img alt="Fondo de piscinca" src="../assets/fondoPiscinaPiña.jpg">
            <img class="front-image-right" alt="Piscina con vistas a la montaña" src="../assets/piscinaVistasMontaña.jpg">
        </div>
      </div>
      <div class="form">
        <label for="correo">Introduzca su correo electrónico</label>
        <hr>
        <input type="email" name="correo" id="correo" placeholder="example@info.com">
        <button>Contactar</button>
      </div>
      <div>
        <div class="back-image">
          <img alt="Fondo de piscinca" src="../assets/fondoPiscinaPiña.jpg">
            <img class="front-image-left" alt="Piscina con vistas a la montaña" src="../assets/piscinaVistasMontaña.jpg">
        </div>
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

.content {
  display: flex;
  //flex-wrap: wrap;
  justify-content: space-between;
  margin: 0px var(--second-margin-sides);
}

img {
  height: 185px;
  width: 85px;
  object-fit: cover;
}

.back-image {
 position: relative;
}

.front-image-right {
  position: absolute;
  top: 20px;
  left: 20px;
  border: 2px solid #fff;
}

.form {
  margin: 30px;
  text-align: center;
}

label {
  display: block;
  color: #000000;
  font-family: Default-Light;
  font-size: 15px;
  //font-weight: bold;
}

hr {
  margin: 10px 0px;
}

input {
  width: 100%;
  border: 2px solid var(--main-color);
  padding: 5px;
  margin: 5px 0px;
}

button {
  margin: 5px;
  background-color: var(--main-color);
  border: 0px;
  width: 90px;
  padding: 5px;
  color: #fff;
  cursor: pointer;
}

.front-image-left {
  position: absolute;
  top: 20px;
  right: 20px;
  border: 2px solid #fff;
}

</style>