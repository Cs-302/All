<?php
session_start();

$title = "Restaurants";
$greeting = "Welcome!";
$select = "Select a restaurant below to see more details";
$buttonPage = "login.php";
$buttonPrompt = "Log In";

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $title = "Logged In";
        $greeting = "Welcome " . $_SESSION["username"] . "!";
        $select = $select . " and to see your discount QR code!";
        $buttonPage = "logout.php";
        $buttonPrompt = "Log Out";
}

?>
<!DOCTYPE html>
<html>
    <style type="text/css">
        html, head, body{
            background-color: rgb(225, 66, 52);
            padding: 0;
            margin: 0;
        }
      .footer {
          position: sticky;
          margin-top: 10vh;
          bottom: 0;
          width: 100%;
          padding-top: 1rem;
          padding-bottom: 1rem;
          background-color: black;
          text-align: center;
        }
        .footer h4,h6,h3{
            color: white;
            margin: 0;
            padding: 0;
        }
        .headText{
            text-align: center;
            color: white;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            width: 8em;
            text-align: center;
            color: white;
        }
    </style>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div style="background-color:black;text-align:center;">
                <h2 class="headText"><?php echo $greeting; ?></h2>
                <h2 class="headText"><?php echo $select; ?></h2>
            <a href="<?php echo $buttonPage; ?>"><button name="button"><?php echo $buttonPrompt; ?></button></a>
        </div>
       <br>
        <br>
        <div class="fill">
       <table class="center">
           <td></td>
           <td>
                <h2 class="headText">Fine Dining</h2>
           </td>
            <tr>
                <td>
                    <h3 class="center">The Central Table</h3>
                    <a href="loggedInPage.php"><img src="images/r1.jpg" width="300" height="225" alt="R1"/></a></td>

                <td>
                    <h3 class="center">The Tulip</h3>
                    <a href="loggedInPage.php"><img src="images/r2.jpg" width="300" height="225" alt="R2"/></a></td>

                <td>
                    <h3 class="center">The Depot</h3>
                    <a href="loggedInPage.php"><img src="images/r3.jpg" width="300" height="225" alt="R3"/></a></td>

            </tr>
           <tr><td></td></tr>
            <tr>
                <td>
                    <h3 class="center">Fresh Garden</h3>
                    <a href="loggedInPage.php"><img src="images/r4.jpg" width="300" height="225" alt="R4"/></a>
                </td>
                <td>
                    <h3 class="center">The Italian Lane</h3>
                    <a href="loggedInPage.php"><img src="images/r5.jpg" width="300" height="225" alt="R5"/></a>
                </td>
                <td>
                    <h3 class="center">Waterfront Pizza</h3>
                    <a href="loggedInPage.php"><img src="images/r6.jpg" width="300" height="225" alt="R6"/></a>
                </td>
           </tr>
           <tr><td></td></tr>
           <td></td>
            <td>  <h2 class="headText">Casual Dining</h2></td>
           <tr>
                <td>
                    <h3 class="center">The Island</h3>
                    <a href="loggedInPage.php"><img src="images/r7.jpg" width="300" height="225" alt="R7"/></a>
                </td>
                <td>
                    <h3 class="center">Hummingbird</h3>
                    <a href="loggedInPage.php"><img src="images/r8.jpg" width="300" height="225" alt="R8"/></a>
                </td>
                <td>
                    <h3 class="center">Fire and Ice</h3>
                    <a href="loggedInPage.php"><img src="images/r9.jpg" width="300" height="225" alt="R9"/></a>
                </td>
           </tr>
        </table>
        </div>
        <div class="footer">
            <h4>XYZ Company</h4>
            <h6>CS302 Class Project 2020</h6>
        </div>
    </body>
</html>
