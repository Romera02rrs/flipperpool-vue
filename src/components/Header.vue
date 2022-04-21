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
        src="@/modules/home/assets/piscinaMuroPiedra.jpg"
      />
    </div>
    <div class="content-header">
      <nav>
        <img class="logo" src="@/assets/img/logo.png" alt="Logo Flipperpool" />
        <input type="checkbox" id="check" />
        <label for="check" class="bar-btn">
          <i class="fas fa-bars"></i>
        </label>
        <div class="nav-menu">
          <router-link to="/">Inicio</router-link>
          <router-link to="/empresa">Empresa</router-link>
          <router-link to="/about">Galería</router-link>
          <router-link to="/about">Ofertas</router-link>
          <router-link to="/about">Contacto</router-link>
        </div>
      </nav>
      <div class="titulo-header">
        <h1 v-html="title"></h1>
        <div v-if="true" class="btn-header">
          <a><div>Contacto</div></a>
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
};
</script>


<style scoped>
header {
  overflow: hidden;
}

video {
  height: 500px;
  min-width: 100%;
  top: 0;
  left: 0;
}

.imagen-header-container {
  height: 500px;
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
  height: 500px;
  top: 0;
  left: 0;
}

nav {
  width: 100%;
  position: fixed;
  background-color: #8cccffaa;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  height: 35px;
  margin: 8px;
  margin-left: var(--main-margin-sides);
}

#check {
  display: none;
}

.bar-btn {
  font-size: 30px;
  margin: 8px;
  margin-right: var(--main-margin-sides);
  color: #fff;
  cursor: pointer;
}

.nav-menu {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  background-color: #8cccffbb;
  text-align: center;
  transition: all 0.5s;
}

.titulo-header {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-left: var(--main-margin-sides);
}

h1 {
  color: #fff;
  font-size: 2.5em;
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
  width: 110px;
  height: 40px;
  margin-right: 10px;
  cursor: pointer;
}

.btn-header div {
  width: 110px;
  height: 40px;
  font-size: 20px;
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

.btn-header :nth-child(2) div {
  border: 2px solid var(--main-color);
  background-color: transparent;
  color: white;
}

.nav-menu .menu {
  font-size: 30px;
  margin: 8px;
  margin-right: var(--main-margin-sides);
  color: #fff;
}
</style>