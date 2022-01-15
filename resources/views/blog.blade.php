@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 ">
        @foreach ($posts as $post)
        <div class="card mb-3">
            <a href="/details/{{ $post->slug }}">
              <img src="storage/images/{{ $post->picture}}" class="card-img-top" alt="...">
            </a>
            <div class="card-body blogfont">
              <h5 class="card-title"><a href="details/{{ $post->slug }}"> {{ $post->title }} </a></h5>
              <p class="card-text">{!! substr($post->content, 0,  300) !!} <a class="btn btn-sm btn-info" href="/details/{{ $post->slug }}"> Read More ....</a></p>
              <p class="card-text"><small class="text-muted"> Posted At: {{ $post->updated_at }}</small></p>
            </div>
          </div> 
        @endforeach
        {{ $posts->links() }}
    </div>
    <div class="col-md-4">
      <h1 class="h1sm">Latest Posts </h1>
        @foreach ( $lposts as $lpost )
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="../storage/images/{{ $lpost->picture }}" class="rimg" alt="{{ $lpost->picture }}">
              </div>
              <div class="col-md-8">
                <a href="/details/{{ $lpost->slug }}">
                <div class="card-body">
                  <p class="card-text"> {{ $lpost->title }} </p>
                </div>
                </a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection 