<?php
if(isset($_POST['input-text'])){
    $inputtext = $_POST['input-text'];
    echo $inputtext;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charaset ="utf-8">
    </head>
<body>
    <form actinon = "checkPost.php" method="POST" >
     <div id = "town">
        <table class="yusha">
        <tr>
         <h1>MAINMENU</h1>
             <th>始まりの街</th>
            <td>
             <input type ="text" name ="input-text" maxlangh="8" >
            </td>
        </tr>
        <tr>
            <input type = "submit" value="送信">
        </tr>
    </form>
</body>

</html>
