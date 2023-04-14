<?php
/* --------$_GET and $_POST superglobals---------
We can pass data through urls and forms using the $_Get and $_Post superglobals.
*/

// echo $_GET['name'];
// echo $_GET['age'];

// for security and not to expose data , it is a good practise to use $_POST so the info is not displayed
if(isset($_POST['submit'])){ 
 echo $_POST['name'];
 echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=kunle&age=20">Click</a>

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
