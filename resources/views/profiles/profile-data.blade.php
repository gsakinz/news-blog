<section class="profile">
    <div class="container pt-4 mt-2">
        <!-- Title -->
            <h2 class="pb-3 tittle">
            PROFILE
            </h2>
        <!-- Sub-title -->
            <h3 class="pb-5 sub-tittle">
                Please updaye your Profile
            </h3>

        <div class="media-container">
            <div class="pr-lg-5 img-figure">
                <img src="/images/IMG_0958.jpg">
            </div>
            <div class="media-content">

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text_style">{{ __('Name:') }}</label>

                    <div class="col-md-6 col-form-label media-text2 text_style">
                       {{ Auth::user()->name }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="day month year" class="col-md-4 col-form-label text_style">D.O.B:</label>

                    <div class="col-md-6 col-form-label media-text2 text_style">
                        DATE OF BIRTH
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text_style">{{ __('E-mail:') }}</label>

                    <div class="col-md-6 col-form-label media-text2 text_style">
                       {{ Auth::user()->email }} <span class="caret"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tel" class="col-md-4 col-form-label text_style">{{ __('Telephone:') }}</label>

                    <div class="col-md-6 col-form-label media-text2 text_style">
                       TELEPHONE
                    </div>
                </div>

                <div class="form-group row">
                    <label for="department" class="col-md-4 col-form-label text_style">{{ __('Department:') }}</label>

                    <div class="col-md-6 col-form-label media-text2 text_style">
                       DEPARTMENT
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
