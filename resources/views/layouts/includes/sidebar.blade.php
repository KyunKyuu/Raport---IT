<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a class="{{ Request::is('dashboard*') ? 'active' : ''}}" href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						
						@if(auth()->user()->role == 'admin')
							<li><a class="{{ Request::is('student*') ? 'active' : ''}}" href="{{url('/student')}}" class=""><i class="lnr lnr-users"></i> <span>Siswa</span></a></li>
							<li><a class="{{ Request::is('posts*') ? 'active' : ''}}" href="{{url('/posts')}}" class=""><i class="lnr lnr-pencil"></i> <span>Post</span></a></li>
							<li><a class="{{ Request::is('events*') ? 'active' : ''}}" href="{{url('/events')}}" class=""><i class="lnr lnr-bullhorn"></i> <span>Event</span></a></li>
						@elseif(auth()->user()->role == 'siswa')
							<li><a class="{{ Request::is('profilesaya*') ? 'active' : ''}}" href="{{url('/profilesaya')}}" class=""><i class="lnr lnr-user"></i> <span>Profile Saya</span></a></li>
						@elseif(auth()->user()->role == 'guru')
							<li><a class="{{ Request::is('profileguru*') ? 'active' : ''}}" href="{{url('/profileguru')}}" class=""><i class="lnr lnr-user"></i> <span>Profile Saya</span></a></li>
								<li><a class="{{ Request::is('student*') ? 'active' : ''}}" href="{{url('/student')}}" class=""><i class="lnr lnr-users"></i> <span>Siswa</span></a></li>
							<li><a class="{{ Request::is('guru/posts*') ? 'active' : ''}}" href="{{url('guru/posts')}}" class=""><i class="lnr lnr-pencil"></i> <span>Post</span></a></li>
						@endif
						 <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="lnr lnr-exit"></i> <span>Logout</span>
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</form>
						
					</ul>
				</nav>
			</div>
		</div>