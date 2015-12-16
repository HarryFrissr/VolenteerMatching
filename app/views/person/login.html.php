<form action="login.php" method="post">
<div class="form-group">
    <label for="person_name">Name</label>
    <input type="text" name="person_name" id="person_name" value="<?php echo isset($person) ? $person->getName() : ''?>">
</div>
<div class="form-group">
    <label for="person_password">Password</label>
    <input type="text" name="person_password" id="person_password" value="<?php echo isset($person) ? $person->getPassword() : ''?>"
</div>
<div class="checkbox">
    <label>
        <input type="checkbox" id="forgotpassword" name="check"> Forgot password
    </label>
</div>
<button type="submit" class="btn btn-default">Login</button>
</form>