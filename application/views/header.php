<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">    
    <title> RESTAURANTE UTC</title>
    <!-- IMPORTACION DE JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- IMPORTACION DE BOOTSTRAP 3 -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
  *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family:Arial, Helvetica, sans-serif;
    text-transform: capitalize;
    text-decoration: none;
    }
    body{
      background-color: #985344;

    }
    header{
        background-image: url(assets/images/foto1.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container{
        max-width: 11000px;
        margin:0 auto;
        background-color:#873e23;
        color:white;
        border:3px solid ;
        border-radius: 5px;
    }
    .header-text{
      text-align: center;
      width: 700px;
    }
    .header-text h1 {
      color:#ffffff;
      font-size: 55px;
    }
    .header-text p{
      color:#ffffff ;
      margin-top:35px;
    }
    .btn-1{
      display: inline-block;
      background-color: #343434;
      margin-top: 35px;
      padding: 15px 25px;
      border-radius:25px;
      color: #ffffff;
    }
    .btn-1:hover{
      background: color #2fca2f;
    }
    .services{
      padding: 50px 0px;
      text-align: center;
      color: #454646;
    }
    .services h2{
      font-size:55px;
      margin-bottom: 25px;
    }
    .txt-1{
      font-size: 18px;
      padding: 0px 200px;
      margin-bottom: 55px;
    }
    .group-services{
      display: flex;
      justify-content: space-between;
    }
    .service{
      padding: 50px 25px;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
    }
    .service img{
      width: 500px;
      margin-bottom: 25px;
    }
    .service h3{
      font-size: 22px;
      margin-bottom: 15px;
    }
    .service p{
      font-size: 18px;
    }
    .numbers{
      padding: 50px 00px;
      display: flex;
      justify-content: space-between;
      color: #ffffff;
    }
    .number{
      text-align: center;
    }
    .number h3 {
      font-size:100px;
      margin-bottom: 25px;
    }
    .number p{
      font-size:18px;
    }
    footer{
      padding:30px;
    }
    .ft{
      text-align: center;
      flex-direction: column;
    }


   
</style>
<!-- MENU IMPORTADO -->
<body>
    <h1> <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url();?>/welcome">RESTAURANTE UTC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo site_url();?>/menus/menus">MENU<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url();?>/menus/desayunos">DESAYUNOS</a></li>
        <li><a href="<?php echo site_url();?>/menus/almuerzos">ALMUERZOS</a></li>
        <li><a href="<?php echo site_url();?>/menus/meriendas">MERIENDAS</a></li>
        <li><a href="<?php echo site_url();?>/menus/platosc">PLATOS A LA CARTA</a></li>
        
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> </h1>
