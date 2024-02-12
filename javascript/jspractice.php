<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <script src="jquery.js"></script>
    <style>
      .error{
        color : red;
        background : black;
        text-align : center;
      }
      .errorcolor{
        color : green;
        background : white;

      }
      .newbox{
        height : 100px;
        width : 100px;
        background : red;
      }
    </style>
  </head>
  <body>
    <div class="error "></div>
    <div class="form">
        <input type="text" name="username" class="username" placeholder="Enter your name">
        <br>
        <input type="text" class="email" placeholder="Enter your email">
		    <br>
        <input type="password" name="password" class="password" placeholder="Enter your password">
        <br>
        <button class="btn">Submitt</button>
        <button class="sbtn"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
    </div>
        <script src="jspractice.js" ></script>
  </body>
</html>

