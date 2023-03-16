<script>
import { RouterLink } from 'vue-router'
import IconLogo from './icons/IconLogo.vue'
import IconItems from '../components/icons/IconItems.vue'
import IconTranslator from '../components/icons/IconTranslator.vue';
// import IconQuestionMark from '../components/icons/IconQuestionMark.vue';

export default {
	components: { 
		IconLogo,
		IconItems,
		IconTranslator,
		// IconQuestionMark
	},
	methods: {
		toggleDrawer() {
			// Toggle the drawer open/closed
			let docbody = document.body;
			docbody.classList.toggle("drawer-open");
			// If the drawer is being opened, focus on the filter input
			if(docbody.classList.contains("drawer-open")){
				let filter = document.getElementsByClassName("filter")[0];
				let filterInput = filter.getElementsByTagName("input")[0];
				filterInput.focus();
			}
		}
  }
}
</script>

<template>
	<header>
		<RouterLink to="/" class="brand" target="_self">
			<IconLogo />
			<div class="title">
				<h1 class="site-title">No Man's Guide</h1>
				<h2 class="tagline">An unofficial field guide for <a href="https://www.nomanssky.com/" target= "_blank">No Man's Sky</a>.</h2>
			</div>
		</RouterLink>
		<div class="menu">
			<ul class="nav">
				<!-- <li class="nav-item" id="about">
					<RouterLink to="/about">
						<IconQuestionMark />
						<span>About</span>
					</RouterLink>
				</li> -->
				<li class="nav-item" id="translator">
					<RouterLink to="/translator">Translator</RouterLink>
						<IconTranslator />
				</li>
				<li class="nav-item" id="items">
					<RouterLink to="/items" class="toggle">
						<IconItems />
						<span>Items</span>
					</RouterLink>
				</li>
			</ul>
		</div>
	</header>
</template>

<style>
header {
	align-items: flex-end;
	background: rgba(9, 7, 9, 0.7);
	border-bottom: solid 3px #e0b142;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	padding: 12px;
	height: 90px;
}
.brand {
	display: flex;
	flex-direction: row;
	text-decoration: none;
}

/* LOGO */
#atlas {
    height: 64px;
    filter: drop-shadow(0 0 10px rgba(164, 255, 247, 0.7));
    transition: all 0.5s;
}
#atlas * {
	transition: all 0.25s;
	fill: rgb(245, 255, 252);
}
#atlas #bottom-right,
#atlas #top-right,
#atlas #left,
#atlas #middle {
	fill: #000;
}
#atlas #diamond,
#atlas #core {
	stroke: #000;
}
.brand:hover #atlas {
	filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.5));
	transform: scale(1.1);
}
.brand:hover #atlas #diamond {
	fill: #070707;
}
.brand:hover #atlas #core {
	fill: #bf1b19;
	opacity: 0.9;
	stroke: none;
	animation-name: pulse;
	animation-direction: alternate;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
@keyframes pulse {
	from {
		transform: scale(1) translate(0, 0);
	}
	to {
		transform: scale(1.25) translate(-10%, -7%);
	}
}
.brand:hover #atlas #bottom-right,
.brand:hover #atlas #top-right,
.brand:hover #atlas #left,
.brand:hover #atlas #middle {
	fill: #fff;
}
.brand:hover #atlas #top-right {
	opacity: 0.7;
}

/* SITE TITLE */
.brand .title {
	display: none;
}
@media ( min-width: 576px ) {
	.brand .title {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		justify-content: center;
		margin-left: 15px;
	}
}
.site-title, 
.tagline {
	font-weight: 300;
	text-shadow: 0 0 25px rgba(164, 255, 247, 0.7), 0 0 5px rgba(255, 255, 255, 0.5);
}
.site-title {
	font-family: "geosanslight-nmsregular", Vazirmatn, Helvetica, Arial, sans-serif;
	font-size: 30px;
	text-transform: uppercase;
}
.tagline {
	font-size: 14px;
}

/* MENU */
.menu .nav {
	display: flex;
	list-style: none;
	align-items: center;
	justify-content: flex-end;
	gap: 10px;
}
.menu a {
	background: transparent;
	border: none;
	border-radius: 5px 5px 0 0;
	color: #9fa2aa;
	display: block;
	outline: none;
	font-family: "geosanslight-nmsregular", Vazirmatn, Helvetica, Arial, sans-serif;
	font-size: 20px;
	font-weight: 600;
	letter-spacing: 1px;
	margin-bottom: -11px;
	padding: 10px;
	text-decoration: none;
	text-transform: uppercase;
}
.menu a:hover,
.menu .router-link-active {
	background: #e0b142;
	color: #2e2c13;
	text-shadow: 2px 1px 1px rgba(0,0,0,0.25);
}
.menu a svg {
	height: 16px;
	width: auto;
	margin-right: 4px;
	fill: #9fa2aa;
}
.menu a:hover svg,
.menu a.router-link-active svg {
	fill: #2e2c13;
	filter: drop-shadow(2px 0 2px rgba(0,0,0,0.25));
}
</style>