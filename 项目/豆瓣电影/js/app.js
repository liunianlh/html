//模块化

var app=angular.module("myApp",["ui.router"]);



//自定义指令
app.directive("renMen",[function(){
    return{
            restrict:"EAC",
            templateUrl:"template/imageList.html",
            replace:true,
            scope:{
                image:"@forImage",
                name:"@forName",
                year:"@forYear",
                type:"@forType"
            },
            controller:function($scope){
                $scope.getTitle=function(){
                    alert($scope.year);
                }
            }
           
    };    
}]);
