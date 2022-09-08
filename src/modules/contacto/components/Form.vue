<template>
  <section>
    <headline-group
        sectionTitle="Póngase en contacto<br>Flipper Pool le espera"
        sectionSubTitle="No se quede sin su piscina al mejor precio"
        orientation="left"
    />
    <div class="content">
        <div class="form-container">
            <form action="procesaEmail.php" method="post">
                <div>
                    <label for="name">Nombre</label>
                    <input id="name" type="text" name="name">
                </div>

                <div>
                    <label for="email">Correo</label>
                    <input v-if="completedEmail" :value="completedEmail" id="email" type="email" name="email">
                    <input v-else id="email" type="email" name="email">
                </div>

                <div>
                    <label for="tel">Teléfono</label>
                    <input id="tel" type="tel" name="tel">
                </div>

                <div class="select-container">
                    <select name="address">
                        <option selected disabled>Selecciona su provincia</option>
                        <option v-for="provincia in provincias" :value="provincia">{{ provincia }}</option>
                    </select>
                </div>

                <div class="double-column">
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <vue-recaptcha @verify="verifyMethod" sitekey="6Ldv9-EhAAAAAAEIO7a1EBOyQqqldppEDyfzl4eg"></vue-recaptcha>
                <input type="hidden" :value="captchaResponse">
                <input class="send-button" type="submit" value="Enviar" />
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
import { VueRecaptcha } from 'vue-recaptcha';
export default {
    data() {
        return {
            captchaResponse: String,
            provincias: ["A Coruña", "Álava", "Albacete", "Alicante", "Almería", "Asturias", "Ávila", "Badajoz", "Baleares", "Barcelona", "Burgos", "Cáceres", "Cádiz", "Cantabria", "Castellón", "Ciudad Real", "Córdoba", "Cuenca", "Girona", "Granada", "Guadalajara", "Gipuzkoa", "Huelva", "Huesca", "Jaén", "La Rioja", "Las Palmas", "León", "Lérida", "Lugo", "Madrid", "Málaga", "Murcia", "Navarra", "Ourense", "Palencia", "Pontevedra", "Salamanca", "Segovia", "Sevilla", "Soria", "Tarragona", "Santa Cruz de Tenerife", "Teruel", "Toledo", "Valencia", "Valladolid", "Vizcaya", "Zamora", "Zaragoza"]
        }
    },
    props: {
        completedEmail: String
    },
    methods: {
        verifyMethod( response ) {
            this.captchaResponse = response;
        }
    },
    components: { HeadlineGroup, VueRecaptcha }
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

form {
    row-gap: 50px;
    column-gap:50px;
    display: grid;
    width: 100%;
    grid-template-columns: auto auto;
}

.image-container {
    width: 35%;
}

.double-column {
    grid-column: 1/3;
}

textarea{
    padding: 8px;
    margin-top: 10px;
    width: 100%;
    resize: none;
    height: 100px;
    border: 2px solid var(--main-color);
    font-size: var(--font-size-5)
}

img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.form-container{
    width: 50%;
}

label {
    display: block;
    font-size: var(--font-size-4)
}

input {
    margin-top: 5px;
    border: none;
    border-bottom: 2px solid var(--main-color);
    border-radius: 0;
    width: 100%;
    font-size: var(--font-size-5)
}

.select-container{
    display: flex;
    border-bottom: 2px solid var(--main-color);
}

select{
    width: 100%;
    font-size: var(--font-size-4);
    border: none;
    border-radius: 0;
    padding: 5px 0px;
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

@media (max-width: 800px){

    .content {
        flex-wrap: wrap;
        margin: 50px var(--main-margin-sides)
    }

    .form-container {
        width: 100%
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