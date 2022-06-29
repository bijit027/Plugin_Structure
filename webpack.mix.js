let mix = require("laravel-mix");

mix.setPublicPath("Assets");
mix.setResourceRoot("../../wp-content/plugins/plugin_structure/Assets");
mix
  .js("src/Main.js", "Assets/Admin/Admin.js")
  .vue({ version: 3 })
  .sourceMaps(false);
