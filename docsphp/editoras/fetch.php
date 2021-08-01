
<?php
//fetch.php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");
$columns = array('ed.ideditoras', 'ed.nomeedit', 'idrepresedit', 'rep.nomerepr', 'rep.cargo', 'rep.emailrepr','rep.telefonerepre');

$query = "SELECT ed.*, rep.* FROM editoras ed LEFT JOIN represedit rep ON ed.ideditoras = rep.idedit";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE ed.ideditoras LIKE "%'.$_POST["search"]["value"].'%"
 OR ed.nomeedit LIKE "%'.$_POST["search"]["value"].'%"
 OR rep.nomerepr LIKE "%'.$_POST["search"]["value"].'%"
 OR rep.cargo LIKE "%'.$_POST["search"]["value"].'%"
 OR rep.telefonerepre LIKE "%'.$_POST["search"]["value"].'%"
 OR rep.emailrepr LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY ed.ideditoras DESC ';
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
 $sub_array[] = '<div data-id="'.$row["ideditoras"].'" data-column="ideditoras">' . $row["ideditoras"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["ideditoras"].'" data-column="nomeedit">' . $row["nomeedit"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idrepresedit"].'" data-column="nomerepr">' . $row["nomerepr"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idrepresedit"].'" data-column="cargo">' . $row["cargo"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idrepresedit"].'" data-column="emailrepr">' . $row["emailrepr"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["idrepresedit"].'" data-column="telefonerepre">' . $row["telefonerepre"] . '</div>';
 // $sub_array[] = '<div data-id="'.$row["idlivros"].'" data-column="capalivro">' . $row["capalivro"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["ideditoras"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT ed.*, rep.nomerepr, rep.cargo, rep.emailrepr, rep.telefonerepre
 FROM editoras ed LEFT JOIN represedit rep ON ed.ideditoras = rep.idedit";
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
