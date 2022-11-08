<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Man's Guide</title>
	<meta name="description" content="A second screen companion app for the game No Man's Sky.">
	<meta name="author" content="Benjamin Miles">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-MC9RX7K');</script>
	<!-- End Google Tag Manager -->
	<script type="text/javascript" src="/js/vue.min.js"></script>
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MC9RX7K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                    <li class="nav-item" id="items">
                        <button class="toggle" v-on:click="toggleDrawer()">
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
        </section>

		<section id="drawer">
			<div class="container">

				<div class="types">
					<ul>
						<li>
							<button class="type active" id="all" v-on:click="selectItemType('all')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="56px" height="64px" viewBox="0 0 56 64" style="enable-background:new 0 0 56 64;" xml:space="preserve">
									<path d="M0,0v29.333h25.333V0H0z M22.667,26.667h-20v-20h20V26.667z M30.667,0v29.333H56V0H30.667z M53.333,26.667h-20v-20h20
										V26.667z M0,34.667V64h25.333V34.667H0z M22.667,61.333h-20v-20h20V61.333z M30.667,34.667V64H56V34.667H30.667z M53.333,61.333h-20
										v-20h20V61.333z"/>
								</svg>
								<div>All</div>
							</button>
						</li>
						<li>
							<button class="type" id="raw_materials" v-on:click="selectItemType('raw_materials')">
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
								<div>Raw Materials</div>
							</button>
						</li>
						<li>
							<button class="type" id="crafted_products" v-on:click="selectItemType('crafted_products')">
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
								<div>Crafted Products</div>
							</button>
						</li>
						<!--<li>
							<button class="type" id="equipment" v-on:click="selectItemType('equipment')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42px" height="64px" viewBox="0 0 42 64" style="enable-background:new 0 0 42 64;" xml:space="preserve">
									<path d="M38.198,24.832c-2.676,3.423-7.722,9.897-7.722,9.897s-0.765,25.889-0.739,26.168c0.306-0.085,7.976-2.705,11.538-3.997
										C41.6,56.782,42.002,56.272,42,55.95c-0.051-4.408-0.1-8.817-0.344-13.215c-0.03-0.567-1.21-1.021-1.756-1.621
										c-0.435-0.476-0.992-1.077-1.024-1.648C38.593,34.678,38.418,29.882,38.198,24.832z M41.244,5.334
										c-0.01-0.377-0.696-1.038-1.089-1.054c-3.051-0.126-3.04-0.088-3.156-3.194c-0.012-0.313-0.221-0.84-0.422-0.885
										c-1.684-0.379-3.253-0.465-3.299,1.985c-0.006,0.356-0.076,0.795-0.289,1.046c-0.342,0.397-0.831,0.951-1.257,0.951
										c-3.933,0.001-17.532,0.001-21.465,0c-0.426,0-0.915-0.554-1.257-0.951c-0.213-0.25-0.283-0.69-0.289-1.046
										c-0.046-2.45-1.615-2.364-3.299-1.985c-0.201,0.045-0.41,0.573-0.422,0.885C4.885,4.192,4.896,4.154,1.845,4.281
										C1.452,4.297,0.766,4.957,0.756,5.334C0.646,9.288,0.634,13.244,0.637,17.2c0,0.378,0.196,0.823,0.441,1.121
										c4.272,5.207,8.573,10.389,12.839,15.6c0.287,0.354,0.48,0.9,0.483,1.359c0.036,4.521,0.021,9.043,0.023,13.564
										c0.001,4.521-0.022,9.043,0.044,13.562c0.005,0.368,0.563,0.924,0.969,1.052c2.155,0.687,2.746,1.051,2.639-0.979
										c-0.084-1.628,0.055-7.156,0.211-7.158h5.428c0.156,0.002,0.295,5.53,0.211,7.158c-0.107,2.03,0.483,1.666,2.639,0.979
										c0.406-0.128,0.964-0.684,0.969-1.052c0.066-4.519,0.043-9.04,0.044-13.562c0.003-4.521-0.013-9.043,0.023-13.564
										c0.003-0.459,0.196-1.006,0.483-1.359c4.266-5.211,8.566-10.393,12.839-15.6c0.245-0.297,0.441-0.743,0.441-1.121
										C41.366,13.244,41.354,9.288,41.244,5.334z M23.29,27.683c-1.809,1.718-2.909,1.587-4.58,0c-1.969-1.871-8.523-10.447-8.64-13.685
										c-0.009-0.252,0.434-0.744,0.673-0.749c2.833-0.053,17.681-0.053,20.514,0c0.239,0.004,0.682,0.496,0.673,0.749
										C31.813,17.235,25.259,25.812,23.29,27.683z M3.124,39.466c-0.032,0.571-0.59,1.173-1.024,1.648c-0.546,0.6-1.726,1.054-1.756,1.621
										C0.1,47.133,0.051,51.542,0,55.95c-0.002,0.322,0.4,0.832,0.725,0.949c3.563,1.292,11.232,3.912,11.538,3.997
										c0.025-0.279-0.739-26.168-0.739-26.168s-5.046-6.474-7.722-9.897C3.582,29.882,3.407,34.678,3.124,39.466z"/>
								</svg>
								<div>Equipment</div>
							</button>
						</li>
						<li>
							<button class="type" id="constructed_technology" v-on:click="selectItemType('constructed_technology')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
									<path d="M63.924,1.557c-0.052-1.231-0.409-1.634-1.688-1.545c-4.515,0.313-9.036,0.609-13.559,0.701
										c-5.86,0.119-10.685,2.307-14.576,6.722c-2.512,2.851-5.103,5.629-7.675,8.425c-0.299,0.324-0.674,0.734-1.06,0.791
										C23.03,17,20.688,17.4,18.334,17.51c-0.589,0.028-1.186,0.178-1.769,0.387c-0.541-0.903-1.058-1.792-1.538-2.694
										c-0.292-0.549-0.302-1.533-0.003-2.07c1.184-2.128,2.508-4.18,3.795-6.251c-2.18,1.341-4.081,2.576-6.06,3.648
										c-0.543,0.295-1.519,0.304-2.051,0.003c-2.11-1.195-4.142-2.53-6.195-3.83c1.33,2.2,2.553,4.118,3.615,6.115
										c0.292,0.548,0.301,1.533,0.003,2.07c-1.184,2.128-2.508,4.179-3.796,6.25c2.18-1.34,4.081-2.576,6.06-3.648
										c0.543-0.295,1.52-0.304,2.051-0.003c0.752,0.426,1.486,0.883,2.222,1.337c-1.169,0.728-2.085,1.578-2.405,2.051
										c-3.296,4.884-6.549,9.802-9.994,14.577c-2.792,3.872-2.895,7.902-0.937,11.977c2.245,4.674,4.872,9.159,7.196,13.797
										c0.945,1.886,2.34,2.787,4.31,2.773c7.967-0.054,15.94-0.01,23.899-0.328c3.73-0.148,6.745-2.202,8.957-5.302
										c3.082-4.322,6.087-8.701,9.258-12.956c3.646-4.891,6.205-10.069,6.983-16.33C63.074,19.927,64.323,10.816,63.924,1.557z
										M60.907,16.765c-0.358,5.012-0.186,6.322-0.855,11.298c-0.68,5.059-3.38,9.607-4.408,11.145c-2.617,3.917-3.576,5.518-6.567,9.585
										c-1.046-2.039-1.937-3.776-2.962-5.776c-1.339,1.708-2.563,3.253-3.77,4.81c-2.737,3.534-5.411,7.12-8.246,10.572
										c-0.58,0.706-1.74,1.27-2.653,1.301c-5.396,0.182-10.798,0.197-16.198,0.245c-0.818,0.007-1.637-0.108-2.795-0.19
										c1.518-2.888,2.911-5.572,4.339-8.237c0.453-0.847,1.059-1.612,1.494-2.468c2.155-4.23,5.319-7.028,10.12-7.889
										c1.029-0.185,2.173-1.188,2.769-2.132c4.774-7.568,9.303-15.296,14.195-22.783c1.48-2.264,3.62-4.318,5.897-5.765
										c3.089-1.963,6.601-3.25,10.216-4.961C61.284,9.523,61.166,13.149,60.907,16.765z"/>
									</svg>
								<div>Constructed Technology</div>
							</button>
						</li>
						<li>
							<button class="type" id="construction_parts" v-on:click="selectItemType('construction_parts')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="38px" viewBox="0 0 64 38" style="enable-background:new 0 0 64 38;" xml:space="preserve">
									<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,38.116V9.514h6.2c0,0,0-6.194,0-9.398c17.253,0,51.522,0,51.522,0v9.398
										H64v28.571H36.636V25.952h-8.217l-0.032,12.165H0z"/>
								</svg>
								<div>Construction Parts</div>
							</button>
						</li>
						<li>
							<button class="type" id="trade_commodities" v-on:click="selectItemType('trade_commodities')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="55px" height="64px" viewBox="0 0 55 64" style="enable-background:new 0 0 55 64;" xml:space="preserve">
									<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M21.852,35.428h12.604v6.683H21.852V35.428z M28.016,51.678
										c3.377,0,5.699-1.916,6.285-6.141H22.008C22.605,49.813,24.971,51.678,28.016,51.678z M54.506,51.693
										c-0.777,5.713-4.324,9.188-10.025,10.55c-8.553,2.046-17.205,2.043-25.881,1.31c-2.77-0.234-5.576-0.68-8.234-1.464
										C3.768,60.145,0.482,56.063,0.08,49.211c-0.697-11.869,3.113-22.113,11.816-30.416c3.143-2.999,6.893-4.963,11.82-5.926
										c-0.91-0.722-1.508-1.141-2.039-1.629c-2.732-2.5-3.088-5.784-3.01-9.189c0.006-0.217,0.309-0.571,0.527-0.618
										c4.549-0.984,9.16-2.178,13.764-0.83c1.928,0.564,3.584,2.095,5.289,3.289c0.234,0.165,0.244,1.065,0.018,1.392
										c-1.797,2.594-3.676,5.131-5.428,7.546c2.184,1.024,4.639,1.846,6.729,3.216c8.924,5.85,13.475,14.519,15.105,24.703
										C55.24,44.306,54.996,48.095,54.506,51.693z M42.709,32h-4.795v-6.213h-3.459V32H21.852v-6.213h-3.457V32h-5.967l-0.139,3.428h6.105
										v6.683h-5.967l-0.139,3.427h6.238c0.719,6.409,4.5,8.905,9.371,8.905c5.107,0,9.053-2.636,9.857-8.905h4.953V42.11h-4.795v-6.683
										h4.795V32z"/>
								</svg>
								<div>Trade Commodities</div>
							</button>
						</li>-->
						<li>
							<button class="type" id="curiosities" v-on:click="selectItemType('curiosities')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="64px" viewBox="0 0 36 64" style="enable-background:new 0 0 36 64;" xml:space="preserve">
									<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M18.207,0L0,25.47L18.069,64L36,25.47L18.207,0z M17.986,34.416
										c-4.898,0-8.868-4.005-8.868-8.946c0-4.941,3.97-8.946,8.868-8.946c4.899,0,8.868,4.005,8.868,8.946
										C26.854,30.411,22.886,34.416,17.986,34.416z"/>
								</svg>
								<div>Curiosities</div>
							</button>
						</li>
						<!--<li>
							<button class="type" id="cooking_products" v-on:click="selectItemType('cooking_products')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="52px" viewBox="0 0 64 52" style="enable-background:new 0 0 64 52;" xml:space="preserve">
									<path d="M29.977,51.707c-0.531-0.021-0.954-0.3-1.069-0.854c-0.115-0.553-2.445-11.758-2.445-11.758
										c-0.047-0.246,0.401-0.851,0.623-0.853l4.367-0.156c10.643-0.021,21.281,0.063,31.921,0.156c0.222,0.002,0.67,0.606,0.623,0.853
										c-0.765,3.926-1.571,7.844-2.446,11.745c-0.08,0.363-0.693,0.856-1.068,0.865c-5.963,0.122-11.928,0.213-17.894,0.229
										C42.588,51.938,30.507,51.729,29.977,51.707z M33.92,7.017c-1.994,1.219-4.547,2.581-4.935,5.608
										c-0.4,3.127,6.404,4.687,9.705,6.076c3.515,1.481,7.102,2.848,9.848,5.655c0.262,0.269,0.398,0.895,0.283,1.256
										c-0.504,1.583-1.135,3.125-1.697,4.69c-0.467,1.3,0.27,2.222,1.662,2.069c0.484-0.055,0.966-0.191,1.427-0.354
										c4.894-1.699,8.334-5.097,10.886-9.488c1.164-2.006,0.965-4.026-0.287-5.934c-1.582-2.412-3.955-3.607-6.677-4.245
										c-3.108-0.728-6.219-1.439-9.313-2.213c-2.944-0.733-2.83-2.588-2.28-4.596c0.313-1.146,0.911-2.216,1.401-3.31
										c0.283-0.635,0.607-1.252,1.119-2.294C41.08,2.477,37.536,4.807,33.92,7.017z M23.872,42.129c-0.216-2.123-1.223-2.902-3.394-3.221
										c-5.927-0.866-11.346-1.764-16.991-2.811C1.55,35.74,1.07,37.188,0,38.271c0.528,0.113,0.906,0.201,1.286,0.275
										c6.36,1.243,12.724,2.465,19.072,3.77c0.428,0.09,1.038,0.789,1.041,1.207c0.013,1.854,0.801,2.529,2.581,2.088
										c0.175-0.043,0.36-0.049,0.713-0.094C24.395,44.327,23.986,43.244,23.872,42.129z"/>
									</svg>
								<div>Cooking Products</div>
							</button>
						</li>
						<li>
							<button class="type" id="portal_glyphs" v-on:click="selectItemType('portal_glyphs')">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38px" height="64px" viewBox="0 0 38 64" style="enable-background:new 0 0 38 64;" xml:space="preserve">
									<path d="M19.075,10.264c-5.994,0-10.854,4.807-10.854,10.737c0,5.929,4.859,10.738,10.854,10.738c5.995,0,10.854-4.81,10.854-10.738
										C29.929,15.07,25.069,10.264,19.075,10.264z M19.075,27.438c-3.592,0-6.505-2.885-6.505-6.437c0-3.555,2.913-6.437,6.505-6.437
										c3.593,0,6.506,2.882,6.506,6.437C25.581,24.553,22.668,27.438,19.075,27.438z M21.603,21.001c0,1.38-1.132,2.499-2.528,2.499
										s-2.528-1.119-2.528-2.499c0-1.383,1.131-2.501,2.528-2.501S21.603,19.618,21.603,21.001z M17.002,64H0V0h17.002v6.618
										C9.868,7.617,4.375,13.668,4.375,21.001c0,7.334,5.493,13.381,12.627,14.381V64z M38,0v64H20.619V35.461
										c7.392-0.764,13.156-6.944,13.156-14.46c0-7.515-5.764-13.698-13.156-14.463V0H38z"/>
									</svg>
								<div>Portal Glyphs</div>
							</button>
						</li>-->
					</ul>
				</div>

				<div class="filter">
					<input v-model="filter" type="text" placeholder="Start typing to filter items...">
				</div>

				<div class="items">
					<ul>
						<li v-for="item in itemsFiltered">
							<button class="item" :id="item.id" v-on:click="selectItem(item.id, item.name)">
								<div class="name">
									<span>{{item.name}}</span>
								</div>
								<img :alt="item.name" :src="'img/item/' + item.id + '.png'" loading="lazy">
							</button>
						</li>
					</ul>
				</div>
				
			</div>
		</section>

        <section id="body">
			<div class="resource" v-for="item in itemSelected">
				<div class="container">
					<div class="row">
						<div class="column">
							<div class="card" :id="item.id">
								<h2 class="name">{{item.name}}</h2>
								<h3 class="value">{{item.value.toLocaleString("en-US")}}</h3>
								<img :alt="item.name" :src="'img/item/' + item.id + '.png'" loading="lazy">
							</div>
						</div>
						<div class="column">
							<div class="details">
								<div v-if="item.description" class="description">
									<p>{{item.description}}</p>
								</div>
								<div class="sources">
									<h3>Sources:</h3>
									<ul v-if="item.sources">
										<li v-for="source in item.sources">{{source}}</li>
									</ul>
									<div v-if="item.crafting" class="crafting">
										<h3>Crafting:</h3>
										<div class="recipes">
											<div v-for="recipe in item.crafting" class="recipe">
												<div class="ingredients">
													<div v-for="ingredient in recipe.ingredients" class="ingredient">
														<div class="quantity">{{ingredient.quantity}}</div>
														<button v-on:click="selectItem(ingredient.id, ingredient.name)" :id="ingredient.id">
															<img :alt="item.name" :src="'img/item/' + ingredient.id + '.png'" loading="lazy">
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
														<button v-on:click="selectItem(ingredient.id, ingredient.name)" :id="ingredient.id">
															<img :alt="item.name" :src="'img/item/' + ingredient.id + '.png'" loading="lazy">
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
														<button v-on:click="selectItem(ingredient.id, ingredient.name)" :id="ingredient.id">
															<img :alt="item.name" :src="'img/item/' + ingredient.id + '.png'" loading="lazy">
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
			</div>
		</section>

        <section id="footer">
			<div class="copyright">© <?php echo date("Y"); ?> <a href="https://benmiles.com/" target="_blank">Ben Miles</a>. <a href="#" target="_self">No Man's Guide</a> is not affiliated with <a href="https://www.nomanssky.com/" target="_blank">No Man's Sky</a> or <a href="https://hellogames.org/" target="_blank">Hello Games</a>. </div>
            <div class="credits">Some data and images sourced from <a href="https://nomanssky.fandom.com/" target="_blank">No Man's Sky Wiki</a>, under a <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img src="img/icon/cc.svg" alt="Creative Commons Logo" class="creativecommons" loading="lazy"> Creative Commons Attribution 3.0</a> license. </div>
        </section>

    </div>
	<script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script type="module" src="js/app.js"></script>
</body>
</html>