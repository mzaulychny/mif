<?php
require_once('core.php');
?>
<hr>

<table cellpadding=3 border=0 width=100%>
<tr>
<td width=200>
<img src=imgs/logo.png height=190>
</td>
<td align="center" width=400 >
<p class=logo>Міжнародний Інститут Фінансів</p>
<p class=logo>International institute of finance</p>
</td>
<td width=60%>

</td>
</tr>
<tr>
 <td>
 </td>
 <td>
 </td>
 <td align=right>
   	 	<?php foreach ($navmenu as $navmenu_element){ 
		 	       if($navmenu_element['Side']=='Top'){
		 	?>
		 		     <a href=<?php echo($navmenu_element['Link']); ?>><?php echo($navmenu_element['Name']); ?></a> &nbsp;
		 	<?php
		 	       }
		 		  } 
		 	?>
 </td>
</tr>
</table>

<hr>
	
<table cellpadding=2 border=0 width=100%>
	<tr>
		<td width=200 valign=top>
				 	
		 	<?php foreach ($navmenu as $navmenu_element){ 
		 	       if($navmenu_element['Side']=='Left'){
		 	?>
		 		    <a href=<?php echo($navmenu_element['Link']); ?>><?php echo($navmenu_element['Name']); ?></a><br>
		 	<?php
		 	       }
		 		  } 
		 	?>
		
		</td>
		<td valign=top>
		 	<?php 		 		
		 		$page2show = RouterGet('url');
		 		if($page2show!=''){
		 		  RouterInit($page2show, $navmenu);
		 		  require_once($page2show);
		 		}
	     	?>
		</td>
		<td width=150 valign=top>
			<?php foreach ($navmenu as $navmenu_element){ 
		 	       if($navmenu_element['Side']=='Right'){
		 	?>
		 		    <a href=<?php echo($navmenu_element['Link']); ?>><?php echo($navmenu_element['Name']); ?></a><br>
		 	<?php
		 	       }
		 		  } 
		 	?>
		</td>
	</tr>	
</table>

<?php 
if($debug==1){
	echo '<pre>';
	var_dump($navmenu);
	//var_dump($spinosaurus);
	//var_dump($dinos);
	var_dump($_GET);
	echo '</pre>';
}
?>