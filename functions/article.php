<?php

/**
 * 	Starts an article.
 * 	@param title
 *		The article title
 *	@param date
 *		The article date
 *	@param category
 *		The article category
 *	@param displayed_file_name
 *		The article displayed filename
 */
function start_article($title, $date, $category, $displayed_file_name) 
{	
	$date = get_fr_date($date);

	echo "<div class=\"article\">";
	echo "<h2>$title</h2>";
	echo "<h3>Le $date</h3>";
	echo "<h4>$category</h4>";
	echo "<span class=\"nom-fichier\">articles/$displayed_file_name</span>";
}

/**
 * Stops the current article
 */
function stop_article()
{
	echo "</div>";
}

/**
 * Starts an article paragraph
 */
function start_article_paragraph() 
{
	echo "<p>";
}

/**
 * Stops the current paragraph and starts a new one.
 */
function next_article_paragraph() 
{
	stop_article_paragraph();
	start_article_paragraph();
}

/**
 * Stops the current paragraph
 */
function stop_article_paragraph()
{
	echo "</p>";
}

/**
 * Displays an image within an article. Must not be called in paragraphs.
 * @param path_to_file
 *		Path to the image file
 * @param displayed_file_name
 *		The image displayed file name
 */
function show_article_image($path_to_file, $displayed_file_name)
{
	echo "<div class=\"image\">";
	echo "<img src=\"images/articles/$path_to_file\" />";
	echo "<div class=\"nom-fichier\">images/articles/$displayed_file_name</div>";
	echo "</div>";
}

?>