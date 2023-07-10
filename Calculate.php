<!DOCTYPE html>
<html>
<head>
  <title> คำนวณค่าดัชนี มวลกาย BMI  025</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image  : url(img/pic.jpg)  ;
      background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
    }
    
    .bmi {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 250px;
    }
    #container {
      width: 400px;
      margin: auto;
      padding: 20px;
      background-color: #4d79ff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    
    h1 {
      text-align: center;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
    }
    
    input[type="number"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #00134d;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    #result {
      margin-top: 60px;
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="bmi">
  <div id="container">
    <h1> คำนวณค่าดัชนี มวลกาย BMI </h1>
    <form method="POST" action="">

    <label for="height">Height (cm):</label>
    <input type="number" name="height" required>

    <label for="weight">Weight (kg):</label>
    <input type="number" name="weight" required>
      
      
      
    <input type="submit" value="Calculate">
    </form>
    <div id="result">

      <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $height = $_POST["height"] / 100; // Convert height to meters
        $weight = $_POST["weight"];
     
          
          // Calculate BMI
          $bmi = $weight / ($height * $height);
          
          // Display result
          echo ' ค่า BMI ของคุณ ' . number_format($bmi, 2); if ($bmi <= 18.5 ){ 
            echo ' ผอมเกินปุย ' ;
        }
        else if ($bmi >= 18.6  &&   $bmi <= 22.9){
            echo ' น้ำหนักปกติ ' ;
        }
        else if ($bmi >= 23.0  &&   $bmi <= 24.9){
            echo ' น้ำหนักเกิน ' ;
        }
        else if ($bmi >= 25.0  &&   $bmi <= 29.9 ){
            echo ' อ้วน ' ;
        }
        else if ($bmi >= 30.0 ){
            echo ' อ้วนมาก ' ;
        }
        }

       
      ?>
    </div>
  </div>
  </div>

</body>
</html>
