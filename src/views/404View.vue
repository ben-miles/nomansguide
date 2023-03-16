<script>
import { RouterLink } from 'vue-router'
import error404Image from '/src/assets/images/error404.png'

export default {}
</script>

<template>
	<section id="404">
		<div class="container">
			<div class="row">
				<div class="column" style="text-align: center;">
					<img id="gaze" src="@/assets/images/error404.png" style="max-width:360px;"/>
					<h3>// Error 404</h3>
					<p style="font-weight: bold;">Sorry, the page you requested could not be found.</p>
					<p>Check the spelling of the address and try again, or <RouterLink to="/" target="_self">return to the home page</RouterLink>.</p>
				</div>
			</div>
		</div>
	</section>
</template>

<style>
</style>