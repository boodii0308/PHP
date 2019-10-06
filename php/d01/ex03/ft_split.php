#!/usr/bin/php
<?php
function ft_split($s)
{
	 $ar = explode(" ", $s, str_word_count($s));
	 sort($ar);
	return $ar;
}
?>
