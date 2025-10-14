<?php

function formatName($name){
    // removes paranthesis and its content
    $cleanName = preg_replace("/\s*\(.*?\)/", "", $name);

    // removes backslashes
    $cleanName = str_replace("\\", "", $cleanName);

    // trims spaces and capitalize words
    $cleanName = ucwords(strtolower(trim($cleanName)));

    return $cleanName;
}

// replaces spaces with underscores
function replaceSpace($name){
    
    $cleanName = preg_replace('/\s+/', '_', $name);

    return $cleanName;
}