<?php

$page = Page::getByPath('/about');
$blocks = $page->getBlocks('content');

foreach ($blocks as $block) {
   echo $block->getBlockTypeHandle().'<br />';
}

exit;