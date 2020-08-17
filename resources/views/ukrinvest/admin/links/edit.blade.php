@extends('layouts.admin.app')

@section('title')
    <title>Links Editing</title>
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
                                <h3 class="mb-0"><strong>Editing link -</strong>{{ $link['title'] }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.links.index') }}" class="btn btn-primary btn-round text-white">Back to list</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-regular">
                            <div class="tab-pane fade show active">
                                <form action="{{ route('admin.links.update',$link['id']) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="title" class="form-check-label">Title</label>
                                        <input type="text" name="title" id="title"
                                               class="form-control" placeholder="Title"
                                               value="{{ old('title',$link['title']) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="link" class="form-check-label">Link</label>
                                        <input type="text" name="link" id="link"
                                               class="form-control" placeholder="Link"
                                               value="{{ old('link',$link['link']) }}">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-round mt-4">{{ __('Save') }}</button>
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
