<?php
    $db_connection = pg_connect("host=localhost dbname=collpublications user=postgres password=''");
	
	if($db_connection){
	echo "Connected".'<br/>';
	}
	
	
    $result = pg_query($db_connection, "SELECT * FROM journal.author_info LIMIT 5");
	
	
	while ($row = pg_fetch_row($result)) {
  echo "$row[0] $row[1] $row[2]\n".'<br/>';
}

pg_close($db_connection); 

	
?>