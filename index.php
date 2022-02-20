<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="flag"/>
    <meta name="auther" content="0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body{
            margin: 0px !important;
        }
        .content{
            position: relative;
        }
        .Stripes{
            width: 100%;
            height: 10vh;
        }
        .red{
            background-color: #b31c31;
        }
        .white{
            background-color: white
        }
        .blue{
            position: absolute;
            top:0px;
            left: 0px;
            width: 40%;
            height: 40vh;
            background-color: #0d076e;
        }
        .star{
            width: 30px;
            height: 30px;
            position: absolute;
            background-image: url("star2.png");
            color: white;
        }
    </style>
</head>
<body>
<div class="content">
    <?php for($i = 0; $i < 5; $i++):?>
        <div class="Stripes red"></div>
        <div class="Stripes white"></div>
    <?php endfor; ?>
    <div class="blue">
        <?php for($i = 0; $i < 50; $i++):?>
            <i class="bi bi-star-fill star" style="
                    top: <?php print(rand(1, 80));?>%;
                    left:<?php print(rand(1, 80));?>%;"></i>
        <?php endfor; ?>
    </div>
</div>
</body>
</html>