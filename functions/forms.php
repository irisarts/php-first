<?php

function contactForm() {
    echo '<form action="contact_process.php" method="POST">';
    echo '<label for="name">Name:</label>';
    echo '<input type="text" id="name" name="name" required>';
    echo '<label for="email">Email:</label>';
    echo '<input type="email" id="email" name="email" required>';
    echo '<label for="message">Message:</label>';
    echo '<textarea id="message" name="message" required></textarea>';
    echo '<button type="submit">Submit</button>';
    echo '</form>';
}