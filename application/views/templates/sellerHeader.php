<head >
  <?php
// Turn off error reporting
  error_reporting(0);

// Report runtime errors
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
  error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
  ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
  error_reporting(E_ALL & ~E_NOTICE);
  ?> 

  <?php echo script_tag('assets/ThriftshopTheme/js/jquery-1.10.2.js'); ?>

  <script src='<?php echo base_url()."assets/ThriftshopTheme/js/bootstrap.js"?>'></script>    


  <!-- google login !-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <?php echo script_tag('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js'); ?>
  <?php echo script_tag('<?php echo base_url()."assets/ThriftshopTheme/js/bootstrap.js"?>'); ?>
  <?php echo link_tag('assets/ThriftshopTheme/css/sellerDash/plugins/morris.css'); ?>
    <?php echo link_tag('assets/ThriftshopTheme/css/sellerDash/sb-admin.css'); ?>  
 <?php echo script_tag('assets/ThriftshopTheme/js/jquery-1.10.2.js'); ?>

<?php echo link_tag('assets/ThriftshopTheme/css/bootstrap.css'); ?>
<script src='<?php echo base_url()."assets/ThriftshopTheme/gridGalley/masonry.pkgd.min.js"?>'></script>
</head>