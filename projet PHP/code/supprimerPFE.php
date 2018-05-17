<?php
$ID1=$_POST['ID1'];
$dom = new DomDocument();
$dom->load('ProjetXMLinterface.xml');
$pfe = $dom->documentElement;
$PFE = $pfe->getElementsByTagName("PFE");

$projet = $pfe->getElementsByTagName("projet");
 
foreach($projet as $pr)
{
if ($pr->hasAttribute("ID1") == (string)$ID) 
	{
	if ($pr->getAttribute("ID1") == (string)$ID)
		{
		//print_r($animation);
		$pfe->removeChild($pr);
		}
	}
}
$dom->save('ProjetXMLinterface.xml');
header("Location: supprimer.php");
exit;
?>