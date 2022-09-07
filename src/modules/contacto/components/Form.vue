<template>
  <section>
    <headline-group
        sectionTitle="Póngase en contacto<br>Flipper Pool le espera"
        sectionSubTitle="No se quede sin su piscina al mejor precio"
        orientation="left"
    />
    <div class="content">
        <div class="form-container">
            <form action="" method="post">
                <div>
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email">
                </div>

                <div>
                    <label for="tel">Teléfono</label>
                    <input id="tel" type="tel" name="tel">
                </div>

                <div class="select-container">
                    <select name="dir">
                        <option value="Alicante">Dirección</option>
                        <option value="Alicante">Alicante</option>
                    </select>
                </div>

                <div class="double-column">
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <input class="send-button" type="submit" value="Enviar" />
            </form>
        </div>
        <div class="image-container">
            <img src="../assets/pexels-piscina.jpg" alt="Logo Flipperpool" />
        </div>
    </div>
  </section>
</template>

<script>
import HeadlineGroup from "@/components/HeadlineGroup.vue";
export default {
  data() {return { }},
  methods: {
   
  },
  components: { HeadlineGroup },
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
    overflow: hidden;
    row-gap: 50px;
    column-gap:50px;
    display: grid;
    width: 100%;
    grid-template-columns: auto auto;
}

.image-container {
    width: 25%;
    overflow: hidden;
}

.double-column {
    grid-column: 1/3;
}

textarea{
    margin-top: 10px;
    width: 100%;
    resize: none;
    height: 100px;
    border: 2px solid var(--main-color);
}

img {
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
    border: none;
    border-bottom: 2px solid var(--main-color);
    width: 100%;
}

.select-container{
    display: flex;
    border-bottom: 2px solid var(--main-color);

}

select{
    width: 100%;
    font-size: var(--font-size-4);
    border: none;
    height: 80%;
}

.send-button {
    background-color: transparent;
    font-size: var(--font-size-4);
    cursor: pointer;
    border: 2px solid var(--main-color);
}

.send-button:hover {
    background-color: var(--main-color);
    color: white;
    transition: all 0.5s;
}

@media (max-width: 800px){

    form {
        grid-template-columns: none;
    }

    .double-column {
        grid-column: 1/1;
    }
}

</style>