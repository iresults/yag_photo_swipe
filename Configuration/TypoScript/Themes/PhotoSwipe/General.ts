####################################################
# Theme configuration root 
#
# @package YAG
# @subpackage Typoscript
####################################################

plugin.tx_yag.settings.themes.photoSwipe {

	title = Photo Swipe
	description = Photo Swipe

	resolutionConfigs {

		medium >
		medium {
				maxW = 1024
				maxH = 768
		}

		thumb >
		thumb {
				width = 200c
				height = 200c
		}
	}


    // This CSS is only included if nivoSliderSettings.controlNavThumbs is true
	#thumbNavCSS = EXT:yag_themepack_jquery/Resources/Public/CSS/NivoSlider/ThumbNav.css

    controller.ItemList.list {
		template = EXT:yag_photo_swipe/Resources/Private/Templates/PhotoSwipe/ItemList/List.html
	}
	
	includeLibJS = jQuery
	includeLibCSS >

	includeJS {
		photoSwipe10 = EXT:yag_photo_swipe/Resources/Public/3.0.4/lib/klass.min.js
		#photoSwipe20 = EXT:yag_photo_swipe/Resources/Public/3.0.4/code.photoswipe.jquery-3.0.4.min.js
		photoSwipe20 = EXT:yag_photo_swipe/Resources/Public/3.0.4/code.photoswipe.jquery-3.0.4.js
	}

	includeCSS {
	    nivoSlider10 = EXT:yag_photo_swipe/Resources/Public/3.0.4/photoswipe.css
	}
}