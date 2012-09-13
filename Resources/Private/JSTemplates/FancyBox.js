$(document).ready(function () {
	/* ###yagSettings###, */
	$('a.fancybox[rel=photoSwipe-album-###contextIdentifier###]').fancybox({
		'titlePosition': 'outside',
		'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
			var titleCode = '<span id="fancybox-title-over">' +  (currentIndex + 1) + '/' + currentArray.length;
			if (title) {
				titleCode += ': ' + title;
			}
			titleCode += '</span>';
			return titleCode;
		}
	});
});