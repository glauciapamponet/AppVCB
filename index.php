<?php
    include_once "conex.php";
        session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>VCB</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    <style media="screen">
      .peq{
        width: 10%;
      }
    </style>
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
        <input type="text" placeholder="PESQUISAR...">
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
                    <img src="images/gerente.jpg" width="120" height="120" alt="User" style="margin-top:-12px;">
                </div>
                <div class="info-container" style="margin-top:-100px; margin-left:140px;">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div style="white-space:normal">
                        Robyn Rihanna Fenty
                      </div>
                      <div style="magin-top:-10px"><h6 style="margin:0px;">Gerente</h6></div>
                      </div>
                    <!-- <div class="email">rihanna@vcb.com</div> -->
                    <div class="" style="margin-top: 32px; text-align: right; margin-right:-8px;" >
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
                        <a href="index.php">
                            <i class="material-icons">grid_view</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/clientes.php">
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
                                <a href="pages/livros.php">Livros</a>
                            </li>
                            <li>
                                <a href="pages/editoras.php">Editoras</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/vendas.php">
                            <i class="material-icons">shopping_cart</i>
                            <span>Vendas</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/funcionarios.php">
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
                                  <li><a href="pages/cadFunc.php">Cadastro</a></li>
                                  <li><a href="pages/cadDep.php">Dependentes</a></li>
                              </ul>
                          </li>
                              <li>
                                  <a href="pages/cadLivro.php">Livros</a>
                              </li>
                              <li>
                                  <a href="pages/cadEdit.php">Editoras</a>
                              </li>
                              <li>
                                  <a href="pages/cadCli.php">Clientes</a>
                              </li>
                              <li>
                                  <a href="pages/cadVen.php">Vendas</a>
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
            <div class="block-header">
                <h3>DASHBOARD</h3>
            </div>

            <!-- Widgets -->

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">payments</i>
                        </div>
                        <div class="content">
                            <div class="text">VENDAS DO MÊS</div>
                            <div class="number " data-from="0" data-to="12345"  data-fresh-interval="20">12345</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">people_outline</i>
                        </div>
                        <div class="content">
                            <div class="text">CLIENTES NOVOS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"  >
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">auto_stories</i>
                        </div>
                        <div class="content">
                            <div class="text">LIVROS VENDIDOS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">insights</i>
                        </div>
                        <div class="content">
                            <div class="text">META DO MÊS</div>
                            <div class="number sales-count-to" data-from="0" data-to="250000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <!--o VCC é REAL e sabe varrer pra debaixo do tapete-->
                <div style = "margin-left: -1000000px;" class="col-lg-3 col-md-3 col-sm-6 col-xs-12"  id="real_time_chart">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink content">
                          <div class="text"><strong>VENDAS DA SEMANA</strong></div>
                            <div class="sparkline"  data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="85px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)" style="margin-top:10px">
                                 1,8,3,4,2,6,7
                            </div>


                            <ul class="dashboard-stat-list" style="margin-top: 0px;">
                                <li>
                                    HOJE
                                    <span class="pull-right"><b>1200</b> <small>VENDAS</small></span>
                                </li>
                                <li>
                                    ONTEM
                                    <span class="pull-right"><b>3 872</b> <small>VENDAS</small></span>
                                </li>
                                <li>
                                    SEMANA PASSADA
                                    <span class="pull-right"><b>26 582</b> <small>VENDAS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="m-b--35 font-bold">TOP CLIENTES</div>
                            <br>
                            <ul class="dashboard-stat-list">
                                <li>
                                    <?php
                                        $select_topclientes = "select c.nomecli, sum(lvd.qtdlivros)as quant from clientes c, vendas vd, livrosdavenda lvd
                                        where c.idclientes = vd.idcliente and vd.idvendas = lvd.idvenda group by c.nomecli
                                        order by sum(lvd.qtdlivros) DESC LIMIT 5;";
                                        $result_topclientes = mysqli_query($conex, $select_topclientes);
                                        $topclientes[] = mysqli_fetch_all($result_topclientes);
                                    ?>
                                    <?php print_r($topclientes[0][0][0])?>
                                    <span class="pull-right"><b><?php print_r($topclientes[0][0][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r($topclientes[0][1][0])?>
                                    <span class="pull-right"><b><?php print_r($topclientes[0][1][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r($topclientes[0][2][0])?>
                                    <span class="pull-right"><b><?php print_r($topclientes[0][2][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r($topclientes[0][3][0])?>
                                    <span class="pull-right"><b><?php print_r($topclientes[0][3][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r($topclientes[0][4][0])?>
                                    <span class="pull-right"><b><?php print_r($topclientes[0][4][1])?></b> <small>UNID</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">TOP LIVROS</div>
                            <br>
                            <ul class="dashboard-stat-list">
                                <li>
                                    <?php
                                        $select_toplivros = "select lv.nomelivro, sum(vend.qtdlivros) as sum from livrosdavenda vend, livros lv
                                        where lv.idlivros = vend.idlivro group by lv.nomelivro order by sum(vend.qtdlivros) DESC;";
                                        $result_toplivros = mysqli_query($conex, $select_toplivros);
                                        $toplivros[] = mysqli_fetch_all($result_toplivros);
                                    ?>
                                    <?php print_r ($toplivros[0][0][0])?>

                                    <span class="pull-right"><b><?php print_r($toplivros[0][0][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r ($toplivros[0][1][0])?>
                                    <span class="pull-right"><b><?php print_r ($toplivros[0][1][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r ($toplivros[0][2][0])?>
                                    <span class="pull-right"><b><?php print_r ($toplivros[0][2][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r ($toplivros[0][3][0])?>
                                    <span class="pull-right"><b><?php print_r ($toplivros[0][3][1])?></b> <small>UNID</small></span>
                                </li>
                                <li>
                                    <?php print_r ($toplivros[0][4][0])?>
                                    <span class="pull-right"><b><?php print_r ($toplivros[0][4][1])?></b> <small>UNID</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header bg-black">
                            <h2>QUADRO DE VENDAS DO MÊS </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive js-sweetalert" >
                                <table id="mainTable" class="table table-hover dashboard-task-infos table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>

                                            <th>Vendidos</th>
                                            <th>Progresso</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>id</td>
                                            <td>Linda</td>

                                            <td>5</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>id</td>
                                            <td>Juliette</td>

                                            <td>8</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>id</td>
                                            <td>Gil</td>

                                            <td>15</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>id</td>
                                            <td>Paula</td>

                                            <td>4</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr></tr>

                                    </tbody>
                                </table>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header bg-black">
                            <h2>VENDAS POR HORÁRIO</h2>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart" style="margin-top: -25px"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
    <script src="js/pages/ui/dialogs.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/pages/tables/editable-table.js"></script>
    <script src="js/pages/tables/editable.js"></script>

    <script src="plugins/editable-table/mindmup-editabletable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
