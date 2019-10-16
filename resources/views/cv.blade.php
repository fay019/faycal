
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fayçal Moussouni</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">--}}
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{url(asset('css/orbit-1.css'))}}">
</head>

<body>
<div class="float-right mt-3 d-flex sticky-top pr-2">
    <a class="btn btn-sm font-weight-bold text-light" href="{{asset('pdf/fay_cv.pdf')}}" style="width: 55px;
            height: 55px;
            padding: 10px 10px;
            border-radius: 27px;
            font-size: 10px;
            background-color: purple;
            ">PDF Drucken</a>
</div>

<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <img class="profile" src="{{asset('images/fay.png')}}" alt="Fay" />
            <h1 class="name">Fayçal Moussouni</h1>
            <h3 class="tagline">Back-End Developer</h3>
        </div><!--//profile-container-->
        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fas fa-envelope"></i><a href="mailto: yourname@email.com">fay019@gmail.com</a></li>
                <li class="phone"><i class="fas fa-phone"></i><a href="tel:+436605239522">+43 660-5239522</a></li>
                <li class="website"><i class="fas fa-globe"></i><a href="https://fayotech.com" target="_blank">fayotech.com</a></li>
                <li class="linkedin"><i class="fab fa-linkedin-in"></i><a href="https://www.linkedin.com/in/fayçal-moussouni/" target="_blank">fayçal-moussouni/</a></li>
                <li class="github"><i class="fab fa-github"></i><a href="https://github.com/fay019" target="_blank">github.com/fay019</a></li>
                <li class="twitter"><i class="fab fa-twitter"></i><a href="https://www.xing.com/profile/Faycal_Moussouni/cv" target="_blank">Faycal_Moussouni</a></li>
            </ul>
        </div><!--//contact-container-->
        <div class="education-container container-block">
            <h2 class="container-block-title">Ausbildung</h2>
            <div class="item">
                <h4 class="degree">Computertechnik, Schwerpunkt: Managementinformatik</h4>
                <h5 class="meta">Entreprise Nationale des Systèmes Informatiques</h5>
                <div class="time">1996 - 1999</div>
            </div><!--//item-->
            {{--<div class="item">
                <h4 class="degree">BSc in Applied Mathematics</h4>
                <h5 class="meta">Bristol University</h5>
                <div class="time">2007 - 2011</div>
            </div><!--//item-->--}}
        </div><!--//education-container-->
        <div class="languages-container container-block">
            <h2 class="container-block-title">Sprachen</h2>
            <ul class="list-unstyled interests-list">
                <li>Französisch <span class="lang-desc">C2</span></li>
                <li>Arabisch <span class="lang-desc">C2</span></li>
                <li>Deutsch <span class="lang-desc">B2 – C1</span></li>
                <li>Englisch <span class="lang-desc">B2</span></li>
            </ul>
        </div><!--//interests-->
        <div class="interests-container container-block">
            <h2 class="container-block-title">Interessen</h2>
            <ul class="list-unstyled interests-list">
                <li>Tauchen</li>
                <li>New Technology</li>
                <li>Kino</li>
                <li>Reisen</li>
                <li>Programmieren</li>
            </ul>
        </div><!--//interests-->
    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-user"></i></span>Berufsbild</h2>
            <div class="summary">
                <p>Das Programmieren war für mich seit meinem jüngsten Alter ein Hobby.</p>
                <p>Meine erste Programmiersprache war das berühmte Basic und es war auf einer IBM PS2.</p>
                <p>Nach einer Passage über C ++ (die ich lange nicht benutzt habe), begann ich mit der Entwicklung der Website über CMS (nuked-klan, wordpress) und begann mit HTML / CSS.</p>
                <p>In meiner Freizeit begann ich mich für PHP zu interessieren, das ich schnell annahm und studierte, bis ich das Laravel Framework erreichte.</p>
                <p>Und jetzt verbessere ich mich bei Javascript und lerne VueJS.</p>
            </div><!--//summary-->
        </section><!--//section-->

        <section class="section experiences-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-briefcase"></i></span>Berufserfahrung</h2>

            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Webentwickler</h3>
                        <div class="time">10/2006 – 10/2017</div>
                    </div><!--//upper-row-->
                    <div class="company">Guy Farron GmbH, 1010 Wien</div>
                </div><!--//meta-->
                <div class="details">
                    <li>Software-Entwicklung (PHP), Verwaltung Website/Fotodatenbank</li>
                    <li>Betreuung internationaler Kunden und Kundenakquise</li>
                    <li>Verhandlung mit Restauratoren, Transport von Antiquitäten (EU)</li>
                </div><!--//details-->
            </div><!--//item-->

            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Informatiker</h3>
                        <div class="time">10/2002 – 11/2003</div>
                    </div><!--//upper-row-->
                    <div class="company">Hi-Tech System, Algerien (Algier)</div>
                </div><!--//meta-->
                <div class="details">
                    <li>Instandhaltung und Programmierung von Geldschein-Zählgeräten, Anzeigetafeln für Wechselkurse, Videoüberwachungssystemen, Cash-Scan Geräten sowie der automatischen Kassen (Keyuser, CheckTronic, FolioTronic)</li>
                    <li>Implementierung von „Hi-Tech System“ Geräten bei der algerischen Post</li>
                    <li>Trainer für Soft- und Hardware Bedienung</li>
                    <li>Vertreter für „Hi-Tech System“ auf Messen</li>
                </div><!--//details-->
            </div><!--//item-->

            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">EDV-Techniker</h3>
                        <div class="time">03/2000 – 09/2001</div>
                    </div><!--//upper-row-->
                    <div class="company">Algerische Nationale Volksarmee, Algerien (Oran, S.B.A)</div>
                </div><!--//meta-->
                <div class="details">
                    <p> </p>
                </div><!--//details-->
            </div><!--//item--><div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">Manager</h3>
                        <div class="time">01/1999 – 03/2000</div>
                    </div><!--//upper-row-->
                    <div class="company">SNC: Cyber café Benali et Cie., Algerien (Algier)</div>
                </div><!--//meta-->
                <div class="details">
                    <p> </p>
                </div><!--//details-->
            </div><!--//item-->

        </section><!--//section-->

        <section class="section projects-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-archive"></i></span>Projekte</h2>
            <div class="mb-2">
                <h5 class="text-info">Website</h5>
            </div><!--//intro-->
            <div class="item">
                <span class="project-title"><a href="https://serial-escapers.com">Serial-escapers.com</a></span> -
                <span class="project-tagline">Dieser Blog wurde für einen Freund erstellt, der ein Fan von Escape-Room-Spielen ist. Die Website wurde mit Laravel erstellt</span>
            </div><!--//item-->
            <div class="item">
                <span class="project-title"><a href="https://guyfarron.com">guyfarron.com</a></span> -
                <span class="project-tagline">Diese Website wurde für die Firma Guy Farron erstellt, die Website ist in HTML und CSS programmiert</span>
            </div><!--//item-->
        </section><!--//section-->

        <section class="skills-section section">
            <h2 class="section-title"><span class="icon-holder"><i class="fas fa-rocket"></i></span>Fähigkeiten &amp; Fertigkeiten</h2>
            <div class="skillset">
                <div class="item">
                    <h3 class="level-title">PHP &amp; MySQL</h3>
                    <div class="progress level-bar">
                        <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 80%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">Javascript &amp; jQuery</h3>
                    <div class="progress level-bar">
                        <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 65%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">Laravel</h3>
                    <div class="progress level-bar">
                        <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 75%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">HTML5 &amp; CSS3</h3>
                    <div class="progress level-bar">
                        <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 70%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--//item-->

                <div class="item">
                    <h3 class="level-title">Photoshop</h3>
                    <div class="progress level-bar">
                        <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div><!--//item-->

            </div>
        </section><!--//skills-section-->

    </div><!--//main-body-->
</div>

<footer class="footer">
    <div class="text-center">
        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other commercial license options via our website: themes.3rdwavemedia.com */-->
        <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
    </div><!--//container-->
</footer><!--//footer-->

</body>
</html>

