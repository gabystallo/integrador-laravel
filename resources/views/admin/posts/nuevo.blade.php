@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Nuevo post</h1>
                </div>

                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            
                            @include('admin.posts._form')

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
