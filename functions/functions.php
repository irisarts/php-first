<?php

function switchPages() {
    require_once 'pages.php';
    $page = $_POST['page'] ?? $_GET['page'] ?? 'home';

    switch ($page) {
        case 'home':
            showHome();
            break;
        case 'about':
            showAbout();
            break;
        case 'shop':
            // showWebshop();
            // break;
        case 'contact':
            // $name = $_GET['name'] ?? '';
            // $email = $_GET['email'] ?? '';
            // $comment_msg = $_GET['comment_msg'] ?? '';
            // $error = $_GET['error'] ?? '';
            // showContactForm($name, $email, $comment_msg, $error);
            break;
        case 'login':
            // generateLogin();
            // break;
        case 'register':
            // generateRegistration();
            // break;
        case 'logout':
            // logout();
            // break;
        default:
            showHome();
            break;
    }
}