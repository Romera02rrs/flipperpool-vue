<template>
  <Header :home="false" :imgProps="{alt: 'Pala Excavadora', src: '@/modules/home/assets/grua.jpg'}" title="Su Felicidad<br> En Construcción" />
  <transitional-mosaic />
</template>

<script>
import Header from '@/components/Header.vue'
import TransitionalMosaic from '../components/TransitionalMosaic.vue'
export default {
  components: { Header, TransitionalMosaic },

}
</script>

<style scoped>
    
</style>