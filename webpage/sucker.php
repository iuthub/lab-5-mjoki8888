<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
    <meta charset="utf-8">
  </head>
  
<body>

  <?php if($_SERVER["REQUEST_METHOD"]=="GET") { ?>
    <?php } else { ?>
    <h1>Thanks,Sucker!</h1>
      <table>
        <p>Your information has been recorded!</p>
        <tr>
          <td>Name <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $_POST["name"] ?></td>
        </tr>
        <tr>
          <td>Section <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $_POST["select"] ?></td>         
        </tr>
        <tr>
          <td>Credit Card <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $_POST["number"] ?> <?= $_POST["visa"] ?></td>
        </tr>
      </table>
  <?php } ?>

  </body>
</html>