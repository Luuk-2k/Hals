<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="photos/tools-solid.svg" type="image/gif" sizes="16x16">
    <link href="contact.css" rel="stylesheet">
    <link href="hover.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Multiservice Voorburg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<main>
    <nav class="navbar">
    <a class="logo" href="index.html"><img class="x" height="126" src="photos/multiservice.png"
                                                width="150"></a>
        <ul class="nav-links">
            <li class="responsive"><a href="index.html" style="color: #3C3C3C;">Home</a></li>
            <li class="nav-item hvr-underline-from-left"><a style="    color: #3C3C3C;
" href="verhuizen.html">Verhuizen</a></li>
            <li class="nav-item hvr-underline-from-left"><a style="    color: #3C3C3C;
" href="onderhoud.html">Onderhoud</a></li>
            <li class="nav-item hvr-underline-from-left"><a style="    color: #3C3C3C;
" href="schilderswerk.html">Schilderswerk</a></li>
            <li class="nav-item hvr-underline-from-left"><a style="    color: #3C3C3C;
" href="contact.php">Contact</a></li>

        </ul>
    </nav>
    <section>
        <h1 class="contact-title">Stuur ons een berichtje</h1>
        <div class="container">
            <form action="contactform.php"
                  class="contact-form" id="form" method="post">
                <label for="fname">Volledige Naam</label>
                <input type="text" id="fname" name="name" placeholder="Uw naam" required>

                <label for="lname">E-Mail</label>
                <input type="email" id="mail" name="mail" placeholder="Uw E-Mail" required>

                <label for="subject">Onderwerp</label>
                <input type="text" id="subject" name="subject" placeholder="Uw onderwerp" required>

                <label for="message">Uw bericht</label>
                <textarea id="message" name="message" placeholder="Typ hier uw bericht" style="height:200px"></textarea>
                <div class="g-recaptcha" data-sitekey="6LeJn_wUAAAAAJsGJY_rkggeym_nBK79QtiLw23l"></div>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>

    </section>
    <br>
</main>
</body>
</html>