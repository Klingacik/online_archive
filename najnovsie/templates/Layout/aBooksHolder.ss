<div class="container">
	$bookSearchForm
	<h1 class="section-title">Books</h1>
	<table class="table table-striped table-hover">
    <br>
    <tbody data-link="row" class="rowlink">
    <% if $Results %>
      	<% loop $Results %>
        	<tr> 
          		<td>$Name</td> 
        		<td>$Department</td>
        		<td>$City</td> 
        		<td>$Country</td>
        	</tr>
      	<% end_loop %>
    <% else %>
      	No results match your criteria!
    <% loop $Books %> 
      <tr> 
      		<td>$Name</td> 
    		<td>$Department</td>
    		<td>$City</td> 
    		<td>$Country</td>
    	</tr>
     <% end_loop %>
    <% end_if %>
    </tbody>
  </table>
</div>