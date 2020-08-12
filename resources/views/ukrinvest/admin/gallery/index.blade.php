@extends('layouts.admin.app')

@section('title')
    <title>Gallery</title>
@endsection

@section('content')
    <div class="panel-header"></div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form action="{{ route('admin.gallery.store') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
{{--                            {{ csrf_field() }}--}}
                            <div class="form-group">
                                <label for="title" class="form-check-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="desc" class="form-check-label">Description</label>
                                <input type="text" name="description" id="desc" class="form-control">
                            </div>
{{--                            <div class="form-group">--}}
                                <label for="img" class="form-check-label">Select Image</label>
                                <input type="file" id="img" name="img" class="form-control-file">
{{--                            </div>--}}
                            <div class="text-center">
                                <button class="btn btn-primary btn-round mt-5">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="toolbar"></div>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center">#</td>
                                    <td class="text-center">Title</td>
                                    <td class="text-center">Description</td>
                                    <td class="text-center">Image</td>
                                    <td class="text-center">Edit</td>
                                    <td class="text-center">Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($galleryItems as $galleryItem)
                                @php /**@var \App\Models\Slider $galleryItem */ @endphp
                                <tr>
                                    <td class="text-center">{{ $galleryItem['id'] }}</td>
                                    <td class="text-center">{{ $galleryItem['title'] }}</td>
                                    <td class="text-center">{{ $galleryItem['description'] }}</td>
                                    <td class="text-center">
                                        <img src="{{ $galleryItem['img'] }}" style="width: 80px; height: 50px" alt="">
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary text-white" href="{{ route('admin.gallery.edit',$galleryItem['id']) }}">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-danger text-white" href="">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
