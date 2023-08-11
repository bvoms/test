<?php
if (isset($_POST["com"]) && isset($_POST["sum"])) {
      
    $conn = new mysqli("localhost", "root", "", "noros");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $comment = $conn->real_escape_string($_POST["com"]);
    $summa = $conn->real_escape_string($_POST["sum"]);
    $sql = "INSERT INTO Users (comment, summa) VALUES ('$comment', $summa)";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}

?> 

 <html>
<head>
<title>Create Mobile Payment Page Design</title>
<link rel="stylesheet" href="style1.css">
</head>
<script type="text/javascript">
    
</script>
<body>

<div class="app-container">
     <div class="top-box">
      <img class="tn-atom__img t-img loaded" data-original="https://static.tildacdn.com/tild6334-3834-4666-a331-393430373430/Logo_white.svg" imgfield="tn_img_1659691691441" src="https://static.tildacdn.com/tild6334-3834-4666-a331-393430373430/Logo_white.svg" style="position:absolute;left:100px;right:100px;top:5px" width=" 150" height=" 100">
      <div class="tn-atom" field="tn_text_1660064649103" style="line-height: 22px;position:absolute;left:135px;right:100px;top:65px;color:rgb(175,172,235)">payments</div>
      <div class="into"></div>
      <div class="oplatagg">
      <form action="oplata.php" method="post">
      <button class="schet" id="kk">Оформить счет</button>
      <div class="text-field1">
      <form action="oplata.php" method="post">
          <label for="money">Сумма</label>
        <input class="text-field__input" name="sum" id="sum" type="number" placeholder="Введите сумму" >
      </form>
      
        <label for="comment">Комментарий</label>
        
        <input class="text-field__input" name="com" id="com" placeholder="Ваш комментарий">
        </form>
      
      
    
   
        
      </div>
      </form>
  </div>
      <div class="vistavlenie"  style="line-height:20px;position: absolute;left: 17px;right: 150px;top: 118px;color:rgb(255, 255, 255)">Выставление счета</div>
      
      <a href="main.php">Вернуться ко всем счетам<a>
        
        <p>Сумма оплаченного счета будет зачислена на <br> баланс валюты вашего аккаунта</p>
        

      
        
    </div>
</div>

      
     
     
      
     </div>

     
    </div>
</body>
</html>
     