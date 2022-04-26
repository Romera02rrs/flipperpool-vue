<template>
  <section>
    <headline-group
        sectionTitle="Un amplio historial<br>de ejemplos"
        sectionSubTitle="Mire nuestras piscinas"
        orientation="left"
    />
    <div class="mosaic">
        <img src="../assets/02.jpg" alt="Piscina">
        <img src="../assets/01.jpg" alt="Piscina">
        <img src="../assets/03.jpg" alt="Piscina">
        <img src="../assets/06.jpg" alt="Piscina">
        <img src="../assets/04.jpg" alt="Piscina">
        <img src="../assets/05.jpg" alt="Piscina">
    </div>
  </section>
</template>

<script>
import HeadlineGroup from '@/components/HeadlineGroup.vue';

export default {
    components: { HeadlineGroup }
}

</script>

<style scoped>

.mosaic {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0px var(--second-margin-sides);
}

img {
    padding: 10px 10px;
    height: 150px;
    object-fit: cover;
}

.mosaic :nth-child(1){
    width: 45%;
}
.mosaic :nth-child(2){
    width: 25%;
}
.mosaic :nth-child(3){
    width: 30%;
}
.mosaic :nth-child(4){
    width: 25%;
}
.mosaic :nth-child(5){
    width: 35%;
}
.mosaic :nth-child(6){
    width: 40%;
}
</style>