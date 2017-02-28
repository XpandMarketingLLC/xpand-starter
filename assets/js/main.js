(function($){
	/* Load content from category pages using AJAX 
	 * NOTE: to make this work you will need to make sure
	 * the content area you are trying to load includes 
	 * elements with the ids #main and #inner
	 */ 
	
	var $mainContent = $('#main'),
			$cat_links = $('ul.categories-filters li a');
			
			$cat_links.on('click', function (e) {
				e.preventDefault();
				$el = $(this);
				var value = $el.attr('href');
				$mainContent.animate({
					opacity : '0.5'
				});
				$mainContent.load(value + ' #inner', function() {
					$mainContent.animate({
						opacity : '1'
					});
				})
			});

})(jQuery);
