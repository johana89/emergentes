<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/regalo.png" type="image/x-icon" />


    <title><?= $config->get('aplication_name') ?></title>
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/login.css">
    <style>

        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

    </style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px;">
<div id="inicio">
    <div class="container">

    </div>
    <div class="container-fluid">
        <header>

        </header>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top" style="background: transparent;border-style: none" >
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="varbar-brand">
                    <ul class="nav nav-pills">
                        <li role="presentation" ><a href="<?= $config->get('urlBase').'?controller=Pedido&action=finalizar&id='.$id?>" style="margin: 0px"> <i style="padding: 0px; margin: 0px" class=" fa fa-shopping-cart fa-6" aria-hidden="true"></i> Finalizar Compra</a></li>
                    </ul>

                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse" >
                <div>
                    <?php
                    $cliente = User::singleton();
                    if($cliente->isGuest()){?>
                        <button class="w3-right btn btn-link btn-lg" onclick="document.getElementById('id01').style.display='block'" style="padding: 5px" href="" >Mi Cuenta</button>
                    <?php }else
                    {?>
                        <a class="w3-right btn btn-link btn-lg" style="padding: 5px" href="#" > <?php echo 'Usuario: '. User::singleton()->username;?></a>
                        <a class="w3-right btn btn-link btn-lg" style="padding: 5px" href="<?= $config->get('urlBase').'?controller=Site&action=salir'?>" >Salir</a>

                    <?php   }  ?>

                </div>
                <ul class="nav navbar-nav" style="width: 100%;background: transparent;font-size: large;font-weight: bold;">
                    <li class="col-sm-3" style="background-color: #120bdd;"><a href="<?= $config->get('urlBase').'?controller=Site&action=index'?>" style="color: white;">INICIO</a></li>
                    <li class="col-sm-3" style="background-color: #fb601d;"><a href="<?= $config->get('urlBase').'?controller=Site&action=index#productos'?>" style="color: white">PRODUCTOS</a></li>
                    <li class="col-sm-3" style="background-color: #f2c739;"><a href="<?= $config->get('urlBase').'?controller=Site&action=index#about'?>" style="color: white">ACERCA DE</a></li>
                    <li class="col-sm-3" style="background-color: #48c61f;"><a href="<?= $config->get('urlBase').'?controller=Pedido&action=indexCliente'?>" style="color: white">MIS PEDIDOS</a></li>

                    <!-- <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTOS<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                             <li><a href="#">Opcion 1</a></li>

                         </ul>
                     </li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">
                            <img style="width:80px"src="assets/img/bolsa-compra.png" alt="compra-carrito">

                        </a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="jumbotron" style="margin:25px 0 auto;">
        <a href="#" >
            <img src="assets/img/icon.ico" style="float: left; width:15%" alt="PUZLE MAGICO" title="Autos">
        </a>
        <h1>Tienda Online</h1>
        <p>Bienvenido a la tienda online, que disfrute su compra.</p>
    </div>


