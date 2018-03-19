<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>RD Legal - Transactions</title>

        <link rel="stylesheet" href="css/transaction.css">
    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">RD Legal</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ action('SummaryController@index') }}">Summary <span class="sr-only"></span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ action('TransactionController@index') }}">Transactions</a>
                  </li>
              </ul>
          </div>
      </nav>

      <div class="container">

          <div id="filters" class="row">
              <div class="col-12 text-center">
              </div>
          </div>

          <div id="" class="row">
              <div class="col-12">
                  <h3>Sum by Year</h3>
                  <table class="table table-bordered table-sm table-striped">
                      <thead>
                          <tr>
                              <th>Quantity (Sum)</th>
                              <th>Transaction Amount (Sum)</th>
                              <th>Year</th>
                          </tr>
                      </thead>
                      <tbody>
                              <tr>
                              </tr>
                      </tbody>
                  </table>
              </div>
          </div>

      </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">

            $( document ).ready(function() {

            });

        </script>
    </body>
</html>