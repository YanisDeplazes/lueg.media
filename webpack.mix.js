const mix = require("laravel-mix");
require("@tinypixelco/laravel-mix-wp-blocks");
require("laravel-mix-compress");
const { glb } = require("laravel-mix-glob");

// Set Resource Roots and Paths
mix.setResourceRoot("../").setPublicPath("./assets/dist");

// Autload jQuery for global access
mix.autoload({
	jquery: ["$", "window.jQuery", "jQuery"],
});

// Compile main assets
mix
	.js("assets/src/scripts/app.js", "assets/dist/js")
	.sass("assets/src/sass/style.scss", "assets/dist/css")
	.options({ processCssUrls: true })
	.sourceMaps();

// Compile assets for production
mix
	.js(
		glb.src("assets/src/scripts/blocks/*.js"),
		glb.out({ outMap: "assets/dist/js/blocks" })
	)
	.js(
		glb.src("assets/src/scripts/fields/*.js"),
		glb.out({ outMap: "assets/dist/js/fields" })
	);

// Compress the output
mix.compress();

// Static Folders for Favicon and Global Files
mix.copy("assets/src/global", "assets/dist/global");

// Webpack Configuration for Stats Output
mix.webpackConfig({
	stats: {
		children: true,
	},
});
