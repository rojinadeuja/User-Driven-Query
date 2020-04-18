<?php
// Check if the form is submitted 
if ( isset( $_POST['submit'] ) ) { 
// retrieve the form data by using the element's name attributes value as key 
$query = $_POST['query']; 
echo 'The query you entered is ' . $query; 
exit; 
} 

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

