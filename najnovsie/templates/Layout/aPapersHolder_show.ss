<div class="container">
  	<h1 class="section-title">$aPaper.Title</h1>
  	<div class="col-sm-12">
  		<div class="col-sm-2">
  		</div>
	    <div class="col-sm-6">
	      	<h2 class="display-1">Abstract</h2>
	      	<p><% if $aPaper.Abstract%>$aPaper.Abstract<% else %>No abstract published.<% end_if %></p>
	      	<h2 class="display-1">Content</h2>
      		<p><% if $aPaper.Content %>$aPaper.Content<% else %>No content published.<% end_if %></p>
	    </div>
	    <div class="col-sm-4">
	    	<h2 class="display-1">Date published</h2>
	    	<p><% if $aPaper.DatePublished %>$aPaper.DatePublished.Format('F j, Y')<% else %>No published date has been set.<% end_if%></p>
	    	<h2 class="display-1">Keywords</h2>
	      	<p><% if $aPaper.Keywords%>$aPaper.Keywords<% else %>No keywords published.<% end_if %></p>
	    </div>
  	</div>
</div>