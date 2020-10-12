<?php
$wacana = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

function lc_first($wacana){
	return lcfirst($wacana);
}

function uc_first($wacana){
	return ucfirst($wacana);
}


function tolow($wacana){
	return strtolower($wacana);
}

function toupper($wacana){
	return strtoupper($wacana);
}


echo "<br>", lc_first(toupper($wacana));
echo "<br>";
echo "<br>", uc_first(tolow($wacana));
echo "<br>";
echo "<br>", tolow($wacana);
echo "<br>";
echo "<br>", toupper($wacana);
echo "<br>";

?>