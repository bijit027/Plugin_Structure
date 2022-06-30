# Plugin_Structure



step-1:

install vue using vue cli npm install -g @vue/cli

add package.json file npm init

install vue latest version (version 3) npm i vue@next

on src folder add two file naming Main.js and App.vue

on Main.js: import { createApp } from 'vue' import App from './App.vue' createApp(App).mount('#psp-admin-app')

on App.vue:

#

{{ msg }}
#

#<script> #export default {
data() {
return {
msg: "hello from admin vue panel",
};
},
#}; #</script>"

step-2: install laravel-mix and setup this

install laravel-mix npm i laravel-mix

on root folder create assets folder. under Asstes folder create Admin folder and then create Admin.js file.

add a file naming webpack.mix.js and add the text:

let mix = require('laravel-mix');
mix.js('src/Main.js', 'Assets/Admin/Admin.js').vue({ version: 3 });
replace scripts with these text on package.json
"scripts": {
"development": "mix",
"watch": "mix watch",
"watch-poll": "mix watch -- --watch-options-poll=1000",
"hot": "mix watch --hot",
"production": "mix --production"
},
step-3: register and enqueue scripts from wordpress side and target 'Assets/Admin/Admin.js'

step4: add composer  command " composer init" for detail follow this video from 16 minutes link:
https://www.youtube.com/watch?v=D_I3qpuGKno&list=PLu-53K60L1JR3DJqrtmPTdZluw-TaQ9-S&index=8

step5: npm i composer

step6: npm update vue-loader


step-7: install vue-template-compiler npm i vue-template-compiler

step-8: run command 'npm run watch' then ENJOY!!!

step9: for routing use history:createWebHashHistory()
