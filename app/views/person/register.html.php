<form action="register.php" method="post">
    <div class="form-group">
        <label for="person_name">Name</label>
        <input type="text" name="person_name" id="person_name" value="<?php echo isset($person) ? $person->getName() : ''?>">
    </div>
    <div class="form-group">
        <label for="person_email">Email</label>
        <input type="text" name="person_email" id="person_email" value="<?php echo isset($person) ? $person->getEmail() : ''?>"
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" id="accept" name="person_accept"> I accepts the conditions
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>