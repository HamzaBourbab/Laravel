@extends("master")
@section("meta")
<title>Liste des posts</title>
@endsection
@section("content")
<a href="/posts/create"><h3>Nouveau</h3></a>
<h1>Liste de posts</h1>
    @if(count($posts)>0)
        <ul class="list-group">
            @foreach ($posts as $post )
                <li class="list-group-item">
             <a href="{{ route("posts.show",$post)}}">   <h3> {{$post->title}}   </h3> </a>
                    <small>publié le {{$post->created_at->format("d/m/Y H:i:s")}}</small>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun post disponible dans la base de données</p>
    @endif
@endsection
