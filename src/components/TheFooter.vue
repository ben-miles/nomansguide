<script>
export default {
  data() {
    return {
      publishYear: new Date(2020,9,20).getFullYear(),
	  currentYear: new Date().getFullYear()
    }
  }
}
</script>

<template>
	<footer>
		<div class="copyright">© {{ publishYear }} - {{ currentYear }} <a href="https://benmiles.com/" target="_blank">Ben Miles</a>. <a href="#" target="_self">No Man's Guide</a> is not affiliated with <a href="https://www.nomanssky.com/" target="_blank">No Man's Sky</a> or <a href="https://hellogames.org/" target="_blank">Hello Games</a>. </div>
		<div class="credits">Some data and images sourced from <a href="https://nomanssky.fandom.com/" target="_blank">No Man's Sky Wiki</a>, under a <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img src="img/icon/cc.svg" alt="Creative Commons Logo" class="creativecommons" loading="lazy"> Creative Commons Attribution 3.0</a> license. </div>
	</footer>
</template>

<style>
footer {
	background: rgba(9, 7, 9, 0.7);
	color: rgba(255, 255, 255, 0.5);
	padding: 8px;
	font-size: 12px;
	text-align: center;
}
footer a {
	color: rgba(255, 255, 255, 0.6);
	text-decoration: none;
	font-weight: 500;
}
footer .creativecommons {
    height: 16px;
    top: 4px;
    margin: 0 0 0 3px;
}
</style>