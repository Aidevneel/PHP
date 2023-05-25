<?php

$conn = mysqli_connect("localhost","neel","home1234","school") or die("Conn lost");

$sql = "select * from books";
$result = mysqli_query($conn,$sql) or die("query fail");
$output = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table border="1"  width="50%" cellspacing="0" cellpadding="10px" >
                    <tr>
                        <th>Book ID</th>
                        <th>Title</th>
                        <th>Delete</th>
                    </tr>
                ' ;
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr>
                        <td>{$row['BID']}</td>
                        <td>{$row['Title']}</td>                       
                        <td> <img src = 'pencil-square.svg' alt='My Happy SVG' class='bg-success' /><button class='btn btn-danger' id='delete' data-id='{$row["BID"]}'>DELETE</button></td>
                    </tr>";
    }
    
    $output .="</table>";
    mysqli_close($conn);
    echo $output;

    }else{
        echo "No record found";
}

?>