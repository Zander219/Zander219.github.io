<?php
    include_once 'header.php';
?>

    <h2>Login</h2>
    <form action="login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name = "submit">Login</button>
    </form>

<?php
    include_once 'footer.php';
?>