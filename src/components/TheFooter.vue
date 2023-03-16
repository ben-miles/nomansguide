<script>
// import IconCreativeCommons from '../components/icons/IconCreativeCommons.vue'
import IconGitHub from './icons/IconGitHub.vue'

export default {
	components: { 
	// 	IconCreativeCommons
		IconGitHub
	},
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
		<div class="copyright">© {{ publishYear }} - {{ currentYear }} <a href="https://benmiles.com/" target="_blank">Ben Miles</a>. <a href="#" target="_self">No Man's Guide</a> is not affiliated with <a href="https://www.nomanssky.com/" target="_blank">No Man's Sky</a> or <a href="https://hellogames.org/" target="_blank">Hello Games</a>. See <a href="https://github.com/ben-miles/nomansguide/" target="_blank">the <IconGitHub />GitHub repo</a> for more information!</div>
	</footer>
</template>

<style>
footer {
	background: rgba(9, 7, 9, 0.7);
	color: rgba(255, 255, 255, 0.5);
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: center;
	min-height: 40px;
	padding: 8px;
	font-size: 12px;
	text-align: center;
}
footer a {
	color: rgba(255, 255, 255, 0.6);
	text-decoration: none;
	font-weight: 500;
}
footer a:hover {
	color: #fff;
}
/* footer .icon-creativecommons {
	display: inline;
    fill: red;
	height: 12px;
    margin: 0 0 0 4px;
	width: auto;
} */
footer .icon-github {
    fill: rgba(255, 255, 255, 0.6);
	height: 14px;
    margin: 0 4px 0 0;
	width: auto;
}
footer a:hover .icon-github {
	fill: #fff;
}
</style>