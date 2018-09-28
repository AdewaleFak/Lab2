<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="lab.css" rel="stylesheet">
    <script>

        function check(){
            var isValidated = true;
            var name = document.getElementById('firsT').value;
            var email = document.getElementById('seconD').value;
            var country = document.getElementById('thirD').value;
            var namePattern = /^[a-zA-Z]/
            var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            var countryPattern = /^[a-zA-Z]/
            if(name == ""){
                document.getElementById('errFirst').innerHTML = "*";
                isValidated = false;
            }
            else if (!namePattern.test(name)){
                document.getElementById('errFirst').innerHTML = "Enter Your Name";
                isValidated = false;
            }
            else{
                document.getElementById('errFirst').innerHTML = "";
                isValidated = true;
            }
            if(email == ""){
                document.getElementById('errSecond').innerHTML = "*";
                isValidated = false;
            }
            else if (!emailPattern.test(email)){
                document.getElementById('errSecond').innerHTML = "Enter A Valid E-mail";
                isValidated = false;
            }
            else{
                document.getElementById('errSecond').innerHTML = "";
                isValidated = true;
            }
            if(country == ""){
                document.getElementById('errThird').innerHTML = "*";
                isValidated = false;
            }
            else if (!countryPattern.test(country)){
                document.getElementById('errThird').innerHTML = " Please Enter Your Country";
                isValidated = false;
            }
            else{
                document.getElementById('errThird').innerHTML = "";
                isValidated = true;
            }
            if(isValidated){
                window.location="action.php";
            }
            return false;
        }



    </script>


</head>
<body>





<div id="wrapper">
    <?php include 'header.php'; ?>
    <?php include 'nav.php'; ?>

    <main>


        <fieldset>
            <legend><h1>Your Weather Feedback</h1></legend>


            <form action="action.php" onsubmit="return check();" method="post"">
                <label name="first">Your Name:</label>
                <input type="text" id="firsT"><span id="errFirst"></span><br />

                <label name="second">Your E-mail:</label>
                <input type="text" id="seconD"><span id="errSecond"></span><br />

                <label name="third">Country:</label>
                <input type="text" id="thirD" ><span id="errThird"></span><br /><br />

                <label type="means">Please provide details of the weather problems around you:</label><br>

                <textarea type="text" id="comment1" rows="7" cols="60"></textarea><br />

                <input type="reset" value="Reset" id="reset" />
                <input type="submit" value="Submit" id="button" ><br />
            </form>

        </fieldset>






</div>
</main>
<?php include 'footer.php'; ?>




</body>
</html>