﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastro Clientes | VCB</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

    <script type="text/javascript">
        function formatar_mascara(src, mascara) {
            var campo = src.value.length;
            var saida = mascara.substring(0,1);
            var texto = mascara.substring(campo);
            if(texto.substring(0,1) != saida) {
                src.value += texto.substring(0,1);
            }
        }
    </script>

</head>

<body class="theme-black">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <img src="../favicon.ico" width="70" height="70" style="margin-left:-365px;">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php" style= "margin-left: 50px">VCB - Voodoo Chicken Bookstore</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="..\images/gerente.jpg" width="120" height="120" alt="User" style="margin-top:-12px;">
                </div>
                <div class="info-container" style="margin-top:-100px; margin-left:140px;">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div style="white-space:normal">
                        Robyn Rihanna Fenty
                      </div>
                      <div style="magin-top:-10px"><h6 style="margin:0px;">Gerente</h6></div>
                      </div>
                    <!-- <div class="email">rihanna@vcb.com</div> -->
                    <div class="" style="margin-top: 13px; text-align: right; margin-right:-8px;" >
                        <a href="javascript:void(0);"><i  class="material-icons" style="color:white; font-size:18px;">logout</i></a>
                    </div>



                    <!-- <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sair</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU</li>
                    <li class="active">
                        <a href="../index.php">
                            <i class="material-icons">grid_view</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="clientes.php">
                            <i class="material-icons">face</i>
                            <span>Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">auto_stories</i>
                            <span>Produtos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="livros.php">Livros</a>
                            </li>
                            <li>
                                <a href="editoras.php">Editoras</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="vendas.php">
                            <i class="material-icons">shopping_cart</i>
                            <span>Vendas</span>
                        </a>
                    </li>
                    <li>
                        <a href="funcionarios.php">
                            <i class="material-icons">badge</i>
                            <span>Funcionários</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">app_registration</i>
                            <span>Cadastro</span>
                        </a>
                        <ul class="ml-menu">
                          <li class="dropdown">
                              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Funcionários
                              </a>
                              <ul class="dropdown-menu pull-right">
                                  <li><a href="cadFunc.php">Cadastro</a></li>
                                  <li><a href="cadDep.php">Dependentes</a></li>
                              </ul>
                          </li>
                              <li>
                                  <a href="cadLivro.php">Livros</a>
                              </li>
                              <li>
                                  <a href="cadEdit.php">Editoras</a>
                              </li>
                              <li>
                                  <a href="cadCli.php">Clientes</a>
                              </li>
                              <li>
                                  <a href="cadVen.php">Vendas</a>
                              </li>

                        </ul>
                    </li>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CADASTRO CLIENTES
                            </h2>
                        </div>
                        <!-- Cliente-->
                        <div class="body">
                            <form  action="../docsphp/proc_cadcli.php" method= "POST" target="_blank">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nomecli" class="form-control" placeholder="Nome" maxlength="45" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="rgcli" class="form-control" placeholder="RG" onkeypress="formatar_mascara(this,'##.###.###-#')" maxlength="12"  required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="cpfcli" class="form-control" placeholder="CPF" onkeypress="formatar_mascara(this,'###.###.###-##')" maxlength="14"  required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="datanascim" class="form-control" placeholder="Data Nascimento" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Cliente-->
                                <!-- Endereço Cliente-->
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="logradourocli" class="form-control" placeholder="Lograoduro" maxlength="45" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="numerocli" class="form-control" placeholder="nº" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="complementocli" class="form-control" maxlength="45" placeholder="Complemento">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="bairrocli" class="form-control" placeholder="Bairro" maxlength="20" required="required">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="cidadecli" class="form-control" placeholder="Cidade" maxlength="20" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="cepcli" class="form-control" placeholder="CEP" maxlength="9" required="required" onkeypress="formatar_mascara(this,'#####-###')">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Endereço Cliente-->
                                    <!-- Telefone Cliente-->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="dddcli" class="form-control" placeholder="DDD" maxlength="3" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="numerotelcli" class="form-control" placeholder="Número" maxlength="9" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                        <select name="tipotelcli" class="form-control show-tick">
                                            <option value="Celular">Celular</option>
                                            <option value="Fixo">Fixo</option>
                                        </select>
                                </div>
                                <!-- END Endereço Cliente-->
                                <div class="col-md-2">
                                    <input type="submit" value= "CADASTRAR" class="btn btn-primary btn-lg m-l-15 waves-effect">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
