/*
|--------------------------------------------------------------------------
| DATA > CRAFTING
|--------------------------------------------------------------------------
*/
var items = {
	"stasis_device": {
		"name": "Stasis Device",
		"type": "Highly Refined Technology",
		"description": "A device specifically crafted to keep lifeforms alive for thousands of years longer than their natural lifespan. Such a device requires great skill to manufacture, as not only is it technically complex, but the consequences for a user in the event of malfunction would be disastrous.",
		"value": 15600000,
		"ingredients": [
			{
				"name": "Quantum Processor",
				"quantity": 1 },
			 {
				 "name": "Cryogenic Chamber",
				 "quantity": 1 },
			 {
				 "name": "Iridesite",
				 "quantity": 1 }
		 ]
	 },
	
	"quantum_processor": {
		"name": "Quantum Processor",
		"type": "Advanced Crafted Product",
		"description": "A highly advanced computational device, essential for the complex calculations involved in warp travel.",
		"value": 5200000,
		"ingredients": [
		{
				"name": "Circuit Board",
				"quantity": 1 }, 
			{
				"name": "Superconductor",
				"quantity": 1 }
		]
	},
	
	"cryogenic_chamber": {
		"name": "Cryogenic Chamber",
		"type": "Advanced Crafted Product",
		"description": "A low temperature chamber, designed to prevent the natural decay of organic matter.",
		"value": 3800000,
		"ingredients": [{
				"name": "Living Glass",
				"quantity": 1 }, 
			{
				"name": "Cryo-Pump",
				"quantity": 1 }]
	},
	
	"iridesite": {
		"name": "Iridesite",
		"type": "Enriched Alloy Metal",
		"description": "Advanced light metal alloy traded throughout the galactic Outer Edge. Often used in the interiors of trading shuttles to reduce weight as they ascend from planets with high gravitational fields.",
		"value": 150000,
		"ingredients": [{
				"name": "Aronium",
				"quantity": 1 }, 
			{
				"name": "Magno Gold",
				"quantity": 1 }, 
			{
				"name": "Grantine",
				"quantity": 1 }]
	},
	
	"circuit_board": {
	"name": "Circuit Board",
	"type": "Advanced Agricultural Product",
	"description": "Stackable, semi-flexible circuit board made from a highly durable synthetic polymer.",
	"value": 916250,
	"ingredients": [{
				"name": "Poly Fibre",
				"quantity": 1 }, 
			{
				"name": "Heat Capacitor",
				"quantity": 1 }]
	},
	
	"poly_fibre": {
	"name": "Poly Fibre",
	"type": "Advanced Agricultural Product",
	"description": "A connective fibre for electronics, made from an advanced synthetic polymer and capable of serving as a conduit for power and data.",
	"value": 130000,
	"ingredients": [{
				"name": "Cactus Flesh",
				"quantity": 100 }, 
			{
				"name": "Star Bulb",
				"quantity": 200 }]
},
	
	"heat_capacitor": {
	"name": "Heat Capacitor",
	"type": "Advanced Agricultural Product",
	"description": "A thermal regulator produced from refined organic material. It is unique in its ability to produce, dissipate and distribute heat as required.",
	"value": 180000,
	"ingredients": [{
				"name": "Frost Crystal",
				"quantity": 100 }, 
			{
				"name": "Solanium",
				"quantity": 200 }]
},
	
	"superconductor": {
	"name": "Superconductor",
	"type": "Manufactured Gas Product",
	"description": "An advanced conductive material, the superconductor further enriches the field-warping power of the Semiconductor.",
	"value": 2000000,
	"ingredients": [{
				"name": "Enriched Carbon",
				"quantity": 1 }, 
			{
				"name": "Semiconductor",
				"quantity": 1 }]
},
	
	"enriched_carbon": {
	"name": "Enriched Carbon",
	"type": "Enhanced Gas Product",
	"description": "A refined product, taking ordinary carbon and boosting it with radioactive energy.",
	"value": 50000,
	"ingredients": [{
				"name": "Radon",
				"quantity": 250 }, 
			{
				"name": "Condensed Carbon",
				"quantity": 50 }]
},
	
	"semiconductor": {
	"name": "Semiconductor",
	"type": "Manufactured Gas Product",
	"description": "An advanced material useful in many electronic devices, with its own in-built temperature regulator.",
	"value": 400000,
	"ingredients": [{
				"name": "Thermic Condensate",
				"quantity": 1 }, 
			{
				"name": "Nitrogen Salt",
				"quantity": 1 }]
},
	
	"thermic_condensate": {
	"name": "Thermic Condensate",
	"type": "Enhanced Gas Product",
	"description": "A refined product, holding the energy potential of heated atmospheric gas in a stable state until required.",
	"value": 50000,
	"ingredients": [{
				"name": "Sulphurine",
				"quantity": 250 }, 
			{
				"name": "Condensed Carbon",
				"quantity": 50 }]
},
	
	"nitrogen_salt": {
	"name": "Nitrogen Salt",
	"type": "Enhanced Gas Product",
	"description": "A refined product, this is a powerful organic fertiliser in an easily distributed form.",
	"value": 50000,
	"ingredients": [{
				"name": "Nitrogen",
				"quantity": 250 }, 
			{
				"name": "Condensed Carbon",
				"quantity": 50 }]
},
	
	"living_glass": {
	"name": "Living Glass",
	"type": "Advanced Agricultural Product",
	"description": "An advanced building material, this glass has been imbued with organic compounds that allow it to react to the environment. Microbes within the glass filter harmful light of all wavelengths and balance the atmosphere as required.",
	"value": 566000,
	"ingredients": [{
				"name": "Glass",
				"quantity": 5 }, 
			{
				"name": "Lubricant",
				"quantity": 1 }]
},
	
	"glass": {
	"name": "Glass",
	"type": "Advanced Agricultural Product",
	"description": "Shatter-proof, scratch-resistant glass with a self-cleaning, UV-cured coating, for general construction use.",
	"value": 200,
	"ingredients": [{
				"name": "Frost Crystal",
				"quantity": 250 }]
},
	
	"lubricant": {
	"name": "Lubricant",
	"type": "Advanced Agricultural Product",
	"description": "A synthetic lubricant that reduces wear and prolongs the lifespan of technologies with moving parts.",
	"value": 110000,
	"ingredients": [{
				"name": "Gamma Root",
				"quantity": 400 }, 
			{
				"name": "Faecium",
				"quantity": 50 }]
},
	
	"cryo_pump": {
	"name": "Cryo Pump",
	"type": "Manufactured Gas Product",
	"description": "An advanced, self-regulating hybrid material, the Cryo-Pump distributes heat across itself with near perfect efficiency, making it vital in the creation of thermal regulators.",
	"value": 1500000,
	"ingredients": [{
				"name": "Hot Ice",
				"quantity": 1 }, 
			{
				"name": "Thermic Condensate",
				"quantity": 1 }]
},
	
	"hot_ice": {
	"name": "Hot Ice",
	"type": "Manufactured Gas Product",
	"description": "A paradoxical material, made less mysterious by its relative ease of manufacture.",
	"value": 400000,
	"ingredients": [{
				"name": "Enriched Carbon",
				"quantity": 1 }, 
			{
				"name": "Nitrogen Salt",
				"quantity": 1 }]
},
	
	"aronium": {
	"name": "Aronium",
	"type": "Alloy Metal",
	"description": "A lightweight and highly malleable alloy. Crafted from Paraffinium and Chlorine. In high demand on the Galactic Trade Network due to its utility in the construction of planetside outposts and facilities.",
	"value": 25000,
	"ingredients": [{
				"name": "Paraffinium",
				"quantity": 50 }, 
			{
				"name": "Ionised Cobalt",
				"quantity": 50 }]
},
	
	"magno_gold": {
	"name": "Magno Gold",
	"type": "Alloy Metal",
	"description": "Highly prized and lustrous alloy. Popular with traders of all known primary galactic races. Crafted from Ionised Cobalt and Phosphorus. Easily recognisable by its bright red glow and strong magnetic field.",
	"value": 25000,
	"ingredients": [{
				"name": "Phosphorus",
				"quantity": 50 }, 
			{
				"name": "Ionised Cobalt",
				"quantity": 50 }]
},
	
	"grantine": {
		"name": "Grantine",
		"type": "Alloy Metal",
		"description": "Soft workable alloy favored by artisans throughout the known galaxy. A popular trading good, with many galactic shipping paths devoted to its sale and transport.",
		"value": 25000,
		"ingredients": [
			{
				"name": "Dioxite",
				"quantity": 50 },
			{
				"name": "Ionised Cobalt",
				"quantity": 50 }
		]
	},
	
	"ionised_cobalt": {
		"name": "Ionised Cobalt",
		"type": "Processed Subterranean Mineral",
		"description": "A highly energised form of Cobalt, this processed metal can be used to create Advanced Ion Batteries, a conveniently portable source of energy for the Exosuit. In widespread use as a key component in the creation of advanced technologies and structures.",
		"value": 401
	},
	
	"dioxite": {
		"name": "Dioxite",
		"type": "Localized Earth Element",
		"description": "Local mineral extract, typically found in large deposits or extracted from common minerals after inspection with an Analysis Visor. Typically found on planets with a frozen environment.",
		"value": 62
	},
	
	"phosphorus": {
		"name": "Phosphorus",
		"type": "Localised Earth Element",
		"description": "Local mineral extract, typically found in large deposits or extracted from common minerals after inspection with an Analysis Visor. Typically found on planets with a scorched environment.",
		"value": 62
	},
	
	"paraffinium": {
		"name": "Paraffinium",
		"type": "Localised Earth Element",
		"description": "Local mineral extract, typically found in large deposits or extracted from common materials after inspection with an Analysis Visor. Typically found on planets with a tropical environment.",
		"value": 62
	},
	
	"condensed_carbon": {
		"name": "Condensed Carbon",
		"type": "Refined Organic Element",
		"description": "Advanced material, processed from regular carbon in a Refiner. The increased molecule density offers a substantially improved energy-per-gram ratio. Occasionally found in crystalline form. Harvesting large crystals may require an Advanced Mining Laser.",
		"value": 24
	},
	
	"sulphurine": {
		"name": "Sulphurine",
		"type": "Compressed Atmospheric Gas",
		"description": "A pungent atmospheric gas. High concentrations are extremely hazardous to organic life. With the aid of specialised machinery, can be extracted from the atmospheres of Scorched and Desert planets.",
		"value": 20
	},
	
	"nitrogen": {
		"name": "Nitrogen",
		"type": "Compressed Atmospheric Gas",
		"description": "A reactive atmospheric gas found wherever there is organic life. Nitrogen is readily harvested from the atmospheres of Lush and Toxic planets.",
		"value": 20
	},
	
	"radon": {
		"name": "Radon",
		"type": "Compressed Atmospheric Gas",
		"description": "A colourless, odourless gas with a relatively short half-life. Found in both Radioactive and Frozen atmospheres, this gas is produced by the decay of other high-energy elements.",
		"value": 20
	},
	
	"faecium": {
		"name": "Faecium",
		"type": "Harvested Agricultural Substance",
		"description": "A foul-smelling compound that can be harvested from the Gutrot Flower, or less desirably from the faecal matter of some species. Creatures can be fed to encourage the formation and deposition of faecium crystals.",
		"value": 30
	},
	
	"gamma_root": {
		"name": "Gamma Root",
		"type": "Harvested Agricultural Substance",
		"description": "A strange substance that seems to slowly shift the air around it. It is found in the roots of the Gamma Weed plant. Gamma Weed requires high background radiation to thrive in the wild, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		"value": 16
	},
	
	"frost_crystal": {
		"name": "Frost Crystal",
		"type": "Harvested Agricultural Substance",
		"description": "A beautiful blue crystal, this organic compound possesses both great hardiness and a shimmering translucence. It is harvested from the leaves of Frostwort. Frostwort requires frozen conditions to thrive in the wild, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		"value": 12
	},
	
	"solanium": {
		"name": "Solanium",
		"type": "Harvested Agricultural Substance",
		"description": "A powerful chemical that has resisted attempts at synthesis. It can be harvested from the bark of the Solar Vine. The vine requires a hot climate to thrive in the wild, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		"value": 70
	},
	
	"star_bulb": {
		"name": "Star Bulb",
		"type": "Harvested Agricultural Substance",
		"description": "A beautiful gemstone, this prized product is the engorged, luminescent berry of the Star Bramble. The host plant requires lush conditions to thrive in the wild but can be farmed in all environments with the aid of a Hydroponic Tray.",
		"value": 32
	},
	
	"cactus_flesh": {
		"name": "Cactus Flesh",
		"type": "Harvested Agricultural Substance",
		"description": "Succulent, edible cactus flesh from the Echinocactus plant. As well as being juicy on the tongue, the flesh has many industrial uses. The Echinocactus thrives only on desert planets, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		"value": 28
	},
	
	"fusion_ignitor":{
		"name": "Fusion Ignitor",
		"type": "Highly Refined Technology",
		"description": "A highly advanced piece of technology for use in the next generation of power plants. Producing a fusion core requires both intricate scientific skills and complex industrial processes.",
		"value": 15600000
	},
	"portable_reactor":{
		"name": "Portable Reactor",
		"type": "Advanced Crafted Product",
		"description": "A miniature self-controlled nuclear reactor. Generates sub-stellar levels of energy in a hassle-free, widely compatible fuel module.",
		"value": 4200000
	},
	"fusion_accelerant":{
		"name": "Fusion Accelerant",
		"type": "Manufactured Gas Product",
		"description": "An advanced fuel source, made from a perfect blend of high potential energy organic materials.",
		"value": 1500000
	},
	"organic_catalyst":{
		"name": "Organic Catalyst",
		"type": "Manufactured Gas Product",
		"description": "A catalytic material used in the creation of many organic fertilizers.",
		"value": 320000
	},
	"liquid_explosive":{
		"name": "Liquid Explosive",
		"type": "Advanced Agricultural Product",
		"description": "A general purpose high explosive, offered in liquid form for convenience of transport and deployment. Do not drink.",
		"value": 800500
	},
	"unstable_gel":{
		"name": "Unstable Gel",
		"type": "Advanced Agricultural Product",
		"description": "A highly reactive gel, this substance is both energy-rich and dangerous to touch.",
		"value": 50000
	},
	"acid":{
		"name": "Acid",
		"type": "Advanced Agricultural Product",
		"description": "Dilute acid for high current generation in diverse power cells.",
		"value": 188000
	},
	"geodesite":{
		"name": "Geodesite",
		"type": "Enriched Alloy Metal",
		"description": "Advanced and durable alloy primarily used in starship hull construction and deep-space exploration drone technology.",
		"value": 150000
	},
	"dirty_bronze":{
		"name": "Dirty Bronze",
		"type": "Alloy Metal",
		"description": "A popular metal alloy with a wide variety of uses. 'Dirty Bronze' has shed its scientific name in favor of the popular term for its colour.",
		"value": 25000
	},
	"lemmium":{
		"name": "Lemmium",
		"type": "Alloy Metal",
		"description": "Pure Ferrite alloy. Crafted from Pure Ferrite and Uranium. Used extensively in starship freighter construction due to its sheer strength. A hardcore material popular on the Galactic Trade Network.",
		"value": 25000
	},
	"herox":{
		"name": "Herox",
		"type": "Alloy Metal",
		"description": "Herox is a tradeable that can be crafted, found in containers or purchased.",
		"value": 25000
	}
};

/*
|--------------------------------------------------------------------------
| DATA > DISCOVERIES
|--------------------------------------------------------------------------
*/

var discoveries = [
	{
		name: "Activated Copper (A)",
		type: "base",
		planet: "Eswo",
		system: {
			name: "Dugotorui",
			lifeform: "Vy'keen",
			conflict: "High",
			economy: {
				type: "High Tech",
				tier: "Wealthy" }
		}
	},
	{
		name: "Phosphorus (S)",
		type: "base",
		planet: "Eframon",
		system: {
			name: "Yeframyon",
			lifeform: "Gek",
			conflict: "Stable",
			economy: {
				type: "Metal Processing",
				tier: "Booming" }
		}
	},
	{
		name: "Sulphurion (S)",
		type: "base",
		planet: "Eframon",
		system: {
			name: "Yeframyon",
			lifeform: "Gek",
			conflict: "Stable",
			economy: {
				type: "Metal Processing",
				tier: "Booming" }
		}
	},
	{
		name: "Anomolous Planet: Sharded",
		type: "planet",
		planet: "Utessfie Unom",
		system: {
			name: "Lubingro",
			lifeform: "Vy'keen",
			conflict: "Aggressive",
			economy: {
				type: "Mass Production",
				tier: "Adequate" }
		}
	},
	{
		name: "Anomolous Planet: Fractured",
		type: "planet",
		planet: "Rayso XVI",
		system: {
			name: "Suzdalny IV",
			lifeform: "Korvax",
			conflict: "Peaceful",
			economy: {
				type: "Manufacturing",
				tier: "Comfortable" }
		}
	},
	{
		name: "Storm Crystals",
		type: "planet",
		planet: "Naciss",
		system: {
			name: "Uttenh-Tara",
			lifeform: "Gek",
			conflict: "Peaceful",
			economy: {
				type: "Mercantile",
				tier: "Comfortable" }
		}
	}
];

/*
|--------------------------------------------------------------------------
| DATA > FREIGHTER
|--------------------------------------------------------------------------
*/

var freighter = {
	name: "bigOlSexiBoi",
	class: "B",
	slots: "17+4",
	value: 10900000
};

/*
|--------------------------------------------------------------------------
| DATA > FRIGATES
|--------------------------------------------------------------------------
*/

var frigates = [
	{
		name: "looksLikeWeMadeIt",
		type: "Trade",
		class: "S",
		repair: {
			material: "Pure Ferrite",
			quantity: 25 
		} 
	},
	{
		name: "CS The Talon of Clouds",
		type: "Science",
		class: "A",
		repair: {
			material: "Silver",
			quantity: 50 
		} 
	},
	{
		name: "SV Forge of the Hijanag",
		type: "Science",
		class: "B",
		repair: {
			material: "Pure Ferrite",
			quantity: 25 
		} 
	},
	{
		name: "SS The Hammer of Flight",
		type: "Combat",
		class: "B",
		repair: {
			material: "Pure Ferrite",
			quantity: 25 
		} 
	},
	{
		name: "getWrecked",
		type: "Science",
		class: "C",
		repair: [ 
			{
				material: "Gold",
				quantity: 20 
			},
			{
				material: "Oxygen",
				quantity: 20 
			} 
		]
	},
	{
		name: "CS4-Kubar",
		type: "Trade",
		class: "A",
		repair: {
			material: "Tritium",
			quantity: 15 
		}
	}
];

/*
|--------------------------------------------------------------------------
| DATA > SHIPS
|--------------------------------------------------------------------------
*/

var ships = [
	{
		name: "orangeBird",
		type: "Exotic",
		class: "S",
		slots: "20+6",
		value: 12000000
	},
	{
		name: "theGreatWhiteBat",
		type: "Exotic",
		class: "S",
		slots: "19+6",
		value: 10250000
	},
	{
		name: "ittyBittyBaby",
		type: "Exotic",
		class: "S",
		slots: "18+5",
		value: 8700000
	},
	{
		name: "lilOlBlueBird",
		type: "Exotic",
		class: "S",
		slots: "18+5",
		value: 8700000
	},
	{
		name: "oneEyedWilly",
		type: "Explorer",
		class: "A",
		slots: "27+7",
		value: 7250000
	},
	{
		name: "snowy",
		type: "Explorer",
		class: "S",
		slots: "19+5",
		value: 1875000
	},	
];

/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/

// Builds a select of aggregated player data
var data;
function buildSearch() {
	data = [];
	var i = 0;
	for(var item in items){
		var option = {};
		option.id = item;
		option.text = slugToName(item);
		data.push(option);
		i++;
	};
	data.unshift({id:'',text:''}); // Add "empty" object at beginning so the placeholder attr shows
}
buildSearch();

// Builds a menu of player's ship(s)
function buildMenuShips() {
	ships.forEach(function(ship){
		$("<li/>", {"class": "ship", "id": ship.name})
			.html("<strong>" + ship.name + "</strong> <br/><small>" + ship.type + " (" + ship.class + ") // " + ship.slots + " slots // " + ship.value.toLocaleString() + "</small>")
			.appendTo(".ships ul");
	});
}

// Builds a menu of player's freighter + frigate(s)
function buildMenuFrigates() {
	frigates.forEach(function(frigate){
		$("<li/>", {"class": "frigate", "id": frigate.name})
			.html("<strong>" + frigate.name + "</strong> <br/><small>" + frigate.type + " (" + frigate.class + ") // Repair: " + frigate.repair.quantity + " " + frigate.repair.material + "</small>")
			.appendTo(".frigates ul");
	});
}

// Builds a menu of player's discoveries
function buildMenuDiscoveries() {
	discoveries.forEach(function(discovery){
		var planet = (discovery.planet) ? discovery.planet  + " // ": "";
		$("<li/>", {"class": "location " + discovery.type})
			.html("<strong>" + discovery.name + "</strong> <br/><small>" + planet + discovery.system.name + " // " + discovery.system.lifeform + ", " + discovery.system.economy.type + ":" + discovery.system.economy.tier + ", " + discovery.system.conflict + "</small>")
			.appendTo(".discoveries ul");
	});
}

// Load an item
function loadItem(item){
	$("#resources .title").text(item.name);
	$("#resources .resource").attr("id", nameToSlug(item.name));
	$("#resources .value").text(item.value.toLocaleString());
	$("#resources img").attr("src", "img/item/" + nameToSlug(item.name) + ".png");
	$("#resources .description").html("<strong class=\"type\">" + item.type + ".</strong> " + item.description);
	if(item.ingredients){
		var $recipe = $("<div>").addClass("recipe").html("");
	item.ingredients.forEach(function(ingredient, index){
			slug = nameToSlug(ingredient.name);
			var $ingredient = $("<a/>", {"class": "ingredient", "id": slug}).text( ingredient.quantity + ' ' + ingredient.name).appendTo($recipe);
			if(index < (item.ingredients.length) - 1){
				$recipe.append(" + ")
			}
		});
		// $recipe.append(" = ");
		// slug = item.name.toLowerCase();
		// slug = slug.replace(/\s+/g, '_');
		// $("<a>").addClass("ingredient").data('item', slug).text(item.name).appendTo($recipe);	
		$("#resources .recipe").replaceWith($recipe);
	} else {
		$("#resources .recipe").hide();
	}
	selectItem();
};

// Drawer Toggle Buttons
$(".menu .toggle").click(function(){
	// Close all other open drawers
	var $this_class = $(this).parent().attr("class");
	if( $(".drawer:visible").not("." + $this_class + " .drawer") ){
		$(".drawer:visible").not("." + $this_class + " .drawer").toggle("fast");
	}
	// Toggle this drawer
	$(this).next().toggle("fast");
});

// Slideshow
var index = 0;
$imageEls = $('.slide');
setInterval(function () {
	// Get the next index.  If at end, restart to the beginning.
	index = index + 1 < $imageEls.length ? index + 1 : 0;
	// Show the next image.
	$imageEls.eq(index).addClass('show');
	// Hide the previous image.
	$imageEls.eq(index - 1).removeClass('show');
}, 10000);

// Convert a Name to a slug
function nameToSlug(name){
	var slug = name.replace(/ /g,"_");
	return slug.toLowerCase();
}

// Convert a slug to a Name
function slugToName(slug){
	if(slug.includes("_")){
		slug = slug.split("_");
		var name = [];
		var word;
		slug.forEach(function(word){
			name.push( word.charAt(0).toUpperCase() + word.slice(1) );
		});
		name = name.join(" ");
	}
	else {
		var name = slug.charAt(0).toUpperCase() + slug.slice(1);
	}
	return name;
}

// On Click of Ingredient link, pass that ingredient.name to loadItem() function. 
function selectItem() {
	$('a.ingredient').on("click", function(){
		var thisItem = $(this).attr("id");
		loadItem(items[thisItem]);
		$('.select2').val(thisItem).trigger('change');
	});
}

/*
|--------------------------------------------------------------------------
| RUN
|--------------------------------------------------------------------------
*/

// On document ready, execute starter functions
$(document).ready(function(){
	buildMenuShips();
	buildMenuFrigates();
	buildMenuDiscoveries();
	// loadItem(items.stasis_device);
	$('.select2').select2({data:data, placeholder: "Resources"}).change(function(){
		var selected = $(this).find(':selected').val();
		loadItem(items[selected]);
	});
});

/* Vue */
var app = new Vue({
    el: '#app',
    data: {
		items: items,
        games_pinned: [],
        games_recent: [],
        user: {},
		search: ''
    },
    methods: {
		load_item: function(item_id){
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/assets/proxy.php?endpoint=' + endpoint + '&steam_user_id=' + steam_user_id, true);
            xhr.responseType = 'json';
            xhr.onload = function() {
              var status = xhr.status;
              if (status === 200) {
                switch(endpoint) {
                    case "GetPlayerSummaries":
                        app.user = this.response.response.players[0];
                        break;
                    // case "GetUserStatsForGame":
                    //     app.maybenotgonnausethis = this.response.playerstats;
                    //     break;
                    case "GetOwnedGames":
						app.games_all = this.response.response.games;
						app.games_all.sort(function(a, b) {
							var textA = a.name.toUpperCase();
							var textB = b.name.toUpperCase();
							return (textA < textB) ? -1 : (textA > textB) ? 1 : 0;
						});
                        break;
                    case "GetRecentlyPlayedGames":
                        app.games_recent = this.response.response.games;
                        break;
                }
              } else {
                // console.log('fail');
              }
            };
            xhr.send();
        },
		flexibleTextareas: function(){
			var textareas = document.getElementsByTagName( "textarea" );
			for( var textarea of textareas ){
				textarea.style.height = textarea.scrollHeight + "px";
				textarea.addEventListener( "input", function(e){
					e.target.style.height = "auto";
					e.target.style.height = e.target.scrollHeight + "px";
				});
			}
		},
		log: function(element){
			console.log(element);
		},
        pin: function(data){
            this.games_pinned.push(data);
			// Save to DB
			app.saveToDB();
        }, 
        confirmUnpin: function(index, event){
            var confirmationDialog = event.target.parentElement.firstChild;
            confirmationDialog.style.display = 'flex';
        },
		cancelUnpin: function(event){
            var confirmationDialog = event.target.parentElement;
            confirmationDialog.style.display = 'none';
        },
        unpin: function(index){
            this.games_pinned.splice(index, 1);
			// Save to DB
			app.saveToDB();
        }, 
        update_alert: function(){
            alert('updated!');
        },
		updateModalPins: function(){
			// Get IDs of all pinned games
			var appid_array = [];
			app.games_pinned.forEach(game_pinned => { 
				appid_array.push(game_pinned.appid); 
			});
			// Get all Modal Game nodes
			var modal = document.getElementsByClassName('modal')[0];
			var modal_games = modal.getElementsByClassName('game');
			// Loop through Modal Game nodes
			for( var modal_game of modal_games ){
				// Identify the Pin button
				var pinButton = modal_game.getElementsByClassName('pin')[0];
				// If their id's matches one of those from the user's pinned games,
				if(appid_array.includes(parseInt(modal_game.id))){
					// Add "pinned" to its class
					modal_game.classList.add('pinned');
					// Disable the Pin button
					pinButton.disabled = true;
				// Otherwise, 
				} else {
					// Remove "pinned" from its class
					modal_game.classList.remove('pinned');
					// Enable the Pin button
					pinButton.disabled = false;
				}
			}
		},
        saveData: function(index, event){
            // Prevent saving on every keypress, by resetting a timer...
            window.clearTimeout(timer);
            timer = window.setTimeout(function(){
				// Save to Vue Data
                app.games_pinned[index].notes = event.target.value;
                // Save to DB
                app.saveToDB();
            }, 3000); 
        },
		saveToDB: function(){
			dataString = JSON.stringify(app.games_pinned);
			var xhr = new XMLHttpRequest();
			xhr.open('GET', '/assets/save.php?data=' + dataString, true);
			xhr.onload = function() {
				var status = xhr.status;
				if (status === 200) {
					// console.log(xhr.responseText);
				} else {
					// console.log('fail');
				}
			};
			xhr.send();
		}
    },
	computed: {
		item_selected(){
			return this.games_all.filter(game => {
				return game.name.toLowerCase().indexOf(this.search.toLowerCase()) > -1;
			})
		},
		games_recent_filtered() {
			return this.games_recent.filter(game => {
				return game.name.toLowerCase().indexOf(this.search.toLowerCase()) > -1;
			})
		}
	},
    beforeMount(){
        if(steam_user_id){
			this.getSteamData("GetPlayerSummaries");
            this.getSteamData("GetOwnedGames");
            this.getSteamData("GetRecentlyPlayedGames");
			if(user_data){
                this.games_pinned = user_data;
            }
        }
	},
	mounted(){
		this.flexibleTextareas();
     },
     updated(){
		this.flexibleTextareas();
		this.updateModalPins();
     }
})