<?php
$numbers = explode("\n",file_get_contents('input.txt'));

$combos = getCombos($numbers, count($numbers), 3); 

//FROM
//https://www.geeksforgeeks.org/print-all-possible-combinations-of-r-elements-in-a-given-array-of-size-n/
// The main function that 
// prints all combinations  
// of size r in arr[] of  
// size n. This function  
// mainly uses combinationUtil() 
function getCombos($arr, $n, $r) 
{ 
    // A temporary array to  
    // store all combination 
    // one by one 
    $data = array(); 
  
    // Print all combination  
    // using temprary array 'data[]' 
    combinationUtil($arr, $data, 0,  
                    $n - 1, 0, $r); 
} 
  
/* arr[] ---> Input Array 
data[] ---> Temporary array to 
            store current combination 
start & end ---> Staring and Ending 
                 indexes in arr[] 
index ---> Current index in data[] 
r ---> Size of a combination  
       to be printed */
function combinationUtil($arr, $data, $start,  
                         $end, $index, $r) 
                  
{ 
	
    // Current combination is ready  
    // to be printed, print it 
    if ($index == $r) 
    { 
		$sum = 0;
		$numbers = array();
        for ($j = 0; $j < $r; $j++)
		{ 
            $sum+=$data[$j];
			$numbers[] = $data[$j];
        }
		
		if ($sum == 2020)
		{
			$product = 1;
			foreach($numbers as $number)
			{
				$product*=$number;
			}
			echo $product;
			die();
		}
		
        return;
    } 
  
    // replace index with all 
    // possible elements. The 
    // condition "end-i+1 >=  
    // r-index" makes sure that  
    // including one element at 
    // index will make a combination  
    // with remaining elements at  
    // remaining positions 
    for ($i = $start;  
         $i <= $end &&  
         $end - $i + 1 >= $r - $index; $i++) 
    { 
        $data[$index] = $arr[$i]; 
        combinationUtil($arr, $data, $i + 1,  
                        $end, $index + 1, $r); 
    } 
} 