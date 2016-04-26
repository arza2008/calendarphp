<?php
if (isset($_GET['day'])){
$day = $_GET['day'];
} else {
$day = date("j");
}
if(isset($_GET['month'])){
$month = $_GET['month'];
} else {
$month = date("n");
}
if(isset($_GET['year'])){
$year = $_GET['year'];
}else{
$year = date("Y");
}
$currentTimeStamp = strtotime( "$day-$month-$year");
$monthName = date("F", $currentTimeStamp);
$numDays = date("t", $currentTimeStamp);
$counter = 0;
?>
<table border='1' style='border-collapse:collapse;' align="center">
<tr>
<td><input style='width:50px;' type='button' value='<'name='previousbutton' onclick ="goLastMonth(<?php echo $month.",".$year;?>)"></td>
<td colspan='5'><?php echo $monthName.", ".$year; ?></td>
<td><input style='width:50px;' type='button' value='>'name='nextbutton' onclick ="goNextMonth(<?php echo $month.",".$year;?>)"></td>
</tr>
<tr>
<td width='100px'>Sunday</td>
<td width='100px'>Monday</td>
<td width='100px'>Tueday</td>
<td width='100px'>Wednesday</td>
<td width='100px'>Thursday</td>
<td width='100px'>Friday</td>
<td width='100px'>Saturday</td>
</tr>
<?php
echo "<tr>";
for($i = 1; $i < $numDays+1; $i++, $counter++){
$timeStamp = strtotime("$year-$month-$i");
if($i == 1) {
 $firstDay = date("w", $timeStamp);
 for($j = 0; $j < $firstDay; $j++, $counter++) {
 echo "<td> </td>";
 }
}
if($counter % 7 == 0) {
echo"</tr><tr>";
}


echo "<td>$i</td>";

}
while($counter % 7 != 0) {
 echo "<td></td>";
 $counter++;
}
echo "</tr>";
?>
</table>
