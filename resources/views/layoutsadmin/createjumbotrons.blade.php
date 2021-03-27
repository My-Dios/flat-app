@extends('adminlte.masteradmin')

@section('content')
<section class="content bg-white">
    <div class="card">
        <div class="card-header">
            <div class='ml-3 mt-3 mr-3'>
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Create Billboard</h3>
                    </div>

                    <form role="form" action='/flatjumbotrons' method='post' enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('POST')


                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name='title' value="{{old('title', '')}}" placeholder="Enter the Title..." required>
                                <div class="invalid-feedback">
                                    Please fill in the title.
                                </div>
                                <div class="valid-feedback">
                                    Great Title!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sentence">Sentence</label>
                                <textarea name="sentence" id="sentence" class="form-control" cols="30" rows="3" placeholder="Fill the Sentence for Thumbnail..." value="{{old('sentence', '')}}" required></textarea>
                                <div class="invalid-feedback">
                                    Please fill in the sentence.
                                </div>
                                <div class="valid-feedback">
                                    Interesting Sentence!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="buttonname">Button Name</label>
                                <input type="text" class="form-control" id="buttonname" name='buttonname' value="{{old('buttonname', '')}}" required placeholder="Enter the Button Name like 'More', 'Go', 'Contact Us' etc OR ignore it if you don't want to fill it...">
                                <div class="invalid-feedback">
                                    Please fill in the button name.
                                </div>
                                <div class="valid-feedback">
                                    Interesting Button Name!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="buttonlink">Button Link</label>
                                <input type="text" class="form-control" id="buttonlink" name='buttonlink' value="{{old('buttonlink', '')}}" required placeholder="Enter the Button Link like 'https://www.instagram.com/flatuinjakarta/' etc OR ignore it if you don't want to fill it...">
                                <div class="invalid-feedback">
                                    Please fill in the button link to go to the link page.
                                </div>
                                <div class="valid-feedback">
                                    Good Link!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture (1366 x 768 Pixel)</label>
                                <input type="file" class="form-control-file" id="picture" name = 'picture' value="{{old('picture', '')}}" required>
                                <div class="invalid-feedback">
                                    Please insert a picture here.
                                </div>
                                <div class="valid-feedback">
                                    Nice Picture!
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="textalign">Text Align</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="textalign" id="center" value="center" required>
                                    <label class="form-check-label" for="center">
                                        Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="textalign" id="left" value="left" required>
                                    <label class="form-check-label" for="left">
                                        Left
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="textalign" id="right" value="right" required>
                                    <label class="form-check-label" for="right">
                                        Right
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="justifycontent">Justify Content</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="justifycontent" id="mid" value="center" required>
                                    <label class="form-check-label" for="mid">
                                        Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="justifycontent" id="start" value="start" required>
                                    <label class="form-check-label" for="start">
                                        Left
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="justifycontent" id="end" value="end" required>
                                    <label class="form-check-label" for="end">
                                        Right
                                    </label>
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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

