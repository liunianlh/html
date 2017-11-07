                var anniu = document.getElementById("dl");
		var denglu = document.getElementById("denglu");
		var guan = document.getElementById("guan");
		var guan2 = document.getElementById("guan2");
		var da = document.getElementById("dada");
		var da1 = document.getElementById("da1");
		var zhuce=document.getElementById("zl");
		var zhuce1=document.getElementById("zhuce");
		
                 var denglu2=document.getElementById("denglu");
		//登录
		anniu.onclick = function() {
			da.style.display = "block";
			denglu.style.display = "block";

		}
		guan.onclick = function() {
			denglu.style.display = "none";
			da.style.display = "none";
		}
		
		//注册
		zhuce.onclick=function(){
			da1.style.display = "block";
			zhuce1.style.display = "block";
		}
		guan2.onclick=function() {
			zhuce1.style.display = "none";
			da1.style.display = "none";
		}
                

                    
                    
                    
                    
                    
//               第二个导航 
                
////                 var dl3=document.getElementById("dl3");
////                dl3.onclick=function(){
////                    alert("我是登陆");
////                }
//                
                
                var dl2=document.getElementById("dl2");
                 var zl2=document.getElementById("zl2");
                dl2.onclick=function(){
                    da.style.display = "block";
			denglu.style.display = "block";
                }
                guan.onclick = function() {
			denglu.style.display = "none";
			da.style.display = "none";
		}
                
                
                zl2.onclick=function(){
			da1.style.display = "block";
			zhuce1.style.display = "block";
		}
		guan2.onclick=function() {
			zhuce1.style.display = "none";
			da1.style.display = "none";
		}
                
                
//                  var soucuo_denglu=document.getElementById("ssdl");
//                 var soucuo_zhuce=document.getElementById("sszl");
//                soucuo_denglu.onclick=function(){
//                    alter("这是搜索");
//                }
//                
                
//                验证码
                 function changing() {
        document.getElementById('checkpic').src = "http://localhost/huaban/yzm.php?" + Math.random();
    }
    
    
    
    
    
    
    
    
//注册点击事件
//1.添加事件
    $("#zhuce1").click(function () {
//  2.去获取数据
        var name = $("input[name=name]").val();
        var pwd = $("input[name=pwd]").val();
        var yzm = $("input[name=yzm]").val();

//3.简单验证
        if (name == "" || pwd == "" || yzm == "" || yzm == "") {
            swal("信息填写不完整", "", "error");
        } else {
//            4.将数据提交到后台
            $.ajax({
                type: "get",
                url: "register.php",
                data: {name: name, pwd: pwd, yzm: yzm}, //提交参数：json数据串
//                    data："name="+name+"&pwd"+pwd+"&yzm="+yzm,
                success: function (data) {
                    data = $.parseJSON(data);//将数据you字符串转换为json数据，不一定停用
                    if (data.status == 0)
                    {
                        swal(data.msg, "", "error");



                    } else {

                        history.go(0);//刷新当前页面
                    }
                } //    成功请求，接受返回的值，(请求状态为200)
            });
        }

    });
    
    
    
    
    
//    登录的点击事件
   
   
   //1.添加事件
    $("#denglu1").click(function () {
//  2.去获取数据
        var name = $("input[name=name1]").val();
        var pwd = $("input[name=pwd1]").val();


//3.简单验证
        if (name == "" || pwd == "" ) {
            swal("信息填写不完整", "", "error");
        } else {
//            4.将数据提交到后台
            $.ajax({
                type: "post",
                url: "login.php",
                data: {name: name, pwd: pwd}, //提交参数：json数据串
           
                success: function (data) {
                    data = $.parseJSON(data);//将数据you字符串转换为json数据，不一定停用
                    if (data.status == 1)
                    {
//                         swal("222", "", "error");
                       history.go(0);
                     
                    } else {

                    swal(data.msg, "", "error");
                    }
                } //    成功请求，接受返回的值，(请求状态为200)
            });
        }

    });
    
    
    
    //    搜索
    
//    导航1
    $("#index_sousuo").click(function(){
        var text=$("#index_text").val();
        if(text==""){
            swal("请输入搜索内容", "", "error");
        }
        else{
             window.location.href="sousuo.php?sousuo="+text;
        }
       
    });
    
    
//    导航2
      $("#index-dianji-er").click(function(){
        var text=$("#index_text_er").val();
        if(text==""){
            swal("请输入搜索内容", "", "error");
        }
        else{
             window.location.href="sousuo.php?sousuo="+text;
        }
       
    });
    