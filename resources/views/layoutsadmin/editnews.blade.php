@extends('adminlte.masteradmin')

@section('content')
<section class="content bg-white">
    <div class="card">
        <div class="card-header">
            <div class='ml-3 mt-3 mr-3'>
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Edit  "{{$post->title}}"  News</h3>
                    </div>

                    <form role="form" action='/flatnews/{{$post->id}}' method='post' enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                        {{-- START Create Form --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name='title' value="{{old('title', $post->title)}}" placeholder="Enter the Title..." required>
                                <div class="invalid-feedback">
                                    Please fill in the title.
                                </div>
                                <div class="valid-feedback">
                                    Great Title!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="openingsentence">Opening Sentence</label>
                                <textarea name="openingsentence" id="openingsentence" class="form-control" cols="30" rows="3" placeholder="Fill the Opening Sentence for Thumbnail..." required>{{$post->openingsentence}}</textarea>
                                <div class="invalid-feedback">
                                    Please fill in the opening sentence.
                                </div>
                                <div class="valid-feedback">
                                    Interesting Opening Sentence!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Fill the Description..." required>{{$post->description}}</textarea>
                                <div class="invalid-feedback">
                                    Please fill in the description.
                                </div>
                                <div class="valid-feedback">
                                    Perfect Description!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="file" class="form-control-file" id="picture" name = 'picture' required>
                                <div class="invalid-feedback">
                                    Please insert a picture here.
                                </div>
                                <div class="valid-feedback">
                                    Nice Picture!
                                </div>
                            </div>
                        </div>
                        {{-- END Create Form --}}

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

