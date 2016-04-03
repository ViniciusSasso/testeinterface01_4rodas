<!DOCTYPE html>
<head>
<meta charset="utf-8" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/fontes.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/estilo.css" />

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory');?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('template_directory');?>/scripts/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory');?>/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/scripts/scripts.js"></script>

   <script type="text/javascript" src="<?php bloginfo('template_directory');?>/scripts/jquery.sticky.js"></script>
   
  <script>
    $(window).load(function(){
      $("#menuSt").sticky({ topSpacing: 0 });
    });
  </script>   

<div id="Fundo"></div>

<?php
include "banner.php";
include "topo.php";
include "destaques.php";
include "rodape.php";
?>

</body>
</html>