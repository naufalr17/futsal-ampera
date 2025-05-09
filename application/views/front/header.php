<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $title ?> | <?php echo $this->data['company_data']->company_name ?></title>
  <meta charset="utf-8">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta name="description" content="Ceritakan Project">
  <meta name="author" content="Modified by Muhammad Naufal Rizki">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
  <script>
    import {
      Calendar
    } from '@fullcalendar/core'
    import timeGridPlugin from '@fullcalendar/timegrid'
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!-- Theme -->
  <link href="<?php echo base_url() ?>assets/template/frontend/css/core.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/template/frontend/css/custom.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-3.3.1.js" rel="stylesheet"></script>
  <script src="<?php echo base_url() ?>assets/template/frontend/js/popper.min.js" rel="stylesheet"></script>
  <script src="<?php echo base_url() ?>assets/template/frontend/js/bootstrap.min.js" rel="stylesheet"></script>
  <script src="<?php echo base_url() ?>assets/template/frontend/js/moment.min.js" rel="stylesheet"></script>
  <link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/fav.png') ?>" />
</head>