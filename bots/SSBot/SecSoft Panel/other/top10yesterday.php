<?php require_once('inc/session.php');
echo '<h4>Top 10 gestern</h4><table>
	  <tr>
	    <th>Country</th>
		<th>Bots</th>
		<th>Percent</th>
	   </tr>
	  <tr>';
									  
$query1 = mysql_query("SELECT COUNT(*) AS count FROM bots WHERE install LIKE '%$yesterday%'");
						
while($row = mysql_fetch_array($query1)){
	$alle = safe_xss($row[count]);
}
					
$query2 = mysql_query("SELECT * FROM bots WHERE install LIKE '%$yesterday%' GROUP BY country HAVING count(country) >= 1 ORDER BY count(country) DESC LIMIT 10");
						
$array = array();
while($row = mysql_fetch_array($query2)){
$country = safe_xss($row['country']);
$query3  = mysql_query("SELECT COUNT(*) AS count FROM bots WHERE country = '".safe_sql($country)."' AND install LIKE '%$yesterday%'");
															
while($row = mysql_fetch_array($query3)){
	$zahl = safe_xss($row['count']);
									
	array_push($array,$zahl);
	$gesamt = $alle;
	$total  = safe_xss($zahl/$gesamt*100);

	if($country == ''){
		echo '<tr><td><img src="img/flags/00.gif" /></td><td>'.safe_xss($zahl).'</td><td>'.safe_xss($round($total, 1))."%</td></tr>";
	}else{
		echo '<tr><td><img src="img/flags/'.safe_xss($country).'.gif" /></td><td>'.safe_xss($zahl). '</td><td>'.safe_xss(round($total, 1)).'%</td></tr>';
	}
}
}
						
echo '</table>';
?>