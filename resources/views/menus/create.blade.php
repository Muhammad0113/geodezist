@extends('layouts.app_template')

@section('title', 'Menu qo`shish')

@section('content')

<div class="hero-area2 slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Menu qoshish</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="row">
	<div class="col-md-6">
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		<form method="post" action="{{ route('menus.store') }}">
		  @csrf
		  @include('menus.form')
		 
		<div class="apply-area pb-200">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="apply-wrapper">	
							<button type="submit" class="btn apply-btn">Saqlash</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>	
</div>

@endsection
