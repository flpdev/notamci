<!DOCTYPE html>
<html>
<head>
    <title>NotamCI - Repositorio de respostas</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.css') ?>">

</head>
<body>
<nav class="navbar navbar-default">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>">NotamCI</a>
    </div>

    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url('home/index')?>">Pesquisar <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url('home/cadastrar')?>">Cadastrar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a>Questões cadastradas: <?php if(isset($contador)){echo $contador->cont; }; ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">


    <div id="box2" class="">
        <div class="auto-resizable-iframe">
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0FFRHjlhvFk" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
        <br>
    <form class="form-horizontal" method="post" action="<?php echo base_url('home/pesquisar'); ?>">

        <div class="form-group">

            <div class="col-md-8 col-md-offset-2">
                <input type="text" id="pesquisar" class="form-control" name="pesquisar" placeholder="Digite aqui parte de questão para pesquisar" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
                <input type="submit" class="btn btn-primary col-md-12" id="botaopesquisar" value="PESQUISAR">
            </div>
        </div>
    </form>
    <?php
        if(isset($erro)){
            echo $erro;
        }
    ?>
    <?php if(isset($lista)):

        foreach($lista as $linha){?>

    <div class='panel panel-default'>
        <div class='panel-heading'>
            <textarea class='form-control'  rows='10' disabled><?php echo $linha['texto_resposta'] ?></textarea>
        </div>
    </div>

    <?php } endif;?>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- notamci -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7119159537293100"
         data-ad-slot="4061661075"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

</div>

<script type="text/javascript" src="<?php echo base_url('/assets/scripts/jquery-3.2.0.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/scripts/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/scripts/notamaxima.js') ?>"></script>

</body>
</html>