<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>놀이공원 입장표</h2>
<form method="post" action="add_fee.php">
  <label for="fname">name:</label>
  <input type="text" id="fname" name="fname"><br>
</form>


<form method="post" action="add_fee.php">
 <table style="width:100%">
  <tr>
    <th>no</th>
    <th>구분</th>
    <th colspan="2">어린이</th>
    <th colspan="2">성인</th>
    <th>비고</th>
  </tr>
  <tr>
   
  </tr>  
   <td>1</td>
    <td>입장권</td>
    <td>7000</td>
   <td>
    <label for="child_ticket_open"></label>
    <select id="child_ticket_open" name="child_ticket_open">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
      </td>
    <td>10000</td>
    <td>
    <label for="adult_ticket_open"></label>
    <select id="adult_ticket_open" name="adult_ticket_open">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </td>
    <td>입장</td>
  </tr>
  <tr>
    <td>2</td>
    <td>big 3</td>
    <td>12000</td>
    <td>
    <label for="child_ticket_big3"></label>
    <select id="child_ticket_big3" name="child_ticket_big3">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </td>
    <td>16000</td>
    <td>
    <label for="adult_ticket_big3"></label>
    <select id="adult_ticket_big3" name="adult_ticket_big3">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </td>
    <td>입장+놀이 3종</td>
  </tr>
  <tr>
    <td>3</td>
    <td>자유이용권</td>
    <td>21000</td>
    <td>
    <label for="child_ticket_free"></label>
    <select id="child_ticket_free" name="child_ticket_free">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </td>
    <td>26000</td>
    <td>
    <label for="adult_ticket_free"></label>
    <select id="adult_ticket_free" name="adult_ticket_free">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </td>
    <td>입장+놀이자유</td>
  </tr>
   <tr>
    <td>4</td>
    <td>연간이용권</td>
    <td>70000</td>
    <td>
    <label for="child_ticket_year"></label>
    <select id="child_ticket_year" name="child_ticket_year">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </td>
    <td>90000</td>
    <td>
    <label for="adult_ticket_year"></label>
    <select id="adult_ticket_year" name="adult_ticket_year">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </td>
    <td>입장+놀이자유</td>
 </table>
 <input type="submit" value="Submit">
</form>
<p><strong> 주의사항: 이름과 입장권을 선택한 뒤 제출하시오</strong></p>
</body>
</html>