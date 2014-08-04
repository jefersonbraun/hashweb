<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $from = 'From: TangledDemo'; 
    $to = 'jefersonbbraun@gmail.com'; 
    $subject = 'Mensagem enviada através de hashweb.com.br';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
    if ($_POST['submit']) {
    /* Anything that goes in here is only performed if the form is submitted */
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>';
    }
    }
?>