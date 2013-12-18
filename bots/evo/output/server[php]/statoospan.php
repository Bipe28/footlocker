<?php
/*/
������� ���������� os � �������.
������ ������������� �� ������� ;)
/*/

/*/
���������� ������� ��� ������ � �������.
/*/
function indstr($os)
{
  $name = 'Unknown';
  if(strlen($os) == 6 )
  {
    $data = @unpack('Cversion/Csp/Sbuild/Sarch', $os);
    // Switch'im �������.
    switch($data['version'])
    {
      case 2: $name = 'XP'; break;
      case 3: $name = 'Server 2003'; break;
      case 4: $name = 'Vista'; break;
      case 5: $name = 'Server 2008'; break;
      case 6: $name = 'Seven'; break;
      case 7: $name = 'Server 2008 R2'; break;
    }
    // x64???
    if($data['arch'] == 9 )$name .= ' x64';
   
    // ����� � ��� ���������
    if($data['sp'] > 0)$name .= ', SP '.$data['sp'];
  }
  return $name;
}
/*/
�������� ������, ��� ������.
/*/

		include('system/config.php');
		mysql_connect($config['mysql_host'], $config['mysql_user'], $config['mysql_pass']) or die("LOL"); 
        mysql_select_db($config['mysql_db']) or die("LOL");
		$country_query = "SELECT `os_version` FROM `botnet_list` WHERE `botnet` = '-- default --'";
		$country_go = mysql_query($country_query);
		while ( $result = mysql_fetch_row($country_go))
		    {
			    $res = indstr($result[0]);
                $global_countr[] = $res;	
			}
		 /*/ Seven /*/
		 $seven_pre = array_keys( $global_countr, "Seven" );
		 $seven = count($seven_pre);
		
		 $seven_x64_pre = array_keys( $global_countr, "Seven x64");
		 $seven_x64 = count($seven_x64_pre);
		  
		 $seven_sp1_x64_pre = array_keys( $global_countr, "Seven x64, SP 1");
		 $seven_sp1_x64 = count($seven_sp1_x64_pre);
		 
		 $seven_sp1_pre = array_keys( $global_countr, "Seven, SP 1");
		 $seven_sp1 = count($seven_sp1_pre);
       /*/ XP /*/
		 $xp_pre = array_keys( $global_countr, "XP" );
		 $xp = count($xp_pre);
		 $xp_sp2_pre = array_keys( $global_countr, "XP, SP 2");
		 $xp_sp3_pre = array_keys( $global_countr, "XP, SP 3");
		 $xp_sp2 = count($xp_sp2_pre);
		 $xp_sp3 = count($xp_sp3_pre);
		 /*/ Vista /*/
		  $vista_pre = array_keys( $global_countr, "Vista" );
		 $vista = count($vista_pre);
		 $vista_pre = array_keys( $global_countr, "Vista");
		 $vista_sp2_pre = array_keys( $global_countr, "Vista, SP 2");
		 $vista_sp2 = count($vista_sp2_pre);
		 $vista_sp1_pre = array_keys( $global_countr, "Vista, SP 1");
		 $vista_sp1 = count($vista_sp1_pre);	 
		 /*/ Server /*/
		  $server_pre = array_keys( $global_countr, "Vista" );
		 $server = count($server_pre);
		 $server_2003_sp2_pre = array_keys( $global_countr, "Server 2003, SP 2");
		 $server_2003_sp2 = count($server_2003_sp2_pre);
		 $server_2003_pre = array_keys( $global_countr, "Server 2003");
		 $server_2003 = count($server_2003_pre );
		 $server_2008_pre = array_keys( $global_countr, "Server 2008 R2 x64");
		 $server_2008 = count($server_2008_pre );
		 $server_2008_sp1_pre = array_keys( $global_countr, "Server 2008 R2 x64, SP 1");
		 $server_2008_sp1 = count($server_2008_sp1_pre );
		 
?>

<html>
    <style>
BODY {overflow: hidden}
</style>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>Chart [OS]</title>
        
        <script src="../amcharts/amcharts.js" type="text/javascript"></script>  	
        <script type="text/javascript">
        
            var chart;

            var chartData = [{
                country: "Windows 7",
                visits: "<?php echo $seven; ?>"
            }, {
                country: "Windows 7 x64 SP1",
                visits: <?php echo $seven_sp1_x64; ?>
            }, {
                country: "Windows 7 SP1",
                visits: <?php echo $seven_sp1; ?>
            },{
                country: "Windows 7 x64",
                visits: <?php echo $seven_x64; ?>
            },{
                country: "Windows XP SP2",
                visits: <?php echo $xp_sp2; ?>
            },{
                country: "Windows XP SP3",
                visits: <?php echo $xp_sp3; ?>
            },{
                country: "Windows Vista, SP 1",
                visits: <?php echo $vista_sp2; ?>
            },{
                country: "Windows Vista, SP 2",
                visits: <?php echo $vista_sp1; ?>
            },{
                country: "Windows Vista",
                visits: <?php echo $vista; ?>
            },{
                country: "Windows Server 2003",
                visits: <?php echo $server_2003; ?>
            },{
                country: "Windows Server 2003, SP 2",
                visits: <?php echo $server_2003_sp2; ?>
            },{
                country: "Server 2008 R2 x64, SP 1",
                visits: <?php echo $server_2008_sp1; ?>
            }
			];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();

                // title of the chart
                //chart.addTitle("Visitors countries", 16);

                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "visits";
                chart.sequencedAnimation = true;
                chart.startEffect = "elastic";
                chart.innerRadius = "30%";
                chart.startDuration = 2;
                chart.labelRadius = 15;

                // the following two lines makes the chart 3D
                chart.depth3D = 10;
                chart.angle = 15;

                // WRITE                                 
                chart.write("chartdiv");
            });
        </script>
    </head>
    
    <body>
        <div id="chartdiv" style="width:580px; height:510px;"></div>
	
    </body>

</html>
