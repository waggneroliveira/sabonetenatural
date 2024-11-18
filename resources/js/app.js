import '../css/app.css';
import './bootstrap';
import {createApp} from 'vue';
import App from './components/App.vue';
import Header from './components/Header.vue';

const app = createApp();

app.component('app', App);
app.component('header-component', Header);

app.mount('#app');