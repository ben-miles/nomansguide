<script>
import itemsData from '../assets/items.json'
import VanillaTilt from 'vanilla-tilt'

export default {
	props: {
		items: Array,
		selectedItem: String
	},
	emits: ['setSelectedItem'],
	methods: {
		itemColors(itemId){
			// return a string containing CSS for a gradient background, given an item's id
			var thisItem = this.items.find(item => item.id === itemId);
			return 'background-image: linear-gradient(' + thisItem.colors[0] + ', ' + thisItem.colors[1] + ');';
		},
		itemName(itemId){
			// return a string containing an item's name, given an item's id
			var thisItem = this.items.find(item => item.id === itemId);
			return thisItem.name;
		}
	},
	computed: {
		itemSelected(){
			return this.items.filter(item => {
				return item.id === this.selectedItem;
			})
		},
		usesCrafting(){
			return this.items.filter( item => {
				if(item.crafting){
					return item.crafting.some( recipe => {
						return recipe.ingredients.some( ingredient => { 
							return ingredient.id === this.selectedItem;
						}); 
					}) 
				}
			});
		},
		usesRefining(){
			return this.items.filter( item => {
				if(item.refining){
					return item.refining.some( recipe => {
						return recipe.ingredients.some( ingredient => { 
							return ingredient.id === this.selectedItem;
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

// Vanilla-Tilt

</script>

<template>
	<section id="body">
		<div v-if="!selectedItem"><h1>No Item Selected.</h1></div>
		<div v-else class="resource" v-for="item in itemSelected">
			<div class="container">
				<div class="row">

					<div class="column">
						<div class="card" :id="item.id" :style="'background-image: linear-gradient(' + item.colors[0] + ', ' + item.colors[1] + ');'">
							<h2 class="name">{{item.name}}</h2>
							<h3 class="value">{{item.value.toLocaleString("en-US")}}</h3>
							<img :alt="item.name" :src="'img/item/min/' + item.id + '.png'" loading="lazy">
						</div>
						<div v-if="item.description" class="details description">
							<p>{{item.description}}</p>
						</div>
					</div>

					<div class="column">
						<div class="details sources">
							<h3>Sources:</h3>
							<ul v-if="item.sources">
								<li v-for="source in item.sources">{{source}}</li>
							</ul>
							<div v-if="item.crafting" class="crafting">
								<h4>Crafting:</h4>
								<p>{{item.name}} can be built using a blueprint and the following ingredients:</p>
								<div class="recipes">
									<div v-for="recipe in item.crafting" class="recipe">
										<div class="ingredients">
											<div v-for="ingredient in recipe.ingredients" class="ingredient">
												<div class="quantity">{{ingredient.quantity}}</div>
												<button @click="$emit('setSelectedItem', ingredient.id)" class="item small" :id="ingredient.id" :key="ingredient.id" :style="itemColors(ingredient.id)">
													<img :alt="itemName(ingredient.id)" :src="'img/item/min/' + ingredient.id + '.png'" loading="lazy">
													<div class="title">{{itemName(ingredient.id)}}</div>
												</button>
											</div>
										</div>
										<div class="yield">Yields {{recipe.yield}} {{item.name}}.</div>
									</div>
								</div>
							</div>
							<div v-if="item.refining" class="refining">
								<h4>Refining:</h4>
								<p>{{item.name}} can be refined using a Refiner with the following ingredients:</p>
								<div class="recipes">
									<div v-for="recipe in item.refining" class="recipe">
										<div class="ingredients">
											<div v-for="ingredient in recipe.ingredients" class="ingredient">
												<div class="quantity">{{ingredient.quantity}}</div>
												<button @click="$emit('setSelectedItem', ingredient.id)" class="item small" :id="ingredient.id" :style="itemColors(ingredient.id)">
													<img :alt="itemName(ingredient.id)" :src="'img/item/min/' + ingredient.id + '.png'" loading="lazy">
													<div class="title">{{itemName(ingredient.id)}}</div>
												</button>
											</div>
										</div>
										<div class="yield">Yields {{recipe.yield}} {{item.name}}.</div>
									</div>
								</div>
							</div>
							<div v-if="item.cooking" class="cooking">
								<h4>Cooking:</h4>
								<p>{{item.name}} can be cooked using a Nutrient Processor with the following ingredients:</p>
								<div class="recipes">
									<div v-for="recipe in item.cooking" class="recipe">
										<div class="ingredients">
											<div v-for="ingredient in recipe.ingredients" class="ingredient">
												<div class="quantity">{{ingredient.quantity}}</div>
												<button @click="$emit('setSelectedItem', ingredient.id)" class="item small" :id="ingredient.id" :style="itemColors(ingredient.id)">
													<img :alt="itemName(ingredient.id)" :src="'img/item/min/' + ingredient.id + '.png'" loading="lazy">
													<div class="title">{{itemName(ingredient.id)}}</div>
												</button>
											</div>
										</div>
										<div class="yield">Yields {{recipe.yield}} {{item.name}}.</div>
									</div>
								</div>
							</div>
						</div>

						<div v-if="usesCrafting.length || usesRefining.length" class="details uses">
							<h3>Uses:</h3>
							<div v-if="usesCrafting.length" class="crafting">
								<h4>Crafting:</h4>
								<p>{{item.name}} is used as an ingredient for crafting the following products:</p>
								<div class="items">
									<button v-for="item in usesCrafting" @click="$emit('setSelectedItem', item.id)" class="item small" :id="item.id" :key="item.id" :style="itemColors(item.id)">
										<img :alt="item.name" :src="'img/item/min/' + item.id + '.png'" loading="lazy">
										<div class="title">{{item.name}}</div>
									</button>
								</div>
							</div>
							<div v-if="usesRefining.length" class="refining">
								<h4>Refining:</h4>
								<p>{{item.name}} is used as an ingredient for refining the following products using a Refiner:</p>
								<div class="items">
									<button v-for="item in usesRefining" @click="$emit('setSelectedItem', item.id)" class="item small" :id="item.id" :key="item.id" :style="itemColors(item.id)">
										<img :alt="item.name" :src="'img/item/min/' + item.id + '.png'" loading="lazy">
										<div class="title">{{item.name}}</div>
									</button>
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</div>
	</section>
</template>
