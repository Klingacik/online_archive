		
		<!-- BEGIN HOME SLIDER SECTION -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators 
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol> -->

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active"id="slide1" style="background: url($TitleImage.URL) no-repeat left center; background-size: cover;"> <!-- Ready for JS Injection -->
		      <div class="carousel-caption">
				<div class="caption sfr slider-title">Online archive</div>
				<div class="caption sfl slider-subtitle">Books, papers, authors...</div>
		      </div>
		    </div>
		  <!-- Blue Filter -->
		  <div id="home-search-section"></div>

		</div>		
		<!-- END HOME SLIDER SECTION -->

		<!-- BEGIN HOME ADVANCED SEARCH -->
		<div id="home-advanced-search" class="open">
			<div id="opensearch"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<form>
							<div class="form-group">
								<div class="form-inline">
									$bookSearchForm
									<!--<input type="text" class="form-control" name="Title" placeholder="Book title..">
									<input type="text" class="form-control" name="Department" placeholder="Department">
									<input type="text" class="form-control" name="City" placeholder="City..">
									<input type="text" class="form-control" name="Country" placeholder="Country..">
									<button type="submit" class="btn btn-fullcolor">Search</button>-->
								</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- END HOME ADVANCED SEARCH -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
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
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">
					<h1 class="section-title">Recent Papers</h1>
						<div class="grid-style1">
							<% loop $LatestArticles(6) %>
							<div class="item col-md-4">
								<div class="image">
									<a href="$Link">
										<span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span>
									</a>
									$Photo.CroppedImage(220,148)
								</div>
								
								<div class="info-blog">
									<ul class="top-info">
										<li><i class="fa fa-calendar"></i> $DatePublished.Format('F j, Y')</li>
										<li><i class="fa fa-user"></i> $Author.Person.FirstName $Author.Person.Lastname</li>
									</ul>
									<h3>
										<a href="$Link">$Title</a>
									</h3>
									<p>$Subtitle</p>
								</div>
							</div>
							<% end_loop %>
						</div>
					</div>
					<!-- END MAIN CONTENT -->

					
				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		