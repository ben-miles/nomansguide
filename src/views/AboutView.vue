<template>
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="column">
					<h1>About <i>No Man's Guide</i></h1>
					<p><i>No Man's Guide</i> is a second-screen companion app for the game "No Man's Sky." A convenient way to find location, crafting, refining and cooking information for over one hundred in-game items, as well as translations for the various alien languages.</p>
					<p><i>No Man's Guide</i> is not affiliated with or endorsed by <a href="https://www.nomanssky.com" target="_blank">No Man's Sky</a> or <a href="https://hellogames.org/" target="_blank">Hello Games</a>.</p>
					<p>My name is Ben Miles, and I'm a web developer and graphic designer from central Florida. My focus has primarily been front-end, but I've learned to be a full-stack dev while on the job. We typically kept to a few trusted platforms, libraries, and languages, but I wanted to learn more on my own.</p>
					<p>My original goal for building <i>No Man's Guide</i> was to find a fun way to learn about JavaScript array methods (like <pre class="inline">filter()</pre>, <pre class="inline">find()</pre>, and <pre class="inline">some()</pre>), and how to work with large amounts of JSON data. I originally wrote No Man's Guide in CodePen using jQuery and Select2 in 2020, and since then, I've replaced those libraries with vanilla JavaScript, integrated Vue 2 as a <a href="https://vuejs.org/guide/extras/ways-of-using-vue.html#standalone-script" target="_blank">"standalone script"</a> just for its reactivity, updated from Vue 2 to 3 and re-wrote my single-page application into Single-File Component (SFC) architecture with routing, and integrated GitHub Actions to make a Constant Integration/Constant Deployment (CI/CD) pipeline. So, I ended up learning about array methods and JSON, and a lot more.</p>
					<h1>Feedback</h1>
					<p>If you encounter any errors or unexpected behavior from <i>No Man's Guide</i>, please consider <a href="https://github.com/ben-miles/nomansguide/issues" target="_blank">creating a new issue in my repo on GitHub</a>.</p>
					<p>For all other feedback, please <a href="https://benmiles.com" target="_blank">visit my portfolio site</a>, where you can find a contact form.</p>
					<h1>Changelog</h1>
				</div>
			</div>
		</div>
	</section>
</template>

<style>
pre {
	overflow-x: auto;
    background: #333;
    color: #eee;
    font-family: monospace;
    border-radius: 4px;
}
pre.inline {
	display: inline-block;
}
</style>