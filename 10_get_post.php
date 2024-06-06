<?php

if(isset($_POST['submit'])){
    echo '<h3>' . $_POST['username'] . '</h3>';
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label>Name :</label>
    <input type="text" name="name">
</div>
<br>
<div>
    <label>Password : </label>
    <input type="password" name="password">
</div>
<br>
<input type="submit" name="submit" value="Submit">

</form>