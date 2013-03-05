<?php

echo "<a href='#' class='comments' rel='show'>";
	comments_number('Leave a Comment', '1 Comment', '% Comments' );
echo "</a>";

echo "<div class='hidden'>";
	$withcomments = 1;
	comments_template();
echo "</div>";

?>