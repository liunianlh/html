//1.直接配置路由
app.config(["$stateProvider","$urlRouterProvider",function($stateProvider,$urlRouterProvider){
        $stateProvider.state("index",{
            url:"/index",
            templateUrl:"./template/index.html",
            controller:"indexController"
        }).state("info",{
            url:"/info/{id}",
            template:"<h1>详情页{{id}}</h1>",
            controller:function($scope,$stateParams){
                $scope.id = $stateParams.id;
            }
        }).state(
                "soon",{
            url:"/soon/{id}",
           templateUrl:"./template/soon.html",
           controller:"indexController"
        }).state(
                "show",{
            url:"/show/{id}",
           templateUrl:"./template/show.html",
           controller:"indexController"
        }).state(
                "ranking",{
            url:"/ranking/{id}",
           templateUrl:"./template/ranking.html",
           controller:"indexController"
        });
        
        $urlRouterProvider.otherwise("/index");
}]);

