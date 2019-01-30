<?php
include("simple_html_dom.php");
include("model.php");
ini_set('max_execution_time', 0); // for infinite time of execution
$html=file_get_html("https://turbo.az/autos/new");
$i=1;

//    $m=$marka->innertext;
//    $v=$marka->value;
//    echo $marka->innertext.'<br>';
foreach ($html->find("select#auto_model_id optgroup") as $model)
{
    //
    //
    //    echo $model->label.'<br>';
//        echo $model->class.'<br>';
    $sql = new model();
    $sqlQuery=$sql->db->prepare("select * from brend where class='$model->class'");

    while ($row = $sqlQuery->fetch()) {
        echo $row['name']."<br />";
    }




}



//    $query = $sql->db->prepare("insert into brend (name,sort_order,class) values(?,?,?)");
//    $insert = $query->execute(array($m, $i,$v));
//    $i++;


?>

