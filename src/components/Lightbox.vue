<template>
  <div class="lightbox inactivo" id="lightbox">
    <div class="cerrar">
      <button @click="cerrar"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="imagenLightbox-container">
      <i @click="nextLightboxImage('left')" class="fa-solid fa-angle-left"></i>
      <img id="imagenLightbox" class="grande" src="" alt="Piscina" />
      <i @click="nextLightboxImage('right')" class="fa-solid fa-angle-right margin-righ-arrow"></i>
    </div>
  </div>
</template>

<script>

export default {
  props: ['dataImage'],
  data() {
    return {
      viewImage: '',
    }
  },
  methods: {
    openLightbox(id) {

      this.viewImage = document.getElementById(id)
      let nav = document.getElementById("nav")
      nav.setAttribute("style", "display: none")
      let lightbox = document.getElementById("lightbox")
      let imagen = document.getElementById("imagenLightbox")
      let src = this.viewImage.src

      lightbox.classList.remove("inactivo")
      imagen.setAttribute("src", src)
    },
    cerrar() {
      let lightbox = document.getElementById("lightbox")
      let imagen = document.getElementById("imagenLightbox")

      nav.setAttribute("style", "")
      lightbox.classList.add("inactivo")
      imagen.setAttribute("src", "")
    },
    nextLightboxImage(orientation) {

      const nextId = (orientation === 'right') ? (parseInt(this.viewImage.id.split('-')[1]) + 1) : (parseInt(this.viewImage.id.split('-')[1]) - 1)

      let imagen = document.getElementById("imagenLightbox")
      let nextImage = document.getElementById(`imagen-${nextId}`)

      if (!nextImage) return

      let nextSrc = nextImage.src

      imagen.setAttribute("src", nextSrc)
      this.viewImage = document.getElementById(`imagen-${nextId}`)
    }
  }
}
</script>

<style scoped>
.inactivo {
  display: none !important;
}

.lightbox {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: var(--main-faded-color);
  z-index: 4;
  animation: fadeInAnimation ease 1s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

@keyframes fadeInAnimation {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

.lightbox .cerrar {
  width: 100%;
  display: flex;
  justify-content: right;
  color: white;
}

.lightbox .cerrar button {
  font-size: var(--font-size-2);
  cursor: pointer;
  background-color: inherit;
  padding: 15px 50px;
  border: none;
}

.lightbox .cerrar button i {
  color: white;
}

.imagenLightbox-container {
  width: 100%;
  align-items: center;
  justify-content: space-around;
  display: flex;
  max-height: 80vh;
}

.imagenLightbox-container i {
  font-size: var(--font-size-2);
  height: 100%;
  display: flex;
  align-items: center;
  color: white;
}

.imagenLightbox-container i:hover {
  transition: 0.3s all;
  color: black;
}

.imagenLightbox-container .margin-righ-arrow {
  margin-right: 17px;
}

.lightbox .grande {
  margin-top: 30px;
  height: 90%;
  max-width: 80%;
  background: white;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

img {
  border: 10px solid white;
}
</style>
