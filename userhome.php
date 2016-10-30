<!DOCTYPE html>
<html lang="zh-Hant">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Grusse</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="/css/compose.css">
  <link rel="stylesheet" href="/assets/css/main.css" >
  <link href="/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" >

  <!-- Custom Fonts -->
  <link href="/vendor/font-awesome/scss/font-awesome.scss" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.css" >
  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="/css/mystyle.css">
  <link rel="stylesheet" href="/css/creative.css" >

</head>


<body id="page-top"> 
  <!--navbar -->
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a style = "margin-right: 20px; " class="navbar-brand page-scroll" href="#page-top"> Grusse </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a style ="margin-left: 40px" class="page-scroll" href="#new"><span class="glyphicon glyphicon-bell"></span> </a> </li>
          <li><a style ="margin-left: 40px" class="page-scroll" href="#mailbox"><span class="glyphicon glyphicon-envelope"></span> </a> </li>
          <li><a style ="margin-left: 40px" class="page-scroll" href="#favorite"><span class="glyphicon glyphicon-star"></span></a></li>
          <li><a style ="margin-left: 40px" class="page-scroll" href="#contact"><span class="glyphicon glyphicon-user"></span></a></li>
        </ul>
        
        <div class="nav navbar-nav navbar-right" btn-compose ">
          <a type="button" class="btn btn-primary navbar-btn" href="#compose" role="button" data-toggle="collapse" style="margin-right: 50px"> <span class="glyphicon glyphicon-pencil"></span>Compose</a>
        </div>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="collapse" id="compose">
    <div class="container">
      <div class="content-container clearfix">
        <h1 class="content-title" style="padding-top: 50px">Compose</h1>
        <div class="col-md-12">     
          <form enctype="multipart/form-data" class="text-center">
            <textarea style="color: black;" class="form-control" placeholder="message" id="message"></textarea>
            <div class="form-group">
              <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
            </div>
            <div class="form-group">
              <button class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send</button>
            </div>
          </form>

          <div class="btn-send">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <header class="bg-dark" style="background-image:none;" id="top">
    <div class="header-content">
      <div class="header-content-inner">
        <h2 class="homeHeading">Welcome back, Username</h2>
        <hr class="dark">
        <span class="avatar"><img class="img-rounded" src="/img/avatar.jpg" alt="" /></span>
        <p> 
          <br>
          Postcards Sent: <br>
          Postcards Received: <br>
          Hearts Received: <br>
        </p>
      </div>
    </div>
  </header>

  <section class="bg-primary thumbnails" id="mailbox">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" text-center>
          <h1 class="section-heading">New Cards</h1>
          <hr class="light">

          <a href="/img/fulls/01.jpg">
            <img src="img/thumbs/01.jpg" alt="" />
            <h4 style="color: white;">alkfjhanflksjhak</h4>
          </a>
          <h1> from German. </h1>
        </div>
      </div>
    </div>

  </section>


  <!-- jQuery -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Theme JavaScript -->
  <script src="/js/creative.min.js"></script>

  <!--This Page only-->
  <script src="/assets/js/jquery.poptrox.min.js"></script>
  <script src="/assets/js/skel.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="/js/fileinput.js" type="text/javascript"></script>
  <script src="/js/fileinput_locale_fr.js" type="text/javascript"></script>
  <script src="/js/fileinput_locale_es.js" type="text/javascript"></script>
  

</body>
<script>
  $('#file-fr').fileinput({
    language: 'fr',
    uploadUrl: '#',
    allowedFileExtensions : ['jpg', 'png','gif'],
  });
  $('#file-es').fileinput({
    language: 'es',
    uploadUrl: '#',
    allowedFileExtensions : ['jpg', 'png','gif'],
  });
  $("#file-0").fileinput({
    'allowedFileExtensions' : ['jpg', 'png','gif'],
  });
  $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
          return filename.replace('(', '_').replace(']', '_');
        }
    });
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
    $("#file-3").fileinput({
      showUpload: false,
      showCaption: false,
      browseClass: "btn btn-primary btn-lg",
      fileType: "any",
      previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });
    $("#file-4").fileinput({
      uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function() {
      if ($('#file-4').attr('disabled')) {
        $('#file-4').fileinput('enable');
      } else {
        $('#file-4').fileinput('disable');
      }
    });    
    $(".btn-info").on('click', function() {
      $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    
    $(document).ready(function() {
      $("#test-upload").fileinput({
        'showPreview' : false,
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        'elErrorContainer': '#errorBlock'
      });

    });
</script>
</html>