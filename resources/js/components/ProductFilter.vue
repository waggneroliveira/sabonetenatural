<template>
    <div class="box-filter flex justify-center items-center flex-column">
        <div class="bg-[#F2F7DE] flex justify-center items-center flex-column w-full max-w-[1172px] h-[249px]">
            <div class="box-filter__first ">
                <h2 class="box-filter__title"></h2>

                <form action="" method="get">
                    <div class="label">
                        <input type="text" name="search" id="search" placeholder="Quero procurar">
                        <img :src="icon" alt="Ícone serach">
                    </div>
                </form>
            </div>
            <div class="box-filter__second">
                <div class="box-filter__second-category">
                    <nav>
                        <ul class="flex gap-[2.875rem]">
                            <li class=" border-[1.5px] border-solid border-[#419263]" v-for="(item, index) in items" :key="index">
                                <a href="" class="text-[#419263] text-[0.813rem] montagu-slab">{{ item.title }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'FilterProduct',
    data() {
        return {
            font: "MontaguFontExample", 
            items: [
                {
                    title: 'Rejuvenecedor'
                },
                {
                    title: 'Íntimo'
                },
                {
                    title: 'Anti-Oleosidade'
                },
                {
                    title: 'Clareador'
                },
                {
                    title: 'Hidratante'
                },
            ],
            icon:'/build/client/images/icon-search.png' 
        };
    },
}
</script>