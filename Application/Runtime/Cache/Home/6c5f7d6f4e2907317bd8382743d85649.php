<<<<<<< HEAD
<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bootstrap Modals Example</title>
<meta name="description" content="Creating Modal Window with Bootstrap">
<link rel="stylesheet" type="text/css" href="/disp/Public/Css/bootstrap.css" />
<style media="screen">
.modal {
          bottom: auto;
          padding: 0;
          background-color: #ffffff;
          border: 1px solid #999999;
          border: 1px solid rgba(0, 0, 0, 0.2);
          border-radius: 6px;
          -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
          box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
          background-clip: padding-box;
          overflow-y: auto;
      }
</style>
</head>
<body>
<div class="container">
<h2>Example of creating Modals with Bootstrap</h2>
<div id="example" class="modal hide fade in" style="display: none; ">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>This is a Modal Heading</h3>
    </div>
    <div class="modal-body">
      <iframe src="test/map?mp=113.503059,23.452898" width="100%" height="600px"></iframe>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-success">Call to action</a>
      <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
  </div>
</div>
<p><a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Launch demo modal</a></p>

<script type="text/javascript" src="/disp/Public/Js/jquery.js"></script>
<script type="text/javascript" src="/disp/Public/Js/bootstrap-modal.js"></script>
</body>
=======
<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bootstrap Modals Example</title>
<meta name="description" content="Creating Modal Window with Bootstrap">
<link rel="stylesheet" type="text/css" href="/disp/Public/Css/bootstrap.css" />
<style media="screen">
.modal {
          bottom: auto;
          padding: 0;
          background-color: #ffffff;
          border: 1px solid #999999;
          border: 1px solid rgba(0, 0, 0, 0.2);
          border-radius: 6px;
          -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
          box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
          background-clip: padding-box;
          overflow-y: auto;
      }
</style>
</head>
<body>
<div class="container">
<h2>Example of creating Modals with Bootstrap</h2>
<div id="example" class="modal hide fade in" style="display: none; ">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>This is a Modal Heading</h3>
    </div>
    <div class="modal-body">
      <iframe src="test/map?mp=113.503059,23.452898" width="100%" height="600px"></iframe>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-success">Call to action</a>
      <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
  </div>
</div>
<p><a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Launch demo modal</a></p>

<script type="text/javascript" src="/disp/Public/Js/jquery.js"></script>
<script type="text/javascript" src="/disp/Public/Js/bootstrap-modal.js"></script>
</body>
>>>>>>> Real00/master
</html>