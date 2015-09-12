<!DOCTYPE html>

<html>

<head>
  <title><?php echo $title_data  ?></title>
</head>

<body>

<form action="upload.php" METHOD=POST enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
<input type="file" name = "upload"/>
<input type="submit" value="Load" />
</form>

</body>
</html>