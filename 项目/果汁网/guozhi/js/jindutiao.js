var canvasDomtwo = null;
var prayProgressBarYtwo = 0;
var canvasDomCtxtwo = null;
//窗体加载完毕
$(function ($) {
    var videoDom = $("#video")[0];
     
    //初始化播放进度条的Canvas
    initPlayProgressBarCanvastwo();
    //绘制播放进度条的canvas的效果
    drawPlayProgressBartwo();

    //注册事件
    $("#controls_volume_bar").on("click", function (event) {
        //相对于事件源的Y轴坐标
        prayProgressBarYtwo = event.offsetY;
        //重新绘制
//        alert(prayProgressBarYtwo);
        drawPlayProgressBartwo();
        var len = prayProgressBarYtwo / 80;
console.info();

        if (videoDom.muted)
        {
            videoDom.muted = false;
        } else {
            videoDom.volume = len;
        }
console.info(videoDom.volume);
        $("#controls_volume_img").dblclick(function () {
            if (videoDom.volume) {
               videoDom.volume = 0;
                $("#controls_volume_img_tupian").get(0).style.src="../images/Speaker_mute.png";

            } else {
                videoDom.volume = len;
                 $("#controls_volume_img_tupian").get(0).style.src="../images/Speaker_louder.png";
            }
        });

    });
});

/*初始化canvas*/
function initPlayProgressBarCanvastwo() {
    //jQuery对象
    var $canvas = $("<canvas></canvas>");

    //获取DOM对象
    canvasDomtwo = $canvas.get(0);
    canvasDomtwo.width = 10;
    canvasDomtwo.height = 80;
    canvasDomCtxtwo = canvasDomtwo.getContext("2d");
    drawPlayProgressBartwo();

    //jQuery操作
    $("#controls_volume_bar").append($canvas);

    //设置样式
    $canvas.addClass("play_volume_canvas");
}



/*绘制进度条方法*/
function drawPlayProgressBartwo() {
    //获取canvasDom对象上下文环境

    canvasDomCtxtwo.clearRect(0, 0, canvasDomtwo.width, canvasDomtwo.height);
    //创建渐变颜色的设置
    var gradient = canvasDomCtxtwo.createLinearGradient(0, 80, 0, 0);

    gradient.addColorStop(0, "red");
    gradient.addColorStop(0.5, "blue");
    gradient.addColorStop(1, "green");


    canvasDomCtxtwo.strokeStyle = gradient;
    canvasDomCtxtwo.beginPath();
    canvasDomCtxtwo.lineWidth = 20;
    if (prayProgressBarYtwo > 0) {
        canvasDomCtxtwo.lineCap = "round";
    }
    canvasDomCtxtwo.moveTo(5, 0);
    canvasDomCtxtwo.lineTo(5, prayProgressBarYtwo);
    canvasDomCtxtwo.stroke();
    canvasDomCtxtwo.closePath();
}