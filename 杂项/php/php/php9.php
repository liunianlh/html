<?php


header('content-type:text/html;charset=utf-8');
//����
//������������ַ�ʽ
///ͨ��arrat()��ʽ
///ͨ��[]��̬����
///ͨ��range()��compact()���ٴ���
///ͨ��define()���峣������



//ͨ��array()
//������
$arr=array();
//����Ƿ�Ϊ����
var_dump($arr);
//gettype();�õ�����������
echo gettype($arr);
//ͨ��is_array();�������Ƿ�Ϊ����
var_dump(is_array($arr));
echo '<hr/>';
//ͨ��array()�±���������������
$arr=array(2,3.4,'king',ture);
print_r($arr);
/*
Array ( [0] => 2 [1] => 3.4 [2] => king [3] => ture ) 
*/