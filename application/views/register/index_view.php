<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
    <?php
    echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
    ?>
    <h1 class="text-center">Register</h1>
    <?php
    echo form_open('', 'class="my-5;" style="width:60vw; margin: auto;"');?>
    <div class="row">
        <div class="col-md-6">
        <?php echo form_label('First name:','first_name').'<br />';
        echo form_error('first_name');
        echo form_input('first_name', '', "class='form-control'",set_value('first_name')).'<br />';?>
        </div>
        <div class="col-md-6">
        <?php echo form_label('Last name:','last_name').'<br />';
        echo form_error('last_name');
        echo form_input('last_name', '', "class='form-control'",set_value('last_name')).'<br />';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <?php echo form_label('Username:','username').'<br />';
        echo form_error('username');
        echo form_input('username', '', "class='form-control'",set_value('username')).'<br />';?>
        </div>
        <div class="col-md-6">
        <?php echo form_label('Email:','email').'<br />';
        echo form_error('email');
        echo form_input('email', '', "class='form-control'",set_value('email')).'<br />';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <?php echo form_label('Password:', 'password').'<br />';
        echo form_error('password');
        echo form_password('password', '', "class='form-control'").'<br />';?>
        </div>
        <div class="col-md-6">
        <?php echo form_label('Confirm password:', 'confirm_password').'<br />';
        echo form_error('confirm_password');
        echo form_password('confirm_password', '', "class='form-control'").'<br /><br />';?>
        </div>
    </div>
    <?php echo form_submit('register','Register', 'class="btn btn-primary mt-3"');
    echo form_close(); ?>
</div>