@extends(config('contact.layout'))
@section(config('contact.section'))

    <section>
        <div class="@if(config('contact.display-map') === 'fluid') container-fluid @else container @endif">
            <iframe src="{{config('contact.map-url')}}" width="100%" height="{{config('contact.map-height')}}" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="@if(config('contact.display-content') === 'fluid') container-fluid @else container @endif">
            <div class="text-center mt-5 mb-4">
                @if(config('contact.h1') != null) <h1>{{config('contact.h1')}}</h1> @endif
                @if(config('contact.h2') != null) <h2>{{config('contact.h2')}}</h2> @endif
                @if(config('contact.intro') != null) <p class="intro">{{config('contact.intro')}}</p> @endif
            </div>
            @isset($_GET['success'])
                <div class="alert alert-success mt-4 mb-4 font-weight-bold">
                    @if (config('contact.use-fontawsome') === true)<i class="fas fa-check"></i>@endif Su mensaje ha sido enviado satisfactoriamente
                </div>
            @endisset
            <div class="d-flex justify-content-around">
                <div class="flex-fill mr-4">
                    @switch(config('contact.form-layout'))
                        @case('extend')
                            @component('contact::component-form-1')@endcomponent
                            @break
                        @case('compact')
                            @component('contact::component-form-2')@endcomponent
                            @break
                        @default
                            @component('contact::component-form-1')@endcomponent
                    @endswitch
                </div>
                <div class="flex-fill ml-4">
                    @if(config('contact.direccion') != null)
                    <div id="direccion" class="direccion">
                        <h3 class="mb-0 mt-4">Dirección</h3>
                        @php $line = 1; @endphp
                        @foreach(config('contact.direccion') as $direccion)
                            <p class="mb-0 mt-0 @if (config('contact.use-fontawsome') === true && $line != 1) pl-3 @endif ">@if (config('contact.use-fontawsome') === true && $line == 1)<i class="fas fa-map-marker"></i> @endif {{$direccion}}</p>
                            @php $line++; @endphp
                        @endforeach
                    </div>
                    @endif

                    @if(config('contact.telefonos') != null || config('contact.whatsapp') != null)
                    <div id="telefonos" class="telefonos">
                        <h3 class="mb-0 mt-4">Teléfonos</h3>
                        @if(config('contact.telefonos') != null)
                            <p class="mb-0 mt-0 telefonos">
                                @if (config('contact.use-fontawsome') === true) <i class="fas fa-phone"></i> @endif
                                @php $i = 0; $cantphones = count(config('contact.telefonos')) @endphp
                                @foreach(config('contact.telefonos') as $number)
                                    @php $phone = str_replace([" ", "-", "."], "", $number); @endphp
                                    <a href="tel:{{$phone}}">{{$number}}</a>
                                    @if(++$i !== $cantphones) ~ @endif
                                @endforeach
                            </p>
                        @endif

                        @if(config('contact.whatsapp') != null)
                            <p class="mb-0 mt-0 whatsapp">
                                @if (config('contact.use-fontawsome') === true) <i class="fab fa-whatsapp"></i> @endif
                                @php $i = 0; $cantphones = count(config('contact.whatsapp')) @endphp
                                @foreach(config('contact.whatsapp') as $number)
                                    @php $phone = str_replace([" ", "-", "."], "", $number); @endphp
                                    <a href="https://wa.me/521{{$phone}}" target="_blank">{{$number}}</a>
                                    @if(++$i !== $cantphones) ~ @endif
                                @endforeach
                            </p>
                        @endif
                    </div>
                    @endif

                    @if(config('contact.horarios') != null)
                    <div id="horario" class="horario">
                        <h3 class="mb-0 mt-4">Horario</h3>
                        @foreach(config('contact.horarios') as $horario)
                            <p class="mb-0 mt-0">@if (config('contact.use-fontawsome') === true) <i class="fas fa-clock"></i> @endif {{$horario}}</p>
                        @endforeach
                    </div>
                    @endif

                    @if(config('contact.redes') != null)
                        <div id="horario" class="horario">
                            <h3 class="mb-0 mt-4">Síguenos</h3>
                            @php $i = 0; $cantredes = count(config('contact.redes')) @endphp
                            @foreach(config('contact.redes') as $red)
                                @if (config('contact.use-fontawsome') === true)
                                    <a href="{{$red[1]}}" target="_blank" title="{{$red[0]}}" class="mr-2"><i class="fab {{$red[2]}} fa-2x mt-2"></i></a>
                                @else
                                    <a href="{{$red[1]}}" target="_blank">{{$red[0]}}</a>
                                    @if(++$i !== $cantredes) • @endif
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
