<!--Home/RSVP page-->
<!--header.php import nav menu-->
<?php
$menuActive=0;
include_once('header.php');
?>
<body>
    <!--RSVP form start-->
    <div class="container" align="middle">
        <div class="row" align="middle">
            <div class="col-md-11 col-xs-12" align="middle">

                <form action = "index.php" method="post" align="middle">
                    <h1 align="middle">You're Invited</h1>

                    <!--First Name-->
                    <div class ="form-group col-md-4">
                        <input type="text" size="53"
                               class="form-control" placeholder=" First Name" name="FIRSTNAME"/>
                    </div>
                    &nbsp;&nbsp;

                    <!--Last Name-->
                    <div class="form-group col-md-4">
                        <input type="text" size="53"
                               class="form-control" placeholder=" Last Name" name="LASTNAME"/>
                    </div>
                    &nbsp;&nbsp;

                    <!--Email (can be NULL/optional)-->
                    <div class="form-group col-md-4">
                        <input type="email" size="53"
                               class="form-control" placeholder=" Email (optional)" name="EMAIL"/>
                    </div>
                    &nbsp;&nbsp;

                    <!--Number of Adults-->
                    <div class="form-group col-xs-6">
                        <input type="number" min="1"
                               class="form-control" placeholder=" Number of Adults Attending (ages 13+)" name="ADULTS"/>
                    </div>
                    &nbsp;&nbsp;

                    <!--Number of Kids-->
                    <div class="form-group col-md-6">
                        <input type="number" min="0"
                               class="form-control" placeholder=" Number of Children Attending (ages 12 and under)" name="KIDS"/>
                    </div>
                    &nbsp;&nbsp;

                    <!--Submit/RSVP button-->
                    <div class="containter">
                        <div class="row">
                            <div class="col-md-11">
                                <button type ="submit" class="btn btn-default" name="submit">RSVP</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    &nbsp;&nbsp;

    <!--PHP Database communication stuff-->
    <?php
    if (isset($_POST['submit']))
    {
        //Only run if the form was submitted
        //Get data from form and change inputs to variables
        $FIRSTNAME = $_POST['FIRSTNAME'];
        $LASTNAME = $_POST['LASTNAME'];
        $EMAIL = $_POST['EMAIL'];
        $ADULTS = $_POST['ADULTS'];
        $KIDS = $_POST['KIDS'];
        $TOTALQUANTITY = ($ADULTS + $KIDS);

        //Checks for required fields and sets errorMessage
        $isComplete = true;
        $errorMessage = "";

        //Checks for first name
        if (!$FIRSTNAME) {
            $errorMessage .= "Please enter your first name.";
            $isComplete = false;
        }

        //Checks for last name
        if (!$LASTNAME) {
            $errorMessage .= "Please enter your last name.";
            $isComplete = false;
        }

        //Makes sure at least 1 adult is attending
        if (!$ADULTS) {
            $errorMessage .= "There must be at least 1 adult attending.";
            $isComplete = false;
        }

        //Runs if all required data is submitted
        if ($isComplete)
        {
            //TODO: connect to database/create config.php and functions
            //$db=connectDB($DBHost,$DBUser,$DBPasswd,$DBName);

            //Check to see if what the guest entered will exceed 150 total people attending the wedding
            $checkGuestCount = "SELECT SUM(TOTALQUANTITY) AS TOTALGUESTS FROM GUEST;";
            ////TODO:run insert query/create config.php and functions
            //$currentGuests=queryDB($checkGuestCount, $db);

            $TOTALQUANTITY = $addedGuests;

            /*if ($currentGuests + $addedGuests) >150
            {
                isComplete=false;
                $guestsAvailable=(150-$currentGuests);
                $errorMessage .="Sorry! We can't accommodate that many guests! We have '" . $guestsAvailable . "' spots left."
            }

            else
            {*/
                //put together sql code to insert into database
                $insertRSVP = "INSERT INTO GUEST
                    (FIRSTNAME, LASTNAME, EMAIL, ADULTS, KIDS, TOTALQUANTITY) 
                    VALUES ('" . $FIRSTNAME . "', '" . $LASTNAME . "','" . $EMAIL . "',
                    '" . $ADULTS . "','" . $KIDS . "','" . $TOTALQUANTITY . "');";

                //TODO:run insert query/create config.php and functions
                //queryDB($insertRSVP, $db);

                //After entering guest
                echo("Thank you for RSVPing " . $FIRSTNAME . " " . $LASTNAME . "!
                    We can't wait to see you at the wedding!");
            //}
        }
    }
    ?>

    <!--Prompts errors if any--->
    <div class ="row">
        <div class="col-xs-12">
            <?php
            if(isset($isComplete) && !$isComplete)
            {
                echo '<div class="alert alert-danger" role="alert">';
                echo ($errorMessage);
                echo '</div>';
            }
            ?>
        </div>
    </div>

</body>
</html>