<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login page</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link rel="stylesheet" href="css/adminlogin.css">


    </head>











    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                   <div id="first">
                      <div class="myform form ">
                           <div class="logo mb-3">
                               <div class="col-md-12 text-center">
                                   <div class="card-header">{{ __('Admin login') }}</div>
                               </div>
                           </div>


                              <form method="POST" action="{{ route('login') }}">
                                 @csrf

                                       <div class="form-group">
                                          <label for="exampleInputEmail1">{{ __('Email') }}</label>


                                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp" placeholder="Enter email">

                                            @error('email')
                                             <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                                </span>
                                          @enderror

                                        </div>

                                   <div class="form-group">
                                        <label for="password" >{{ __('Password') }}</label>


                                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" aria-describedby="emailHelp" placeholder="Enter password">

                                         @error('password')
                                           <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                     @enderror

                                    </div>

                                   <div class="form-group">
                                     <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                           <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                           </label>
                                        </div>
                                     </div>
                                   </div>

                                   <div class="form-group">
                                       <div class="col-md-12 text-center">
                                           <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">
                                             {{ __('Login') }}
                                           </button>

                                            @if (Route::has('password.request'))
                                           <a class="btn btn-link" href="{{ route('password.request') }}">
                                               {{ __('Forgot Your Password?') }}
                                          </a>
                                            @endif
                                       </div>
                                   </div>
                             </form>
                        </div>
                    </div>
             </div>
         </div>
     </div>
  </body>

    <script>
        $("#signup").click(function() {
    $("#first").fadeOut("fast", function() {
    $("#second").fadeIn("fast");
    });
    });

    $("#signin").click(function() {
    $("#second").fadeOut("fast", function() {
    $("#first").fadeIn("fast");
    });
    });



             $(function() {
               $("form[name='login']").validate({
                 rules: {

                   email: {
                     required: true,
                     email: true
                   },
                   password: {
                     required: true,

                   }
                 },
                  messages: {
                   email: "Please enter a valid email address",

                   password: {
                     required: "Please enter password",

                   }

                 },
                 submitHandler: function(form) {
                   form.submit();
                 }
               });
             });



    $(function() {

      $("form[name='registration']").validate({
        rules: {
          firstname: "required",
          lastname: "required",
          email: {
            required: true,
            email: true
          },
          password: {
            required: true,
            minlength: 5
          }
        },

        messages: {
          firstname: "Please enter your firstname",
          lastname: "Please enter your lastname",
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          email: "Please enter a valid email address"
        },

        submitHandler: function(form) {
          form.submit();
        }
      });
    });

    </script>

    </html>


