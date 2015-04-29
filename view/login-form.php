<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1 class="font">Login</h1>

<form id="positionlogin" method="POST" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div class="font">
        <label for="username">Username: </label>
        <input id="color" type="text" name="username" placeholder="Username..."/>
    </div>
    
    <div class="font">
        <label for="password">Password: </label>
        <input id="color" type="password" name="password" placeholder="Password..."/>
    </div>
    
    <div>
        <button class="username" type="submit">Submit</button>
    </div>
</form>

