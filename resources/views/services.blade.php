@extends('layouts.layout')

@section('content')
<!--SERVICES SECTION -->
<div id="service-section">
    <div class="container">
        <div class="row  text-center">

            <!-- ./ Main Heading-->
            <div class="row main-low-margin text-center">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 ">
                    <div class="col-md-4 col-sm-6">
                        <div class="text-center">
                            <img src="../../assets/img/printer-icon.png" height="80" width="80">
                            <h4>Dopuna kertridža</h4>
                            <p>
                                Vršimo punjenje ketridža za ink jet štampače po vodećim standardima sa najkvalitetnijim bojama po pristupačnim cenama uz mogoćnost dostave.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="text-center">
                            <img src="../../assets/img/ink.png" height="80" width="80">
                            <h4>Dopuna tonera</h4>
                            <p>
                                Vršimo reciklažu toner kaseta sa kvalitenim toner prahom iz čega proizilazi kvalitetnija štampa u odnosu na originalnu kasetu sa istim brojem kopija kao kod originalne toner kasete.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="text-center">
                            <img src="../../assets/img/laser.png" height="80" width="80">
                            <h4>Servis laserskih stampača</h4>
                            <p>
                                Servis obavlja stručno osoblje koje koristi potrošne kao i originalne delove da bi štampač zadražao fabričke karakteristike.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ./ Content div-->
        </div>
    </div>
</div>
<!-- END SERVICES SECTION -->
<div class="news">
    <div id="service-section">
        <div class="container">
            @if(isset($news))
                @foreach($news as $story)
                    <div class="row  text-center">
                        <div position="center">
                            <h3 class="media-heading">{{ $story->headline }}</h3>
                            <p>{{ $story->story_text }}</p>
                            <p>Datum: <em>{{ $story->added_on }}</em></p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
