@extends ('layout.master')

@section('content')
    OVER ONS
@endsection
@section('tekst')
    <main class="page-main" id="maincontent"><a tabindex="-1" id="contentarea"></a>
        <div class="page messages"><div data-placeholder="messages"></div>
            <div data-bind="scope: 'messages'">
                <!-- ko if: cookieMessages && cookieMessages.length > 0 --><!-- /ko -->
                <!-- ko if: messages().messages && messages().messages.length > 0 --><!-- /ko -->
            </div>

        </div><div class="columns"><div class="column main"><input name="form_key" type="hidden" value="u53TCyIqAUUbmgVN"><div id="authenticationPopup" style="display: none;" data-bind="scope:'authenticationPopup'">
                    <script>
                        window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/www.999games.nl\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/www.999games.nl\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/www.999games.nl\/"};
                    </script>
                    <!-- ko template: getTemplate() -->


                    <!-- /ko -->

                </div>





                <div id="monkey_campaign" style="display:none;">
                </div>
                <script>
                    require([
                        "jquery",
                        "jquery/ui"
                    ], function($){

//<![CDATA[
                        $.extend(true, $, {
                            calendarConfig: {
                                dayNames: ["zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"],
                                dayNamesMin: ["zo","ma","di","wo","do","vr","za"],
                                monthNames: ["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"],
                                monthNamesShort: ["jan.","feb.","mrt.","apr.","mei","jun.","jul.","aug.","sep.","okt.","nov.","dec."],
                                infoTitle: "Over de kalender",
                                firstDay: 0,
                                closeText: "Sluiten",
                                currentText: "Naar vandaag",
                                prevText: "Vorige",
                                nextText: "Volgende",
                                weekHeader: "WK",
                                timeText: "Tijd",
                                hourText: "Uur",
                                minuteText: "Minuut",
                                dateFormat: $.datepicker.RFC_2822,
                                showOn: "button",
                                showAnim: "",
                                changeMonth: true,
                                changeYear: true,
                                buttonImageOnly: null,
                                buttonImage: null,
                                showButtonPanel: true,
                                showWeek: true,
                                timeFormat: '',
                                showTime: false,
                                showHour: false,
                                showMinute: false
                            }
                        });

                        enUS = {"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}}; // en_US locale reference
//]]>

                    });
                </script>
                <style>
                    @media (min-width: 1000px) {
                        #timeline .demo-card:nth-child(odd) .head::after, #timeline .demo-card:nth-child(even) .head::after {
                            position: absolute;
                            content: "";
                            width: 0;
                            height: 0;
                            border-top: 15px solid transparent;
                            border-bottom: 15px solid transparent;
                        }

                        #timeline .demo-card:nth-child(odd) .head::before, #timeline .demo-card:nth-child(even) .head::before {
                            position: absolute;
                            content: "";
                            width: 15px;
                            height: 15px;
                            background-color: #db305a;
                            border-radius: 15px;
                        }
                    }
                    /* Some Cool Stuff */
                    .demo-card:nth-child(1) {
                        order: 1;
                    }

                    .demo-card:nth-child(2) {
                        order: 5;
                    }

                    .demo-card:nth-child(3) {
                        order: 2;
                    }

                    .demo-card:nth-child(4) {
                        order: 6;
                    }

                    .demo-card:nth-child(5) {
                        order: 3;
                    }

                    .demo-card:nth-child(6) {
                        order: 7;
                    }

                    .demo-card:nth-child(7) {
                        order: 4;
                    }

                    /* Border Box */
                    * {
                        box-sizing: border-box;
                    }

                    /* Fonts */
                    #timeline {
                        padding: 20px 0;
                    }
                    #timeline p.leader {
                        text-align: center;
                        max-width: 90%;
                        margin: auto;
                        margin-bottom: 45px;
                    }
                    #timeline .demo-card-wrapper {
                        position: relative;
                        margin: auto;
                    }
                    @media (min-width: 1000px) {
                        #timeline .demo-card-wrapper {
                            display: flex;
                            flex-flow: column wrap;
                            width: 1170px;
                            height: 1750px;
                            margin: 0 auto;
                        }
                    }
                    #timeline .demo-card-wrapper::after {
                        z-index: 1;
                        content: "";
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 50%;
                        border-left: 3px solid #db305a;
                    }
                    @media (min-width: 1000px) {
                        #timeline .demo-card-wrapper::after {
                            border-left: 3px solid #db305a;
                        }
                    }
                    #timeline .demo-card {
                        position: relative;
                        display: block;
                        margin: 10px auto 80px;
                        max-width: 94%;
                        z-index: 2;
                    }
                    @media (min-width: 480px) {
                        #timeline .demo-card {
                            max-width: 60%;
                        }
                    }
                    @media (min-width: 720px) {
                        #timeline .demo-card {
                            max-width: 40%;
                        }
                    }
                    @media (min-width: 1000px) {
                        #timeline .demo-card {
                            max-width: 450px;
                            height: auto;
                            margin: 90px;
                            margin-top: 45px;
                            margin-bottom: 45px;
                        }
                        #timeline .demo-card:nth-child(odd) {
                            margin-right: 45px;
                        }
                        #timeline .demo-card:nth-child(odd) .head::after {
                            border-left-width: 15px;
                            border-left-style: solid;
                            left: 100%;
                        }
                        #timeline .demo-card:nth-child(odd) .head::before {
                            left: 489px;
                        }
                        #timeline .demo-card:nth-child(even) {
                            margin-left: 45px;
                        }
                        #timeline .demo-card:nth-child(even) .head::after {
                            border-right-width: 15px;
                            border-right-style: solid;
                            right: 100%;
                        }
                        #timeline .demo-card:nth-child(even) .head::before {
                            right: 486px;
                        }
                        #timeline .demo-card:nth-child(2) {
                            margin-top: 180px;
                        }
                    }
                    #timeline .demo-card .head {
                        position: relative;
                        display: flex;
                        align-items: center;
                        color: #fff;
                        padding: 10px 15px;
                    }
                    #timeline .demo-card .head .number-box {
                        display: inline;
                        float: left;
                        margin: 15px;
                        padding: 10px;
                        font-size: 35px;
                        line-height: 35px;
                        font-weight: 600;
                        background: rgba(0, 0, 0, 0.17);
                    }
                    #timeline .demo-card .head h2 {
                        text-transform: uppercase;
                        font-size: 1.3rem;
                        font-weight: inherit;
                        margin: 0;
                        padding: 10px 15px;
                        line-height: 1rem;
                        width: 100%;
                        text-align: center;
                    }
                    @media (min-width: 480px) {
                        #timeline .demo-card .head h2 {
                            font-size: 165%;
                            line-height: 1.2rem;
                        }
                    }
                    #timeline .demo-card .head h2 span {
                        display: block;
                        font-size: 0.6rem;
                        margin: 0;
                    }
                    @media (min-width: 480px) {
                        #timeline .demo-card .head h2 span {
                            font-size: 0.8rem;
                        }
                    }
                    #timeline .demo-card .body {
                        background: #fff;
                        border: 3px solid #db305a;
                        border-top: 0;
                    }
                    @media (min-width: 1000px) {
                        #timeline .demo-card .body {
                            height: auto;
                        }
                    }
                    #timeline .demo-card .body p {
                        padding:15px;
                        margin-bottom: 15px;
                    }
                    #timeline .demo-card .body img {
                        display: block;
                        width: 100%;
                    }
                    #timeline .demo-card--step1 {
                        background-color: #db305a;
                    }
                    #timeline .demo-card--step1 .head::after {
                        border-color: #db305a;
                    }
                    .last-item-ttl {
                        text-align: center;
                        color: #db305a;
                        margin-top: 0px;
                    }
                </style>
                <div class="row">
                    <div class="col-xs-12">
                        <p>999 Games bestaat al meer dan 25 jaar, dus er is inmiddels een boel spelgeschiedenis geschreven. Bekijk de ontwikkeling van ons bedrijf aan de hand van de onderstaande, chronologische tijdlijn.</p>
                        <img class="centered-img img-fluid" alt="Bekijk de geschiedenis van 999 Games" src="https://www.999games.nl/media/wysiwyg/Over-ons/logo-met-karakters.png">
                    </div>
                </div>
                <section id="timeline">
                    <div class="demo-card-wrapper">
                        <div class="demo-card demo-card--step1">
                            <div class="head">
                                <h2>1 juli 1990</h2>
                            </div>
                            <div class="body">
                                <p>999 Games wordt opgericht als eenmansbedrijf. Importspellen en accessoires worden in Nederland, België en Duitsland per postorder verkocht. Het assortiment bestaat uit wargames, fantasygames, complexe multiplayer games en accessoires. </p>
                            </div>
                        </div>

                        <div class="demo-card demo-card--step1">
                            <div class="head">
                                <h2>Juli 1993</h2>
                            </div>
                            <div class="body">
                                <p><strong>Magic: the Gathering</strong> wordt gelanceerd en vaagt alle andere spellen weg. Er komt personeel bij en de omzet groeit stevig.</p>
                                <img class="centered-img" alt="Magic The Gathering" src="https://www.999games.nl/media/wysiwyg/Over-ons/magic-img.jpg">
                            </div>
                        </div>

                        <div class="demo-card demo-card--step1">
                            <div class="head">
                                <h2>1995</h2>
                            </div>
                            <div class="body">
                                <p>999 Games stopt met de directe verkoop aan particulieren en start met de verkoop aan winkels.</p>
                                <img class="centered-img" alt="Onze spellen zijn ook te koop bij de spellen speciaalzaak" src="https://www.999games.nl/media/wysiwyg/Over-ons/spellenwinkel.jpg">
                            </div>
                        </div>

                        <div class="demo-card demo-card--step1">
                            <div class="head">
                                <h2>Maart 1998</h2>
                            </div>
                            <div class="body">
                                <p>999 Games geeft zijn eerste spel uit: Elfenland, gevolgd door onder andere Land in Zicht, De Kolonisten van Catan en El Grande. Elfenland wint ditzelfde jaar de prijs Speelgoed van het Jaar. In 1999 wint De Kolonisten van Catan deze prijs. Het aantal verkochte bordspellen stijgt hard.</p>
                                <img class="centered-img" alt="Elfenland van 999 Games" src="https://www.999games.nl/media/wysiwyg/Over-ons/elfenland.jpg">
                            </div>
                        </div>

                        <div class="demo-card demo-card--step1">
                            <div class="head">
                                <h2>19 december 1999</h2>
                            </div>
                            <div class="body">
                                <img class="centered-img" alt="Pokemon ruilkaarten" src="https://www.999games.nl/media/wysiwyg/Over-ons/pokemon-img.jpg">
                                <p>999 Games lanceert het ruilkaartspel Pokémon dat zo’n groot succes was dat 999 Games sterk moest worden uitgebreid. Naast aanzienlijk meer personeel vindt een verandering in de structuur plaats. Van een platte organisatie met 6 man ging het bedrijf naar een piramidevormige organisatie met 46 man.</p>
                            </div>
                        </div>

                        <div class="demo-card demo-card--step1">
                            <div class="head">
                                <h2>2006</h2>
                            </div>
                            <div class="body">
                                <p>In 2006 verhuist 999 Games naar het huidige pand in Almere, omdat vooral de opslagcapaciteit van de steeds groeiende voorraad producten te kort schoot.</p>
                                <img class="centered-img" alt="Het hoofdkantoor van 999 Games in Almere" src="https://www.999games.nl/media/wysiwyg/Over-ons/magazijn.jpg">
                            </div>
                        </div>

                        <div class="demo-card demo-card--step1">
                            <div class="head">
                                <h2>2015</h2>
                            </div>
                            <div class="body">
                                <p>999 Games viert met alle leveranciers en hoofdzakelijk buitenlandse relaties groots het 25-jarig jubileum tijdens Sail 2015 in Amsterdam.</p>
                                <img class="centered-img" alt="999 Games jubileum" src="https://www.999games.nl/media/wysiwyg/Over-ons/sail.jpg">
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="last-item-ttl">Het heden</h2>
                        <p class="centered-txt">Michael Bruinsma staat nog steeds aan het roer van een geprofessionaliseerde organisatie met circa 35 medewerkers, die in gespecialiseerde afdelingen zorgen voor een klinkend aanbod van bordspellen, kaartspellen en puzzels. 999 Games profileert zich tegenwoordig als een one-step point of sale met een professionele webshop voor het eigen bedrijf en deelnemende klanten.</p>
                        <img class="centered-img img-fluid" alt="Het team van 999 Games" src="https://www.999games.nl/media/wysiwyg/Over-ons/999games-familie.png">
                    </div>
                </div></div></div></main>
@endsection