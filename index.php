<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/starter-template.css" rel="stylesheet">
    <style type="text/css">
    .modal {
      text-align: center;
      padding: 0!important;
    }

    .modal:before {
      content: '';
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -4px;
    }

    .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }
    .modal-dialog{
      width: 400px;
    }
    .modal-body {
      padding: 21px;
    }
    .btn-block+.btn-block{
      margin-top: 10px;
    }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        <p id='click'>click for me</p>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#test">
          Test modal
        </button>
        <button type="button" class="testClick btn btn-primary btn-lg">Click</button>
        <select class='testChange'>
          <option>1</option>
          <option>2</option>
        </select>
         <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#image">
          Open iamge
        </button>
        <!-- Modal -->
        <div class="modal fade bs-example-modal-sm" id="test" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <span class="modal-title">Upload image</span>
              </div>
              <div class="modal-body">
                <input class="form-control btn-block" type="text" placeholder="Title">
                <textarea class="form-control btn-block" rows="5" placeholder="Description" style="resize: none;"></textarea>
                <label type="button" class="btn btn-primary  btn-block" for='file'>Open image</label>
                <button type="button" class="btn btn-primary  btn-block">Send</button>
                <button id='exit' type="button" class="btn btn-primary  btn-block">Exit</button>
                <input style='display: none;' type="file" name="file" id='file'>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal image-->
        <div class="modal fade bs-example-modal-sm" id="image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <img src="image/1.jpg" style="width:100%" alt="lorem">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">

       $('#test').modal();
       $('#exit').click(function(){
          $('#test').modal('hide');
       });
        $('.testClick').click(function(){
          alert("Ok");
          console.log($(this).attr('class'));
        });
        $('.testChange').change(function(){
          alert("Ok");
          console.log($(this).attr('class'));
        })

    </script>
  </body>
</html>
