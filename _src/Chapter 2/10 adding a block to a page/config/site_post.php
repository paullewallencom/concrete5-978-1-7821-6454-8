<?php

$page = Page::getByPath('/about');
$block = BlockType::getByHandle('hello_world');

$data = array(
   'title' => 'An Exciting Title',
   'content' => 'This is the content!'
);

$page->addBlock($block, 'content', $data);