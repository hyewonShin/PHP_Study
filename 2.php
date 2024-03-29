<?php
// echo와  print는 동일
echo "1";
print "2";

// 아래와 같은 방식으로도 사용할 수 있다
echo ("3");
print ("4");

echo "<h3>PHP는 재밌다!</h3>";
echo "Hello world! <br>";

// . 으로 문자열을 연결
$txt1 = "Learn PHP";
$x = 5;
$y = 3;
echo "<h2>".$txt1."</h2>";

// 연산자를 사용하면 결과값이 출력됌
echo $x + $y."<br>";

// 변수형태 확인 
$x = "문자열을 넣으면";
var_dump($x);
echo "<br>"; // 한 줄 내리기 

// strlen() : 문자열 bytes 반환
$x_len = strlen("한글");
echo $x_len;
echo "<br>"; // 한 줄 내리기 

// 단어(word) 갯수 반환(한글은 제공안함)
echo str_word_count("Hello World");
echo "<br>"; // 한 줄 내리기 

// 문자열 역순으로 정렬
echo strrev("Hello World");
echo "<br>"; // 한 줄 내리기 

// 특정 문자열 찾기(0부터 시작)
$a = strpos("Hello wolrd", "world");
echo $a;

// ex) 이메일에 @가 존재하는지 확인
$email = "aaa@gmail.com";
if(strpos($email,"@")) {
  echo "이메일 형식에 맞음";
}else{
  echo "이메일 형식이 잘못됌";
}

?>

