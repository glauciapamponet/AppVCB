<?php
    include_once ("../conex.php");
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastro Livros | VCB</title>
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

    <link href="../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <script src="../plugins/sweetalert/sweetalert.min.js"></script>

    <script type="text/javascript">
        function formatar_mascara(src, mascara) {
            var campo = src.value.length;
            var saida = mascara.substring(0,1);
            var texto = mascara.substring(campo);
            if(texto.substring(0,1) != saida) {
                src.value += texto.substring(0,1);
            }
        }
        function showWithCustomIconMessage() {
            swal({
                title: "Sucesso!",
                text: "Cadastro concluído.",
                imageUrl: "../../images/thumbs-up.png"
            });
        }
        function showErrorMensage() {
            swal({
                title: "Erro",
                text: "Cadastro não foi efetuado.",
                imageUrl: "../../images/sad.png"
            });
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
        <img class="navbar-left" src="../favicon3.png" width="60px" height="55px" style="align=right; margin-top:5px">
          <div class="navbar-header">
              <a class="navbar-brand navbar-left" href="../index.php" style= "margin-left: -10px">VCB - Voodoo Chicken Bookstore</a>
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
                    <img src="..\images\gerente.jpg" width="120" height="120" alt="User" style="margin-top:-12px;">
                </div>
                <div class="info-container" style="margin-top:-100px; margin-left:140px;">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div style="white-space:normal">
                        Robyn Rihanna Fenty
                      </div>
                      <div style="magin-top:-10px"><h6 style="margin:0px;">Gerente</h6></div>
                      </div>
                    <!-- <div class="email">rihanna@vcb.com</div> -->
                    <div class="" style="margin-top: 30px; text-align: right; margin-right:-8px;" >
                        <a href="javascript:void(0);"><i  class="material-icons" style="color:white; font-size:18px;">logout</i></a>
                    </div>
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
                    <b>Version: </b> 1.0
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
                                CADASTRO LIVROS
                            </h2>
                        </div>
                        <?php 
                            if(isset($_SESSION['msg'])){?>
                                <script>showWithCustomIconMessage();</script>
                                <?php
                                unset ($_SESSION['msg']);
                            }
                        ?>
                        <?php 
                            if(isset($_SESSION['erro'])){?>
                                <script>showErrorMensage();</script>
                                <?php
                                unset ($_SESSION['erro']);
                            }
                        ?>
                        <form action="../docsphp/proc_cadlivro.php" method="POST" enctype="multipart/form-data">
                            <div class="body">
                            <!--idlivros, nomelivro, precolivro, qtdpaglivro, anolanclivro, idedit, capalivro, qtdestoque, pesounitkg-->
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="nomelivro" type="text" class="form-control" placeholder="Nome" maxlength="45" required="required" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="precolivro" type="text" class="form-control" placeholder="Preço" onkeypress="formatar_mascara(this,'##.##')" maxlength="5" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="qtdpaglivro" type="text" class="form-control" placeholder="Pags" maxlength="4" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="anolanclivro" type="text" class="form-control" placeholder="Ano Lançamento" maxlength="4" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="qtdestoque" type="text" class="form-control" placeholder="Estoque" maxlength="4" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="pesounitkg" type="text" class="form-control" placeholder="Peso Unit" onkeypress="formatar_mascara(this,'#.##')" maxlength="4" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="corredor" type="text" class="form-control" placeholder="Corredor" maxlength="2" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="estante" type="text" class="form-control" placeholder="Estante" maxlength="4" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-md-2">
                                    <b>Genero(s)</b>
                                    <select name="select_genero[]" class="form-control show-tick" multiple>
                                        <?php
                                            $result_genero = "SELECT idgenero, nome FROM genero";
                                            $resultado_genero = mysqli_query($conex, $result_genero);
                                            while($row_genero = mysqli_fetch_assoc($resultado_genero)) {
                                                echo '<option value ="'.$row_genero[idgenero].'">'.$row_genero[nome].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <b>Autor(es)</b>
                                    <select name="select_autores[]" class="form-control show-tick" multiple>
                                        <?php
                                            $result_autores = "SELECT idautores, nome FROM autores";
                                            $resultado_autores = mysqli_query($conex, $result_autores);
                                            while($row_autores = mysqli_fetch_assoc($resultado_autores)) {
                                                echo '<option value ="'.$row_autores[idautores].'">'.$row_autores[nome].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <b>Editora</b>
                                    <select name="select_editora" class="form-control show-tick">
                                        <?php
                                            $result_editoras = "SELECT ideditoras, nomeedit FROM editoras";
                                            $resultado_editoras = mysqli_query($conex, $result_editoras);
                                            while($row_editora = mysqli_fetch_assoc($resultado_editoras)) {
                                                echo '<option value ="'.$row_editora[ideditoras].'">'.$row_editora[nomeedit].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input name="imagem" class="btn btn-primary btn-sm float-left file-upload-input" type="file" required="required">
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value= "CADASTRAR" class="btn btn-primary btn-lg m-l-15 waves-effect">
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>
                                CADASTRO AUTORES
                            </h2>
                        </div>
                        <?php 
                            if(isset($_SESSION['msg'])){?>
                                <script>showWithCustomIconMessage();</script>
                                <?php
                                unset ($_SESSION['msg']);
                            }
                        ?>
                        <?php 
                            if(isset($_SESSION['erro'])){?>
                                <script>showErrorMensage();</script>
                                <?php
                                unset ($_SESSION['erro']);
                            }
                        ?>
                        <div class="body">
                            <form action="../docsphp/proc_cadautor.php" method="POST">
                                <div class="row clearfix">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="autnome" type="text" class="form-control" placeholder="Nome" maxlength="45" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">

                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" value= "CADASTRAR" class="btn btn-primary btn-lg m-l-15 waves-effect">
                                    </div>
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
