@extends('main')

@section('title', '| Blog')

@section('content')
  {{-- <div class="fluid-container"> --}}
    <div class="row">
      <div class="col-md-4">
        <div class="navbar-left">
          <img src="/images/keep_calm.jpg" height="800" width="400">
        </div> <!-- sidebar-nav -->
      </div> <!-- col -->

      <div class="col-md-7 col-md-offset-1">
        <h1>Blog</h1>
      </div> <!-- col -->
    {{-- </div> <!-- row --> --}}

    @foreach($posts as $post)
      {{-- <div class="row"> --}}
        <div class="col-md-7 col-md-offset-1">
          <h2>{{ $post->title }}</h2>
          <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
          <p>
            {{ substr(strip_tags($post->body), 0, 250) }}
            {{ strlen(strip_tags($post->body)) > 250 ? "..." : "" }}
          </p>
          <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
          <hr>
        </div> <!-- col -->

      {{-- </div> <!-- row --> --}}
    @endforeach
  {{-- </div> <!-- container --> --}}

  <div class="row">
    <div class="col-md-12">
      <div class="text-center">
        {!! $posts->links() !!}
      </div> <!-- text center -->
    </div> <!-- col -->
  </div> <!-- row -->


@endsection
