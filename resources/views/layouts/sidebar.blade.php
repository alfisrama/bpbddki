<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{url('home')}}" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="{{url('data')}}" class=""><i class="lnr lnr-dice"></i> <span>Data</span></a></li>
						<li><a href="{{url('profile/'.Auth::user()->id.'/edit')}}"><i class="lnr lnr-user"></i> <span>Admin</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->