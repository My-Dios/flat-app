@extends('adminlte.masteradmin')


@section('content')
{{-- START Data News --}}
<section class="content bg-white">
    <div class="card">
        <div class="card-header">
            <div class='ml-3 mr-3 mt-3 mb-3'>
                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">News Post Data</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            <a href="/flatnews/create" class='btn btn-primary mb-2'>Create News</a>
                            {{-- START Data table News --}}
                            <table class="table table-bordered">
                                <thead>
                                    <tr align='center'>
                                        <th style="width: 10px">No</th>
                                        <th>Title</th>
                                        <th style="width: 170px">Opening Sentence</th>
                                        <th>Description</th>
                                        <th>Picture</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($post as $key => $post)
                                        <tr>
                                            <td align='center'>{{$key + 1}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{substr($post->openingsentence, 0, 35)}}...</td>
                                            <td class="card-text">{{substr($post->description, 0, 50)}}...</td>
                                            <td align='center'>
                                                <img style="width: 100px;" src="images/uploads/news/{{$post->picture}}" alt="{{$post->title}}" class="card-img-top"/>
                                            </td>
                                            <td align='center'>
                                                <a href="/flatnews/{{$post->id}}" class="btn btn-info btn-sm mb-2 pl-3 pr-3">Show</a>
                                                <a href="/flatnews/{{$post->id}}/edit" class="btn btn-default btn-sm mb-2 pl-3 pr-3">Edit</a>
                                                <form action="/flatnews/{{$post->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm mb-2">
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan='6', align='center'>No News Post Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{-- END Data table News --}}
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END Data News --}}
@endsection

