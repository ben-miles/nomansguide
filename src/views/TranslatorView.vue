<script>
import atlasLangData from '../assets/lang_atlas.json'
import gekLangData from '../assets/lang_gek.json'
import korvaxLangData from '../assets/lang_korvax.json'
import vykeenLangData from '../assets/lang_vykeen.json'

export default {
	data() {
		return {
			filter: "",
			atlasLangData: atlasLangData,
			gekLangData: gekLangData,
			korvaxLangData: korvaxLangData,
			vykeenLangData: vykeenLangData
		}
	},
	methods: {
		languageFiltered(langData){
			// filter only by name
			if(this.filter !== "") {
				return langData.filter(record => {
					return Object.values(record).some(word => 
						word.toLowerCase().includes(this.filter.toLowerCase())
					)
				})
			}
			// filter by neither name NOR type
			else {
				return false;
			}
		}
	}
}
</script>

<template>
	<section id="items">
		<div class="container">

			<div class="filter">
				<input v-model="filter" type="text" placeholder="Start typing to find known translations...">
			</div>

			<div v-if="languageFiltered(atlasLangData).length>0" class="languages">
				<h3>Atlas</h3>
				<div v-for="record in languageFiltered(atlasLangData)" class="item">
					<div style="display: inline-block; width: 25%;"><b>English:</b> {{ record.english }}</div>
					<div style="display: inline-block; width: 25%;"><b>Uppercase:</b> {{ record.lowercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>Lowercase:</b> {{ record.uppercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>All Caps:</b> {{ record.allcaps }}</div>
				</div>
			</div>

			<div v-if="languageFiltered(gekLangData).length>0" class="languages">
				<h3>Gek</h3>
				<div v-for="record in languageFiltered(gekLangData)" class="item">
					<div style="display: inline-block; width: 25%;"><b>English:</b> {{ record.english }}</div>
					<div style="display: inline-block; width: 25%;"><b>Uppercase:</b> {{ record.lowercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>Lowercase:</b> {{ record.uppercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>All Caps:</b> {{ record.allcaps }}</div>
				</div>
			</div>

			<div v-if="languageFiltered(korvaxLangData).length>0" class="languages">
				<h3>Korvax</h3>
				<div v-for="record in languageFiltered(korvaxLangData)" class="item">
					<div style="display: inline-block; width: 25%;"><b>English:</b> {{ record.english }}</div>
					<div style="display: inline-block; width: 25%;"><b>Uppercase:</b> {{ record.lowercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>Lowercase:</b> {{ record.uppercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>All Caps:</b> {{ record.allcaps }}</div>
				</div>
			</div>

			<div v-if="languageFiltered(vykeenLangData).length>0" class="languages">
				<h3>Vy'keen</h3>
				<div v-for="record in languageFiltered(vykeenLangData)" class="item">
					<div style="display: inline-block; width: 25%;"><b>English:</b> {{ record.english }}</div>
					<div style="display: inline-block; width: 25%;"><b>Uppercase:</b> {{ record.lowercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>Lowercase:</b> {{ record.uppercase }}</div>
					<div style="display: inline-block; width: 25%;"><b>All Caps:</b> {{ record.allcaps }}</div>
				</div>
			</div>
			
		</div>
	</section>
</template>

<style>
/* DRAWER > FILTER */
#items .filter input {
	border: none;
	border-radius: 0;
	font-family: "geosanslight-nmsregular", "Raleway", Helvetica, Arial, sans-serif;
	font-size: 20px;
	font-weight: 600;
	outline: none;
	padding: 8px;
  	width: 100%;
}
</style>