<?php
/**
 * Template Name: Layerz Guru
 * Template Post Type: post, page
 * The template for displaying a full width, unstyled page
 *
 * @package Layers
 * @since Layers 1.0.0
 */

 if( current_user_can('administrator') ) {
	 	require_once get_template_directory() . '/core/third-party/layerz-guru/layerz-guru.php';
		require_once get_template_directory() . '/core/third-party/layerz-guru/layerz-guru-content.php';
 }

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--   ___ _         _ _
  / __| |_  __ _| | |___ _ _  __ _ ___
 | (__| ' \/ _` | | / -_| ' \/ _` / -_)
  \___|_||_\__,_|_|_\___|_||_\__, \___|
                             |___/

	  Yes, yes.... ini cuma halaman html yang dipersonalisasi untuk end user
		yang very-very pemula. Kalau kamu developer, yuk ikut berkontribusi membuat
		dokumentasi Tema WordPress yang dipersonalisasi. @torexfantastic
-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="robots" content="noindex">

	<?php if( current_user_can('administrator') ) {?>
	<?php wp_head(); ?>

  <link rel='stylesheet' id='layerz-styles'  href='<?php echo get_template_directory_uri(); ?>/core/assets/layerz-guru.css' type='text/css' />
  <link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />

	<script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script data-require="bootstrap@*" data-semver="3.3.6" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<?php } ?>
</head>
<body <?php body_class(); ?>>
<?php if( current_user_can('administrator') ) {?>

		<!-- /Layerz Guru frame -->
		<?php do_action( 'layerz_frame_configurator' ); ?>

		<!-- /Layerz Guru content -->
		<?php do_action( 'layerz_frame_modal_content' ); ?>

  </div><!-- END / MAIN SITE #wrapper -->
	<style>
		/* Layerz guru inline style */
		.modal{width:480px}
		.modal-dialog{width:480px;right:0!important;bottom:0!important;position:relative}
		.modal-title{font-weight:600;color:#be47a6}
		.modal-body{height:315px;overflow-y:auto;font-size:16px;color:#666}
		.modal-body ol>li, #nav-guru li{list-style-type:decimal;margin-left:15px}
		.modal-body::-webkit-scrollbar{width:5px;height:50px}
		.modal-body::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 4px rgba(0,0,0,.3)}
		.modal-body::-webkit-scrollbar-thumb{background-color:#bd48ac}
		.modal-body.view-sub{height:480px}
    .modal-footer .btn {margin: 0;}
		iframe.layerz-guru-view{width:100%;height:440px}
		.btn, .btn-group.dropup {border-radius: 20px;font-weight: 600;margin: 10px 0;}
		.modal .media {display: inline-block;margin-bottom: 20px;font-size: 15px;line-height: 1.3;}
		.modal .media-body {overflow: unset;display: inline-block;float: right;width: 70%;}
		.modal .media-left {width: 20%;display: inline-block;}
	</style>

  <script type="text/javascript">
    $("#configDasar").draggable({
      handle: ".modal-header"
    });
		$("#configDasarView").draggable({
      handle: ".modal-header"
    });
		$("#chatWhatsApp").draggable({
      handle: ".modal-header"
    });

	</script>
<?php }else
	echo "<div class='deindex-please'>
	<h1>Ups, this page only for Layerz Guru Theme Administrator</h1>Layerz Guru adalah &ldquo;Tema WordPress Super Ngebut dan baik untuk pemula.&rdquo;</div>
	<style>
		.page-template {
			display: block;
	    color: #fff;
	    height: 100%;
	    text-align: center;
	    padding: 20px;
	    background: linear-gradient(70deg, rgba(150, 59, 91, 0.8) 2%, rgba(48, 35, 174, 0.89) 90%);
		}
	</style>
	"
?>
</body>
</html>
