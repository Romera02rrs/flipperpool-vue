<template>
  <section>
    <headline-group sectionTitle="Póngase en contacto<br>Flipper Pool le espera"
      sectionSubTitle="No se quede sin su piscina al mejor precio" orientation="left" />
    <div class="content">
      <div class="form-container">
        <form action="procesaEmail.php" method="post">
          <div>
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" required />
          </div>

          <div>
            <label for="email">Correo</label>
            <input v-if="completedEmail" :value="completedEmail" id="email" type="email" name="email" />
            <input v-else id="email" type="email" name="email" required />
          </div>

          <div>
            <label for="tel">Teléfono</label>
            <input id="tel" type="tel" name="tel" required />
          </div>

          <div class="select-container">
            <select name="address" required>
              <option selected disabled>Provincia</option>
              <option v-for="provincia in provincias" :value="provincia" :key="provincia">
                {{ provincia }}
              </option>
            </select>
          </div>

          <div>
            <label for="city">Ciudad/Pueblo</label>
            <input v-model="city" id="city" type="text" name="city" required />
          </div>

          <div class="double-column">
            <label for="message">Mensaje</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <div class="double-column">
            <vue-recaptcha @verify="verifyMethod" sitekey="6Ldv9-EhAAAAAAEIO7a1EBOyQqqldppEDyfzl4eg">
            </vue-recaptcha>
            <input type="hidden" :value="captchaResponse" />
          </div>
          <div>
            <input class="send-button" type="submit" value="Enviar" />
          </div>
        </form>
      </div>
      <div class="image-container">
        <img src="../assets/pexels-palmera.jpg" alt="Logo Flipperpool" />
      </div>
    </div>
  </section>
</template>

<script>
import HeadlineGroup from "@/components/HeadlineGroup.vue";
import { VueRecaptcha } from "vue-recaptcha";
export default {
  data() {
    return {
      captchaResponse: "",
      provincias: [
        "Alicante",
        "Castellón",
        "Valencia",
      ],
      city: "", // Nuevo dato para la ciudad/pueblo
    };
  },
  props: {
    completedEmail: String,
  },
  methods: {
    verifyMethod(response) {
      this.captchaResponse = response;
    },
    scrollTo() {
      if (this.completedEmail) {
        let ele = document.getElementById("name");
        let coords = ele.getBoundingClientRect();
        window.scrollTo(coords.x, coords.y);
        ele.select();
      }
    },
  },
  components: { HeadlineGroup, VueRecaptcha },
  mounted() {
    this.scrollTo();
  },
};
</script>

<style scoped>
section {
  margin-bottom: 7vw;
}

.content {
  display: flex;
  justify-content: space-around;
  margin: 0px var(--second-margin-sides);
  margin-top: 40px;
}

.form-container {
  width: 50%;
  margin-right: 50px;
}

.image-container {
  width: 35%;
}

img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

form {
  display: grid;
  grid-template-columns: 50% 50%;
  row-gap: 50px;
  column-gap: 50px;
  width: 100%;
}

label {
  display: block;
  font-size: var(--font-size-4);
}

input {
  margin-top: 5px;
  border: none;
  border-bottom: 2px solid var(--main-color);
  border-radius: 0;
  width: 100%;
  font-size: var(--font-size-5);
}

.select-container {
  display: flex;
  border-bottom: 2px solid var(--main-color);
}

select {
  width: 100%;
  font-size: var(--font-size-4);
  border: none;
  border-radius: 0;
  padding: 5px 0px;
}

.double-column {
  grid-column: 1/3;
}

textarea {
  padding: 8px;
  margin-top: 10px;
  width: 100%;
  resize: none;
  height: 100px;
  border: 2px solid var(--main-color);
  font-size: var(--font-size-5);
}

.send-button {
  background-color: transparent;
  width: 70%;
  padding: 10px;
  font-size: var(--font-size-5);
  cursor: pointer;
  border: 2px solid var(--main-color);
  color: black;
}

.send-button:hover {
  background-color: var(--main-color);
  color: white;
  transition: all 0.5s;
}

@media (max-width: 800px) {
  .content {
    flex-wrap: wrap;
    margin: 50px var(--main-margin-sides);
  }

  .form-container {
    width: 100%;
  }

  form {
    grid-template-columns: none;
    width: 100%;
  }

  .image-container {
    width: 100%;
    margin-top: 50px;
  }

  .double-column {
    grid-column: 1/1;
  }

  .send-button {
    width: 40%;
  }
}
</style>
