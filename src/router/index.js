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
			component: () => import('../views/HomeView.vue'),
			meta: {
				title: 'No Man\'s Guide',
				metaTags: [
					{
					  name: 'description',
					  content: 'Where to find resources, how to craft anything, and translate alien languages in No Man\'s Sky.'
					}
				]
			}
		},
		// {
		// 	path: '/about',
		// 	name: 'about',
		// 	component: () => import('../views/AboutView.vue'),
		// 	meta: {
		// 		title: 'About'
		// 	}
		// },
		{
			path: '/items',
			name: 'items',
			component: () => import('../views/ItemsView.vue'),
			meta: {
				title: 'Items',
				metaTags: [
					{
					  name: 'description',
					  content: 'Where to find resources and how to craft anything in No Man\'s Sky.'
					}
				]
			}
		},
		{
			path: '/item/:itemId',
			name: 'item',
			component: () => import('../views/ItemView.vue'),
			meta: {
				metaTags: [
					{
					  name: 'description',
					  content: 'An item from No Man\'s Sky.'
					}
				]
			}
		},
		{
			path: '/translator',
			name: 'translator',
			component: () => import('../views/TranslatorView.vue'),
			meta: {
				title: 'Translator',
				metaTags: [
					{
					  name: 'description',
					  content: 'Translate alien languages in No Man\'s Sky.'
					}
				]
			}
		},
		{ 
			path: '/:pathMatch(.*)', 
			component: () => import('../views/404View.vue'),
			meta: {
				title: '404',
				metaTags: [
					{
					  name: 'description',
					  content: 'Page not found.'
					}
				]
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

router.afterEach((to, from, next) => {
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
})

export default router
