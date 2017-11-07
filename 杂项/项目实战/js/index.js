window.onload = function(){

	//导航鼠标悬浮效果
	var lis = document.getElementById("nav").getElementsByTagName("li");//选择导航上的li标签
	//依次添加鼠标移入和移除事件
	for(var i = 0; i < lis.length; i++) {
		//选中状态的标签不添加
		if(lis[i].className == "active") {
			continue;
		}
		lis[i].onmouseover = function(){//添加移入事件
			this.className = "active";//添加class
		};
		lis[i].onmouseout = function(){//添加移出事件
			this.className = "";//移除class
		}
	}

	//轮播图效果
	var as = document.getElementById("img-carousel").getElementsByTagName("a");//选择轮播图下边的小图标
	//图片数组
	var imgArr = ["lunbo1.png", "lunbo2.jpg", "lunbo3.png", "lunbo4.png", "lunbo5.png"];
	//添加移入事件
	for(var i = 0; i < as.length; i++) {
		as[i].index = i;
		as[i].onmouseover = function() {
			//调用函数
			clearImg();
			//修改背景图为对应的数组元素的图片地址
			document.getElementById("img").style.backgroundImage = "url(./images/"+imgArr[this.index]+")";
			//对应元素增加id属性
			this.children[0].id = "img-active";
		}
	}
//	清除所有滚动图底部图标的样式
	function clearImg(){
		for(var i = 0; i < as.length; i++) {
			as[i].children[0].removeAttribute('id');//移出id属性
		}
	}
	//推荐课程鼠标悬浮效果
	var oneTop = document.getElementsByClassName("one-top");//选择对应元素
	//遍历元素添加事件
	for(var i = 0; i < oneTop.length; i++) {
		oneTop[i].onmouseover = function(){//对应元素添加移入事件
			this.children[2].style.display = "block";//对应子元素显示
			this.children[1].style.display = "none";//对应子元素隐藏
		}
		oneTop[i].onmouseout = function(){//对应元素添加移出事件
			this.children[2].style.display = "none";//对应子元素隐藏
			this.children[1].style.display = "block";//对应子元素显示
		}
	}
	//热门演讲鼠标悬浮效果
	var contentTwo = document.getElementById("content-two").getElementsByTagName("div");//选择对应元素
	for(var i = 0; i < contentTwo.length; i++) {
		contentTwo[i].onmouseover = function(){//对应元素添加移入事件
			this.children[2].style.display = "inline-block";//元素显示
		}
		contentTwo[i].onmouseout = function(){//对应元素添加移出事件
			this.children[2].style.display = "none";//元素隐藏
		}
	}
	//返回顶部按钮样式
	document.getElementById("return-top").onmouseover = function(){
		this.style.backgroundImage = "url(./images/13.png)";
	}
	document.getElementById("return-top").onmouseout = function(){
		this.style.backgroundImage = "url(./images/12.png)";
	}
	document.getElementById("return-top").onclick = function(){
		document.body.scrollTop = 0;
	}

	//监控滚动条
	window.onscroll = function(){
		if(document.body.scrollTop > 300) {//判断滚动条的位置
			document.getElementById("return-top").style.display = "block";//显示返回顶部按钮
		}else {
			document.getElementById("return-top").style.display = "none";//隐藏返回顶部按钮
		}
	};

}