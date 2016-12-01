<div class="container">
	<h1 class="section-title">Papers in the database</h1>
	<table class="table table-striped table-hover">
    <br>
    <thead>
      <th>Title of the paper</th>
      <th>Author</th>
      </thead>
    <tbody data-link="row" class="rowlink">
    <% loop $Papers %> 
      <tr>
    		<td><a href="$Link">$Title</a></td>
        <td><a href="$Author.Link">
          <% with $Author.Person %>
            $Title_before
            $FirstName 
            $MiddleName
            $Lastname
            $Title_after</td>
          <% end_with %></a>
        </td>
    	</a></tr>
     <% end_loop %>
    </tbody>
  </table>
</div>