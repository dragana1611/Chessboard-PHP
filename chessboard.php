  
<table border = '2'>
<?php
for($i=1; $i<9;$i++)
{
    ?> <tr> <?php
    for($j=1; $j<9; $j++)
    {
        $total = $i+$j;
        if($total%2 == 0)
        {
            ?> <td style="background-color: black;" width = 80px; height = 80px;> </td><?php
        }
        else
        {
            ?> <td width = 80px; height = 80px;> </td><?php
        }
        
    }
    ?> </tr> <?php
}
?>
</table>
