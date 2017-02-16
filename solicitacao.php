<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--my ccs-->
    
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Developer</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<!--start form-->
    <div class="section-form">
           <div class="container">
           <h1>Faça seu orçamento, é inteiramente gratuito.</h1>
           <div id="info_form">
           	
           		<h3>Carregando informações, por favor aguarde...</h3>
           		<img src="" alt="">
           </div>

               <form id="form_solicitacao">
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                        </span>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe seu nome e sobrenome">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                        <span class="input-group-addon">
                        @
                        </span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Informe seu e-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <label >Que tipo de serviço procura?</label>
                            <select name="typeServices" name="msgServicos" id="typeServicos" class="form-control">
                                <option value="site completo">Site completo</option>
                                <option value="loja virtual">Loja virtual</option>
                                <option value="blogs">Blogs</option>
                            </select>
                        
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone"></span>
                            </span>
                            <input type="tel" name="telSolicitar" id="telSolicitar" class="form-control" placeholder="Seu telefone de contato">
                        </div>
                    </div>
                    <button class="btn btn-success btn-block">Solicitar agora</button>                      
                </form>
           </div> 
        
    
    </div>
   



    <!-- Footer -->
    <?php include_once 'footer.html'; ?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->

    





    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

   


    <!--my scrip-->

    <script src="js/main.js"></script>

</body>

</html>
