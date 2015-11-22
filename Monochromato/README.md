# Monochromato
**Monochromato** is a minimalistic, clean, content-driven theme for [Bludit](http://www.bludit.com) made with ❤, coffee and a healthy dose of SASS.

![Monochromato](http://i.imgur.com/hrHNkKB.jpg)

The color scheme, as you could guess by the name is monochromatic, meaning that all shades are based on a single hue of the base color.
Monochromato uses *Open Sans* for the best readability. However, you can choose another for to be used with the headings. Just check out the Customization section. Monochromato has some limitations so be sure to check them out as well. 

## Features
* Great starting point for your blog.
* [scssphp](http://leafo.net/scssphp/) preprocessor.
* [Highlight.js](https://highlightjs.org/) instead of Rainbow.js, so you can add the languages you need.
* Post & Page titles.

## Customization
The basics are very easy to customize using the `_config.scss` file:
```scss
/* Use the following lines to configure your font, main (accent) color and the maximum width. */
$main-font: 'Open Sans', sans-serif;
$header-font: 'Open Sans', sans-serif;
$code-font: 'Source Code Pro', Consolas, monospace;
$accent-color: dimgray;
$max-content-width: 55rem;
```

## Limitations
* Because of how Bludit operates at the time being, the navigation bar is technically the sidebar. As such, *it is advised that you use the Page list plugin **alone***. The Tags list or About plugins will mess up the theme.
* Not all colors work well with the standard settings - `Yellow` or `#FFFF00` for example are too bright. In order to use such bright colors, you'll have to modify the theme further to suit your needs, or use [SASS Color Functions](http://sassme.arc90.com/) when setting up the `$accent-color`.
