<?php
$userInfo=[
'username'=>'king',
'age'=>12,
'email'=>'1205177965@qq.com'
];
foreach($userInfo as $fo){
echo $fo,'<br/>';
}
//遍历内容
foreach($userInfo as $in=>$fo){
echo $in,'--',$fo,'<br/>';
}
//遍历键值和内容
//二维的索引+关联的数组(模拟数据)
$users=[
  ['id'=>1,'username'=>'king1','age'=>42],
  ['id'=>2,'username'=>'king2','age'=>32],
  ['id'=>3,'username'=>'king3','age'=>52],
  ['id'=>4,'username'=>'king4','age'=>12],
  ['id'=>5,'username'=>'king5','age'=>72]
];

foreach($users as $user){
  echo '编号：',$user['id'],'<br/>';
  echo '用户名：',$user['username'],'<br/>';
  echo '年龄：',$user['age'],'<br/>';
  echo '<hr/>';
}
