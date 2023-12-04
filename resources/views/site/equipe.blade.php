@extends('layout.layout');

@section('title', 'Equipe - Academia Viva Bem');

@section('conteudo')

<style>

.service-bg2-area {
    margin-top: -120px;
    padding-top: 0px;
}

</style>

    <div class="service-bg2-area background-image" style="background-image: url(&quot;assets/img/bg/servico-amarelo.png&quot;);">

        <section class="cta-area space background-image" style="background-image: url({{ asset('assets/banner/bannerEquipe2.png')}}); height:71%;">

            <div style="margin-top: 8%; margin-left:30%;" class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="cta-wrap text-center text-lg-start">
                            <div class="title-area">
                                <span style="display: none" class="sub-title">MARQUE UMA CONSULTA</span>
                                <h2 class="sec-title text-white">Entre agora para o nosso time. Junte-se a nós</h2>
                                    <img style="width: 50%;" src="{{ asset('assets/img/logo-white.png') }}" alt="">
                            </div>
                            <div style="display: none;" class="btn-wrap mt-40">
                                <a href="about.html" class="btn style2">Make Appointment</a>
                                <div class="about-info-wrap style3">
                                    <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                    <div class="details">
                                        <p class="about-info-title text-white">Need Help?</p>
                                        <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="team-area-1 space">
            <div class="container">
                <div style="text-align: center;margin-top:2%; margin-bottom:5%;" class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title">Membros de Equipe</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index.html">HOME</a></li>
                                    <li class="active">EQUIPE</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor1.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTOR|Musculação</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor2.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTOR|Musculação</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor5.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTORA|Gap</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor3.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTOR|Nutrição</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor4.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTOR|Yoga</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor6.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Sarah Hammer</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTORA|Mobilidade</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor7.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Victor Ben</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTOR|Musculação</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card style3">
                            <div class="team-card_img">
                                <img src="{{ asset('assets/instrutores/instrutor8.png') }}" alt="img">
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Juan Baptista</a>
                                </h4>
                                <span class="team-card_desig">INSTRUTOR|Gap</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
