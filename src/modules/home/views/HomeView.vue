<template>
  <Header :home="true"
    :imgProps="{alt: 'Piscina elegante con muros de piedra', src: require('@/modules/home/assets/piscinaMuroPiedra.jpg')}"
    title="Su Felicidad<br> En Construcción" />
  <transitional-mosaic :imageId="openLightbox" />
  <parallax-image />
  <multi-mosaic :imageId="openLightbox"/>
  <reviews-gallery />
  <input-email :imageId="openLightbox"/>
  <Lightbox ref="lightbox" />
  <Footer />
</template>

<script>
import Header from '@/components/Header.vue'
import TransitionalMosaic from '../components/TransitionalMosaic.vue'
import ParallaxImage from '../components/ParallaxImage.vue'
import MultiMosaic from '../components/MultiMosaic.vue'
import ReviewsGallery from '../components/ReviewsGallery.vue'
import InputEmail from '../components/InputEmail.vue'
import Lightbox from '@/components/Lightbox.vue';
import Footer from '@/components/Footer.vue'

export default {
  components: {
    Header,
    TransitionalMosaic,
    ParallaxImage,
    MultiMosaic,
    ReviewsGallery,
    InputEmail,
    Lightbox,
    Footer,
  },
  data() {
    return {
      lightboxEvent: null,
      dataImagen: null
    }
  },
  methods: {
    openLightbox(id) {
      this.$refs.lightbox.openLightbox(id);
    }
  }
}
</script>

<style scoped>

</style>