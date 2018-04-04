<?php
    $inputarray = array('Greeks','for','Greeks');
    echo "This is an example of an implode that is arrray to string<br>";
    print_r(implode(" ",$inputarray));echo "<br>";
    print_r("\n");

    //join with separator
    echo "This is an example of an implode<br>";
    print_r(implode("-",$inputarray));

    //explode function
    $original_string = "Hello, how can we help you?";
    echo "<br>";
    echo "This is an example of an explode breaking a string into an array<br>";
    print_r(explode(" ",$original_string));echo "<br>";
    //  print_r(explode(" ",$original_string,3));echo "<br>";
   //  print_r(explode(" ",$original_string,-1));echo "<br>";

/*
    //explode string
    $data = "I love watching funny movies \n I love browsing internet \n I love singing";
    $data = explode(" ",$data);
    print_r($data);

    echo "<br>";
    echo "<br>";

   //mulitdimension arrray:
    $data = "watching movies  \n google.com \n we like rock song";
    $data = explode("  ", $data);

    $out = array();
    $step = 0;
    $last = count($data);
    $last--;

    foreach($data as $key=>$item){

       foreach(explode(' ',$item) as $value){
        $out[$key][$step++] = $value;
       }

       if ($key!=$last){
        $out[$key][$step++] = ' '; // not inserting last "space"
       }

    }

    print '<pre>';
    print_r($out);
    print '</pre>';
*/
?>
