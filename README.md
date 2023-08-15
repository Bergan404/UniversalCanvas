# This Custom Wordpress Theme uses [WPGulp](https://github.com/ahmadawais/WPGulp)

How to edit this theme.

This theme will use a combination of the **wpgulp.config.js** and **gulpfile.babel.js** files to watch files for changes. The setup will watch for file changes, use browsersync if turned on in the **wpgulp.config.js** file, compile SCSS, minify and prefix CSS, concatinate and minify Javascript, and compress and optimize images.

1. Run `npm install`
2. Run `npm start`

You will need [Node JS](https://nodejs.org/en/)
You may also need [Node Version Manager](https://github.com/nvm-sh/nvm#installing-and-updating)

## node-sass errors

If you are encountering errors when running `npm install`, you probably need to downgrade your version of Node with nvm. Run `nvm install 14.16.0` to install the correct version.

## To get Started

For local development you will need to projectUrl variable in the **wpgulp.config.js** file. You may additionally edit other variables as needed for your dev environment.

In the **functions.php** file there will be a section where you can add the name of the theme file to block the access of node_modules being transfered with the site on migration.

To change the name of the theme on the wordpress backend after running `npm start` make your way to the **style.scss** file in the SRC folder, the name and description and other things can be edited there.
