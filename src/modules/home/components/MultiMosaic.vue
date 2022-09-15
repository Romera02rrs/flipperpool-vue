<template>
    <section>
        <headline-group sectionTitle="Un amplio historial<br>de ejemplos" sectionSubTitle="Mire nuestras piscinas"
            orientation="left" />
        <div class="mosaic">
            <img @click="openLightbox = $event" src="../assets/02.jpg"
                alt="Piscina" loading="lazy">
            <img src="../assets/01.jpg" alt="Piscina" loading="lazy">
            <img src="../assets/03.jpg" alt="Piscina" loading="lazy">
            <img src="../assets/06.jpg" alt="Piscina" loading="lazy">
            <img src="../assets/04.jpg" alt="Piscina" loading="lazy">
            <img src="../assets/05.jpg" alt="Piscina" loading="lazy">
        </div>
    </section>
    <Lightbox :dataImage="openLightbox" />
</template>

<script>
import HeadlineGroup from '@/components/HeadlineGroup.vue';
import Lightbox from '@/components/Lightbox.vue';

export default {
    components: { HeadlineGroup, Lightbox },
    data() {
        return {
            openLightbox: ''
        }
    }
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
    min-height: 175px;
    max-height: 50vh;
    height: 20vw;
    object-fit: cover;
}

.mosaic :nth-child(1) {
    width: 45%;
}

.mosaic :nth-child(2) {
    width: 25%;
}

.mosaic :nth-child(3) {
    width: 30%;
}

.mosaic :nth-child(4) {
    width: 25%;
}

.mosaic :nth-child(5) {
    width: 35%;
}

.mosaic :nth-child(6) {
    width: 40%;
}
</style>