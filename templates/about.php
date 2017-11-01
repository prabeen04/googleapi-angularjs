<!-- <input class="" type="text" name="location" ng-model="location" placeholder="Enter Your Location" id="srch" />
<input class="" type="text" name="location" ng-model="type" placeholder="Enter Your type" id="srch" />
<button ng-click="googleapi(location,type)">get</button> -->
<div class="ui three column grid">
  <div class="column">
    <div class="ui segment">
        <div class="ui card">
          <div class="image">
            <div class="ui blurring inverted dimmer">
              <div class="content">
                <div class="center">
                  <div class="ui teal button">Add Friend</div>
                </div>
              </div>
            </div>
            <img src="./images/png/swan.jpg">
          </div>
          <div class="content">
            <div class="header">Title</div>
            <div class="meta">
              <a class="group">Meta</a>
            </div>
            <div class="description">One or two sentence description that may go to several lines</div>
          </div>
          <div class="extra content">
            <a class="right floated created">Arbitrary</a>
            <a class="friends">
              Arbitrary</a>
          </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui segment">
        <div class="ui card">
          <div class="image">
            <div class="ui blurring inverted dimmer">
              <div class="content">
                <div class="center">
                  <div class="ui teal button">Add Friend</div>
                </div>
              </div>
            </div>
            <img src="./images/png/dragon.png">
          </div>
          <div class="content">
            <div class="header">Title</div>
            <div class="meta">
              <a class="group">Meta</a>
            </div>
            <div class="description">One or two sentence description that may go to several lines</div>
          </div>
          <div class="extra content">
            <a class="right floated created">Arbitrary</a>
            <a class="friends">
              Arbitrary</a>
          </div>
      </div>      
    </div>
  </div>
  <div class="column">
    <div class="ui segment">
      <div class="ui card">
          <div class="image">
            <div class="ui blurring inverted dimmer">
              <div class="content">
                <div class="center">
                  <div class="ui teal button">Add Friend</div>
                </div>
              </div>
            </div>
            <img src="./images/png/save-tree.png">
          </div>
          <div class="content">
            <div class="header">Title</div>
            <div class="meta">
              <a class="group">Meta</a>
            </div>
            <div class="description">One or two sentence description that may go to several lines</div>
          </div>
          <div class="extra content">
            <a class="right floated created">Arbitrary</a>
            <a class="friends">
              Arbitrary</a>
          </div>
      </div>     
    </div>
  </div>
</div>


<div class="ui container">
  <div class="ui relaxed divided items">
    <div class="item">
      <div class="ui small image">
        <img src="./images/girl.jpg">
      </div>
      <div class="content">
        <a class="header">Content Header</a>
        <div class="meta">
          <a>Date</a>
          <a>Category</a>
        </div>
        <div class="description">
          A description which may flow for several lines and give context to the content.
        </div>
        <div class="extra">
          <img src="./images/girl.jpg" class="ui circular avatar image"> Username
        </div>
      </div>
    </div>
    <div class="item">
      <div class="ui small image">
        <img src="./images/images.jpg">
      </div>
      <div class="content">
        <a class="header">Content Header</a>
        <div class="meta">
          <a>Date</a>
          <a>Category</a>
        </div>
        <div class="description">
          A description which may flow for several lines and give context to the content.
        </div>
        <div class="extra">
          <div id="btn" class="ui right floated primary button">
            Primary
            <i class="right chevron icon"></i>
          </div>
          <div class="ui label">Limited</div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="ui small image">
        <img src="./images/13o.jpg">
      </div>
      <div class="content">
        <a class="header">Content Header</a>
        <div class="meta">
          <a>Date</a>
          <a>Category</a>
        </div>
        <div class="description">
          A description which may flow for several lines and give context to the content.
        </div>
        <div class="extra">
          <div class="ui right floated primary button">
            Primary
            <i class="right chevron icon"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="ui basic modal abt">
  <i class="close icon"></i>
  <div class="header">
    Profile Picture
  </div>
  <div class="image content">
    <div class="ui medium image">
      <img src="./images/girl.jpg">
    </div>
    <div class="description">
      <div class="ui header">We've auto-chosen a profile image for you.</div>
      <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
      <p>Is it okay to use this photo?</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Nope
    </div>
    <div class="ui positive right labeled icon button">
      Yep, that's me
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#btn').click(function(){
     $('.ui.modal.abt')
      .modal('show');
  });
  /*

  */
</script>
<br>
<hr>
<br>
  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"What a Company"</h3>
          <p>That is what they all say about us</p>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their competitor."</h3>
          <p>
            <img src="./images/png/sports-ball.png" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys
          </p>
        </div>
      </div>
    </div>
  </div>


</div>
<div class="ui items">

<br>
<br>
<table class="ui table striped ">
<thead>
  
  <tr>
    <th>User Id </th>
    <th>Username</th>
    <th>Email Id</th>
    <th>Password</th>
</tr>
</thead>
<tbody>
  
  <tr ng-repeat = "user in msg2">
      <td> {{ user.id }} </td>
      <td> {{ user.username }} </td>
      <td> {{ user.email }} </td>
      <td> {{ user.password }} </td>
  </tr>
</tbody>
</table> 