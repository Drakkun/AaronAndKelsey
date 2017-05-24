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
    <link rel="stylesheet" href="../Styles/styles.css">

    <!-- Background color -->
    <style>
        /*Background color*/
        body {background-color: #484d69; /*blue*/}

        /*Text color and font */
        h1   {color: white; font-family: serif; font-style:italic;}
        p    {color: white;}

        /*RSVP button*/
        button {
            background-color: #ffe569 /*yellow*/;
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        /*Nav menu*/
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #484d69; /*blue*/;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }

        navbar{ width: 100%; text-align: center; }
    </style>


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
</head>

<body>
