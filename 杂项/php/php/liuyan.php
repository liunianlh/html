<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
$filename="msg.txt";
$msgs=[];
//����ļ��Ƿ����
if(file_exists($filename)){
  //��ȡ�ļ��е�����
  $string=file_get_contents($filename);
  if(strlen($string)>0){
    $msgs=unserialize($string);
  }
}
//����û��Ƿ������ύ��ť
if(isset($_POST['pubMsg'])){
  $username=$_POST['username'];
  $title=strip_tags($_POST['title']);
  $content=strip_tags($_POST['content']);
  $time=time();
  //������ɹ�������
  $data=compact('username','title','content','time');
  array_push($msgs,$data);
  $msgs=serialize($msgs);
  if(file_put_contents($filename,$msgs)){
    echo "<script>alert('���Գɹ���');location.href='22-msg.php';</script>";
  }else{
    echo "<script>alert('����ʧ�ܣ�');location.href='22-msg.php';</script>";
  }
}
/*
$msgs=[
  [...],
  [...]
];
file_get_contents($filename):�õ��ļ��е����ݣ����ص����ַ���
file_put_contents($filename,$data):��ָ���ļ�д���ݣ�����ļ������ڻᴴ��
serialize($str):���к��ַ���
unserialize($str):�����к�
*/
// print_r($msgs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
/*<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="page-header">
				<h1>
					IMOOC���԰�-<span>V1.0</span>
				</h1>
			</div>
			<div class="hero-unit">
				<h1>
					Hello, world!
				</h1>
				<p>
					����һ�����ӻ�����ģ��, ����Ե��ģ��������ֽ����޸�, Ҳ����ͨ����������ı༭����и��ı��޸�. �϶�������ʵ������.
				</p>
				<p>
					<a rel="nofollow" class="btn btn-primary btn-large" href="#">�ο����� ?</a>
				</p>
			</div>
      <?php if(is_array($msgs)&&count($msgs)>0):?>
			<table class="table">
				<thead>
					<tr>
						<th>
							���
						</th>
						<th>
							�û���
						</th>
						<th>
							����
						</th>
						<th>
							ʱ��
						</th>
            <th>
							����
						</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;foreach($msgs as $val):?>
            <tr class="success">
              <td>
                <?php echo $i++;?>
              </td>
              <td>
                <?php echo $val['username'];?>
              </td>
              <td>
                <?php echo $val['title'];?>
              </td>
              <td>
                <?php echo date("m/d/Y H:i:s",$val['time']);?>
              </td>
              <td>
                <?php echo $val['content'];?>
              </td>
            </tr>
          <?php endforeach;?>
				</tbody>
			</table>
    <?php endif;?>
			<form action="#" method="post">
				<fieldset>
					 <legend>������</legend>
           <label>�û���</label><input type="text" name="username" required />
           <label>����</label><input type="text" name="title" required />
           <label>����</label><textarea name="content" rows="5" cols="30" required></textarea>
           <hr>
           <input type="submit" class="btn btn-primary btn-lg" name="pubMsg" value="��������"/>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</body>
</html>
