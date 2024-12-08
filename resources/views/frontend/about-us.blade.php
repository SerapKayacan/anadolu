@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="row justify-content-center px-4" style="background-color:#f6dae0;">
            <div class="col-lg-8 col-md-8 col-sm-12 text-center mb-4">
                <p class="about-us-header-1">Sultan Park Evde Sağlık Hizmetleriyle Tanışın.</p>
                <p class="about-us-detail-1 font-size-md">
                    Sultan Evde Sağlık Hizmetleri olarak, yaşam kalitesini artırmaya ve bireylerin sağlıklı bir hayat
                    sürmesine destek olmaya odaklanıyoruz.
                    Evde bakım ve sağlık hizmetlerimiz, uzman doktorlardan hemşirelere, hasta bakıcılardan diğer sağlık
                    profesyonellerine kadar geniş bir ekip
                    çalışmasıyla sunulmaktadır. Hizmetlerimiz, bireyin mahremiyetine ve ihtiyaçlarına saygı göstererek
                    güvenli bir bakım ortamı yaratmayı hedefler.
                    Trakeostomi, glutatyon tedavisi, pansuman, enjeksiyon gibi kapsamlı tıbbi bakım hizmetlerinden,
                    yenidoğan bakımı ve refakatçi hizmetlerine kadar birçok
                    alanda profesyonel destek sağlıyoruz. Tüm hizmetlerimizde etik değerlere bağlı ve hasta haklarını ön
                    planda tutarak kaliteli ve eşit erişilebilir
                    bir sağlık hizmeti sunuyoruz.
                </p>
            </div>
        </div>
        <div class="row justify-content-center px-4"
             style="background-color:#131333; min-height:550px; position:relative; z-index:1;">
            <div class="col-lg-8 col-md-8 col-sm-12 text-center text-white ">
                <p class="about-us-header-2">Vizyonumuz</p>
                <p class="about-us-detail-2 text-center font-size-md">
                    Evde bakım ve sağlık hizmetlerinde sektörde öncü bir kuruluş olarak tanınmak, sağlık alanında
                    yenilikçi ve hasta odaklı çözümlerle fark yaratmak istiyoruz.
                    Sultan Evde Sağlık Hizmetleri, etik değerleri gözeten, teknolojiyi etkin kullanan ve sürdürülebilir
                    hizmet anlayışıyla Türkiye’nin dört bir yanında daha fazla bireye
                    ulaşmayı hedeflemektedir. Toplumun her kesimine eşit, erişilebilir ve yüksek kaliteli sağlık
                    hizmetleri sunarak, evde bakım alanında güvenilir bir marka olarak
                    ulusal ve uluslararası ölçekte örnek teşkil etmek vizyonumuzdur.
                </p>
            </div>
        </div>
        <div class="row justify-content-center mb-4 third-row px-4">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <p class="about-us-header-3 text-center">Misyonumuz</p>
                <p class="about-us-detail-3 text-center font-size-md">
                    Hastalarımızın yaşam kalitesini artırmak için evde güvenilir, hızlı ve profesyonel sağlık hizmetleri
                    sunmayı amaçlıyoruz. Mahremiyet, güvenlik ve bireysel ihtiyaçlara
                    duyduğumuz saygı ile sağlık hizmetlerini herkes için erişilebilir kılmayı hedefliyoruz.
                    Multidisipliner yaklaşımımız sayesinde, ekip çalışmasının gücünü en üst düzeyde
                    kullanarak hastalarımıza en iyi bakım deneyimini sağlıyoruz. Her bireyin hak ettiği kaliteli sağlık
                    hizmetine ulaşabilmesi için yenilikçi çözümler geliştiren ve insan
                    odaklı bir yaklaşımı benimseyen bir kuruluş olarak çalışıyoruz.
                </p>
                <img src="{{ asset('assets/frontend/images/hero-img.jpg') }}" alt="About Us Image"
                     class="about-us-img img-fluid mt-3">
            </div>
        </div>
    </main>
@endsection
