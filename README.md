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
