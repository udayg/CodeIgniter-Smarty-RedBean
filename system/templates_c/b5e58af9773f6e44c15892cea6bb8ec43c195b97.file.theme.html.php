<?php /* Smarty version Smarty-3.1.18, created on 2014-09-15 21:29:00
         compiled from "application\views\theme\theme.html" */ ?>
<?php /*%%SmartyHeaderCode:169405411e4d97e5ca3-37505879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e58af9773f6e44c15892cea6bb8ec43c195b97' => 
    array (
      0 => 'application\\views\\theme\\theme.html',
      1 => 1410809335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169405411e4d97e5ca3-37505879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5411e4d981b878_67126193',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5411e4d981b878_67126193')) {function content_5411e4d981b878_67126193($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - Marist Apps</title>
        <script src="jscss/jquery.min.js"></script>
        <script src="jscss/jqueryui/jquery-ui.js"></script>
        <link rel="stylesheet" href="jscss/jqueryui/jquery-ui.css">
        <link rel="stylesheet" href="jscss/foundation/css/normalize.css">
        <link rel="stylesheet" href="jscss/foundation/css/foundation.css">
        <link rel="stylesheet" href="jscss/style.css">
        <script src="jscss/foundation/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <!--//Top Bar -->
        <div class="fixed">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">Marist Apps :: Fox Photos</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                </section>
            </nav>
        </div>

        <!--//include the called upon page -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <script src="jscss/foundation/js/foundation.min.js"></script>
        <script type="text/javascript">
            $(document).foundation();
        </script>
    </body>
</html>
<?php }} ?>
