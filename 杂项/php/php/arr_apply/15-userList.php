<?php
$users[]=['id'=>1,'username'=>'king','age'=>12,'email'=>'382771946@qq.com'];
$users[]=['id'=>2,'username'=>'queen','age'=>33,'email'=>'3333134123@qq.com'];
$users[]=['id'=>3,'username'=>'imooc','age'=>3,'email'=>'imooc@qq.com'];
$users[]=['id'=>4,'username'=>'imooc1','age'=>31,'email'=>'imooc1@qq.com'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>用户列表</title>
</head>
<body>
  <h1>用户列表</h1>
  <table border="1" cellpadding="0" cellspacing="0" width="80%" bgcolor="#abcdef">
    <tr>
      <td>编号</td>
      <td>用户名</td>
      <td>年龄</td>
      <td>邮箱</td>
    </tr>
    <?php
    foreach($users as $user){
    ?>
    <tr>
      <td><?php echo $user['id'];?></td>
      <td><?php echo $user['username'];?></td>
      <td><?php echo $user['age'];?></td>
      <td><?php echo $user['email'];?></td>
    </tr>
    <?php
    }
    ?>
  </table>

</body>
</html>
