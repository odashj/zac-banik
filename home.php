<?php 
// render body
$content .= "<div class='col-xs-12'>{$page->body}</div>";

if($page->hasChildren) {
    $content .= renderNav($page->children("template=basic-page"));
}



?>




