window.onload = function(){

	//导航鼠标悬浮效果
	var lis = document.getElementById("nav").getElementsByTagName("li");
	for(var i = 0; i < lis.length; i++) {
		if(lis[i].className == "active") {
			continue;
		}
		lis[i].onmouseover = function(){
			this.className = "active";
		};
		lis[i].onmouseout = function(){
			this.className = "";
		}
	}
	//底部悬浮关闭
	document.getElementById("close").onclick = function(){
		document.getElementById("bottom-float").style.display = "none";
	};
//	鼠标悬浮列表样式变化
	//选择当前元素的所有子元素
	var oneTop = document.getElementById("content-list").children;
	for(var i = 0; i < oneTop.length; i++) {
		oneTop[i].onmouseover = function(){
			this.style.backgroundColor = "rgb(246,249,250)";
			this.getElementsByTagName("a")[4].style.backgroundColor = "#fff";
			this.getElementsByClassName("content-list-info-one-icon01")[0].style.borderBottom = "10px solid RGB(198,230,241)";
			this.getElementsByClassName("content-list-info-one-icon02")[0].style.borderTop = "10px solid RGB(198,230,241)";
			this.getElementsByClassName("content-list-info-one-num")[0].style.backgroundColor = "#fff";
			this.getElementsByClassName("content-list-info-three")[0].style.display = "none";
			this.getElementsByClassName("content-list-info-six")[0].style.display = "block";
		}
		oneTop[i].onmouseout = function(){
			this.style.backgroundColor = "#fff";
			this.getElementsByTagName("a")[4].style.backgroundColor = "#f5faff";
			this.getElementsByClassName("content-list-info-one-icon01")[0].style.borderBottom = "10px solid RGB(198,230,241)";
			this.getElementsByClassName("content-list-info-one-icon02")[0].style.borderTop = "10px solid RGB(198,230,241)";
			this.getElementsByClassName("content-list-info-one-num")[0].style.backgroundColor = "RGB(239,248,253)";
			this.getElementsByClassName("content-list-info-three")[0].style.display = "block";
			this.getElementsByClassName("content-list-info-six")[0].style.display = "none";
		}
	}
}