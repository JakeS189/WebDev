<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "shakopeesabers", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO persons (cart_id, model_id, username) VALUES (?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "iss", $cart_id, $model_id, $username);
    
    /* Set the parameters values and execute
    the statement again to insert another row */
    $cart_id = 1;
    $model_id = "Hermione";
    $username = "Granger";
    
    mysqli_stmt_execute($stmt);
    
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?>