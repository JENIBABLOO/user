<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('connection.php');
                    $sql="select * from cust_detail where subscriber_id='".$_POST['search']."'";
                    $q=mysql_query($sql) or die(mysql_error);
                     echo "<table align='center' border='1' class='tbl'><tr><th>customer id</th><th>subscriber id</th><th>tatasky plan</th><th>customer name</th><th>address</th><th>mobile number</th><th>alternate mobile numbar</th><th>email id</th><th>date</th><th>time</th></tr>";
                     $rs=mysql_fetch_array($q);
                            $str="select package_detail from category where c_id='".$rs['c_id']."'";
                                $query=mysql_query($str) or die(mysql_error);
                                    while($row=mysql_fetch_array($query))
                                 {
                                    $c_id=$row['package_detail'];
                                    }
                                    echo "<tr><td>".$rs['cust_id']."</td>";
                                    echo "<td>".$rs['subscriber_id']."</td>";
                                    echo "<td>".$c_id."</td>";
                                    echo "<td>".$rs['cust_name']."</td>";
                                    echo "<td>".$rs['adrs']."</td>";
                                    echo "<td>".$rs['mob_no']."</td>";
                                    echo "<td>".$rs['alter_mob_no']."</td>";
                                    echo "<td>".$rs['email_id']."</td>";
                                    echo "<td>".$rs['date']."</td>";
                                    echo "<td>".$rs['time']."</td>";
                                    echo "</tr></table>";
          ?>
    </body>
</html>
