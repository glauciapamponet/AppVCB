<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Clientes - VCB</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/fontawsome/all.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />


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
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">VCB - Voodoo Chicken Bookstore</a>
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
                    <img src="../images/gerente.jpg" width="120" height="120" alt="User" style="margin-top:-12px;">
                </div>
                <div class="info-container" style="margin-top:-100px; margin-left:140px;">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div style="white-space:normal">
                        Robyn Rihanna Fenty
                      </div>
                      <div style="magin-top:-10px"><h6 style="margin:0px;">Gerente</h6></div>
                      </div>
                    <!-- <div class="email">rihanna@vcb.com</div> -->
                    <div class="" style="margin-top: 10px; text-align: right; margin-right:-8px;" >
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
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CLIENTES
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="user_data" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>RG</th>
                                            <th>CPF</th>
                                            <th>Data Nascimento</th>
                                            <th>DDD</th>
                                            <th>Numero</th>
                                            <th>Tipo</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>ID</th>
                                          <th>Nome</th>
                                          <th>RG</th>
                                          <th>CPF</th>
                                          <th>Data Nascimento</th>
                                          <th>DDD</th>
                                          <th>Numero</th>
                                          <th>Tipo</th>
                                          <th></th>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" language="javascript" >
     $(document).ready(function(){

      fetch_data();

      function fetch_data()
      {
       var dataTable = $('#user_data').DataTable({
        "processing" : true,
        "serverSide" : true,
        "order" : [],
        "ajax" : {
         url:"../docsphp/clientes/fetch.php",
         type:"POST"
        }
       });
      }

      function update_data(id, column_name, value)
      {
       $.ajax({
        url:"../docsphp/clientes/update.php",
        method:"POST",
        data:{id:id, column_name:column_name, value:value},
        success:function(data)
        {
         $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
         $('#user_data').DataTable().destroy();
         fetch_data();
        }
       });
       setInterval(function(){
        $('#alert_message').html('');
       }, 5000);
      }

      $(document).on('blur', '.update', function(){
       var id = $(this).data("id");
       var column_name = $(this).data("column");
       var value = $(this).text();
       update_data(id, column_name, value);
      });


      $(document).on('click', '.delete', function(){
       var id = $(this).attr("id");
       if(confirm("Tem certeza?"))
       {
        $.ajax({
         url:"../docsphp/clientes/delete.php",
         method:"POST",
         data:{id:id},
         success:function(data){
          $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
          $('#user_data').DataTable().destroy();
          fetch_data();
         }
        });
        setInterval(function(){
         $('#alert_message').html('');
        }, 5000);
       }
      });
     });
    </script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>
