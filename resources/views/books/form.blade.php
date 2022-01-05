<div class="apply-area pt-150 pb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="apply-wrapper">
                    <!-- Form -->
					<div class="col-lg-12">
						<div class="single-form">
							<label for="name" class="form-label">Nomi</label>
							<input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $books->name }}">
						</div>
					</div>
					<div class="col-md-5">
                            <label for="bookurl">{{ __('Kitob yuklash') }}</label>
                            <input id="bookurl" type="file" name="bookurl" value="{{ old('bookurl') }}">
                    </div>
					<div class="col-lg-12">
						<div class="single-form">
							<label for="booktype" class="form-label">Turi</label>
							<input type="text" class="form-control" id="booktype" name="booktype" value="{{ old('booktype') ?? $books->booktype }}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


