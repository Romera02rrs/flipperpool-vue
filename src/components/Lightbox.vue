<template>
  <div class="lightbox inactivo" id="lightbox">
    <div class="cerrar">
      <button @click="cerrar"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <img
      id="imagenLightbox"
      class="grande"
      src=""
      alt="Piscina"
    />
  </div>
</template>

<script>

export default {
  props: ['abrir'],
  methods: {
    openLightbox(e) {
    console.log("llego");
    let nav = document.getElementById("nav");
    nav.setAttribute("style", "display: none");
    let lightbox = document.getElementById("lightbox");
    let imagen = document.getElementById("imagenLightbox");
    let src = e.target.src;

    lightbox.classList.remove("inactivo");
    imagen.setAttribute("src", src);
  },
    cerrar() {
      let lightbox = document.getElementById("lightbox");
      let imagen = document.getElementById("imagenLightbox");

      nav.setAttribute("style", "");
      lightbox.classList.add("inactivo");
      imagen.setAttribute("src", "");
    }
  }
};
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

.lightbox .grande {
  margin-top: 30px;
  height: 90%;
  max-width: 80%;
  background: white;
}
</style>
