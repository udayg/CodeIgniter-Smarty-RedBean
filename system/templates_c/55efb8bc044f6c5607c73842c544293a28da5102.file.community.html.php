<?php /* Smarty version Smarty-3.1.18, created on 2014-09-15 22:48:23
         compiled from "application\views\foxphotos\community.html" */ ?>
<?php /*%%SmartyHeaderCode:13205411fc83dbd526-37942687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55efb8bc044f6c5607c73842c544293a28da5102' => 
    array (
      0 => 'application\\views\\foxphotos\\community.html',
      1 => 1410813760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13205411fc83dbd526-37942687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5411fc83dbe6d3_59884759',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5411fc83dbe6d3_59884759')) {function content_5411fc83dbe6d3_59884759($_smarty_tpl) {?><link rel="stylesheet" href="jscss/foxPhotos.css">
<script type="text/javascript">
    $(document).ready(function () {
        var create, confirm;
        
        function addAlbum() {
            var albumName = $('#albumName').val();
            albumName = albumName.trim();
            
            if(albumName !== "") {
                
                $.post('?c=foxphotos&m=addAlbum', {name:albumName}, function(resp) {
                    resp = $.parseJSON(resp);
                    
                    if(resp.code === 400) {
                        $('.errorMsg').html(resp.msg);
                        $('.errorMsg').show();
                    } else {
                        $('#confirmDialog').html(resp.msg);
                        create.dialog('close');
                        confirm.dialog('open');
                    }
                });
                
            } else {
                //error
            }
        }
        
        /**
         * Configure the add album dialog
         */
        create = $("#createAlbumDialog").dialog({
            autoOpen: false,
            height: 250,
            width: 350,
            modal: true,
            buttons: {
                Create: addAlbum,
                Cancel: function () {
                    create.dialog("close");
                }
            }
        });
        
        /**
         * Configure confirm dialog
         */
        confirm = $('#confirmDialog').dialog({
            autoOpen: false,
            height: 250,
            width: 200,
            modal: true
        });
        
        /**
         * Open the add album
         */
        $('#addPhotos').click(function () {
            create.dialog("open");
        });
    });
</script>

<!-- create dialog box -->
<div id="createAlbumDialog" title="Create New Album">
    Album Name:
    <input type="text" name="albumName" id="albumName" />
    <div class="errorMsg"></div>
</div>

<!-- confirm dialog box -->
<div id="confirmDialog" title="">
    
</div>


<!-- control bar -->
<div class="row fullWidth sectionHeader">
    <div class="large-4 columns">&nbsp;</div>
    <div class="large-4 columns sectionHeaderLabel">Community Albums</div>
    <div class="large-4 columns sectionHeaderControls">
        <img src="images/controls/add.png" id="addPhotos" alt="Create New Album" title="Create New Album" />
        <input type="text" name="search" value="" placeholder="Search" />
    </div>
</div>

<!-- main content area -->
<div id="content" class="row fullWidth">
    <div id="smartAlbumsSection" class="row fullWidth">
        <div class="medium-12 columns">
            <h5>Smart Albums</h5>
            <div id="smartAlbums" class="row fullWidth">
                <div class="medium-2 columns">
                    <img src="images/foxPhotos/no_images.svg" width="200" height="200" alt="thumb" data-type="nonretina">
                    <h3>Unsorted</h3>
                    <span>0 photos</span>
                </div>
                <div class="medium-2 columns">
                    <img src="images/foxPhotos/no_images.svg" width="200" height="200" alt="thumb" data-type="nonretina">
                    <h3>Starred</h3>
                    <span>0 photos</span>
                </div>
                <div class="medium-2 columns">
                    <img src="images/foxPhotos/no_images.svg" width="200" height="200" alt="thumb" data-type="nonretina">
                    <h3>Recent</h3>
                    <span>0 photos</span>
                </div>
                <div class="medium-6 columns">&nbsp;</div>
            </div>
        </div>
    </div>

    <div id="albumsSection" class="row fullWidth">
        <div class="medium-12 columns">
            <h5>Albums</h5>
        </div>
    </div>
</div><?php }} ?>
