<?php
/**
 * Template Name: Layerz Guru Apps
 * Template Post Type: post, page
 * The template for displaying Layerz Guru Apps
 *
 * @package Layerz Guru
 * @since Layerz 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly. @torex: always use this fuction to layers preventive
}

if (!is_user_logged_in()) {
	 wp_redirect( '/');
	 exit;
}

// Load apps files only once user access this page template
require_once get_template_directory() . '/apps/init.php';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--   ___ _         _ _
  / __| |_  __ _| | |___ _ _  __ _ ___
 | (__| ' \/ _` | | / -_| ' \/ _` / -_)
  \___|_||_\__,_|_|_\___|_||_\__, \___|
                             |___/
	  Yes, yes, you know.... This page only a html page once convert to WordPress page template //
		Layerz Guru Apps hanya halaman html yang dipersonalisasi untuk end user
		Kalau kamu developer, yuk ikut berkontribusi membuat dokumentasi Tema WordPress yang dipersonalisasi.
		@torexf
-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="robots" content="noindex">

  <title>Layerz Guru Apps | It's no WordPress but Super WordPress</title>
  <link rel="icon" href="<?php echo(APPS_URL)?>images/favicon.png" sizes="32x32" />
  <link rel="icon" href="<?php echo(APPS_URL)?>images/favicon.png" sizes="192x192" />

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo(APPS_URL)?>assets/css/style.css">

  <!-- Popup Styles -->
  <link rel="stylesheet" href="<?php echo(APPS_URL)?>assets/jbox/jBox.all.css">
  <!-- Chartist -->
  <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">

</head>

<!-- Display blank if redirect failed or not apply to login users.
		 @torex: this layers only read if you login. -->
<?php if( current_user_can('administrator') ) {?>

<body>
    <!-- Render frames and menu -->
    <?php do_action( 'lg_apps_frame' ); ?>

    <!-- Render main content -->
    <?php do_action( 'lg_apps_main_content' ); ?>


    <!-- Render hidden content -->
    <?php do_action( 'lg_apps_hidden_content_render' ); ?>

		<?php //do_action( 'lg_apps_external' ); ?>
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo(APPS_URL)?>assets/js/main.js"></script>

<!-- Jbox for Ajax Modal -->
<script src="<?php echo(APPS_URL)?>assets/jbox/jBox.all.js"></script>
<script src="<?php echo(APPS_URL)?>assets/jbox/controller.js"></script>

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>


<style>
/* Normalize Frames */
iframe {
  border: 0;
  width: 100%;
  height: 100%;
  -moz-box-shadow: inset 0 0 10px #f5f5f5;
  -webkit-box-shadow: inset 0 0 10px #f5f5f5;
  box-shadow: inset 0 0 10px #f5f5f5!important;
}
#left-panel::-webkit-scrollbar-track, body::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);
  margin-right: -8px;
}

#left-panel::-webkit-scrollbar, body::-webkit-scrollbar {
  width: 8px;
  margin-right: -8px;
}

#left-panel::-webkit-scrollbar-thumb, body::-webkit-scrollbar-thumb {
	background-color: #bd48ac;
  margin-right: -8px;
}
a.custom-logo-link img {
  width: auto;
  max-height: 30px;
  margin-right: 30px;
}
.modal-open .modal {
  background: rgba(70, 70, 70, 0.62)
}
.modal-dialog.editor {
  max-width: 100%;
  margin: .5rem;
}
.modal-body.editor {
  padding: 0;
  overflow: hidden;
}
.modal-body.editor iframe {
  padding: 0;
  min-height: 350px;
  margin-top: -32px;
}
.modal-body.sub-editor {
  width: 201px;
  top: 57px;
  background: #f9f9f9;
  border-right: 1px solid #e2e4e7;
  height: 100vw;
  position: absolute;
  z-index: 999;
}
[class^="ti-"], [class*=" ti-"] {
  margin-right: 10px;
}
.for-help .help.dropdown-menu {
  padding: 5px 10px;
  font-size: 13px;
  width: 100%;
  z-index: 999;
  min-width: 180px;
  -webkit-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05)!important;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05)!important;
}
.help .nav-link {
  color: #607d8b;
  display: block;
  font-size: 13px;
  line-height: 22px;
  background: #fff;
  width: 100%;
  padding: 5px 0;
  text-align: left;
}
a.nav-site-info {
  font-weight: 600;
  border: 2px solid #f5f5f5;
  border-radius: 40px;
  padding: 5px 20px!important;
  text-align: center;
  line-height: 20px!important;
}
.stat-text .link-install-woo {
  display: block;
  font-size: 10px;
  position: absolute;
  bottom: 14px;
  right: 0;
  width: 100px;
}
.woo-not-active {
  padding: 10px;
  font-size: 20px;
  display: block;
  text-align: center
}
.orders .order-table {
  min-height: 250px
}
span.ti-comment-alt {
  margin: 0;
}
.data-analis {
  position: absolute;
  top: 10px;
  right: 5px
}

ul.elementor-pages {
  list-style: none
}

ul.elementor-pages li {
  display: inline-block;
  padding: 10px 30px;
  background: #f9f9f9;
  border: 2px solid #f5f5f5;
  border-radius: 50px
}
.btn, .button {
	font-weight: 500;
	border-radius: 40px;}
.badge {
  border-radius: 20px;}
.dropdown [class^="ti-"], .dropdown [class*=" ti-"] {
  margin-right: 0;}
.sub-menu [class^="ti-"], .sub-menu [class*=" ti-"] {
  margin-right: 10px;}
.jBox-Modal .jBox-content {
  padding: 0;
  background-image: url(/wp-content/themes/layerz-guru/apps/images/loading.gif);
  background-repeat: no-repeat;
  background-position: center;}
.jBox-Modal .jBox-container, .jBox-Modal.jBox-closeButton-box:before {
  box-shadow: 0 3px 15px rgb(255, 255, 255), 0 0 5px rgba(0, 0, 0, 0.4);}
iframe.remote-data.internal {
  margin-top: -46px;}
img.icon-guru {
  position: absolute;
  z-index: 9999;
  right: 50%;
  top: 7px;
  height: 40px;}
.feed-item a {
  font-size: 20px;
  color: #2fa3b8;
}

/*aside.left-panel:hover {
  overflow-x: scroll;
  width: calc(230px + 8px);}*/

</style>

<style>
 .traffic-chart {
   min-height: 335px;
 }
 .chart-container {
   display: table;
   min-width: 270px ;
   text-align: left;
   padding-top: 10px;
   padding-bottom: 10px;}

</style>

<script type='text/javascript'>
	// Onclick Whatsapp Sent!
	$('.btn.msg-send-btn').click(WhatsApp);

	// Function send via url
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

	function WhatsApp() {
		// Check Device (Mobile/Desktop)
		var url_wa = 'https://web.whatsapp.com/send';
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			url_wa = 'whatsapp://send/';
		}
		// Get Value
		var nowhatsapp = $('.nowhatsapp').val(),
			via_url = location.href,
			pesan = $('.pesan').val();
		$(this).attr('href', url_wa + '?phone=' + nowhatsapp + '&text=' + pesan + '%0A%0A%0A*Ref:* ' + via_url);
		var w = 960,
			h = 540,
			left = Number((screen.width / 2) - (w / 2)),
			tops = Number((screen.height / 2) - (h / 2)),
			popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
		popupWindow.focus();
		return false;
	}
</script>
<script>
// Traffic Chart using chartist
if ($('#traffic-chart').length) {
    var chart = new Chartist.Line('#traffic-chart', {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
      series: [
      [0, 1800, 3500,  2500,  2200,  0],
      [0, 3300, 1500,  2000,  1500,  30],
      [0, 1500, 2800,  1500,  3000,  500]
      ]
  }, {
      low: 0,
      showArea: true,
      showLine: false,
      showPoint: false,
      fullWidth: true,
      axisX: {
        showGrid: true
    }
});

    chart.on('draw', function(data) {
        if(data.type === 'line' || data.type === 'area') {
            data.element.animate({
                d: {
                    begin: 2000 * data.index,
                    dur: 2000,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }
    });
}
// Traffic Chart using chartist End

//Traffic chart chart-js
if ($('#TrafficChart').length) {
    var ctx = document.getElementById( "TrafficChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
            datasets: [
            {
                label: "Visit",
                borderColor: "rgba(4, 73, 203,.09)",
                borderWidth: "1",
                backgroundColor: "rgba(4, 73, 203,.5)",
                data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
            },
            {
                label: "Bounce",
                borderColor: "rgba(245, 23, 66, 0.9)",
                borderWidth: "1",
                backgroundColor: "rgba(245, 23, 66,.5)",
                pointHighlightStroke: "rgba(245, 23, 66,.5)",
                data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
            },
            {
                label: "Targeted",
                borderColor: "rgba(40, 169, 46, 0.9)",
                borderWidth: "1",
                backgroundColor: "rgba(40, 169, 46, .5)",
                pointHighlightStroke: "rgba(40, 169, 46,.5)",
                data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
            }
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    } );
}
//Traffic chart chart-js  End
</script>

<script>
  $(document).ready(function () {
    // Create Post
    new jBox('Modal', {
      attach: '#createPost',
      width: 640,
      height: 450,
      blockScroll: false,
      animation: 'zoomIn',
      draggable: 'title',
      closeButton: true,
      content: '<iframe class="remote-data internal" src="/wp-admin/post-new.php"></iframe>',
      title: 'Tulis Artikel Baru',
      overlay: false,
      reposition: false,
      repositionOnOpen: false
    });

    // Create Design
    new jBox('Modal', {
      attach: '#createDesign',
      width: 1280,
      height: 720,
      blockScroll: false,
      animation: 'zoomIn',
      draggable: 'title',
      closeButton: true,
      content: '<iframe class="remote-data desktop" src="/wp-admin/post-new.php?post_type=page"></iframe>',
      title: 'Buat Desain Baru <img src="/wp-content/themes/layerz-guru/assets/images/icon-guru.png" class="icon-guru" alt="Layerz Guru">',
      overlay: false,
      reposition: false,
      repositionOnOpen: false
    });

    // Get started Elementor
    new jBox('Modal', {
      attach: '#elGetStarted',
      height: 480,
      width: 640,
      title: 'Mulai menggunakan Elementor',
      content: '<iframe width="640" height="480" src="https://www.youtube.com/embed/nZlgNmbC-Cw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    });

  });
</script>

</body>
</html>
<?php } ?>
