@extends('layouts.app_template')

@section('title', 'Assalomu alaykum')

@section('content')
<main>

    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container justify-content-center">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-cap text-center pt-50">
                        <h2>Kitoblar</h2>
                  </div>
               </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="hero-cap text-center pt-50">
                        <h1><a href="{{ route('kitobgeodeziya') }}" target="_blank" style="text-decoration: none; color: #000A2D;"><i class="fa fa-book"></i><br>Geodeziya</a></h1>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="hero-cap text-center pt-50">
                        <h1><a href="#" style="text-decoration: none; color: #000A2D;"><i class="fa fa-book"></i><br>Geologiya</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection