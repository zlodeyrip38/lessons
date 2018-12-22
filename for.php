<?php
require_once "header.php";
?>
    <form method="post">
        число от
        <input type="text" name="start">
        до
        <input type="text" name="end">
        <select class="form-control" name="type">
            <option value="even">чётные</option>
            <option value="uneven">нечётные</option>
            <option value="all">все</option>
        </select>
        <input type="submit"value="Вывести числа">
    </form>

<?php
$type = $_POST['type'];
$start = $_POST['start'];
$end = $_POST['end'];

for ($i=$start; $i<=$end;$i++)
{
    switch ($type)
    {
        case "even":
            if($i%2==0)
            {
                echo $i."<br>";
            }
            break;

        case "uneven":
            if($i%2!=0)
            {
                echo $i."<br>";
            }
            break;

        case "all":
            echo $i."<br>";
            break;
    }

}

require_once "footer.php";

