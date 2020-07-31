@extends('layouts.principal')

@section('sidebar')

<div class="wrapper" >
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h2>Menú</h2>
        </div>
        
        <ul class="list-unstyled components">
            <!--<li class="active">
              
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">

                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>

            </li>-->
            @foreach($posts as $post)
            <li>
                <a href="{{ route('post', $post) }}" id='post_contenido'>{{ $post->title }}</a>
            </li>
            @endforeach
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('preinscripcion') }}">Preinscripción</a>
            </li>
            <li>
                <a href="#">Contacto</a>
            </li>
        </ul>
        
    </nav>
    <!-- Page Content -->
    <div id="content">
      <div class="container" id="contenido">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @foreach($posts as $post)
                        <div class="card mb-4">
                            <div class="card-body">
                              @if ($post->image)
                                <img src="{{ $post->get_image }}" class="card-img-top" width="100%>

                              @elseif ($post->iframe)
                                <div class="embed-responsive embed-responsive-16by9">
                                {!! $post->iframe !!}
                                 
                                </div>
                              @endif

                               <h5 class='card-title'>{{ $post->title }}</h5>
                               <p class='card-text'>
                                   {{ $post->get_excerpt }}
                                   <a href="{{ route('post', $post) }}">Leer más</a>
                               </p>
                               <p class="card mb-4">
                                   <em>
                                       &ndash; {{ $post->user->name }} 
                                   </em>
                                   {{ $post->created_at->format('d M Y') }}
                               </p>
                            </div>
                        </div>
                        @endforeach
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
      </div>
    </div>
</div> 

@endsection
