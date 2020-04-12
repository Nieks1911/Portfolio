<?php

if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'niekschouten1911@gmail.com';
    $subject = 'Email received from portfolio!';
    $body = '<html lang="en">
                <body>
                    <h2>Message:</h2>
                    <hr>
                    <p>Name
                    <br>
                    ' . $fullname . '</p>
                    <p>Email
                    <br>
                    ' . $email . '</p>
                    <p>Message
                    <br>
                    ' . $message . '</p>
                </body>
            </html>';

    $headers = "From: " . $fullname . " <" . $email . ">\r\n";
    $headers .= "Reply-to: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";

    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<br>';
        echo 'Thanks for contacting me. I will respond as soon as possible!';
    } else {
        echo 'Error, failed to sent email... please try again.';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACT ME - Nieks Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="flex">
    <div class="header">
        <a href="../html/index.html">
            <img class="pixelheart" src="../images/heart%20pixel%20art%20254x254.png" alt="heart"
                 onmouseover="this.src='../images/heart pixel art_hover 254x254.png'"
                 onmouseout="this.src='../images/heart%20pixel%20art%20254x254.png'">        </a>
        <h1 class="title">To Learn & To Create</h1>
        <h3 id="name">Niek Schouten</h3>
    </div>
</div>

<div class="container">
    <div class="intro">
        <h1>CONTACT</h1>
    </div>
</div>

<div class="contact_form_grid">
    <p id="form_text">Send me an email by filling out the form below:</p>
    <form class="contact_form" action="" method="post">
        <input class="input" type="text" name="fullname" placeholder="Full name">
        <br>
        <input class="input" type="text" name="email" placeholder="Your email">
        <br>
        <input class="input" type="text" name="subject" placeholder="Subject">
        <br>
        <textarea class="input" name="message" placeholder="Message" rows="10" columns="50"></textarea>
        <br>
        <button class="button" type="submit">Send</button>
    </form>

    <div id="contact_info">
        <h3>My info</h3>
        <br>
        <p>Email: niekschouten1911@gmail.com</p>
        <p>Phone: 06 19282135</p>
        <p>Blog: <a class="link" href="https://stud.hosted.hr.nl/0989262/">stud.hosted.hr.nl/0989262</a></p>
    </div>
</div>

<div class="grid">
    <div class="footer">
        <a class="footer_link" href="index.html">HOMEPAGE</a>
        <a class="footer_link" href="about.html">ABOUT ME</a>
        <a class="footer_link" href="allprojects.html">ALL PROJECTS</a>
        <a class="footer_link" href="../php/contact.php">CONTACT ME</a>
    </div>
</div>

</body>
</html>
