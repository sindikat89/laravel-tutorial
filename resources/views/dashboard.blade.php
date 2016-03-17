<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
      .btn-hover {
          font-weight: normal;
          color: #333333;
          cursor: pointer;
          background-color: inherit;
          border-color: transparent;
      }

      .btn-hover-alt {
          font-weight: normal;
          color: #ffffff;
          cursor: pointer;
          background-color: inherit;
          border-color: transparent;
      }
    </style>

  </head>

  <body>

    <div class="container">
        
            <div class="alert alert-success">
              <strong>Solo Uno Dashboardo!</strong>
            </div>

            <a href="{!! URL::route('admin-logout') !!}" class="btn btn-md btn-hover btn-danger">Logout</a>

    </div> <!-- /container -->

  </body>
</html>