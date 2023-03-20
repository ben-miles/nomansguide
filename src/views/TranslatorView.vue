<script>
import atlasLangData from '../assets/data/lang_atlas.json'
import gekLangData from '../assets/data/lang_gek.json'
import korvaxLangData from '../assets/data/lang_korvax.json'
import vykeenLangData from '../assets/data/lang_vykeen.json'
import IconAll from '../components/icons/IconAll.vue'
import IconAtlas from '../components/icons/IconAtlas.vue'
import IconGek from '../components/icons/IconGek.vue'
import IconKorvax from '../components/icons/IconKorvax.vue'
import IconVykeen from '../components/icons/IconVykeen.vue'

export default {
	components: {
		IconAll,
		IconAtlas,
		IconGek,
		IconKorvax,
		IconVykeen
	},
	data() {
		return {
			filter: "",
			selectedLanguage: "all",
			langData: [
				atlasLangData,
				gekLangData,
				korvaxLangData,
				vykeenLangData
			] 
		}
	},
	methods: {
		selectLanguage(language){
			this.selectedLanguage = language;
			// Set all Type buttons as inactive
			let typeButtons = document.getElementsByClassName("type");
			for(var i = 0; i < typeButtons.length; i++){
				typeButtons[i].classList.remove("active");
			}
			// Set this Type button as active
			let thisTypeButton = document.getElementById(language);
			thisTypeButton.classList.add("active");
		},
		languageFiltered(langData){
			// filter by text input AND type
			if(this.filter !== "" && this.selectedLanguage !== "all") {
				if(langData.name === this.selectedLanguage){
					return langData.translations.filter(record => {
						return Object.values(record).some(word => 
							word.toLowerCase().includes(this.filter.toLowerCase())
						)
					})
				}
			}			
			// filter only by text input
			else if(this.filter !== "") {
				return langData.translations.filter(record => {
					return Object.values(record).some(word => 
						word.toLowerCase().includes(this.filter.toLowerCase())
					)
				})
			}
			// else, show nothing
			else {
				return false;
			}
		}
	}
}
</script>

<template>
	<section id="translations">
		<div class="container">

			<div class="types">
				<button class="type active" id="all" @click="selectLanguage('all')">
					<IconAll />
					<div>All</div>
				</button>
				<button class="type" id="Atlas" @click="selectLanguage('Atlas')">
					<IconAtlas />
					<div>Atlas</div>
				</button>
				<button class="type" id="Gek" @click="selectLanguage('Gek')">
					<IconGek />
					<div>Gek</div>
				</button>
				<button class="type" id="Korvax" @click="selectLanguage('Korvax')">
					<IconKorvax />
					<div>Korvax</div>
				</button>
				<button class="type" id="Vy'keen" @click="selectLanguage('Vy\'keen')">
					<IconVykeen />
					<div>Vy'keen</div>
				</button>
			</div>

			<div class="filter">
				<input v-model="filter" type="text" placeholder="Start typing to find known translations...">
			</div>

			<div v-for="language in langData">
				<div v-if="languageFiltered(language) && languageFiltered(language).length>0" class="language">
					<div class="heading">
						<component :is="language.icon"></component>
						<h3>{{ language.name }}</h3>
					</div>
					<div class="translations">
						<div class="column-headings">
							<div class="column column-fourth"><b>English:</b></div>
							<div class="column column-fourth"><b>Lowercase:</b></div>
							<div class="column column-fourth"><b>Capitalized:</b></div>
							<div class="column column-fourth"><b>All Caps:</b></div>
						</div>
						<div v-for="translation in languageFiltered(language)" class="translation">
							<div class="column column-fourth"><span v-if="translation.english"><b>English:</b> {{ translation.english }}</span></div>
							<div class="column column-fourth"><span v-if="translation.lowercase"><b>Lowercase:</b> {{ translation.lowercase }}</span></div>
							<div class="column column-fourth"><span v-if="translation.uppercase"><b>Capitalized:</b> {{ translation.uppercase }}</span></div>
							<div class="column column-fourth"><span v-if="translation.allcaps"><b>All Caps:</b> {{ translation.allcaps.toUpperCase() }}</span></div>
						</div>
					</div>
				</div>
			</div>

			<div class="note"><b>NOTE:</b> There are two to three words in every Alien language for any English word, based on capitalization -- Capitalized, lowercase, and ALL CAPS words are distinct from one another.</div>
			
		</div>
	</section>
</template>

<style>
/* DRAWER > TYPES */
#translations .types {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	gap: 10px;
	justify-content: center;
	margin-bottom: 24px;
}
#translations .types .type {
	background: transparent;
	border-left: solid transparent 4px;
	display: flex;
	align-items: center;
	flex-basis: calc( 20% - 8px );
	flex-direction: row;
	font-family: "geosanslight-nmsregular", "Vazirmatn", Helvetica, Arial, sans-serif;
	font-size: 20px;
	gap: 16px;
	width: 100%;
	background: rgba(43,65,96,0.2);
	color: #fff;
    padding: 12px 16px;
}
#translations .types button svg {
	fill: #fff;
	height: 24px;
	width: auto;
	max-width: 24px;
}
#translations .types button:hover,
#translations .types button.active {
	background: rgba(103,116,173,0.5);
	border-left: solid #fff 4px;
}
#translations .types button:hover svg,
#translations .types button.active svg {
	filter: drop-shadow(0 0 4px rgba(224, 177, 66, 1));
}

/* DRAWER > FILTER */
#translations .filter input {
	border: none;
	border-radius: 0;
	font-family: "geosanslight-nmsregular", "Vazirmatn", Helvetica, Arial, sans-serif;
	font-size: 20px;
	font-weight: 600;
	margin: 0 0 60px;
	outline: none;
	padding: 8px;
  	width: 100%;
}
.language {
	margin-bottom: 60px;
}
.language .heading {
	align-items: center;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	margin-bottom: 10px;
}
.language .icon {
	fill: #fff;
	height: 48px;
	margin: 0 20px;
	width: auto;
}
.language h3 {
	font-family: "geosanslight-nmsregular", "Vazirmatn", Helvetica, Arial, sans-serif;
}
.translations {
	border-top: 1px solid rgba(255,255,255,0.1);
	background: rgba(255,255,255,0.05);
	padding: 20px;
}
.column-headings {
	border-bottom: 1px solid rgba(255,255,255,0.1);
	display: none;
	flex-direction: row;
	padding: 0 0 10px;
}
@media (min-width: 1024px) {
	.column-headings {
		display: flex;
	}
}
.translation {
	border-bottom: 1px solid rgba(255,255,255,0.1);
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	padding: 10px 0;
	text-align: center;
}
@media (min-width: 1024px) {
	.translation {
		text-align: left;
	}
}
.translation:last-of-type {
	border: none;
}
.translation b {
	font-size: 75%;
}
@media (min-width: 1024px) {
	.translation b {
		display: none;
	}
}
#translations .note {
	padding: 10px 20px;
    background: rgba(255,255,255,0.125);
    margin: 0 50px;
    border-left: 4px solid #fff;
}
</style>