<template>
    <Header :home="false" :imgProps="{alt: 'Piscina en una urbanización con una verja de fondo ', src: require('@/modules/empresa/assets/pexels-piscina-verja.jpg')}" title="Empresa" />
   
    <Footer />
  </template>
  
  <script>
  import Header from '@/components/Header.vue'
  
  import Footer from '@/components/Footer.vue'
  
  export default {
    components: { 
      Header, 
     
      Footer
    },
  }
  </script>
  
  <style scoped>
      
  </style>