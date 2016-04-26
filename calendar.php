<html>

	<head>
	<script>
		function goLastMonth(month,year){
			if(month == 1){
				--year;
				month = 12;
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+month"&year = "+year;
		}
		
		function goNextmonth(month,year){
			if (month =12){
				++year;
				month = 0;
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+(month+1)"&year = "+year;
		}
	</script>
	</head>
	
	<body>
		<?php
		if (isset($_GET['day'])){
			$day = $_GET['day'];	
		}else{
			$day = date("j");
		}
		if (isset($_GET['month'])){
			$month = $_GET['month'];
		}else{
			$month = date("n");
		}
		if (isset($_GET['year'])){
			$year = $_GET['year'];
			}
			else{
				$year = date("Y");
			}
		//calendar variable
		$currentTimeStamp = strtotime("$year-$month-$day");
		//get current month name
		$monthName = date("F",$currentTimeStamp);
		//get how many days
		$numDays = date("t",$currentTimeStamp);
		//counter
		$counter = 0;
		//echo $day."/".$month."/".$year;
		?>
		<table border = '1'>
			
			<tr>
				<td width = '50px'>Sun</td>
				<td width = '50px'>Mon</td>
				<td width = '50px'>Tue</td>
				<td width = '50px'>Wed</td>
				<td width = '50px'>Thu</td>
				<td width = '50px'>Fri</td>
				<td width = '50px'>Sat</td>
			</tr>
			<?php
				echo "<tr>";
				for ($i = 1;$i <$numDays+1; $i++, $counter++){
					$timeStamp = strtotime("$year-$month-$i");
					if($i == 1){
						$firstDay = date("w",$timeStamp);
						
						//if not first date--then blankspace
						for($j = 0; $j <$firstDay; $j++, $counter++){
							echo "<td>&nbsp;</td>";
						}
					}
					if ($counter % 7 == 0){
						echo  "<tr></tr>";
					}
					echo "<td align = 'center'>".$i."</td>";
				}
				echo "</tr>";
			?>
		</table>
	</body>
</html>