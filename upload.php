<?php
$targetDir = "gallery_uploads/";
$targetFile = $targetDir . basename($_FILES["mediaFile"]["name"]);

if (move_uploaded_file($_FILES["mediaFile"]["tmp_name"], $targetFile)) {
  header("Location: index.html");
} else {
  echo "Error uploading file.";
}
?>
