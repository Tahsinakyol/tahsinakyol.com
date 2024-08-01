@extends('template.main')
@section('content')

<section id="home">
    <div class="indexSlider_outher">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="left_index_slider">
                        <img class="slider_avatar" src="{{asset('images/system/avatar.png')}}" alt="">
                        <img class="abs_one_slider animate" src="{{asset('images/system/react.png')}}" alt="">
                        <img class="abs_two_slider animate" src="{{asset('images/system/css.webp')}}" alt="">
                        <img class="abs_thr_slider animate" src="{{asset('images/system/html.png')}}" alt="">
                        <img class="abs_four_slider animate" src="{{asset('images/system/laravel.png')}}" alt="">
                        <img class="abs_five_slider animate" src="{{asset('images/system/js.png')}}" alt="">
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
                    <div class="slider_rightMain">
                        <h1>@lang('Merhaba , Ben')</h1>
                        <span>Tahsin Akyol</span>
                        <div class="textDetail_Explains">A
                            <span style="color:#1cbe59;">Creative Frontend Developer</span>
                            From
                            <span style="color:#8067f0">Turkey</span>
                        </div>
                        <div class="textDetail_Explains" style="font-size:26px">
                            @lang('Öğrenmeye istekli'),@lang('Çalışkan kendini geliştirmeyi seven'),
                            @lang('Sürekli araştırmacı') Frontend Developer
                        </div>
                        <div class="slide_right_bottom">

                            <a class="about_btn" href="#about_me">@lang('Hakkımda')</a>
                            <div class="firstAndLast_tr"></div>
                            <button class="social_icons" onclick="instagram()">
                                <i class="fa-brands fa-instagram"></i>
                            </button>
                            <button class="social_icons" onclick="linkedin()">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </button>
                            <button class="social_icons" onclick="github()">
                                <i class="fa-brands fa-github"></i>
                            </button>
                            <div class="firstAndLast_tr"></div>
                        </div>
                    </div>
                </div>
                <div class="mouseEffect">
                    <div class="mouseEffet ">
                        <div class=" mouseCenter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bge_section" id="about_me">
    <div class="second_line_index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <div class="in_secondLine_inner">
                        <div class="images_secondLineTops" style="background-image:url('images/system/1.png')">
                            <img src="{{asset('images/system/aim.svg')}}" alt="">
                        </div>
                        <div class="textSecond_aim">@lang('Mükemmel Piksel')</div>
                        <div class="spanSecondline_top">
                            <span class="span_threeSecondLine">@lang('Masaüstünde iyi çalışan web siteleri')</span>
                            <span class="span_threeSecondLine">
                                @lang('tasarlamanın en yaygın yöntemleri duyarlı ve')</span>
                            <span class="span_threeSecondLine">@lang('uyarlanabilir tasarımdır.')</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" data-aos="fade-down">
                    <div class="in_secondLine_inner">
                        <div class="images_secondLineTops" style="background-image:url('images/system/2.png')">
                            <img src="{{asset('images/system/paint.svg')}}" alt="">
                        </div>
                        <div class="textSecond_aim">@lang('Yüksek kalite')</div>
                        <div class="spanSecondline_top">
                            <span class="span_threeSecondLine">@lang('Masaüstünde iyi çalışan web siteleri')</span>
                            <span class="span_threeSecondLine">
                                @lang('tasarlamanın en yaygın yöntemleri duyarlı ve')</span>
                            <span class="span_threeSecondLine">@lang('uyarlanabilir tasarımdır.')</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <div class="in_secondLine_inner">
                        <div class="images_secondLineTops" style="background-image:url('images/system/3.png')">
                            <img src="{{asset('images/system/idea.svg')}}" alt="">
                        </div>
                        <div class="textSecond_aim">@lang('Harika fikir')</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bge_section">
    <img class="line_the_abs_left" src="{{asset('images/system/thirt_left.png')}}" alt="" data-aos="zoom-in">
    <img class="line_the_abs_right" src="{{asset('images/system/third_right.png')}}" alt="" data-aos="zoom-in">
    <div class="container">
        <div class="col-12" style="padding: 30px 0;min-height:10px">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" data-aos="fade-down">
                    <div class="left_four_index">
                        <div class="card_for_left_abs">
                            <h1>2</h1>
                            <span>@lang('Başarı Yılları')</span>
                        </div>
                        <div class="card_for_right_abs">
                            <h1>+70</h1>
                            <span>@lang('Toplam Proje')</span>
                        </div>
                        <img src="{{asset('images/system/klavye.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" data-aos="fade-down">
                    <div class="right_about_main">
                        <span>@lang('Ben Frontend Developer')</span>
                        <p>@lang('Dilediğiniz Her Şeyi Tasarlayabilirim')</p>
                        <div class="indeText_aboutLine">
                            <div class="textGenerate_about_intro">
                                @lang('Selamlar! Ben bir web tasarımcısıyım ve işime çok tutkulu ve adadım.')
                            </div>
                            <div class="textGenerate_about_intro">
                                @lang('Profesyonel bir web geliştiricisi olarak 2 yıllık tecrübemle, projenizi')
                            </div>
                            <div class="textGenerate_about_intro">
                                @lang('başarıya ulaştırmak için gerekli bilgi ve becerileri edindim. Tartışma ve')
                            </div>
                            <div class="textGenerate_about_intro">
                                @lang('işbirliğinden tasarım sürecinin her adımından keyif alıyorum.')
                            </div>

                        </div>
                        <a class="cvMenu_go" href="#contact"><span style="color:#fff">@lang('İletişim')</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bge_section" id="protf">
    <img class="line_the_abs_left" src="{{asset('images/system/fourleft.png')}}" alt="" data-aos="zoom-in">
    <img class="line_the_abs_right" src="{{asset('images/system/fourrigh.png')}}" alt="" data-aos="zoom-in">
    <div class="container">
        <div class="col-12" style="padding: 30px 0;min-height:10px">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="left_four_index_section">
                        <span>@lang('Frontend Hayattır')</span>
                        <h1>@lang('Kendimi Güncel Tutmak İçin Düzenli Olarak Beceri Geliştiriyorum')</h1>
                        <div class="textFourLineBottom">
                            @lang('Yeni Tasarımları Araştırırım ve aynısını yapmaya çalışırım')
                        </div>
                        <div class="progressBar_mainTop">
                            <span>React Native</span>
                            <div class="skill">

                                <div class="skill-rate">
                                    <div class="skill-rate-inner" style="background-color: #5ed3f3;"></div>
                                </div>
                                <div class="rate-text">0%</div>
                            </div>
                            <span>CSS / Html</span>
                            <div class="skill">
                                <div class="skill-rate">
                                    <div class="skill-rate-inner" style="background-color: #0169ae;"></div>
                                </div>
                                <div class="rate-text">0%</div>
                            </div>
                            <span>javaScript</span>
                            <div class="skill">
                                <div class="skill-rate">
                                    <div class="skill-rate-inner" style="background-color: #c9ae2e;"></div>
                                </div>
                                <div class="rate-text">0%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bge_section">
    <img class="line_the_abs_right" src="{{asset('images/system/right_p.png')}}" alt="" data-aos="zoom-in">
    <div class="container">
        <div class="col-12" style="padding: 30px 0;min-height:10px">
            <div class="col-12 centerHeaderText">@lang('Ne Yapıyorum ?')</div>
            <div class="row">
                @php
                $bge = asset('images/card/1.png');
                $icon_1=asset('images/card/creative.svg');
                $header_1 = __('Yaratıcı Tasarım');
                $span11= __('Web tasarımı, internette görüntülenen');
                $span12= __('web sitelerinin tasarımını ifade eder.');
                $span13= __('Genellikle Web sitesi geliştirmenin');
                $span14= __('Kullanıcı deneyimi yönlerini ifade eder');
                @endphp
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin-top: 20px;" data-aos="fade-down">
                    <x-card-index :imageUrl="$bge" :icon="$icon_1" :header="$header_1" :span1="$span11" :span2="$span12" :span3="$span13" :span4="$span14" />
                </div>
                @php
                $bge2 = asset('images/card/3.png');
                $icon_2=asset('images/system/react.png');
                $header_2 = __('Mobil Tasarım');
                $span21= __('Mobil Tasarımı');
                $span22= __('birçok çeşitli mobil uygulama');
                $span23= __('tasarımının React Native Expo ile');
                $span24= __('farklı tasarımlar yapabilirim');
                @endphp
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin-top: 20px;" data-aos="fade-up">
                    <x-card-index :imageUrl="$bge2" :icon="$icon_2" :header="$header_2" :span1="$span21" :span2="$span22" :span3="$span23" :span4="$span24" />
                </div>
                @php
                $bge3 = asset('images/card/2.png');
                $icon_3=asset('images/system/laravel.png');
                $header_3 = __('PHP Tasarım');
                $span31= __('laravel ile Component');
                $span32= __('controller yapılarını kullanarak');
                $span33= __('güzel Web projelerinin');
                $span34= __('Frontend alanını yapabilirim');
                @endphp
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin-top: 20px;" data-aos="fade-down">
                    <x-card-index :imageUrl="$bge3" :icon="$icon_3" :header="$header_3" :span1="$span31" :span2="$span32" :span3="$span33" :span4="$span34" />
                </div>
                @php
                $bge4 = asset('images/card/4.png');
                $icon_4=asset('images/system/JS.png');
                $header_4 = __('JavaScript');
                $span41= __('Javascript ile fonksiyonları');
                $span42= __('kullanışlı ve etkili');
                $span43= __('birşekilde kodlayabilirim ve');
                $span44= __('daha fazlası için araştırırım.');
                @endphp
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin-top: 20px;" data-aos="fade-up">
                    <x-card-index :imageUrl="$bge4" :icon="$icon_4" :header="$header_4" :span1="$span41" :span2="$span42" :span3="$span43" :span4="$span44" />
                </div>
            </div>
            <div class="col-12" style="padding: 30px 0;min-height:10px" id="contact">
                <div class="col-12 centerHeaderText">@lang('Projelerim')</div>
                <div class="col-12 sliderProjects">
                   <div style="margin-right:25px">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.falmuha.falmuha&pli=1" class="in_slider">
                            Fallmuha App
                        </a>
                    </div>
                        <div style="margin-right:25px">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.bilebilinmi" class="in_slider">
                            Bilebilinmi App
                        </a> 
                    </div>
                    <div style="margin-right:25px">  
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.vipchat.live&hl=en" class="in_slider">
                            Vipchat App
                        </a>
                    </div>
                    <div style="margin-right:25px">  
                        <a target="_blank" href="https://gizemliyolculuk.com/" class="in_slider">
                            GizemliYolculuk
                        </a>
                    </div>
                    <div style="margin-right:25px">   
                        <a target="_blank" href="https://www.icondeliveryllc.com/" class="in_slider">
                            icondeliveryllc
                        </a>
                    </div>
            </div>


        </div>
    </div>
</section>
<section class="bge_section" id="contact" style="padding-bottom:30px">
    <div class="container">
        <div class="col-12">
            <div class="col-12 centerHeaderText" style="margin-bottom:40px">@lang('Bana Ulaşın')</div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="contact_left">
                        <div class="icons_contat_top">
                            <div class="circleContact_icon" style="background-color: #fedfd7;color:#f75023">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact_leftText">
                                <p>@lang('Adres')</p>
                                <span>Bayraklı,Izmir</span>
                            </div>
                        </div>
                        <div class="icons_contat_top">
                            <div class="circleContact_icon" style="background-color: #ddf5e6;color:#1cbe59 ">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact_leftText">
                                <p>@lang('Email')</p>
                                <span>tahsinakyool@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <form method="POST" action="/form-gonder">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input class="inputContact" type="text" name="ad" placeholder="{{__('Adınız')}}" required/>
                                @error('ad')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input class="inputContact" type="e-mail" name="eposta" placeholder="{{__('E-posta Adresiniz')}}" required/>
                                @error('eposta')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input class="inputContact" type="tel" name="telefon" placeholder="{{__('Telefon Numaranız')}}" required/>
                                @error('telefon')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input class="inputContact" type="text" name="konu" placeholder="{{__('Konu')}}" required/>
                                @error('konu')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <textarea class="areaContact" name="mesaj" placeholder="{{__('Mesajınız')}}" required></textarea>
                                @error('mesaj')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="cvMenu_go" type="submit" style="height: 60px!important;width:250px;font-size:26px">
                                    <span style="color:#fff">@lang('Gönder')</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>
</section>

@endsection