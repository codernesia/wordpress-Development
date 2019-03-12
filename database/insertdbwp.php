<?php
/**
*  make insert database area
*  this is sample query to insert and be sure you have been make table custome to insert this data
*/
?>

<?php 
if ( isset( $_POST['submit'] ) ){
// cek if data have been submit

         global $wpdb,$nama,$alamat,$jurusan;
        //make global variabel 
         $tablename = $wpdb->prefix.'student';
        // prefix is make a table sample if you have table name wp_table when you used prefix you not need you use prefix again
    //because prefix will automatic give wp_
    
    //insert data via array to database its so funny 
        $wpdb->insert( $tablename, array(
            'nama' => $_POST['nama'], 
            'alamat' => $_POST['alamat'], 
            'jurusan' => $_POST['jurusan'] ),
            array( '%s', '%s', '%s') 
        );
    }


?>