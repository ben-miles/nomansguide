<script>
import { RouterLink } from 'vue-router'
import itemsData from '../assets/items.json'
import VanillaTilt from 'vanilla-tilt'

export default {
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
					<div class="column">
						<div class="card" :id="newSelectedItem.id" :style="'background-image: linear-gradient(' + newSelectedItem.colors[0] + ', ' + newSelectedItem.colors[1] + ');'">
							<h2 class="name">{{newSelectedItem.name}}</h2>
							<h3 class="value">{{newSelectedItem.value.toLocaleString("en-US")}}</h3>
							<img :alt="newSelectedItem.name" :src="'../items/' + newSelectedItem.id + '.png'" loading="lazy">
						</div>
						<div v-if="newSelectedItem.description" class="details description">
							<p>{{newSelectedItem.description}}</p>
						</div>
					</div>

					<div class="column">
						<div class="details sources">
							<h3>Sources:</h3>
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

						<div v-if="usesCrafting.length || usesRefining.length" class="details uses">
							<h3>Uses:</h3>
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