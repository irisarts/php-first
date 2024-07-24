<?php
function showFullPage() {
    require_once 'functions/html.php';
    require_once 'functions/forms.php';
    require_once 'functions/functions.php';
    require_once 'functions/pages.php';

startHTML();
showHeader('Bike Total', 'Author Name', 'styles.css');
startBody();
$navLinks = [
    'Home' => 'home',
    'About' => 'about',
    'Shop' => 'shop',
    'Contact' => 'contact'
];
showNavbar($navLinks);
switchPages();
showFooter();
}