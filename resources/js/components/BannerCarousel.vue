<template>
  <carousel :wrap-around="true" :autoplay="3000" class="rounded-xl">
    <slide v-for="(banner, index) in banners" :key="index">
      <img :src="banner.image" :alt="banner.alt" class="w-full h-full object-cover rounded-xl" />
      <div class="absolute bottom-4 left-4 text-white font-bold text-xl">{{ banner.title }}</div>
    </slide>
  </carousel>
</template>

<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide } from 'vue3-carousel';

export default {
  components: {
    Carousel,
    Slide,
  },
  data() {
    return {
      banners: [
        { image: '/build/client/images/banner.png', alt: 'Banner 1', title: 'Promoção de Verão' },
        { image: 'https://via.placeholder.com/1200x400/7fbfff/333333?text=Banner+2', alt: 'Banner 2', title: 'Descontos Incríveis!' },
        { image: 'https://via.placeholder.com/1200x400/ffb84d/333333?text=Banner+3', alt: 'Banner 3', title: 'Novo Lançamento!' },
      ],
    };
  },
};
</script>

<style scoped>
.carousel .carousel__slide {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
