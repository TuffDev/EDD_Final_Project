<?php

if( empty( $_POST ) ) {
    // exit the script if there is no post data
    return;
}

// using parameters as array:

// filter empty values ('', 0) from array, if necessary
$_POST = array_filter( $_POST );

// reading array parameters
foreach( $_POST as $key => $value ) {

    // retrieve your parameters here
    $column = $key;
    $value = trim( $value );

    // and query the database
    $results = PDO::fetchAll( PDO::FETCH_ASSOC );

}

// output JSON; $results could be an array as retrieved through PDO::fetchAll()
echo json_encode( $results );


// or using single parameters:

if( !empty( $_POST['thing1'] ) && !empty( $_POST['thing2'] ) ) {

    // query the database
    $results = PDO::fetchAll( PDO::FETCH_ASSOC );

}