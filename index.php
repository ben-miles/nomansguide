<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Man's Guide</title>
	<meta name="description" content="A second screen companion app for the game No Man's Sky.">
	<meta name="author" content="Benjamin Miles">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MC9RX7K');</script>
	<!-- End Google Tag Manager -->
	<script type="text/javascript" src="/js/vue.js"></script>
	<!-- <script type="text/javascript" src="/js/vue.min.js"></script> -->
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MC9RX7K"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <div id="app">

        <section id="header">
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
					<li class="nav-item" id="curiosities">
                        <button class="toggle" v-on:click="toggleDrawer('curiosities')">Curiosities</button>
                        <div class="drawer">
                            <ul>
								<li v-for="item in items_curiosities">
									<button v-on:click="load_item(item.id)"><img :alt="item.name" :src="'img/item/' + item.id + '.png'">{{item.name}}</button>
								</li>
							</ul>
                        </div>
                    </li>
                    <li class="nav-item" id="crafted-products">
                        <button class="toggle" v-on:click="toggleDrawer('crafted-products')">Crafted Products</button>
                        <div class="drawer">
                            <ul>
								<li v-for="item in items_crafted_products">
									<button v-on:click="load_item(item.id)"><img :alt="item.name" :src="'img/item/' + item.id + '.png'">{{item.name}}</button>
								</li>
							</ul>
                        </div>
                    </li>
                    <li class="nav-item" id="raw-materials">
                        <button class="toggle" v-on:click="toggleDrawer('raw-materials')">Raw Materials</button>
                        <div class="drawer">
                            <ul>
								<li v-for="item in items_raw_materials">
									<button v-on:click="load_item(item.id)"><img :alt="item.name" :src="'img/item/' + item.id + '.png'">{{item.name}}</button>
								</li>
							</ul>
                        </div>
                    </li>
                    <li class="nav-item" id="all-items">
                        <button class="toggle" v-on:click="toggleDrawer('all-items')">All Items</button>
                        <div class="drawer">
                            <input v-model="filter" id="filter" type="text" placeholder="Start typing to filter items...">
							<ul>
								<li v-for="item in items_filtered">
									<button v-on:click="load_item(item.id)"><img :alt="item.name" :src="'img/item/' + item.id + '.png'">{{item.name}}</button>
								</li>
							</ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="body">
			<div class="resource" v-for="item in item_selected">
				<div class="container">
					<div class="row">
						<div class="column">
							<div class="stats" :id="item.id">
								<h2 class="name">{{item.name}}</h2>
								<h3 class="value">{{item.value.toLocaleString("en-US")}}</h3>
								<img :alt="item.name" :src="'img/item/' + item.id + '.png'">
							</div>
						</div>
						<div class="column">
							<div class="details">
								<p class="description">{{item.description}}</p>
								<div class="crafting" v-if="item.ingredients">
									<h3>Crafted from:</h3>
									<div class="recipe">
										<div v-for="ingredient in item.ingredients">
											<span class="quantity">{{ingredient.quantity}}x</span>
											<a v-on:click="load_item(ingredient.id)" class="ingredient" :id="ingredient.id">
												<img :alt="item.name" :src="'img/item/' + ingredient.id + '.png'">
												{{ingredient.name}}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section id="footer">
			<div class="copyright">© <?php echo date("Y"); ?> <a href="https://benmiles.com/" target="_blank">Ben Miles</a>. <a>No Man's Guide</a> is not affiliated with No Man's Sky or Hello Games. </div>
            <div class="credits">Some data and images sourced from <a href="https://nomanssky.fandom.com/" target="_blank">No Man's Sky Wiki</a>, under a <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img src="img/icon/cc.svg" class="creativecommons"> Creative Commons Attribution 3.0</a> license. </div>
        </section>

    </div>
    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>