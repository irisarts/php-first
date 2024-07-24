<?php

function startHTML() {
    echo '<!DOCTYPE html>
        <html>';
}

function startBody() {
    echo '<body>
        <div class="wrapper">
        <header>Bike Total <i>- A new way of biking</i></header>';
}

function showHeader(string $title, string $author, string $stylesheet) {
    echo '<head>
        <title>'.$title.'</title>
        <meta name="author" content="'.$author.'" />
        <link rel="stylesheet" href="'.$stylesheet.'" />
        </head>';
}

function showMainContent() {
    echo '<main>';

    // switch ($page) {
    //     case 'home':
            
    // }
}