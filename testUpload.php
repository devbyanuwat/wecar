<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>

<?php 

 
 // Count total files
 $countfiles = count($_FILES['file']['name']);
echo $countfiles ." count file";
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  copy($_FILES['file']['tmp_name'][$i],'myfile/'.$filename);
 
 }



// echo "Cookie -> ";
// print_r($_COOKIE);

// foreach ($_COOKIE as $key=>$val)
//   {
//     echo $key.' is '.$val."<br>\n";
//   }
?>
</body>
</html>