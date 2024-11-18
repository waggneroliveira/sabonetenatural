<template>
  <div class="relative w-full h-screen top-[-107px]">
    <div class="slide relative -z-10 w-full h-[100%] overflow-hidden">
      <carousel :wrap-around="true" :autoplay="false" class="rounded-xl h-full">
        <slide v-for="(banner, index) in banners" :key="index">
          <img :src="banner.image" :alt="banner.alt" class="w-full h-full object-cover" />
          <div class="absolute bottom-4 left-4 text-white font-bold text-xl">
            {{ banner.title }}
          </div>
        </slide>
        <!-- Pagination Dots -->
        <template #addons>
          <pagination class="pagination flex flex-row justify-center items-center">
            <template v-slot="props">
              <button
                :class="[ 
                  'w-[18px] h-[18px] rounded-full',
                  props.isActive ? 'bg-white' : 'bg-gray-500',
                ]"
                @click="changePage(props.page)"
              ></button>
            </template>
          </pagination>
        </template>
      </carousel>
    </div>
  </div>
</template>

<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination } from 'vue3-carousel';

export default {
  components: {
    Carousel,
    Slide,
    Pagination,
  },
  data() {
    return {
      banners: [
        {
          image: '/build/client/images/banner.png',
          alt: 'Banner 1',
          title: 'Promoção de Verão',
        },
        {
          image: 'https://via.placeholder.com/1200x400/7fbfff/333333?text=Banner+2',
          alt: 'Banner 2',
          title: 'Descontos Incríveis!',
        },
        {
          image: 'https://via.placeholder.com/1200x400/ffb84d/333333?text=Banner+3',
          alt: 'Banner 3',
          title: 'Novo Lançamento!',
        },
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
  .pagination {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
  }
</style>
