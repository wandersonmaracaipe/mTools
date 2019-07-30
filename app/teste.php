<?php
    $connect = odbc_connect('DB','sa','macro01');
    $sql = "SELECT name FROM sys.databases";
    $result = odbc_exec($connect , $sql);
?>

<?php
 while (odbc_fetch_row($result)) {
 ?>
 <tr>
 <td><?php echo odbc_result($result, "name");?> <br/></td>
 </tr>       
 <?php     
 }
 odbc_close($connect);
 ?>