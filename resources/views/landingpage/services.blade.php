<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <title>LS-Shields - Services</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body class="sub_page">
    <div class="hero_area">
        <div class="hero_bg_box">
            <div class="img-box">
                <img src="{{ asset('images/hero-bg.jpg') }}" alt="">
            </div>
        </div>

        @include('landingpage.partials.header')
    </div>

    <!-- service section -->
    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Unsere Services</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <!-- SVG for Objektschutz -->
                            <img src="{{ asset('images/security-shield.png') }}" alt="Security Shield" style="width: 250px; height: 250px; object-fit: contain;">                        </div>
                        <div class="detail-box">
                            <h6>Objektschutz</h6>
                            <p>Mit unserem Objektschutz sorgen wir für die Sicherheit Ihrer Gebäude, Anlagen und Werte. 
                               Unsere qualifizierten Sicherheitskräfte sind rund um die Uhr einsatzbereit und garantieren Schutz vor Diebstahl, Vandalismus und unbefugtem Zutritt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <!-- SVG for VIP Transport -->
                            <img src="{{ asset('images/vip-transport.jpg') }}" alt="Security Shield" style="width: 250px; height: 250px; object-fit: contain;">
                        </div>
                        <div class="detail-box">
                            <h6>VIP und Wertgegenstand Transport</h6>
                            <p>Unser VIP- und Wertgegenstand-Transport bietet Ihnen höchste Sicherheit und Diskretion. 
                               Mit speziell geschultem Personal und modernster Technik sorgen wir dafür, dass Ihre wertvollen Güter und wichtigen Personen sicher ihr Ziel erreichen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <!-- SVG for Personenschutz -->
                            <img src="{{ asset('images/vip-transport.jpg') }}" alt="Security Shield" style="width: 250px; height: 250px; object-fit: contain;">

                        </div>
                        <div class="detail-box">
                            <h6>Personenschutz</h6>
                            <p>Ihr Schutz ist unsere Priorität. Unsere Experten begleiten Sie diskret und professionell, 
                               ob bei Geschäftsreisen, öffentlichen Auftritten oder im privaten Umfeld.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service section -->

    @include('landingpage.partials.footer')

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>