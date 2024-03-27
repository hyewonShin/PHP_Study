<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>My first PHP page</h1>
  <?php
    echo "Hello Wolrd" 
  ?>
  
  <?php
  // 다른 언어같이 별다른 선언이 필요하지 않다(ex: string, int ...).
  // 넣어지는 값에 따라 변수의 형태가 결정이 된다.
  $txt = "안녕하세요"; // 문자열
  $x = 5; //정수
  $y = 10.5; //실수

  // 변수는 대소문자를 구분한다.
  echo "x = $x, X= $X <br>";
  ?>

  <?php
  $x = 5;
  
  function myTest() {
    // 함수안에서 사용하려면 해당 변수 앞에 global을 붙여 전역변수로 만들어준다.
    global $x;
    $y = 111;
    $x++;

    echo "함수 안 변수 x의 출력값 : $x <br>"; 
    echo "함수 안 변수 y의 출력값 : $y <br>"; 
    echo "<br>";
  }

  echo "함수 밖 변수 x의 출력값 : $x <br>";
  
  myTest();
?>

</body>
</html>