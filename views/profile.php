<div>
    <?php
    require_once __DIR__.'/../db/Database.php';
    $db=new Database();
    $username= $_SESSION['currentUser']['full_name'];
    $email=$_SESSION['currentUser']['email'];
    echo "<h1>Profile</h1>
        <dl>
            <dt>Name:</dt>
            <dd>$username</dd>
            <dt>Email:</dt>
            <dd>$email</dd>
        </dl>
    ";
    $id=$_SESSION['currentUser']['id'];

    ?>
</div>
