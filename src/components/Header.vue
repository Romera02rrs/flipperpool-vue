import Header from '@/components/Header.vue';
<template>
  <header>
    <video v-if="home" autoplay muted loop>
      <source
        src="https://video.wixstatic.com/video/c837a6_ae4f4741c31844bfba715de2983231fd/1080p/mp4/file.mp4"
        type="video/mp4"
      />
    </video>

    <div v-else class="imagen-header-container">
      <img
        class="imagen-header"
        :alt="imgProps.alt"
        :src="imgProps.src"
      />
    </div>
    <div class="content-header">
      <nav>
        <img class="logo" src="@/assets/img/logo.png" alt="Logo Flipperpool" />
        <input type="checkbox" id="check" v-on:click="muestraModal"/>
        <label for="check" class="bar-btn">
          <i class="fas fa-bars"></i>
        </label>
        <div class="nav-menu" style="display: none">
          <div class="close-button-container">
            <button v-on:click="cierraModal" class="close-button"><i class="fa-solid fa-xmark"></i></button>
          </div>
          <div class="nav-options">
            <router-link to="/">Inicio</router-link>
            <router-link to="/empresa">Empresa</router-link>
            <router-link to="/about">Galería</router-link>
            <router-link to="/about">Ofertas</router-link>
            <router-link to="/about">Contacto</router-link>
          </div>
        </div>
      </nav>
      <div class="titulo-header">
        <h1 v-html="title"></h1>
        <div v-if="true" class="btn-header">
          <a href="mailto:info@flipperpool.com" target="_blank"><div>Contacto</div></a>
          <a><div>Galería</div></a>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  props: {
    home: {
      type: Boolean,
      required: true,
    },
    imgProps: {
      type: Object,
    },
    title: {
      type: String,
    },
  },
  methods: {
    muestraModal() {
      const nav = document.querySelector(".nav-menu");
      nav.setAttribute('style', '')
    },
    cierraModal() {
      const modal = document.querySelector(".nav-menu")
      modal.setAttribute('style', 'display: none')
    }
  }
};
</script>


<style scoped>
header {
  height: 75vw;
  min-height: 500px;
  max-height: 90vh;
  position: relative;
}

video {
  height: 500px;
  min-width: 100%;
  top: 0;
  left: 0;
}

.imagen-header-container {
  width: 100%;
  height: 100%;
}

.imagen-header {
  height: 100%;
  width: 100%;
  object-fit: cover;
  filter: brightness(90%);
}

.content-header {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

nav {
  min-height: 60px;
  height: 5vw;
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background-color: var(--main-faded-color);
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 9;
}

.logo {
  min-height: 40px;
  height: 4vw;
  margin: 8px;
  padding-left: var(--main-margin-sides);
  cursor: pointer;
}

#check {
  display: none;
}

.bar-btn {
  font-size: var(--font-size-3);
  padding: 8px;
  padding-right: var(--main-margin-sides);
  color: #fff;
  cursor: pointer;
}

.nav-menu {
  position: fixed;
  top: 0;
  left: 0;
  margin-top: 53px;
  width: 100vw;
  height: 100vh;
  background-color: var(--main-color);
  text-align: center;
  margin: 0;


  animation: fadeInAnimation ease 0.5s;
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

.close-button-container {
  width: 100%;
  text-align: right;
  padding: 11px 35px;
}

.close-button {
  border: none;
  background-color: transparent;
  font-size: var(--font-size-3);
  cursor: pointer;
  color: white;
}

.nav-options{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  //padding: 22vh 0 0 0;
  padding: 10vh 0 0 0;
  height: 50%;
}

.nav-options a {
  text-decoration: none;
  color: white;
  font-size: var(--font-size-4);
  margin: 20px;
}

.titulo-header {
  position: absolute;
  z-index: 2;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-left: var(--main-margin-sides);
}

h1 {
  color: #fff;
  font-size: var(--font-size-2);
  font-family: Default-bold;
  margin-top: 160px;
  width: 100%;
  text-shadow: 2px 5px 5px rgba(0, 0, 0, 0.356);
}

.btn-header {
  margin-top: 10px;
  display: flex;
}

a {
  cursor: pointer;
  text-decoration: none;
}

.btn-header div {
  width: 110px;
    height: 40px;
    font-size: 20px;
  margin-right: 10px;
  font-family: Default-Light;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn-header :nth-child(1) div {
  background-color: var(--main-color);
  border: 0;
  color: white;
}

.btn-header :nth-child(1) div:hover {
  background-color: #fff;
  color: var(--main-color);
  transition: all 0.5s;
}

.btn-header :nth-child(2) div {
  border: 2px solid var(--main-color);
  background-color: transparent;
  color: white;
}

.btn-header :nth-child(2) div:hover {
  background-color: var(--main-color);
  color: white;
  transition: all 0.5s;
}

.nav-menu .menu {
  font-size: 30px;
  margin: 8px;
  margin-right: var(--main-margin-sides);
  color: #fff;
}

</style>