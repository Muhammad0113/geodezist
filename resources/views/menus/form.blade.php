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
							<label for="menus" class="form-label">Menus</label>
							<select class="form-control" name="menu_id">
									<option value="0">---</option>
								@foreach($menu_submenu as $sub_menu)
									<option value="{{$sub_menu->id}}">{{ $sub_menu->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="single-form">
							<label for="is_submenu" class="form-label">is submenu</label>
							<input type="checkbox" class="form-control" id="is_submenu" placeholder="Izoh kiriting..." name="is_submenu" value="{{ old('is_submenu') ?? $menu->is_submenu }}">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="single-form">
							<label for="description" class="form-label">Izoh</label>
							<input type="text" class="form-control" id="description" placeholder="Izoh kiriting..." name="description" value="{{ old('description') ?? $menu->description }}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


