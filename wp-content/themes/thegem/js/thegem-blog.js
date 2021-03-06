(function($) {
	function initBlogDefault() {
		if (window.tgpLazyItems !== undefined) {
			var isShowed = window.tgpLazyItems.checkGroupShowed(this, function(node) {
				initBlogDefault.call(node);
			});
			if (!isShowed) {
				return;
			}
		}

		var $blog = $(this);

		$('.blog-load-more', $blog.parent()).on('click', function() {
			window.thegemBlogLoadMoreRequest($blog, $(this), false);
		});

		window.thegemInitBlogScrollNextPage($blog, $blog.siblings('.blog-scroll-pagination'));

		var itemsAnimations = $blog.itemsAnimations({
			itemSelector: 'article',
			scrollMonitor: true
		});
		itemsAnimations.show();

		window.thegemBlogImagesLoaded($blog, 'article img', function() {
			if ($blog.hasClass('blog-style-justified-2x') || $blog.hasClass('blog-style-justified-3x') || $blog.hasClass('blog-style-justified-4x')) {
				window.thegemBlogOneSizeArticles($blog);
			}

			$blog.buildSimpleGalleries();
			$blog.updateSimpleGalleries();
		});
	}

	$('.blog:not(body,.blog-style-timeline_new,.blog-style-masonry)').each(initBlogDefault);

	$(window).on('resize', function(){
		$(".blog-style-justified-2x, .blog-style-justified-3x, .blog-style-justified-4x").each(function(){
			window.thegemBlogOneSizeArticles($(this));
		});
	});

})(jQuery);
