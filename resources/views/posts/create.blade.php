@extends('layouts.app_original')
@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <form action="{{ route('Posts.store') }}" method="post" enctype="multipart/form-data">
                    <label>image</label>
                    <div><input type="file" name="image"></div>
                    {{ csrf_field() }}
                    <input type="submit" value="作成">
                    </form>
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
  </div>
@endsection
