<?php
function connectar()
{
	//connexi� BD del servidor local
	mysql_connect("localhost","root",""); // Connexi� servidor Mysql
	mysql_select_db("Taller_xml"); // Escollim Base de Dades
	
	//Per al nostre hosting ser� :
	
	//connexi� BD del servidor local
	//mysql_connect("mysql1.000webhost.com","a5500181_xml","**contrasenya***"); // Connexi� servidor Mysql
	//mysql_select_db("a5500181_xml"); // Escollim Base de Dades
	
}
?>
