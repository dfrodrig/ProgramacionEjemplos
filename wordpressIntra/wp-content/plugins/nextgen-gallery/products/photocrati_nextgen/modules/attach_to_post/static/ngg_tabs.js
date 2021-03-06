jQuery(function($) {

	// Creates a Firefox-friendly wrapper around jQuery Tabs
	$.fn.ngg_tabs = function(options) {

	    // TODO: remove this when plupload is upgraded
        if (/crios|iP(hone|od|ad)/i.test(navigator.userAgent)) {
            this.find('.main_menu_tab').each(function() {
                if (this.id === 'create_tab') {
                    $(this).remove();
                }
            });
            this.find('ul li a').each(function() {
                if (this.href.indexOf('#create_tab') !== -1) {
                    $(this).parent('li').remove();
                };
            });
        }

		// Create jQuery tabs
		this.tabs(options);

		// Change from display:none to visbibility:hidden
		var i = 0;
		this.find('.main_menu_tab').each(function() {
			if (i === 0) {
				$.fn.ngg_tabs.show_tab(this);
			} else {
				$.fn.ngg_tabs.hide_tab(this);
            }
			i++;
		});

		// When the selected tab changes, then we need to re-adjust
		this.bind('tabsactivate', function(event, ui) {
			// Ensure that all tabs are still displayed, but hidden ;)
			$.fn.ngg_tabs.hide_tab($.fn.ngg_tabs.get_tab_by_li(ui.oldTab));
			$.fn.ngg_tabs.show_tab($.fn.ngg_tabs.get_tab_by_li(ui.newTab));
		});
	};

	$.fn.ngg_tabs.hide_tab = function(tab) {
		setTimeout(function() {
            $(tab).css({
				display: 'block',
                'z-index': -10,
                visibility:	'hidden',
				opacity: 0
            });
		}, 0);
	};

	$.fn.ngg_tabs.show_tab = function(tab){
		tab = $(tab);

        setTimeout(function() {
        	var iframe = tab.find('iframe')[0];
            if (typeof iframe !== 'undefined'
			&&  typeof iframe.contentWindow !== 'undefined') {
                adjust_height_for_frame(top, iframe.contentWindow);
			}
        }, 50);

        setTimeout(function() {
            tab.css({
                'z-index': 1,
				visibility: 'visible',
				opacity: 1
            });
		}, 50);
	};

	$.fn.ngg_tabs.get_tab_by_li = function(list_item) {
		return list_item.parents('div')
			            .find('.main_menu_tab[aria-labelledby="' + list_item.attr('aria-labelledby') + '"]');
	}

});