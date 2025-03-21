@extends('landingpage.layouts.app')

@section('content')
<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Unsere Partner</h2>
            <p>Gemeinsam mit unseren starken Partnern schaffen wir Sicherheit und Vertrauen. 
               Jede Kooperation basiert auf gegenseitigem Respekt, Professionalität und dem gemeinsamen Ziel, innovative und verlässliche Sicherheitslösungen anzubieten.</p>
        </div>
    </div>
</section>

<section class="service_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="box text-center">
                    <h4>Aktuell in Bearbeitung</h4>
                    <p class="mt-4">
                        Wir sind dabei, unser Partnernetzwerk aufzubauen und zu erweitern. 
                        Wenn Sie an einer Partnerschaft interessiert sind, kontaktieren Sie uns unter:
                    </p>
                    <div class="contact-info mt-4">
                        <h5>Kontakt:</h5>
                        <p class="mb-0">Telefon: 6004</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.box {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    margin-top: 20px;
}

.contact-info {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    display: inline-block;
}
</style>
@endsection