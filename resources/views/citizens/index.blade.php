@extends('layouts.app_template')
@section('content')
<main>
    <div class="hero-area2 slider-area pb-3 apply-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                	<h2 class="text-center">Anketalar ro‘yhati</h2><br>
         		</div>

         		<table class="table table-bordered">
         			<thead>
         				<tr>
         					<th>T/R</th>
         					<th>F.I.O</th>
                            <th>Viloyat</th>
         					<th>Tuman</th>
         					<th>Passport</th>
         					<th>Tug‘ sana</th>
         					<th>Jinsi</th>
                            <th>Telefon</th>
                            <th>Mutaxassislik</th>
                            <th>Staj</th>
         					<th>Amallar</th>
         				</tr>
         			</thead>
                    <tbody>
                    @foreach($citizens as $citizen)
                        <tr>
                            <td>{{ ($citizens->currentpage()-1)*$citizens->perpage() + $loop->index+1 }}</td>
                            <td>{{ $citizen->fullname }}</td>
                            <td>{{ $citizen::regionName($citizen->region_id)->name_uz }}</td>
                            <td>Yunusobod tumani</td>
                            <td>{{ $citizen->passport }}</td>
                            <td>{{ $citizen->birthdate }}</td>
                            <td>
                                @if($citizen->gender == 1)
                                    Erkak
                                @elseif($citizen->gender == 0)
                                    Ayol
                                @endif
                            </td>
                            <td>{{ $citizen->phone_number }}</td>
                            <td>{{ $citizen::specialistName($citizen->specialist)->name_uz }}</td>
                            <td>{{ $citizen->skill }} yil</td>
                            <td>
                                <i class="fa fa-trash"></i>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
         		</table>

			</div>
            {{ $citizens->links() }}
		</div>
	</div>
</main>

@endsection
