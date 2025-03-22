<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>LS-Shields</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/hero-bg.jpg" alt="">
      </div>
    </div>
    @include('landingpage.partials.header')


    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Deine Sicherheit  <br>
                      <span>
                        ist unsere Aufgabe
                      </span>
                    </h1>
                    <p>
                      Sicherheit bedeutet Vertrauen. Mit unserem engagierten Team sorgen wir dafür, dass Sie und Ihr Umfeld rundum geschützt sind. 
                      Ob Personenschutz, Objektsicherheit oder Event-Schutz – wir stehen für Qualität und Professionalität in jeder Situation.
                                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Sicherheit neu definiert <br>
                      <span>
                      Vertrauen, das zählt
                      </span>
                    </h1>
                    <p>
                      Sicherheit ist kein Zufall, sondern das Ergebnis von Erfahrung und Engagement. 
    Unser Team steht Ihnen zur Seite, um Gefahren zu minimieren und ein sicheres Umfeld zu schaffen. 
    Ihre Sicherheit ist unser Auftrag – heute und morgen.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Schutz in jeder Situation <br>
                      <span>
                      Ihr Schutz zählt
                      </span>
                    </h1>
                    <p>
                      In einer Welt voller Herausforderungen ist es wichtig, auf einen Partner zählen zu können. 
    Wir bieten maßgeschneiderte Sicherheitslösungen, die Ihre Bedürfnisse verstehen und erfüllen. 
    Verlassen Sie sich auf unsere Expertise, denn Exzellenz ist unser Standard.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/about-img.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Wer sind wir?
              </h2>
            </div>
            <p>
              Wir sind ein erfahrenes Team von Sicherheitsprofis, das sich darauf spezialisiert hat, maßgeschneiderte Lösungen für Ihre Sicherheit zu bieten. 
      Mit Leidenschaft und Engagement sorgen wir dafür, dass Sie, Ihre Mitarbeiter und Ihre Werte optimal geschützt sind – jederzeit und überall.
            </p>
            <div class="btn-box">
            <a href="{{ route('about') }}">
                Mehr erfahren
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Unsere Services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <img src="https://ls-shields.eu/storage/images/objektschutz.png" alt="Objektschutz" class="img-fluid">

            </div>
            <div class="detail-box">
              <h6>
                Objektschutz
              </h6>
              <p>
                Mit unserem Objektschutz sorgen wir für die Sicherheit Ihrer Gebäude, Anlagen und Werte. 
    Unsere qualifizierten Sicherheitskräfte sind rund um die Uhr einsatzbereit und garantieren Schutz vor Diebstahl, Vandalismus und unbefugtem Zutritt. 
    Verlassen Sie sich auf einen Partner, der Ihre Sicherheit zur Priorität macht.

              <!--</p>
              <a href="">
                Read More
              </a>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <img src="https://ls-shields.eu/storage/images/vip_wertgegenstand_transport.png" alt="VIP und Wertgegenstand Transport" class="img-fluid">

            </div>
            <div class="detail-box">
              <h6>
                VIP und Wertgegenstand Transport
              </h6>
              <p>
                Unser VIP- und Wertgegenstand-Transport bietet Ihnen höchste Sicherheit und Diskretion. 
                Mit speziell geschultem Personal und modernster Technik sorgen wir dafür, dass Ihre wertvollen Güter und wichtigen Personen sicher ihr Ziel erreichen. 
                Vertrauen Sie auf einen Service, der keine Kompromisse kennt.
              </p>
              <!--</p>
              <a href="">
                Read More
              </a>-->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
            <img src="https://ls-shields.eu/storage/images/security-guard.png" alt="Security Guard" class="img-fluid">
            </div>
            <div class="detail-box">
              <h6>
                Personenschutz
              </h6>
              <p>
                Ihr Schutz ist unsere Priorität. Unsere Experten begleiten Sie diskret und professionell, ob bei Geschäftsreisen, öffentlichen Auftritten oder im privaten Umfeld. Mit maßgeschneiderten Schutzkonzepten und modernster Technik sorgen wir rund um die Uhr für Ihre Sicherheit.
                  <br>

              </br>
               
              </p>
              <!--</p>
              <a href="">
                Read More
              </a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- client section 

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Was sagen unsere Kunden?
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Minim Veniam
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Minim Veniam
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Minim Veniam
                </h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

   end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="images/contact-bg.jpg" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Trete mit uns in Kontakt
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <!-- Formular mit ID für das AJAX-Skript -->
            <form id="contactForm">
    @csrf
    <div class="contact_form-container">
        <div>
            <h5>Ihr Name</h5>
            <div>
                <input type="text" name="vorname_nachname" placeholder="Vor- & Nachname" required />
            </div>
            <h5>Ihre Telefonnummer</h5>
            <div>
                <input type="text" name="telefonnummer" placeholder="Telefonnummer" value="555- " required/>
            </div>
            <h5>Ihre Anfrage</h5>
            <div>
                <textarea name="anfrage" placeholder="Bitte teilen Sie uns Ihre Anfrage so kurz wie möglich mit. Wir melden uns dann unter der angegebenen Telefonnummer." class="message_input" rows="4" style="width: 100%;"></textarea>
            </div>
            <div class="btn-box">
                <button type="submit">Senden</button>
            </div>
        </div>
    </div>
</form>
            <!-- Bereich für Rückmeldung -->
            <div id="responseMessage" style="margin-top: 20px; text-align: center;"></div>
            </div>
        </div>
      </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Check cooldown
    const lastSubmission = localStorage.getItem('lastFormSubmission');
    const now = new Date().getTime();
    const cooldownTime = 5 * 60 * 1000; // 5 minutes in milliseconds

    if (lastSubmission && (now - parseInt(lastSubmission)) < cooldownTime) {
        const remainingTime = Math.ceil((cooldownTime - (now - parseInt(lastSubmission))) / 1000 / 60);
        document.getElementById('responseMessage').innerHTML = `
            <div class="alert alert-warning">
                Bitte warten Sie noch ${remainingTime} Minuten, bevor Sie eine neue Anfrage senden.
            </div>`;
        return;
    }
    
    const form = this;
    const formData = new FormData(form);

    fetch('{{ route("contact.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Set cooldown timestamp
        localStorage.setItem('lastFormSubmission', now.toString());
        
        document.getElementById('responseMessage').innerHTML = `
            <div class="alert alert-success">
                ${data.message}
            </div>`;
        form.reset();
    })
    .catch(error => {
        document.getElementById('responseMessage').innerHTML = `
            <div class="alert alert-danger">
                Ein Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.
            </div>`;
    });
});
</script>


  <!-- end contact section -->

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Unsere Mitarbeiter</h2>
            <p>Unsere Mitarbeiter sind erfahrene Fachkräfte, die für höchste Professionalität, Freundlichkeit und Kompetenz stehen.</p>
        </div>

        <div class="row justify-content-center">
            @foreach($employees as $employee)
                <div class="col-md-4 col-sm-6 mx-auto">
                    <div class="team-member-box">
                        <div class="team-img-box">
                            <img src="https://intern.ls-shields.eu/profile-images/{{ $employee->profile_image }}" alt="" class="img-fluid">
                        </div>
                        <div class="team-detail-box">
                            <h5>{{ $employee->name }}</h5>
                            <h6>{{ $employee->role_name }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="btn-box">
            <a href="{{ route('teams') }}">
                Mehr erfahren
            </a>
        </div>
    </div>
</section>

<style>
    .team_section .team-img-box img {
    max-width: 100%;
    height: 400px;
    object-fit: cover;
}

.team_section .team-member-box {
    padding: 15px;
    margin: 10px;
    background-color: #f0f0f0;
    border-radius: 10px;
    display: inline-block;
}

.team_section .team-detail-box {
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
}

.team_section .team-detail-box h5,
.team_section .team-detail-box h6 {
    margin: 5px;
}
</style>

@include('landingpage.partials.footer')

  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>