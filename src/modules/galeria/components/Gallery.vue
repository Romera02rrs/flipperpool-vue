<template>
  <section>
    <div class="video-container">
      <div class="video">
        <iframe src="https://www.youtube.com/embed/KuSSOZxzYWs" title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="video">
        <iframe src="https://www.youtube.com/embed/5MrvfUIV04M" title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <img @click="sendImageId" id="imagen-1" src="../assets/galeria-1.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-2" src="../assets/galeria-2.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-3" src="../assets/galeria-3.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-4" src="../assets/galeria-4.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-5" src="../assets/galeria-5.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-6" src="../assets/galeria-6.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-7" src="../assets/galeria-7.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-8" src="../assets/galeria-8.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-9" src="../assets/galeria-9.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-10" src="../assets/galeria-10.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-11" src="../assets/galeria-11.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-12" src="../assets/galeria-12.jpg" alt="Piscina" loading="lazy" />
    <img @click="sendImageId" id="imagen-13" src="../assets/galeria-13.jpg" alt="Piscina" loading="lazy" />
  </section>
  <Lightbox ref="lightbox" />
</template>

<script>
import Lightbox from "@/components/Lightbox.vue";
export default {
  components: {
    Lightbox
  },
  data() {
    return {
      lightboxEvent: ''
    }
  },
  methods: {
    sendImageId({ target: { id } }) {
      this.$refs.lightbox.openLightbox(id)
    }
  }
}
</script>

<style scoped>
@keyframes fadeInAnimation {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

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

.video-container {
  width: 100%;
  min-height: 150px;
  max-height: 70vh;
  height: 25vw;
  display: flex;
  justify-content: space-between;
}

.video {
  height: 100%;
  width: 50%;
  padding: 10px;
}

iframe {
  width: 100%;
  height: 100%;
}

@media (max-width: 768px) {
  .video-container {
    width: 100%;
    min-height: 300px;
    max-height: 140vh;
    height: 50vw;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    overflow: hidden;
  }

  .video {
    height: 100%;
    width: 100%;
    padding: 10px;
  }
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
