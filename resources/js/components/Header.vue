<template>
    <div class="flex flex-row justify-center mt-12 relative z-10">
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
                    <li><a href="/" class="text-[#419263] text-[15px] montagu-slab font-bold">Home</a></li>
                    <li><a href="/sobre" class="text-[#419263] text-[15px] montagu-slab">A Viva</a></li>
                    <li><a href="/produto" class="text-[#419263] text-[15px] montagu-slab">Produtos</a></li>
                    <li><a href="/contato" class="text-[#419263] text-[15px] montagu-slab">Contato</a></li>
                    <li><a href="/revenda" class="text-[#419263] text-[15px] montagu-slab">Quero revender</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    font: "MontaguFontExample",
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
    .montagu-slab {
        font-family: "Montagu Slab", serif;
        font-optical-sizing: auto;
        font-style: normal;
    }
</style>
