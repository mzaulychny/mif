<?php

function RouterGet(string $gid)
{
	$gval='';
	if(array_key_exists($gid, $_GET))
	{$gval = $_GET[$gid];}
	$gval = RouterSecurityCheck($gval);
	return $gval;
}

function RouterSecurityCheck(string $lnk)
{
	$rlnk = '';
	if($lnk!=''){
	   if(file_exists($lnk))
	     {$rlnk = $lnk; }
	     else
	     {$rlnk='blank.php';}
	}
	return $rlnk;
}

function RouterInit(string $gid, $navmenu)
{	
	$gval=RouterSecurityCheck($gid);
	if($gval!=''){		
		$turl='?url='.$gval;		
		foreach ($navmenu as $navmenu_element ){
			if($navmenu_element['Link']==$turl){
				echo '<b>';
				echo $navmenu_element['Name'];
				echo '</b><br>';
			}
		}		
	}		
}

?>