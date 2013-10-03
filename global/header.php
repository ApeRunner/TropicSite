<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=1080">
    
    <?php include './_tropic/includes/head_tags.php'; //$Head_Title, $Head_Description ?>
    
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    
    <!-- Metro UI -->
    <link href="<?=$raiz?>_tropic/css/Metro-UI/css/modern.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?=$raiz?>_tropic/css/Metro-UI/javascript/dropdown.js"></script>

    <!-- CSS Custom -->
    <link href="<?=$raiz?>global/css/modern-custom.css" rel="stylesheet" type="text/css" />
    <link href="<?=$raiz?>global/css/varios.css" rel="stylesheet" type="text/css" />
    <link href="<?=$raiz?>global/css/layout.css" rel="stylesheet" type="text/css" />
    
    <?php include './_tropic/includes/incluir.php'; // CSS, JS, PHP, HTML ?>
     
</head>

<body class="metrouicss">

	<div align="center">
        
        <?php require "page_top.php"; ?>
            
        <div id="page_middle" align="left" style="width:960px; margin-top:30px;">
        
             <?php require "./_tropic/respuesta.php"; ?>
                
