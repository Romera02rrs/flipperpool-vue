<template>
  <Header :home="false" :imgProps="{alt: 'Piscina de madera en Francia', src: require('@/modules/galeria/assets/casaMadera.jpg')}" title="Galería" />
  <Gallery />
  <Footer />
</template>

<script>
import Header from '@/components/Header.vue'
import Gallery from '@/modules/galeria/components/Gallery.vue'
import Footer from '@/components/Footer.vue'

export default {
  components: { 
    Header,
    Gallery,
    Footer
  },
}
</script>

<style scoped>
    
</style>