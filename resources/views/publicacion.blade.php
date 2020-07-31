<div class="container" id='contenido'>
    <div class="row justify-content-right">
        <div class="col-md-8">

            <div class="card mb-4">
                <div class="card-body">

                  @if ($post->image)
                    <img src="{{ $post->get_image }}" class="card-img-top" width="100%">

                  @elseif ($post->iframe)
                    <div class="embed-responsive embed-responsive-16by9">
                    {!! $post->iframe !!}
                     
                    </div>
                  @endif
                  
                   <h5 class='card-title'>{{ $post->title }}</h5>
                   <p class='card-text'>
                       {{ $post->body }}
                   </p>
                   <p class="card mb-4">
                       <em>
                           &ndash; {{ $post->user->name }} 
                       </em>
                       {{ $post->created_at->format('d M Y') }}
                   </p>
                </div>
            </div>
        </div>
    </div>
</div>
