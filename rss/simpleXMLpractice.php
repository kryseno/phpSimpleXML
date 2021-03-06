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

        <?php
        for($i=0; $i<12; $i++){
            include('template.php');
        ?>

        <!-- USING BOOTSTRAP TABLES -->
        <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Video</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><a href="https://www.youtube.com/embed/<?=$videoId?>"><? echo $i + 1?></a></th>
                <td><?=$title?></td>
                <td><?=$description?></td>
            </tr>
        </tbody>
        </table>
        
        <?php
        }
        ?>
        </div>
    </div>
</body>
</html>