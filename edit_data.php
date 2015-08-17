<?php
  include_once 'db.php';

  if(isset($_GET['edit_id']))
  {
    $sql_query="SELECT * FROM user WHERE id=".$_GET['edit_id'];
    $result_set=mysql_query($sql_query);
    $fetched_row=mysql_fetch_array($result_set);
  }
  if(isset($_POST['btn-update']))
  {
    // variables for input data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    // variables for input data

    // sql query for update data into database
    $sql_query = "UPDATE user SET full_name='$full_name', email='$email' WHERE id=".$_GET['edit_id'];
    // sql query for update data into database

    // sql query execution function
    if(mysql_query($sql_query))
    {
      ?>
      <script type="text/javascript">
        alert('Data Are Updated Successfully');
        window.location.href='index.php';
      </script>
      <?php
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert('error occured while updating data');
      </script>
      <?php
    }
  // sql query execution function
  }
  if(isset($_POST['btn-cancel']))
  {
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>CRUD Operations With PHP and MySql</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
  <center>
    <div id="header">
      <div id="content">
        <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
      </div>
    </div>

    <div id="body">
      <div id="content">
        <form method="post">
          <table align="center">
            <tr>
              <td><input type="text" name="full_name" placeholder="Full Name" value="<?php echo $fetched_row['full_name']; ?>" required /></td>
            </tr>
            <tr>
              <td><input type="email" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
            </tr>
            <tr>
              <td>
                <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
                <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </center>
</body>
</html>
