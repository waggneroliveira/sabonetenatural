<template>
    <div class="box-product max-w-[290px] rounded-[32px] overflow-hidden">
      <div class="image relative">
        <div class="tag montagu-slab absolute left-0 z-10 top-[35px] px-[15px] py-[6px] bg-[#F2F7DE] rounded-r-[32px] rounded-l-none">
          <div class="tag__text font-semibold text-[#2FB25E] text-[14px]">{{ tag }}</div>
        </div>
        <Carousel v-model:current-slide="currentSlide">
          <Slide v-for="(item, index) in slides" :key="index">
            <div class="carousel__item h-[275px]">              
              <img :src="item.image" :alt="item.alt" class="w-full h-full object-cover" />
            </div>
          </Slide>

          <template #addons>
            <Pagination class="pagination__product z-10">
            </Pagination>
          </template>
        </Carousel>
      </div>

      <div class="description montagu-slab bg-[#F2F7DE] py-8 px-4">
        <div v-html="slides[currentSlide]?.text || ''" class="text-[#2FB25E] text-[12px]"></div>
      </div>
    </div>
</template>

<script setup>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination } from 'vue3-carousel';
import { ref } from 'vue';

const tag = ref('Barbatimão');
const slides = [
  {
    image: '/build/client/images/product.png',
    alt: 'Banner 1',
    text: '<ul><li>Sou íntimo</li><li>Recomendado para homens e mulheres</li><li>Super Concentrado</li></ul>',
  },
  {
    image: '/build/client/images/product.png',
    alt: 'Banner 2',
    text: 'Texto do Banner 2',
  },
  {
    image: '/build/client/images/product.png',
    alt: 'Banner 3',
    text: 'Texto do Banner 3',
  },
];

// Controla o slide atual
const currentSlide = ref(0);
</script>

<style scoped>
    .montagu-slab {
        font-family: "Montagu Slab", serif;
        font-optical-sizing: auto;
        font-style: normal;
    }

    .box-product .image::before{
      content: '';
      background-color: rgba(195, 228, 206, 0.4);
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
    }
</style>
