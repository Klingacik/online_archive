<div class="container">
<div class="col-sm-12">
	<% with $aAuthor.Person %>
    <h1 class="section-title">$Title_before $FirstName $Middlename $Lastname
    <% if $Title_after %>, $Title_after
    <% end_if %>
    </h1>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-2">
      <div class="image">
        <% if $Photo %>
          $Photo.CroppedImage(140,148)
        <% else %>
          <img src="$ThemeDir/images/comment-man.jpg" alt="" height=148 width=140 />
        <% end_if %>
      </div>
    </div>
    <div class="col-sm-6">
      <h4 class="Display-1">Email</h4>
      <% if $Emails %>
        <% loop $Emails %> 
          <p>$Email</p>
        <% end_loop %>
      <% else %>
        <p>No emails published.</p>
      <% end_if%>
    </div>
  </div>
    <h1 class="section-title">Books for $Title_before $FirstName $Middlename $Lastname
    <% if $Title_after %>, $Title_after
    <% end_if %>
    </h1>
  <% end_with %>
  
	<% if $aAuthor.Books %>
    <table class="table table-striped table-hover">
      <thead>
        <th>Title of the book</th>
        <th>Department</th>
        <th>City</th>
        <th>Country</th>
      </thead>
      <tbody data-link="row" class="rowlink">
        <% loop $aAuthor.Books %> 
          <tr>
            <td><a href="$Link">$Name</td>
            <td>$Department</td>
            <td>$City</td>
            <td>$Country</td>
          </tr>
       <% end_loop %>
      </tbody>
    </table>
  <% else %>
    No books have been found!
  <% end_if %>

  <% with $aAuthor.Person %>
    <h1 class="section-title">Papers for $Title_before $FirstName $Middlename $Lastname
    <% if $Title_after %>, $Title_after
    <% end_if %>
    </h1>
  <% end_with %>
  <% if aAuthor.Papers %>
  <table class="table table-striped table-hover">
    <thead>
      <th>Title of the paper</th>
      <th>Published</th>
    </thead>
    <tbody data-link="row" class="rowlink">
    <% loop $aAuthor.Papers %> 
      <tr>
        <td><a href="$Link">$Title</a></td>
        <td>$DatePublished.Long</td>
      </tr>
     <% end_loop %>
    </tbody>
  </table>
  <% else %>
    No papers have been found!
  <% end_if %>
</div>