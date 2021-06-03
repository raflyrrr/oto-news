<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
						<a href="{{ url('') }}" class=""><img src="{{asset('frontend/img/')}}" alt=""><h1 style="color: white;">Moto<span style="color: #C72026;">Oto</span></h1></a>
						</div>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
							@foreach ($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{$hasil->name}}<span>{{ $hasil->posts->count() }}</span></a></li>
						    @endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>@foreach ($tag_widget as $tags)
								<li><a href="{{ route('blog.tag', $tags->slug) }}">{{$tags->name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>