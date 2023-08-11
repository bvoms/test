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
<link rel="stylesheet" href="style2.css">
</head>

<body>
<div class="app-container">
     <div class="top-box">
      <img class="tn-atom__img t-img loaded" data-original="https://static.tildacdn.com/tild6334-3834-4666-a331-393430373430/Logo_white.svg" imgfield="tn_img_1659691691441" src="https://static.tildacdn.com/tild6334-3834-4666-a331-393430373430/Logo_white.svg" style="position:absolute;left:100px;right:100px;top:5px" width=" 150" height=" 100">
      <div class="tn-atom" field="tn_text_1660064649103" style="line-height: 22px;position:absolute;left:135px;right:100px;top:65px;color:rgb(175,172,235)">payments</div>
      <div class="into"></div>
      <div class="qr">
        <img class="qrchik" data-original="https://e7.pngegg.com/pngimages/611/718/png-clipart-qr-code-barcode-scanners-computer-icons-coder-miscellaneous-angle.png" src="https://e7.pngegg.com/pngimages/611/718/png-clipart-qr-code-barcode-scanners-computer-icons-coder-miscellaneous-angle.png" style="position: absolute;top: 285px;left: 125px; z-index: 99999; width="180" height="90"">
      
      <div class="oplatagg">
        <img class="kopiya" data-original="https://cdn.icon-icons.com/icons2/1515/PNG/512/copy_105073.png" src="https://cdn.icon-icons.com/icons2/1515/PNG/512/copy_105073.png" style="position: absolute;top: 460px;left: 20px; z-index: 99999; width="50" height="25"">
      <button type="button" class="schet">Скопировать ссылку</button>
    </div>
      <div class="vistavlenie"  style="line-height:20px;position: absolute; left:20px;right: 80px;top:125px;color:rgb(255, 255, 255)">Счет на оплату</div>
      <div class="accaunt">
        <p><font size="3" color="white" weight="lighter"; >Аккаунт: (noros_test)</font>
        </p>
        
      </div>
      <div class="summapop">
        <p><font size="3" color="white" weight="lighter"; >Сумма: <?php echo ($summa) ?></font>
        </p>
      </div>
      <div class="kommentarii">
        <p><font size="2" color="#484e8b" weight="lighter"; >Комментарий: </font>
        <?php echo ($comment) ?>
        </p>
      </div>
      <div class="oplatipzh">
        <input class="text-field__input2" type="text" placeholder="https://oplatipzh.com" >
      </div>
      <div class="ssilka">
      <a href="sheta1.php">Изменить сумму<a>
      
      </div>
      <div class="ssilka1">
        <a href="main.php">Вернуться ко всем счетам<a>
        
        </div>
      
    

      
        
    </div>
</div>

      
     
     
      
     </div>

     
    </div>
</body>
</html>
