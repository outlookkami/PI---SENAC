<?php                
require 'calendarioConexao.php'; 
$titulo_evento = $_POST['titulo_evento'];
$event_start_date = date("y-m-d", strtotime($_POST['event_start_date'])); 
$event_end_date = date("y-m-d", strtotime($_POST['event_end_date'])); 
			
$insert_query = "insert into `calendar_event_master`(`titulo_evento`,`event_start_date`,`event_end_date`) values ('".$titulo_evento."','".$event_start_date."','".$event_end_date."')";             
if(mysqli_query($con, $insert_query))
{
	$data = array(
                'status' => true,
                'msg' => 'Evento adicionado com sucesso!'
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Desculpe, evento não adicionado.'				
            );
}
echo json_encode($data);	
?>
