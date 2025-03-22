@extends('landingpage.layouts.app')

@section('content')
<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Unsere Mitarbeiter</h2>
            <p>Unsere Mitarbeiter sind erfahrene Fachkräfte, die für höchste Professionalität, Freundlichkeit und Kompetenz stehen.</p>
        </div>

        @foreach($employees as $level => $levelEmployees)
            <div class="heading_container heading_center">
                <h2>{{ $level }}</h2>
            </div>
            <div class="row justify-content-center">
                @if($levelEmployees->count() == 1)
                    <div class="col-md-4 text-center">
                        <div class="box">
                            <div class="img-box">
                            <img src="https://intern.ls-shields.eu/profile-images/{{ $levelEmployees[0]->profile_image }}" alt="" class="img-fluid small-img">
                            </div>
                            <div class="detail-box">
                                <h5>{{ $levelEmployees[0]->name }}</h5>
                                <h6>{{ $levelEmployees[0]->role_name }}</h6>
                                @if($levelEmployees[0]->description)
                                    <p class="mt-2">{{ $levelEmployees[0]->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @elseif($levelEmployees->count() == 2)
                    <div class="col-md-4 text-center">
                        <div class="box">
                            <div class="img-box">
                            <img src="https://intern.ls-shields.eu/profile-images/{{ $levelEmployees[0]->profile_image }}" alt="" class="img-fluid medium-img">
                            </div>
                            <div class="detail-box">
                                <h5>{{ $levelEmployees[0]->name }}</h5>
                                <h6>{{ $levelEmployees[0]->role_name }}</h6>
                                @if($levelEmployees[0]->description)
                                    <p class="mt-2">{{ $levelEmployees[0]->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <div class="box">
                            <div class="img-box">
                            <img src="https://intern.ls-shields.eu/profile-images/{{ $levelEmployees[1]->profile_image }}" alt="" class="img-fluid medium-img">
                            </div>
                            <div class="detail-box">
                                <h5>{{ $levelEmployees[1]->name }}</h5>
                                <h6>{{ $levelEmployees[1]->role_name }}</h6>
                                @if($levelEmployees[0]->description)
                                    <p class="mt-2">{{ $levelEmployees[1]->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @else
                    @foreach($levelEmployees as $employee)
                        <div class="col-md-4 text-center">
                            <div class="box">
                                <div class="img-box">
                                <img src="https://intern.ls-shields.eu/profile-images/{{ $employee->profile_image }}" alt="" class="img-fluid">
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $employee->name }}</h5>
                                    <h6>{{ $employee->role_name }}</h6>
                                    @if($levelEmployees->description)
                                    <p class="mt-2">{{ $levelEmployees[1]->description }}</p>
                                @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @endforeach
    </div>
</section>

<style>
    .small-img {
        max-width: 50%;
        height: auto;
        object-fit: cover;
    }

    .medium-img {
        max-width: 70%;
        height: auto;
        object-fit: cover;
    }

    .img-box img {
        max-width: 100%;
        height: 400px;
        object-fit: cover;
    }

    .text-center {
        text-align: center;
    }

    .row.justify-content-center {
        display: flex;
        justify-content: center;
    }

    .box {
        padding: 15px;
        margin: 10px;
        background-color: #f0f0f0;
        border-radius: 10px;
        display: inline-block;
    }

    .heading_container {
        margin-bottom: 30px;
    }

    .detail-box {
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }

    .detail-box h5, .detail-box h6 {
        margin: 5px;
    }
    .detail-box p {
    font-size: 0.9rem;
    margin: 8px 0 0;
    color: #e0e0e0;
}
</style>
@endsection