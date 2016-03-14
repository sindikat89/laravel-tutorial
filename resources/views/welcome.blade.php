<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Custom styles for this template -->
    <style>
        body {
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #eee;
        }

        .form-signin {
          max-width: 330px;
          padding: 15px;
          margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
          margin-bottom: 10px;
        }
        .form-signin .checkbox {
          font-weight: normal;
        }
        .form-signin .form-control {
          position: relative;
          height: auto;
          -webkit-box-sizing: border-box;
             -moz-box-sizing: border-box;
                  box-sizing: border-box;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
    </style>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">
        {!! Form::open(array(
            'route'=>'create-admin',
            'method'=>'POST',
            'class'=>'form-signin')) !!}
            <h2 class="form-signin-heading">Create Admin</h2>
            <label for="inputName" class="sr-only">Name</label>
            <input name="name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
        {!!Form::close()!!}

        <div class="row">
          @if(Session::has('success'))
            <div class="alert alert-success">
              <strong>{{ Session::get('success') }}</strong>
            </div>
          @endif
          @if(Session::has('error'))
            <div class="alert alert-danger">
              <strong>{{ Session::get('error') }}</strong>
            </div>
          @endif
          
        </div>


         <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Admins Display</h3>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr> 
                  </thead>
                  <tbody>
                    @foreach($admins as $admin)
                      <tr>                        
                        <td class="hidden-xs">{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>                      
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            
              </div>
            </div>
      </div>

    </div> <!-- /container -->

  </body>
</html>