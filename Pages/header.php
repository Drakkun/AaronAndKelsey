<!--Header/Nav Menu for wedding website-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aaron and Kelsey's Wedding</title>

    <!-- Bootstrap style sheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Bootstrap javascript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Project style sheet -->
    <link rel="stylesheet" type="text/css" href="../Styles/styles.css">
</head>

<header>
    <h1 align="middle">Kelsey Leigh Clark  &hearts; Aaron Michael Fields</h1>

    <!--Nav Bar Menu-->
    <nav class="navbar navbar-inverse">
        <div class="containter">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-tabs">
                    <li <?php if($menuActive=0){echo 'class="active"';}?>><a href="index.php">RSVP</a></li>
                    <!--Other links for other pages when we make them. For the time being hav commented them out
                    <li <?php if($menuActive=1){echo 'class="active"';}?>><a href="contactus.php">Contact Us</a></li>
                    <li <?php if($menuActive=2){echo 'class="active"';}?>><a href="donations.php">Donations</a></li>-->
                </ul>
            </div>
        </div>
    </nav>
</header>