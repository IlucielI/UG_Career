<div class="sidebar">
			
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav">
						<li class="nav-item @if (Request::segment( 2 ) == 'dashboard') active @endif">
							<a href="{{ route('administrator.dashboard') }}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item @if (Request::segment( 2 ) == 'user' || Request::segment( 2 ) == 'dataalumni' || Request::segment( 2 ) == 'perusahaan' || Request::segment( 2 ) == 'provinsi' || Request::segment( 2 ) == 'kabkota' || Request::segment( 2 ) == 'prodi') active @endif">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Data Referensi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
								@if(isset(Auth::user()->level))
         					 	@if(Auth::user()->level == "admin")
									<li class="@if (Request::segment( 2 ) == 'user') active text-primary @endif">
										<a href="{{ route('user.index') }}">
											<span class="sub-item">Data Operator Prodi</span>
										</a>
									</li>
								@endif
								@endif
									<li class="@if (Request::segment( 2 ) == 'dataalumni') active text-primary @endif">
										<a href="{{ route('dataalumni.index') }}">
											<span class="sub-item">Data Alumni</span>
										</a>
									</li>
									<li class="@if (Request::segment( 2 ) == 'perusahaan') active text-primary @endif">
										<a href="{{ route('perusahaan.index') }}">
											<span class="sub-item">Data Perusahaan</span>
										</a>
									</li>
								@if(isset(Auth::user()->level))
         					 	@if(Auth::user()->level == "admin")
									<li class="@if (Request::segment( 2 ) == 'provinsi') active text-primary @endif">
										<a href="{{ route('provinsi.index') }}">
											<span class="sub-item">Data Provinsi</span>
										</a>
									</li>
									<li class="@if (Request::segment( 2 ) == 'kabkota') active text-primary @endif">
										<a href="{{ route('kabkota.index') }}">
											<span class="sub-item">Data Kabupaten/Kota</span>
										</a>
									</li>
								@endif
								@endif
									<li class="@if (Request::segment( 2 ) == 'prodi') active text-primary @endif">
										<a href="{{ route('prodi.index') }}">
											<span class="sub-item">Data Prodi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item @if (Request::segment( 2 ) == 'pert_alumni' || Request::segment( 2 ) == 'pert_perusahaan' || Request::segment( 2 ) == 'hasil_alumni' || Request::segment( 2 ) == 'hasil_perusahaan') active @endif">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Tracer Study</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
								@if(isset(Auth::user()->level))
         					 	@if(Auth::user()->level == "admin")
									<li class="@if (Request::segment( 2 ) == 'pert_alumni') active text-primary @endif">
										<a href="/UG_Career/administrator/pert_alumni/text">
											<span class="sub-item">Daftar Pertanyaan Alumni</span>
										</a>
									</li>
									<li class="@if (Request::segment( 2 ) == 'pert_perusahaan') active text-primary @endif">
										<a href="/UG_Career/administrator/pert_perusahaan/text">
											<span class="sub-item">Daftar Pertanyaan Perusahaan</span>
										</a>
									</li>
								@endif
								@endif
									<li class="@if (Request::segment( 2 ) == 'hasil_alumni') active text-primary @endif">
										<a href="{{ route('hasil_alumni') }}">
											<span class="sub-item">Hasil Survei Alumni</span>
										</a>
									</li>
									<li class="@if (Request::segment( 2 ) == 'hasil_perusahaan') active text-primary @endif">
										<a href="{{ route('hasil_perusahaan') }}">
											<span class="sub-item">Hasil Survei Perusahaan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item @if (Request::segment( 2 ) == 'berita') active @endif">
							<a href="{{ route('berita.index') }}">
								<i class="far fa-newspaper"></i>
								<p>Berita</p>
							</a>
						</li>
						@if(isset(Auth::user()->level))
         				@if(Auth::user()->level == "admin")
						<li class="nav-item @if (Request::segment( 2 ) == 'dataweb') active @endif">
							<a href="{{ route('dataweb.index') }}">
								<i class="fas fa-desktop"></i>
								<p>Setting Data Web</p>
							</a>
						</li>
						@endif
						@endif
					</ul>
				</div>
			</div>
		</div>