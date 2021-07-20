
<?php
//fetch.php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");
$columns = array('lv.idlivros', 'lv.nomelivro', 'lv.precolivro', 'ed.nomeedit', 'lv.qtdpaglivro', 'lv.qtdestoque', 'lv.capalivro');

$query = "SELECT lv.idlivros, lv.nomelivro, lv.precolivro, ed.nomeedit, lv.qtdpaglivro, lv.qtdestoque, lv.capalivro
FROM livros lv INNER JOIN editoras ed ON lv.idedit = ed.ideditoras ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE lv.idlivros LIKE "%'.$_POST["search"]["value"].'%"
 OR lv.nomelivro LIKE "%'.$_POST["search"]["value"].'%"
 OR lv.precolivro LIKE "%'.$_POST["search"]["value"].'%"
 OR ed.nomeedit LIKE "%'.$_POST["search"]["value"].'%"
 OR lv.qtdpaglivro LIKE "%'.$_POST["search"]["value"].'%"
 OR lv.qtdestoque LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY lv.idlivros DESC ';
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
 $sub_array[] = '<div data-id="'.$row["idlivros"].'" data-column="idlivros">' . $row["idlivros"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idlivros"].'" data-column="nomelivro">' . $row["nomelivro"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idlivros"].'" data-column="precolivro">' . $row["precolivro"] . '</div>';
 $sub_array[] = '<div  data-id="'.$row["idlivros"].'" data-column="nomeedit">' . $row["nomeedit"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idlivros"].'" data-column="qtdpaglivro">' . $row["qtdpaglivro"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idlivros"].'" data-column="qtdestoque">' . $row["qtdestoque"] . '</div>';
 // $sub_array[] = '<div data-id="'.$row["idlivros"].'" data-column="capalivro">' . $row["capalivro"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["idlivros"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT lv.idlivros, lv.nomelivro, lv.precolivro, ed.nomeedit, lv.qtdpaglivro, lv.qtdestoque, lv.capalivro
 FROM livros lv INNER JOIN editoras ed ON lv.idedit = ed.ideditoras";
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
