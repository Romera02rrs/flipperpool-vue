<template>
    <section>
        <headline-group sectionTitle="Un amplio historial<br>de ejemplos" sectionSubTitle="Mire nuestras piscinas"
            orientation="left" />
        <div class="mosaic">
            <img @click="sendImageId" src="../assets/02.jpg" alt="Piscina" id="imagen-4" loading="lazy">
            <img @click="sendImageId" src="../assets/01.jpg" alt="Piscina" id="imagen-5" loading="lazy">
            <img @click="sendImageId" src="../assets/03.jpg" alt="Piscina" id="imagen-6" loading="lazy">
            <img @click="sendImageId" src="../assets/06.jpg" alt="Piscina" id="imagen-7" loading="lazy">
            <img @click="sendImageId" src="../assets/04.jpg" alt="Piscina" id="imagen-8" loading="lazy">
            <img @click="sendImageId" src="../assets/05.jpg" alt="Piscina" id="imagen-9" loading="lazy">
        </div>
    </section>
</template>

<script>
import HeadlineGroup from '@/components/HeadlineGroup.vue';

export default {
    components: { HeadlineGroup },
    props: ['imageId'],
    methods: {
        sendImageId({ target: { id } }) {
            this.imageId(id)
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