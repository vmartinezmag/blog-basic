@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Articulo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form
                        action="{{ route('posts.store') }}"
                        method="POST"
                        encrypt="multipart/form-data"
                    >
                        <div class="form-group">
                            <label for="titulo">Titulo *</label>
                            <input id="titulo" type="text" name="titulo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input id="file" type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">Contenido *</label>
                            <textarea id="body" name="body" cols="30" rows="10"class="form-control" required> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="iframe">Contenido embebido</label>
                            <textarea id="iframe" name="iframe"class="form-control" required> </textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
