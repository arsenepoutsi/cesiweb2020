var app = angular.module('projetMadera', [
    'ngRoute'
]);

/**
 * Configuration des routes
 */
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
    // Home
        .when("/", { templateUrl: "pages/home.php", controller: "PageCtrl" })
        // Pages
        .when("/entreprise", { templateUrl: "pages/entreprise.php", controller: "PageCtrl" })
        .when("/solutions", { templateUrl: "pages/solutions.php", controller: "PageCtrl" })
        .when("/contact", { templateUrl: "pages/contact.php", controller: "PageCtrl" })
        // else 404
        .otherwise("/404", { templateUrl: "pages/404.php", controller: "PageCtrl" });
}]);

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function( /* $scope, $location, $http */ ) {
    console.log("Page Controller reporting for duty.");
});