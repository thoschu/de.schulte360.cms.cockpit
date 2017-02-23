<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDEX</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css" media="screen,projection">
</head>
<body>
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col s12 carousel">
                <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1" alt=""></a>
                <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2" alt=""></a>
                <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3" alt=""></a>
                <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4" alt=""></a>
                <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5" alt=""></a>
                <a class="carousel-item" href="#six!"><img src="http://lorempixel.com/250/250/nature/6" alt=""></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <p>A</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <p><h1><?=$post['title'];?></h1>
                <p>
                    <?=$post['content'];?>
                </p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>
</body>
</html>