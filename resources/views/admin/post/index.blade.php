@extends('backend.home')
@section('title','Post')
@section('subjudul','Post')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success')}}    
  </div>
    @endif
<a href=" {{route('post.create')}} "class="btn btn-info">Tambah Post</a>
<br>
<br>
<table class="table rable striped table hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Post</th>
            <th>Kategori</th>
            <th>Tags</th>
            <th>Creator</th>
            <th>Thumbnail</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $result =>$hasil)
            <tr>
                <td> {{$result + $post->firstitem()}} </td>
                <td> {{$hasil->judul}} </td>
                <td> {{$hasil->category->name}} </td>
                <td>@foreach($hasil->tags as $tag)
                    <ul>
                     <h6>
                     <span class="badge badge-info">{{ $tag->name }}</span>
                     </h6> 
                     </ul>
                    @endforeach
                    </td>
                    <td> {{$hasil->users->name}} </td>
                <td><img src=" {{asset( $hasil->gambar )}}  " class="img-fluid" style="width:100px"></td>
                <td>
                    <form action=" {{route('post.destroy', $hasil->id)}} " method="post">
                        @csrf
                        @method('delete')
                        <a href=" {{route('post.edit',$hasil->id)}} " class="btn btn-primary btn-sm" style="margin-right: 8px;"><i class="fas fa-edit"></i></a>
                    <button type="submit" href="" class="btn btn-danger btn-sm"onclick="return confirm('Apakah anda ingin menghapus data?')"><i class="fas fa-trash"></i></button></td>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$post->links()}}
@endsection
