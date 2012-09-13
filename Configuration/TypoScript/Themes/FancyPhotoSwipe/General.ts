####################################################
# Theme configuration root 
#
# @package YAG
# @subpackage Typoscript
####################################################

plugin.tx_yag.settings.themes.fancyPhotoSwipe {

	title = Fancy Photo Swipe
	description = Photo Swipe with a single image to open the album

	resolutionConfigs {

		medium >
		medium {
				maxW = 1024
				maxH = 768
		}

		thumb >
		thumb {
				maxW = 1024
				maxH = 768
		}
	}

    controller.ItemList.list {
		template = EXT:yag_photo_swipe/Resources/Private/Templates/FancyPhotoSwipe/ItemList/List.html
	}
	
	includeLibJS = jQuery
	includeLibCSS >

	includeJS {
		photoSwipe10 = EXT:yag_photo_swipe/Resources/Public/3.0.4/lib/klass.min.js
		photoSwipe20 = EXT:yag_photo_swipe/Resources/Public/3.0.4/code.photoswipe.jquery-3.0.4.js
	}

	includeCSS {
	    nivoSlider10 = EXT:yag_photo_swipe/Resources/Public/3.0.4/photoswipe.css
	}
}