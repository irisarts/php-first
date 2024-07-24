<?php

function showHome() {
    echo '<h1>Welcome to Bike Total</h1>';
    echo '<p>Discover a new way of biking with us.</p>';
}

function showAbout() {
    echo '<h1>About Us</h1>';
    echo '<p>Learn more about our mission and values.</p>';
}

// function showWebshop() {
//     echo '<h1>Our Webshop</h1>';
//     echo '<p>Browse our products.</p>';
// }

// function showContactForm($name, $email, $comment_msg, $error) {
//     echo '<h1>Contact Us</h1>';
//     if ($error) {
//         echo '<p style="color:red;">'.$error.'</p>';
//     }
//     echo '<form action="contact_process.php" method="POST">';
//     echo '<label for="name">Name:</label>';
//     echo '<input type="text" id="name" name="name" value="'.htmlspecialchars($name).'" required>';
//     echo '<label for="email">Email:</label>';
//     echo '<input type="email" id="email" name="email" value="'.htmlspecialchars($email).'" required>';
//     echo '<label for="message">Message:</label>';
//     echo '<textarea id="message" name="comment_msg" required>'.htmlspecialchars($comment_msg).'</textarea>';
//     echo '<button type="submit">Submit</button>';
//     echo '</form>';
// }

// function generateLogin() {
//     echo '<h1>Login</h1>';
// }

// function generateRegistration() {
//     echo '<h1>Register</h1>';
// }

// function logout() {
//     echo '<h1>Logged out</h1>';
// }