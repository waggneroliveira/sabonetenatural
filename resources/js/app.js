import '../css/app.css';
import './bootstrap';
import {createApp} from 'vue';
import App from './components/App.vue';
import Header from './components/Header.vue';
import BannerCarousel from './components/BannerCarousel.vue';

const app = createApp();

app.component('app', App);
app.component('header-component', Header);
app.component('banner-carousel-component', BannerCarousel);

app.mount('#app');