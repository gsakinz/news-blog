<section class="profile">
    <div class="container pt-4 mt-2">
        <!-- Title -->
            <h2 class="pb-3 tittle">
            UPDATE - PROFILE
            </h2>


        <form method="POST" action="{{ url('/profilesetup') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-mail') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="telephone" class="col-md-3 col-form-label text-md-right">{{ __('Telephone No') }}</label>

                <div class="col-md-6">
                    <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required>

                    @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="date" class="col-md-3 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                <div class="col-md-6">
                    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required>

                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="department" class="col-md-3 col-form-label text-md-right">{{ __('Department') }}</label>

                <div class="col-md-6">
                    <input id="department" type="input" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required>

                    @error('department')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="designation" class="col-md-3 col-form-label text-md-right">{{ __('Designation') }}</label>

                <div class="col-md-6">
                    <input id="designation" type="input" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required>

                    @error('designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="profile_pic" class="col-md-3 col-form-label text-md-right">{{ __('Profile Picture') }}</label>

                <div class="col-md-6">
                    <input id="profile_pic" type="file" class="@error('profile_pic') is-invalid @enderror" name="profile_pic" value="{{ old('profile_pic') }}" required>

                    @error('profile_pic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add Profile') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
