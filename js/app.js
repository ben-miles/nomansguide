/*
|--------------------------------------------------------------------------
| DATA > CRAFTING
|--------------------------------------------------------------------------
*/
var items = [
	{
		id: "acid",
		name: "Acid",
		type: "Advanced Agricultural Product",
		description: "Dilute acid for high current generation in diverse power cells.",
		value: 188000,
		ingredients: [
			{
				id: "mordite",
				name: "Mordite",
				quantity: 25
			}, 
			{
				id: "fungal_mould",
				name: "Fungal Mould",
				quantity: 600
			}
		]
	},
	{
		id: "aronium",
		name: "Aronium",
		type: "Alloy Metal",
		description: "A lightweight and highly malleable alloy. Crafted from Paraffinium and Chlorine. In high demand on the Galactic Trade Network due to its utility in the construction of planetside outposts and facilities.",
		value: 25000,
		ingredients: [
			{
				id: "paraffinium",
				name: "Paraffinium",
				quantity: 50
			}, 
			{
				id: "ionised_cobalt",
				name: "Ionised Cobalt",
				quantity: 50
			}
		]
	},
	{
		id: "cactus_flesh",
		name: "Cactus Flesh",
		type: "Harvested Agricultural Substance",
		description: "Succulent, edible cactus flesh from the Echinocactus plant. As well as being juicy on the tongue, the flesh has many industrial uses. The Echinocactus thrives only on desert planets, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		value: 28
	},
	{
		id: "carbon",
		name: "Carbon",
		description: "The building block of all organic life. Of critical importance to space travelers, as Carbon is used to recharge mining equipment. The Mining Laser will harvest Carbon from trees, plants, and all other forms of vegetation.",
		value: 12
	},
	{
		id: "circuit_board",
		name: "Circuit Board",
		type: "Advanced Agricultural Product",
		description: "Stackable, semi-flexible circuit board made from a highly durable synthetic polymer.",
		value: 916250,
		ingredients: [
			{
				id: "poly_fibre",
				name: "Poly Fibre",
				quantity: 1
			},
			{
				id: "heat_capacitor",
				name: "Heat Capacitor",
				quantity: 1
			}
		]
	},	
	{
		id: "cobalt", 
		name: "Cobalt",
		type: "Subterranean Mineral",
		description: "Mined from underground minerals, cobalt is found in plentiful supply in caves and caverns. Useful in the manufacture of Ion Batteries. It is used in the creation of several technologies and structures, and can be processed in a Refiner to make the most of its inherent charge.",
		value: 198
	},	
	{
		id: "condensed_carbon", 
		name: "Condensed Carbon",
		type: "Refined Organic Element",
		description: "Advanced material, processed from regular carbon in a Refiner. The increased molecule density offers a substantially improved energy-per-gram ratio. Occasionally found in crystalline form. Harvesting large crystals may require an Advanced Mining Laser.",
		value: 24,
		ingredients: [
			{
				id: "carbon",
				name: "Carbon",
				quantity: 2
			}
		]
	},
	{
		id: "cryo_pump",
		name: "Cryo-Pump",
		type: "Manufactured Gas Product",
		description: "An advanced, self-regulating hybrid material, the Cryo-Pump distributes heat across itself with near perfect efficiency, making it vital in the creation of thermal regulators.",
		value: 1500000,
		ingredients: [
			{
				id: "hot_ice",
				name: "Hot Ice",
				quantity: 1
			}, 
			{
				id: "thermic_condensate",
				name: "Thermic Condensate",
				quantity: 1
			}
		]
	},
	{
		id: "cryogenic_chamber",
		name: "Cryogenic Chamber",
		type: "Advanced Crafted Product",
		description: "A low temperature chamber, designed to prevent the natural decay of organic matter.",
		value: 3800000,
		ingredients: [
			{
				id: "living_glass",
				name: "Living Glass",
				quantity: 1
			}, 
			{
				id: "cryo_pump",
				name: "Cryo-Pump",
				quantity: 1
			}
		]
	},
	{
		id: "dioxite",
		name: "Dioxite",
		type: "Localized Earth Element",
		description: "Local mineral extract, typically found in large deposits or extracted from common minerals after inspection with an Analysis Visor. Typically found on planets with a frozen environment.",
		value: 62
	},
	{
		id: "dirty_bronze",
		name: "Dirty Bronze",
		type: "Alloy Metal",
		description: "A popular metal alloy with a wide variety of uses. 'Dirty Bronze' has shed its scientific name in favor of the popular term for its colour.",
		value: 25000,
		ingredients: [
			{
				id: "pyrite",
				name: "Pyrite",
				quantity: 50
			}, 
			{
				id: "pure_ferrite",
				name: "Pure Ferrite",
				quantity: 100
			}
		]
	},
	{
		id: "enriched_carbon",
		name: "Enriched Carbon",
		type: "Enhanced Gas Product",
		description: "A refined product, taking ordinary carbon and boosting it with radioactive energy.",
		value: 50000,
		ingredients: [
			{
				id: "radon",
				name: "Radon",
				quantity: 250
			},
			{
				id: "condensed_carbon",
				name: "Condensed Carbon",
				quantity: 50
			}
		]
	},
	{
		id: "faecium", 
		name: "Faecium",
		type: "Harvested Agricultural Substance",
		description: "A foul-smelling compound that can be harvested from the Gutrot Flower, or less desirably from the faecal matter of some species. Creatures can be fed to encourage the formation and deposition of faecium crystals.",
		value: 30
	},
	{
		id: "frost_crystal",
		name: "Frost Crystal",
		type: "Harvested Agricultural Substance",
		description: "A beautiful blue crystal, this organic compound possesses both great hardiness and a shimmering translucence. It is harvested from the leaves of Frostwort. Frostwort requires frozen conditions to thrive in the wild, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		value: 12
	},
	{
		id: "fusion_accelerant",
		name: "Fusion Accelerant",
		type: "Manufactured Gas Product",
		description: "An advanced fuel source, made from a perfect blend of high potential energy organic materials.",
		value: 1500000,
		ingredients: [
			{
				id: "organic_catalyst",
				name: "Organic Catalyst",
				quantity: 1
			},
			{
				id: "nitrogen_salt",
				name: "Nitrogen Salt",
				quantity: 1
			}
		]
	},
	{
		id: "fusion_ignitor",
		name: "Fusion Ignitor",
		type: "Highly Refined Technology",
		description: "A highly advanced piece of technology for use in the next generation of power plants. Producing a fusion core requires both intricate scientific skills and complex industrial processes.",
		value: 15600000,
		ingredients: [
			{
				id: "portable_reactor",
				name: "Portable Reactor",
				quantity: 1
			},
			{
				id: "quantum_processor",
				name: "Quantum Processor",
				quantity: 1
			},
			{
				id: "geodesite",
				name: "Geodesite",
				quantity: 1
			}
		]
	},
	{
		id: "gamma_root", 
		name: "Gamma Root",
		type: "Harvested Agricultural Substance",
		description: "A strange substance that seems to slowly shift the air around it. It is found in the roots of the Gamma Weed plant. Gamma Weed requires high background radiation to thrive in the wild, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		value: 16
	},
	{
		id: "geodesite",
		name: "Geodesite",
		type: "Enriched Alloy Metal",
		description: "Advanced and durable alloy primarily used in starship hull construction and deep-space exploration drone technology.",
		value: 150000,
		ingredients: [
			{
				id: "dirty_bronze",
				name: "Dirty Bronze",
				quantity: 1
			},
			{
				id: "herox",
				name: "Herox",
				quantity: 1
			},
			{
				id: "lemmium",
				name: "Lemmium",
				quantity: 1
			}
		]
	},
	{
		id: "glass",
		name: "Glass",
		type: "Advanced Agricultural Product",
		description: "Shatter-proof, scratch-resistant glass with a self-cleaning, UV-cured coating, for general construction use.",
		value: 200,
		ingredients: [
			{
				id: "frost_crystal",
				name: "Frost Crystal",
				quantity: 250
			}
		]
	},
	{
		id: "grantine",
		name: "Grantine",
		type: "Alloy Metal",
		description: "Soft workable alloy favored by artisans throughout the known galaxy. A popular trading good, with many galactic shipping paths devoted to its sale and transport.",
		value: 25000,
		ingredients: [
			{
				id: "dioxite",
				name: "Dioxite",
				quantity: 50
			},
			{
				id: "ionised_cobalt",
				name: "Ionised Cobalt",
				quantity: 50
			}
		]
	},
	{
		id: "heat_capacitor",
		name: "Heat Capacitor",
		type: "Advanced Agricultural Product",
		description: "A thermal regulator produced from refined organic material. It is unique in its ability to produce, dissipate and distribute heat as required.",
		value: 180000,
		ingredients: [
			{
				id: "frost_crystal",
				name: "Frost Crystal",
				quantity: 100
			},
			{
				id: "solanium",
				name: "Solanium",
				quantity: 200
			}
		]
	},
	{
		id: "herox",
		name: "Herox",
		type: "Alloy Metal",
		description: "Herox is a tradeable that can be crafted, found in containers or purchased.",
		value: 25000,
		ingredients: [
			{
				id: "ammonia",
				name: "Ammonia",
				quantity: 50
			},
			{
				id: "ionised_cobalt",
				name: "Ionised Cobalt",
				quantity: 50
			}
		]
	},
	{
		id: "hot_ice",
		name: "Hot Ice",
		type: "Manufactured Gas Product",
		description: "A paradoxical material, made less mysterious by its relative ease of manufacture.",
		value: 400000,
		ingredients: [
			{
				id: "enriched_carbon",
				name: "Enriched Carbon",
				quantity: 1
			}, 
			{
				id: "nitrogen_salt",
				name: "Nitrogen Salt",
				quantity: 1
			}
		]
	},
	{
		id: "ionised_cobalt",
		name: "Ionised Cobalt",
		type: "Processed Subterranean Mineral",
		description: "A highly energised form of Cobalt, this processed metal can be used to create Advanced Ion Batteries, a conveniently portable source of energy for the Exosuit. In widespread use as a key component in the creation of advanced technologies and structures.",
		value: 401,
		ingredients: [
			{
				id: "cobalt",
				name: "Cobalt",
				quantity: 2
			}
		]

	},
	{
		id: "iridesite",
		name: "Iridesite",
		type: "Enriched Alloy Metal",
		description: "Advanced light metal alloy traded throughout the galactic Outer Edge. Often used in the interiors of trading shuttles to reduce weight as they ascend from planets with high gravitational fields.",
		value: 150000,
		ingredients: [
			{
				id: "aronium",
				name: "Aronium",
				quantity: 1
			}, 
			{
				id: "magno_gold",
				name: "Magno Gold",
				quantity: 1
			}, 
			{
				id: "grantine",
				name: "Grantine",
				quantity: 1
			}
		]
	},
	{
		id: "lemmium",
		name: "Lemmium",
		type: "Alloy Metal",
		description: "Pure Ferrite alloy. Crafted from Pure Ferrite and Uranium. Used extensively in starship freighter construction due to its sheer strength. A hardcore material popular on the Galactic Trade Network.",
		value: 25000,
		ingredients: [
			{
				id: "uranium",
				name: "Uranium",
				quantity: 50
			}, 
			{
				id: "pure_ferrite",
				name: "Pure Ferrite",
				quantity: 100
			}
		]
	},
	{
		id: "living_glass",
		name: "Living Glass",
		type: "Advanced Agricultural Product",
		description: "An advanced building material, this glass has been imbued with organic compounds that allow it to react to the environment. Microbes within the glass filter harmful light of all wavelengths and balance the atmosphere as required.",
		value: 566000,
		ingredients: [
			{
				id: "glass",
				name: "Glass",
				quantity: 5
			}, 
			{
				id: "lubricant",
				name: "Lubricant",
				quantity: 1
			}
		]
	},
	{
		id: "liquid_explosive",
		name: "Liquid Explosive",
		type: "Advanced Agricultural Product",
		description: "A general purpose high explosive, offered in liquid form for convenience of transport and deployment. Do not drink.",
		value: 800500,
		ingredients: [
			{
				id: "acid",
				name: "Acid",
				quantity: 1
			}, 
			{
				id: "unstable_gel",
				name: "Unstable Gel",
				quantity: 1
			}
		]
	},
	{
		id: "lubricant",
		name: "Lubricant",
		type: "Advanced Agricultural Product",
		description: "A synthetic lubricant that reduces wear and prolongs the lifespan of technologies with moving parts.",
		value: 110000,
		ingredients: [
			{
				id: "gamma_root",
				name: "Gamma Root",
				quantity: 400
			}, 
			{
				id: "faecium",
				name: "Faecium",
				quantity: 50
			}
		]
	},
	{
		id: "magno_gold",
		name: "Magno-Gold",
		type: "Alloy Metal",
		description: "Highly prized and lustrous alloy. Popular with traders of all known primary galactic races. Crafted from Ionised Cobalt and Phosphorus. Easily recognisable by its bright red glow and strong magnetic field.",
		value: 25000,
		ingredients: [
			{
				id: "phosphorus",
				name: "Phosphorus",
				quantity: 50
			}, 
			{
				id: "ionised_cobalt",
				name: "Ionised Cobalt",
				quantity: 50
			}
		]
	},
	{
		id: "nitrogen", 
		name: "Nitrogen",
		type: "Compressed Atmospheric Gas",
		description: "A reactive atmospheric gas found wherever there is organic life. Nitrogen is readily harvested from the atmospheres of Lush and Toxic planets.",
		value: 20
	},
	{
		id: "nitrogen_salt",
		name: "Nitrogen Salt",
		type: "Enhanced Gas Product",
		description: "A refined product, this is a powerful organic fertiliser in an easily distributed form.",
		value: 50000,
		ingredients: [
			{
				id: "nitrogen",
				name: "Nitrogen",
				quantity: 250
			}, 
			{
				id: "condensed_carbon",
				name: "Condensed Carbon",
				quantity: 50
			}
		]
	},
	{
		id: "organic_catalyst",
		name: "Organic Catalyst",
		type: "Manufactured Gas Product",
		description: "A catalytic material used in the creation of many organic fertilizers.",
		value: 320000,
		ingredients: [
			{
				id: "thermic_condensate",
				name: "Thermic Condensate",
				quantity: 1
			}, 
			{
				id: "enricheded_carbon",
				name: "Enriched Carbon",
				quantity: 1
			}
		]
	},
	{
		id: "paraffinium",
		name: "Paraffinium",
		type: "Localised Earth Element",
		description: "Local mineral extract, typically found in large deposits or extracted from common materials after inspection with an Analysis Visor. Typically found on planets with a tropical environment.",
		value: 62
	},
	{
		id: "phosphorus",
		name: "Phosphorus",
		type: "Localised Earth Element",
		description: "Local mineral extract, typically found in large deposits or extracted from common minerals after inspection with an Analysis Visor. Typically found on planets with a scorched environment.",
		value: 62
	},
	{
		id: "poly_fibre", 
		name: "Poly Fibre",
		type: "Advanced Agricultural Product",
		description: "A connective fibre for electronics, made from an advanced synthetic polymer and capable of serving as a conduit for power and data.",
		value: 130000,
		ingredients: [
			{
				id: "cactus_flesh",
				name: "Cactus Flesh",
				quantity: 100
			},
			{
				id: "star_bulb",
				name: "Star Bulb",
				quantity: 200
			}
		]
	},
	{
		id: "portable_reactor",
		name: "Portable Reactor",
		type: "Advanced Crafted Product",
		description: "A miniature self-controlled nuclear reactor. Generates sub-stellar levels of energy in a hassle-free, widely compatible fuel module.",
		value: 4200000,
		ingredients: [
			{
				id: "liquid_explosive",
				name: "Liquid Explosive",
				quantity: 1
			}, 
			{
				id: "fusion_accelerant",
				name: "Fusion Accelerant",
				quantity: 1
			}
		]
	},
	{
		id: "quantum_processor",
		name: "Quantum Processor",
		type: "Advanced Crafted Product",
		description: "A highly advanced computational device, essential for the complex calculations involved in warp travel.",
		value: 5200000,
		ingredients: [
			{
				id: "circuit_board",
				name: "Circuit Board",
				quantity: 1
			}, 
			{
				id: "superconductor",
				name: "Superconductor",
				quantity: 1
			}
		]
	},
	{
		id: "radon",
		name: "Radon",
		type: "Compressed Atmospheric Gas",
		description: "A colourless, odourless gas with a relatively short half-life. Found in both Radioactive and Frozen atmospheres, this gas is produced by the decay of other high-energy elements.",
		value: 20
	},
	{
		id: "semiconductor",
		name: "Semiconductor",
		type: "Manufactured Gas Product",
		description: "An advanced material useful in many electronic devices, with its own in-built temperature regulator. Crafted from Thermic Condensate and Nitrogen Salt.",
		value: 15600000,
		ingredients: [
			{
				id: "thermic_condensate",
				name: "Thermic Condensate",
				quantity: 1 
			},
			{
				id: "nitrogen_salt",
				name: "Nitrogen Salt",
				quantity: 1
			}
		]
	},
	{
		id: "solanium",
		name: "Solanium",
		type: "Harvested Agricultural Substance",
		description: "A powerful chemical that has resisted attempts at synthesis. It can be harvested from the bark of the Solar Vine. The vine requires a hot climate to thrive in the wild, but can be farmed in all environments with the aid of a Hydroponics Tray.",
		value: 70
	},
	{
		id: "star_bulb",
		name: "Star Bulb",
		type: "Harvested Agricultural Substance",
		description: "A beautiful gemstone, this prized product is the engorged, luminescent berry of the Star Bramble. The host plant requires lush conditions to thrive in the wild but can be farmed in all environments with the aid of a Hydroponic Tray.",
		value: 32
	},
	{
		id: "sulphurine", 
		name: "Sulphurine",
		type: "Compressed Atmospheric Gas",
		description: "A pungent atmospheric gas. High concentrations are extremely hazardous to organic life. With the aid of specialised machinery, can be extracted from the atmospheres of Scorched and Desert planets.",
		value: 20
	},
	{
		id: "stasis_device",
		name: "Stasis Device",
		type: "Highly Refined Technology",
		description: "A device specifically crafted to keep lifeforms alive for thousands of years longer than their natural lifespan. Such a device requires great skill to manufacture, as not only is it technically complex, but the consequences for a user in the event of malfunction would be disastrous.",
		value: 15600000,
		ingredients: [
			{
				id: "quantum_processor",
				name: "Quantum Processor",
				quantity: 1 
			},
			{
				id: "cryogenic_chamber",
				name: "Cryogenic Chamber",
				quantity: 1
			},
			{
				id: "iridesite",
				name: "Iridesite",
				quantity: 1 
			}
		]
	},
	{
		id: "superconductor",
		name: "Superconductor",
		type: "Manufactured Gas Product",
		description: "An advanced conductive material, the superconductor further enriches the field-warping power of the Semiconductor.",
		value: 2000000,
		ingredients: [
			{
				id: "enriched_carbon",
				name: "Enriched Carbon",
				quantity: 1
			},
			{
				id: "semiconductor",
				name: "Semiconductor",
				quantity: 1
			}
		]
	},
	{
		id: "thermic_condensate",
		name: "Thermic Condensate",
		type: "Enhanced Gas Product",
		description: "A refined product, holding the energy potential of heated atmospheric gas in a stable state until required.",
		value: 50000,
		ingredients: [
			{
				id: "sulphurine",
				name: "Sulphurine",
				quantity: 250
			}, 
			{
				id: "condensed_carbon",
				name: "Condensed Carbon",
				quantity: 50
			}
		]
	},
	{
		id: "unstable_gel",
		name: "Unstable Gel",
		type: "Advanced Agricultural Product",
		description: "A highly reactive gel, this substance is both energy-rich and dangerous to touch.",
		value: 50000,
		ingredients: [
			{
				id: "cactus_flesh",
				name: "Cactus Flesh",
				quantity: 200
			}
		]
	},
];

/*
|--------------------------------------------------------------------------
| DATA > DISCOVERIES
|--------------------------------------------------------------------------
*/

// var discoveries = [
// 	{
// 		name: "Activated Copper (A)",
// 		type: "base",
// 		planet: "Eswo",
// 		system: {
// 			name: "Dugotorui",
// 			lifeform: "Vy'keen",
// 			conflict: "High",
// 			economy: {
// 				type: "High Tech",
// 				tier: "Wealthy" }
// 		}
// 	},
// 	{
// 		name: "Phosphorus (S)",
// 		type: "base",
// 		planet: "Eframon",
// 		system: {
// 			name: "Yeframyon",
// 			lifeform: "Gek",
// 			conflict: "Stable",
// 			economy: {
// 				type: "Metal Processing",
// 				tier: "Booming" }
// 		}
// 	},
// 	{
// 		name: "Sulphurion (S)",
// 		type: "base",
// 		planet: "Eframon",
// 		system: {
// 			name: "Yeframyon",
// 			lifeform: "Gek",
// 			conflict: "Stable",
// 			economy: {
// 				type: "Metal Processing",
// 				tier: "Booming" }
// 		}
// 	},
// 	{
// 		name: "Anomolous Planet: Sharded",
// 		type: "planet",
// 		planet: "Utessfie Unom",
// 		system: {
// 			name: "Lubingro",
// 			lifeform: "Vy'keen",
// 			conflict: "Aggressive",
// 			economy: {
// 				type: "Mass Production",
// 				tier: "Adequate" }
// 		}
// 	},
// 	{
// 		name: "Anomolous Planet: Fractured",
// 		type: "planet",
// 		planet: "Rayso XVI",
// 		system: {
// 			name: "Suzdalny IV",
// 			lifeform: "Korvax",
// 			conflict: "Peaceful",
// 			economy: {
// 				type: "Manufacturing",
// 				tier: "Comfortable" }
// 		}
// 	},
// 	{
// 		name: "Storm Crystals",
// 		type: "planet",
// 		planet: "Naciss",
// 		system: {
// 			name: "Uttenh-Tara",
// 			lifeform: "Gek",
// 			conflict: "Peaceful",
// 			economy: {
// 				type: "Mercantile",
// 				tier: "Comfortable" }
// 		}
// 	}
// ];

/*
|--------------------------------------------------------------------------
| DATA > FREIGHTER
|--------------------------------------------------------------------------
*/

// var freighter = {
// 	name: "bigOlSexiBoi",
// 	class: "B",
// 	slots: "17+4",
// 	value: 10900000
// };

/*
|--------------------------------------------------------------------------
| DATA > FRIGATES
|--------------------------------------------------------------------------
*/

// var frigates = [
// 	{
// 		name: "looksLikeWeMadeIt",
// 		type: "Trade",
// 		class: "S",
// 		repair: {
// 			material: "Pure Ferrite",
// 			quantity: 25 
// 		} 
// 	},
// 	{
// 		name: "CS The Talon of Clouds",
// 		type: "Science",
// 		class: "A",
// 		repair: {
// 			material: "Silver",
// 			quantity: 50 
// 		} 
// 	},
// 	{
// 		name: "SV Forge of the Hijanag",
// 		type: "Science",
// 		class: "B",
// 		repair: {
// 			material: "Pure Ferrite",
// 			quantity: 25 
// 		} 
// 	},
// 	{
// 		name: "SS The Hammer of Flight",
// 		type: "Combat",
// 		class: "B",
// 		repair: {
// 			material: "Pure Ferrite",
// 			quantity: 25 
// 		} 
// 	},
// 	{
// 		name: "getWrecked",
// 		type: "Science",
// 		class: "C",
// 		repair: [ 
// 			{
// 				material: "Gold",
// 				quantity: 20 
// 			},
// 			{
// 				material: "Oxygen",
// 				quantity: 20 
// 			} 
// 		]
// 	},
// 	{
// 		name: "CS4-Kubar",
// 		type: "Trade",
// 		class: "A",
// 		repair: {
// 			material: "Tritium",
// 			quantity: 15 
// 		}
// 	}
// ];

/*
|--------------------------------------------------------------------------
| DATA > SHIPS
|--------------------------------------------------------------------------
*/

// var ships = [
// 	{
// 		name: "orangeBird",
// 		type: "Exotic",
// 		class: "S",
// 		slots: "20+6",
// 		value: 12000000
// 	},
// 	{
// 		name: "theGreatWhiteBat",
// 		type: "Exotic",
// 		class: "S",
// 		slots: "19+6",
// 		value: 10250000
// 	},
// 	{
// 		name: "ittyBittyBaby",
// 		type: "Exotic",
// 		class: "S",
// 		slots: "18+5",
// 		value: 8700000
// 	},
// 	{
// 		name: "lilOlBlueBird",
// 		type: "Exotic",
// 		class: "S",
// 		slots: "18+5",
// 		value: 8700000
// 	},
// 	{
// 		name: "oneEyedWilly",
// 		type: "Explorer",
// 		class: "A",
// 		slots: "27+7",
// 		value: 7250000
// 	},
// 	{
// 		name: "snowy",
// 		type: "Explorer",
// 		class: "S",
// 		slots: "19+5",
// 		value: 1875000
// 	},	
// ];

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

// On document ready, execute starter functions
$(document).ready(function(){
	$('.select2').select2({data:data, placeholder: "Resources"}).change(function(){
		var selected = $(this).find(':selected').val();
		loadItem(items[selected]);
	});
});

var app = new Vue({
    el: '#app',
    data: {
		items: items,
		selected_item: "stasis_device",
		filter: ''
    },
    methods: {
		load_item: function(item_id){
			this.selected_item = item_id;
		}
    },
	computed: {
		item_selected(){
			return this.items.filter(item => {
				return item.id === this.selected_item;
			})
		},
		items_filtered() {
			return this.items.filter(item => {
				return item.name.toLowerCase().indexOf(this.filter.toLowerCase()) > -1;
			})
		}
	},
	beforeMount(){},
	mounted(){},
	updated(){}
})