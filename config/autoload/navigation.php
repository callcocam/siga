<?php
$special=include __DIR__.'/special.php';
include __DIR__.'/default.php';
include __DIR__.'/secondary.php';

return ["default"=>$default,"special"=>$special,"home"=>[],"sitemap"=>[],'secondary'=>$secondary];