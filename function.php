<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <?php
    $str ="Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incid
    idunt ut labore et dolore magna aliqua. Ut


     enim ad minim veniam, quis nostrud exercitation ull
    amco laboris nisi ut aliquip ex ea commodo cons
    equat. Duis aute irure dolor in reprehenderit in
     voluptate velit esse cillum dol
    ore eu fugiat nulla pariatur."

    echo $str;
     ?>
     <h2>strlen()</h2>
     <?php
     echo strlen($str);
     ?>
     <h2>nl2br</h2>
     <?php
     echo nl2br($str);
      ?>
  </body>
</html>
