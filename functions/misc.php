<?php

/**
 * Converts a date on a french date (localized 'l d F Y')
 * @param date
 *		The date to convert
 * @return The converted date
 */
function get_fr_date($date)
{
	$months_fr = Array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
	
	// $days_fr = Array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

	$time = strtotime($date);
	return 
		//. $days_fr[date('N', $time) - 1] . ' ' 
		date('d', $time) . ' ' 
		. $months_fr[date('m', $time) - 1] . ' '
		. date('Y', $time);
}

?>