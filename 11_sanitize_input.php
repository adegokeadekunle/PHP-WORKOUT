<?php


// for security and not to expose data , it is a good practise to use $_POST so the info is not displayed
if(isset($_POST['submit'])){ 
    //filter_input is used to protect the input coming to the app. so what ever input coming in will be handled well
 $name  = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

 $age  = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
 echo $name;
//  echo $age;

 //This is another alternative how to apply to sanitization.
 //$name = filter_var($_POST['name'],FILTER_SANITIZE_FULL_SP ECIAL_CHARS);
}
?>

<!-- <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?name=kunle&age=20">Click</a> -->

<!-- Forms  -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
</form>
