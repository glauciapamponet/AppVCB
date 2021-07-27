<?php
    include_once ("../conex.php");
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastro Vendas | VCB</title>
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

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
        function myFunction() {
            var x = document.getElementById("myInput").value;
            document.getElementById("demo").innerHTML = "You wrote: " + x;
        }
    </script>

</head>

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
        <div  class="container-fluid">
            <!-- Multi Column -->
            <div   class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div  class="card">
                        <div class="header">
                            <h2>
                                CADASTRO VENDAS
                            </h2>
                        </div>
                        
                        <div class="body">
                            <form   action="../docsphp/proc_cadvend.php" method= "POST">
                                <div id="crud_table" class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Cliente</b>
                                        <select name="select_cliente" class="form-control show-tick">
                                            <?php
                                                $result_cli = "SELECT idclientes, nomecli FROM clientes";
                                                $resultado_cli = mysqli_query($conex, $result_cli);
                                                while($row_cli = mysqli_fetch_assoc($resultado_cli)) {
                                                    echo '<option value ="'.$row_cli[idclientes].'">'.$row_cli[nomecli].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Vendedor</b>
                                        <select name="select_vendedor" class="form-control show-tick">
                                            <?php
                                                $result_func = "SELECT idfuncionarios, nomefunc FROM funcionarios WHERE idcargo=4";
                                                $resultado_func = mysqli_query($conex, $result_func);
                                                while($row_func = mysqli_fetch_assoc($resultado_func)) {
                                                    echo '<option value ="'.$row_func[idfuncionarios].'">'.$row_func[nomefunc].'</option>';
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <b>Caixa</b>
                                        <select name="select_caixa" class="form-control show-tick">
                                            <?php
                                                $result_func = "SELECT idfuncionarios, nomefunc FROM funcionarios WHERE idcargo=2";
                                                $resultado_func = mysqli_query($conex, $result_func);
                                                while($row_func = mysqli_fetch_assoc($resultado_func)) {
                                                    echo '<option value ="'.$row_func[idfuncionarios].'">'.$row_func[nomefunc].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <b>Tipo de Pagamento</b>
                                        <select name="tipopag" class="form-control show-tick">
                                            <option>Débito</option>
                                            <option>Crédito</option>
                                            <option>Dinheiro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="submit" id="save" value= "CADASTRAR" class="btn btn-primary btn-lg m-l-15 waves-effect">
                                    </div>
                                </div> 
                                <div id="crud_table" class="row-clearfix">
                                    <div class="idlivros col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="idlivro" class="form-control" placeholder="Id do Livro" maxlength="45" required="required" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qtdlivros col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="qtdlivros" class="form-control" placeholder="Quantidade" maxlength="45" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"><button type="button" id="add" class="btn btn-primary btn-sm m-l-15 waves-effect"><i class="material-icons">add_circle_outline</i></button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" language="javascript"></script>
    <script>
        $(document).ready(function(){
        var count = 1;
        $('#add').click(function(){
            count = count + 1;
            var html_code = "<div class='row-clearfix' id='row"+count+"'>";
            html_code += "<div class='idlivros col-md-4'><div class='form-group'><div class='form-line'><input type='text' name='idlivro' class='form-control' placeholder='Id do Livro' maxlength='45' required='required' autofocus></div></div></div>";
            html_code += "<div class='qtdlivros col-md-4'><div class='form-group'><div class='form-line'><input type='text' name='qtdlivros' class='form-control' placeholder='Quantidade do Livro' maxlength='45' required='required'></div></div></div>";
            html_code += "<div class='col-md-3'><div class='form-group'><div class='form-line'><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-sm remove'>-</button></div></div></div>";
            html_code += "</div>";
        $('#crud_table').append(html_code);
        });

        $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
        });

        //  $('#save').click(function(){
        //   var id_livros = [];
        //   var qtd_livros = [];
        //   $('.idlivros').each(function(){
        //    id_livros.push($(this).text());
        //   });
        //   $('.qtdlivros').each(function(){
        //    qtd_livros.push($(this).text());
        //   });
        //   $.ajax({
        //    url:"insert.php",
        //    method:"POST",
        //    data:{id_livros:id_livros, qtd_livros:qtd_livros},
        //    success:function(data){
        //     alert(data);
        //     $("td[contentEditable='true']").text("");
        //     for(var i=2; i<= count; i++)
        //     {
        //      $('tr#'+i+'').remove();
        //     }
        //    }
        //   });
        //  }
        // );
        });
</script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../plugins/multi-select/js/jquery.multi-select.js"></script>
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


    <!-- Custom Js -->
    <script src="../js/pages/forms/advanced-form-elements.js"></script>

</body>

</html>
