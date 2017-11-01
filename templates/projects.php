<form ng-init="getSource()">
<select class="ui fluid search dropdown" ng-model="source">
  <option ng-repeat="src in sources" value="{{src.id}}">{{src.name}}</option>
</select>
<center><button class="positive ui button" ng-click="getNews(source)">Get News</button></center>
</form>
<!-- 
  <div ng-repeat="news in data">
    <h5>{{ news.title }}</h3>
    <img src="{{news.urlToImage}}"> 
    <p>{{ news.description }}</p>
  </div>
     -->
<div class="ui container">
  <div class="ui grid">
    <div class="row">
      <div class="four wide column" ng-repeat="news in dt">
        <div class="ui card">
          <div class="image">
            <img src="{{news.urlToImage}}" width="260px" height="156px">
          </div>
          <div class="content">
            <a href="{{ news.url }}" class="header" target="_blank">{{ news.title }}</a>
            <div class="meta">
              <span class="date"></span>
            </div>
            <div class="description">
             {{ news.description }}
            </div>
          </div>
          <div class="extra content">
            <a>
             
           Powered By: newsapi.org
            </a>
          </div>
        </div>
              </div>
    </div>
  </div>
</div>



<!-- <button ng-click= "displayUsers()">Get User</button>
 -->
<div class="ui icon message">
  <i class="notched circle loading icon"></i>
  <div class="content">
    <div class="header">
      Just one second
    </div>
    <p>We're fetching that content for you.</p>
  </div>
</div>
<label>Search User</label>
<input type="text" name="" ng-model="searchUser" placeholder="Search User">
<table class="ui table" ng-init="displayUsers()">
<thead>
  
  <tr>
    <th>User Id </th>
    <th>Username</th>
    <th>Email Id</th>
    <th>Password</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>
<tbody>
  
  <tr ng-repeat = "user in data | filter:searchUser">
      <td> {{ user.id }} </td>
      <td> {{ user.username }} </td>
      <td> {{ user.email }} </td>
      <td> {{ user.password }} </td>
      <td> <button class="ui primary tiny button" ng-click= "updateUser('user.id')">Edit</button> </td>
      <td> <button  class="ui red tiny button" ng-click= "deleteUser(user.id)">Delete</button> </td>
  </tr>
</tbody>
</table> 

  
  <hr/>
  
