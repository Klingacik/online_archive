<div class="container">
	<% with $aAuthor.Person %>
    <h1 class="section-title">Books for $Title_before $FirstName $Middlename $Lastname
    <% if $Title_after %>, $Title_after
    <% end_if %>
    </h1>
  <% end_with %>
	<table class="table table-striped table-hover">
    <br>
    <tbody data-link="row" class="rowlink">
    <% loop $aAuthor.Books %> 
      <tr> 
    		$Name
    	</tr>
     <% end_loop %>
    </tbody>
  </table>
</div>