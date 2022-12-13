<section class="has-img-bg">
    <div class="container">
        <h6 class="section-subtitle text-center">Conoce nuestro</h6>
        <h3 class="section-title mb-6 text-center">Menú</h3>
        <ul class="nav nav-pills flex flex-col md:flex-row flex-wrap list-none pl-0 mb-4" id="pills-tab" role="tablist">
            @foreach ($categorias as $i)
            <li class="nav-item" role="presentation">
                <a href='#pills-{{$i->nombre}}' class="
                  nav-link
                  block
                  font-medium
                  text-xs
                  leading-tight
                  uppercase
                  rounded
                  px-6
                  py-3
                  my-2
                  md:mr-2
                  focus:outline-none focus:ring-0
                " id='pills-{{$i->nombre}}-tab' data-bs-toggle="pill" data-bs-target='#pills-{{$i->nombre}}' role="tab" aria-controls='pills-{{$i->nombre}}'
                  aria-selected="true">{{$i->nombre}}</a>
            </li>
            @endforeach
        </ul>
        <div class="card bg-light">
            <div class="card-body px-4 pb-4 text-center">                   
                <div class="row text-left">
                    <div class="tab-content w-full" id="pills-tabContent">
                        @foreach ($categorias as $c)
                        <div class="tab-pane fade show" id='pills-{{$c->nombre}}' role="tabpanel" aria-labelledby='pills-{{$c->nombre}}-tab'>
                            <div class="overflow-auto h-96 w-full grid grid-cols-2 gap-2 px-0">
                                @foreach ($productos as $p)
                                @if ($p->categoria_id == $c->id_categoria)
                                <div class="col-md-12 my-3 w-full">
                                    <a href="#" class="pb-3 w-full d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                        <div class="d-flex">
                                            <div class="custom-list">
                                                <div class="img-holder">
                                                <img src="/storage/{{$p->imagen}}" alt="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                {{$p->nombre}}
                                                <p class="mt-1 mb-0">{{$p->descripcion}}.</p>
                                            </div>
                                            <h6 class="float-right text-primary">&dollar; {{$p->precio}}</h6>
                                        </div>
                                    </a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>                  
    </div>
</section>