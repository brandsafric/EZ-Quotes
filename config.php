<?php
$config = array();
$config['name'] = "EZ Quotes";
$config['author'] = "Pine Creative Labs";
$config['description'] = "Easily add a quote block to your page.";
$config['website'] = "http://pinecreativelabs.com/"; 
$config['help'] = "http://microweber.pinecreativelabs.com"; 
$config['version'] = 0.5;
$config['ui'] = true;
$config['ui_admin'] = true;
$config['categories'] = "content";
$config['position'] = 100; 

$config['tables'] = array(
    "ez_quotes" => array(
        'id' => "integer",
        'name' => "text",
        'quote_text' => "text",
        'read_more_url' => "text",
        'created_at' => "dateTime",
        'position' => "integer"
    )
);