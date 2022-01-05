@extends('layouts.app_template')

@section('content')
<main>
    <div class="apply-area hero-area2 slider-area pb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="hero-cap text-center pt-20">
                        <h3>{{ __('Ro‘yxatdan o‘tish') }}</h3><br>
                    </div>

                    <div class="apply-wrapper">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                            <div class="row">

                                <div class="col-md-7">
                                    <div class="single-form">
                                        <label for="name">{{ __('F.I.O') }}</label>
                                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="F.I.O ni kiriting...">
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5">
                                    <div class="single-form">
                                        <label for="phone">{{ __('Telefon raqam') }}</label>

                                        <input id="phone" type="text" class="phone form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Telefon raqamni kiriting...">
                                    </div>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <label for="region_id">{{ __('Viloyat') }}</label>
                                        <div class="select-option mb-10">
                                            <select name="region_id" id="region_id">
                                                <option value="" disabled selected>Viloyatni tanlang...</option>
                                                    @foreach($regions as $region)
                                                        <option value="{{ $region->id }}" data-id="{{ $region->id }}" >{{ $region->name_uz }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    @error('region_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-2">
                                    <div class="single-form">
                                        <label for="old">{{ __('Yoshi') }}</label>

                                        <input id="old" type="number" min="10" max="100" class="form-control @error('old') is-invalid @enderror" name="old" value="{{ old('old') }}" required autocomplete="old" autofocus>
                                    </div>

                                    @error('old')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="single-form d-flex">
                                        <label for="gender">{{ __('Jinsi') }}</label>

                                        <div class="select-radio6 pt-50">
                                            <div class="radio">
                                                <input type="radio" name="gender" id="genderM" checked value="1">
                                                <label for="genderM" class="radio-label">Erkak</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="gender" id="genderF" value="0">
                                                <label for="genderF" class="radio-label">Ayol</label>
                                            </div>
                                        </div>
                                    </div>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <label for="specialist">{{ __('Mutaxassisligi') }}</label>
                                        <input id="specialist" type="specialist" class="form-control @error('specialist') is-invalid @enderror" name="specialist" value="{{ old('specialist') }}" required autocomplete="specialist" placeholder="Mutaxassisligizni kiriting...">

                                        @error('specialist')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-5">
                                        <label for="avatar">{{ __('Rasm') }}</label>
                                        <input id="avatar" type="file" name="avatar" value="{{ old('avatar') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    
                                    <div class="single-form">
                                        <label for="email">{{ __('E-Mail') }}</label>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Pochta manzilingizni kiriting...">
                                    </div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="single-form">
                                        <label for="password">{{ __('Parol') }}</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="single-form">
                                        <label for="password-confirm">{{ __('Parolni tasdiqlash') }}</label>

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-3">
                                    <button type="submit" class="btn primary-btn">
                                        {{ __('Ro‘yxatdan o‘tish') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</main>
@endsection
