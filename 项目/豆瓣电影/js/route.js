//1.直接配置路由
app.config(["$stateProvider", "$urlRouterProvider", function ($stateProvider, $urlRouterProvider) {
        $stateProvider.state("index", {
            url: "/index",
            templateUrl: "./template/index.html",
            controller: "indexController"
        }).state("info", {
            url: "/details/{id}",
            templateUrl: "./template/details.html",
//            template:"<h1>详情页{{id}}</h1>",
//            controller: function ($scope, $stateParams) {
//                $scope.id = $stateParams.id;
            controller: "infoController"
        }
        ).state(
                "soon", {
                    url: "/soon/",
                    templateUrl: "./template/soon.html",
                    controller: "indexController1"
                }).state(
                "show", {
                    url: "/show/",
                    templateUrl: "./template/show.html",
                    controller: "indexController2"
                }).state(
                "ranking", {
                    url: "/ranking/",
                    templateUrl: "./template/ranking.html",
                    controller: "indexController3"
                }).state(
                "release", {
                    url: "/release/",
                    templateUrl: "./template/release.html",
                    controller: "indexController4"
                }).state("search", {//搜索
            url: "/search/{search}", //地址
            templateUrl: "./template/search.html", //模板
            controller: "searchController"
//			类型
        })
//                      分类
                .state("aiqing", {//爱情
                    url: "/aiqing", //地址
                    templateUrl: "./template/ranking.html", //模板
                    controller: "aiqingController"
                }).state("xiju", {//喜剧
            url: "/xiju", //地址
            templateUrl: "./template/ranking.html", //模板
            controller: "xijuController"
        }).state("dongzuo", {//动作
            url: "/dongzuo", //地址
            templateUrl: "./template/ranking.html", //模板
            controller: "dongzuoController"
        }).state("juqing", {//剧情
            url: "/juqing", //地址
            templateUrl: "./template/ranking.html", //模板
            controller: "juqingController"
        }).state("kehuan", {//科幻
            url: "/kehuan", //地址
            templateUrl: "./template/ranking.html", //模板
            controller: "kehuanController"
        }).state("kongbu", {//恐怖
            url: "/kongbu", //地址
            templateUrl: "./template/ranking.html", //模板
            controller: "kongbuController"
        });

        $urlRouterProvider.otherwise("/index");
    }]);

