@extends ('layout.master')

@section('content')
    Contact
@endsection

@section('tekst')
    {{--<form>--}}
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputEmail1">Email adres</label>--}}
            {{--<input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Voer hier uw email in">--}}
            {{--<small id="emailHelp" class="form-text text-muted">Wij delen uw E-mail niet met derden.</small>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="exampleInputPassword1">Vraag</label>--}}
            {{--<input type="text" class="form-control" id="vraagid" placeholder="Stel hier uw vraag">--}}
        {{--</div>--}}
        {{--<button type="submit" class="btn btn-primary">Bevestigen</button>--}}
    {{--</form>--}}


        {{--<ul class="footer links white">--}}
            {{--<li><i class="fa fa-phone" aria-hidden="true"></i> 0900 - 999 0000<br><br></li>--}}
            {{--<li><i class="fa fa-envelope-o" aria-hidden="true"></i> Postbus 60230</li>--}}
            {{--<li>1320 AG Almere, Nederland<br><br></li>--}}
            {{--<li>KvK 32088639</li>--}}
            {{--<li>BTW NL810827827B02<br><br></li>--}}
            {{--<li><a class="primary action" style="padding: 10px 20px;display:inline-block;text-decoration: none;" href="https://www.999games.nl/klantenservice">Naar de klantenservice &gt; </a></li>--}}
        {{--</ul>--}}
    <!--Section: Contact v.2-->
    <section class="mb-4">
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Heeft u enkele vragen? twijfel niet, neem contact met ons op!</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Naam</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Onderwerp</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Vraag</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Verstuur</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Almere, Postbus 60230, 1320 AG</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 0900 999 9000</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>info@999games.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAjdohPfVhfgkUG0V7bHKBWlosQpRbOxSI'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.org/'>embed a google map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c3151498d0db55f1aa1dbad41eea4ecb798ba9e8'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(52.36514974262782,5.172118100000049),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(52.36514974262782,5.172118100000049)});infowindow = new google.maps.InfoWindow({content:'<strong>999 Games</strong><br>Wormerweg 2<br>06510 New Haven<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

    <!--Section: Contact v.2-->
@endsection