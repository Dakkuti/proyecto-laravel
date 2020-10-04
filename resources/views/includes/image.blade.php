<div class="panel panel-default">

                @if($image->user->image)

                <div class="container-avatar">
                    <img src="{{ route('user.avatar',['filename'=>$image->user->image]) }}" class="pub-image" />
                </div>
                @endif

                <div class="data-user">
                    <a href="">
                        {{$image->user->name.' '.$image->user->surname}}

                    </a>
                </div>

                <div class="panel-body">

                    <div class="image-container">
                        <img src="{{ route('image.file',['filename' => $image->image_path]) }}" />
                    </div>

                    <div class="description">
                        
                        <h3>Descripción de la imagen </h3>
                        <p>{{$image->description}}</p>
                    </div>

                </div>
            </div>