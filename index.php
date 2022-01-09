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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/select2.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/vue/dist/vue.min.js"></script>
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
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
                    <svg class="logo" viewBox="0 0 74 128">
                        <polygon id="d" points="37,127 1,49 37,1 73,49 "/>
                        <polygon id="br" fill="#FFFFFF" points="36.847,60.552 71.906,48.906 72,49 37.153,61.448 "/>
                        <path id="c" fill="#FF0000" d="M55,49c0,9.941-8.059,18-18,18V31C46.941,31,55,39.059,55,49z"/>
                        <polygon id="tr" fill="#FFFFFF" points="72,49 37,37 37,2 "/>
                        <polygon id="l" fill="#FFFFFF" points="2.452,49.005 37,37 1.5,49 36.847,61.448 37.153,60.552 "/>
                        <polygon id="m" fill="#FFFFFF" points="37,2 37.75,61 37,126 36.25,61 "/>
                    </svg>
                <h1 class="title">No Man's Guide</h1>
                <h6 class="tagline">An unofficial companion-app for <a href="https://www.nomanssky.com/" target= "_blank">No Man's Sky</a>.</h6>
            </div>
            <div class="menu">
                <ul class="nav">
                    <li class="ships">
                        <button class="toggle">
                            <svg id="ship-icon" viewBox="0 0 400 400">
                                <polygon class="outer-ring" fill="none" stroke="#FFFFFF" stroke-width="10" stroke-miterlimit="10" stroke-opacity="0.65" points="43.75,109.789 200.001,19.577 356.25,109.789 356.25,290.211 200.001,380.424 43.75,290.211 "/>
                                <polygon class="inner-ring" fill="none" stroke="#FFFFFF" stroke-width="12" stroke-miterlimit="10" stroke-opacity="0.85" points="75,127.831 200.001,55.664 325,127.831 325,272.167 200.001,344.336 75,272.167 "/>
                                <polygon class="fill" points="90.625,136.852 200.001,73.703 309.375,136.852  309.375,263.148 200.001,326.297 90.625,263.148 "/>
                                <polygon class="border" fill="none" stroke="#000000" stroke-width="11.5" stroke-miterlimit="10" points="90.625,136.852 200.001,73.703 309.375,136.852 309.375,263.148 200.001,326.297 90.625,263.148 "/>
                                <path class="icon" d="M213.15,214.075l-3.775-100.013h-20.313l-3.775,100.013c-30.578,0.267-47.788,19.162-47.788,27.175v11.875H150 c0-7.479,16.205-17.611,33.834-0.516l-1.022,27.078h32.813l-1.021-27.078c17.629-17.096,33.834-6.963,33.834,0.516h12.5V241.25 C260.938,233.237,243.729,214.342,213.15,214.075z"/>
                            </svg>
                            <span>Ships</span>
                        </button>
                        <div class="drawer">
                            <h3>Ships</h3>
                            <ul></ul>	
                        </div>		
                    </li>
                    <li class="frigates">
                        <button class="toggle">
                            <svg id="frigate-icon" viewBox="0 0 400 400">
                                <polygon class="outer-ring" fill="none" stroke="#FFFFFF" stroke-width="10" stroke-miterlimit="10" stroke-opacity="0.65" points="43.75,109.789 200.001,19.577 356.25,109.789 356.25,290.211 200.001,380.424 43.75,290.211 "/>
                                <polygon class="inner-ring" fill="none" stroke="#FFFFFF" stroke-width="12" stroke-miterlimit="10" stroke-opacity="0.85" points="75,127.831 200.001,55.664 325,127.831 325,272.167 200.001,344.336 75,272.167 "/>
                                <polygon class="fill" points="90.625,136.852 200.001,73.703 309.375,136.852 309.375,263.148 200.001,326.297 90.625,263.148 "/>
                                <polygon class="border" fill="none" stroke="#000000" stroke-width="11.5" stroke-miterlimit="10" points="90.625,136.852 200.001,73.703 309.375,136.852 309.375,263.148 200.001,326.297 90.625,263.148 "/>
                                <path class="icon" d="M279.688,175h-14.063v-18.75c-13.625,0-26.164,14-30.026,18.75H150l-16.072,12.5h-19.866V200h68.842 c10.452,7.064,36.394,23.869,50.064,26.268v1.857c0,19.531,18.125,25,18.125,25v-28.689l28.594-27.248V175L279.688,175z"/>
                                </svg>
                            <span>Frigates</span>
                        </button>
                        <div class="drawer">
                            <h3>Frigates</h3>
                            <ul></ul>	
                        </div>
                    </li>
                    <li class="discoveries">
                        <button class="toggle">
                            <svg id="base-icon" viewBox="0 0 400 400">
                                <polygon class="outer-ring" fill="none" stroke="#FFFFFF" stroke-width="10" stroke-miterlimit="10" stroke-opacity="0.65" points="43.75,109.789 200.001,19.577 356.25,109.789 356.25,290.211 200.001,380.424 43.75,290.211 "/>
                                <polygon class="inner-ring" fill="none" stroke="#FFFFFF" stroke-width="12" stroke-miterlimit="10" stroke-opacity="0.85" points="75,127.833 200.001,55.664 325,127.833 325,272.169 200.001,344.336 75,272.169 "/>
                                <polygon class="fill" points="90.625,136.852 200.001,73.703 309.375,136.852 309.375,263.148 200.001,326.297 90.625,263.148 "/>
                                <polygon class="border" fill="none" stroke="#000000" stroke-width="11.5" stroke-miterlimit="10" points="90.625,136.852 200.001,73.703 309.375,136.852 309.375,263.148 200.001,326.297 90.625,263.148 "/>
                                <path class="icon" d="M278.125,241.986h-156.25v-15.625h156.25V241.986z M200,139.063c-75.552,0-78.125,74.844-78.125,74.844h25 c0-7.769,6.295-15.47,14.063-15.47S175,206.141,175,213.906h103.125C278.125,213.906,275.552,139.063,200,139.063z"/>
                                </svg>
                            <span>Discoveries</span>
                        </button>
                        <div class="drawer">
                            <h3>Discoveries</h3>
                            <ul></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="search">
                <select class="select2" name="search" style="width:100%;"></select>
            </div>
        </section>

        <section id="resources">

		<button v-for="item in items" v-on:click="load_item(item.id)">{{item.name}}</button>
		<div v-for="item in item_selected" style="border:1px solid red;">{{item.name}}</div>

            <div class="resource" id="carbon">
                <div class="title">Carbon</div>
                <div class="value">15</div>
                <img alt="Carbon" src="img/item/carbon.png">
            </div>
            <div id="details">
                <p class="description"><strong class="type">Unrefined Organic Element.</strong> Used in building, recharging the <a href="/Mining_Beam">Mining Beam</a> and as fuel for some machines.</p>
                <div class="recipe">&nbsp;</div>
            </div>
        </section>

        <section id="credits">
            <div>
                <div><small>Most data and images from the <a href="https://nomanssky.gamepedia.com/" target="_blank">No Man's Sky Wiki on Gamepedia</a>, licensed under a <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img src="img/icon/cc.svg" class="creativecommons"> Creative Commons Attribution 3.0</a> license.</small></div>
                <div><small>Some data and images from the <a href="https://nomanssky.fandom.com/wiki/No_Man%27s_Sky_Wiki" target="_blank">No Man's Sky Wiki on Fandom</a>, licensed under a <a href="https://creativecommons.org/licenses/by-sa/3.0/" target="_blank"><img src="img/icon/cc.svg" class="creativecommons"> Creative Commons Attribution 3.0</a> license.</small></div>
            </div>
        </section>

        <div class="hex"></div>
        <div class="slideshow">
            <div class="slide zero show"></div>
            <div class="slide one"></div>
            <div class="slide two"></div>
            <div class="slide three"></div>
            <div class="slide four"></div>
            <div class="slide five"></div>
            <div class="slide six"></div>
            <div class="slide seven"></div>
            <div class="slide eight"></div>
            <div class="slide nine"></div>
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>