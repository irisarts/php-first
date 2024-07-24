<?php

function contactForm($nameuser = '', $email = '', $comment_msg = '', $error = '') {
    if ($error) {
        echo '<p style="color:red;">' . htmlspecialchars($error) . '</p>';
    }
    echo '<form action="" method="GET">
    <label for="username">Naam: </label>
    <input required type="text" name="username" value="' . htmlspecialchars($nameuser) . '"/><br>
    <label for="email">E-mail: </label>
    <input required type="email" name="email" value="' . htmlspecialchars($email) . '"/><br>
    <label for="comment_msg">Message: </label>
    <textarea required type="text" name="comment_msg" rows="8">' . htmlspecialchars($comment_msg) . '</textarea><br>
    <button type="submit">Submit</button>
    </form>';
}