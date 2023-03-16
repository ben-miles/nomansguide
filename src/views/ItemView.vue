<script>
import { RouterLink } from 'vue-router'
import itemsData from '../assets/data/items.json'
import IconUnits from '../components/icons/IconUnits.vue'
import VanillaTilt from 'vanilla-tilt'

export default {
	components: { IconUnits },
	data() {
		return {
			newSelectedItem: itemsData[this.$route.params.itemId]
		}
	},
	methods: {
		itemColors(itemId){
			// return a string containing CSS for a gradient background, given an item's id
			var thisItem = Object.values(itemsData).find(item => item.id === itemId);
			return 'background-image: linear-gradient(' + thisItem.colors[0] + ', ' + thisItem.colors[1] + ');';
		},
		itemName(itemId){
			// return a string containing an item's name, given an item's id
			var thisItem = Object.values(itemsData).find(item => item.id === itemId);
			return thisItem.name;
		}
	},
	computed: {
		usesCrafting(){
			return Object.values(itemsData).filter( item => {
				if(item.crafting){
					return item.crafting.some( recipe => {
						return recipe.ingredients.some( ingredient => { 
							return ingredient.id === this.$route.params.itemId;
						}); 
					}) 
				}
			});
		},
		usesRefining(){
			return Object.values(itemsData).filter( item => {
				if(item.refining){
					return item.refining.some( recipe => {
						return recipe.ingredients.some( ingredient => { 
							return ingredient.id === this.$route.params.itemId;
						}); 
					}) 
				}
			});
		},
		initVanillaTilt(){
			VanillaTilt.init(document.querySelector(".card"), {
				max: 8,
				speed: 400,
				glare: true,
				"max-glare": 0.75,
				reverse: true
			});
		}
	},
	mounted() {
		this.initVanillaTilt
	}
}
</script>

<template>
	<section id="body">
		<div v-if="!newSelectedItem"><h1>Item not found.</h1></div>
		<div v-else class="resource">
			<div class="container">
				<div class="row">
					<div class="column column-half">
						<div class="card" :id="newSelectedItem.id" :style="'background-image: linear-gradient(' + newSelectedItem.colors[0] + ', ' + newSelectedItem.colors[1] + ');'">
							<h2 class="name">{{newSelectedItem.name}}</h2>
							<h3 class="value">{{newSelectedItem.value.toLocaleString("en-US")}} <IconUnits /></h3>
							<img :alt="newSelectedItem.name" :src="'../items/' + newSelectedItem.id + '.png'" loading="lazy">
						</div>
						<div v-if="newSelectedItem.description" class="details description">
							<p>{{newSelectedItem.description}}</p>
						</div>
					</div>

					<div class="column column-half">
						<h3 class="item-heading">Sources:</h3>
						<div class="details sources">
							<ul v-if="newSelectedItem.sources">
								<li v-for="source in newSelectedItem.sources">{{source}}</li>
							</ul>
							<div v-if="newSelectedItem.crafting" class="crafting">
								<h4>Crafting:</h4>
								<p>{{newSelectedItem.name}} can be built using a blueprint and the following ingredients:</p>
								<div class="recipes">
									<div v-for="recipe in newSelectedItem.crafting" class="recipe">
										<div class="ingredients">
											<div v-for="ingredient in recipe.ingredients" class="ingredient">
												<div class="quantity">{{ingredient.quantity}}</div>
												<RouterLink :to="{ name: 'item', params: { itemId: ingredient.id }}" class="item small" :id="ingredient.id" :key="ingredient.id" :style="itemColors(ingredient.id)">
													<img :alt="itemName(ingredient.id)" :src="'../items/' + ingredient.id + '.png'" loading="lazy">
													<div class="title">{{itemName(ingredient.id)}}</div>
												</RouterLink>
											</div>
										</div>
										<div class="yield">Yields {{recipe.yield}} {{newSelectedItem.name}}.</div>
									</div>
								</div>
							</div>
							<div v-if="newSelectedItem.refining" class="refining">
								<h4>Refining:</h4>
								<p>{{newSelectedItem.name}} can be refined using a Refiner with the following ingredients:</p>
								<div class="recipes">
									<div v-for="recipe in newSelectedItem.refining" class="recipe">
										<div class="ingredients">
											<div v-for="ingredient in recipe.ingredients" class="ingredient">
												<div class="quantity">{{ingredient.quantity}}</div>
												<RouterLink :to="{ name: 'item', params: { itemId: ingredient.id }}" class="item small" :id="ingredient.id" :style="itemColors(ingredient.id)">
													<img :alt="itemName(ingredient.id)" :src="'../items/' + ingredient.id + '.png'" loading="lazy">
													<div class="title">{{itemName(ingredient.id)}}</div>
												</RouterLink>
											</div>
										</div>
										<div class="yield">Yields {{recipe.yield}} {{newSelectedItem.name}}.</div>
									</div>
								</div>
							</div>
							<div v-if="newSelectedItem.cooking" class="cooking">
								<h4>Cooking:</h4>
								<p>{{newSelectedItem.name}} can be cooked using a Nutrient Processor with the following ingredients:</p>
								<div class="recipes">
									<div v-for="recipe in newSelectedItem.cooking" class="recipe">
										<div class="ingredients">
											<div v-for="ingredient in recipe.ingredients" class="ingredient">
												<div class="quantity">{{ingredient.quantity}}</div>
												<RouterLink :to="{ name: 'item', params: { itemId: ingredient.id }}" class="item small" :id="ingredient.id" :style="itemColors(ingredient.id)">
													<img :alt="itemName(ingredient.id)" :src="'../items/' + ingredient.id + '.png'" loading="lazy">
													<div class="title">{{itemName(ingredient.id)}}</div>
												</RouterLink>
											</div>
										</div>
										<div class="yield">Yields {{recipe.yield}} {{newSelectedItem.name}}.</div>
									</div>
								</div>
							</div>
						</div>

						<h3 v-if="usesCrafting.length || usesRefining.length" class="item-heading">Uses:</h3>
						<div v-if="usesCrafting.length || usesRefining.length" class="details uses">
							<div v-if="usesCrafting.length" class="crafting">
								<h4>Crafting:</h4>
								<p>{{newSelectedItem.name}} is used as an ingredient for crafting the following products:</p>
								<div class="items">
									<RouterLink :to="{ name: 'item', params: { itemId: craftable.id }}" v-for="craftable in usesCrafting" class="item small" :id="craftable.id" :key="craftable.id" :style="itemColors(craftable.id)">
										<img :alt="craftable.name" :src="'../items/' + craftable.id + '.png'" loading="lazy">
										<div class="title">{{craftable.name}}</div>
									</RouterLink>
								</div>
							</div>
							<div v-if="usesRefining.length" class="refining">
								<h4>Refining:</h4>
								<p>{{newSelectedItem.name}} is used as an ingredient for refining the following products using a Refiner:</p>
								<div class="items">
									<RouterLink :to="{ name: 'item', params: { itemId: refinable.id }}" v-for="refinable in usesRefining" class="item small" :id="refinable.id" :key="refinable.id" :style="itemColors(refinable.id)">
										<img :alt="refinable.name" :src="'../items/' + refinable.id + '.png'" loading="lazy">
										<div class="title">{{refinable.name}}</div>
									</RouterLink>
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</div>
	</section>
</template>

<style>
/* RESOURCES */
.card {
	border: 8px solid #fff;
	margin: 0 0 30px;
	transform-style: preserve-3d;
	transform: perspective(1000px);
	box-shadow: 0 4px 48px rgba(0,0,0,.7);
}
.card img {
	display: block;
	height: auto;
	width: 100%;
	margin: 0;
	padding: 12px 14px 16px;
	transform: translateZ(64px);
}
.card .name {
	background: #fff;
	color: #000;
	font-family: "geosanslight-nmsregular", "Vazirmatn", Helvetica, Arial, sans-serif;
	font-size: 36px;
	font-weight: 600;
	margin: -1px -1px 0;
	padding: 6px 0 8px;
	text-align: center;
}
.card .value {
	background: #fff;
	color: #000;
	font-family: "geosanslight-nmsregular", "Vazirmatn", Helvetica, Arial, sans-serif;
	font-size: 36px;
	font-weight: 600;
	position: absolute;
	bottom: 0;
	left: 0;
	line-height: 36px;
	padding: 8px;
	margin: 0 0 -1px -1px;
}
.card .value .icon-units {
	display: block;
	float: right;
	height: 36px;
	width: 36px;
	margin-left: 12px;
}

/* DETAILS */
h3.item-heading {
	padding: 12px 24px;
	font-family: "geosanslight-nmsregular", "Vazirmatn", Helvetica, Arial, sans-serif;
}
.details {
	background: rgb(123,130,163,.2);
    border-top: 1px solid rgba(255,255,255,.5);
	margin: 0 0 30px;
	padding: 12px 24px;
}
.details+.details {
	margin-bottom: 0;
}
.details p {
	font-size: 16px;
	font-weight: 300;
	margin-bottom: 12px;
}
.details ul {
    list-style: circle;
	padding: 0 0 0 20px;
}
.details h4 {
	margin: 12px 0;
    border-bottom: 1px solid rgba(255,255,255,0.25);
}
.description p {
    margin-bottom: 0;
}

/* RECIPES */
.recipes {
    align-items: flex-start;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	gap: 12px;
	justify-content: space-between;
}
.recipe {
	border: 2px solid rgba(255, 255, 255, 0.25);
	display: flex;
	flex-direction: row;
	justify-content: flex-start;
	align-items: flex-start;
	flex-wrap: wrap;
	padding: 8px;
	width: calc( 50% - 6px );
}
.yield {
	font-size: 14px;
	margin-top: 12px;
	width: 100%;
}
.ingredient {
	margin: 0 0 2px;
	display: flex;
    flex-wrap: nowrap;
    align-items: center;
}
.quantity {
	display: inline-block;
	text-align: right;
	margin: 0 10px 0 0;
	min-width: 30px;
}
a.item.small {
	align-items: center;
	border: 2px solid #fff;
	display: flex;
	flex-direction: row;
	flex-grow: 1;
}
a.item.small .title {
	background: #fff;
	color: #000;
	font-size: 14px;
	font-weight: 400;
	line-height: 16px;
	padding: 4px;
	text-align: center;
	width: 100%;
}
a.item.small img {
	height: auto;
	width: 24px;
	margin: 0;
}

/* ITEM LISTS */
.uses .items {
	display: flex;
    gap: 10px;
    flex-wrap: wrap;
}
</style>