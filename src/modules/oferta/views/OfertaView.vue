<template>
    <Header :home="false" :imgProps="{alt: 'Piscina en una urbanización con una verja de fondo ', src: require('@/modules/oferta/assets/pexels-piscina-verja.jpg')}" title="Oferta" />
    <eight-times-four />
    <Footer />
  </template>
  
  <script>
  import Header from '@/components/Header.vue'
  import EightTimesFour from '@/modules/oferta/components/EightTimesFour.vue'
  import Footer from '@/components/Footer.vue'
  
  export default {
    components: { 
      Header, 
      EightTimesFour,
      Footer
    },
  }
  </script>
  
  <style scoped>
      
  </style>