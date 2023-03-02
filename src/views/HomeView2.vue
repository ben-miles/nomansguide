<script>
import ItemDrawer from '../components/ItemDrawer.vue'
import ItemDetails from '../components/ItemDetails.vue'
import itemsData from '../assets/items.json'

export default {
	components: {
		ItemDrawer,
		ItemDetails
	},
	data() {
		return {
			items: Object.values(itemsData),
			selectedItem: "acid"
		}
	},
	methods: {
		setSelectedItem(itemId){
			this.selectedItem = itemId;
			// If the drawer is open, toggle (close) it
			if(document.body.classList.contains("drawer-open")){
				this.toggleDrawer();
			}
		},
		toggleDrawer(){
			// Toggle the drawer open/closed
			document.body.classList.toggle("drawer-open");
			// If the drawer is being opened, focus on the filter input
			if(document.body.classList.contains("drawer-open")){
				let filter = document.getElementsByClassName("filter")[0];
				let filterInput = filter.getElementsByTagName("input")[0];
				filterInput.focus();
			}
		}
	}
}
</script>

<template>
	<ItemDrawer :items="items" @set-selected-item="setSelectedItem" />
	<ItemDetails :items="items" :selectedItem="selectedItem" @set-selected-item="setSelectedItem"/>
</template>