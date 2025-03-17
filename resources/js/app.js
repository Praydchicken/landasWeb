import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';

import './bootstrap';
import '../css/app.css';


import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link} from '@inertiajs/vue3'
import {ZiggyVue} from '../../vendor/tightenco/ziggy'
import Layout from './Layouts/Layout.vue'

createInertiaApp({
	title: (title) => ` Landas ${title}`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
	  page.default.layout = page.default.layout === undefined ? Layout : page.default.layout
    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
			.use(ZiggyVue)
			.component('Head', Head)
			.component('Link', Link)
      .mount(el)
  },
	progress: {
    color: 'skyblue',
    includeCSS: true,
    showSpinner: false,
  },
})
