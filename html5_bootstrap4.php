<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
      <title>Webstandards 11187</title>
      <meta charset="UTF-8"/>
      <meta name="description" content="Free Web tutorials"/>
      <meta name="keyswords" content="HTML,CSS"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


      <style>
         #divContent1, #divContent2, #divContent3{
            margin: 5px auto;
            top: 60px;
            width: auto;
            background-color: #2E8B57;
         }


      </style>

   </head>
   <body>
      <div>
         <div id="divMAin">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
               <!-- Brand -->
               <a class="navbar-brand" href="">Logo</a>

               <!-- Links -->
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://www.w3schools.com/tags/default.asp">Guia de refer&ecirc;ncia</a>
                  </li>

                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Formul&aacute;rios
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"
                           data-target="#divContent1"
                           data-toggle="collapse">Forms</a>
                        <a class="dropdown-item" href="#"
                           data-target="#divContent2"
                           data-toggle="collapse">Carousel</a>
                        <a class="dropdown-item" href="#"
                           data-target="#divContent3"
                           data-toggle="collapse">Accordion</a>
                     </div>
                  </li>
               </ul>
            </nav>
            <div class="container">
               <div id="divContent1"
                    class="collapse">
                       <?php
                       require_once 'form_bootstrap4.php';
                       ?>
               </div>
               <div id="divContent2"
                    class="collapse">
                       <?php
                       require_once 'carousel_bootstrap4.php';
                       ?>
               </div>
               <div id="divContent3"
                    class="collapse">
                  <?php
                  require_once 'accordion_bootstrap4.php';
                  ?>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
