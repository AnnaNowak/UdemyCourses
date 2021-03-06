<?php
if (isset($_POST['submit'])) {
    $from = $_POST['email'];
    $to = 'aniapietrucha16@wp.pl';
    $subject = 'Email signup';
    $body = 'Please sign me up to the mailing list';

    if (!$_POST['email']) {
        $emailError = 'Please enter a valid email address';
    }

    if(!isset($emailError)) {
        if (mail ($to, $subject, $body, 'From: '.$from)) {
            $result = 'Thank you we\'ll keep you updated';
        } else {
            $result = 'Sorry, there has been an error, please try again';
        }
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
</head>
<body>
<section id="logo">
    <div class="conteiner">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="img/my-logo.png" class="img-fluid" alt="logo"/>
            </div>
        </div>
    </div>
</section>

<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>We're working hard, will be ready to launch in...</p>
            </div>
        </div>
    </div>
</section>

<section id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="countdown"></div>
            </div>
        </div>
    </div>
</section>

<section id="icons">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline">
                    <a href="https://twitter.com/" target="blank">
                        <li class="list-inline-item"><i class="fab twitter fa-twitter-square fa-3x"></i></li>
                    </a>
                    <a href="https://facebook.com/" target="_blank>
                        <li class=" list-inline-item"><i class="fab facebook fa-facebook-square fa-3x"></i></li>
                    </a>
                    <a href="https://plus.google.com" target="_blank>
                        <li class=" list-inline-item"><i class="fab google fa-google-plus-square fa-3x"></i></li>
                    </a>
                    <a href="https://www.instagram.com" target="_blank>
                        <li class=" list-inline-item"><i class="fab instagram fa-instagram fa-3x"></i></li>
                    </a>
            </div>
        </div>
    </div>
</section>

<section id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline" role="form" method="post" action="#signup">
                    <input type="email" class="form-control form-control-sm" name="email"
                           placeholder="enter your email">
                    <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Find out more
                    </button>
                </form>
                <?php if(isset($emailError)) echo $emailError;?>
                <?php if(isset($result)) echo $result;?>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script>
    $(function () {
        $(
            '.countdown').countdown({
            date: "July 18, 2018 19:46:26"
        });
    });
</script>

</body>
</html>
