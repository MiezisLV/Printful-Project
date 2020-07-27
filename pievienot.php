

      <?php
      include_once 'connection/connect.php';

        $subject = $_POST['subject'];
        $content = $_POST['content'];
      //create sql 
      $sql = "INSERT INTO printful (subject, content) VALUES ('$subject', '$content');";
      mysqli_query($conn, $sql);
      //echo form is valid
      header('Location: index.php');
?>
</html>