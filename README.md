# No Man's Guide

<img src=".github/images/screenshot_main.jpg" width="200" /> <img src=".github/images/screenshot_items.jpg" width="200" /> <img src=".github/images/screenshot_item.jpg" width="200" /> <img src=".github/images/screenshot_translator.jpg" width="200" />

A second-screen companion app for the game "No Man's Sky." A convenient way to find location, crafting, refining and cooking information for over one hundred in-game items, as well as a translator for the various alien languages.

[![Vue](https://img.shields.io/badge/Vue%203-green?style=for-the-badge&logo=vuedotjs&logoColor=white)](https://vuejs.org/)
[![Vite](https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=FFD62E)](https://vitejs.dev/)
[![Github Actions](https://img.shields.io/badge/Github%20Actions-2088FF?style=for-the-badge&logo=githubactions&logoColor=white)](https://github.com/features/actions)
[![Github Pages](https://img.shields.io/badge/Github%20Pages-2088FF?style=for-the-badge&logo=githubpages&logoColor=white)](https://pages.github.com/)
[![Supported by the No Man's Sky Community Developers & Designers](https://raw.githubusercontent.com/NMSCD/About/master/badge/green-ftb.svg)](https://nmscd.com/)

## Installation

1. Clone this repository and provision a web server for the project.
2. Make sure [Node.js](https://nodejs.org) and [NPM](https://www.npmjs.com) are installed.
3. In the project's root directory, run `npm install` in the terminal.

## Development

- It's recommended to use [VSCode](https://code.visualstudio.com/) with the [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) extension.
- For a live preview of the source code, run `npm run dev`.

## Deployment

- This repo uses GitHub Actions (with [this Workflow by Vite](https://vitejs.dev/guide/static-deploy.html#github-pages)) to automatically build and deploy to GitHub Pages whenever new code is pushed to the `master` branch. 
- You can also build locally by running `npm run build`, and you can preview that build with `npm run preview`.

## Special Thanks

- Most of the data I use was sourced from the [No Man's Sky Wiki on Fandom](https://nomanssky.fandom.com/wiki/No_Man%27s_Sky_Wiki)
- This project makes use of [Vanilla Tilt JS](https://micku7zu.github.io/vanilla-tilt.js/)
- This project is part of the [No Man's Sky Community Developers & Designers (NMSCD)](https://nmscd.com/) collection
- This project is tested with [BrowserStack](https://www.browserstack.com/)
