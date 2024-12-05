import '../css/app.css';
import './bootstrap';
import {createApp} from 'vue';
import App from './components/App.vue';
import Header from './components/Header.vue';
import BannerCarousel from './components/BannerCarousel.vue';
import ProductBox from './components/ProductBox.vue';
import InnerBanner from './components/InnerBanner.vue';
import ProductFilter from './components/ProductFilter.vue';

const app = createApp();

app.component('app', App);
app.component('header-component', Header);
app.component('banner-carousel-component', BannerCarousel);
app.component('box-product', ProductBox);
app.component('inner-banner', InnerBanner);
app.component('filter-product', ProductFilter);

app.mount('#app');