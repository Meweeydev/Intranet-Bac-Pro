
    <?php

try {
	 $access=new pdo('mysql:host=localhost;dbname=intranet;charset=utf8', 'admin', 'Huscrecerman71*');
     
     $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
