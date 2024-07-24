<?php
function showFullPage() {
    require_once 'functions/html.php';
    require_once 'functions/forms.php';
    require_once 'functions/functions.php';

startHTML();
showHeader('Bike Total', 'Author Name', 'styles.css');
startBody();
$navLinks = [
    'Home' => 'index.php',
    'About' => 'about.php',
    'Products' => 'products.php',
    'Contact' => 'contact.php'
];
showNavbar($navLinks);
$content = '<h1>Welcome to Bike Total</h1><p>Discover a new way of biking with us.</p>';
showMainContent($content);
contactForm();
showFooter();
}