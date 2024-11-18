<template>
    <div class="flex flex-row justify-center mt-12">
        <header class="bg-white text-white shadow-md rounded-[32px] w-10/12 h-full">
            <div class="container mx-auto flex justify-between items-center content-center px-12 h-full py-3">
                <!-- Logo -->
                <div class="logo flex justify-between items-center content-center">
                    <a href="/">
                        <img :src="logoPath" alt="Logo">
                    </a>
                </div>

                <!-- Navegação -->
                <nav>
                    <ul class="flex space-x-5 gap-[35px]">
                    <li><a href="/" class="text-[#419263] font-bold">Home</a></li>
                    <li><a href="/sobre" class="text-[#419263] text-[13px]">A Viva</a></li>
                    <li><a href="/produto" class="text-[#419263] text-[13px]">Produtos</a></li>
                    <li><a href="/contato" class="text-[#419263] text-[13px]">Contato</a></li>
                    <li><a href="/revenda" class="text-[#419263] text-[13px]">Quero revender</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</template>

<script>
export default {
  name: "Header",
    data() {
    return {
      logoPath: '/build/client/images/sabonete-logo.png', 
    };
  },
};
</script>

<style scoped>
    header{
        max-width: 904px;
        max-height: 74px;
    }
    .logo img{
        width: auto;
        height: 53px;
    }
</style>
