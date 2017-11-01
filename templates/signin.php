<!-- <div class="four wide column">
<form class="ui form">
  <div class="field">
    <label>Email</label>
    <input type="email" name="email" ng-model="email" placeholder="Last Name">
   </div>
  <div class="field">
    <label>Password</label>
    <input type="password" name="password" ng-model="password" placeholder="Last Name">
  </div>
<!--   <div class="ui left floated compact segment">
  <div class="ui fitted toggle checkbox">
    <input type="checkbox">
    <label></label>
  </div>
</div> -->
 <!--  <input class="ui primary button" type="submit" ng-click="register()" value="Sign In"/>
</form>
</div> -->


 <style type="text/css">
    body {
      background-color: #dadada;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>

</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="./images/png/battery.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" ng-model="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" ng-model="password" placeholder="Password">
          </div>
        </div>
        <button class="ui fluid large teal submit button" ng-click="authenticate(email,password)">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>
<div ng-show="inncorrect" class="alert">Email or Password is Incorrect</div>
    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>
<br><br><br><br>
<!-- 
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script> -->