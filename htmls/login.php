<?php
session_start();
if ( isset( $_SESSION['email'] )) {
    header('Location: index.php');
}
require 'F:\xampp\htdocs\videniya book store\connect.php';
$repeat_err = $success = $fail = $exist_err  = $login_failed = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "SELECT * FROM users WHERE email = '$_POST[uname]' and password = '$_POST[psw]'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $_POST['uname'];
        header("Location: index.php");
    } else {
        $login_failed = '<span class="err">Incorrect Email or Password</span>';
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>videniya bookstore | login</title>
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
    <div class="login">
    <h2>تسجيل الدخول</h2>
      <form class="login" action="index.html" method="post">
      البريد الالكتروني: <br> <input type="email" name="email"><br>
      كلمة السر: <br> <input type="password" name="password"><br>
      <input type="submit" name="submit" value="تسجيل الدخول" class="zar">
      </form>
    </div>
    <div class="logup">
      <h2>انشاء حساب جديد</h2>
      <form class="logup" action="index.html" method="post">
        الاسم: <br> <input type="text" name="name" value=""><br>
        اسم المستخدم: <br> <input type="text" name="username"><br>
        البريد الالكتروني: <br> <input type="email" name="email"><br>
        كلمة السر: <br> <input type="password" name="password"><br>
        <input type="submit" name="submit" value="تسجيل الدخول"class="zar">
      </form>
      </div>
    <!--/////////////////////////////////////////////////-->
    <footer>
      <p>حقوق النشر محفوظة &copy;2022</p>
    </footer>
    <!--/////////////////////////////////////////////////-->

  </body>
  <!--/////////////////////////////////////////////////-->
</html>
