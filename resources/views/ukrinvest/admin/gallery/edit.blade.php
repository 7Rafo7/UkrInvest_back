@extends('layouts.admin.app')

@section('title')
    <title>Gallery Item Edit</title>
@endsection

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><strong>Editing Gallery Item -</strong></h3>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('admin.gallery.index') }}" class="btn btn-primary btn-round text-white">Back to list</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-regular">
                            <div class="tab-pane fade show active">
                                <form action="{{ route('admin.gallery.update',$galleryItem['id']) }}" method="POST"
                                      enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="title" class="form-control-label">Title</label>
                                        <input type="text" name="title" id="title"
                                               class="form-control"
                                               placeholder="Title" value="{{ old('title',$galleryItem['title']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc" class="form-control-label">Description</label>
                                        <input type="text" name="description" id="desc"
                                               class="form-control"
                                               placeholder="Description" value="{{ old('description',$galleryItem['description']) }}">
                                    </div>
                                    <label for="img" class="form-check-label">Select Image</label>
                                    <input type="file" id="img" name="img" class="form-control-file"
                                           value="{{ old('img',$galleryItem['img']) }}">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4">{{__('Save')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
