<?php
// Check if the form is submitted 
if ( isset( $_POST['submit'] ) ) { 
    // retrieve the form data by using the element's name attributes value as key 
    $query = $_POST['query']; 
    echo 'The query you entered is : <br/>';
    echo $query; 
    echo '<br/>';
    echo '<br/>The results are : <br/>';
    $username = "mytestuser"; 
    $password = "123";   
    $host = "localhost";
    $database= "mytestdb";
    
    $server = mysqli_connect($host, $username, $password);
    $connection = mysqli_select_db($server, $database);

    $myquery = $query; //"SELECT  `date_added`, `close` FROM  price";
    $query = mysqli_query($server, $myquery);
    
    if ( ! $query ) {
        echo ('Error!');
        echo mysqli_error();
        die;
    }
    
    $data = array();
    
    for ($x = 0; $x < mysqli_num_rows($query); $x++) {
        $data[] = mysqli_fetch_assoc($query);
    }
    
    echo json_encode($data);     
     
    mysqli_close($server);
exit;
}
?>

