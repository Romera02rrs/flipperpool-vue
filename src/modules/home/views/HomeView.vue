<template>
  <Header :home="false" :imgProps="{alt: 'Pala Excavadora', src: require('@/modules/home/assets/piscinaMuroPiedra.jpg')}" title="Su Felicidad<br> En Construcción" />
  <transitional-mosaic />
  <parallax-image />
  <multi-mosaic />
  <reviews-gallery />
  <input-email />
  <Footer />
</template>

<script>
import Header from '@/components/Header.vue'
import TransitionalMosaic from '../components/TransitionalMosaic.vue'
import ParallaxImage from '../components/ParallaxImage.vue'
import MultiMosaic from '../components/MultiMosaic.vue'
import ReviewsGallery from '../components/ReviewsGallery.vue'
import InputEmail from '../components/InputEmail.vue'
import Footer from '@/components/Footer.vue'

export default {
  components: { 
    Header, 
    TransitionalMosaic, 
    ParallaxImage, 
    MultiMosaic,
    ReviewsGallery,
    InputEmail,
    Footer
  },
}
</script>

<style scoped>
    
</style>