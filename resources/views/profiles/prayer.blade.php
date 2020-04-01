<section class="prayer-form">
    <div class="container pt-4 mt-2">
    <!-- Title -->
        <h2 class="pb-3 tittle">
        PRAYER-REQUEST
        </h2>
    <!-- Sub-title -->
        <h3 class="pb-5 sub-tittle">
            Lets pray with you
        </h3>

        <form method="POST" action="{{ url('prayer') }}">
            @csrf
            <div class="form-group row">
                <label for="prayer" class="col-md-2 col-form-label text-md-right">
                    {{ __('Prayer Request') }}
                </label>
                <div class="col-md-8">
                    <textarea id="prayer" type="text" name="prayer" value="" required="required" class="form-control box-height "></textarea>

                    @error('prayer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
