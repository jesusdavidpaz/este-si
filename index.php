echo "hola este es un mensaje jjjaja"
<?php

$dbname=getenv("POSTGRESQL_DATABASE");
//$dbuser=getenv("POSTGRESQL_USER");
$dbpassword=getenv("POSTGRESQL_PASSWORD");
//$dbport=getenv("5432");
$conn=pg_connect("dbname='$dbname' password='$dbpassword'");   

if (!$conn) {
  echo "Ocurri� un error.\n";
  exit;
}

$result = pg_query($conn, "SELECT * FROM usuario");
if (!$result) {
  echo "Ocurrio un error.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "id: $row[0] nombre: $row[1] apellido: $row[2]";
  echo "<br/>";
}

?>
