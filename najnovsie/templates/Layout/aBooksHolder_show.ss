<div class="container">
  <h1 class="section-title">$aBook.Name</h1>
  <div class="col-sm-12">
    <div class="sidebar gray col-sm-4">
    <h3 class="section-title">Info</h3>
      <dl class="row">
        <dt class="col-sm-3">Department</dt>
        <dd class="col-sm-9">$aBook.Department</dd>

        <dt class="col-sm-3">City</dt>
        <dd class="col-sm-9">$aBook.City</dd>

        <dt class="col-sm-3">Country</dt>
        <dd class="col-sm-9">$aBook.Country</dd>

        <dt class="col-sm-3">Address</dt>
        <dd class="col-sm-9">$aBook.Address1</dd>
    </div>
    <div class="sidebar gray col-sm-4">
      <h3 class="section-title">Authors</h3>
      <% loop $aBook.Authors %>
        <a href="$Link">
        <% with $Person %>
          $Title_before
          $FirstName 
          $MiddleName
          $Lastname
          $Title_after
        <% end_with %></a>   
      <% end_loop %>
    </div>
  </div>

  <h1 class="section-title">Recent Papers </h1>
  <div class="grid-style1">
    <% loop $aBook.Papers(3) %>
    <div class="item col-md-4">
      <div class="info-blog">
        <ul class="top-info">
          <li><i class="fa fa-calendar"></i> $DatePublished.Format('F j, Y')</li>
          <li><i class="fa fa-comments-o"></i> 2</li>
        </ul>
        <h3>
          <a href="$Link">$Title</a>
        </h3>
        <p><% if $Subtitle %>$Subtitle<% else %>$Content.FirstSentence<% end_if %></p>
      </div>
    </div>
    <% end_loop %>
  </div>
</div>