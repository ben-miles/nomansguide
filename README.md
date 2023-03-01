# No Man's Guide

A second-screen companion app for the game "No Man's Sky." A convenient way to see location, crafting, and cooking data for over one hundred in-game items (and growing). Future updates tentatively include translations for the various alien languages.

## Recommended IDE Setup

[VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur) + [TypeScript Vue Plugin (Volar)](https://marketplace.visualstudio.com/items?itemName=Vue.vscode-typescript-vue-plugin).

## Customize configuration

See [Vite Configuration Reference](https://vitejs.dev/config/).

## Installation

1. Clone this repository and provision a web server for the project.
2. Get a TinyPNG Developer API key from [TinyPNG - Developer API](https://tinypng.com/developers).
3. Make a copy of `.env-example`, rename to `.env`, and update the value of `TINYPNG_API_KEY` with the actual key.
3. Make sure [Node.js](https://nodejs.org) and [NPM](https://www.npmjs.com) are installed.
4. In the project's root directory, run `npm install` in the terminal.

### Compile and Hot-Reload for Development

```sh
npm run dev
```

### Compile and Minify for Production

```sh
npm run build
```

This project is tested with BrowserStack.