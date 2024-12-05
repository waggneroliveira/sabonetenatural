<template>
    <div class="box-filter">
        <div class="box-filter__first">
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
                    <ul class="">
                        <li class="border-[rgba(65, 146, 99, 1)]"><a href="" v-for="(item, index) in items" :key="index" class="text-[rgba(65, 146, 99, 1)] text-[0.813rem] montagu-slab">{{ item.title }}</a></li>
                    </ul>
                </nav>
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