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
    $timestamp = time();
    $hostname = gethostbyaddr($ip);
    $time = date('Y-m-d H:i:s');

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO questionnaire
                    (visit, frequency,rating,attractiveness,page_rating,
                    color,easy_to_find_info,ness_info,info_type,navigation,
                    need_update,need_update_text,subject,ness_social_media,optional_social_media,
                    sex,age,employee_type,ip,hostname,
                    date,date_normal)
            VALUES (:visit, :frequency, :rating, :attractiveness, :rating, 
                    :color, :easy_to_find_info, :ness_info, :info_type, :navigation,
                    :need_update,:need_update_text, :subject, :ns, :optional_social_media, 
                    :sex, :age,:employee_type,:ip,:hostname,
                    :time,:timestamp)");

    $visit = $_POST['visit'];  
    $frequency = $_POST['frequency'];  
    $rating = $_POST['rating'];
    $attractiveness = $_POST['attractiveness'];  
    $rating = $_POST['rating'];
    $color = $_POST['color'];
    $easy_to_find_info = $_POST['easy_to_find_info'];  
    $ness_info = $_POST['ness_info'];
    $info_type = $_POST['info_type'];
    $navigation = $_POST['navigation'];
    $need_update = $_POST['need_update'];
    $need_update_text = $_POST['need_update_text']; 
    $subject = $_POST['subject'];
    $ns =  json_encode($ness_social,JSON_FORCE_OBJECT);;
    $optional_social_media = $_POST['optional_social_media']; 
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $employee_type = $_POST['employee_type']; 
    $timestamp = time();
    $hostname = gethostbyaddr($ip);
    $time = date('Y-m-d H:i:s');
                           

    $sql->execute(array(
        "visit" => $visit, 
        "frequency" => $frequency,  
        "rating" => $rating ,
        "attractiveness" => $attractiveness ,
        "rating" => $rating, 
        "color" => $color, 
        "easy_to_find_info" => $easy_to_find_info, 
        "ness_info" => $ness_info, 
        "info_type" => $info_type, 
        "navigation" => $navigation,
        "need_update" => $need_update,
        "need_update_text" => $need_update_text, 
        "subject" => $subject, 
        "ns" => $ns, 
        "optional_social_media" => $optional_social_media, 
        "sex" => $sex, 
        "age" => $age,
        "employee_type" => $employee_type,
        "ip" => $ip,
        "hostname" => $hostname,
        "time" => $time,
        "timestamp" => $timestamp ));
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