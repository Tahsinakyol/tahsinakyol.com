<div class="menu_main">
    <div class="container">
        <div class="menu_inner">
            <div class="left_menu_main">
                <img class="logo_image" src="{{asset('images/system/logo.png')}}" alt="">
                <span class="menuLogoName"><span style="color:#fff">tahsin</span>akyol.com</span>
            </div>
            <div class="menu_right_main" >
                <a class="active_menu_class" href="#home">@lang('Anasayfa')</a>
                <a class="pasive_menu_class" href="#about_me">@lang('Hakkımda')</a>
                <a class="pasive_menu_class" href="#protf">@lang('Portföy')</a>
                <a class="pasive_menu_class" href="#contact">@lang('İletişim')</a>
                <button class="cvMenu_go" onclick="downloadCV()" 
                {{-- href="{{ route('cv-indir') }}" --}}
                >
                <span style="color:#fff">@lang('CV indir')</span></button>

                        


                <div class="selectLanguage">
                    <div class="select_lang_inner" onclick="openItem('openLanguage')">
                        @if (app()->getLocale() == 'en')
                        <img id="languageFlag" src="{{ asset('images/system/en.svg') }}" alt="">
                        <span id="selectedLanguage">@lang('İngilizce')</span>
                        @else
                        <img id="languageFlag" src="{{ asset('images/system/tr.svg') }}" alt="">
                        <span id="selectedLanguage">@lang('Türkce')</span>
                        @endif
                    </div>
                    <div class="absLang" id="openLanguage">
                        <div class="selectted_lang" onclick="changeLanguage('tr'),openItem('openLanguage')">
                            <img src="{{ asset('images/system/tr.svg') }}" alt="">
                            <span>@lang('Türkce')</span>
                        </div>
                        <div class="selectted_lang" onclick="changeLanguage('en'),openItem('openLanguage')">
                            <img src="{{ asset('images/system/en.svg') }}" alt="">
                            <span>@lang('İngilizce')</span>
                        </div>
                    </div>
                </div>
            </div>
            <button onclick="mobileMenuToggle()" class="mobileIconsGenerate"><i class="fa-solid fa-bars-staggered"></i></button>
        </div>
    </div>
</div>
<div class="messageModal" id="messageModal">
    <div class="center_white_modal">
        <img src="{{asset('images/system/like.svg')}}" alt="">
        <div class="textMessageWirite">@lang('Mesajınız Gönderilmiştir')</div>
    </div>
</div>
{{-- mobil menu start --}}
<div class="mobilemenu" id="mobile_menu">
    <div class="mobilemenu_header">@lang('Menüler')</div>
    <div class="absLang" id="openLanguage">
        <div class="selectted_lang" onclick="changeLanguage('tr'),openItem('openLanguage')">
            <img src="{{ asset('images/system/tr.svg') }}" alt="">
            <span>@lang('Türkce')</span>
        </div>
        <div class="selectted_lang" onclick="changeLanguage('en'),openItem('openLanguage')">
            <img src="{{ asset('images/system/en.svg') }}" alt="">
            <span>@lang('İngilizce')</span>
        </div>
    </div>
    <a class="active_menu_class mobiileborder" href="#home">@lang('Anasayfa')</a>
    <a class="pasive_menu_class mobiileborder" href="#about_me">@lang('Hakkımda')</a>
    <a class="pasive_menu_class mobiileborder" href="#protf">@lang('Portföy')</a>
    <a class="pasive_menu_class mobiileborder" href="#contact">@lang('İletişim')</a>
    <button class="dowlandVmOB" onclick="downloadCV()" 
    {{-- href="{{ route('cv-indir') }}" --}}
    >
    <span style="color:#fff">@lang('CV indir')</span></button>
     
       
</div>