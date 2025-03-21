<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <title>LS-Shields - Über uns</title>

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

    <section class="about_section layout_padding">
        <div class="container">
            <!-- Wer wir sind -->
            <div class="row align-items-center">
                <div class="col-md-6 px-0 order-md-2">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="{{ asset('images/about-img.jpg') }}" alt="Bild 1" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0 order-md-1">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Wer wir sind</h2>
                        </div>
                        <p>LS-Shields ist ein Sicherheitsunternehmen, das für Vertrauen, Zuverlässigkeit und Professionalität steht. Mit einem Team aus erfahrenen Experten bieten wir umfassende Schutzlösungen für Unternehmen, Privatpersonen und Veranstaltungen. Unser Ziel ist es, ein sicheres Umfeld zu schaffen, in dem Sie sich auf das Wesentliche konzentrieren können. Sicherheit ist für uns nicht nur ein Beruf, sondern eine Verantwortung.</p>
                    </div>
                </div>
            </div>

            <div class="my-5"></div>

            <!-- Mission -->
            <div class="row align-items-center">
                <div class="col-md-6 px-0 order-md-1">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="{{ asset('images/about-img.jpg') }}" alt="Bild 2" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0 order-md-2">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Was ist unsere Mission?</h2>
                        </div>
                        <p>Unsere Mission ist es, ein Höchstmaß an Sicherheit und Schutz zu gewährleisten. Dabei setzen wir auf modernste Technologien, kontinuierliche Weiterbildung unseres Teams und maßgeschneiderte Lösungen, die perfekt auf Ihre Bedürfnisse abgestimmt sind. Wir glauben daran, dass wahre Sicherheit nicht nur technische Maßnahmen erfordert, sondern auch ein tiefes Verständnis für Menschen und ihre Anforderungen.</p>
                    </div>
                </div>
            </div>

            <div class="my-5"></div>

            <!-- Vertrauen -->
            <div class="row align-items-center">
                <div class="col-md-6 px-0 order-md-2">
                    <div class="img_container">
                        <div class="img-box">
                            <img src="{{ asset('images/about-img.jpg') }}" alt="Bild 3" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0 order-md-1">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Wieso sollten Sie uns vertrauen?</h2>
                        </div>
                        <p>Sicherheit erfordert Vertrauen, und genau dieses Vertrauen haben wir uns über Jahre hinweg aufgebaut. Unsere langjährige Erfahrung, unser Engagement für höchste Standards und unsere individuelle Betreuung machen uns zu Ihrem idealen Partner. Mit LS-Shields haben Sie einen zuverlässigen Begleiter, der stets Ihre Interessen wahrt und Ihre Sicherheit in den Mittelpunkt stellt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('landingpage.partials.footer')
    
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>