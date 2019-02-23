<?php
function pifagor($tr,$td)
{
    echo "<table>";

    for ($i=1;$i<=$tr;$i++)
    {

        echo "<tr>";
        if($i==1)
        {
            for ($j=1;$j<=$td;$j++)
            {
                if ($j==1)
                {
                    echo "<td class='pifagor'></td>";
                }
                else
                {
                    echo "<td class='pifagor'>{$j}</td>";
                }

            }
        }
        else
        {
            for ($j=1;$j<=$td;$j++)
            {
                if ($j==1)
                {
                    echo "<td class='pifagor'>";
                }
                else
                {
                    echo "<td>";
                }
                echo $j*$i."</td>";
            }
        }
        echo "</tr>";
    }


    echo "</table>\n";
}