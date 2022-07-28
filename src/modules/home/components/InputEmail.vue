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

section {
  margin-bottom: 7vw;
}

.content {
  display: flex;
  //flex-wrap: wrap;
  justify-content: space-between;
  margin: 0px var(--second-margin-sides);
}

img {
  min-height: 185px;
  height: 40vw;
  min-width: 85px;
  width: 20vw;
  object-fit: cover;
}

.back-image {
 position: relative;
}

.front-image-right {
  position: absolute;
  top: 4vw;
  left: 4vw;
  border: 2px solid #fff;
}

.form {
  margin: 30px;
  width: 40%;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

label {
  display: block;
  color: #000000;
  font-family: Default-Light;
  font-size: var(--font-size-5);
}

hr {
  width: 100%;
  margin: 1.5vw 0px;
}

input {
  width: 100%;
  border: 2px solid var(--main-color);
  padding: 1vw;
  margin: 1.5vw 0px;
  font-size: var(--font-size-6);
}

button {
  margin: 1.5vw 0px;
  background-color: var(--main-color);
  border: 0px;
  width: 20vw;
  padding: 1vw;
  color: #fff;
  cursor: pointer;
  font-size: var(--font-size-6)
}

.front-image-left {
  position: absolute;
  top: 4vw;
  right: 4vw;
  border: 2px solid #fff;
}

</style>