import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
	scrollBehavior(to, from, savedPosition) {
		// always scroll to top
		return { top: 0 }
	},
	history: createWebHistory(import.meta.env.BASE_URL),
	routes: [
		{
			path: '/',
			name: 'home',
			component: () => import('../views/HomeView.vue')
		},
		{
			path: '/about',
			name: 'about',
			component: () => import('../views/AboutView.vue'),
			meta: {
				title: 'About'
			}
		},
		{
			path: '/items',
			name: 'items',
			component: () => import('../views/ItemsView.vue'),
			meta: {
				title: 'Items'
			}
		},
		{
			path: '/item/:itemId',
			name: 'item',
			component: () => import('../views/ItemView.vue')
		},
		{
			path: '/translator',
			name: 'translator',
			component: () => import('../views/TranslatorView.vue')
		},
		{ 
			path: '/:pathMatch(.*)', 
			component: () => import('../views/404View.vue'),
			meta: {
				title: '404'
			}
		}
	]
})

const siteTitle = "No Man's Guide";

function toTitleCase(str) {
	return str
		.replaceAll('_', ' ')
		.replace(
			/\w\S*/g,
			function(txt) {
				return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
			}
		);
}

router.beforeEach((to, from, next) => {
	// Set the route's name as a class on the body element 
	document.body.classList = to.name
	// Get the page title from the route meta data
	const pageTitle = to.meta.title
	// If the route has params, use them as the page title
	if (to.params.itemId) {
		document.title = toTitleCase(to.params.itemId) + ' | ' + siteTitle
	}
	// If the route has a meta title, set it as the page title
	else if (pageTitle) {
		document.title = pageTitle + ' | ' + siteTitle
	}
	// Otherwise just use the site title
	else {
		document.title = siteTitle
	}
	// Continue resolving the route
	next()
})

export default router
