<?php

########################################################################
# Extension Manager/Repository config file for ext "yag_photo_swipe".
#
# Auto generated 13-09-2012 09:07
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'YAG Photo Swipe Integration',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Andreas Thurnheer-Meier, Daniel Corn',
	'author_email' => 'tma@iresults.li, cod@iresults.li',
	'author_company' => 'iresults, iresults',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
			'yag' => '1.5.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:116:{s:21:"ExtensionBuilder.json";s:4:"c368";s:12:"ext_icon.gif";s:4:"e922";s:14:"ext_tables.php";s:4:"dbed";s:14:"ext_tables.sql";s:4:"d41d";s:44:"Classes/ViewHelpers/JavascriptViewHelper.php";s:4:"dfc7";s:47:"Classes/ViewHelpers/MobileBrowserViewHelper.php";s:4:"647c";s:42:"Classes/ViewHelpers/RegistryViewHelper.php";s:4:"662b";s:42:"Classes/ViewHelpers/SettingsViewHelper.php";s:4:"50e2";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"876a";s:38:"Configuration/TypoScript/constants.txt";s:4:"6305";s:34:"Configuration/TypoScript/setup.txt";s:4:"7d60";s:58:"Configuration/TypoScript/Themes/FancyPhotoSwipe/General.ts";s:4:"7c3f";s:59:"Configuration/TypoScript/Themes/FancyPhotoSwipe/ItemList.ts";s:4:"3c2f";s:56:"Configuration/TypoScript/Themes/FancyPhotoSwipe/Theme.ts";s:4:"5ab2";s:53:"Configuration/TypoScript/Themes/PhotoSwipe/General.ts";s:4:"d26b";s:54:"Configuration/TypoScript/Themes/PhotoSwipe/ItemList.ts";s:4:"b9e0";s:51:"Configuration/TypoScript/Themes/PhotoSwipe/Theme.ts";s:4:"75ce";s:41:"Resources/Private/JSTemplates/FancyBox.js";s:4:"8bf2";s:40:"Resources/Private/Language/locallang.xml";s:4:"d6a5";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"0791";s:62:"Resources/Private/Templates/FancyPhotoSwipe/ItemList/List.html";s:4:"78bc";s:57:"Resources/Private/Templates/PhotoSwipe/ItemList/List.html";s:4:"fd18";s:38:"Resources/Public/3.0.4/MIT-license.txt";s:4:"210e";s:32:"Resources/Public/3.0.4/README.md";s:4:"21e9";s:33:"Resources/Public/3.0.4/change.log";s:4:"bed5";s:32:"Resources/Public/3.0.4/close.png";s:4:"27a0";s:35:"Resources/Public/3.0.4/close100.png";s:4:"404b";s:47:"Resources/Public/3.0.4/code.photoswipe-3.0.4.js";s:4:"64b1";s:51:"Resources/Public/3.0.4/code.photoswipe-3.0.4.min.js";s:4:"d621";s:54:"Resources/Public/3.0.4/code.photoswipe.jquery-3.0.4.js";s:4:"c04f";s:58:"Resources/Public/3.0.4/code.photoswipe.jquery-3.0.4.min.js";s:4:"98c2";s:32:"Resources/Public/3.0.4/error.gif";s:4:"ba74";s:32:"Resources/Public/3.0.4/icons.png";s:4:"fd94";s:35:"Resources/Public/3.0.4/icons@2x.png";s:4:"feaa";s:33:"Resources/Public/3.0.4/loader.gif";s:4:"37e2";s:31:"Resources/Public/3.0.4/next.png";s:4:"a48e";s:34:"Resources/Public/3.0.4/next100.png";s:4:"4dac";s:37:"Resources/Public/3.0.4/photoswipe.css";s:4:"296c";s:31:"Resources/Public/3.0.4/play.png";s:4:"9cc5";s:34:"Resources/Public/3.0.4/play100.png";s:4:"ff0f";s:35:"Resources/Public/3.0.4/previous.png";s:4:"55b9";s:38:"Resources/Public/3.0.4/previous100.png";s:4:"df3f";s:47:"Resources/Public/3.0.4/examples/01-default.html";s:4:"c973";s:46:"Resources/Public/3.0.4/examples/02-jquery.html";s:4:"7d5c";s:59:"Resources/Public/3.0.4/examples/03-multiple-image-sets.html";s:4:"1794";s:53:"Resources/Public/3.0.4/examples/04-jquery-mobile.html";s:4:"38d2";s:58:"Resources/Public/3.0.4/examples/05-jquery-mobile-ajax.html";s:4:"7ee9";s:46:"Resources/Public/3.0.4/examples/06-events.html";s:4:"8b1b";s:54:"Resources/Public/3.0.4/examples/07-custom-toolbar.html";s:4:"7226";s:54:"Resources/Public/3.0.4/examples/08-exclusive-mode.html";s:4:"64f7";s:68:"Resources/Public/3.0.4/examples/09-exclusive-mode-no-thumbnails.html";s:4:"e466";s:55:"Resources/Public/3.0.4/examples/10-image-meta-data.html";s:4:"8e0a";s:55:"Resources/Public/3.0.4/examples/11-custom-captions.html";s:4:"e788";s:53:"Resources/Public/3.0.4/examples/12-custom-target.html";s:4:"f57d";s:69:"Resources/Public/3.0.4/examples/13-custom-target-with-indicators.html";s:4:"49db";s:59:"Resources/Public/3.0.4/examples/14-tap-image-go-to-url.html";s:4:"f918";s:50:"Resources/Public/3.0.4/examples/ajax-gallery1.html";s:4:"def7";s:50:"Resources/Public/3.0.4/examples/ajax-gallery2.html";s:4:"c68b";s:49:"Resources/Public/3.0.4/examples/debug-inline.html";s:4:"92c7";s:56:"Resources/Public/3.0.4/examples/debug-jquery-mobile.html";s:4:"2114";s:49:"Resources/Public/3.0.4/examples/debug-jquery.html";s:4:"08a3";s:42:"Resources/Public/3.0.4/examples/debug.html";s:4:"f728";s:49:"Resources/Public/3.0.4/examples/jquery-mobile.css";s:4:"0fc4";s:42:"Resources/Public/3.0.4/examples/styles.css";s:4:"54f0";s:51:"Resources/Public/3.0.4/examples/images/blogicon.png";s:4:"a035";s:63:"Resources/Public/3.0.4/examples/images/codecomputerlovelogo.gif";s:4:"2744";s:55:"Resources/Public/3.0.4/examples/images/facebookicon.png";s:4:"0ad9";s:53:"Resources/Public/3.0.4/examples/images/flickricon.png";s:4:"6a85";s:54:"Resources/Public/3.0.4/examples/images/twittericon.png";s:4:"1a59";s:51:"Resources/Public/3.0.4/examples/images/full/001.jpg";s:4:"eebe";s:51:"Resources/Public/3.0.4/examples/images/full/002.jpg";s:4:"14ff";s:51:"Resources/Public/3.0.4/examples/images/full/003.jpg";s:4:"285c";s:51:"Resources/Public/3.0.4/examples/images/full/004.jpg";s:4:"c9d3";s:51:"Resources/Public/3.0.4/examples/images/full/005.jpg";s:4:"7960";s:51:"Resources/Public/3.0.4/examples/images/full/006.jpg";s:4:"3f49";s:51:"Resources/Public/3.0.4/examples/images/full/007.jpg";s:4:"fc99";s:51:"Resources/Public/3.0.4/examples/images/full/008.jpg";s:4:"23e1";s:51:"Resources/Public/3.0.4/examples/images/full/009.jpg";s:4:"9ee5";s:51:"Resources/Public/3.0.4/examples/images/full/010.jpg";s:4:"9a8a";s:51:"Resources/Public/3.0.4/examples/images/full/011.jpg";s:4:"b28f";s:51:"Resources/Public/3.0.4/examples/images/full/012.jpg";s:4:"16c3";s:51:"Resources/Public/3.0.4/examples/images/full/013.jpg";s:4:"f857";s:51:"Resources/Public/3.0.4/examples/images/full/014.jpg";s:4:"ea56";s:51:"Resources/Public/3.0.4/examples/images/full/015.jpg";s:4:"386d";s:51:"Resources/Public/3.0.4/examples/images/full/016.jpg";s:4:"7a5f";s:51:"Resources/Public/3.0.4/examples/images/full/017.jpg";s:4:"85c3";s:51:"Resources/Public/3.0.4/examples/images/full/018.jpg";s:4:"9117";s:51:"Resources/Public/3.0.4/examples/images/full/019.jpg";s:4:"995e";s:51:"Resources/Public/3.0.4/examples/images/full/020.jpg";s:4:"9d4d";s:52:"Resources/Public/3.0.4/examples/images/thumb/001.jpg";s:4:"7558";s:52:"Resources/Public/3.0.4/examples/images/thumb/002.jpg";s:4:"f0a7";s:52:"Resources/Public/3.0.4/examples/images/thumb/003.jpg";s:4:"ae75";s:52:"Resources/Public/3.0.4/examples/images/thumb/004.jpg";s:4:"eba9";s:52:"Resources/Public/3.0.4/examples/images/thumb/005.jpg";s:4:"ac41";s:52:"Resources/Public/3.0.4/examples/images/thumb/006.jpg";s:4:"93fa";s:52:"Resources/Public/3.0.4/examples/images/thumb/007.jpg";s:4:"e9cc";s:52:"Resources/Public/3.0.4/examples/images/thumb/008.jpg";s:4:"8947";s:52:"Resources/Public/3.0.4/examples/images/thumb/009.jpg";s:4:"47bc";s:52:"Resources/Public/3.0.4/examples/images/thumb/010.jpg";s:4:"e77c";s:52:"Resources/Public/3.0.4/examples/images/thumb/011.jpg";s:4:"116d";s:52:"Resources/Public/3.0.4/examples/images/thumb/012.jpg";s:4:"a4f8";s:52:"Resources/Public/3.0.4/examples/images/thumb/013.jpg";s:4:"1558";s:52:"Resources/Public/3.0.4/examples/images/thumb/014.jpg";s:4:"3f86";s:52:"Resources/Public/3.0.4/examples/images/thumb/015.jpg";s:4:"68e6";s:52:"Resources/Public/3.0.4/examples/images/thumb/016.jpg";s:4:"8de6";s:52:"Resources/Public/3.0.4/examples/images/thumb/017.jpg";s:4:"ff56";s:52:"Resources/Public/3.0.4/examples/images/thumb/018.jpg";s:4:"aa6d";s:52:"Resources/Public/3.0.4/examples/images/thumb/019.jpg";s:4:"5172";s:52:"Resources/Public/3.0.4/examples/images/thumb/020.jpg";s:4:"447d";s:39:"Resources/Public/3.0.4/lib/klass.min.js";s:4:"08b0";s:61:"Resources/Public/3.0.4/noutil/code.photoswipe.noutil-3.0.4.js";s:4:"447d";s:65:"Resources/Public/3.0.4/noutil/code.photoswipe.noutil-3.0.4.min.js";s:4:"f857";s:68:"Resources/Public/3.0.4/noutil/code.photoswipe.noutil.jquery-3.0.4.js";s:4:"447d";s:72:"Resources/Public/3.0.4/noutil/code.photoswipe.noutil.jquery-3.0.4.min.js";s:4:"f857";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>