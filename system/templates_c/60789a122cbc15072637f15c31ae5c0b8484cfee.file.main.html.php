<?php /* Smarty version Smarty-3.1.18, created on 2014-11-14 02:41:26
         compiled from "application\views\theme\main.html" */ ?>
<?php /*%%SmartyHeaderCode:149754655dc608dfc1-43481219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60789a122cbc15072637f15c31ae5c0b8484cfee' => 
    array (
      0 => 'application\\views\\theme\\main.html',
      1 => 1415928992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149754655dc608dfc1-43481219',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54655dc60f2b97_90252750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54655dc60f2b97_90252750')) {function content_54655dc60f2b97_90252750($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <!-- //todo: update to latest versions -->
        <link rel="stylesheet" href="media/assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="media/assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="media/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="media/assets/normalize/normalize.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="media/css/main_style.css">
        <link rel="stylesheet" href="media/css/flaty.css">
        <link rel="stylesheet" href="media/css/flaty-responsive.css">

        <link rel="shortcut icon" href="media/img/favicon.html">
        
        <!-- //todo: update to latest version of modernizr and jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="media/assets/modernizr/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN Brand -->
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-desktop"></i>
                            LawyerCRM
                        </small>
                    </a>
                    <!-- END Brand -->

                    <!-- BEGIN Responsive Sidebar Collapse -->
                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-reorder"></i>
                    </a>
                    <!-- END Responsive Sidebar Collapse -->

                    <!-- BEGIN Navbar Buttons -->
                    <ul class="nav flaty-nav pull-right">

                        <!-- BEGIN Button User -->
                        <li class="user-profile">
                            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                                <img class="nav-user-photo" src="http://www.gravatar.com/avatar/8123085277db1ca778160153cb4ce526.png" alt="Antoni's Photo" />
                                <span class="hidden-phone" id="user_info">
                                    Antoni
                                </span>
                                <i class="icon-caret-down"></i>
                            </a>

                            <!-- BEGIN User Dropdown -->
                            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                                <li class="nav-header">
                                    <i class="icon-time"></i>
                                    Logined From 20:45
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Account Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Edit Profile
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-question"></i>
                                        Help
                                    </a>
                                </li>

                                <li class="divider visible-phone"></li>

                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-tasks"></i>
                                        Tasks
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-bell-alt"></i>
                                        Notifications
                                        <span class="badge badge-important">8</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-envelope"></i>
                                        Messages
                                        <span class="badge badge-success">5</span>
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                            <!-- BEGIN User Dropdown -->
                        </li>
                        <!-- END Button User -->
                    </ul>
                    <!-- END Navbar Buttons -->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="icon-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                            </span>
                        </form>
                    </li>
                    <<?php ?>%foreach from=$modules key=m item=module%<?php ?>>                    
                    <li <<?php ?>%if $title eq $m %<?php ?>> class="active" <<?php ?>%/if%<?php ?>>    >
                        <a href="?c=<<?php ?>%$m|lower%<?php ?>>">
                            <i class="<<?php ?>%$module.icon%<?php ?>>"></i>
                            <span><<?php ?>%$m%<?php ?>></span>
                        </a>

                        <!-- display submenu if available -->
                        <<?php ?>%if $module|@count > 0%<?php ?>>
                        <ul class="submenu">
                            <<?php ?>%foreach from=$module.sub key=s item=sub%<?php ?>>
                            <li><a href="?c=<<?php ?>%$m|lower%<?php ?>>&m=<<?php ?>%$sub%<?php ?>>"><<?php ?>%$s%<?php ?>></a></li>
                            <<?php ?>%/foreach%<?php ?>>
                        </ul>
                        <<?php ?>%/if%<?php ?>>
                    </li>                  
                    <<?php ?>%/foreach%<?php ?>>
                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-desktop">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i> <<?php ?>%$title%<?php ?>></h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- Main Content -->
                <<?php ?>%include file="$view"%<?php ?>>
                <!-- END Main Content -->

                <footer>
                    <p><<?php ?>%$copy_year%<?php ?>> © ROLODEX.IT LLC.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script src="media/assets/bootstrap/bootstrap.min.js"></script>
        <script src="media/assets/nicescroll/jquery.nicescroll.min.js"></script>

        <!--page specific plugin scripts-->
        <script src="media/assets/flot/jquery.flot.js"></script>
        <script src="media/assets/flot/jquery.flot.resize.js"></script>
        <script src="media/assets/flot/jquery.flot.pie.js"></script>
        <script src="media/assets/flot/jquery.flot.stack.js"></script>
        <script src="media/assets/flot/jquery.flot.crosshair.js"></script>
        <script src="media/assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="media/assets/sparkline/jquery.sparkline.min.js"></script>

        <!--flaty scripts-->
        <script src="media/js/flaty.js"></script>

    </body>
</html><?php }} ?>
