<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Code Drop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/codedrop-logo.png">
    <link href="css/dropdown.css" rel="stylesheet">
    <link href="css/CONTACT.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
          integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
</head>
<body>
<div id="particles-js">
    <div class="main-header">
        <div class="main-content">
            <a href="index.php"><img class="header-img" onclick="" src="images/christmastlogo.png" width="120"
                                     height="120"></a>
            <a href="index.php"><img class="header-imgtext" src="images/logotext.png" width="300" height="60"></a>
        </div>
    </div>
    <div class="main-container">
        <div class="topheader">
            <ul class="menu">
                <div class="dropdown">
                    <button class="dropbtn">Products
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="epic.php">Epic games</a>
                        <a href="xbox.php">Xbox</a>
                        <a href="ps4.php">Ps4</a>
                        <a href="#">Vbucks</a>
                    </div>
                </div>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a style="color: #7289da" target="_blank" href="https://discord.gg/codedrop">Discord</a></li>
            </ul>
        </div>
        <div class="countdown-container">
            <h2 class="countdown-title">Time till CodeDrop Christmas party: </h2>
            <p id="countdown">20d 22h 18m 45s </p>
        </div>
        <section id="contact">
            <h1 class="section-header">CONTACT</h1>
            <div class="contact-wrapper">

                <div class="direct-contact-container">
                    <ul class="contact-list">
                        <li class="list-item"><i class="fab fa-discord fa-2x"><span class="contact-text phone"><a
                                        href="https://discordapp.com/invite/codedrop">Saft#6666</a></span></i></li>

                        <li class="list-item"><i class="fab fa-discord fa-2x"><span class="contact-text phone"><a
                                            href="https://discordapp.com/invite/codedrop">Redice#0001</a></span></i></li>

                        <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a
                                            href="mailto:Codedropsells@gmail.com" title="Send me an email">Codedropsells@gmail.com</a></span></i>
                        </li>
                    </ul>
                    <hr>
                    <ul class="social-media-list">
                        <li><a href="https://twitter.com/CodeDropShop" target="_blank" class="contact-icon">
                                <i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/codedropshop/" target="_blank" class="contact-icon">
                                <i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <hr>
                    <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
                </div>
            </div>
        </section>
    </div>
</div>
<footer>
    <h2 class="footer-copyright"> © Made by @NotRedice & @Saft69</h2>
</footer>
<script src="assets/main.js" rel="script"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://shoppy.gg/api/embed.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>var countDownDate = new Date("Dec 23, 2019 19:00:00").getTime();
    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<script>
    particlesJS.load('particles-js', 'assets/particles.json', function () {
    });

</script>

</body>
</html>

