<?php
// if there is some problem, mysql will report it
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include_once 'connection/connect.php';
//check GET request id param
if(isset($_POST['delete'])){
$id_delete = mysqli_real_escape_string($conn, $_POST['id_delete']);

$sql = "DELETE FROM printful WHERE id = $id_delete";
//succes
if(mysqli_query($conn, $sql)){
header('Location: index.php');
}//failure
echo 'query error' . mysqli_error($conn);
}//end of POST check

//check GET request id param
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    //make sql
    $sql = "SELECT * FROM printful WHERE id = $id";
    //get the query result
    $result = mysqli_query($conn, $sql);
    //fetch result in array format
    $printful = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html>
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
.dzest{
    margin: 15px;
}
</style>

<?php if($printful): ?>
    <container class="box" align="center">
    <h3><?php echo htmlspecialchars($printful['subject']); ?></h3>
    <p><?php echo htmlspecialchars($printful['content']) ?></p>
    </container>
    <form action="delete.php" align="center" method="POST">
    <input type="hidden" name="id_delete" value="<?php echo $printful['id'] ?>">
    <input class="dzest" type="submit" name="delete" value="Dzēst">
    </form>
<?php else: ?>

<h2>Tāds ieraksts neeksistē</h2>

<?php endif; ?>
</div>
<form align="center" action="index.php">
   <button class="atpakal" type="submit" name="atpakal">Atpakaļ</button>
</form>
</html>