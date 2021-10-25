<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $resume ? $resume->name : 'Resume Creator' }}</title>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }

        </style>
    </noscript>
</head>

<body id="top">
    <header class="d-print-none">
        <div class="container text-center text-lg-left">
            <div class="py-3 clearfix">
                <h1 class="site-title mb-0">{{ $resume ? $resume->name : '' }}</h1>
                <div class="site-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip"
                                    title="Twitter"><i class="fab fa-twitter"></i><span
                                        class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://www.facebook.com/templateflip" title="Facebook"><i
                                        class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://www.instagram.com/templateflip" title="Instagram"><i
                                        class="fab fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-dribbble"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-telegram"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content">
        <div class="container">
            <div class="cover shadow-lg bg-white">
                <div class="cover-bg p-3 p-lg-4 text-white">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="images/avatar.jpg"
                                    width="200" height="200" /></div>
                        </div>
                        <div class="col-lg-8 col-md-7 text-center text-md-start">
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">
                                {{ $resume ? $resume->name : '' }}</h2>
                            <p data-aos="fade-left" data-aos-delay="100">{{ $resume ? $resume->work_subject : '' }}
                            </p>
                            <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><a
                                    class="btn btn-light text-dark shadow-sm mt-1 me-1" href="right-resume.pdf"
                                    target="_blank">Download CV</a><a class="btn btn-success shadow-sm mt-1"
                                    href="#contact">Hire Me</a></div>
                        </div>
                    </div>
                </div>
                <div class="about-section pt-4 px-3 px-lg-4 mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="h3 mb-3">About Me</h2>
                            <p>
                                {{ $resume ? $resume->about : '' }}
                            </p>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <div class="pb-1">Age</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">{{ $resume ? $resume->Age : ' ' }}</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Email</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">{{ $resume ? $resume->email : ' ' }}</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Phone</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">{{ $resume ? $resume->phone : ' ' }}</div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Address</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">{{ $resume ? $resume->address : '' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="d-print-none" />
                <div class="skills-section px-3 px-lg-4">
                    <h2 class="h3 mb-3">Professional Skills</h2>
                    <div class="row">
                        <div class="col-md-6">

                            @foreach ($skills as $skill)
                                @if (!$skill->is_other)
                                    <div class="mb-2">
                                        <span>{{ $skill->skill }}</span>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="100"
                                                data-aos-anchor=".skills-section"
                                                style="width: {{ $skill->percent }}%" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach ($skills as $skill)
                                @if ($skill->is_other)
                                    <div class="mb-2"><span>{{ $skill->skill }}</span>
                                        <div class="progress my-1">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                data-aos="zoom-in-right" data-aos-delay="400"
                                                data-aos-anchor=".skills-section"
                                                style="width: {{ $skill->percent }}%" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <hr class="d-print-none" />
                <div class="work-experience-section px-3 px-lg-4">
                    <h2 class="h3 mb-4">Work Experience</h2>
                    <div class="timeline">
                        @foreach ($works as $work)
                            <div class="timeline-card timeline-card-primary card shadow-sm">
                                <div class="card-body">
                                    <div class="h5 mb-1">{{ $work->work_name }}<span class="text-muted h6">at
                                            {{ $work->company_name }}</span></div>
                                    <div class="text-muted text-small mb-2">{{ $work->date }} </div>
                                    <div>
                                        {{ $work->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <hr class="d-print-none" />
                <div class="page-break"></div>
                <div class="education-section px-3 px-lg-4 pb-4">
                    <h2 class="h3 mb-4">Education</h2>
                    <div class="timeline">
                        @foreach ($educations as $education)
                            <div class="timeline-card timeline-card-success card shadow-sm">
                                <div class="card-body">
                                    <div class="h5 mb-1">{{ $education->education_subject }} <span
                                            class="text-muted h6">from {{ $education->college }}</span></div>
                                    <div class="text-muted text-small mb-2">{{ $education->date }}</div>
                                    <div>
                                        {{ $education->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <hr class="d-print-none" />
                <div class="contant-section px-3 px-lg-4 pb-4" id="contact">
                    <h2 class="h3 text mb-3">Contact</h2>
                    <div class="row">
                        <div class="col-md-7 d-print-none">
                            <div class="my-2">
                                <form action="https://formspree.io/your@email.com" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control" type="text" id="name" name="name"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="email" id="email" name="_replyto"
                                                placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <div class="form-group my-2">
                                        <textarea class="form-control" style="resize: none;" id="message"
                                            name="message" rows="4" placeholder="Your Message" required></textarea>
                                    </div>
                                    <button class="btn btn-primary mt-2" type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mt-2">
                                <h3 class="h6">Address</h3>
                                <div class="pb-2 text-secondary">{{ $resume ? $resume->address : '' }}</div>
                                <h3 class="h6">Phone</h3>
                                <div class="pb-2 text-secondary">{{ $resume ? $resume->phone : '' }}</div>
                                <h3 class="h6">Email</h3>
                                <div class="pb-2 text-secondary">{{ $resume ? $resume->email : '' }}</div>
                            </div>
                        </div>
                        <div class="col d-none d-print-block">
                            <div class="mt-2">
                                <div>
                                    <div class="mb-2">
                                        <div class="text-dark"><i
                                                class="fab fa-twitter mr-1"></i><span>https://twitter.com/templateflip</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="text-dark"><i
                                                class="fab fa-facebook mr-1"></i><span>https://www.facebook.com/templateflip</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="text-dark"><i
                                                class="fab fa-instagram mr-1"></i><span>https://www.instagram.com/templateflip</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="text-dark"><i
                                                class="fab fa-github mr-1"></i><span>https://github.com/templateflip</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
        <div class="container">
            <div class="my-3">
                <div class="h4">{{ $resume ? $resume->name : '' }}</div>
                <div class="footer-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link"
                                    href="https://twitter.com/templateflip" title="Twitter"><i
                                        class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://www.facebook.com/templateflip" title="Facebook"><i
                                        class="fab fa-facebook"></i><span
                                        class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://www.instagram.com/templateflip" title="Instagram"><i
                                        class="fab fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="https://github.com/templateflip" title="Github"><i
                                        class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="text-small">
                <div class="mb-1">&copy; Right Resume. All rights reserved.</div>
                <div>Design - <a href="https://ebtekareno.ir/" target="_blank">Ebtekareno</a></div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="js/aos.js?ver=1.2.0"></script>
    <script src="js/main.js?ver=1.2.0"></script>
</body>

</html>
