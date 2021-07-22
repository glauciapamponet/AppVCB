
<?php
//fetch.php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");
$columns = array('fu.idfuncionarios', 'fu.nomefunc', 'fu.RGfunc', 'fu.cpffunc', 'cg.nomecargo', 'tn.nome','tn.horainicio',
'tn.horafim', 'cg.salario', 'estq.corredorestoque', 'vend.comissaovend');

$query = "SELECT fu.idfuncionarios, fu.nomefunc, fu.RGfunc, fu.cpffunc, cg.nomecargo, tn.nome, tn.horainicio,
 tn.horafim, cg.salario, IF(estq.corredorestoque is null, 0, estq.corredorestoque) as corredorestoque,
 IF(vend.comissaovend is null, 0, vend.comissaovend)as comissaovend FROM funcionarios fu LEFT JOIN cargos cg ON
 fu.idcargo = cg.idcargo LEFT JOIN turnos tn ON fu.idturno = tn.idturno LEFT JOIN estoquista estq ON
 estq.funcionarios_idfuncionarios = fu.idfuncionarios LEFT JOIN vendedor vend ON vend.funcionarios_idfuncionarios = fu.idfuncionarios";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE fu.idfuncionarios LIKE "%'.$_POST["search"]["value"].'%"
 OR fu.nomefunc LIKE "%'.$_POST["search"]["value"].'%"
 OR cg.nomecargo LIKE "%'.$_POST["search"]["value"].'%"
 OR cg.salario LIKE "%'.$_POST["search"]["value"].'%"
 OR estq.corredorestoque LIKE "%'.$_POST["search"]["value"].'%"
 OR vend.comissaovend LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY idfuncionarios ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["idfuncionarios"].'" data-column="idfuncionarios">' . $row["idfuncionarios"] . '</div>';
 $sub_array[] = '<div contenteditable class="updatef" data-id="'.$row["idfuncionarios"].'" data-column="nomefunc">' . $row["nomefunc"] . '</div>';
 $sub_array[] = '<div contenteditable class="updatef" data-id="'.$row["idfuncionarios"].'" data-column="RGfunc">' . $row["RGfunc"] . '</div>';
 $sub_array[] = '<div contenteditable class="updatef" data-id="'.$row["idfuncionarios"].'" data-column="cpffunc">' . $row["cpffunc"] . '</div>';
 $sub_array[] = '<div contenteditable class="updatef" data-id="'.$row["idfuncionarios"].'" data-column="nomecargo">' . $row["nomecargo"] . '</div>';
 $sub_array[] = '<div contenteditable class="updatef" data-id="'.$row["idfuncionarios"].'" data-column="nome">' . $row["nome"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idfuncionarios"].'" data-column="horainicio">' . $row["horainicio"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idfuncionarios"].'" data-column="horafim">' . $row["horafim"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idfuncionarios"].'" data-column="salario">' . $row["salario"] . '</div>';
 if($row["corredorestoque"] == "0") {$sub_array[] = '<div class="label bg-black" data-id="'.$row["idfuncionarios"].'" data-column="corredorestoque">Não Tem</div>'; }
 elseif ($row["corredorestoque"] == "Inserir") {$sub_array[] = '<div contenteditable class="updatef btn btn-primary btn-sm" data-id="'.$row["idfuncionarios"].'" data-column="corredorestoque">' . $row["corredorestoque"] . '</div>';}
 else {$sub_array[] = '<div contenteditable class="updatef" data-id="'.$row["idfuncionarios"].'" data-column="corredorestoque">' . $row["corredorestoque"] . '</div>';}
 if($row["comissaovend"] == 0.00) {$sub_array[] = '<div class="label bg-black" data-id="'.$row["idfuncionarios"].'" data-column="comissaovend">Não Tem</div>'; }
 else {$sub_array[] = '<div contenteditable class="updatef" data-id="'.$row["idfuncionarios"].'" data-column="comissaovend">' . $row["comissaovend"] . '</div>';}
 // $sub_array[] = '<div data-id="'.$row["idlivros"].'" data-column="capalivro">' . $row["capalivro"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs deletef" id="'.$row["idfuncionarios"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT fu.idfuncionarios, fu.nomefunc, fu.RGfunc, fu.cpffunc, cg.nomecargo, tn.nome, tn.horainicio,
  tn.horafim, cg.salario, IF(estq.corredorestoque is null, 0, estq.corredorestoque) as corredorestoque,
  IF(vend.comissaovend is null, 0, vend.comissaovend)as comissaovend FROM funcionarios fu LEFT JOIN cargos cg ON
  fu.idcargo = cg.idcargo LEFT JOIN turnos tn ON fu.idturno = tn.idturno LEFT JOIN estoquista estq ON
  estq.funcionarios_idfuncionarios = fu.idfuncionarios LEFT JOIN vendedor vend ON vend.funcionarios_idfuncionarios = fu.idfuncionarios";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
