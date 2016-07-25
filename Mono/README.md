![Home](https://raw.githubusercontent.com/HoundSU/Mono/master/README/home.png)

# Mono [![GitHub issues](https://img.shields.io/github/issues/HoundSU/Mono.svg)](https://github.com/HoundSU/Mono/issues)
**Mono** is a minimalistic, clean, content-driven theme for [Bludit](http://www.bludit.com) made with ❤, coffee and a healthy dose of SASS.

Theme Demo - [Hound.su](https://hound.su/themes/mono) - enjoy :)

## Features
* Great starting point for your blog.
* [scssphp](http://leafo.net/scssphp/) preprocessor.
* [Highlight.js](https://highlightjs.org/) instead of Rainbow.js, so you can add the languages you need.
* Post & Page titles.
* Smooth Scroll

## Proudly Uses

[Smooth Scroll](https://github.com/cferdinandi/smooth-scroll/) [![Build Status](https://travis-ci.org/cferdinandi/smooth-scroll.svg)](https://travis-ci.org/cferdinandi/smooth-scroll)

[SCSSPHP](https://github.com/leafo/scssphp/) [![Build](https://travis-ci.org/leafo/scssphp.svg?branch=master)](http://travis-ci.org/leafo/scssphp)
[![License](https://poser.pugx.org/leafo/scssphp/license.svg)](https://packagist.org/packages/leafo/scssphp)

[Font Awesome](https://fortawesome.github.io/Font-Awesome/)

[jQuery](https://jquery.com/)




## Customization
The basics are very easy to customize using the `_config.scss` file:
```scss
/* Use the following lines to configure your font, main (accent) color and the maximum width. */
$main-font: 'Open Sans', sans-serif;
$header-font: 'Open Sans', sans-serif;
$code-font: 'Source Code Pro', Consolas, monospace;
$accent-color: #3399ff;
$max-content-width: 55rem;
```

## Customizing from where external resources are loaded from

Due to a request, I have added a file in the PHP folder of the theme which is called *external.php* in this file a user (you) can
change the links to whatever they decide. The default setup is as follows:

```
<!-- Highlight.js -->
<script>hljs.initHighlightingOnLoad();</script>

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">

<!-- Custom Javascript -->
<script
			  src="//code.jquery.com/jquery-2.2.3.min.js"
			  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
			  crossorigin="anonymous">
</script>
```

People that are using this Theme in China shall have issues with Posts/Pages loading up extremely slow. To counter this you shall have to change the *external.php* file to this code:

```
<link href="http://fonts.useso.com/css?family=Lato:400,900" rel="stylesheet">
<link href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<!-- Custom Javascript -->
<script
              src="//cdn.bootcss.com/jquery/2.2.3/jquery.min.js"
              integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
              crossorigin="anonymous">
</script>
```

## Limitations
* Because of how Bludit operates at the time being, the navigation bar is technically the sidebar. As such, *it is advised that you use the Page list plugin **alone***. The Tags list or About plugins will mess up the theme.


Please note the original maker of this Theme is HXII [Monochromato](https://github.com/hxii/Monochromato/) I am simply modifying the theme to suit my needs by -  changing the colours, upgrading the theme to (Bludit) standards and adding other nifty features :)  
