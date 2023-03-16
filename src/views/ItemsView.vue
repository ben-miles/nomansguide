<script>
import { RouterLink } from 'vue-router'
import itemsData from '../assets/data/items.json'
import IconAll from '../components/icons/IconAll.vue'
import IconAtlas from '../components/icons/IconAtlas.vue'
import IconFuelAndUtilities from '../components/icons/IconFuelAndUtilities.vue'
import IconRawMaterialsCore from '../components/icons/IconRawMaterialsCore.vue'

export default {
	components: {
		IconAll,
		IconAtlas,
		IconFuelAndUtilities,
		IconRawMaterialsCore
	},
	data() {
		return {
			filter: "",
			selectedItemType: "all"
		}
	},
	methods: {
		selectItemType(itemType){
			this.selectedItemType = itemType;
			// Set all Type buttons as inactive
			let typeButtons = document.getElementsByClassName("type");
			for(var i = 0; i < typeButtons.length; i++){
				typeButtons[i].classList.remove("active");
			}
			// Set this Type button as active
			let thisTypeButton = document.getElementById(itemType);
			thisTypeButton.classList.add("active");
		}
	},
	computed: {
		itemsFiltered(){
			// filter by both name AND type
			if(this.filter !== "" && this.selectedItemType !== "all") {
				return Object.values(itemsData).filter(item => {
					return item.type === this.selectedItemType && item.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1;
				})
			}
			// filter only by type
			else if(this.selectedItemType !== "all") {
				return Object.values(itemsData).filter(item => {
					return item.type === this.selectedItemType;
				})
			}
			// filter only by name
			else if(this.filter !== "") {
				return Object.values(itemsData).filter(item => {
					return item.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1;
				})
			}
			// filter by neither name NOR type
			else {
				return Object.values(itemsData);
			}
		}
	}
}
</script>

<template>
	<section id="items">
		<div class="container">

			<div class="types">
				<button class="type active" id="all" @click="selectItemType('all')">
					<IconAll />
					<div>All</div>
				</button>
				<button class="type" id="raw_materials" @click="selectItemType('raw_materials')">
					<IconRawMaterialsCore />
					<div>Raw Materials</div>
				</button>
				<button class="type" id="crafted_products" @click="selectItemType('crafted_products')">
					<IconFuelAndUtilities />
					<div>Crafted Products</div>
				</button>
				<button class="type" id="curiosities" @click="selectItemType('curiosities')">
					<IconAtlas />
					<div>Curiosities</div>
				</button>
			</div>

			<div class="filter">
				<input v-model="filter" type="text" placeholder="Start typing to filter items...">
			</div>

			<div class="items">
				<RouterLink :to="{ name: 'item', params: { itemId: item.id }}" v-for="item in itemsFiltered" class="item" :id="item.id" :style="'background-image: linear-gradient(' + item.colors[0] + ', ' + item.colors[1] + ');'">
					<div class="name">
						<span>{{item.name}}</span>
					</div>
					<img :alt="item.name" :src="'items/' + item.id + '.png'" loading="lazy">
				</RouterLink>
			</div>
			
		</div>
	</section>
</template>

<style>
/* DRAWER */
#items .container > div:not(:last-of-type) {
	margin-bottom: 24px;
}

/* DRAWER > TYPES */
#items .types ul {
	list-style: none;
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: center;
	gap: 4px;
}
#items .types li {
	width: 25%;
}
#items .types button {
	background: transparent;
	border-left: solid transparent 4px;
	display: flex;
	align-items: center;
	flex-direction: column;
	gap: 8px;
	font-size: 16px;
	width: 100%;
	background: rgba(43,65,96,0.2);
	color: #fff;
    padding: 8px 4px;
}
@media ( min-width: 1024px ) {
	#items .types ul {
		gap: 10px;
	}
	#items .types button {
		flex-direction: row;
		padding: 12px 16px;
		gap: 16px;
		font-size: 20px;
	}
}
#items .types button svg {
	fill: #fff;
	height: 24px;
	width: auto;
	max-width: 24px;
}
#items .types button:hover,
#items .types button.active {
	background: rgba(103,116,173,0.5);
	border-left: solid #fff 4px;
}
#items .types button:hover svg,
#items .types button.active svg {
	filter: drop-shadow(0 0 4px rgba(224, 177, 66, 1));
}

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

/* DRAWER > ITEMS */
.items {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: flex-start;
	gap: 10px;
}
a.item {
	border: 4px solid #fff;
	font-size: 16px;
	font-weight: 600;
	width: calc( 25% - 7.5px );
}
a.item .name {
	background: #fff;
	color: #000;
	height: 20px;
	overflow: hidden;
	text-align: center;
}
a.item .name span {
	white-space: nowrap;
}
a.item img {
	display: block;
	width: 100%;
}
@media ( min-width: 1024px ) {
	a.item {
		width: calc( 12.5% - 8.75px );
	}
}
</style>