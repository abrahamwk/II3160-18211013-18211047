<?php

$DEFAULT_ACTION = 'PageNotFound';

$pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
$pathParts = explode('/', substr($pathInfo, 1));
$action = isset($pathParts[0]) ? $pathParts[0] : $DEFAULT_ACTION;

if (function_exists($action)) {
    $action($pathParts);
} else {
    PageNotFound();
}

function PageNotFound($parts = null)
{
    print 'The function specified is invalid.';
}


function mahasiswa($parts)
{
$file = file_get_contents('./tab2.xml');

header ("Content-Type:text/xml");

echo $file;
}

function pegawai($parts)
{
    error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors', true);
	ini_set('auto_detect_line_endings', true);

	$inputCSV   = 'tab1.csv';
	$outputXML  = 'csvoutput.xml';

	//buka file CSV
	$inputFile  = fopen($inputCSV, 'rt');

	//ambil header file
	$headers = fgetcsv($inputFile);

	//create dom document
	$doc  = new DomDocument();
	$doc->formatOutput   = true;


	$root = $doc->createElement('root');
	$root = $doc->appendChild($root);

	while (($row = fgetcsv($inputFile)) !== FALSE) {
	 $container = $doc->createElement('kantor');
	 foreach ($headers as $i => $header) {
	  $child = $doc->createElement($header);
	  $child = $container->appendChild($child);
	     $value = $doc->createTextNode($row[$i]);
	     $value = $child->appendChild($value);
	 }
	 $root->appendChild($container);
	}

	$strxml = $doc->saveXML();
	$handle = fopen($outputXML, "w");
	fwrite($handle, $strxml);
	fclose($handle);

	header ("Content-Type:text/xml");

	echo $strxml;
}

function hp($parts){
	//setting database mysql
	$config['host']            = "localhost";
	$config['username']        = "root";
	$config['password']        = "datamining";
	$config['database_name']   = "gadget";
	$config['table_name']      = "handphone";
	 
	//connect to host
	mysql_connect($config['host'],$config['username'],$config['password']);
	//select database
	@mysql_select_db($config['database_name']) or die( "Database not available!");

	$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
	$root_element = $config['table_name']."s";
	$xml         .= "<$root_element>";

	//convert to XML
	$sql = "SELECT * FROM ".$config['table_name'];
	 
	$result = mysql_query($sql);
	if (!$result) {
	    die('Invalid query: ' . mysql_error());
	}
	 
	if(mysql_num_rows($result)>0) {
	   while($result_array = mysql_fetch_assoc($result)) {
	      $xml .= "<".$config['table_name'].">";
	      foreach($result_array as $key => $value) {
	         $xml .= "<$key>";
	         $xml .= "<![CDATA[$value]]>";
	         $xml .= "</$key>";
	      }
	      $xml.="</".$config['table_name'].">";
	   }
	}

	//close elemen root
	$xml .= "</$root_element>";
	 
	//kirim header xml ke web browser
	header ("Content-Type:text/xml");
	 
	//cetak data XML
	echo $xml;	
}

?>