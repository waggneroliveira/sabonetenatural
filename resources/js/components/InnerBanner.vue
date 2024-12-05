<template>
    <div class="inner-banner relative mt-[-107px] h-[506px] bg-inner-banner bg-cover bg-center flex items-center justify-center">
        <h1 class="inner-banner__title text-white montagu-slab text-[30px] font-bold uppercase w-full max-w-[1172px]">{{ name }}</h1>

        <div class="bg-firula-inner-banner w-[53px] h-[86.38px] absolute right-0 bottom-[28px]"> </div>
    </div>
</template>

<script>
    export default {
        name: 'InnerBanner',
        data() {
            return {
                font: "MontaguFontExample", 
                name: 'Produtos', 
            };
        },
    };
</script>
