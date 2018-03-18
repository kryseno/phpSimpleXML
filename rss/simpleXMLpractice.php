<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Montserrat, sans-serif;
            box-sizing: border-box;
        }
        .videos {
            display: inline-block;
            border: 1px solid black;
            text-align: center;
        }
        #description {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
<?php
include('request.php');
?>
        <h1>YouTube Channel: <a href='<?=$address?>'><?=$channel?></a></h1>
        <div class="row">
<?php
for($i=0; $i<12; $i++){
    include('template.php');
?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 videos">
            <h3><?=$title?></h3>
            <br><iframe width='540' height='295' src='https://www.youtube.com/embed/<?=$videoId?>' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
            <br><span id="description"><?=$description?></span>
        </div>
    
<?php
}
?>
        </div>
    </div>
</body>
</html>