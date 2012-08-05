<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?=(isset($title)?$title:'')?></title>
  
  <script type="text/javascript" src="/lib/jquery/jquery-1.7.2.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap-responsive.min.css">
  <script type="text/javascript" src="/lib/bootstrap/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/skins/default/css/style.css">
  
</head>
<body>
  <?=(isset($topmenu)?$topmenu:'')?>
  
  
  <div class="container main">
    <div class="row">
      <div class="span12">
        <?=$content?>
      </div>
    </div>
  </div>
  
</body>
</html>