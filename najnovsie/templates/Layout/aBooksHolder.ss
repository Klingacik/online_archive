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

<!-- BEGIN PAGINATION -->
  <% if $Results.MoreThanOnePage %>
  <div class="pagination">
    <% if $Results.NotFirstPage %>
    <ul id="previous col-xs-6">
      <li><a href="$Results.PrevLink"><i class="fa fa-chevron-left"></i></a></li>
    </ul>
    <% end_if %>
    <ul class="hidden-xs">
      <% loop $Results.PaginationSummary %>
        <% if $Link %>
          <li <% if $CurrentBool %>class="active"<% end_if %>>
            <a href="$Link">$PageNum</a>
          </li>
        <% else %>
          <li>...</li>
        <% end_if %>
      <% end_loop %>
    </ul>
    <% if $Results.NotLastPage %>
    <ul id="next col-xs-6">
      <li><a href="$Results.NextLink"><i class="fa fa-chevron-right"></i></a></li>
    </ul>
    <% end_if %>
  </div>
  <% end_if %>
<!-- END PAGINATION -->
</div>