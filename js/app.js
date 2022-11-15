// TODOs
// add missing color data
// add routing (eg, `nomansguide.dev/copper` selects items.copper and loads info)
// push app navigation events to browser history
// update categories? eg: add junk, flora, etc. will likely require more refactoring
// add cooking items?
// change IDs to match wiki
// use IDs to generate links to wiki
// remove ID / name? can one be derived from the other programattically? not consistently...

import Items from "/data/items.json" assert {type: "json"};

var app = new Vue({
    el: "#app",
    data: {
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
			// If the drawer is being opened, focus on the filter input
			if(docbody.classList.contains("drawer-open")){
				let filter = document.getElementsByClassName("filter")[0];
				let filterInput = filter.getElementsByTagName("input")[0];
				filterInput.focus();
			}
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