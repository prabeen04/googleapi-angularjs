{{testing}}

<div class="ui grid">

<div class="four wide column">
<form class="ui form">
  <div class="field">
    <label>Username</label>
    <input type="text" name="username" ng-model="username" placeholder="First Name" required="true">
  </div>
  <div class="field">
    <label>Email</label>
    <input type="email" name="email" ng-model="email" placeholder="Last Name" required="true">
   </div>
  <div class="field">
    <label>Password</label>
    <input type="password" name="password" ng-model="password" placeholder="Last Name" required="true">
  </div>
<!--   <div class="ui left floated compact segment">
  <div class="ui fitted toggle checkbox">
    <input type="checkbox">
    <label></label>
  </div>
</div> -->
  <input class="ui primary button" type="submit" ng-click="register()" value="Register"/>
</form>
</div>

<div class="twelve wide column">

<div class="ui comments">
  <div class="comment">
    <a class="avatar">
      <img src="./images/girl.jpg">
    </a>
    <div class="content">
      <a class="author">Joe Henderson</a>
      <div class="metadata">
        <div class="date">1 day ago</div>
      </div>
      <div class="text">
        <p>The hours, minutes and seconds stand as visible reminders that your effort put them all there. </p>
        <p>Preserve until your next run, when the watch lets you see how Impermanent your efforts are.</p>
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>
  <div class="ui labeled button" tabindex="0">
  <div class="ui red button">
    <i class="heart icon"></i> Like
  </div>
  <a class="ui basic red left pointing label">
    1,048
  </a>
</div>
<div class="ui labeled button" tabindex="0">
  <div class="ui basic blue button">
    <i class="fork icon"></i> Forks
  </div>
  <a class="ui basic left pointing blue label">
    1,048
  </a>
</div>
  <div class="comment">
    <a class="avatar">
      <img src="./images/girl.jpg">
    </a>
    <div class="content">
      <a class="author">Christian Rocha</a>
      <div class="metadata">
        <div class="date">2 days ago</div>
      </div>
      <div class="text">
        I re-tweeted this.
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>
  <div class="ui labeled button" tabindex="0">
  <div class="ui red button">
    <i class="heart icon"></i> Like
  </div>
  <a class="ui basic red left pointing label">
    1,048
  </a>
</div>
<div class="ui labeled button" tabindex="0">
  <div class="ui basic blue button">
    <i class="fork icon"></i> Forks
  </div>
  <a class="ui basic left pointing blue label">
    1,048
  </a>
</div>
  <form class="ui reply form">
    <div class="field">
      <textarea></textarea>
    </div>
    <div class="ui primary submit labeled icon button">
      <i class="icon edit"></i> Add Comment
    </div>
  </form>
</div>
</div>




</div>


