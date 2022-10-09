<h1 align="center"><a href="https://www.sudosu.info" target="_blank">Sudo Su - Official Wordpress Theme</a></h1>

<p align="center">
<img alt="Version" src="https://img.shields.io/badge/version-1.3-3f51b5.svg?style=flat-square"/>
<a href="https://www.sudosu.info/"><img alt="Author" src="https://img.shields.io/badge/author-Carlos-red.svg?style=flat-square"/></a>
<img alt="WordPress" src="https://img.shields.io/badge/WordPress-5.0%2B-blue.svg?style=flat-square"/>
<a href="https://github.com/yrccondor/mdx/blob/master/LICENSE"><img alt="License" src="https://img.shields.io/badge/license-GPL%20V3.0-orange.svg?style=flat-square"/></a>
<a href="https://app.fossa.io/projects/git%2Bgithub.com%2Fyrccondor%2Fmdx?ref=badge_shield" alt="FOSSA Status"><img src="https://app.fossa.io/api/projects/git%2Bgithub.com%2Fyrccondor%2Fmdx.svg?type=shield"/></a>
</p>

## History

During the first quarantine of the SARS-CoV-2 pandemic of 2020, I had the idea to invest my time at home, in creating a personal blog to publish my personal projects. The theme was coded from zero, after several courses of creation of Themes and Plugins for Wordpress.

I was using this theme for several years and it worked well, now I want to share it here, so anyone can edit it or use it as a reference to create their own theme for WordPress. :smiley:

## Preview

Just visit my website to test the theme! https://www.sudosu.info/
<!-- ![screenshot.png](docs/screenshot.png) -->

## Features

<img alt="Bootstrap" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/2560px-Bootstrap_logo.svg.png" width="32" height="27"/> Builded with Bootstrap 4.3.1

<img alt="javascript" src="https://swiperjs.com/images/libs/js.svg" width="32" height="27"/> Change the interaction and appearance via JS file

<img alt="PolyLang" src="https://raw.githubusercontent.com/polylang/polylang/6d660cdda735d759bc502256270ae09cdee9199c/.github/assets/polylang-logo.svg"/> Compatible with Plugin PolyLang

<img alt="MultiLenguage" src="https://cdn-icons-png.flaticon.com/512/3898/3898150.png" width="27" height="27"/> Ready for multi language URL's English(EN-GB) and Spanish(ES)

<img alt="responsive" src="https://icon-library.com/images/website-design-icon/website-design-icon-8.jpg" width="27" height="27"/> Responvise web Design, adapted for all screens :iphone: :computer:

## Getting started
1. Download the Project to a zip file
![step1.png](docs/step1.png)

2. Go to your Wordpress > Appearance > Themes > Upload a theme 
![step2.png](docs/step2.png)

3. When the installation finishes you will see something like this
![step3.png](docs/step3.png)

4. Your theme must be activated for it to be displayed.
![step4.png](docs/step4.png)

## Possible issues after installation
### Navbar and Widgets

If you find that your Navbar (Menus) or Sidebar (Plugins) are not displayed correctly, you may have to activate them again from:

Wordpress > Appearance > Themes > Sudo Su > Customize

### Multilingual URL's

The theme is prepared by default to work in English as the first language, but if you add more languages through PolyLang, you must update the elements to your language.  Here is an example:

```php
<?php $lang = get_bloginfo("language");
if ($lang == 'es') { // If the page exists in Spanish, display this text
    $read_more = "Leer más";
} else { // English url is the default. 
    $read_more = "Read more";
}
echo $read_more; ?>
