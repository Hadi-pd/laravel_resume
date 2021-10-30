<!DOCTYPE html>
<html lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $resume ? $resume->name : 'Resume Creator' }}</title>
    <noscript>
        <style type="text/css">
            body {
                text-align: right;
                /* font-family: "Vazir", sans-serif; */
                font-family: "fa", sans-serif;
                color: #222;
            }

            .timeline {
                border-right: 2px solid #E6E9ED;
                padding: 1rem 0;
            }

            .timeline-card {
                position: relative;
                margin-right: 31px;
                border-right: 2px solid;
                margin-bottom: 2rem;
            }

            .timeline-card:last-child {
                margin-bottom: 1rem;
            }

            .timeline-card:before {
                content: '';
                display: inline-block;
                position: absolute;
                background-color: #fff;
                border-radius: 10px;
                width: 12px;
                height: 12px;
                top: 20px;
                right: -41px;
                border: 2px solid;
                z-index: 2;
            }

            .timeline-card:after {
                content: '';
                display: inline-block;
                position: absolute;
                background-color: currentColor;
                width: 29px;
                height: 2px;
                top: 25px;
                right: -29px;
                z-index: 1;
            }

            .timeline-card-primary {
                border-right-color: #4A89DC;
            }

            .timeline-card-primary:before {
                border-color: #4A89DC;
            }

            .timeline-card-primary:after {
                background-color: #4A89DC;
            }

            .timeline-card-success {
                border-right-color: #37BC9B;
            }

            .timeline-card-success:before {
                border-color: #37BC9B;
            }

            .timeline-card-success:after {
                background-color: #37BC9B;
            }

            html {
                scroll-behavior: smooth;
            }

            .cover {
                border-radius: 10px;
            }

            .cover-bg {
                /* text-align: center; */
                color: #fff;
                padding: 15px;
                background-color: #4A89DC;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='70' height='70' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.12'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                border-radius: 10px 10px 0 0;
            }

            .avatar img {
                border-radius: 10px;
            }

            .card-body {
                border: 1px solid #ddd;
                background:#fcfcfc;
                border-right-color: rgb(221, 221, 221);
                border-right-style: solid;
                border-right-width: 1px;
                border-radius: 5px 0px 0px 5px;
                padding: 15px;
                border-right: none;
            }

            .float-right {
                float: right;
            }

            .width50 {
                width: 105mm;
            }

            .white100 {
                width: 100%;
            }

            .white70 {
                width: 145mm;
            }

            .white30 {
                width: 60mm;
            }

        </style>
    </noscript>
</head>

<body id="top">
    <div class="page-content">
        <div class="container">
            <div class="cover shadow-lg bg-white">
                <div class="cover-bg p-3 p-lg-4 text-white">
                    <table
                        style=" width:100%; text-align:right; direction:rtl; margin-top:10px; margin-right:10px; color:#fff;">
                        <tr>
                            <td>
                                <img style="border: 10px solid #fff;" src="images/avatar.jpg" width="200"
                                    height="200" />
                            </td>
                            <td>
                                <h1 class="h1 mt-2">
                                    {{ $resume ? $resume->name : '' }}</h1>
                                <br>
                                <p style="font-size:1.2rem">{{ $resume ? $resume->work_subject : '' }}
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="about-section pt-4 px-3 px-lg-4 mt-1">
                <div class="row">
                    <div class="col-md-6 float-right width50" style="padding: 0px 10px 0px 10px;">
                        <h2 class="h3 mb-3"> درباره من</h2>
                        <p>
                            {{ $resume ? $resume->about : '' }}
                        </p>
                    </div>
                    <div class="col-md-5 offset-md-1 width30">
                        <table
                            style="width:100%; text-align:right; direction:rtl; margin-top:20px; margin-right:10px; padding:10px;">
                            <tr>
                                <td>سن</td>
                                <td>{{ $resume ? $resume->Age : ' ' }}</td>
                            </tr>
                            <tr>
                                <td>ایمیل</td>
                                <td>{{ $resume ? $resume->email : ' ' }}</td>
                            </tr>
                            <tr>
                                <td>تلفن</td>
                                <td>{{ $resume ? $resume->phone : ' ' }}</td>
                            </tr>
                            <tr>
                                <td>آدرس</td>
                                <td>{{ $resume ? $resume->address : '' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="d-print-none" />
            <div class="skills-section px-3 px-lg-4">
                <h2 class="h3 mb-3">مهارت های فنی </h2>
                <div class="row skills_row">

                    <table
                        style=" width:100%;">
                        <tr>
                            <td>
                                <div class="col-md-6">
                                    @foreach ($skills as $skill)
                                        @if (!$skill->is_other)
                                            <div>
                                                <span style="font-size:{{ $skill->percent }}px">{{ $skill->skill }}</span>

                                                {{ $skill->percent }}%

                                                {{-- <div>
                                                    <div style="width: {{ $skill->percent }}%; height:2px; background:#4a89dc;">
                                                    </div>
                                                </div> --}}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <div class="col-md-6">
                                    @foreach ($skills as $skill)
                                        @if ($skill->is_other)
                                        <div>
                                            <span style="font-size:{{ $skill->percent }}px">{{ $skill->skill }}</span>
                                            {{ $skill->percent }}%
                                        </div>
                                            {{-- <div class="mb-2 skills_mb-2"><span>{{ $skill->skill }}</span>
                                                <div class="progress my-1">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        data-aos="zoom-in-right" data-aos-delay="400"
                                                        data-aos-anchor=".skills-section"
                                                        style="width: {{ $skill->percent }}%" aria-valuenow="90"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div> --}}
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr class="d-print-none" />
            <div class="work-experience-section px-3 px-lg-4">
                <h2 class="h3 mb-4">تجربه های کاری</h2>
                <div class="timeline">
                    @foreach ($works as $work)
                        <div class="timeline-card timeline-card-primary card shadow-sm">
                            <div class="card-body">
                                <div class="h5 mb-1">{{ $work->work_name }}<span class="text-muted h6">در
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
                <h2 class="h3 mb-4">تحصیلات</h2>
                <div class="timeline">
                    @foreach ($educations as $education)
                        <div class="timeline-card timeline-card-success card shadow-sm">
                            <div class="card-body">
                                <div class="h5 mb-1">{{ $education->education_subject }} <span
                                        class="text-muted h6">از {{ $education->college }}</span></div>
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
            <h2 class="h3 mb-4">تماس با من</h2>

            <table
            style="width:100%; text-align:right; direction:rtl; margin-top:10px; margin-right:10px; padding:10px;">
            <tr>
                <td style="text-align:left;">
                    @foreach ($socialnetwork as $network )
                    <a style="text-decoration: none; color:#222" href="https://{{$network->link}}" title="{{$network->name}}" >
                        <div class="text-dark">{{$network->name}} : <span>{{$network->link}}</span>
                        </div>
                    </a>
                    @endforeach
                </td>

                <td style="text-align:center;">
                    <div style="color:#fff;">
                    {!! QrCode::size(150)->generate( url('/').'/#contact'); !!}
                    </div>
                </td>
            </tr>
        </table>

        </div>
    </div>
    </div>
</body>

</html>
