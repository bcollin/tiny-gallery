
= Tiny Gallery by Branko Collin =

While clearing out my main drive, I ran into some old projects from the early 2000s.

This is an image gallery I built for a customer who wanted something very basic. These days of course I would have plucked something from the internet.

It amuses me how little PHP it took.

I would like to share that amusement.

I have removed the customer's photos, modernised the HTML (i.e. changed the DTD) and have added an extra layer: the original did not have a list of galleries.

Note that this was written before Javascript-heavy galleries were prevalent, hence the use of photo.php to load the large image.

Branko Collin, 2023.

== the way this works == 

1. Copy to a server that supports PHP.

2. Replace the images.

3. Change the settings if you so desire:

	- Copy conf-example.php to a new file called conf.php.
	
	- Edit conf.php in a text editor.
	
	- Note that the program uses conf-example.php to read its default settings, so do not delete or rename that file.

5. Check that your images are named 01.png, 02.png, 03.png and so on. (Or 01.jpg, 02.jpg and so on, depending on your settings.)



