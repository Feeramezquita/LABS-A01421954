<?php
	function promedio ($arr_nums){
	    $promedio = 0;
	    for ($i = 0; $i < sizeof($arr_nums); $i++){
	        $promedio += $arr_nums[$i];
	    }
	    $promedio/=count($arr_nums);
	    return "Promedio: ".$promedio."<br>";
	}

	function mediana ($arr_nums){
	    sort($arr_nums);
	    $mediana = $arr_nums[ceil(sizeof($arr_nums)/2)-1];
	    return "Mediana: ".$mediana."<br>";
	}

	function printArray($arr){
	    $array = implode(", ", $arr);
	    return $array;
	}

	function lista ($arr_nums){
	    $temp = $arr_nums;
	    sort($temp);
	    $sort = $temp;
	    rsort($temp);
	    $rsort = $temp;
	    return "<ul>
	        <li>Arreglo: ".printArray($arr_nums)."</li>
	        <li>".promedio($arr_nums)."</li>
	        <li>".mediana($arr_nums)."</li>
	        <li>Sorted array: ".printArray($sort)."</li>
	        <li>Reverse sorted array: ".printArray($rsort)."</li></ul>";
	}

	function tabla ($n){
	    $cuadrados = array();
	    $cubos = array();
	    echo "<table border='1'>";
	    for ($tr = 0; $tr < 2; $tr++){
	        echo "<tr>";
	        for($td = 0; $td < $n; $td++){
	            if($tr == 0)
	                echo "<td>".pow($td,2)."</td>";
	            else
	                echo "<td>".pow($td,3)."</td>";
	        }
	        echo "</tr>";
	    }
	    echo "</table>";
	}

	function fibonacci ($n){
	    $prv = 1;
	    $nxt = 1;
	    for($i = 1; $i <= $n; $i++){
	        if($i == 1)
	            echo $prv;
	        else{
	            echo " ".$nxt;
	            $tmp = $nxt;
	            $nxt += $prv;
	            $prv = $tmp;
	        }
	    }
	}
?>
