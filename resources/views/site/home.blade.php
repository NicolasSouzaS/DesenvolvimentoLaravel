@extends('layout.layout');

@section('title', 'Home - Academia Viva Bem')

@section('conteudo')
<div class="service-bg2-area" data-bg-src="assets/img/bg/service-bg2.png">
<div class="bmi-area-1 space">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="title-area mb-30">
                    <span class="sub-title">TESTE SEU IMC</span>
                    <h2 class="sec-title text-white fw-semibold">ÍNDICE DE MASSA CORPORAL</h2>
                    <p class="sec-text">O IMC é uma ferramenta amplamente utilizada para avaliar o peso corporal em relação à altura. Pode fornecer uma indicação geral se um indivíduo está dentro de uma faixa de peso saudável.
                    </p>
                </div>
                <div class="bmi-table mb-lg-0 mb-40">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">IMC</th>
                                <th scope="col">ESTADO DE PESO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Abaixo de 18,5</th>
                                <td>Status de peso</td>
                            </tr>
                            <tr>
                                <th scope="row">18.5 - 24.9</th>
                                <td>Saudável</td>
                            </tr>
                            <tr>
                                <th scope="row">25.0 - 29.9</th>
                                <td>Excesso de peso</td>
                            </tr>
                            <tr>
                                <th scope="row">30,0 - Acima</th>
                                <td>Obeso</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 align-self-end">
                <div class="bmi-calculator-form">
                    <h4 class="form-title">RESERVE SEU ASSENTO:</h4>
                    <form class="bmi-form" id="form" name="bmiCalc">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input for="weight" class="form-control style-border" placeholder="Peso / KG" type="text" name="weight">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input for="height" class="form-control style-border" placeholder="Altura / CM" type="text" name="height">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" class="form-control style-border" name="age" id="age" placeholder="Idade">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" name="sex" id="sex" placeholder="Sexo">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC" type="text" name="bmi">
                        </div>
                        <div class="form-group">
                            <input for="bmi_message" placeholder="Objetivo" class="form-control style-border" type="text" name="meaning">
                        </div>
                        <div class="btn style3">
                            <input type="button" value="Calcular o IMC" onClick="calculateBMI()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Service Area 01
==============================-->
<div class="service-area-1 space-bottom overflow-hidden">
    <div class="container">
        <div class="title-area">
            <span class="sub-title">NOSSOS RECURSOS</span>
            <h2 class="sec-title text-white fw-semibold">SERVIÇOS QUE OFERECEMOS</h2>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div style="height:200px;" class="row global-carousel style2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Toneladas De Equipamento</a></h4>
                        <p class="service-card_text">Explorando a vida de cada pessoa com paixão.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Fileiras de Cardio</a></h4>
                        <p class="service-card_text">Explorando a vida com entusiasmo e vitalidade.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Estímulo Cardíaco</a></h4>
                        <p class="service-card_text">Explorando a vida com vitalidade e resiliência.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Treinamento de Força</a></h4>
                        <p class="service-card_text">Explorando a vida com força e determinação.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Toneladas de Equipamento</a></h4>
                        <p class="service-card_text">Explorando a vida com variedade e inovação.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Fileiras de Cardio</a></h4>
                        <p class="service-card_text">Explorando a vida com resistência e energia.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Estímulo Cardíaco</a></h4>
                        <p class="service-card_text">Explorando a vida com vitalidade e emoção.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Treinamento de Força</a></h4>
                        <p class="service-card_text">Explorando a vida com determinação e resistência.</p>
                        <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="sec-shape2-bottom">
    <img src="assets/img/bg/sec-shape2-top.png" alt="img">
</div>
</div>

<!--==============================
schedule Area
==============================-->
<div class="schedule-area-1 space">
<div class="container container2">
    <div class="title-area text-center">
        <span class="sub-title">Our Classes</span>
        <h2 class="sec-title fw-semibold">OUR TRAINING SCHEDULE</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="schedule-tab-1">
                <div class="filter-menu-active mb-50 text-center">
                    <button data-filter=".cat1" class="active btn style4 style-r0" type="button">ALL EVENTS</button>
                    <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                    <button class="btn style4 style-r0" data-filter=".cat3" type="button">OPEN GYM</button>
                    <button class="btn style4 style-r0" data-filter=".cat4" type="button">TOTAL BODY</button>
                    <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                </div>
                <div class="filter-active-cat1">
                    <div class="filter-item cat1">
                        <div class="table-responsive">
                            <table class="schedule-table table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">MONDAY</th>
                                        <th scope="col">TUESDAY</th>
                                        <th scope="col">WEDNESDAY</th>
                                        <th scope="col">THURSDAY</th>
                                        <th scope="col">FRIDAY</th>
                                        <th scope="col">SATURDAY</th>
                                        <th scope="col">SUNDAY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">06:00 - 07:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>CrossFit Pro</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Cardio Box</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">07:00 - 08:00</th>
                                        <td></td>
                                        <td class="active">
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Pro Intense
                                                Workout</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">08:00 - 09:00</th>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2"></td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2">
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">09:00 - 10:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10:00 - 11:00</th>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="filter-item cat2">
                        <div class="table-responsive">
                            <table class="schedule-table table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">MONDAY</th>
                                        <th scope="col">TUESDAY</th>
                                        <th scope="col">WEDNESDAY</th>
                                        <th scope="col">THURSDAY</th>
                                        <th scope="col">FRIDAY</th>
                                        <th scope="col">SATURDAY</th>
                                        <th scope="col">SUNDAY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">06:00 - 07:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>CrossFit Pro</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Cardio Box</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">07:00 - 08:00</th>
                                        <td></td>
                                        <td class="active">
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Pro Intense <br>
                                                Workout</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">08:00 - 09:00</th>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2"></td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2">
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">09:00 - 10:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10:00 - 11:00</th>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="filter-item cat3">
                        <div class="table-responsive">
                            <table class="schedule-table table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">MONDAY</th>
                                        <th scope="col">TUESDAY</th>
                                        <th scope="col">WEDNESDAY</th>
                                        <th scope="col">THURSDAY</th>
                                        <th scope="col">FRIDAY</th>
                                        <th scope="col">SATURDAY</th>
                                        <th scope="col">SUNDAY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">06:00 - 07:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>CrossFit Pro</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Cardio Box</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">07:00 - 08:00</th>
                                        <td></td>
                                        <td class="active">
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Pro Intense
                                                Workout</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">08:00 - 09:00</th>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2"></td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2">
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">09:00 - 10:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10:00 - 11:00</th>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="filter-item cat4">
                        <div class="table-responsive">
                            <table class="schedule-table table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">MONDAY</th>
                                        <th scope="col">TUESDAY</th>
                                        <th scope="col">WEDNESDAY</th>
                                        <th scope="col">THURSDAY</th>
                                        <th scope="col">FRIDAY</th>
                                        <th scope="col">SATURDAY</th>
                                        <th scope="col">SUNDAY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">06:00 - 07:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>CrossFit Pro</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Cardio Box</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">07:00 - 08:00</th>
                                        <td></td>
                                        <td class="active">
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Pro Intense
                                                Workout</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">08:00 - 09:00</th>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2"></td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2">
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">09:00 - 10:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10:00 - 11:00</th>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="filter-item cat5">
                        <div class="table-responsive">
                            <table class="schedule-table table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">MONDAY</th>
                                        <th scope="col">TUESDAY</th>
                                        <th scope="col">WEDNESDAY</th>
                                        <th scope="col">THURSDAY</th>
                                        <th scope="col">FRIDAY</th>
                                        <th scope="col">SATURDAY</th>
                                        <th scope="col">SUNDAY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">06:00 - 07:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>CrossFit Pro</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Cardio Box</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">07:00 - 08:00</th>
                                        <td></td>
                                        <td class="active">
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td rowspan="2">
                                            <span>Pro Intense
                                                Workout</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">08:00 - 09:00</th>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2"></td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td rowspan="2">
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">09:00 - 10:00</th>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Boxing Gym</span>
                                            Daniel
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10:00 - 11:00</th>
                                        <td>
                                            <span>Body Build</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Pump Work</span>
                                            Daniel
                                        </td>
                                        <td>
                                            <span>Fitness Class</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Open Gym</span>
                                            Daniel
                                        </td>
                                        <td></td>
                                        <td>
                                            <span>Yoga Class</span>
                                            Daniel
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--==============================
Video Area
==============================-->
<div class="video-area-1">
<div class="container">
    <div class="video-wrap">
        <a data-bg-src="{{ asset('assets/attractive-young-woman-her-trainer-running-treadmill-gym.jpg') }}" href="https://www.youtube.com/watch?v=Fo1n217fnn0" class="play-btn popup-video">
            <i class="fa-sharp fa-solid fa-play"></i>
        </a>
    </div>
</div>
</div>

<!--==============================
Portfolio Area
==============================-->
<div class="portfolio-area-1 service-bg-area" data-bg-src="assets/portfolioComp.jpeg">

<div class="container">
    <div class="title-area text-center">
        <span class="sub-title">Our Portfolio</span>
        <h2 class="sec-title text-white fw-semibold">OUR WORK PORTFOLIO</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="flip-gallery-area">
        <div class="flip-gallery">
            <ul class="flip-items">
                <li>
                    <div class="gallery-card gallery-flip">
                        <div class="gallery-img">
                            <img style="width:90%; height:91%" src="{{ asset('assets/women-exercising-treadmill.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <div class="media-left">
                                <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                            </div>
                            <a href="assets/img/project/project1_1.png" class="icon-btn popup-image">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-card gallery-flip">
                        <div class="gallery-img">
                            <img style="width:100%;height:91%;" src="{{ asset('assets/low-angle-view-unrecognizable-muscular-build-man-preparing-lifting-barbell-health-club.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <div class="media-left">
                                <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                            </div>
                            <a href="assets/img/project/project1_2.png" class="icon-btn popup-image">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="gallery-card gallery-flip">
                        <div class="gallery-img">
                            <img style="width:100%;height:91%;" src="{{ asset('assets/wepik-export-20231109194045RYX4.jpeg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <div class="media-left">
                                <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                            </div>
                            <a href="assets/img/project/project1_3.png" class="icon-btn popup-image">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<!--==============================
wcu area
==============================-->
<div class="wcu-area-2 space">
<div class="container container2">
    <div class="row justify-content-between">
        <div class="col-xl-6 align-self-center order-xl-2">
            <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="wcu-thumb2">
                            <img style="height:50%;width:100%;" src="{{ asset('assets/young-woman-spinning-class.jpg') }}" alt="img">
                        </div>
                        <div class="wcu-grid2 mt-4" data-bg-src="assets/img/bg/wcu_box-bg.png">
                            <div class="details">
                                <span class="wcu-grid_text"> <span class="counter-number">15000</span>+ Successful
                                    Happy Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                            <div class="details">
                                <span class="wcu-grid_text"> <span class="counter-number">25</span>+ Years Working
                                Experience</span>
                            </div>
                        </div>
                        <div class="wcu-thumb2">
                            <img src="{{ asset('assets/biceps-de-treinamento-esportista-com-haltere.jpg') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 order-xl-1">
            <div class="title-area">
                <span class="sub-title">WHY CHOOSE US</span>
                <h2 class="sec-title fw-semibold">WE PROVIDE OUR <br> 100% TRUSTED FITNESS SUPPORT</h2>
                <p class="sec-text">Define your specific bodybuilding goals. Determine what you want to achieve in terms of muscle size, strength, and overall physique. Set realistic and measurable goals that will guide your training and nutrition plan.</p>
                <div class="about-grid-wrap mt-40">
                    <div class="about-grid style2">
                        <div class="about-grid_icon">
                            <img src="assets/img/icon/wcu-icon_2-1.svg" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Expert Trainer</h4>
                            <p class="about-grid_text">30 days regular shipping</p>
                        </div>
                    </div>
                    <div class="about-grid style2">
                        <div class="about-grid_icon">
                            <img src="assets/img/icon/wcu-icon_2-2.svg" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Modern Equipment</h4>
                            <p class="about-grid_text">24 hour fast shipping</p>
                        </div>
                    </div>
                </div>
                <p class="sec-text">Implement progressive overload principles in your training. Gradually increase the weight, repetitions, or intensity of your exercises over time ...</p>
            </div>
            <div class="btn-wrap mt-40">
                <a href="about.html" class="btn style-r0">Make Appointment</a>
                <div class="about-info-wrap style2">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="details">
                        <p class="about-info-title">Call Us 24/7</p>
                        <a class="about-info-link" href="tel:+25825692582">+236-3256.21456</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--==============================
wcu area 02 end
==============================-->

<div class="bg-img-sec" data-bg-src="assets/img/bg/team-bg-2.png">
<!--==============================
team area 02
==============================-->
<div class="team-area-2 space overflow-hidden">
    <div class="container container2">
        <div class="title-area text-center text-sm-start">
            <span class="sub-title">Our Members</span>
            <h2 class="sec-title text-white fw-semibold">MEET YOUR TRAINER</h2>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div style="height:30%;" class="row global-carousel team-slider-2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor1.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor2.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor5.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor3.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor4.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">Victor Edward</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor6.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">Christiane Henry</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor5.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card2">
                    <div class="team-card_img">
                        <img src="{{ asset('assets/instrutor7.png') }}" alt="img">
                    </div>
                    <div class="team-card_content">
                        <span class="team-card_subtitle">YOGA COACH</span>
                        <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                        <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--==============================
Counter Area
==============================-->
<div class="counter-area-2 overflow-hidden">
    <div class="container container2">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-1.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">3658</span>+</h2>
                        <p class="counter-card_text">Satisfied Customers</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-2.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">658</span>+</h2>
                        <p class="counter-card_text">Expert Members</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-3.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">368</span>+</h2>
                        <p class="counter-card_text">Modern Equipment</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-4.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">153</span>+</h2>
                        <p class="counter-card_text"> Tons Of Harvest</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ad-slider">
    <div class="global-carousel" data-autoplay-speed="1" data-speed="10000">
        <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
        <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
    </div>
</div>
</div>

<!--==============================
Goal Area
==============================-->
<section class="goal-area space">
<div class="container container2">
    <div class="row">
        <div class="col-lg-6 order-lg-2">
            <div class="goal-thumb-2 mb-40 mb-lg-0">
                <div class="img-1">
                    <img src="{{ asset('assets/moca2.png') }}" alt="img">
                </div>
                <div class="img-2 jump">
                    <img src="{{ asset('assets/moca1.png') }}" alt="img">
                </div>
                <div class="wcu-grid movingX">
                    <div class="icon">
                        <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                    </div>
                    <div class="details">
                        <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                        <span class="wcu-grid_text">Years Experience</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-lg-1">
            <div class="title-area">
                <span class="sub-title">Fitmas Goal
                </span>
                <h2 class="sec-title fw-semibold">UNLOCK YOUR FULL POTENTIAL, ACHIEVE YOUR FITNESS GOALS.</h2>
            </div>
            <div class="goal-grid-wrap">
                <div class="about-grid style3">
                    <div class="about-grid_icon">
                        <img src="assets/img/icon/goal-icon_1-1.svg" alt="img">
                    </div>
                    <div class="about-grid_content">
                        <h4 class="about-grid_title">Free Fitness Training</h4>
                        <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                    </div>
                </div>
                <div class="about-grid style3">
                    <div class="about-grid_icon">
                        <img src="assets/img/icon/goal-icon_1-2.svg" alt="img">
                    </div>
                    <div class="about-grid_content">
                        <h4 class="about-grid_title">Cardio and Strength</h4>
                        <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                    </div>
                </div>
                <div class="btn-wrap">
                    <a class="btn style-r0" href="service-details.html">Learn More</a>
                    <a class="btn btn-border style-r0" href="service-details.html">View All Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--==============================
Cta Area
==============================-->
<section class="cta-area space" data-bg-src="{{ asset('assets/bannerHomem.png') }}">
<div class="container">
    <div class="row justify-content-lg-end justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10">
            <div class="cta-wrap text-center text-lg-start">
                <div class="title-area">
                    <span class="sub-title">Make An Appointment</span>
                    <h2 class="sec-title text-white fw-semibold">GET A FREE CONSULTANCY RIGHT NOW HERE!</h2>
                </div>
                <div class="btn-wrap mt-40">
                    <a href="about.html" class="btn style2 style-r0">Make Appointment</a>
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

<!--==============================
Blog Area
==============================-->
<section class="blog-area-2 space">
<div class="container container2">
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-6 position-relative">
            <div class="blog_sec_title_static me-lg-3">
                <div class="blog_sec_title_wrap">
                    <div class="title-area">
                        <span class="sub-title">Our Blog Posts
                        </span>
                        <h2 class="sec-title fw-semibold">READ OUR LATEST STORIES</h2>
                        <p class="sec-text">Welcome to our gym blog, where we share valuable insights, tips, and inspiration to help you on your journey to a healthier...</p>
                    </div>
                    <a class="btn style-r0" href="blog.html">View More Posts</a>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-6">
            <div class="blog-card style2">
                <div class="blog-img">
                    <img src="{{ asset('assets/foto1.png') }}" alt="blog image">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <a href="blog.html">JUNE 15, 2023</a>
                        <a href="blog.html">SHOPPING</a>
                    </div>
                    <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Machines: A Beginner's Guide
                        to Gym Equipment</a></h3>
                    <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                </div>
            </div>
            <div class="blog-card style2">
                <div class="blog-img">
                    <img src="{{ asset('assets/foto2.png') }}" alt="blog image">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <a href="blog.html">JUNE 15, 2023</a>
                        <a href="blog.html">SHOPPING</a>
                    </div>
                    <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Machines: A Beginner's Guide
                        to Gym Equipment</a></h3>
                    <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                </div>
            </div>
            <div class="blog-card style2">
                <div class="blog-img">
                    <img src="{{ asset('assets/foto3.png') }}" alt="blog image">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <a href="blog.html">JUNE 15, 2023</a>
                        <a href="blog.html">SHOPPING</a>
                    </div>
                    <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Machines: A Beginner's Guide
                        to Gym Equipment</a></h3>
                    <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>

@endsection
