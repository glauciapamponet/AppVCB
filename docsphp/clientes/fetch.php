
<?php
//fetch.php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");
$columns = array('c.idclientes', 'c.nomecli', 'c.rgcli', 'c.cpfcli', 'c.datanascim', 'tc.dddcli', 'tc.numerocli', 'tc.tipotelci');

$query = "SELECT c.idclientes, c.nomecli, c.rgcli, c.cpfcli, c.datanascim, tc.dddcli, tc.numerocli, tc.tipotelci
FROM clientes c LEFT JOIN telecli tc ON c.idclientes = tc.idcli ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE c.idclientes LIKE "%'.$_POST["search"]["value"].'%"
 OR c.nomecli LIKE "%'.$_POST["search"]["value"].'%"
 OR c.rgcli LIKE "%'.$_POST["search"]["value"].'%"
 OR c.cpfcli LIKE "%'.$_POST["search"]["value"].'%"
 OR c.datanascim LIKE "%'.$_POST["search"]["value"].'%"
 OR tc.dddcli LIKE "%'.$_POST["search"]["value"].'%"
 OR tc.numerocli LIKE "%'.$_POST["search"]["value"].'%"
 OR tc.tipotelci LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY c.idclientes DESC ';
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
 $sub_array[] = '<div data-id="'.$row["idclientes"].'" data-column="idclientes">' . $row["idclientes"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idclientes"].'" data-column="nomecli">' . $row["nomecli"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idclientes"].'" data-column="rgcli">' . $row["rgcli"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idclientes"].'" data-column="cpfcli">' . $row["cpfcli"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idclientes"].'" data-column="datanascim">' . $row["datanascim"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idclientes"].'" data-column="dddcli">' . $row["dddcli"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idclientes"].'" data-column="numerocli">' . $row["numerocli"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idclientes"].'" data-column="tipotelci">' . $row["tipotelci"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["idclientes"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT c.idclientes, c.nomecli, c.rgcli, c.cpfcli, c.datanascim, tc.dddcli, tc.numerocli, tc.tipotelci
 FROM clientes c LEFT JOIN telecli tc ON c.idclientes = tc.idcli";
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
