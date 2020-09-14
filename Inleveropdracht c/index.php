<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <title>inleveropdracht C</title>
  </head>
  <body>

    <div class="container mt-5">
      <div class="row">
        <div class="col-12">

          <div ng-app="myApp" ng-controller="customersCtrl">

            <table class="table table-striped table-bordered">
              <thead clas="thead-light">
                <tr>
                  <th scope="col">Bedrijfsnaam</th>
                  <th scope="col">Adres</th>
                  <th scope="col">Woonplaats</th>
                  <th scope="col">Telefoonnummer</th>
                </tr>
              </thead>

              <tbody>
                <tr ng-repeat="x in bedrijf">
                  <td> {{ x.Bedrijfsnaam }}</td>
                  <td> {{ x.Adres }}</td>
                  <td> {{ x.Woonplaats }}</td>
                  <td> {{ x.Telefoonnummer }}</td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
