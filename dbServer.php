<?php
//this file is to implement the database connection, provide function that receive data from js file via http
//add, delete, search, update the database
//it is the foundation content to other server
?>

<?php
   $table = null; 
   $entity = null;
   $data = null;

   function update($table, $entity, $data){
       echo "updating data";
   }

   function delete($table, $entity, $data){
       echo "deleting data";
   }

   function search($table, $entity, $data){
       echo "searching data";
   }

   function add($table, $entity, $data){
       echo "adding data";
   }


?>