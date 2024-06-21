<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos FOCOS Ya!</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="miestilo.css">
    <style>
        p {color: blue;}
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .header-container h1 {
            margin: 0;
        }
        .header-container img {
            cursor: pointer;
            width: 112.5px; /* 50% más grande que 75px */
            height: 85px;  /* 50% más grande que 30px */
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1>Bienvenidos a Focos Ya!!</h1>
        <!--logo de la empresa-->
        <a href="<?php echo base_url('acercade')?>">
            <img src="<?php echo base_url('assets/img/logo_empresa.jpg')?>" alt="marca" width="75" height="30" class="img-fluid"/>
        </a>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>