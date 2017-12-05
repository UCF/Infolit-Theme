<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

 <title>Information Literacy</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>style.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<style type="text/css">
.modal-body {
  height: 75vh;
}
.modal-dialog {
  margin: 65px auto;
}
#splash-body {
  height: 375px;
}
.no-thanks {
  font-size: 15px;
  margin-right: 7px;
}

</style>

<!-- UCF and CDL web bars -->
<script type="text/javascript" src="https://universityheader.ucf.edu/bar/js/university-header.js"></script>

<!-- /web bars -->

<?php wp_head(); ?>
</head>
<body>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="no-thanks">Close</span><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Help us improve our website!</h4>
      </div>
      <div class="modal-body">
        <p>Please complete this quick, 2 question survey about your visit. Click "Submit" when complete. If you don't want to participate, close this window to proceed to the site.</p>
        <iframe src="https://ucf.qualtrics.com/jfe/form/SV_becncOPNj8MQ7wF" title="iframe example 1" width="100%" height="90%" frameborder="0"  marginheight="0" marginwidth="0">
          <p>Your browser does not support iframes.</p>
        </iframe>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="splash-body">	
	<h1>Information Literacy</h1>

    <ul>    
    	<li><a href="<?php bloginfo('url')?>/Faculty/">Faculty Site</a></li>
    	<li><a href="<?php bloginfo('url')?>/Students/">Student Site</a></li>   
	</ul>    
</div>
<div id="splash-bottom">
	<p>&copy; <?php echo date("Y"); ?> - <a href="http://ucf.edu">University of Central Florida</a></p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://library.ucf.edu/wp-content/themes/UCFLibrarySite-Theme/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready( function() {
     if (document.cookie.replace(/(?:(?:^|.*;\s*)modal_used\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
      $('#myModal').modal('show');
      document.cookie = "modal_used=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
     }
  });
</script>

<?php wp_footer(); ?>
</body>
</html>

