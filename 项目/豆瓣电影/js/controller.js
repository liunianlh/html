app.controller("indexController",["$scope","$http",function($scope, $http){
        $scope.data = "";
        $http({
            method:"get",
            url:"php/listImage.php"
        }).then(function(data){
            $scope.data = data.data;
        });
}]);