 

 <?php


//Display images if available
if(count($page->images)) {
$content .= "<div class='col-xs-6'>";
$content .= "<div class='project-imgs'>";
$n = 0; 
foreach($page->images as $image) {
$content .= "<img src='{$image->url}' alt='{$image->description}' />";
$n++;
}
$content .= "</div>";
$content .= "</div>";
};

$content .= "<div class='col-xs-6'><h2>{$page->headline}</h2>{$page->body}</div>";



