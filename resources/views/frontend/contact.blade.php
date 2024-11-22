@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="main-wrapper-1" style="background-color:#f3e1de">
            <div class="container main-container-1" style=" height:100%;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-card-header">
                            <p class="contact-header">Bizimle İletişime Geçin</p>
                            <p class="contact-bottom-header">Sultan Park ile hem kliniğimizde hem evlerinizde
                                sizlerleyiz</p>
                        </div>
                        <div class="card contact-card">
                            <div class="contact-card-head" style="display:flex;">
                                <div style="flex:1">
                                    <h1 class="contact-card-headers">Adress</h1>
                                    <p class="contact-card-address">Cihangir, Meşrutiyet Cd. No:65 D:b; <br>34315
                                        Avcılar/İstanbul</p>
                                    <h1 class="contact-card-headers">İletişim</h1>
                                    <p class="contact-card-contact-number">0535 469 42 34</p>
                                    <h1 class="contact-card-headers">Sosyal Medya</h1>

                                    <div class="contact-card-social-media">
                                        <div>
                                            <a style="text-decoration: none;background-color:#dc6a38; border-radius:20px; ;padding-left:3px;padding-bottom:3px ;margin-left:5px;margin-top:-1px;margin-bottom:8px;color:white;"
                                               href=""><i class="bi bi-facebook">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                         viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                         focusable="false" class=""><title>facebook</title>
                                                        <path
                                                            d="M32 16.097c0-8.891-7.163-16.097-16-16.097s-16 7.206-16 16.097c0 8.036 5.85 14.695 13.5 15.903v-11.249h-4.062v-4.655h4.062v-3.546c0-4.034 2.388-6.263 6.044-6.263 1.749 0 3.582 0.315 3.582 0.315v3.962h-2.019c-1.987 0-2.606 1.242-2.606 2.515v3.019h4.437l-0.709 4.653h-3.728v11.25c7.65-1.207 13.5-7.867 13.5-15.903z"></path>
                                                    </svg>
                                                </i></a>
                                            <a style="text-decoration: none;background-color:#dc6a38; border-radius:15px;padding-left:3px;padding-bottom:3px ;margin-left:8px;margin-top:-1px;margin-bottom:8px;color:white;"
                                               href=""><i class="bi bi-instagram"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>instagram</title>
                                                    <path
                                                        d="M16.009 2.882c4.276 0 4.782 0.019 6.464 0.094 1.563 0.069 2.407 0.331 2.969 0.55 0.744 0.288 1.282 0.638 1.838 1.194 0.563 0.563 0.906 1.094 1.194 1.838 0.219 0.563 0.481 1.413 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.464 0 4.276-0.019 4.782-0.094 6.464-0.069 1.563-0.331 2.407-0.55 2.969-0.288 0.744-0.638 1.281-1.194 1.838-0.563 0.563-1.094 0.906-1.838 1.194-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.464 0.094-4.276 0-4.782-0.019-6.464-0.094-1.563-0.069-2.407-0.331-2.969-0.55-0.744-0.288-1.282-0.638-1.838-1.194-0.563-0.563-0.906-1.094-1.194-1.838-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.464 0-4.276 0.019-4.782 0.094-6.464 0.069-1.563 0.331-2.407 0.55-2.969 0.288-0.744 0.638-1.282 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.194 0.563-0.219 1.413-0.481 2.969-0.55 1.682-0.075 2.188-0.094 6.464-0.094zM16.009 0c-4.345 0-4.888 0.019-6.595 0.094-1.7 0.075-2.869 0.35-3.882 0.744-1.056 0.413-1.95 0.956-2.838 1.85-0.894 0.888-1.438 1.782-1.85 2.832-0.394 1.019-0.669 2.182-0.744 3.882-0.075 1.713-0.094 2.257-0.094 6.601s0.019 4.888 0.094 6.595c0.075 1.7 0.35 2.869 0.744 3.882 0.413 1.056 0.956 1.95 1.85 2.838 0.888 0.888 1.782 1.438 2.832 1.844 1.019 0.394 2.182 0.669 3.882 0.744 1.707 0.075 2.25 0.094 6.595 0.094s4.888-0.019 6.595-0.094c1.7-0.075 2.869-0.35 3.882-0.744 1.050-0.406 1.944-0.956 2.832-1.844s1.438-1.782 1.844-2.832c0.394-1.019 0.669-2.182 0.744-3.882 0.075-1.707 0.094-2.25 0.094-6.595s-0.019-4.888-0.094-6.595c-0.075-1.7-0.35-2.869-0.744-3.882-0.394-1.063-0.938-1.957-1.832-2.844-0.888-0.888-1.782-1.438-2.832-1.844-1.019-0.394-2.182-0.669-3.882-0.744-1.713-0.081-2.257-0.1-6.601-0.1z"></path>
                                                    <path
                                                        d="M16.009 7.783c-4.538 0-8.22 3.682-8.22 8.22s3.682 8.22 8.22 8.22c4.538 0 8.22-3.682 8.22-8.22s-3.682-8.22-8.22-8.22zM16.009 21.335c-2.944 0-5.332-2.388-5.332-5.332s2.388-5.332 5.332-5.332c2.944 0 5.332 2.388 5.332 5.332s-2.388 5.332-5.332 5.332z"></path>
                                                    <path
                                                        d="M26.474 7.458c0 1.063-0.863 1.919-1.919 1.919-1.063 0-1.919-0.863-1.919-1.919 0-1.063 0.863-1.919 1.919-1.919s1.919 0.863 1.919 1.919z"></path>
                                                </svg>
                                            </a>
                                            <a style="text-decoration: none;background-color:#dc6a38; border-radius:15px;padding-left:3px;padding-bottom:3px ;margin-left:8px;margin-top:-1px;margin-bottom:8px;color:white;"
                                               href=""><i class="bi bi-twitter-x">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         fill="currentColor"
                                                         class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                                    </svg>
                                                </i></a>
                                            <a style="text-decoration: none; background-color:#dc6a38; border-radius:15px; padding-right:3px;padding-left:3px;padding-bottom:3px ;margin-left:8px;margin-top:-1px;margin-bottom:8px;color:white;"
                                               href=""><i class="bi bi-youtube">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         fill="currentColor"
                                                         class="bi bi-youtube" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                                    </svg>
                                                </i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-card-map"></div>
                                <div style="flex:1">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.685490895479!2d28.70109417598258!3d40.98836722065076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7f639f9cfc1%3A0x34e2cab87731fab4!2sSultan%20Evde%20Sa%C4%9Fl%C4%B1k%20Hizmetleri!5e0!3m2!1str!2str!4v1732309529535!5m2!1str!2str"
                                        width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                            <hr>
                            <div class="contact-card-body">
                                <p class="contact-card-body-header">Hemen Yazın</p>
                                <form action="" style="display:flex;">
                                    <div style="flex:1;">
                                    <p class="form-headers">Adınız Soyadınız</p>
                                    <input class="contact-name-surname" type="text" placeholder="Adınızı Soyadınızı Giriniz" required>
                                    </div>
                                    <div style="flex:1;">
                                    <p class="form-headers">Telefon Numarası</p>
                                    <div style="display: flex; border: 1px solid #ccc; border-radius: 10px; overflow: hidden; width: 300px;">
                                        <!-- Country Code Dropdown -->
                                        <select class="contact-select-box" name="phone-code" required style=" border: none; background: #f9f9f9; font-size: 16px;width:85px;">
                                            <option value="+90" selected><span class="area-code">TR</span> +90</option> <!-- Default: Türkiye -->
                                            <option value="+1"><span class="area-code">US</span> +1 (USA)</option>
                                            <option value="+44"><span class="area-code">UK</span> +44 (United Kingdom)</option>
                                            <option value="+49"><span class="area-code">DE</span> +49 (Germany)</option>
                                            <option value="+33"><span class="area-code">FR</span> +33 (France)</option>
                                            <option value="+91"><span class="area-code">IN</span> +91 (India)</option>
                                            <option value="+81"><span class="area-code">JP</span> +81 (Japan)</option>
                                            <option value="+61"><span class="area-code">AU</span> +61 (Australia)</option>
                                            <option value="+55"><span class="area-code">BR</span> +55 (Brazil)</option>
                                            <option value="+86"><span class="area-code">CN</span> +86 (China)</option>
                                        </select>
                                        <!-- Phone Number Input -->
                                        <input class="contact-input-box"
                                               type="tel"
                                            placeholder="Telefon Numarası"
                                            required
                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                            title="Lütfen geçerli bir telefon numarası girin (ör. 555-123-4567)">
                                    </div>
                                    </div>
                                    <div>
                                    <p class="form-headers">Mesajınız</p>
                                    <input class="contact-message-box col-12" type="text" placeholder="Mesajınızı Giriniz" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-wrapper-2">
            <div class="container main-container-1" style="height:500px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
