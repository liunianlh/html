//模块化
//
//var app=angular.module("myApp",["ui.router"]);







//app.controller("indexController",["$scope","$http",function($scope, $http){
//        $scope.data = "";
//        $http({
//            method:"get",
//            url:"php/listImage.php"
//        }).then(function(data){
//            $scope.data = data.data;
//        });
//}]);
//热门影片
app.controller('indexController', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = true;
		$scope.data = "";
		$http({
			method: 'GET', //传输方式
			url: 'php/listImage.php', //传输地址
		}).then(function(data) {
			$scope.data = data.data;
		});
	}
]);


app.controller("indexController1",["$scope","$http",function($scope, $http){
        $scope.data = "";
        $http({
            method:"get",
            url:"php/soon.php"
        }).then(function(data){
            $scope.data = data.data;
        });
}]);

app.controller("indexController2",["$scope","$http",function($scope, $http){
        $scope.data = "";
        $http({
            method:"get",
            url:"php/show.php"
        }).then(function(data){
            $scope.data = data.data;
        });
}]);
app.controller("indexController3",["$scope","$http",function($scope, $http){
        $scope.data = "";
        $http({
            method:"get",
            url:"php/ranking.php"
        }).then(function(data){
            $scope.data = data.data;
        });
}]);
app.controller("indexController4",["$scope","$http",function($scope, $http){
        $scope.data = "";
        $http({
            method:"get",
            url:"php/release.php"
        }).then(function(data){
            $scope.data = data.data;
        });
}]);

//发布控制器
app.controller('indexController4', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = false;
		$scope.fabu = function() {
			var data = {
				name: $scope.name,
				actor: $scope.actor,
				date: $scope.date,
				type: $scope.type,
				score: $scope.score,
				about: $scope.about,
				hot: $scope.hot,
				release: $scope.release
			}

			$http({
				method: 'POST', //传输方式
				url: 'php/release.php', //传输地址
				data: $.param(data),
				headers: {
					'Content-type': 'application/x-www-form-urlencoded'
				}
			}).then(function(data) {
				var result = data.data;
				//根据状态调整字体的颜色
				if(result.status == true) {
					$scope.name = "";
					$scope.actor = "";
					$scope.date = "";
					$scope.type = "";
					$scope.score = "";
					$scope.about = "";
					$scope.hot = "";
					$scope.release = "";
					alert(result.msg);
				} else {
					alert(result.msg);
				}
			});
		}

	}
]);



//搜索
app.controller('searchController', ["$scope", "$http","$stateParams",
	function($scope, $http,$stateParams) {
		var search = $stateParams.search;
		$http({
			method: 'GET', //传输方式
			url: 'php/search.php', //传输地址
			params: {
				search: search
			}
		}).then(function(data) {
			$scope.data = data.data;
		});

	}
]);
//自定义指令
app.directive("seArch", [function() {
	return {
		restrict: "EAC", //输出方式
		templateUrl: "template/directive/index.html", //模板地址
		replace: true, //是否覆盖模板使用的标签 true是覆盖
		scope: {
			image: "@forImage", //@单项绑定，只把值传过来
			name: "@forName", //@单项绑定，只把值传过来
			date: "@forDate", //=变量同步
			type: "@forType"
		}
	};
}]);




//自定义指令
//app.directive("renMen", [function() {
//	return {
//		restrict: "EAC", //输出方式
//		templateUrl: "template/imageList.html", //模板地址
//		replace: true, //是否覆盖模板使用的标签 true是覆盖
//		scope: {
//			image: "@forImage", //@单项绑定，只把值传过来
//			name: "@forName", //@单项绑定，只把值传过来
//			year: "@forYear", //=变量同步
//			type: "@forType"
//		}
//	};
//}]);


//分类
app.controller('aiqingController', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = true;
		$scope.data = "";
		$http({
			method: 'GET', //传输方式
			url: 'php/aiqing.php', //传输地址
		}).then(function(data) {
			$scope.data = data.data;
		});
	}
]);
app.controller('xijuController', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = true;
		$scope.data = "";
		$http({
			method: 'GET', //传输方式
			url: 'php/xiju.php', //传输地址
		}).then(function(data) {
			$scope.data = data.data;
		});
	}
]);
app.controller('dongzuoController', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = true;
		$scope.data = "";
		$http({
			method: 'GET', //传输方式
			url: 'php/dongzuo.php', //传输地址
		}).then(function(data) {
			$scope.data = data.data;
		});
	}
]);
app.controller('juqingController', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = true;
		$scope.data = "";
		$http({
			method: 'GET', //传输方式
			url: 'php/juqing.php', //传输地址
		}).then(function(data) {
			$scope.data = data.data;
		});
	}
]);
app.controller('kehuanController', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = true;
		$scope.data = "";
		$http({
			method: 'GET', //传输方式
			url: 'php/kehuan.php', //传输地址
		}).then(function(data) {
			$scope.data = data.data;
		});
	}
]);
app.controller('kongbuController', ["$scope", "$http", "$rootScope",
	function($scope, $http, $rootScope) {
		$rootScope.xianyin = true;
		$scope.data = "";
		$http({
			method: 'GET', //传输方式
			url: 'php/kongbu.php', //传输地址
		}).then(function(data) {
			$scope.data = data.data;
		});
	}
]);

//
//app.controller('infoController', ["$scope", "$http", "$rootScope","$stateParams",
//	function($scope, $http, $rootScope,$stateParams) {
//            var id = $stateParams.id;
//		$rootScope.xianyin = true;
//		$scope.data = "";
//		$http({
//			method: 'GET', //传输方式
//			url: 'php/info.php', //传输地址
//		}).then(function(data) {
//			$scope.data = data.data;
//		});
//	}
//]);

//
////详情
app.controller('infoController', ["$scope", "$http", "$stateParams", "$rootScope",
	function($scope, $http, $stateParams, $rootScope) {
		$rootScope.xianyin = false;
		$scope.data = "";
		var id = $stateParams.id;
		$http({
			method: 'GET', //传输方式
			url: 'php/info.php', //传输地址
			params: {
				id: id
			}
		}).then(function(data) {
			$scope.data = data.data;
		});
                
                
		//点击发表评论
		$scope.pinglun = function() {
			var data = {
				content: $scope.content,
				id: id
			}

			$http({
				method: 'POST', //传输方式
				url: 'php/comment.php', //传输地址
				data: $.param(data),
				headers: {
					'Content-type': 'application/x-www-form-urlencoded'
				}
			}).then(function(data) {
				var result = data.data;
				//根据状态调整字体的颜色
				if(result.status == true) {
					$("#app").append('<div class="main_count2_top pinglun"><div class="main_count2_top_count clear"><span class="main_count2_top_img"></span><div class="main_count2_top_text"><b>匿名</b></div></div><p class="main_count2_top_p">'+$scope.content+'</p><p class="main_count2_top_p2">'+result.date+'</p></div>');
//                                    $("#app").append('<div>lalalala</div>');
                                $scope.content = "";
					alert("评论成功！！！");
				} else {
					alert("系统错误");
				}
			});
		}
	}
]);
////评论
app.controller('infoComment', ["$scope", "$http", "$stateParams",
	function($scope, $http, $stateParams) {
		$scope.data = "";
		var id = $stateParams.id;
		$http({
			method: 'GET', //传输方式
			url: 'php/infoComment.php', //传输地址
			params: {
				id: id
			}
		}).then(function(data) {
			$scope.data = data.data;
		});

	}
]);
//自定义指令
app.directive("inFo", [function() {
	return {
		restrict: "EAC", //输出方式
		templateUrl: "template/details.html", //模板地址
		replace: true, //是否覆盖模板使用的标签 true是覆盖
		scope: {
			content: "@forContent", //@单项绑定，只把值传过来
			year: "@forYear" //=变量同步
		}
	};
}]);
