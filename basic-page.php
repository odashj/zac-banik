 

 <?php
$content .= "<div class='project-text'><div class='container'><div class='col-xs-12'><div class='col-xs-7'></div><div class='col-xs-5'><h1>{$page->title}</h1>{$page->body}</div></div></div></div>";

$content .= "<div class='project-text-mobile'><div class='col-xs-12'><h1>{$page->title}</h1>{$page->body}</div></div>";
//Display images if available
if(count($page->images)) {

$content .= "<div class='col-xs-7'>";
$content .= "<div class='project-imgs'>";
$n = 0; 
foreach($page->images as $image) {
$content .= "<img src='{$image->url}' alt='{$image->description}' />";
$n++;
}
$content .= "</div>";
$content .= "</div>";
};





