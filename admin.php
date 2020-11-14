<?php
session_start ();

$post = $_POST;
if (isset($post['password']) && isset($post['submit'])) {
    $password = '123456';
    if ($password === $post['password']) {
        setcookie('auth', 'true', time()+3600);
        $_SESSION['auth']='true';
    }
}

if (isset($post['logout'])) {
    setcookie('auth', false, time() - 3600);
    unset($_SESSION['auth']);
}



?>
<?php if (!$_SESSION['auth']):?>
<p>Пароль</p>
<form method="post" action="admin.php">
    <input type="password" name="password" value=""/>
    <input type="submit" name="submit"/>
</form>
<?php endif;?>

<?php if ($_SESSION['auth'] === 'true'):?>
    <p>Тренеры</p>
<form method="post" action="admin.php">
    <textarea name="coaches"></textarea>
    <input type="submit" name="submit"/>
</form>
<form method="post" action="admin.php">
   <input type="submit" name="logout" value="logout"/>
</form>
<?php endif;?>