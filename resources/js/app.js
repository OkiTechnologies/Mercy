require('./bootstrap');

// Extra
import jQuery from "jquery";
window.jQuery = window.$ = jQuery;

// import "bootstrap";
// import "bootstrap/dist/js/bootstrap.js";

// import "font-awesome/css/font-awesome.min.css";

// import 'owl.carousel/dist/assets/owl.carousel.css';
// import 'owl.carousel';
/* ----------------------------------------------------- */

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
	title: (title) => `${title} - ${appName}`,
	resolve: (name) => require(`./Pages/${name}.vue`),
	setup({ el, app, props, plugin }) {
		return createApp({ render: () => h(app, props) })
			.use(plugin)
			.mixin({ methods: { route } })
			.mount(el);
	},
});

InertiaProgress.init({ color: '#4B5563' });
