<?php
    
    require_once 'config.php';
    require_once DBAPI;
    
    if(isset($_POST['submit'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];

        insert($nome, $email, $fone);

            
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Leandro Delamare</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
                    <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container text-center">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Leandro Delamare</h3>
                            <h2> Businessman / Influencer Man </h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="footer-contact-info text-center">
                                <h4>Contato para mais informações</h4>
                                <ul>
                                    <li><strong>E-mail :</strong> your-email@mail.com</li>
                                    <li><strong>Phone :</strong> +8801-6778776</li>
                                    <li><strong>Mobile :</strong> +8801-45565378</li>
                                    <li><strong>Web :</strong> yourdomain.com</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12 text-center">
                            <h3 class="section-title text-center">Deixe seu contato e receba novidades ;)</h3>
                            <form name="sentMessage" method ="POST" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Seu nome*" id="name" name = "nome" required data-validation-required-message="Por favor, digite seu nome.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Seu e-mail *" id="email"  name = "email" required data-validation-required-message="Por favor, digite seu endereço de E-mail.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Seu telefone" id="fone" name="fone">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <input id = "submit" type="submit" name="submit" value="ENVIAR" class="btn btn-primary"/>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </body>

    </html>


