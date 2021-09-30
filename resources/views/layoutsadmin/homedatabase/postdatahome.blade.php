@extends('adminlte.masteradmin')


@section('content')
{{-- START Data Jumbotron --}}
<section class="content bg-white">
    <div class="card">
        <div class="card-header">
            <div class='ml-3 mr-3 mt-3 mb-3'>
                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Billboards Post Data</h3>
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
                            <a href="/flatjumbotrons/create" class='btn btn-primary mb-2'>Create Billboard</a>
                            {{-- START Data table Jumbotron --}}
                            <table class="table table-bordered">
                                <thead>
                                    <tr align='center'>
                                        <th style="width: 10px">No</th>
                                        <th style="width: 170px">Title</th>
                                        <th style="width: 170px">Sentence</th>
                                        <th>Name Button</th>
                                        <th>Link Button</th>
                                        <th>Text Align</th>
                                        <th>Justify Content</th>
                                        <th>Picture</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($postjumbotron as $key => $postjumbotron)
                                        <tr>
                                            <td align='center'>{{$key + 1}}</td>
                                            <td>{{$postjumbotron->title}}</td>
                                            <td>{{substr($postjumbotron->sentence, 0, 10)}}...</td>
                                            <td align='center'>{{$postjumbotron->btnname}}</td>
                                            <td align='center'><a href="{{$postjumbotron->btnlink}}" target="_blank">Link</a></td>
                                            <td align='center'>{{$postjumbotron->textalign}}</td>
                                            <td align='center'>{{$postjumbotron->justifycontent}}</td>
                                            <td align='center'>
                                                <img style="width: 100px;" src="images/uploads/jumbotrons/{{$postjumbotron->picture}}" alt="{{$postjumbotron->title}}" class="card-img-top"/>
                                            </td>
                                            <td align='center'>
                                                <a href="/" class="btn btn-info btn-sm mb-2 pl-3 pr-3">Show</a>
                                                <a href="/flatjumbotrons/{{$postjumbotron->id}}/edit" class="btn btn-default btn-sm mb-2 pl-3 pr-3">Edit</a>
                                                <form action="/flatjumbotrons/{{$postjumbotron->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm mb-2">
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan='9', align='center'>No Billboards Post Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{-- END Data table Jumbotron --}}
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END Data Jumbotron --}}

{{-- START Data Testimony --}}
<section class="content bg-white">
    <div class="card">
        <div class="card-header">
            <div class='ml-3 mr-3 mt-3 mb-3'>
                <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Testimonies Post Data</h3>
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
                            <a href="/flattestimonies/create" class='btn btn-primary mb-2'>Create Testimony</a>
                            {{-- START Data table Testimony --}}
                            <table class="table table-bordered">
                                <thead>
                                    <tr align='center'>
                                        <th style="width: 10px">No</th>
                                        <th style="width: 150px">Name</th>
                                        <th style="width: 160px">Position</th>
                                        <th>Sentence</th>
                                        <th style="width: 160px">Photo</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($posttestimony as $key => $posttestimony)
                                        <tr>
                                            <td align='center'>{{$key + 1}}</td>
                                            <td>{{$posttestimony->name}}</td>
                                            <td>{{$posttestimony->position}}</td>
                                            <td>{{substr($posttestimony->sentence, 0, 15)}}...</td>
                                            <td align='center'>
                                                <img style="width: 100px;" src="images/uploads/testimony/{{$posttestimony->picture}}" alt="{{$posttestimony->title}}" class="card-img-top"/>
                                            </td>
                                            <td align='center'>
                                                <a href="/" class="btn btn-info btn-sm mb-2 pl-3 pr-3">Show</a>
                                                <a href="/flattestimonies/{{$posttestimony->id}}/edit" class="btn btn-default btn-sm mb-2 pl-3 pr-3">Edit</a>
                                                <form action="/flattestimonies/{{$posttestimony->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm mb-2">
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan='9', align='center'>No Testimonies Post Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{-- END Data table Testimony --}}
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END Data Testimony --}}
@endsection

