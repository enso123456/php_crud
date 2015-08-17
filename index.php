<?php
   include_once 'db.php';
   // delete condition
   if(isset($_GET['delete_id']))
   {
    $sql_query="DELETE FROM user WHERE id=".$_GET['delete_id'];
    mysql_query($sql_query);
    header("Location: $_SERVER[PHP_SELF]");
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>CRUD Operations With PHP and MySql.</title>
   <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
   <center>
      <div id="header">
         <div id="content">
            <label>CRUD Operations With PHP and MySql.</label>
         </div>
      </div>
      <div id="body">
         <div id="content">
            <table align="center">
               <tr>
                  <th colspan="5"><a href="add_data.php">add data here.</a></th>
               </tr>
               <th>Full Name</th>
               <th>Email<th>
               <th colspan="2">Operations</th>
            </tr>
            <?php
            $sql_query="SELECT * FROM user";
            $result_set=mysql_query($sql_query);
            while($row=mysql_fetch_row($result_set))
            {
               ?>
               <tr>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                  <td><?php echo $row[3]; ?></td>
                  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Edit</a></td>
                  <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete</a></td>
               </tr>
               <?php
            }
            ?>
         </table>
      </div>
   </div>
</center>


<script type="text/javascript">
   function edt_id(id)
   {
      if(confirm('Sure to edit ?'))
      {
         window.location.href='edit_data.php?edit_id='+id;
      }
   }
   function delete_id(id)
   {
      if(confirm('Sure to Delete ?'))
      {
         window.location.href='index.php?delete_id='+id;
      }
   }
</script>

</body>
</html>