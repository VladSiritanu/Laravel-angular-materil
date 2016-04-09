export function RoutesConfig($stateProvider, $urlRouterProvider) {
	'ngInject';

	var getViewUI = function(viewName) {
		return './views/app/pages/UI/' + viewName + '/' + viewName + '.page.html';
	};

	var getViewAdmin = function(viewName) {
		return './views/app/pages/Admin/' + viewName + '/' + viewName + '.page.html';
	};

	$urlRouterProvider.otherwise('/');

	$stateProvider
		.state('app', {
			abstract: true,
			views: {
				header: {
					templateUrl: getViewAdmin('header')
				},
				footer: {
					templateUrl: getViewAdmin('footer')
				},
				main: {}
			}
		})
		.state('app.landing', {
			url: '/',
			data: {},
			views: {
				sidebar:{
					templateUrl: getViewAdmin('admin-sidebar')
				},
				'main@': {
					templateUrl: getViewAdmin('landing')
				}
			}
		})
		.state('app.create_post', {
			url: '/create-post',
			data: {},
			views: {
				'main@': {
					templateUrl: getViewUI('create_post')
				}
			}
		});
}
