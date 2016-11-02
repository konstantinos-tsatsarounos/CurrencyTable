<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Currency Table</title>
    
    <link rel="stylesheet" type="text/css" media="all" href="/libs/uikit/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/libs/uikit/css/uikit.gradient.min.css" />
</head>
<body>
    <div class="uk-container uk-container-center" ng-app="CurrencyTable">
        <h1 class="uk-h1">Live Currencies Based in EUR</h1>
        <table class="uk-table" ng-controller="HomeController as table">
            <caption>Currency Table</caption>
            <thead>
            <tr>
                <th>Symbol</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="rate in table.currencies">
                <td>{{rate.name}}</td>
                <td>{{rate.value}}</td>
            </tr>
            </tbody>
        </table>
    
    </div>


    <!--Library Scripts-->
    <script src="/libs/jquery.min.js"></script>
    <script src="/libs/angular/angular.min.js"></script>
    <script src="/libs/angular/angular-resource.min.js"></script>
    <script src="/libs/uikit/js/uikit.min.js"></script>
    <script src="/libs/uikit/js/core/core.min.js"></script>
    <script src="/libs/uikit/js/core/grid.min.js"></script>
    <script src="/libs/uikit/js/core/nav.min.js"></script>

    <!--My Scripts-->
    <script src="/assets/js/app.js"></script>
</body>
</html>