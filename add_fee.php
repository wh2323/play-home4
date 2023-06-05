<?php
// MySQL 데이터베이스 연결 설정
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ti";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}



$child_ticket_open_price = 7000;
$adult_ticket_open_price = 10000;
$child_ticket_big3_price = 12000;
$adult_ticket_big3_price = 16000;
$child_ticket_free_price = 21000;
$adult_ticket_free_price = 26000;
$child_ticket_year_price = 70000;
$adult_ticket_year_price = 90000;

$child_ticket_open = $_POST['child_ticket_open'];
$adult_ticket_open = $_POST['adult_ticket_open'];
$child_ticket_big3 = $_POST['child_ticket_big3'];
$adult_ticket_big3 = $_POST['adult_ticket_big3'];
$child_ticket_free = $_POST['child_ticket_free'];
$adult_ticket_free = $_POST['adult_ticket_free'];
$child_ticket_year = $_POST['child_ticket_year'];
$adult_ticket_year = $_POST['adult_ticket_year'];

$c_open_total = $child_ticket_open_price*$child_ticket_open;
$a_open_total = $adult_ticket_open_price*$adult_ticket_open;
$c_big3_total = $child_ticket_big3_price*$child_ticket_big3;
$a_big3_total = $adult_ticket_big3_price*$adult_ticket_big3;
$c_free_total = $child_ticket_free_price*$child_ticket_free;
$a_free_total = $adult_ticket_free_price*$adult_ticket_free;
$c_year_total = $child_ticket_year_price*$child_ticket_year;
$a_year_total = $adult_ticket_year_price*$adult_ticket_year;

$TOTAL_PRICE = $c_open_total+ $a_open_total+ $c_big3_total+ $a_big3_total+ $c_free_total+ $a_free_total+ $c_year_total+ $a_year_total;

$sql= "INSERT INTO money ( child_ticket_open_price, adult_ticket_open_price, child_ticket_big3_price, adult_ticket_big3_price, child_ticket_free_price, adult_ticket_free_price, child_ticket_year_price, adult_ticket_year_price, TOTAL_PRICE)
       values('$c_open_total','$a_open_total','$c_big3_total','$a_big3_total','$c_free_total','$a_free_total','$c_year_total','$a_year_total','$TOTAL_PRICE')";

if ($conn->query($sql) === true) {
    echo "입장료 정보(결제)가 성공적으로 추가되었습니다.<br>";
} else {
    echo "입장료 정보를 추가하는 동안 오류가 발생했습니다: " . $conn->error;
}
$sql = "SELECT * FROM ti.money";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $value = $row['TOTAL_PRICE'];
    

    

    // 결과 출력
    echo "<table style='width:100%'>";
    echo "<tr>
            <th><strong> 결제 내역</strong></th>
           </tr>
          <tr>
            <th>어린이 일반</th>
            <th>어린이 big3</th>
            <th>어린이 자유이용권</th>
            <th>어린이 연간이용권</th>
          </tr>
          <tr>
          <th>$child_ticket_open 개</th>
          <th>$child_ticket_big3 개</th>
          <th>$child_ticket_free 개</th>
          <th>$child_ticket_year 개</th>
          </tr>
          <tr>
          <th>$c_open_total 원</th>
          <th>$c_big3_total 원</th>
          <th>$c_free_total 원</th>
          <th>$c_year_total 원</th>
          </tr>
            <tr>
            <th>어른 일반</th>
            <th>어른 big3</th>
            <th>어른 자유이용권</th>
            <th>어른 연간이용권</th>
          </tr>
          <tr>
            <th>$adult_ticket_open 개</th>
            <th>$adult_ticket_big3 개</th>
            <th>$adult_ticket_free 개</th>
            <th>$adult_ticket_year 개</th>
            </tr>
            <tr>
            <th>$a_open_total 원</th>
            <th>$a_big3_total 원</th>
            <th>$a_free_total 원</th>
            <th>$a_year_total 원</th>
            </tr>
          ";
            



    echo "<tr>
            <td colspan='3'></td>
            <td><strong>입장료 합계: " .  $value . "원</strong></td>
          </tr>";
    echo "</table>";}
 else {
    echo "입장료 정보가 없습니다.";}
   
// 데이터베이스 연결 닫기
$conn->close();
?>