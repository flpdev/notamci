<!DOCTYPE html>
<html>
<head>
    <title>NotamCI - Repositório de respostas desafio nota máxima - ENVIAR</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.css') ?>"
</head>
<body>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-105376260-1', 'auto');
    ga('send', 'pageview');

</script>

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
                <li><a href="<?php echo base_url('home/index')?>">Pesquisar</a></li>
                <li class="active"><a href="<?php echo base_url('home/cadastrar')?>">Cadastrar <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a>Questões cadastradas: <?php if(isset($contador)){echo $contador->cont; }; ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="col-md-12">
        <?php if(isset($mensagem)) {echo $mensagem; } ?>

        <h3>Valida código fonte</h3>
        <p>Cole aqui o código fonte da página de gabarito para incluir respostas corretas ao repositório</p>

        <form class="form-horizontal">
            <div class="form-group">
                <textarea rows="10" class="form-control" id="boxprincipal" required></textarea>
                <div id="alerta">
                    <br>
                    <div id="alerta" class="panel panel-danger">
                        <div class="panel-body bg-danger">
                            Somente questões com respostas válidas serão cadastradas.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a id="upar" class="btn btn-warning">Validar</a>
            </div>
        </form>

        <form class="form-horizontal" id="formulario" method="post" action="<?php echo base_url('home/cadastrar');?>">
            <div id="validacao">
            </div>
            <div id="enviar" class="panel panel-default" hidden>
                <input type="submit" class="form-control btn btn-primary">
            </div>
        </form>

        <div id="conteudooculto" class="classe" hidden></div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('/assets/scripts/jquery-3.2.0.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/scripts/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/scripts/notamaxima.js') ?>"></script>

</body>
</html>
