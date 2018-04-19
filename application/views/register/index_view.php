<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
    <?php
    echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
    ?>
<<<<<<< HEAD
    <h1 class="text-center"><?php echo lang('register'); ?></h1>
    <?php
    echo form_open('', array('class' => 'my-5', 'style' => 'width: 60vw; margin: auto;'));?>
    <div class="row">
        <div class="col-md-6">
        <?php echo lang('first_name', 'first_name').'<br />';
=======
    <h1 class="text-center">Register</h1>
    <?php
    echo form_open('', 'class="my-5;" style="width:60vw; margin: auto;"');?>
    <div class="row">
        <div class="col-md-6">
        <?php echo form_label('First name:','first_name').'<br />';
>>>>>>> refs/remotes/origin/master
        echo form_error('first_name');
        echo form_input('first_name', '', "class='form-control'",set_value('first_name')).'<br />';?>
        </div>
        <div class="col-md-6">
<<<<<<< HEAD
        <?php echo lang('last_name', 'last_name').'<br />';
=======
        <?php echo form_label('Last name:','last_name').'<br />';
>>>>>>> refs/remotes/origin/master
        echo form_error('last_name');
        echo form_input('last_name', '', "class='form-control'",set_value('last_name')).'<br />';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
<<<<<<< HEAD
        <?php echo lang('username','username').'<br />';
=======
        <?php echo form_label('Username:','username').'<br />';
>>>>>>> refs/remotes/origin/master
        echo form_error('username');
        echo form_input('username', '', "class='form-control'",set_value('username')).'<br />';?>
        </div>
        <div class="col-md-6">
<<<<<<< HEAD
        <?php echo lang('email','email').'<br />';
=======
        <?php echo form_label('Email:','email').'<br />';
>>>>>>> refs/remotes/origin/master
        echo form_error('email');
        echo form_input('email', '', "class='form-control'",set_value('email')).'<br />';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
<<<<<<< HEAD
        <?php echo lang('company', 'company').'<br />';
        echo form_error('company');
        echo form_input('company', '', "class='form-control'").'<br />';?>
        </div>
        <div class="col-md-6">
        <?php echo lang('phone', 'phone_number').'<br />';
        echo form_error('phone_number');
        echo form_input('phone_number', '', "class='form-control'").'<br />';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <?php echo lang('password', 'password').'<br />';
=======
        <?php echo form_label('Password:', 'password').'<br />';
>>>>>>> refs/remotes/origin/master
        echo form_error('password');
        echo form_password('password', '', "class='form-control'").'<br />';?>
        </div>
        <div class="col-md-6">
<<<<<<< HEAD
        <?php echo lang('confirm_password', 'confirm_password').'<br />';
=======
        <?php echo form_label('Confirm password:', 'confirm_password').'<br />';
>>>>>>> refs/remotes/origin/master
        echo form_error('confirm_password');
        echo form_password('confirm_password', '', "class='form-control'").'<br /><br />';?>
        </div>
    </div>
<<<<<<< HEAD
    <?php echo form_submit('register',lang('register'), 'class="btn btn-info mt-3"');
=======
    <?php echo form_submit('register','Register', 'class="btn btn-primary mt-3"');
>>>>>>> refs/remotes/origin/master
    echo form_close(); ?>
</div>