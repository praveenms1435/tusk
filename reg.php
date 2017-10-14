<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		
		//hai rahuls
		
        // put your code here
        include_once 'database.php';
        include_once 'reg_model.php';
        $db=new reg_model();
        if(isset($_POST["btnsubmit"]) && !empty ($_POST["btnsubmit"]))
        {
            $na=$_POST["txtname"];
            $sal=$_POST["txtsalary"];
            $db->insertdata($na,$sal);
        }


        ?>
        <form method="post">
           <input type="text" name="txtname" required >
                      <input type="text" name="txtsalary" required >
<input type="submit" name="btnsubmit" value="Submit">
<?php echo isset($db->error)?$db->error:''; ?>
<?php echo isset($db->msg)?$db->msg:''; ?>

        </form>
        <hr/>
        <?php
          $response=$db->getdata();
          if($response)
          {
              print_r($response);
          }

        ?>
    </body>
</html>
