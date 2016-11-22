<div class="container">
	<h1 class="section-title">Authors</h1>
	<table class="table table-striped table-hover">
    <br>
    <tbody data-link="row" class="rowlink">
    <% loop $Authors %> 
      <tr><a href="$Link">
    		<% with $Person %>
          $Title_before
          $FirstName 
          $MiddleName
          $Lastname
          $Title_after</td>
        <% end_with %>
    	</a></tr>
     <% end_loop %>
    </tbody>
  </table>
</div>