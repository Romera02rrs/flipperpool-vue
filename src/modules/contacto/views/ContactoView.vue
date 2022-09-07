<template>
  <Header :home="false" :imgProps="{alt: 'Piscina de madera en Francia', src: require('@/modules/contacto/assets/pexels-piscina.jpg')}" title="Contacto" />
  <Form />
  <Footer />
</template>

<script>
import Header from '@/components/Header.vue'
import Form from '../components/Form.vue'
import Footer from '@/components/Footer.vue'

export default {
  components: { 
    Header,
    Form,
    Footer
  },
}
</script>

<style scoped>
    
</style>