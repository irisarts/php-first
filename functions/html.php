<?php

include_once 'forms.php';
include_once 'functions.php';

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

function showNavbar ($links) {
    echo '<nav>';
    echo '<ul>';
    foreach ($links as $linkText => $url) {
        echo '<li><a href="'.$url.'">'.$linkText.'</a></li>';
    }
    echo '</ul>';
    echo '</nav>';
}

function showMainContent($content) {
    echo '<main>';
    echo $content;
    echo '</main>';
}

function showFooter() {
    echo '<footer>';
    echo '<p>&copy; '.date('Y').' Bike Total. All rights reserved.</p>';
    echo '</footer>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}