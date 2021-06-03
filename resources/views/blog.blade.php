@extends('template_blog.content')
@section('isi')
<div class="col-md-8 hot-post-left">

	<!-- row -->

	<!-- post -->

	<div class="post post-thumb">
		<a class="post-img" href=" {{ route('blog.isi',$dataRandom->get(1)->slug ) }} "><img src="{{ $dataRandom->get(1)->gambar }} " alt="" style="height: 507px"></a>
		<div class="post-body">
			<div class="post-category">
				<a href="{{ route('blog.category',$dataRandom->get(1)->category->slug ) }}">{{ $dataRandom->get(1)->category->name }}</a>
			</div>
			<h3 class="post-title title-lg"><a href="{{ route('blog.isi',$dataRandom->get(1)->slug ) }}">{{ $dataRandom->get(1)->judul }}</a></h3>
			<ul class="post-meta">
				<li><a>{{ $dataRandom->get(1)->users->name }}</a></li>
				<li>{{ $dataRandom->get(1)->created_at->diffForHumans() }}</li>
			</ul>
		</div>
	</div>
	<!-- /post -->
</div>
<div class="col-md-4 hot-post-right">
	<!-- post -->
	<div class="post post-thumb">
		<a class="post-img" href="{{ route('blog.isi',$dataRandom->get(2)->slug ) }}"><img src="{{ $dataRandom->get(2)->gambar }}" alt="" style="height: 250px"></a>
		<div class="post-body">
			<div class="post-category">
				<a href="{{ route('blog.category',$dataRandom->get(2)->category->slug ) }}">{{ $dataRandom->get(2)->category->name }}</a>
			</div>
			<h3 class="post-title"><a href="{{ route('blog.isi',$dataRandom->get(2)->slug ) }}">{{ $dataRandom->get(2)->judul }}</a></h3>
			<ul class="post-meta">
				<li><a>{{ $dataRandom->get(2)->users->name }}</a></li>
				<li>{{ $data->get(2)->created_at->diffForHumans() }}</li>
			</ul>
		</div>
	</div>
	<!-- /post -->

	<!-- post -->
	<div class="post post-thumb">
		<a class="post-img" href="{{ route('blog.isi',$dataRandom->get(3)->slug ) }}"><img src="{{ $dataRandom->get(3)->gambar }}" alt="" style="height: 250px"></a>
		<div class="post-body">
			<div class="post-category">
				<a href="{{ route('blog.category',$dataRandom->get(3)->category->slug ) }}">{{ $dataRandom->get(3)->category->name }}</a>
			</div>
			<h3 class="post-title"><a href="{{ route('blog.isi',$dataRandom->get(3)->slug ) }}">{{ $dataRandom->get(3)->judul }}</a></h3>
			<ul class="post-meta">
				<li><a>{{ $dataRandom->get(3)->users->name }}</a></li>
				<li>{{ $data->get(3)->created_at->diffForHumans() }}</li>
			</ul>
		</div>
	</div>
	<!-- /post -->
</div>
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Recent posts</h2>
						</div>
					</div>
					<!-- post -->
					@foreach($data as $post_terbaru)
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href=" {{ route('blog.isi',$post_terbaru->slug ) }} "><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{ route('blog.category',$post_terbaru->category->slug ) }}"> {{$post_terbaru->category->name}} </a>
								</div>
								<h3 class="post-title"><a href="{{ route('blog.isi',$post_terbaru->slug ) }}">{{ $post_terbaru->judul }}</a></h3>
								<ul class="post-meta">
									<li><a>{{ $post_terbaru->users->name }}</a></li>
									<li> {{$post_terbaru->created_at->diffForHumans() }} </li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			@endsection