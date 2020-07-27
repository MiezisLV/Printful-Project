
<?php
include_once 'connection/connect.php';
// if there is some problem, mysql will report it
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// make sql
$sql = 'SELECT subject, content, id FROM printful';

// get the query result
$result = mysqli_query($conn, $sql);

// fetch the result in array format
$printful = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

    <head>

<style>
body{ display:center; background-image: url("https://epelna.lv/wp-content/uploads/2018/07/Printful-apskats.png") }
.box {
  display: grid;
  height: 150px;
  padding: 5px;
  border-style: groove;
  background-color: #a65959;
  opacity: 0.9;
}
.pievienot{
    margin: 15px;
}

</style>
    </head>
    <body>
    
    <?php foreach($printful as $printful){ ?>

            <container class="box" align="center">
            <h3><?php echo htmlspecialchars($printful['subject']); ?></h3>
            <h4><?php echo htmlspecialchars($printful['content']); ?></h4>
            <a type="submit" class="poga" href="delete.php?id=<?php echo $printful['id']?>">Dzēst</a>
            </container>
            
    <?php } ?>
    <a href="insert.php">
    <input  class="pievienot" type="submit" value="Pievienot" />
    </a>
    
    </body>
    </html>
