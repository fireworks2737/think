<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/ceshi1/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/ceshi1/Public/Admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/ceshi1/Public/Admin/css/page.css"/>
	<script src="/ceshi1/Public/Admin/tinymce/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
    <script type="text/javascript" src="/ceshi1/Public/Admin/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/ceshi1/Public/Admin/js/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/ceshi1/index.php/Admin/Index/index">首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#"><?php echo ($_SESSION['adminname']); ?></a></li>
                <li><a href="/ceshi1/index.php/Admin/Index/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>内容管理</a>
                    <ul class="sub-menu">
                        <li><a href="/ceshi1/index.php/Admin/Admin/index"><i class="icon-font">&#xe008;</i>Admin manager module</a></li>
                        <li><a href="/ceshi1/index.php/Admin/Homepage/index"><i class="icon-font">&#xe008;</i>Homepage manager module</a></li>
                        <li><a href="/ceshi1/index.php/Admin/About/index"><i class="icon-font">&#xe008;</i>About us manager module</a></li>
                        <li><a href="/ceshi1/index.php/Admin/Programs/index"><i class="icon-font">&#xe008;</i>Program & Service manager module</a></li>
                        <li><a href="/ceshi1/index.php/Admin/Patient/index"><i class="icon-font">&#xe008;</i>patient forms manager module</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->