<?php

$conn = mysqli_connect("localhost","neel","home1234","school") or die("Conn lost");

$sql = "select * from books";
$result = mysqli_query($conn,$sql) or die("query fail");
$output = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table border="1"  width="100%" cellspacing="0" cellpadding="10px" >
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                ' ;
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr><td>{$row['BID']}</td><td>{$row['Title']}</td></tr>";
    }
    
    $output .="</table>";
    mysqli_close($conn);
    echo $output;

    }else{
        echo "No record found";
}

?>