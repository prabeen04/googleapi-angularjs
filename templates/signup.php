
<button id="signup-btn" class="ui submit green container animated button" tabindex="0">
                <div class="visible content">Sign Up</div>
                <div class="hidden content">Explore Yourself 
                  <i class="taxi icon"></i>
                </div>
              </button>
<!--  -->
<br><br><br><br><br>
<br><br><br><br><br>

<br><br><br><br><br>

<br><br><br><br><br>



<div class="ui modal signup">
  <i class="close icon"></i>
  <div class="header">
   Sign Up Here
  </div>
  <div class="image content">
    <div class="ui medium image">
      <img src="./images/girl.jpg">
    </div>
    <div class="description">
           <form class="ui form">
      <div class="field">
        <label>Username</label>
        <input type="text" name="username" ng-model="username" placeholder="First Name">
      </div>
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
    </form>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Nope
    </div>
           <input class="ui positive right labeled icon button" type="submit" ng-click="register()" value="Sign Up" />
      
  </div>
</div>




<script type="text/javascript">
  $('#signup-btn').click(function(){
     $('.ui.modal.signup')
      .modal({
    blurring: true
  })
      .modal('show');
  });

</script>