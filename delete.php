<?php
if (isset($_POST['file'])) {
  $file = basename($_POST['file']);
  $filePath = "gallery_uploads/" . $file;
  if (file_exists($filePath)) {
    unlink($filePath);
  }
}
header("Location: index.html");
?>
