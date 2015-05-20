<?php include("includes/header.php"); ?>

<div id="content">

<img src="images/pitch.png" width="500" height="450" alt="Baseball Player Pitching">

<?php
echo "<p>Congratulations! Your video has been submitted and will be evaluated by a professional instructor.  Expect to recieve your evaluation soon.  Thank you and please let us know if we were able to help you become a better baseball player. </p><br/>";
if($_FILES["file"]["name"])
  {
  echo $_FILES["file"]["name"];
  echo $_FILES["file"]["tmp_name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "./upload/" . $_FILES["file"]["name"]);
           
      
 
   }
?>

<?php include("includes/footer.php"); ?> 



</div><!--Wrapper-->

</body>
</html>