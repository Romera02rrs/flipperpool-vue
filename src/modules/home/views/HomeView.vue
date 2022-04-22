<template>
  <Header :home="false" :imgProps="{alt: 'Pala Excavadora', src: '@/modules/home/assets/grua.jpg'}" title="Su Felicidad<br> En Construcción" />
  <transitional-mosaic />
  <parallax-image />
  <transitional-mosaic />
</template>

<script>
import Header from '@/components/Header.vue'
import TransitionalMosaic from '../components/TransitionalMosaic.vue'
import ParallaxImage from '../components/ParallaxImage.vue'

export default {
  components: { Header, TransitionalMosaic, ParallaxImage },

}
</script>

<style scoped>
    
</style>