<?php

function show_github_displayed_file_name($path_to_file, $displayed_file_name)
{	
	echo "<div class=\"nom-fichier\">";
		echo "<a href=\"https://github.com/sylafrs/site/blob/master/$path_to_file/$displayed_file_name\">";
			echo "<span class=\"glyphicon glyphicon-cloud\"></span> $path_to_file/$displayed_file_name";
		echo "</a>";
	echo "</div>";
}

function show_all_articles()
{
	$files = scandir("./articles");
	foreach($files as $t) 
		if ($t<>"." && $t<>".." && $t<>".git")
				include("./articles/$t");	  
}

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
	echo "<div class=\"container\">";

	echo "<div class=\"row\">";
		echo "<h2>$title</h2>";
		echo "<h3>Le $date <span class=\"label label-default\">$category</span></h3>";
		show_github_displayed_file_name("articles", $displayed_file_name);
	echo "</div>";	

	echo "<br/>";
}

/**
 * Stops the current article
 */
function stop_article()
{
	echo "</div>";	
	echo "</div>";
}

/**
 * Starts an article paragraph
 */
function start_article_paragraph() 
{
	echo "<div class=\"row\">";
	echo "<p class=\"text-justify\">";
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
	echo "</div>";
}

/**
 * Displays an image within an article. Must not be called in paragraphs.
 * @param file_name
 *		Path to the image file
 * @param displayed_file_name
 *		The image displayed file name
 */
function show_article_image($file_name, $displayed_file_name)
{	
	$path_to_file = "images/articles";

	echo "<div class=\"row\">";
		echo "<div class=\"col-lg-4 col-lg-offset-4\">";
			echo "<div class=\"thumbnail\">";
				echo "<img src=\"$path_to_file/$file_name\"/>";
				echo "<div class=\"caption\">";
					show_github_displayed_file_name($path_to_file, $displayed_file_name);
				echo "</div>";
			echo "</div>";
		echo "</div>";
	echo "</div>";
}

?>