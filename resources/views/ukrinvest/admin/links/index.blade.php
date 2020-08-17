@extends('layouts.admin.app')

@section('title')
    <title>Links</title>
@endsection
@section('content')
    <div class="panel-header"></div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <h2>Links</h2>
                        </div>
                        <form action="{{ route('admin.links.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-check-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="link" class="form-check-label">Link</label>
                                <input type="text" name="link" id="link" class="form-control">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-round">{{ (__('Save')) }}</button>
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
                                    <td class="text-center">Link</td>
                                    <td class="text-center">Edit</td>
                                    <td class="text-center">Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($links as $link)
                                @php/**@var \App\Models\Link $link*/ @endphp
                                <tr>
                                    <td class="text-center">{{ $link['id'] }}</td>
                                    <td class="text-center">{{ $link['title'] }}</td>
                                    <td class="text-center">{{ $link['link'] }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-primary text-white" href="{{ route('admin.links.edit',$link['id']) }}">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('admin.links.destroy',$link['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-white">Delete</button>
                                        </form>
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
