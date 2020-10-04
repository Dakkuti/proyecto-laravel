@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(session('message'))
            <div class="alert alert-success">
                {{session ('message')}}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Subir imagen</div>



                <form method="POST" action="{{ route('image.save')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group ">
                        <label for="image_path" class="col-md-4 control-label">Imagen</label>

                        <div class="col-md-7">

                            <input id="image_path" type="file" name="image_path" class="form-control {{ $errors->has('image_path') ? 'is-invalid' : '' }}" required />

                            @if($errors->has('image_path'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image_path') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    </br>
                    <div class="form-group ">
                        </br>
                        <label for="description" class="col-md-4 control-label">Descripción</label>
                        <div class="col-md-7">
                            <textarea id="description" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" required></textarea>

                            @if($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-6 col-md-offset-4">
                            </br>
                            <input type="submit" class="btn btn-primary" value="Subir imagen">
                        </div>
                    </div>


                </form>


            </div>



















        </div>
    </div>
</div>
</div>
@endsection