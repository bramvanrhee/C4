<!DOCTYPE html>
<html lang="nl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>inleveropdracht C</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div ng-app="myApp" ng-controller="customersCtrl">

                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                            </thead>
                            <tbody>
                                <tr ng-repeat="x in names">
                                    <td>{{ x.Voornaam }}</td>
                                    <td>{{ x.Achternaam }}</td>
                                </tr>
                            <tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>
