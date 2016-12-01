<div class="container">
	$bookSearchForm
	<h1 class="section-title">Books</h1>
	<table class="table table-striped table-hover">
    <thead class="thead-inverse">
      <th>Title of the book</th>
      <th>Department</th>
      <th>City</th>
      <th>Country</th>
      <th>Author/s</th>
    </thead>
    <tbody data-link="row" class="rowlink">
    <% loop $Results %> 
     <tr> 
      	<td><a href="$Link">$Name</a></td> 
    		<td>$Department</td>
    		<td>$City</td> 
    		<td>$Country</td>
          <td>
            <% loop $Authors %>
            <a href="$Link">
              <% with $Person %>
                $Title_before
                $FirstName 
                $MiddleName
                $Lastname
                $Title_after</td>
              <% end_with %>
            </a>
            <% end_loop %>
         </td>
    	</tr>
      <% end_loop %>
    </tbody>
  </table>
</div>