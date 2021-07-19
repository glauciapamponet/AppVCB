<?php
$servername = "localhost";
$username = "teste";
$password = "mysql";
$dbname = "vcb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array(
	0 =>'idclientes',
	1 =>'nomecli',
	2 => 'rgcli',
	3=> 'cpfcli',
	4=> 'datanascim',
	5 => 'dddcli',
	6 => 'numerocli',
	7 => 'tipotelci'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT c.idclientes, c.nomecli, c.rgcli, c.cpfcli, c.datanascim, tc.dddcli, tc.numerocli, tc.tipotelci
FROM clientes c INNER JOIN telecli tc ON c.idclientes = tc.idcli";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT c.idclientes, c.nomecli, c.rgcli, c.cpfcli, c.datanascim, tc.dddcli, tc.numerocli, tc.tipotelci
FROM clientes c INNER JOIN telecli tc ON c.idclientes = tc.idcli WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( c.idclientes LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR c.nomecli LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR c.rgcli LIKE '".$requestData['search']['value']."%'  ";
	$result_usuarios.=" OR c.cpfcli LIKE '".$requestData['search']['value']."%'  ";
	$result_usuarios.=" OR c.datanascim LIKE '".$requestData['search']['value']."%') ";

}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {
	$dado = array();
	$dado[] = $row_usuarios["idclientes"];
	$dado[] = $row_usuarios["nomecli"];
	$dado[] = $row_usuarios["rgcli"];
	$dado[] = $row_usuarios["cpfcli"];
	$dado[] = $row_usuarios["datanascim"];
	$dado[] = $row_usuarios["dddcli"];
	$dado[] = $row_usuarios["numerocli"];
	$dado[] = $row_usuarios["tipotelci"];
	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela
);

echo json_encode($json_data);  //enviar dados como formato json
