@extends('adminlte.masteradmin')

@section('content')
<section class="content bg-white">
    <div class="card">
        <div class="card-header">
            <div class='ml-3 mt-3 mr-3'>
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Edit {{$posttestimony->name}}'s Testimony</h3>
                    </div>

                    <form role="form" action='/flattestimonies/{{$posttestimony->id}}' method='post' enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')


                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name='name' value="{{old('name', $posttestimony->name)}}" placeholder="Enter the Name..." required>
                                <div class="invalid-feedback">
                                    Please fill in the name.
                                </div>
                                <div class="valid-feedback">
                                    Great!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" id="position" name='position' value="{{old('position', $posttestimony->position)}}" placeholder="Enter the Position..." required>
                                <div class="invalid-feedback">
                                    Please fill in the position.
                                </div>
                                <div class="valid-feedback">
                                    Cool!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sentence">Sentence</label>
                                <textarea name="sentence" id="sentence" class="form-control" cols="30" rows="3" placeholder="Fill the Sentence for Testimony..." value="{{old('position', $posttestimony->position)}}" required></textarea>
                                <div class="invalid-feedback">
                                    Please fill in the sentence.
                                </div>
                                <div class="valid-feedback">
                                    Interesting Sentence!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture (640 x 640 Pixel)</label>
                                <input type="file" class="form-control-file" id="picture" name = 'picture' value="{{old('picture', '')}}" required>
                                <div class="invalid-feedback">
                                    Please insert a picture here.
                                </div>
                                <div class="valid-feedback">
                                    Nice Picture!
                                </div>
                            </div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
@endsection

