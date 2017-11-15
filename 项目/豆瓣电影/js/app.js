//模块化

var app=angular.module("myApp",[]);
app.controller("listControler",["$scope","$http",function($scope,$http){
        $scope.data="";
        $http({
            menthod:"get",
            url:"listImage.php"
            
        }).then(
                function(data){
                    $scope.data=data.data;
                });
}]);




//自定义指令
app.directive("imageList",[function(){
    return{
            restrict:"EAC",
            templateUrl:"template/imageList.html",
            replace:true,
            scope:{
                image:"@forImage",
                name:"@forName",
                year:"@forYear"
            },
            controller:function($scope){
                $scope.getTitle=function(){
                    alert($scope.year);
                }
            }
           
    };    
}]);