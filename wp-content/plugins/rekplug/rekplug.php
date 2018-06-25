<?php
/*
Plugin Name: RekPlug
Plugin URI: http://example.com
Description: RekPlug for rekru.
Version: 0.1
Author: Adrian
*/

function createView()
{
    ob_start();
    if ( isset( $_POST['submit_button'] ) ) {
        $name = sanitize_text_field( $_POST["name"] )." ".sanitize_text_field( $_POST["surname"] );
        $email = sanitize_email( $_POST["email"] );
        $subject = "Mail Kontaktowy";
        $message = esc_textarea( $_POST["message"] );
        $to = get_option( 'admin_email' );
        $headers = "From: $name <$email>";
        if ( wp_mail( $to, $subject, $message, $headers ) ) {
            echo 'Mail został wysłany pomyślnie';
        } else {
            echo 'Podczas wysyłania maila wystąpił błąd';
        }
    }
    echo '<form method="POST" action="'.esc_url($_SERVER['REQUEST_URI']).'" class="form_block"><input type="text" name="name" placeholder="Wpisz imię"><input type="text" name="surname" placeholder="Wpisz nazwisko"><input type="email" name="email" placeholder="Wpisz email"><textarea rows="10" cols="35" name="message"></textarea><input type="submit" name="submit_button" value="Wyślij"/></form>';

    return ob_get_clean();
}

add_shortcode( 'formularz_kontaktowy', 'createView' );

?>