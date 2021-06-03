@extends('template_blog.content')
@section('title','MotoOto - List Post')
@section('isi')
<div class="col-md-8 hot-post-left">
	@foreach($data as $list_post)
	<div class="post post-row">
		<a class="post-img" href="{{route('blog.isi', $list_post->slug)}}"><img src="{{asset ($list_post->gambar)}}" alt=""></a>
		<div class="post-body">
			<div class="post-category">
				<a href="{{ route('blog.category', $list_post->category->slug) }}"> {{$list_post->category->name}} </a>
			</div>

			<h3 class="post-title"><a href="{{route('blog.isi', $list_post->slug)}}">{{$list_post->judul}}</a></h3>
			<ul class="post-meta">
				<li><a>{{$list_post->users->name}}</a></li>
				<li>{{$list_post->created_at->diffForHumans()}}</li>
			</ul>
			@foreach($list_post->tags as $post)
			<div class="tags-widget">
				<ul>
					<li>
						<a href="{{ route('blog.tag', $post->slug) }}"> {{$post->name}} </a>
					</li>
				</ul>
			</div>
			@endforeach

		</div>

	</div>
	<br>

	@endforeach
	<div style="text-align:center">
		{{$data->links()}}
	</div>
</div>
@endsection