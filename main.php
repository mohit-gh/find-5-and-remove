//Find 5 in any position of substring and remove it

$str = "1,2,9,52,95,59,56,8,7,456";
$arr = explode(",",$str);
echo "String With 5<br>".$str."<br>";
//print_r($arr);
//echo array_search(5,$arr);
for($i=0;$i<10;$i++) {
	//echo $arr[$i]."<br>";
	if(stristr($arr[$i], '5')) {
		unset($arr[$i]);
	}
}
echo "String Without 5<br>".implode(",",$arr);

//Find 5 At last position in any subtring and remove it

$str = "1,2,9,52,95,59,56,8,755,456";
$arr = explode(",",$str);
echo "String With 5<br>".$str."<br>";
//print_r($arr);
//echo array_search(5,$arr);
for($i=0;$i<10;$i++) {
	//echo $arr[$i]."<br>";
	if(substr($arr[$i], -1)==5) {
		unset($arr[$i]);
	}
	
}
echo "String Without 5<br>".implode(",",$arr);
