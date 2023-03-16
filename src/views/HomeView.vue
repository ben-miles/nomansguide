<script>
import { RouterLink } from 'vue-router'
import IconTranslator from '../components/icons/IconTranslator.vue';
import IconItems from '../components/icons/IconItems.vue'

export default {
	components: { 
		IconTranslator,
		IconItems 
	}
}
</script>

<template>
	<section id="home">
		<div class="container">
			<div class="row" style="justify-content:center;">
				<div class="column column-third">
					<RouterLink to="/translator" class="module module-language">
						<div class="inside">
							<IconTranslator />
							<h3>Translator</h3>
							<hr>
							<p>Translate the words of any alien language to English, and vice versa.</p>
						</div>
					</RouterLink>
				</div>
				<div class="column column-third">
					<RouterLink to="/items" class="module module-items">
						<div class="inside">
							<IconItems />
							<h3>Items</h3>
							<hr>
							<p>Where to find raw materials, and how to craft and refine advanced items.</p>
						</div>
					</RouterLink>
				</div>
			</div>
		</div>
	</section>
</template>

<style>
.module {
	display: block;
	height: 400px;
	position: relative;
	border: 3px solid transparent;
}
@media (min-width: 1024px) {
	.module {
		height: 600px;
	}
}
.module::before {
	background-blend-mode: lighten;
	background-position: center;
	background-size: cover;
	content: "";
	position: absolute;
	top: 0; 
	left: 0;
	width: 100%; 
	height: 100%;
	filter: saturate(0.2);
}
.module:hover {
	border-image: linear-gradient(rgba(237,248,255,1), rgba(237,248,255,0)) 1 1 0 1;
    border-style: solid;
    border-width: 3px;
}
.module:hover::before {
	background-blend-mode: normal;
	box-shadow: inset 0 0 10px rgba(237,248,255,1), 1px -10px 30px 0px rgb(184 227 255 / 50%);
	filter: saturate(1);
}
.module-language::before {
	background-image: url(src/assets/images/backgrounds/bkgTranslator.jpg), linear-gradient(rgba(255,0,0,1), rgba(0,0,255,1));
}
.module-items::before {
	background-image: url(src/assets/images/backgrounds/bkgItems.jpg), linear-gradient(rgba(255,0,0,1), rgba(0,0,255,1));
}
.module .inside {
	bottom: 0;
	background-image: linear-gradient(rgba(0,0,0,0) 10%, rgba(0,0,0,1) 90%);
	padding: 20px 15px 10px;
	position: absolute;
	width: 100%;
}
.module h3 {
	font-weight: 400;
	line-height: 30px;
	margin-bottom: 5px;
	text-align: center;
}
.module hr {
	border: 0;
	border-top: 1px solid rgba(255,255,255,0.125);
	margin-bottom: 10px;
}
.module p {
	font-size: 16px;
	font-weight: 200;
	line-height: 18px;
	text-align: center;
}
.module .icon {
	display: block;
	fill: #fff;
	height: 50px;
	margin: 0 auto 10px;
	width: 50px;
	filter: drop-shadow(0 0 5px #e3b324);
}
</style>