<template>
  <section>
    <img
      @click="openLightbox"
      id="imagen-1"
      src="../assets/galeria-1.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-2"
      src="../assets/galeria-2.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-3"
      src="../assets/galeria-3.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-4"
      src="../assets/galeria-4.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-5"
      src="../assets/galeria-5.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-6"
      src="../assets/galeria-6.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-7"
      src="../assets/galeria-7.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-8"
      src="../assets/galeria-8.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-9"
      src="../assets/galeria-9.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-10"
      src="../assets/galeria-10.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-11"
      src="../assets/galeria-11.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-12"
      src="../assets/galeria-12.jpg"
      alt="Piscina"
      loading="lazy"
    />
    <img
      @click="openLightbox"
      id="imagen-13"
      src="../assets/galeria-13.jpg"
      alt="Piscina"
      loading="lazy"
    />
  </section>
  <Lightbox :abrir="openLightbox" />
</template>

<script>
import Lightbox from "@/components/Lightbox.vue";
export default {
  components: {
    Lightbox
  }
}

</script>

<style scoped>
section {
  margin-bottom: 7vw;
}

section {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 50px var(--main-margin-sides);
  overflow: hidden;
}

img {
  padding: 10px 10px;
  min-height: 150px;
  max-height: 70vh;
  height: 25vw;
  object-fit: cover;
  transition: all 0.5s ease;
  overflow: hidden;
}

section img:hover {
  transform: scale(1.05);
}

#imagen-1 {
  width: 35%;
  animation: 1s expand infinite alternate;
}

@keyframes expand {
  100% {
    transform: scale(1.05);
  }
}

#imagen-2 {
  width: 25%;
}

#imagen-3 {
  width: 40%;
}

#imagen-4 {
  width: 70%;
}

#imagen-5 {
  width: 30%;
}

#imagen-6 {
  width: 25%;
}

#imagen-7 {
  width: 30%;
}

#imagen-8 {
  width: 45%;
}

#imagen-9 {
  width: 45%;
}

#imagen-10 {
  width: 55%;
}

#imagen-11 {
  width: 70%;
}

#imagen-12 {
  width: 30%;
}

#imagen-13 {
  width: 100%;
}
</style>
