<section class="post">
    <div class="container pt-4 mt-2">
    <!-- Title -->
        <h2 class="pb-3 tittle">
        POST
        </h2>
    <!-- Sub-title -->
        <h3 class="pb-5 sub-tittle">

        </h3>

          @if (session('post_response'))
            <div class="mb-2 col-md-6 text_style offset-md-3" role="alert">
                {{ __('Post Request Sent Successfully.') }}
            </div>
          @endif

        <form method="POST" action="{{ url('addPost') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="post_title" class="col-md-3 col-form-label text-md-right">
                    {{ __('Post Title') }}
                </label>
                <div class="col-md-6">
                    <input id="post_title" type="text" placeholder="Post Title" name="post_title" value="" required="required" class="form-control">

                    @error('post_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="post_body" class="col-md-3 col-form-label text-md-right">
                    {{ __('Post Body') }}
                </label>
                <div class="col-md-6">
                    <textarea id="post_body" placeholder="Post Body" name="post_body" value="" required="required" class="form-control" rows="10" ></textarea>

                    @error('post_body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="category_name" class="col-md-3 col-form-label text-md-right">
                    {{ __('Category') }}
                </label>
                <div class="col-md-6">
                    <select id="category_name" type="category_name" name="category_name" value="" required="required" class="form-control">
                        @if(count($categories) > 0)
                           @foreach($categories->all() as $category)
                           <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                           @endforeach
                        @endif
                    </select>

                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="post_image" class="col-md-3 col-form-label text-md-right">{{ __('Featured Image') }}</label>

                <div class="col-md-6">
                    <input id="post_image" type="file" class="@error('post_image') is-invalid @enderror" name="post_image" value="{{ old('post_image') }}" required>

                    @error('post_image')
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
