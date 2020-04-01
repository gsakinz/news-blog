<section class="post">
    <div class="container pt-4 mt-2">
    <!-- Title -->
        <h2 class="pb-3 tittle">
        POST
        </h2>
    <!-- Sub-title -->
        <h3 class="pb-5 sub-tittle">
            What's on your mind ?
        </h3>

        <form method="POST" action="{{ url('addPost') }}">
            @csrf
            <div class="form-group row">
                <label for="post" class="col-md-3 col-form-label text-md-right">
                    {{ __('Create Post') }}
                </label>
                <div class="col-md-6">
                    <input id="post" type="post" name="post" value="" required="required" class="form-control ">

                    @error('post')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-md-8 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Publish') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
