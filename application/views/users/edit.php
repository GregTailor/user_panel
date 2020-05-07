<?php echo form_open(base_url().'users/edit/'.$user['username']); ?>
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <div class="form-group">
        <label>Felhasználónév</label>
        <input type="text" class="form-control" name="username" value="<?php echo $user['username']; ?>" placeholder="Add meg a felhasználóneved" size="50">
        <small id="usernameHelp" class="form-text text-muted">Kis és nagybetűk, illetve számok engedélyezettek.</small>
        <?php echo form_error('username'); ?>
    </div>
    <div class="form-group">
        <label>Jelszó</label>
        <input type="password" class="form-control" name="password" value="<?php echo $user['password']; ?>" placeholder="Add meg a jelszavad" size="16">
        <small id="passwordHelp" class="form-text text-muted">Kis és nagybetűk, illetve számok engedélyezettek. Maximum 16 karakter.</small>
        <?php echo form_error('password'); ?>
    </div>
    <div class="form-group">
        <label>E-mail cím</label>
        <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" placeholder="Add meg az e-mail címed">
        <?php echo form_error('email'); ?>
    </div>
    <div class="form-group">
        <label>Név</label>
        <input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>" placeholder="Add meg a neved">
        <?php echo form_error('name'); ?>
    </div>
    <div class="form-group">
        <label>Bemutatkozás</label>
        <input type="text" class="form-control" name="introduction" value="<?php echo $user['introduction']; ?>" placeholder="Írj egy rövid bemutatkozást" size="500">
        <small id="introductionHelp" class="form-text text-muted">Maximum 500 karakter.</small>
        <?php echo form_error('introduction'); ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>