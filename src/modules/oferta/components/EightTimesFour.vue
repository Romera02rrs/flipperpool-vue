<template>
    <section>
        <headline-group sectionTitle="Haga click en la oferta<br>y pida su presupuesto"
            sectionSubTitle="Un año lleno de nuevas alegrías" orientation="left" />
        <router-link to="contacto">
            <img src="../assets/OfertaBanner.png" alt="Oferta piscina 10.850€ medida 8x4">
        </router-link>
    </section>
    <input-email />
</template>

<script>
import HeadlineGroup from "@/components/HeadlineGroup.vue";
import InputEmail from "@/modules/home/components/InputEmail.vue";

export default {
    components: { HeadlineGroup, InputEmail },
};
</script>

<style scoped>
img {
    width: 100%;
    height: 100%;
    cursor: pointer;
}

@media (min-width: 362px) {}
</style>