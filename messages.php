
<?php require_once "head.php" ?>
<?php require_once "db_connection.php" ?>
          
<head>
    <style>
        .container {margin: 40vh auto;}
         #myProgress {
                         width: 100%;
                         background-color: #ddd;
                    }

        #myBar      {
                        width: 1%;
                        height: 1px;
                        background-color: #4CAF50;
                    }            
    </style>

</head>

    <div>    
        <div id="myBar"></div>
    </div>
<br>


<script>

  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width=width+0.339; 
      elem.style.width = width + '%'; 
    }
  }

</script>
    <div class="container" align="middle" >
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Dziękuję!</h4>
                <p>Twoja ankieta została przyjęta</p>
                <p class="mb-0">W razie jakichkolwiek pytań zkontaktujsię z działem <b>GA</b></p>
        </div>
    </div>
