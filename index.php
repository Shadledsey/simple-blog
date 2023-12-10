<!DOCTYPE html>
<html>
<head>
    <title>Simple Blog</title>
    <style>
        body {
            background-color: black;
            color: white; /* Set text color to white */
            font-family: Arial, sans-serif; /* Change the font family */
            padding: 20px; /* Add padding to the body */
            text-align: center; /* Center align the output */
            border: 2px solid white; /* Add border to the output */
            margin: 20px auto; /* Center align the output */
            max-width: 1000px; /* Set maximum width for the output */
            padding: 10px; /* Add padding to the output */
        }
        h1 {
            text-align: center; /* Center align the heading */
        }
        form {
    max-width: 600px; /* Increase maximum width for the form */
    margin: 0 auto; /* Center align the form */
    padding: 20px; /* Add more padding to the form */
}
        label {
            display: block; /* Display labels as block elements */
            margin-bottom: 10px; /* Add margin to the bottom of each label */
        }
        .input {
            width: 80%; /* Set the width of the input elements to 80% */
            margin: 0 auto; /* Center align the input fields */
            display: block; /* Display input fields as block elements */
            padding: 15px;
            border: 2px solid white;
            border-radius: 5px;
            background-color: #212121;
            color: white; /* Set text color to white */
        }
        .input:focus {
            outline: none; /* Remove the outline on focus */
            box-shadow: 0 0 5px cyan; /* Add box shadow on focus */
        }
        input[type="submit"] {
            background-color: #4CAF50; /* Green background color */
            color: white; /* Set text color to white */
            padding: 10px 20px; /* Add padding to the submit button */
            border: none; /* Remove the border */
            border-radius: 5px;
            cursor: pointer; /* Add pointer cursor on hover */
        }
        input[type="submit"]:hover {
            background-color: #45a049; /* Darker green on hover */
        }
        
    </style>
</head>
<body>
    <h1>Simple Blog</h1>
    <form action="index.php" method="post">
        <label for="Date">Date:</label>
        <input type="Date" name="Date" class="input">

        <label for="subject header">Subject Header:</label>
        <input type="text" placeholder="Write here..." name="Header" class="input">

        <label for="blog_entry">Blog Entry:</label>
        <input type="text" placeholder="Write here..." name="entry" class="input" >
        <br>
        <input type="submit" value="Add Post">
    </form>
    <div class="rating">
  <input value="5" name="rating" id="star5" type="radio">
  <label for="star5"></label>
  <input value="4" name="rating" id="star4" type="radio">
  <label for="star4"></label>
  <input value="3" name="rating" id="star3" type="radio">
  <label for="star3"></label>
  <input value="2" name="rating" id="star2" type="radio">
  <label for="star2"></label>
  <input value="1" name="rating" id="star1" type="radio">
  <label for="star1"></label>
</div>

    <?php
        foreach($_POST as $key => $value){
            print"$key : $value";
            print "<br />";
            print "<br />";
        }
    ?>
</body>
</html>
