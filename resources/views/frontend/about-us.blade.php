@extends('frontend.layouts.master')
@section('content')
    <main style="margin-bottom:-150px;">
        <div class="row justify-content-center first-row px-4 pb-0">
            <div class="col-lg-8 col-md-8 col-sm-12 text-center mb-4">
                <p class="about-us-header-1">Usta Renovasyon ve Epoxy ile Tanışın.</p>
                <p class="about-us-detail-1 font-size-md">
                    Firmamız, Epoksi ve PVC Döşeme, Boya/Badana, Tadilat ve Isı Yalıtımı ile Mantolama alanlarında uzmanlaşmış bir kuruluş olarak,
                    sektörde yılların getirdiği tecrübe ve güvenle faaliyet göstermektedir. Müşteri memnuniyetini ön planda tutarak, her projede kaliteli
                    işçilik ve yenilikçi çözümler sunmayı ilke edindik. Her biri alanında deneyimli ve uzman kadromuzla, estetik ve fonksiyonelliği bir araya
                    getirerek yaşam ve çalışma alanlarınızı daha konforlu, dayanıklı ve modern hale getiriyoruz.
                    Hedefimiz, sadece hizmet sunmak değil, aynı zamanda müşterilerimizin hayallerini gerçekleştirmelerine destek olmaktır.
            </div>
        </div>
        <div class="row justify-content-center px-4"
             style="background-color:#143866; min-height:550px; position:relative; z-index:1;">
            <div class="col-lg-8 col-md-8 col-sm-12 text-center text-white ">
                <p class="about-us-header-2">Vizyonumuz</p>
                <p class="about-us-detail-2 text-center font-size-md">
                    Yenilikçi ve sürdürülebilir çözümlerle sektörde fark yaratmak, inşaat ve tadilat sektöründe lider konuma gelerek müşterilerimizin ilk
                    tercihi olmak. Hem bireysel hem de kurumsal müşterilerimize sunduğumuz hizmetlerde, kalite ve güvenilirliği bir arada sunarak uzun vadeli
                    iş birlikleri kurmayı hedefliyoruz.
                    Teknolojiyi yakından takip ederek ve sürekli gelişime açık bir yapıyla, sektörde öncü bir marka olmayı amaçlıyoruz.
                </p>
            </div>
        </div>
        <div class="row justify-content-center mb-4 third-row px-0 ">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <p class="about-us-header-3 text-center">Misyonumuz</p>
                <p class="about-us-detail-3 text-center font-size-md">
                    Müşteri ihtiyaçlarını en iyi şekilde analiz ederek, beklentilerin ötesine geçen hizmetler sunmak.
                    Çalışmalarımızda kalite standartlarından asla ödün vermeden, çevre dostu malzeme ve teknikler kullanarak
                    projelerimizi hayata geçiriyoruz. Her projeye özel çözümler üreterek, müşteri memnuniyetini en üst seviyede tutmayı
                    hedefliyoruz. Aynı zamanda çalışanlarımızın gelişimine katkı sağlayarak, profesyonel ve güçlü bir ekip ruhu ile sektöre değer katıyoruz.
                    Sizin için en iyisini hedefleyen bir anlayışla, mekanlarınıza değer katmaya ve yaşam kalitenizi yükseltmeye devam ediyoruz.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                <img src="{{ asset('assets/frontend/images/img-1.jpeg') }}" alt="About Us Image"
                     class="about-us-img img-fluid mt-3">
                    </div>
                    <div class="col-lg-6">
                <img src="{{ asset('assets/frontend/images/img-2.jpeg') }}" alt="About Us Image"
                     class="about-us-img img-fluid mt-3">
                    </div>
                    <div class="col-lg-12">
                <img src="{{ asset('assets/frontend/images/img-3.jpeg') }}" alt="About Us Image"
                     class="about-us-img img-fluid mt-3">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
