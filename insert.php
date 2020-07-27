<?php
// if there is some problem, mysql will report it
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<!DOCTYPE html>
<html>
<style>
body{ display:center; background-image: url("https://epelna.lv/wp-content/uploads/2018/07/Printful-apskats.png") }
.box {
  display: grid;
  height: 300px;
  padding: 5px;
  border-style: groove;
  background-color: #a65959;
  opacity: 0.9;
}
.pievienot{
    margin: 15px;
}
.form-control {
  width: 99%;
  height: 1.5rem;
}
.form-control2 {
  width: 94%;
  height: 1.5rem;
  padding: 36px;
  text-align: justify;
}

</style>
<head>
</head>
<body>
<form align="center" action="pievienot.php" method="POST">
    
    <container class="box" align="center">
    <h4>Virsraksts</h4>
    <input align="center" class="form-control" type="text" name="subject" placeholder="Virsraksts">
    <h4>Apraksts</h4>
    <input type="text" class="form-control2" name="content" placeholder="Apraksts">
    </container>
    <button class="pievienot" type="submit" name="submit">Pievienot</button>
    
   </form>
   <form align="center" action="index.php">
   <button class="atpakal" type="submit" name="atpakal">Atpakaļ</button>
    </form>
    
</body>
</html>