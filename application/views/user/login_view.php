<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
    <?php
    echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
    ?>
<<<<<<< HEAD
    <h2 class="text-center"><?php echo lang('sign_in'); ?></h2>
    <?php
    echo form_open('user/login', array('class' => 'my-5', 'style' => 'width: 60vw; margin: auto;'));
    echo lang('username','username').'<br />';
    echo form_error('username');
    echo form_input('username', '', "class='form-control'").'<br />';
    echo lang('password', 'password').'<br />';
    echo form_error('password');
    echo form_password('password', '', "class='form-control'").'<br />';
    echo form_checkbox('remember','1',FALSE).lang('remember_me').'<br />';
=======
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
>>>>>>> refs/remotes/origin/master
    echo form_submit('submit','Log In', 'class="btn btn-primary mt-3"');
    echo form_close();
    ?>
</div>