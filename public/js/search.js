

$('[data-search]').on('keyup', function() {
	var searchVal = $(this).val();
	var filterItems = $('[data-filter-item]');
console.log(searchVal);
	if ( searchVal != '' ) {
		filterItems.addClass('hidden-fil');
		$('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden-fil').css('position', 'static');
	} else {
		filterItems.removeClass('hidden-fil');
		filterItems.css('position', 'absolute');

	}
});

