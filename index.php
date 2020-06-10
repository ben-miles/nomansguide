<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Subnautica PDA</title>
  <meta name="description" content="A second screen companion app for the game Subanutica.">
  <meta name="author" content="Benjamin Miles">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js/vue.js"></script>
  <link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>
    <div id="app">
        <h1 id="title"><span>SUB</span>NAUTICA PDA</h1>
        <div id="pda">
            <div id="screen">
                <div id="tabs">
                    <button class="tab active" id="list" aria-label="List" title="List" v-on:click="loadPane('list')">
                        <svg viewBox="0 0 36 34">
                            <linearGradient id="gradient" gradientUnits="userSpaceOnUse" x1="18" y1="2.9648" x2="18" y2="30.6665">
                                <stop offset="0" style="stop-color:#F3F9FD"/>
                                <stop offset="1" style="stop-color:#79D1F6"/>
                            </linearGradient>
                            <path d="M19,5.951v17.716h-2V5.951C13.646,2.734,2.895,2.147,1,4.042v22.625c6.5,0,12.438-0.563,17,4
            c4.563-4.563,10.5-4,17-4V4.042C33.105,2.147,22.354,2.734,19,5.951z"/>
                        </svg>
                    </button>
                    <button class="tab" id="items" aria-label="Items" title="Items" v-on:click="loadPane('items')">
                        <svg viewBox="0 0 34 34">
                            <linearGradient id="gradient" gradientUnits="userSpaceOnUse" x1="17.2026" y1="1.0273" x2="17.2026" y2="32.7651">
                            <stop offset="0" style="stop-color:#F3F9FD"/>
                            <stop offset="1" style="stop-color:#79D1F6"/>
                        </linearGradient>
                            <path d="M8.927,2.374l3.447,3.447c1.725,1.725,1.725,4.522,0,6.247c-1.725,1.725-4.521,1.725-6.246,0
            L2.681,8.621c-2.102,4.176-1.777,8.947,1.209,11.932c2.98,2.98,7.74,3.31,11.912,1.219l10.994,10.994l6.275-6.276L22.077,15.495
            c2.092-4.171,1.763-8.932-1.218-11.913C17.874,0.597,13.104,0.273,8.927,2.374z"/>
                        </svg>
                    </button>
                    <button class="tab" id="notes" aria-label="Notes" title="Notes" v-on:click="loadPane('notes')">
                        <svg viewBox="0 0 36 34">
                            <linearGradient id="gradient" gradientUnits="userSpaceOnUse" x1="18" y1="1.6665" x2="18" y2="31.6665">
                                <stop offset="0" style="stop-color:#F3F9FD"/>
                                <stop offset="1" style="stop-color:#79D1F6"/>
                            </linearGradient>
                            <path d="M24.817,1.667H1v30h34V11.85L24.817,1.667z M6,6.667h13v2H6V6.667z M6,11.667h13v2H6V11.667z
            M31,23.667H6v-2h25V23.667z M31,18.667H6v-2h25V18.667z M24,12.667v-7l7,7H24z"/>
                        </svg>
                    </button>
                </div>
                <div id="heading">
                    <h2>List</h2>
                </div>
                <div id="panes">
                    <div class="pane" id="list-pane">
                        <div id="list-container">
                            <div v-if="list.length === 0" class="welcome">
                                <div id="spoiler">
                                    <!-- "Alert" by Gautam Arora, IN: https://thenounproject.com/term/alert/574450/ -->
                                    <svg viewBox="0 0 12 12">
                                        <path d="M10.447693,11.402344H1.553162c-0.561523,0-1.063477-0.290039-1.34375-0.776367    c-0.280273-0.485352-0.280273-1.06543,0.000977-1.550781l4.447266-7.702148C4.936951,0.887695,5.43988,0.597656,6.000427,0.597656    s1.063477,0.290039,1.34375,0.775391l4.446289,7.702148c0.280273,0.486328,0.280273,1.066406,0,1.551758    S11.00824,11.402344,10.447693,11.402344z M6.000427,1.597656c-0.095703,0-0.333984,0.026367-0.476562,0.275391L1.075623,9.575195    c-0.143555,0.249023-0.047852,0.46875,0,0.551758s0.19043,0.275391,0.477539,0.275391h8.894531    c0.287109,0,0.428711-0.192383,0.476562-0.275391s0.144531-0.302734,0-0.551758L6.477966,1.873047    C6.334412,1.624023,6.09613,1.597656,6.000427,1.597656z"></path>
                                        <path d="M6.085388,7.578125c-0.276367,0-0.5-0.223633-0.5-0.5v-2.75293c0-0.276367,0.223633-0.5,0.5-0.5    s0.5,0.223633,0.5,0.5v2.75293C6.585388,7.354492,6.361755,7.578125,6.085388,7.578125z"></path>
                                        <circle cx="6.085185" cy="8.744164" r="0.6"></circle>
                                    </svg>
                                    <span><b>Spoiler Alert!</b> If you have not yet completed <i>Subnautica</i>, you <b>will</b> encounter spoilers using this app.</span>
                                    <!-- "Alert" by Gautam Arora, IN: https://thenounproject.com/term/alert/574450/ -->
                                    <svg viewBox="0 0 12 12">
                                        <path d="M10.447693,11.402344H1.553162c-0.561523,0-1.063477-0.290039-1.34375-0.776367    c-0.280273-0.485352-0.280273-1.06543,0.000977-1.550781l4.447266-7.702148C4.936951,0.887695,5.43988,0.597656,6.000427,0.597656    s1.063477,0.290039,1.34375,0.775391l4.446289,7.702148c0.280273,0.486328,0.280273,1.066406,0,1.551758    S11.00824,11.402344,10.447693,11.402344z M6.000427,1.597656c-0.095703,0-0.333984,0.026367-0.476562,0.275391L1.075623,9.575195    c-0.143555,0.249023-0.047852,0.46875,0,0.551758s0.19043,0.275391,0.477539,0.275391h8.894531    c0.287109,0,0.428711-0.192383,0.476562-0.275391s0.144531-0.302734,0-0.551758L6.477966,1.873047    C6.334412,1.624023,6.09613,1.597656,6.000427,1.597656z"></path>
                                        <path d="M6.085388,7.578125c-0.276367,0-0.5-0.223633-0.5-0.5v-2.75293c0-0.276367,0.223633-0.5,0.5-0.5    s0.5,0.223633,0.5,0.5v2.75293C6.585388,7.354492,6.361755,7.578125,6.085388,7.578125z"></path>
                                        <circle cx="6.085185" cy="8.744164" r="0.6"></circle>
                                    </svg>
                                </div>
                                <h1>Welcome aboard, Captain.</h1>
                                <p><b>Subnautica PDA</b> is a second-screen companion app for the game <a href="https://subnautica.com/" target="_blank" title="Subnautica Official Site"><i>Subnautica</i></a>. It was made to assist with crafting recipes and other helpful reminders. It is best used on a phone or tablet, while playing the game on PC or console.</p>
                                <p>To use <b>Subnautica PDA</b>: Click the <b>wrench</b> icon for a complete list of blueprints. Click a category to see the items in that category, and click on an item to add it to your personal List. Those items will appear here, in place of this welcome message. To get back to this message, just clear out your List, by clicking the <b>eye</b> next to each item. To keep any other miscellaneous reminders, use the Notes view by clicking the <b>note</b> icon. All of your items and notes will be saved if you leave the app and return later.</p>
                                <p>This app uses material from the <a href="https://subnautica.fandom.com/wiki/Subnautica_Wiki" target="_blank">Subnautica Wiki</a> at <a href="https://www.fandom.com/" target="_blank">Fandom</a> and is licensed under the <a href="https://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons Attribution-Share Alike License</a>.</p>
                            </div>
                            <div v-for="(item, index) in list" class="list-item">
                                <div class="controls">
                                    <button v-on:click="removeFromList(index)" aria-label="Remove" title="Remove">
                                        <svg viewBox="0 0 77.79 45.1">
                                            <!-- "Eye" by Poups, FR: https://thenounproject.com/term/eye/3350406/ -->
                                            <path d="M77.29,22.68a44.82,44.82,0,0,0-76.74-2L0,21.54l.5.88a44.92,44.92,0,0,0,39,22.68A44.66,44.66,0,0,0,77.25,24.4l.54-.85ZM39.47,41.76A41.55,41.55,0,0,1,3.92,21.64a41.48,41.48,0,0,1,70,1.81A41.29,41.29,0,0,1,39.47,41.76Z"></path>
                                            <path d="M38.9,10.53a12,12,0,1,0,12,12A12,12,0,0,0,38.9,10.53Zm0,20.7a8.68,8.68,0,1,1,8.67-8.68A8.68,8.68,0,0,1,38.9,31.23Z"></path>
                                        </svg>
                                    </button>
                                    <div v-if="item.recipe" class="quantity-buttons">
                                        <button v-on:click="changeQuantity('+',index)" aria-label="Increase Quantity" title="Increase Quantity">+</button>
                                        <button v-on:click="changeQuantity('-',index)" aria-label="Decrease Quantity" title="Decrease Quantity">-</button>
                                    </div>
                                </div>
                                <div class="item">
                                    <img :src="item.name | slug | img_src" />
                                    <div class="label">
                                        <span v-if="item.recipe" class="yield">{{ item.recipe.yield }}</span>
                                        <span>{{ item.name }}</span>
                                    </div>
                                </div>
                                <div class="data">
                                    <h3 v-if="item.location">Found in:</h3>
                                    <div v-if="item.location" class="location">
                                        {{ item.location }}
                                    </div>
                                    <h3 v-if="item.recipe">Crafted from:</h3>
                                    <div v-if="item.recipe" class="recipe">
                                        <div v-for="ingredient in item.recipe.ingredients" class="ingredient">
                                            <span class="quantity">{{ ingredient.quantity }}</span>
                                            <img :src="ingredient.name | slug | img_src" />
                                            <span class="name">{{ ingredient.name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pane" id="items-pane" style="display:none;">
                        <div id="items-container">
                            <div v-for="(group, groupindex) in groups" class="group collapsed" :id="group.name | slug">
                                <h3 v-on:click="toggle(group.name)">{{ group.name }}</h3>
                                <div v-for="(item, itemindex) in group.items" class="item" v-on:click="addToList(groupindex,itemindex)">
                                    <img :src="item.name | slug | img_src" />
                                    <span>{{ item.name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pane" id="notes-pane" style="display:none;">
                        <textarea v-model="notes" placeholder="Keep your notes here."></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div id="bkg"></div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>