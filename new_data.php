<?php require "head.php" ?>
<?php require "get_ip.php" ?>
<?php require "db_connection.php" ?>
<?php 
        if (isset($_POST['send'])) 
        {
            if (!empty($_POST['ness_social_media'])) 
                {
                  
                    foreach ($_POST['ness_social_media'] as $selected) 
                    {
                      
                    }
                } 
                    else 
                {
                    $_POST['ness_social_media'] = "empty" ;
                }
    $ness_social = $_POST['ness_social_media'];
    $ns = json_encode($ness_social,JSON_FORCE_OBJECT);             
       
       

    $timestamp = time();
    $hostname = gethostbyaddr($ip);
    $time = date('Y-m-d H:i:s');
//this is only comment
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
                            // set the PDO error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = " INSERT INTO `lesson_learned`.`questionnaire` "
                               . "(`visit`, "
                               . "`frequency`, "
                               . "`rating`, "
                               . "`attractiveness`, "
                               . "`page_rating`, "
                               . "`color`, "
                               . "`easy_to_find_info`, "
                               . "`ness_info`, "
                               . "`info_type`, "                
                               . "`navigation`, "
                               . "`need_update`, "
                               . "`need_update_text`, "
                               . "`subject`, "
                               . "`ness_social_media`, "
                               . "`optional_social_media`, "
                               . "`sex`, "
                               . "`age`, "
                               . "`employee_type`, "
                               . "`ip`,"
                               . "`hostname`, "
                               . "`date`, "
                               . "`date_normal`) 
                                VALUES ( '$_POST[visit]',   
                                          '$_POST[frequency]',  
                                          '$_POST[rating]', 
                                          '$_POST[attractiveness]', 
                                          '$_POST[rating]', 
                                          '$_POST[color]', 
                                          '$_POST[easy_to_find_info]', 
                                          '$_POST[ness_info]', 
                                          '$_POST[info_type]', 
                                          '$_POST[navigation]',
                                          '$_POST[need_update]',
                                          '$_POST[need_update_text]', 
                                          '$_POST[subject]', 
                                          '$ns', 
                                          '$_POST[optional_social_media]', 
                                          '$_POST[sex]', 
                                          '$_POST[age]',
                                          '$_POST[employee_type]',
                                          '$ip',
                                          '$hostname',
                                          '$time',
                                          '$timestamp'); ";
                            // use exec() because no results are returned
                            $conn->exec($sql);
                            ?>
                            <?php require "messages.php"?>
                            <?php
                            
                            }
                        catch(PDOException $e)
                            {
                            echo $sql . "<br>" . $e->getMessage();
                            }

                        $conn = null;
    }

 ?>

 


<script type="text/javascript">
  window.setTimeout(function(){     
        // Move to a new location or you can do something else
        window.location.href = "http://system";
    }, 3000);// czasprzejsćia na strone głowną 
</script>