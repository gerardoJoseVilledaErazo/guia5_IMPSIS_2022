<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
      crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
      crossorigin="anonymous">
    </script>
    <title><?= $title ?></title>
</head>
<body>
<script src="<?php echo base_url('js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/ajax.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">USO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('estudiantes') ?>">Estudiantes</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= site_url('carreras') ?>">Carreras</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('materias') ?>">Materias</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= site_url('profesores') ?>">Profesores</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= site_url('grupos') ?>">Grupos</a>
      </li>
    </ul>
  </div>
</nav>
    <h1> &emsp;  Guía de Implantación 05 - VALIDACION DE FORMULARIOS</h1>
    &emsp;<strong>  Alumno: </strong> <p> &emsp;Gerardo José Villeda Erazo</p> <br>
    &emsp;<strong>  Código: </strong> <p> &emsp;VE16-I04-001</p> <br>
    &emsp;<strong>  Materia: </strong> <P> &emsp;Implantación de Sistemas</P>  <br>




