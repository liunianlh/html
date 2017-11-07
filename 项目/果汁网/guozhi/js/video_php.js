var canvasDom = null;
var prayProgressBarX = 0;
var canvasDomCtx = null;

//窗体加载完毕
$(function ($) {
    //初始化播放进度条的Canvas
    initPlayProgressBarCanvas();
    //绘制播放进度条的canvas的效果
    drawPlayProgressBar();

    //注册事件
    $("#controls_play_bar").on("click", function (event) {
        //相对于事件源的X轴坐标
        prayProgressBarX = event.offsetX;
        console.info("@@@@@@@@@@@@@@@@@@@y@@@" + prayProgressBarX);
        if (prayProgressBarX < 5) {
            prayProgressBarX = 5;
        }
        if (prayProgressBarX > 315) {
            prayProgressBarX = 315;
        }
        console.info("@@@@@@@@@@@@@@@@@@@z@@@" + prayProgressBarX);
        //重新绘制
        drawPlayProgressBar();
    });


    //注册事件
    initEventIncident();
    //--------------------------------全屏事件------------------------------
 $("#controls_full_screen").on("click", function () {
      $("#video")[0].webkitRequestFullScreen();

    });
//---------------------------------全屏事件--------------------------------------------------



//--------------------------------------设置音量-----------------------------------------------
 var music=true;
 $("#controls_volume_img").on("click", function () {
     if(music){
           $("#controls_volume_controls").css("display","block");
           music=false;
     }
     else{
          $("#controls_volume_controls").css("display","none");
            music=true;
     }

    });
//--------------------------------------设置音量-----------------------------------------------



});

/*初始化canvas*/
function initPlayProgressBarCanvas() {
    //jQuery对象
    var $canvas = $("<canvas></canvas>");

    //获取DOM对象
    canvasDom = $canvas.get(0);
    canvasDom.width = 320;
    canvasDom.height = 10;
    canvasDomCtx = canvasDom.getContext("2d");
    drawPlayProgressBar();

    //jQuery操作
    $("#controls_play_bar").append($canvas);

    //设置样式
    $canvas.addClass("play_pro_canvas");
}



/*绘制进度条方法*/
function drawPlayProgressBar() {

    if (prayProgressBarX > 0 && prayProgressBarX <= 315) {
        //获取canvasDom对象上下文环境

        canvasDomCtx.clearRect(0, 0, canvasDom.width, canvasDom.height);
        //创建渐变颜色的设置
        var gradient = canvasDomCtx.createLinearGradient(0, 0, canvasDom.width, 0);

        gradient.addColorStop(0, "red");
        gradient.addColorStop(0.5, "blue");
        gradient.addColorStop(1, "green");


        canvasDomCtx.strokeStyle = gradient;

        canvasDomCtx.beginPath();
        canvasDomCtx.lineWidth = 10;

        canvasDomCtx.lineCap = "round";

        canvasDomCtx.moveTo(5, 5);
        canvasDomCtx.lineTo(prayProgressBarX, 5);

        canvasDomCtx.stroke();
        canvasDomCtx.closePath();
    }
}




/*------------------------------------------------以上是绘制界面的功能------------------------------------------------------*/


/*--------------------------------------------------以下是关于播放视频的操作-------------------------------------------------*/
var videoDom = null;
function initEventIncident() {
    //获取播放视频控件对象
    videoDom = $("#video").get(0);
    //注册播放视频的事件
    $("#controls_play").on("click", play);

    //当媒体的总时长改变，我就认为这个视频加载完成
    $("#video").on("durationchange", function () {
        initVideoTime(videoDom.duration, $("#controls_duration_time"));
    });
    //注册媒体播放时间改变的事件
    $("#video").on("timeupdate", function () {
        //改变时间戳
        initVideoTime(videoDom.currentTime, $("#controls_play_time"));
        //改变播放的进度条
        var ratio = videoDom.currentTime / videoDom.duration;

        prayProgressBarX = ratio * 315;

        if (prayProgressBarX < 5) {
            prayProgressBarX = 5;
        }
        if (prayProgressBarX >= 315) {
            prayProgressBarX = 315;
         
            
//-------------------------视频结束变成暂停状态-------------------------------------------            
        //转换成暂停状态
        videoDom.pause();
        //改变背景内容
        $("#controls_play").get(0).style.backgroundPosition = "0px -32px"; 
            
        }
//-------------------------------------------------------------------------
        //重新绘制
        drawPlayProgressBar();

      

    });
  
}

var play = function () {


    //视频播放的状态
    if (videoDom.paused) {
        //转换成播放状态
        videoDom.play();
        //改变背景内容
        $("#controls_play").get(0).style.backgroundPosition = "5px 5px";
        //  $("#controls_play").addClass("")

    } else {
        //转换成暂停状态
        videoDom.pause();
        //改变背景内容
        $("#controls_play").get(0).style.backgroundPosition = "0px -32px";
    }
};



function initVideoTime(time, $div) {
    /*-----------------------------设置时间效果-------------------------------------*/
    var time_str = "";
    //计算小时
    var hour = Math.floor(time / 3600);
    time -= hour * 3600;
    //计算分钟
    var minutes = Math.floor(time / 60);
    time -= minutes * 60;
    //计算秒数
    var seconds = Math.floor(time);

    //考虑小时数 小于10的问题
    if (hour < 10) {
        time_str += ("0" + hour);
    } else {
        time_str += hour;
    }
    //考虑分钟数 小于10的问题
    if (minutes < 10) {
        time_str += (":" + "0" + minutes);
    } else {
        time_str += (":" + minutes);
    }
    //考虑秒数小于10的问题
    if (seconds < 10) {
        time_str += (":" + "0" + seconds);
    } else {
        time_str += (":" + seconds);
    }

    $div.text(time_str);
    /*-----------------------------设置时间效果-------------------------------------*/
}








