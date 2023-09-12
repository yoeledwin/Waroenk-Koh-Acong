<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="<?= site_url('asset/font/material-icon/material-icons.css'); ?>" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?= site_url('asset/css/materialize.min.css'); ?>" media="screen,projection"/>
        <title>Buah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <script type="text/javascript" src="<?= site_url('asset/js/materialize.min.js'); ?>"></script>
        
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper yellow">
                    <a href="<?= site_url(); ?>" class="brand-logo">Waroenk Koh Acong</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= base_url('Welcome/create'); ?>">Buat</a></li>
                        <li><a href="#">Masuk</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="#">Masuk</a></li>
            <li class="divider"></li>
            <li><a href="<?= site_url('welcome/create'); ?>">Buat</a></li>
        </ul>

        <main class="container">