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
    $("#play_pro_bar").on("click", function (event) {
        //相对于事件源的X轴坐标
        prayProgressBarX = event.offsetX;
        //重新绘制
        drawPlayProgressBar();
        
        
        
        
        
        
        
        
        
        
    });
});

/*初始化canvas*/
function initPlayProgressBarCanvas() {
    //jQuery对象
    var $canvas = $("<canvas></canvas>");

    //获取DOM对象
    canvasDom = $canvas.get(0);
    canvasDom.width = 800;
    canvasDom.height = 10;
    canvasDomCtx = canvasDom.getContext("2d");
    drawPlayProgressBar();

    //jQuery操作
    $("#play_pro_bar").append($canvas);

    //设置样式
    $canvas.addClass("play_pro_canvas");
}



/*绘制进度条方法*/
function drawPlayProgressBar() {
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
    if (prayProgressBarX > 0) {
        canvasDomCtx.lineCap = "round";
    }
    canvasDomCtx.moveTo(0, 5);
    canvasDomCtx.lineTo(prayProgressBarX, 5);
    canvasDomCtx.stroke();
    canvasDomCtx.closePath();
}


