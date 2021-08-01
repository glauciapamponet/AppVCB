
<?php
//fetch.php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");
$columns = array('dep.iddependente', 'dep.nome', 'dep.datanasc', 'dep.relacao', 'dep.idfunc', 'fu.nomefunc');

$query = "SELECT dep.*, fu.nomefunc FROM dependentes dep LEFT JOIN funcionarios fu ON dep.idfunc = fu.idfuncionarios ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE dep.iddependente LIKE "%'.$_POST["search"]["value"].'%"
 OR dep.nome LIKE "%'.$_POST["search"]["value"].'%"
 OR dep.datanasc LIKE "%'.$_POST["search"]["value"].'%"
 OR dep.relacao LIKE "%'.$_POST["search"]["value"].'%"
 OR fu.nomefunc LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY dep.iddependente ASC ';
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
 $sub_array[] = '<div data-id="'.$row["iddependente"].'" data-column="iddependente">' . $row["iddependente"] . '</div>';
 $sub_array[] = '<div contenteditable class="updated" data-id="'.$row["iddependente"].'" data-column="nome">' . $row["nome"] . '</div>';
 $sub_array[] = '<div contenteditable class="updated" data-id="'.$row["iddependente"].'" data-column="datanasc">' . $row["datanasc"] . '</div>';
 $sub_array[] = '<div contenteditable class="updated" data-id="'.$row["iddependente"].'" data-column="relacao">' . $row["relacao"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idfunc"].'" data-column="nomefunc">' . $row["nomefunc"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs deleted" id="'.$row["iddependente"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT dep.*, fu.nomefunc FROM dependentes dep LEFT JOIN funcionarios fu ON dep.idfunc = fu.idfuncionarios";
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
