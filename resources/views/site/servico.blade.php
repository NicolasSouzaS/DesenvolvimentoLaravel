@extends('layout.layout');

@section('title', 'Serviços - Academia Viva Bem');

@section('conteudo')

<style>
    .service-bg2-area {
    margin-top: -120px;
    padding-top: 120px;
}
</style>

<div class="service-bg2-area" data-bg-src="assets/img/bg/servico-amarelo.png">

     <!--==============================
    Breadcumb
    ============================== -->

        <!-- bg animated image/ -->
        <div style="text-align: center;margin-top:10%;" class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Nossos Serviços</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">SERVICE</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


     <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-area-2 space overflow-hidden">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Aula de ginástica</a></h4>
                            <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e curtos periodos de recuperação...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>CONSULTE MAIS INFORMAÇÃO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Levantamento de força</a></h4>
                            <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e curtos periodos de recuperação...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> CONSULTE MAIS INFORMAÇÃO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Musculação</a></h4>
                            <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e curtos periodos de recuperação...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>CONSULTE MAIS INFORMAÇÃO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-4.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Aula de boxe</a></h4>
                            <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e curtos periodos de recuperação...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>CONSULTE MAIS INFORMAÇÃO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-5.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Aula de ioga e fitness</a></h4>
                            <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e curtos periodos de recuperação...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>CONSULTE MAIS INFORMAÇÃO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-6.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Aula de Meditação</a></h4>
                            <p class="service-card_text">Treinos de alta intensidade que alternam entre rajadas intensas de exercício e curtos periodos de recuperação...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>CONSULTE MAIS INFORMAÇÃO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
