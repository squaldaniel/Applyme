        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @foreach ( $user->portifolio as $key => $portifolio)
                        <!-- Portfolio Item 1-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{$portifolio->id}}">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset("uploads/")}}{{'/'.$portifolio->port_photo}}" alt="Imagem" />
                            </div>
                        </div>
                        <!-- modal{{$portifolio->id}} -->
                        <div class="portfolio-modal modal fade" id="portfolioModal{{$portifolio->id}}" tabindex="-1" aria-labelledby="portfolioModal{{$portifolio->id.uniqid()}}" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                    <div class="modal-body text-center pb-5">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{$portifolio->port_name}}</h2>
                                                    <!-- Icon Divider-->
                                                    <div class="divider-custom">
                                                        <div class="divider-custom-line"></div>
                                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                        <div class="divider-custom-line"></div>
                                                    </div>
                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="img-fluid rounded mb-5" src="{{asset("uploads/")}}{{'/'.$portifolio->port_photo}}" alt="image" />
                                                    <!-- Portfolio Modal - Text-->
                                                    <p class="mb-4">{{$portifolio->port_description}}</p>
                                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                                        <i class="fas fa-xmark fa-fw"></i>
                                                        Fechar Janela
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal{{$portifolio->id}} -->
                    @endforeach
                </div>
            </div>
        </section>
