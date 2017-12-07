<?php

class Pagination
{
    var $data; 

   function paginate($values,$per_page){
    $total_values = count($values);
    if (isset($_GET['page']))
     {
        $current_page = $_GET['page'];
    }
    else
        {
            $current_page = 1; 
        }
    $counts = ceil($total_values/$per_page);
    $param1 = ($current_page - 1) * $per_page;   
    $this->data = array_slice($values,$param1,$per_page) ;
    for ($x=1; $x <= $counts; $x++)
     { 
        $numbers[] = $x;
    }
        return $numbers;
   }

   function fetchresult(){
$resultsvalues = $this->data;
return $resultsvalues;
   }

}
$pag = new Pagination();
$numbers = $pag->paginate(array("hey","hello","awesome"),2);
$result = $pag->fetchresult();
foreach ($result as $r) {
    echo '<div>'.$r.'</div>';
}
foreach ($numbers as $num) {
   echo '<a href = "pagination.php?page='.$num.'">'.$num.' </a>';
}


?>