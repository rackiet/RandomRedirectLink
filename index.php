<?php
// List of links to be randomly redirected to
$links = array(
    'https://facebook.com/',
    'https://google.com/',
);

// Choose one of the links randomly
$randomLink = $links[array_rand($links)];

// Redirect to the selected link
header("Location: $randomLink");
exit;
?>
