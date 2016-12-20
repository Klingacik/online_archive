<div id="nav-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
														
							<!-- BEGIN MAIN MENU -->
							<nav class="navbar">
								<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>
								
								<ul class="nav navbar-nav">
									<% loop $Menu(1) %>
										<li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
									<% end_loop %>
								</ul>
							
							</nav>
							<!-- END MAIN MENU -->
							
						</div>
					</div>
				</div>
			</div>