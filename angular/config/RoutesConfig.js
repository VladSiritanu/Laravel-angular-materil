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
					templateUrl: getViewUI('header')
				},
				footer: {
					templateUrl: getViewUI('footer')
				},
				main: {}
			}
		})
		.state('app.landing', {
			url: '/',
			data: {},
			views: {
				'main@': {
					templateUrl: getViewUI('landing')
				}
			}
		})
		.state('app.create_post', {
			url: '/create-post',
			views: {
				'main@': {
					templateUrl: getViewUI('create_post')
				}
			}
		});

		$stateProvider
		.state('admin-app', {
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
		.state('admin-app.landing', {
			url: '/admin',
			data: {},
			views: {
				'main@': {
					templateUrl: getViewAdmin('landing')
				}
			}
		})
		.state('admin-app.create_post', {
			url: '/admin/create-post',
			views: {
				'main@': {
					templateUrl: getViewAdmin('create_post')
				}
			}
		});
}
