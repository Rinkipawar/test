
<?php
include_once("handler.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$adrss=$_POST['address'];
$msg=$_POST['msg'];
$sql=$insertdata->insert($name,$email,$adrss,$msg);
if($sql)
{
echo "<script>alert('Data inserted');</script>";

}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cutomer detail</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form" method="post" >
                         <p class="name">
                           <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                         <p class="name">
                           <input name="address" type="text" class="feedback-input" required placeholder="address" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="msg" class="feedback-input" id="comment" placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue" name="submit">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
    </body>
</html>