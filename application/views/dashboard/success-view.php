<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Receipt Page</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/spacelab/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light mb-5">
        <a href="<?php echo site_url(); ?>" class="navbar-brand">Agora</a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#navbar-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo site_url(); ?>" class="nav-link"><?php echo lang('home'); ?></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo lang('about'); ?></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo lang('team'); ?></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo lang('programs'); ?></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo lang('services'); ?></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo lang('news'); ?></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo lang('contact'); ?></a>
                </li>
                <li class="nav-item">
                    <?php echo anchor('user/logout', 'Logout', 'class="nav-link"');?>
                </li>
            </ul>
        </div>
        
    </nav>
    <div class="container mt-4">
        <h4>Thank you for purchasing <?php echo $product; ?></h4>
        <hr>
        <p>Your transaction ID is <?php echo $id; ?>.</p>
        <p>A receipt will be sent to <strong><?php echo $email;  ?></strong>.</p>
        <p><a href="<?php echo base_url('dashboard'); ?>" class="btn btn-light mt-2">Go Back</a></p>
    </div>