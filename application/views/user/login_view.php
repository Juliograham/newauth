<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
    <?php
    echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
    ?>
    <h2 class="text-center">Sign in to Agora</h2>
    <?php
    echo form_open('user/login', 'class="my-5 mx-auto;" style="width:60vw;"');
    echo form_label('Username:','username').'<br />';
    echo form_error('username');
    echo form_input('username', '', "class='form-control'").'<br />';
    echo form_label('Password:', 'password').'<br />';
    echo form_error('password');
    echo form_password('password', '', "class='form-control'").'<br />';
    echo form_checkbox('remember','1',FALSE).' Remember me<br />';
    echo form_submit('submit','Log In', 'class="btn btn-primary mt-3"');
    echo form_close();
    ?>
</div>