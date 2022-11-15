// TODOs
// add cursed dust, chewy wires, hexite
// add cooking items?
// add missing color data
// rename data.json to items.json
// refactor 'crafting' to 'building'
// for crafting/building, and for refining, add a programatticly generated description paragraph, like '__ITEM__ can be built using a blueprint and the following ingredients:' and '__ITEM__ can be refined using a Refiner with the following ingredients:'
// update categories? eg, add junk
// change IDs to match wiki
// use IDs to generate links to wiki
// remove ID / name? can one be derived from the other progrmattically?
// add routing (eg, `nomansguide.dev/copper` selects items.copper and loads info)
// push app navigation events to browser history

import Items from "/data/data.json" assert {type: "json"};

var app = new Vue({
    el: "#app",
    data: {
		// items: items,
		items: Object.values(Items),
		selectedItem: "stasis_device",
		selectedItemType: "",
		filter: ""
    },
    methods: {
		selectItem: function(item_id, item_name){
			this.selectedItem = item_id;
			// window.history.pushState(item_id, item_name, "/" + item_id);
			// If the drawer is open, toggle (close) it
			let docbody = document.body;
			if(docbody.classList.contains("drawer-open")){
				this.toggleDrawer();
			}
		},
		selectItemType: function(itemType){
			this.selectedItemType = itemType;
			// Set all Type buttons as inactive
			let typeButtons = document.getElementsByClassName("type");
			for(var i = 0; i < typeButtons.length; i++){
				typeButtons[i].classList.remove("active");
			}
			// Set this Type button as active
			let thisTypeButton = document.getElementById(itemType);
			thisTypeButton.classList.add("active");
		},
		toggleDrawer: function(){
			// Toggle the drawer open/closed
			let docbody = document.body;
			docbody.classList.toggle("drawer-open");
		}
    },
	computed: {
		itemSelected(){
			return this.items.filter(item => {
				return item.id === this.selectedItem;
			})
		},
		itemsFiltered(){
			if(!this.selectedItemType || this.selectedItemType === "all") {
				return this.items.filter(item => {
					return item.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1;
				})
			} else {
				return this.items.filter(item => {
					return item.type === this.selectedItemType && item.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1;
				})
			}
		}
	},
	beforeMount(){},
	mounted(){},
	updated(){}
})

// Vanilla-Tilt
VanillaTilt.init(document.querySelector(".card"), {
	max: 8,
	speed: 400,
	glare: true,
	"max-glare": 0.75,
	reverse: true
});