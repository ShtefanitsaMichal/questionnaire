<?php require "get_ip.php" ?>
<?php require "db_connection.php" ?>
<?php 
        if (isset($_POST['send'])) 
        {
            if (!empty($_POST['ness_social_media'])) {
                $checked_count = count($_POST['ness_social_media']);
                echo "you have selected following " .$checked_count. " option(s): <br/>";
                foreach ($_POST['ness_social_media'] as $selected) {
                    echo '<p>' .$selected. '</p>'; 
                }echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
            } else {
                echo "prosze wybrać opcję";
            }
            
            var_dump ($_POST['ness_social_media[]']); 
        }
        var_dump ($social_media); 
        ?>

<?php
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
                               . "`nawigation`, "
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
                                          '$_POST[nawigation]', 
                                          '$_POST[subject]', 
                                          '$_POST[ness_social_media]', 
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
                              <div class="container">
                                <div class="alert alert-success">
                                 <strong>Success!</strong> <?php echo "New record created successfully"; ?>
                                </div>
                              </div>
                            <?php
                            
                            }
                        catch(PDOException $e)
                            {
                            echo $sql . "<br>" . $e->getMessage();
                            }

                        $conn = null;

 ?>

 <script type="text/javascript">
  window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "#index.php";

    }, 3000);// czasprzejsćia na strone głowną 
</script>