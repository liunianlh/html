<?php
$userInfo=[
'username'=>'king',
'age'=>12,
'email'=>'1205177965@qq.com'
];
foreach($userInfo as $fo){
echo $fo,'<br/>';
}
//��������
foreach($userInfo as $in=>$fo){
echo $in,'--',$fo,'<br/>';
}
//������ֵ������
//��ά������+����������(ģ������)
$users=[
  ['id'=>1,'username'=>'king1','age'=>42],
  ['id'=>2,'username'=>'king2','age'=>32],
  ['id'=>3,'username'=>'king3','age'=>52],
  ['id'=>4,'username'=>'king4','age'=>12],
  ['id'=>5,'username'=>'king5','age'=>72]
];

foreach($users as $user){
  echo '��ţ�',$user['id'],'<br/>';
  echo '�û�����',$user['username'],'<br/>';
  echo '���䣺',$user['age'],'<br/>';
  echo '<hr/>';
}
