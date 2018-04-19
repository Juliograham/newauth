<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
    <?php
    echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : FALSE;
    ?>
    <h1 class="text-center"><?php echo lang('register'); ?></h1>
    <?php
    echo form_open('', array('class' => 'my-5', 'style' => 'width: 60vw; margin: auto;'));?>
    <div class="row">
        <div class="col-md-6">
        <?php echo lang('first_name', 'first_name').'<br />';
        echo form_error('first_name');
        echo form_input('first_name', '', "class='form-control'",set_value('first_name')).'<br />';?>
        </div>
        <div class="col-md-6">
        <?php echo lang('last_name', 'last_name').'<br />';
        echo form_error('last_name');
        echo form_input('last_name', '', "class='form-control'",set_value('last_name')).'<br />';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <?php echo lang('username','username').'<br />';
        echo form_error('username');
        echo form_input('username', '', "class='form-control'",set_value('username')).'<br />';?>
        </div>
        <div class="col-md-6">
        <?php echo lang('email','email').'<br />';
        echo form_error('email');
        echo form_input('email', '', "class='form-control'",set_value('email')).'<br />';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
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
        echo form_error('password');
        echo form_password('password', '', "class='form-control'").'<br />';?>
        </div>
        <div class="col-md-6">
        <?php echo lang('confirm_password', 'confirm_password').'<br />';
        echo form_error('confirm_password');
        echo form_password('confirm_password', '', "class='form-control'").'<br /><br />';?>
        </div>
    </div>
    <?php echo form_submit('register',lang('register'), 'class="btn btn-info mt-3"');
    echo form_close(); ?>
</div>