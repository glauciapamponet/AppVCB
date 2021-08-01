<?php
//fetch.php
$connect = mysqli_connect("localhost", "teste", "mysql", "vcb");


$columns = array("v.idvendas", "itens", "total", "cli.nomecli", "dataehora", "v.tipopag", "nomecaixa", "nomevend");

$query = "select f.idfuncionarios, f.nomefunc, (select sum(ldv.qtdlivros) from livrosdavenda ldv, vendas vd where ldv.idvenda = vd.idvendas and
vd.idvend = f.idfuncionarios) as vendidos from funcionarios f where f.idcargo in (select idcargo from cargos where nomecargo='Vendedor')";

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query);

$data = array();

while($row = mysqli_fetch_array($result)) //(`idvendas`, `ITENS`, `TOTAL`, `nomecli`, `dataehora`, `tipopag`, 'nomecaixa');
{
 $sub_array = array();
 $sub_array[] = '<tr>'.$row["idfuncionarios"].'</td>';
 $sub_array[] = '<tr>'.$row["nomefunc"].'</td>';
 $sub_array[] = '<tr>'.$row["vendidos"].'</td>';
 $sub_array[] = '<td><div class="progress"><div class="progress-bar bg-purple" role="progressbar" aria-valuenow="'.$row["vendidos"].'" aria-valuemin="0" aria-valuemax="1000"
 style="width: 62%"></div></div></td>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "select f.idfuncionarios, f.nomefunc, (select sum(ldv.qtdlivros) from livrosdavenda ldv, vendas vd where ldv.idvenda = vd.idvendas and
vd.idvend = f.idfuncionarios) as vendidos from funcionarios f where f.idcargo in (select idcargo from cargos where nomecargo='Vendedor')";

 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data,
);

echo json_encode($output);
?>
