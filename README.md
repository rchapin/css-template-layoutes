# css-template-layoutes

If you are a practical web designer that is looking to use a fully compliant CSS layout that:

* Validates (both the markup and the CSS)
* Is easy to customize and (relatively easy to) understand
* Maintains it's integrity with floats and clears in the columns
* Does not contain incomprehensible CSS "hacks"

Then the following layouts are for you.

If you are an HTML purist and have objections to background graphics and additional markup, you probably won't like these.

Below are links to a set of CSS layouts that were developed because of the need to have multi-column CSS layouts that would enable the use of dynamic content while maintaining the integrity of the page.

When I first started this project I found many different types of CSS layouts for multi-column pages, each of which fell apart when you started adding floats and clears in the columns.

What follows is a set of CSS layouts that are designed to work across all of the major platforms and modern browser combinations, and designed such that you can include any sort of content in the different columns without it interfering with content and layout in other columns.

If you find any bugs or have any problems with them, [click here](http://www.ryanchapin.com/contact.html) to send me an e-mail. Or, if you don't see a layout that you would like, [send me an e-mail](http://www.ryanchapin.com/contact.html) and as soon as I have time I'll put it together and post it to the site.

# Cloning and Using

This repo is set up primarily for development and display of the templates.

As such, if you check it out and try to just open up one of the index.html files in a browser directy from the file system it will not work.

You will need to set up a local httpd server with php enabled to do pre-processing on .html files and view them through the web server so that all of the right files are included together to concatenate the page for proper viewing.

# List of Layouts

##2 Column CSS Layouts
	
This set features a series of two column CSS layouts. There are a variety of 2 column variations: left side bars or nav bars, right side bars, headers and footers. This set will render the columns based on the amount of content in them. Such that if there is only a few lines in either column and the browser window is opened taller, the background image will show below the columns. In some cases this is exactly what the designer wants. If you would like full screen layouts, see links below. 
	
- *[2 Column Fixed Width with Left Side Bar Header and Footer](2column_fixed_sidebar_left/index.html)*

	A fixed width layout with a fixed width side/nav bar on the left-hand side of the page with header and footer. 
		
- *[2 Column Fixed Width with Left Side Bar Header and Footer, maximum Accessibility](2column_fixed_sidebar_left_accessib/index.html)*

	A fixed width layout with a fixed width side/nav bar on the left-hand side of the page with a header and footer.
	This is a variation designed for maximum accessibility as it features the side nav markup before the content markup. It will be more accessible for screen reader users but will probably result in a diminished SEO ranking.
		
- *[2 Column Fixed Width with Left Side Bar and Header, without Footer](2column_fixed_sidebar_left_no_footer/index.html)*

	A fixed width layout with a fixed width side/nav bar on the left-hand side of the page with a header, sans footer 
		
- *[2 Column Fixed Width with Right Side Bar, Header, and Footer](2column_fixed_sidebar_right/index.html)*

	Fixed width layout with a fixed width side/nav bar on the right-hand side of the page with header and footer. 
		
- *[2 Column Fixed Width with Right Side Bar with Header and no Footer](2column_fixed_sidebar_right_no_footer/index.html)*

	A fixed width layout with a fixed width side/nav bar on the right-hand side of the page, with header, sans footer. 
		
- *[2 Column Fixed Width with Right Side Bar with Header and no Footer](2column_liquid_sidebar_left/index.html)*

	A liquid layout that fills the browser window with a fixed width left-hand side bar, header and footer.
		
- *[2 Column Fixed Left Side Bar with Liquid Content Column with a Header and no Footer](2column_liquid_sidebar_left_no_footer/index.html)*

	A liquid layout that fills the browser window with a fixed width left-hand side bar, header and no footer. 
		
- *[2 Column Fixed Right Side Bar with Liquid Content Column with Header and Footer](2column_liquid_sidebar_right/index.html)*

	A liquid layout that fills the browser window with a fixed width right-hand side bar, header and a footer.
		
- *[2 Column Fixed Right Side Bar with Liquid Content Column without Footer](2column_liquid_sidebar_right_no_footer/index.html)*

	A liquid layout that fills the browser window with a fixed width right-hand side bar, header, no footer.
		
##2 Column Full Screen CSS Layouts
	
This set of CSS layouts features full screen rendering of the columns. Meaning, regardless of how much content that you have on the page, both of the columns will render the full length of the browser, no matter how big the window. 
	
- *[2 Column Liquid Content Area with Fixed Right Side-Bar and Header](2column_fullscreen_liquid_sidebar_left/index.html)*

	This layout features a liquid content area that fills the browser window and a fixed-width, right-hand side bar.
		
- *[2 Column Liquid Content Area with Fixed Left Side-Bar and Header](2column_fullscreen_liquid_sidebar_right/index.html)*

	This layout features a liquid content area that fills the browser window and a fixed-width, left-hand side bar.
		
- *[2 Column Fixed With with Right Side Bar Fills Screen Top To Bottom with Pegged Footer To Bottom of Window](2column_fixed_sidebar_right_pegged_footer/index.html)*

	This layout features a fixed width 2 column layout with a fixed width side/nav bar that fills the browser from top to bottom.  Additionally, it has a footer which is always visible and always pegged to the bottom of the window.

		
##3 Column CSS Layouts
	
A set of three column CSS layouts that include a number of different variations: fixed widths and liquid layouts as well as versions with and without headers and footers. This set will render the columns based on the amount of content on the page. For full screen layouts see the link below.
	
- *[3 Column Fixed Width with Right and Left Side Bars, Header, and Footer](3column_fixed/index.html)*

	A straight-forward CSS layout with both left and right columns. Because of the fixed widths this one doesn't seem to have problems with IE6.
		
- *[3 Column Liquid Layout with Fixed Side-Bars, Liquid Content Area, with Header and Footer](3column_footer/index.html)*

	A layout with three columns: one on each side of the page (fixed width) with the center column filling the browser window. Includes a header and footer.
		
- *[3 Column Liquid Layout with Fixed Side-Bars, Liquid Content Area, Header, no Footer](3column_no_footer/index.html)*

	A layout with three columns: one on each side of the page (fixed width) with the center column filling the browser window, and no footer.
		
##3 Column Full Screen CSS Layouts
	
This is a set of CSS layouts that I have not seen anywhere else. Which, is the reason why I built them. They solve a unique problem, allowing the designer to display three columns that are full screen, regardless of the amount of content in any of the columns. Similar to the other layouts, they maintain their integrity with nested floats, validate and even work in IE 6.
	
- *[3 Column Liquid Layout with Fixed Side-Bars, Liquid Content Area, and a Header that Renders Full-Screen](3column_fullscreen_header/index.html)*

	A layout with three columns, and a header, without a footer that renders full screen.  It enables you to have three columns that span the height of the browser window regardless of the amount of content in each column.
		
- *[3 Column Liquid Layout with Fixed Side-Bars, Liquid Content Area, no Footer or Header that Renders Full-Screen](3column_fullscreen/index.html)*

	A layout with three columns, sans header or footer that renders full screen.  This was one huge headache to get working in all of the browsers, and is a CSS layout that I've not yet seen anywhere else.  It enables you to have three columns that span the height of the browser window regardless of the amount of content in each column.
		
- *[3 Column Liquid Layout with Fixed Side-Bars, Liquid Content Area, with Header, no Footer that Renders Full-Screen](3column_no_header_footer/index.html)*

	A layout with three columns, no header and a footer that renders full screen.  It enables you to have three columns that span the height of the browser window regardless of the amount of content in each column.
	
		
