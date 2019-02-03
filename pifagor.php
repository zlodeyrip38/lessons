<?php
require_once "header.php";
?>

<form method="post">
    <h1>Таблица Пифагора</h1>
    строк<input type="text" name="tr">
    столбцов<input type="text" name="td">
    <input type="submit" value="Нарисовать таблицу">
</form>

<?php
echo "<table>";

    for ($i=1;$i<=$_POST['tr'];$i++)
    {

        echo "<tr>";
            if($i==1)
            {
                for ($j=1;$j<=$_POST['td'];$j++)
                {
                    echo "<td class='pifagor'>{$j}</td>";
                }
            }
            else
            {
                for ($j=1;$j<=$_POST['td'];$j++)
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


require_once "footer.php";
?>






