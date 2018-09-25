<!DOCTYPE html>
<html>
  <head>
    <title>Verify email</title>
  </head>
  <body>
    <h2>Welcome to OneLove {{$user['name']}} </h2>
    <br/>
    <p>Your registered email_id is {{$user['email']}}, please click on the below link to activate your account. </p>
    <br/>
    <a href="{{url('user/verify', $user->verifyUser->token)}}", class="btn btn-sm btn-sucess">Verify Account</a>
  </body>

</html>