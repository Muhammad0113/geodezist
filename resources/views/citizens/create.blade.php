@extends('layouts.app_template')
@section('content')
<main>
    <div class="hero-area2 slider-area pb-3 apply-area">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-12">
                    	<h2 class="hero-cap text-center pt-20">Anketa to‘ldirish</h2><br>
             		</div>

                    <div class="col-md-9 apply-wrapper">
						@if ($errors->any())
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
						@endif
						<form method="post" action="{{ route('citizens.store') }}">
						  @csrf
						  @include('citizens.form')
						 
						  <div class="row">
						  	<div class="col-md-1"></div>
						  	<div class="col-md-6">
						  		<button type="submit" class="btn btn-primary">Saqlash</button>
						  	</div>
						  </div>
						</form>
					</div>
			</div>
		</div>
	</div>
</main>


@endsection
