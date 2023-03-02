<script>
export default {
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
		<div class="brand">
			<a class="logo" href="#" target="_self">
				<svg id="atlas" viewBox="0 0 74 128">
					<polygon id="diamond" points="37,127 1,49 37,1 73,49 "/>
					<polygon id="bottom-right" points="36.847,60.552 71.906,48.906 72,49 37.153,61.448 "/>
					<path id="core" d="M55,49c0,9.941-8.059,18-18,18V31C46.941,31,55,39.059,55,49z"/>
					<polygon id="top-right" points="72,49 37,37 37,2 "/>
					<polygon id="left" points="2.452,49.005 37,37 1.5,49 36.847,61.448 37.153,60.552 "/>
					<polygon id="middle" points="37,2 37.75,61 37,126 36.25,61 "/>
				</svg>
			</a>
			<div class="title">
				<h1 class="site-title">No Man's Guide</h1>
				<h2 class="tagline">An unofficial field guide for <a href="https://www.nomanssky.com/" target= "_blank">No Man's Sky</a>.</h2>
			</div>
		</div>
		<div class="menu">
			<ul class="nav">
				<li class="nav-item" id="items">
					<button class="toggle" @click="toggleDrawer">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="55px" viewBox="0 0 64 55" style="enable-background:new 0 0 64 55;" xml:space="preserve">
							<path d="M56.5,15h-49C3.358,15,0,11.643,0,7.5S3.358,0,7.5,0h49C60.642,0,64,3.357,64,7.5S60.642,15,56.5,15z M64,27.5
								c0-4.143-3.358-7.5-7.5-7.5h-49C3.358,20,0,23.357,0,27.5S3.358,35,7.5,35h49C60.642,35,64,31.643,64,27.5z M64,47.5
								c0-4.143-3.358-7.5-7.5-7.5h-49C3.358,40,0,43.357,0,47.5S3.358,55,7.5,55h49C60.642,55,64,51.643,64,47.5z"/>
						</svg>
						<span>Items</span>
					</button>
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
}

/* LOGO */
.logo {
	display: inline-block;
}
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
}
.menu .toggle {
	background: transparent;
	border: none;
	border-radius: 5px 5px 0 0;
	color: #9fa2aa;
	outline: none;
	text-transform: uppercase;
	font-size: 20px;
	font-weight: 600;
	letter-spacing: 1px;
	margin-bottom: -10px;
	padding: 10px;
}
.menu .toggle:hover,
body.drawer-open .menu .toggle {
	background: #e0b142;
	color: #2e2c13;
	text-shadow: 2px 1px 1px rgba(0,0,0,0.25);
}
.nav-item button svg {
	height: 16px;
	width: auto;
	margin-right: 4px;
	fill: #9fa2aa;
}
.nav-item:hover button svg,
body.drawer-open .nav-item button svg {
	fill: #2e2c13;
	filter: drop-shadow(2px 0 2px rgba(0,0,0,0.25));
}
</style>