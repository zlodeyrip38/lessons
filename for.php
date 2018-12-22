<?php
require_once "header.php";
?>
    <form class="form-inline" role="form" method="post">
        <div class="form-group">
        <input type="text" name="start" placeholder="число от">
        </div>
        <div class="form-group">
        <input type="text" name="end" placeholder="число до">
        </div>
        <div class="form-group">
        <select class="form-control" name="type">
            <option value="even">чётные</option>
            <option value="uneven">нечётные</option>
            <option value="all">все</option>
        </select>
        </div>
        <button type="submit" class="btn btn-default">Вывести числа</button>
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

