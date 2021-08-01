
<?php
//fetch.php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb1");


$columns = array("v.idvendas", "itens", "total", "cli.nomecli", "dataehora", "v.tipopag", "nomecaixa", "nomevend");

$query = "SELECT v.idvendas,  DATE_FORMAT(v.dataehora, '%d %b %Y, %k:%i') AS dataehora,SUM(ldv.qtdlivros) AS itens,
SUM((l.precolivro * ldv.qtdlivros)) AS total, cli.nomecli, v.tipopag, fu.nomefunc as nomecaixa, f.nomefunc as nomevend
FROM vendas v LEFT OUTER JOIN livrosdavenda ldv ON v.idvendas = ldv.idvenda LEFT OUTER JOIN livros l ON l.idlivros = ldv.idlivro
LEFT OUTER JOIN clientes cli ON v.idcliente = cli.idclientes LEFT OUTER JOIN funcionarios fu ON v.idcaixa = fu.idfuncionarios
LEFT OUTER JOIN funcionarios f ON v.idvend = f.idfuncionarios";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE v.idvendas LIKE "%'.$_POST["search"]["value"].'%"
 OR cli.nomecli LIKE "%'.$_POST["search"]["value"].'%"
 OR dataehora LIKE "%'.$_POST["search"]["value"].'%"
 OR v.tipopag LIKE "%'.$_POST["search"]["value"].'%"
 OR fu.nomefunc LIKE "%'.$_POST["search"]["value"].'%"
 OR f.nomefunc LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

$query .= 'GROUP BY v.idvendas ';

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY dataehora DESC ';
}


$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$total_order = 0;

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result)) //(`idvendas`, `ITENS`, `TOTAL`, `nomecli`, `dataehora`, `tipopag`, 'nomecaixa');
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="idvendas">' . $row["idvendas"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="itens">' . $row["itens"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="total">' . $row["total"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="nomecli">' . $row["nomecli"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="dataehora">' . $row["dataehora"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="tipopag">' . $row["tipopag"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="nomecaixa">' . $row["nomecaixa"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["idvendas"].'" data-column="nomevend">' . $row["nomevend"] . '</div>';

 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["idvendas"].'">Delete</button>';
 $total_order = $total_order + floatval($row["total"]);
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT v.idvendas,  DATE_FORMAT(v.dataehora, '%d %b %Y, %k:%i') AS dataehora,SUM(ldv.qtdlivros) AS itens,
SUM((l.precolivro * ldv.qtdlivros)) AS total, cli.nomecli, v.tipopag, fu.nomefunc as nomecaixa, f.nomefunc as nomevend
FROM vendas v LEFT OUTER JOIN livrosdavenda ldv ON v.idvendas = ldv.idvenda LEFT OUTER JOIN livros l ON l.idlivros = ldv.idlivro
LEFT OUTER JOIN clientes cli ON v.idcliente = cli.idclientes LEFT OUTER JOIN funcionarios fu ON v.idcaixa = fu.idfuncionarios
LEFT OUTER JOIN funcionarios f ON v.idvend = f.idfuncionarios";

 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data,
 "total"  => "R$ ".number_format($total_order, 2, ",", ".")
);

echo json_encode($output);
?>
