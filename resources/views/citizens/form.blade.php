<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <div class="single-form">
            <label for="seria">{{ __('Passport seria') }}</label>
            <input id="passport" type="text" class="seria form-control" name="seria" value="{{ old('passport') ?? $citizen->passport }}" required>
        </div>
    </div>
    <div class="col-3">
        <div class="single-form">
            <label for="number">{{ __('raqam') }}</label>
            <input id="passport" type="text" class="number form-control" name="number" value="{{ old('passport') ?? $citizen->passport }}" required>
        </div>
    </div>
    <div class="col-5">
        <div class="single-form">
            <label for="fullname">{{ __('F.I.O') }}</label>
            <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') ?? $citizen->fullname }}" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="single-form">
            <label for="phone_number">{{ __('Telefon raqam') }}</label>
            <input id="phone_number" type="text" class="phone form-control" name="phone_number" value="{{ old('phone_number') ?? $citizen->phone_number }}" required>
        </div>
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
    </div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="single-form">
        <label>{{ __('Viloyat') }}</label>
            <div class="select-option">
                <select size="5" name="region_id" id="region_id" class="form-control">
                    <option value="0">Viloyatni tanlang...</option>
                    <optgroup>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}" data-id="{{ $region->id }}" >{{ $region->name_uz }}</option>
                        @endforeach
                    </optgroup>
                </select>
            </div>
       </div>
    </div>
    <div class="col-md-5">
        <div class="single-form">
        <label>{{ __('Tuman') }}</label>
            <div class="select-option">
                <select name="city_id" id="city_id" class="form-control">
                    <option value="0">Tumanni tanlang...</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Qaraqalpogiston respublikasiss</option>
                </select>
            </div>
       </div>
    </div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <div class="single-form">
            <label for="birthdate">{{ __('Tug‘ilgan kun') }}</label>
            <input id="birthdate" type="text" class="birth_date form-control" name="birthdate" value="{{ old('birthdate') ?? $citizen->birthdate }}" required>
        </div>
    </div>
    <div class="col-md-5">
        <div class="single-form">
        <label>{{ __('Mutaxassislik') }}</label>
            <div class="select-option">
                <select name="specialist" id="specialist" class="form-control">
                    <option value="0">Mutaxassislikni tanlang...</option>
                    <optgroup>
                        @foreach($specialists as $specialist)
                            <option value="{{ $specialist->id }}" data-id="{{ $specialist->id }}" >{{ $specialist->name_uz }}</option>
                        @endforeach
                    </optgroup>
                </select>
            </div>
       </div>
    </div>
    <div class="col-md-2">
        <div class="single-form">
            <label for="skill">{{ __('Mehnat staji') }}</label>
            <input id="skill" type="number" max="30" min="0" name="skill" value="{{ old('skill') ?? $citizen->skill }}" class="form-control" required>
        </div>
    </div>
</div>

<!-- <style type="text/css">
    .wrapper{
        height: 10px;
    }
</style> -->



