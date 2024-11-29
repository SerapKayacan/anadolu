@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="main-wrapper-1" style="background-color:#f6dae0">
            <div class="container main-container-1" style=" height:500px;">
                <div class="row">
                  <p class="about-us-header-1">Sultan Park Evde Sağlık Hizmetleriyle Tanışın.</p>
                    <p class="about-us-detail-1"> Yeni nesil sağlık hizmetleriyle öne çıkan, sektörünün genç ve dinamik şirketi 360 Sağlık; bir Doğan Holding iştirakidir.
                        Türkiye'nin önde gelen gruplarından biri olan Doğan Holding, 1959'dan bu yana hemen her alanda faaliyet göstermektedir. Doğan Grubu; elektrik üretimi, sanayi&ticaret, otomotiv ticaret&pazarlama, finansman&yatırım, internet&eğlence ve gayrimenkul yatırımları alanlarında yenilikçi vizyon ve müşteri odaklı yöntem anlayışını benimser. Değer odaklı bir kurum olan Doğan Grubu, iş dünyasında kurumsal ve etik değerlere sahip çıkarak hem ulusal hem uluslararası kurumlara örnek olur.
                        Doğan Holding, yenilikçi bir bakış açısı getirme hedefiyle yaptığı yatırımlarına şimdi bir yenisini ekledi ve yeni nesil sağlık şirketini hayata geçirdi. 360 Sağlık; kaliteli hizmet anlayışı, uzman sağlık profesyonelleri ve güçlü teknolojik altyapısıyla herkesin 7/24 sağlık hizmetlerine erişebilmesi için çalışmalarını sürdürüyor.</p>
                </div>
            </div>
        </div>
        <div class="main-wrapper-2" style="background-color:#131333;margin-top:-40px;">
            <div class="container main-container-1" style="height:500px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="about-us-header-2">
                            Vizyonumuz
                        </p>
                        <p class="about-us-detail-2">Sağlık hizmeti almak, her bireyin temel hakkıdır. Biz de bu hakkı koruma ve iyileştirme sorumluluğunu taşıyoruz. Teknolojik, hasta odaklı, çağdaş, güvenilir ve kaliteli sağlık hizmetinin, uzaktan ve/veya hastanın bulunduğu yerde verilmesini hedefliyoruz. Türkiye'nin her noktasına ulaşacak multidisipliner ekibimiz ve teknolojik altyapımız ile uzaklıkları aşarak, her türlü uzmanlık branşında, kişilerin ihtiyacı olan sağlık hizmetlerine 7 gün 24 saat ulaşabilmesini sağlayacağız.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-wrapper-2" >
            <div class="container main-container-1" style="height:700px;width:1000px;background-color:#e47388;margin-top:-150px;border-radius:50px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p class="about-us-header-3">
                            Misyonumuz
                        </p>
                        <p class="about-us-detail-3">
                            Türkiye'de yaşayan her bireyin sağlık hizmetlerine kolay ve hızlıca erişebilmesini amaçlıyoruz.
                            Öncü bir kurum olarak tüm Türkiye'ye kaliteli ve güvenli bir şekilde yerinde veya uzaktan sağlık hizmeti sunma hedefini benimsiyoruz. Hasta memnuniyetini ve toplum sağlığını her şeyin önünde tutarak geleceğin sağlık hizmetlerini şekillendirmeyi hedefliyoruz.
                        </p>
                        <img src="{{ asset('assets/frontend/images/poppy-flowers-pink-3840x2160-12317.jpg') }}" alt="" class="about-us-img">
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
