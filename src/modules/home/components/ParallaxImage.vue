<template>
  <section>
    <headline-group sectionTitle="Una larga experiencia<br>en el sector"
      sectionSubTitle="La mayor calidad y durabilidad a su alcance" orientation="right" />
    <div class="image-container" ref="parallaxContainer">
      <img src="../assets/modal-pool.jpg" ref="parallaxImage">
      <div class="content">
        <h5>Construímos piscinas<br>desde 1991</h5>
      </div>
    </div>
  </section>
</template>

<script>
import HeadlineGroup from "@/components/HeadlineGroup.vue";

export default {
  components: { HeadlineGroup },
  data() {
    return {
      parallaxSpeed: 1.5,
    };
  },
  mounted() {
    this.addScrollListener();
  },
  beforeUnmount() {
    this.removeScrollListener();
  },
  methods: {
    addScrollListener() {
      window.addEventListener('scroll', this.handleScroll);
    },
    removeScrollListener() {
      window.removeEventListener('scroll', this.handleScroll);
    },
    handleScroll() {
      const scrolled = window.pageYOffset;
      const parallaxContainer = this.$refs.parallaxContainer;
      const parallaxImage = this.$refs.parallaxImage;
      
      if (parallaxContainer && parallaxImage) {
        const rect = parallaxContainer.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        
        if (isVisible) {
          const containerTop = rect.top + scrolled;
          const scrollProgress = (scrolled - containerTop + window.innerHeight) / (window.innerHeight + rect.height);
          const translateY = (scrollProgress - 0.5) * 200 * this.parallaxSpeed;
          
          parallaxImage.style.transform = `translateY(${translateY}px)`;
        }
      }
    }
  }
};
</script>

<style scoped>
.image-container {
  width: 100%;
  min-height: 300px;
  max-height: 80vh;
  height: 70vw;
  filter: brightness(90%);
  position: relative;
  overflow: hidden;
}

img {
  width: 100%;
  height: 140%;
  object-fit: cover;
  position: absolute;
  top: -20%;
  left: 0;
  will-change: transform;
  transition: transform 0.05s ease-out;
}

.content {
  position: absolute;
  width: 75%;
  height: 50%;
  background-color: var(--main-faded-color);
  z-index: 2;
  left: calc(50% - (75% / 2));
  top: calc(50% - (50% / 2));
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 25px;

}

h5 {
  text-align: center;
  font-size: var(--font-size-4);
  /*TODO: No usar medidas absoultas*/
  color: white;
  margin: 15px;
  line-height: var(--font-size-3);
}
</style>