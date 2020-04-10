<section class="category">
    <div class="container pt-4 mt-2">
    <!-- Title -->
        <h2 class="pb-3 tittle">
        CATEGORY
        </h2>
    <!-- Sub-title -->
        <h3 class="pb-5 sub-tittle">

        </h3>

          @if (session('response'))
            <div class="mb-2 col-md-6 text_style offset-md-3" role="alert">
                {{ __('Category Added Successfully') }}

            </div>
          @endif

        <form method="POST" action="{{ url('addCategory') }}">
            @csrf
            <div class="form-group row">
                <label for="category" class="col-md-3 col-form-label text-md-right">
                    {{ __('Enter Category') }}
                </label>
                <div class="col-md-6">
                    <input id="category" type="text" placeholder="Forum Category" name="category_name" value="" required="required" class="form-control ">

                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-md-8 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add Category') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
