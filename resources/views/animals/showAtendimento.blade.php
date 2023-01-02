<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Profile'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-100 border-radius-xl mt-1"
                style="background-image: url('https://images.pexels.com/photos/1254140/pexels-photo-1254140.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{$atendimento->animal->nome}}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                Proprietário: {{$atendimento->animal->cliente->nome}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item" onclick="openCity(event, '1')">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href=""
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">home</i>
                                        <span class="ms-1">Visão Geral</span>
                                    </a>
                                </li>
                                <li class="nav-item" onclick="openCity(event, '2')">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href=""
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">home</i>
                                        <span class="ms-1">Atendimento</span>
                                    </a>
                                </li>
                                <li class="nav-item" onclick="openCity(event, '3')">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href=""
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">email</i>
                                        <span class="ms-1">Vacinas e Vermífugos</span>
                                    </a>
                                </li>
                                <li class="nav-item" onclick="openCity(event, '4')">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href=""
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">settings</i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                                <div class="moving-tab position-absolute nav-link" style="padding: 0px; width: 126px; transform: translate3d(123px, 0px, 0px); transition: all 0.5s ease 0s;"><a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="" role="tab" aria-selected="false">-</a></div>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="row tabcontent" id="1" >
                    
                    
                    <div class="row">
                        <div class="col-12 col-xl-3">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0">Informações</h6>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <a href="javascript:;">
                                                <i class="fas fa-user-edit text-secondary text-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit Profile"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <!--<p class="text-sm">
                                        Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If
                                        two equally difficult paths, choose the one more painful in the short term
                                        (pain avoidance is creating an illusion of equality).
                                    </p>
                                    <hr class="horizontal gray-light my-4">-->
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                class="text-dark">Sexo:</strong> &nbsp; Macho</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Idade:</strong> &nbsp; 7 anos</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Raça:</strong> &nbsp; Viralata</li>
                                        <!--<li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Location:</strong> &nbsp; USA</li>
                                        <li class="list-group-item border-0 ps-0 pb-0">
                                            <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="javascript:;">
                                                <i class="fab fa-facebook fa-lg"></i>
                                            </a>
                                            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="javascript:;">
                                                <i class="fab fa-twitter fa-lg"></i>
                                            </a>
                                            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="javascript:;">
                                                <i class="fab fa-instagram fa-lg"></i>
                                            </a>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-5">
                        <div class="card h-100 mb-4">
                        <div class="card-header pb-0 px-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0">Últimos Atendimentos</h6>
                                </div>
                                <div
                                    class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                                     <!--<i class="material-icons me-2 text-lg">date_range</i>
                                   <small>23 - 30 March 2020</small>-->
                                   <button class="btn btn-outline-primary btn-sm mb-0">Ver Todos</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <!--<h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>-->
                            <ul class="list-group">


                                @foreach($atendimento->animal->atendimentos as $a)


                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_more</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">
                                                @switch($a->tipoAtendimento)
                                                    @case(1)
                                                        Consulta Padrão
                                                    @break
                                                    @case(2)
                                                        Internação
                                                    @break
                                                    @case(3)
                                                        Banho e Tosa
                                                    @break
                                                    
                                                @endswitch
                                            </h6>
                                            
                                            <span class="text-xs">{{$a->data->format('d/m/Y')}}</span>
                                        </div>
                                    </div>
                                    
                                        @switch($a->status)
                                                    @case(1)
                                                        <div class="d-flex align-items-center text-warning text-gradient text-sm font-weight-bold">
                                                            Aguardando atendimento
                                                        </div>
                                                    @break
                                                    @case(2)
                                                        <div class="d-flex align-items-center text-secondary text-gradient text-sm font-weight-bold">
                                                            Em atendimento
                                                        </div>
                                                    @break
                                                    @case(3)
                                                        <div class="d-flex align-items-center text-info text-gradient text-sm font-weight-bold">
                                                            Internação
                                                        </div>
                                                    @break
                                                    @case(3)
                                                        <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                                            Pagamento pendente
                                                        </div>
                                                    @break
                                                    @case(4)
                                                        <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                                            Encerrado
                                                        </div>
                                                    @break
                                                @endswitch
                                    
                                </li>
                                @endforeach
                                <!--<li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_more</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Consulta Genérica</h6>
                                            <span class="text-xs">27 March 2020, at 12:30 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-warning text-gradient text-sm font-weight-bold">
                                        Aguardando Atendimento
                                    </div>
                                </li>


                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Consulta Genérica</h6>
                                            <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        Finalizado
                                    </div>
                                </li>
                            
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                                            <span class="text-xs">26 March 2020, at 13:45 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 750
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                                            <span class="text-xs">26 March 2020, at 12:30 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 1,000
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                                            <span class="text-xs">26 March 2020, at 08:30 AM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 2,500
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">priority_high</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Consulta Genérica</h6>
                                            <span class="text-xs">26 March 2020, at 05:00 AM</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-danger text-sm font-weight-bold">
                                        Pagamento Pendente
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                        </div>
                        
                        <div class="col-12 col-xl-4">
                            <div class="card h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <h6 class="mb-0">Itens em Pré-Venda</h6>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-outline-primary btn-sm mb-0">Acessar Caixa</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3 pb-0">
                                <ul class="list-group">
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <!--<button
                                            class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_more</i></button>-->
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Consulta Clínica</h6>
                                            <span class="text-xs">19/11 Consulta Clínica - Mag</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                        R$ 100,00
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <!--<button
                                            class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_more</i></button>-->
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Vacina Anti-Rábica</h6>
                                            <span class="text-xs">19/11 Consulta Clínica - Mag</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                        R$ 100,00
                                    </div>
                                </li>
                               <!-- <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Apple</h6>
                                            <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 2,000
                                    </div>
                                </li>
                            
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                                            <span class="text-xs">26 March 2020, at 13:45 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 750
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                                            <span class="text-xs">26 March 2020, at 12:30 PM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 1,000
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">expand_less</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                                            <span class="text-xs">26 March 2020, at 08:30 AM</span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                        + $ 2,500
                                    </div>
                                </li>
                                <li
                                    class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <button
                                            class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                class="material-icons text-lg">priority_high</i></button>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                                            <span class="text-xs">26 March 2020, at 05:00 AM</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                                        Pending
                                    </div>
                                </li>-->
                            </ul>
                                </div>
                            </div>
                        </div>
                   
                    </div>

                    <!--
                    <div class="col-12 mt-4">
                        <div class="mb-5 ps-3">
                            <h6 class="mb-1">Projects</h6>
                            <p class="text-sm">Architects design houses</p>
                        </div>
                        <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-1.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #2</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Modern
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                As Uber works through a huge amount of internal management turmoil.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-2.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #1</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Scandinavian
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Music is something that every person has his or her own specific
                                                opinion about.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-3.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #3</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Minimalist
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Different people have different taste, and various types of music.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://images.unsplash.com/photo-1606744824163-985d376605aa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #4</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Gothic
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Why would anyone pick blue over pink? Pink is obviously a better
                                                color.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                               
                        </div>
                    </div>
                    -->
                </div>

                <div class="row tabcontent" id="2" style="display:block">
                    
                    <form method="post" action="{{route('clientes.animals.atendimentos.store', ['animal'=> $atendimento->animal, 'cliente'=> $atendimento->animal->cliente])}}">
                        <div class="row">
                            <div class="col-12 col-xl-8">
                            <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                        <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <h6 class="mb-0">Novo Atendimento</h6>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Salvar</button>
                                        </div>
                                    </div>
                        </div>
                        <div class="card-body p-3">
                            @if (session('status'))
                            <div class="row">
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('status') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            @endif
                            @if (Session::has('demo'))
                                    <div class="row">
                                        <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                            <span class="text-sm">{{ Session::get('demo') }}</span>
                                            <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                data-bs-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                            @endif
                   
                                @csrf
                                <div class="row">
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Data</label>
                                        <input type="date" name="data" class="form-control border border-2 p-2" value='{{ old('data', $atendimento->data->format('Y-m-d')) }}'>
                                        @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Status</label>
                                        <select class="form-control border border-2 p-2" id="exampleFormControlSelect1" name="status">
                                            <option value="1" @if($atendimento->status==1)selected @endif>Aguardando Atendimento</option>
                                            <option value="2" @if($atendimento->status==2)selected @endif>Em atendimento</option>
                                            <option value="3" @if($atendimento->status==3)selected @endif>Pagamento em aberto</option>
                                            <option value="4" @if($atendimento->status==4)selected @endif>Atendimento Concluído</option>
                                        
                                        </select>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tipo de Atendimento {{$atendimento->id}}</label>
                                        <select class="form-control border border-2 p-2" id="exampleFormControlSelect1" name="tipoAtendimento">
                                            <option value="1" @if($atendimento->tipoAtendimento==1)selected @endif>Consulta</option>
                                            <option value="2" @if($atendimento->tipoAtendimento==2)selected @endif>Internação</option>
                                            <option value="3" @if($atendimento->tipoAtendimento==3)selected @endif>Banho e Tosa</option>
                                        
                                        </select>
                                        @error('phone')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Veterinário/Funcionário Responsável</label>
                                        <input type="text" name="" class="form-control border border-2 p-2" >
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-md-12 align-items-center">
                                            <div class="nav-wrapper position-relative end-0">
                                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                    <li class="nav-item active" onclick="trocarSecaoAtendimento(event, 'anamnese')">
                                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href=""
                                                            role="tab" aria-selected="true">
                                                            <i class="material-icons text-lg position-relative">home</i>
                                                            <span class="ms-1">Anamnese</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" onclick="trocarSecaoAtendimento(event, 'exameClinico')">
                                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href=""
                                                            role="tab" aria-selected="false">
                                                            <i class="material-icons text-lg position-relative">home</i>
                                                            <span class="ms-1">Exame Clínico</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" onclick="trocarSecaoAtendimento(event, 'conclusoes')">
                                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href=""
                                                            role="tab" aria-selected="false">
                                                            <i class="material-icons text-lg position-relative">home</i>
                                                            <span class="ms-1">Conclusões</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" onclick="trocarSecaoAtendimento(event, 'pre-venda')">
                                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href=""
                                                            role="tab" aria-selected="false">
                                                            <i class="material-icons text-lg position-relative">home</i>
                                                            <span class="ms-1">Pré-venda</span>
                                                        </a>
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                    </div>
                                </div>

                                <div class="row conteudoDaSecao" id="anamnese">
                                    
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Queixas Principais</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Ambiente</label>
                                        <input type="text"  class="form-control border border-2 p-2" value='{{ old('name', auth()->user()->nama) }}'>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Alimentação</label>
                                        <input type="text"  class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('phone')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Vacinação</label>
                                        <input type="text"  class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Vermifugação</label>
                                        <input type="text"  class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Ectoparasitas</label>
                                        <input type="text"  class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Histórico de Reprodução</label>
                                        <input type="text" class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">História Médica Anterior</label>
                                        <input type="text"  class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Procedimentos Realizados</label>
                                        <input type="text" class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Outras observações</label>
                                        <input type="text"  class="form-control border border-2 p-2" value='{{ old('location', auth()->user()->location) }}'>
                                        @error('location')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

    

                                <div class="row conteudoDaSecao" id="exameClinico" style="display:none">
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">FC (bpm)</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">FR (mpm)</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Temperatura</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Olhos e mucosa ocular</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tempo de preenchimento capilar (seg)</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Olhos e mucosa ocular</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Cavidade oral</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Hidratação</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Pulso venoso jugular</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Pulso arterial</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Orelhas/ouvido</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Linfonodos</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Pele/Pêlo</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Membros torácicos</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tórax</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Membros pélvicos</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Abdome</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Urinário</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Genital</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Genital</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Músculo-esquelético</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nervoso</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Outras observações</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>


                                </div>

                                <div class="row conteudoDaSecao" id="conclusoes" style="display:none">
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Suspeita Diagnóstica</label>
                                        <input type="text" class="form-control border border-2 p-2" value=''>
                                        @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tratamento</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Exames Solicitados</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Outras observações</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>


                                </div>

                                <div class="row conteudoDaSecao" id="pre-venda" style="display:none">
                                    
                                    <div class="mb-3 col-md-8">
                                        <label class="form-label">Itens Disponíveis</label>
                                        <select class="form-control border border-2 p-2" id="exampleFormControlSelect1">
                                            <option>Consulta Genérica - R$ 100,00</option>
                                            <option>Vacina Tétano - R$ 99,00</option>
                                        
                                        
                                        </select>
                                        @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label">Quantidade</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>
                                
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label">Ações</label>
                                        <input type="text"  class="form-control border border-2 p-2" value=''>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Itens adicionados</label>
                                        <table style="width:100%">
                                            <tr><td>Item<td><td>Quantidade</td><td>Valor<td><td>Sub-Total</td></tr>
                                            <tr><td>Consulta Genérica<td><td>1</td><td>R$ 100,00<td><td>R$ 100,00</td></tr>
                                            <tr><td><td><td></td><td><td><td>Total</td></tr>
                                            <tr><td><td><td></td><td><td><td>R$ 100,00</td></tr>
                                            
                                        </table>
                                        @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    </div>


                                </div>

                                
                               
                            

                        </div>
                    </form>
                </div>
                        </div>

                        <!--<div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Histórico</h6>
                                </div>
                                <div class="card-body p-3">
                                    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault" checked>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault">Email me when someone follows
                                                    me</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault1">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault1">Email me when someone answers on
                                                    my post</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault2" checked>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault2">Email me when someone mentions
                                                    me</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application
                                    </h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault3">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault3">New launches and projects</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault4" checked>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault4">Monthly product updates</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0 pb-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault5">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        
                        <div class="col-12 col-xl-4">
                            <div class="card h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <h6 class="mb-0">Últimos Atendimentos</h6>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3 pb-0">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                                                <span class="text-xs">#MS-415646</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $180
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                                                <span class="text-xs">#RV-126749</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $250
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                                                <span class="text-xs">#FB-212562</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $560
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                                                <span class="text-xs">#QW-103578</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $120
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                                                <span class="text-xs">#AR-803481</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $300
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   
                    </div>

                    <!--
                    <div class="col-12 mt-4">
                        <div class="mb-5 ps-3">
                            <h6 class="mb-1">Projects</h6>
                            <p class="text-sm">Architects design houses</p>
                        </div>
                        <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-1.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #2</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Modern
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                As Uber works through a huge amount of internal management turmoil.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-2.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #1</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Scandinavian
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Music is something that every person has his or her own specific
                                                opinion about.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-3.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #3</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Minimalist
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Different people have different taste, and various types of music.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://images.unsplash.com/photo-1606744824163-985d376605aa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #4</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Gothic
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Why would anyone pick blue over pink? Pink is obviously a better
                                                color.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                               
                        </div>
                    </div>
                    -->
                </div>

                <div class="row tabcontent" id="3">
                    
                    
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0">Informações</h6>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <a href="javascript:;">
                                                <i class="fas fa-user-edit text-secondary text-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit Profile"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <!--<p class="text-sm">
                                        Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If
                                        two equally difficult paths, choose the one more painful in the short term
                                        (pain avoidance is creating an illusion of equality).
                                    </p>
                                    <hr class="horizontal gray-light my-4">-->
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Location:</strong> &nbsp; USA</li>
                                        <li class="list-group-item border-0 ps-0 pb-0">
                                            <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="javascript:;">
                                                <i class="fab fa-facebook fa-lg"></i>
                                            </a>
                                            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="javascript:;">
                                                <i class="fab fa-twitter fa-lg"></i>
                                            </a>
                                            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="javascript:;">
                                                <i class="fab fa-instagram fa-lg"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Histórico</h6>
                                </div>
                                <div class="card-body p-3">
                                    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault" checked>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault">Email me when someone follows
                                                    me</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault1">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault1">Email me when someone answers on
                                                    my post</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault2" checked>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault2">Email me when someone mentions
                                                    me</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application
                                    </h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault3">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault3">New launches and projects</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault4" checked>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault4">Monthly product updates</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0 pb-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault5">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-xl-4">
                            <div class="card h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <h6 class="mb-0">Invoices</h6>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3 pb-0">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                                                <span class="text-xs">#MS-415646</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $180
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                                                <span class="text-xs">#RV-126749</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $250
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                                                <span class="text-xs">#FB-212562</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $560
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                                                <span class="text-xs">#QW-103578</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $120
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                                                <span class="text-xs">#AR-803481</span>
                                            </div>
                                            <div class="d-flex align-items-center text-sm">
                                                $300
                                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                        class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                                    PDF</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   
                    </div>

                    <!--
                    <div class="col-12 mt-4">
                        <div class="mb-5 ps-3">
                            <h6 class="mb-1">Projects</h6>
                            <p class="text-sm">Architects design houses</p>
                        </div>
                        <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-1.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #2</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Modern
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                As Uber works through a huge amount of internal management turmoil.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-2.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #1</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Scandinavian
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Music is something that every person has his or her own specific
                                                opinion about.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets') }}/img/home-decor-3.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #3</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Minimalist
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Different people have different taste, and various types of music.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://images.unsplash.com/photo-1606744824163-985d376605aa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #4</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Gothic
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Why would anyone pick blue over pink? Pink is obviously a better
                                                color.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                    Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Peterson">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-4.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Nick Daniel">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Ryan Milly">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Elena Morison">
                                                        <img alt="Image placeholder"
                                                            src="{{ asset('assets') }}/img/team-1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                               
                        </div>
                    </div>
                    -->
                </div>






            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
