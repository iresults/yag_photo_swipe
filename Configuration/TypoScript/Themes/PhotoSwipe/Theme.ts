####################################################
# Theme configuration root 
#
# @package YAG
# @subpackage Typoscript
####################################################

plugin.tx_yag.settings.themes.photoSwipe < plugin.tx_yag.settings.themes.default

# Include General theme configuration
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yag_photo_swipe/Configuration/TypoScript/Themes/PhotoSwipe/General.ts">

# Include ImageList Definitions
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yag_photo_swipe/Configuration/TypoScript/Themes/PhotoSwipe/ItemList.ts">