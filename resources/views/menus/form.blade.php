<div class="apply-area pt-150 pb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="apply-wrapper">
                    <!-- Form -->

					<div class="col-lg-12">
						<div class="single-form">
							<label for="name" class="form-label">Nomi</label>
							<input type="text" class="form-control" id="name" placeholder="Nomini kiriting..." name="name" value="{{ old('name') ?? $menu->name }}">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="single-form">
							<label for="address" class="form-label">Izoh</label>
							<input type="text" class="form-control" id="description" placeholder="Izoh kiriting..." name="description" value="{{ old('description') ?? $menu->description }}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


