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
                        <button class="toggle" v-on:click="toggleDrawer('curiosities')">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="64px" viewBox="0 0 36 64" style="enable-background:new 0 0 36 64;" xml:space="preserve">
								<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M18.207,0L0,25.47L18.069,64L36,25.47L18.207,0z M17.986,34.416
									c-4.898,0-8.868-4.005-8.868-8.946c0-4.941,3.97-8.946,8.868-8.946c4.899,0,8.868,4.005,8.868,8.946
									C26.854,30.411,22.886,34.416,17.986,34.416z"/>
							</svg>
							<span>Curiosities</span>
						</button>
                        <div class="drawer">
                            <ul>
								<li v-for="item in items_curiosities">
									<button v-on:click="load_item(item.id, item.name)"><img :alt="item.name" :src="'img/item/' + item.id + '.png'">{{item.name}}</button>
								</li>
							</ul>
                        </div>
                    </li>
                    <li class="nav-item" id="crafted-products">
                        <button class="toggle" v-on:click="toggleDrawer('crafted-products')">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
							<path d="M23.489,39.335c1.338,1.236,2.549,2.357,3.842,3.552c-1.574,1.406-3.063,2.756-4.572,4.084
								c-3.071,2.702-5.563,5.774-6.457,9.901c-0.05,0.229-0.231,0.498-0.43,0.614c-2.37,1.389-9.593,6.188-9.593,6.188l-3.125-2.358
								c0,0,3.424-6.591,5.192-9.855c0.256-0.475,0.778-0.848,1.252-1.15c0.468-0.297,1.014-0.51,1.555-0.647
								c3.294-0.839,5.685-2.911,7.797-5.466C20.338,42.52,21.917,41.004,23.489,39.335z M63.359,8.936c-0.832-1.351-1.559-2.797-2.571-4
								c-2.008-2.384-5.42-2.454-7.548-0.762c-6.414,5.1-12.027,11.002-16.928,17.577c-0.004,0.903,8.06-6.535,17.222-15.292
								c0.168,1.524,0.212,2.787-0.822,3.885c-1.904,2.026-3.718,4.14-5.632,6.16c-2.278,2.407-8.005,8.267-8.005,8.267l2.352,2.651
								c0,0,10.854-10.643,16.325-16.008c0.48,0.708,0.765,2.677,0.019,3.424c-5.318,5.523-11.953,12.215-14.361,14.928
								c0.12,0.114,0.241,0.227,0.361,0.34c4.799-2.132,13.116-10.85,17.003-14.238C64.599,12.183,64.383,10.514,63.359,8.936z
								M62.82,59.991c-1.776,2.56-3.973,4.491-7.342,3.902c-1.147-0.201-2.298-0.856-3.259-1.56c-1.303-0.955-2.47-2.11-3.617-3.257
								C38,48.472,27.419,37.848,16.803,27.259c-0.391-0.39-1.056-0.632-1.621-0.695c-1.939-0.219-3.924-0.158-5.833-0.51
								c-4.614-0.849-7.947-4.526-8.722-9.423C0.363,14.966,0.207,13.285,0,11.613c0.076-0.051,0.153-0.102,0.229-0.152
								c0.547,0.513,1.072,1.049,1.644,1.533c1.815,1.545,3.622,3.104,5.494,4.58c0.388,0.307,1.075,0.482,1.557,0.384
								c4.049-0.827,6.96-3.126,8.537-6.979c0.658-1.609,0.063-3.142-0.891-4.395c-1.4-1.841-3.007-3.525-4.527-5.274
								c-0.359-0.413-0.728-0.817-1.152-1.293c7.164-0.291,14.014,3.218,15.123,10.995c0.191,1.34,0.127,2.716,0.28,4.063
								c0.062,0.54,0.259,1.18,0.621,1.55c8.077,8.248,16.18,16.468,24.293,24.681c3.029,3.069,6.098,6.099,9.136,9.16
								c1.484,1.496,2.815,3.097,3.256,5.249C63.911,57.246,63.723,58.694,62.82,59.991z M61.327,56.917c0-2.667-2.159-4.828-4.821-4.828
								c-2.664,0-4.822,2.161-4.822,4.828s2.158,4.828,4.822,4.828C59.168,61.745,61.327,59.583,61.327,56.917z"/>
							</svg>
							<span>Crafted Products</span>
						</button>
                        <div class="drawer">
                            <ul>
								<li v-for="item in items_crafted_products">
									<button v-on:click="load_item(item.id, item.name)">
										<img :alt="item.name" :src="'img/item/' + item.id + '.png'">
										{{item.name}}
									</button>
								</li>
							</ul>
                        </div>
                    </li>
                    <li class="nav-item" id="raw-materials">
                        <button class="toggle" v-on:click="toggleDrawer('raw-materials')">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
								<path d="M63.128,26.804c-2.46-0.59-4.917-1.19-7.386-1.744c-0.509-0.114-0.813-0.302-0.971-0.813
									c-0.429-1.382-0.934-2.743-1.323-4.136c-0.09-0.324,0.051-0.843,0.279-1.103c1.259-1.434,2.579-2.813,3.875-4.215
									c0.239-0.258,0.462-0.531,0.761-0.877c-2.852-2.783-5.637-5.503-8.465-8.265c-1.517,1.314-2.982,2.444-4.275,3.745
									c-1.096,1.102-2.15,1.559-3.59,0.735c-0.446-0.255-0.984-0.431-1.494-0.478c-1.575-0.146-2.009-1.046-2.183-2.522
									C38.072,4.726,37.501,2.355,37.058,0c-3.911,0-7.637,0-11.529,0c0,2.752-0.016,5.417,0.011,8.081
									c0.007,0.636-0.229,0.937-0.828,1.118c-1.132,0.34-2.281,0.669-3.348,1.165c-1.072,0.497-1.889,0.398-2.72-0.453
									c-0.546-0.559-1.23-0.985-1.86-1.46c-1.174-0.887-2.352-1.766-3.601-2.702c-2.606,2.742-5.137,5.407-7.719,8.123
									c1.459,1.847,3.034,3.871,4.651,5.862c0.372,0.456,0.409,0.82,0.145,1.325c-0.471,0.904-0.833,1.868-1.345,2.746
									c-0.236,0.407-0.666,0.837-1.096,0.972c-2.287,0.72-4.597,1.369-6.91,1.998c-0.603,0.164-0.856,0.417-0.855,1.073
									C0.062,31.007,0.02,34.169,0,37.331c-0.001,0.22,0.044,0.44,0.074,0.718c0.405,0.03,0.759,0.062,1.114,0.08
									c1.674,0.083,3.347,0.214,5.022,0.224c0.986,0.005,1.645,0.454,2.093,1.226c0.709,1.221,1.311,2.504,2.022,3.725
									c0.329,0.566,0.2,0.93-0.189,1.383c-1.456,1.699-2.879,3.426-4.31,5.147c-0.201,0.241-0.377,0.503-0.673,0.901
									c2.842,2.698,5.622,5.337,8.441,8.012c0.074-0.062,0.278-0.223,0.47-0.396c1.488-1.347,3.01-2.659,4.444-4.063
									c0.69-0.676,1.261-0.828,2.135-0.34c1.261,0.704,2.575,1.33,3.914,1.872c0.851,0.345,1.086,0.845,1.061,1.722
									c-0.063,2.1-0.02,4.203-0.02,6.459c4.173-0.146,8.156-0.287,12.199-0.429c0.194-2.239,0.406-4.298,0.534-6.364
									c0.045-0.728,0.334-1.108,0.98-1.398c1.198-0.54,2.383-1.123,3.527-1.769c0.657-0.371,1.105-0.263,1.664,0.19
									c1.764,1.429,3.571,2.803,5.365,4.194c0.199,0.154,0.421,0.276,0.633,0.414c-0.067-0.099-0.134-0.196-0.2-0.294
									c2.439-2.302,4.865-4.619,7.331-6.893c0.579-0.533,0.504-0.908,0.08-1.478c-1.378-1.846-2.686-3.745-4.063-5.592
									c-0.372-0.499-0.385-0.885-0.094-1.418c0.76-1.385,1.484-2.791,2.179-4.209c0.265-0.54,0.591-0.797,1.213-0.76
									c0.918,0.055,1.841,0.041,2.762,0.044c1.372,0.006,2.743,0.001,4.106,0.001c0.065-0.288,0.117-0.411,0.118-0.534
									c0.022-3.359,0.024-6.718,0.069-10.076C64.009,26.954,63.568,26.909,63.128,26.804z M31.75,43.269
									c-6.216,0-11.255-5.045-11.255-11.269s5.039-11.269,11.255-11.269c6.217,0,11.256,5.045,11.256,11.269S37.967,43.269,31.75,43.269z"
									/>
							</svg>
							<span>Raw Materials</span>
						</button>
                        <div class="drawer">
                            <ul>
								<li v-for="item in items_raw_materials">
									<button v-on:click="load_item(item.id, item.name)">
										<img :alt="item.name" :src="'img/item/' + item.id + '.png'">
										{{item.name}}</button>
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
									<button v-on:click="load_item(item.id, item.name)">
										<img :alt="item.name" :src="'img/item/' + item.id + '.png'">
										{{item.name}}
									</button>
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
							<div class="card" :id="item.id">
								<h2 class="name">{{item.name}}</h2>
								<h3 class="value">{{item.value.toLocaleString("en-US")}}</h3>
								<img :alt="item.name" :src="'img/item/' + item.id + '.png'">
							</div>
						</div>
						<div class="column">
							<div class="details">
								<p class="description">{{item.description}}</p>
								<div v-if="item.sources" class="sources">
									<h3>Sources:</h3>
									<ul>
										<li v-for="source in item.sources">{{source}}</li>
									</ul>
								</div>
								<div v-if="item.crafting" class="crafting">
									<h3>Crafting:</h3>
									<div class="recipes">
										<div v-for="recipe in item.crafting" class="recipe">
											<div class="ingredients">
												<div v-for="ingredient in recipe.ingredients" class="ingredient">
													<div class="quantity">{{ingredient.quantity}}</div>
													<button v-on:click="load_item(ingredient.id, ingredient.name)" :id="ingredient.id">
														<img :alt="item.name" :src="'img/item/' + ingredient.id + '.png'">
														<div class="title">{{ingredient.name}}</div>
													</a>
												</div>
											</div>
											<div class="yield">Yields {{recipe.yield}} {{item.name}}.</div>
										</div>
									</div>
								</div>
								<div v-if="item.refining" class="refining">
									<h3>Refining:</h3>
									<div class="recipes">
										<div v-for="recipe in item.refining" class="recipe">
											<div class="ingredients">
												<div v-for="ingredient in recipe.ingredients" class="ingredient">
													<div class="quantity">{{ingredient.quantity}}</div>
													<button v-on:click="load_item(ingredient.id, ingredient.name)" :id="ingredient.id">
														<img :alt="item.name" :src="'img/item/' + ingredient.id + '.png'">
														<div class="title">{{ingredient.name}}</div>
													</button>
												</div>
											</div>
											<div class="yield">Yields {{recipe.yield}} {{item.name}}.</div>
										</div>
									</div>
								</div>
								<div v-if="item.cooking" class="cooking">
									<h3>Cooking:</h3>
									<div class="recipes">
										<div v-for="recipe in item.cooking" class="recipe">
											<div class="ingredients">
												<div v-for="ingredient in recipe.ingredients" class="ingredient">
													<div class="quantity">{{ingredient.quantity}}</div>
													<button v-on:click="load_item(ingredient.id, ingredient.name)" :id="ingredient.id">
														<img :alt="item.name" :src="'img/item/' + ingredient.id + '.png'">
														<div class="title">{{ingredient.name}}</div>
													</button>
												</div>
											</div>
											<div class="yield">Yields {{recipe.yield}} {{item.name}}.</div>
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
			<div class="copyright">© <?php echo date("Y"); ?> <a href="https://benmiles.com/" target="_blank">Ben Miles</a>. <a href="#" target="_self">No Man's Guide</a> is not affiliated with <a href="https://www.nomanssky.com/" target="_blank">No Man's Sky</a> or <a href="https://hellogames.org/" target="_blank">Hello Games</a>. </div>
            <div class="credits">Some data and images sourced from <a href="https://nomanssky.fandom.com/" target="_blank">No Man's Sky Wiki</a>, under a <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img src="img/icon/cc.svg" alt="Creative Commons Logo" class="creativecommons"> Creative Commons Attribution 3.0</a> license. </div>
        </section>

    </div>
    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>