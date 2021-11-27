<?php
$n=3;
$a=64;
$num=1;
$sum=0;
echo "<tale border=1>
<tr>
<td>";
for($row=1;$row<=$n;$row++)
{
   for($col=1;$col<=$row;$col++)
{
    echo'*';
}
echo '<br/>';
} 
echo "</td></tr></table>";
for($row=1;$row<=$n;$row++)
{
   for($col=$n;$col>=$row;$col--)
{
    echo 1+$sum . " ";
    $sum+=1;
}
$sum=0;
echo "<br/>";
} 
for($row=1;$row<=$n;$row++)
{
   for($col=1;$col<=$row;$col++)
{
    echo chr($a+$num). " ";
    $num+=1;
}
echo "<br/>";
}
?>