<?php
 

$user = 'root';
$password = '';
 

$database = 'noros';
 

$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 

if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 

$sql = " SELECT * FROM Users ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
    <html>
<head>
<title>Create Mobile Payment Page Design</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

        
        <!-- TABLE CONSTRUCTION -->
        


<div class="app-container">
     <div class="top-box">
      <img class="tn-atom__img t-img loaded" data-original="https://static.tildacdn.com/tild6334-3834-4666-a331-393430373430/Logo_white.svg" imgfield="tn_img_1659691691441" src="https://static.tildacdn.com/tild6334-3834-4666-a331-393430373430/Logo_white.svg" style="position:absolute;left:100px;right:100px;top:5px" width=" 150" height=" 100">
      <div class="tn-atom" field="tn_text_1660064649103" style="line-height: 22px;position:absolute;left:135px;right:100px;top:65px;color:rgb(175,172,235)">payments</div>
      
      <div class="sheta"  style="line-height:20px;position: relative; z-index:99999 ; left:20px;right: 250px;top:200px;color:rgb(255, 255, 255) ">Выставленные счета</div>
     <div class="bg"  style="height: 370px; line-height: 335px;left:135px;right:140px;top:65px;color:rgb(175,172,235)">
    <p></p></div>
      
      <form action="sheta1.php">
      <button class="payment-option-btn">Выставить счет</button>
      </form>
      
      <div class="prokrutka">   
          
            
            <?php
               
                while($rows=$result->fetch_assoc())
                {
            ?>
           
                
                   <p> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;Счет #<?php echo $rows['id'];?>          
                   &emsp;&emsp;&emsp;&ensp; <?php echo $rows['summa'];?>₽&emsp;&emsp;&emsp; Выставлен
                   
                </p>
            <?php
                }
            ?>
        
     
        
      </div>
        </div>
       
     </div>
     
      
     </div>

     
    </div>
</body>
</html>
 