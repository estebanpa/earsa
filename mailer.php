<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $nombreApellido = strip_tags(trim($_POST["nombreApellido"]));
		$nombreApellido = str_replace(array("\r","\n"),array(" "," "),$nombreApellido);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$tema = strip_tags(trim($_POST["tema"]));
        $mensaje = trim($_POST["mensaje"]);

        // Check that data was sent to the mailer.
        if ( empty($nombreApellido) OR empty($mensaje) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "info@earsa.com.ar,ruben@earsa.com.ar";

        // Set the email subject.
        $subject = "$tema";

        // Build the email content.
        $email_content = "Nombre Apellido: $nombreApellido\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Mensaje:\n$mensaje\n";

        // Build the email headers.
        $email_headers = "From: $nombreApellido <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Gracias! Tu mensaje ha sido enviado.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Lo sentimos, tu mensaje no fue enviado.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Hay un error con tu mensaje, pruebe otra vez.";
    }

?>