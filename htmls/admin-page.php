<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>videniya bookstore </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <!--/////////////////////////////////////////////////-->
  <body>
    <!--/////////////////////////////////////////////////-->
    <header>
        <img src="logo.png" alt="videniya logo" height="100px" width="100px">
      <p>مكتبة فيدينيا | لأن حياة واحدة لا تكفي</p>
      <p id="headp">قصص عربية | قصص عالمية | كتب متنوعة</p>
    </header>
    <!--/////////////////////////////////////////////////-->
    <nav>

      <h1>videniya online bookstore | مكتبة فيدينيا</h1>
      <p>لأن حياة واحدة لا تكفي </p>
      <ul>
        <li> <a href="index.html"> الرئيسية</a> </li>
        <li> <a href="types.html"> الاقسام</a></li>
        <li> <a href="connect-with-us.html"> تواصل معنا</a> </li>
        <li> <a href="login.php">تسجيل الدخول</a> </li>
      </ul>
    </nav>
    <!--/////////////////////////////////////////////////-->
    <button type="button" name="button">اضف كتاب</button>
    <button type="button" name="button">احذف كتاب</button>
    <button type="button" name="button">اضافة مستخدم</button>
    <button type="button" name="button">ازالة مستخدم</button>

<?php
require("connect.php");
$query1="SELECT * from v3r24";
$result=@mysqli_query($query1);
if ($result) {
  echo "<table id=r1> <tr> <th id=h55> id </th>
  <tr> <th id=h55> name </th>
  <tr> <th id=h55> username </th>
  <tr> <th id=h55> email </th>
  <tr> <th id=h55> password </th> </tr>";
}
while ($row=mysql_fetch_array($result,MYSQL_NUM)) {
  echo "<tr id=t56> <td id=t55>$row[0]</td>
  <td id=t55>$row[1]</td>
  <td id=t55>$row[2]</td>
  <td id=t55>$row[3]</td>
  <td id=t55>$row[4]</td>
  </tr>";
}


 ?>

 <!--/////////////////////////////////////////////////-->
   <footer>
     <p>حقوق النشر محفوظة &copy;2022</p>
   </footer>
   <!--/////////////////////////////////////////////////-->

 </body>
 <!--/////////////////////////////////////////////////-->
 </html>
