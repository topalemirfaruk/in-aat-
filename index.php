<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARSNOVA YAPI - Yeniliğin Mimarı</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <section class="hero">
            <div class="container hero-container">
                <div class="hero-text">
                    <h1>Arslan Kararlılığıyla,<br>Mühendislik Dehasıyla:<br>Yapı Sanatında Yeni Ufuklar</h1>
                    <p>Kararlılık ve dehanın buluştuğu noktada, yapı sanatında yeni ufuklar açıyoruz. İnşaat mühendisliğindeki uzmanlığımızla, her zorluğu fırsata dönüştürüyor, geleceği bugünden inşa ediyoruz.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn-primary">BİZE ULAŞIN</a>
                        <a href="#" class="btn-play">
                            <span class="play-icon">▶</span>
                        </a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <!-- Real building image -->
                    <div class="building-placeholder">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Modern Apartment Building" class="building-img">
                    </div>
                    
                    <div class="rating-card">
                        <div class="rating-header">Derecelendirme</div>
                        <div class="stars">★★★★★</div>
                        <div class="rating-score">4.9</div>
                        <div class="rating-sub">Müşteri Puanları</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="about-us">
            <div class="container about-container">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business Handshake" class="handshake-img">
                </div>
                <div class="about-content">
                    <div class="about-tagline">BİZ KİMİZ ?</div>
                    <h2 class="about-title">ARSNOVA YAPI</h2>
                    <p class="about-desc">İstanbul’da kat karşılığı inşaat ve taahhüt işleri yaparak güven inşa ediyoruz. Geçmişin bilgeliğini geleceğin vizyonunu birleştiriyoruz.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span>&#10140;</span> <!-- Right Arrow -->
                            </div>
                            <div class="feature-text">
                                <h3>Tecrübe ve Güven</h3>
                                <p>Yılların verdiği bilgi birikimi ile sektörde güçlü bir yer edinerek, estetik ve dayanıklı yapılar inşa ediyoruz.</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <span>&#10140;</span> <!-- Right Arrow -->
                            </div>
                            <div class="feature-text">
                                <h3>Müşteri Memnuniyeti</h3>
                                <p>Müşterilerimizin ihtiyaçlarını en iyi şekilde karşılamak için yenilikçi çözümler sunuyor ve projelerimizi zamanında teslim ediyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services">
            <div class="container">
                <div class="services-header">
                    <h2>Yaşama Değer Katıyoruz!</h2>
                    <p>İstanbul’da kat karşılığı inşaat ve taahhüt işleri yaparak güven inşa ediyoruz. Geçmişin bilgeliğini geleceğin vizyonunu birleştiriyoruz.</p>
                </div>
                
                <div class="services-grid">
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="service-icon-box dark">
                            <!-- Building Icon -->
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                                <line x1="9" y1="2" x2="9" y2="22"></line>
                                <line x1="15" y1="2" x2="15" y2="22"></line>
                                <line x1="4" y1="6" x2="20" y2="6"></line>
                                <line x1="4" y1="10" x2="20" y2="10"></line>
                                <line x1="4" y1="14" x2="20" y2="14"></line>
                                <line x1="4" y1="18" x2="20" y2="18"></line>
                            </svg>
                        </div>
                        <h3>Müteahhitlik Hizmetleri</h3>
                        <p>İnşaat sektöründe yıllardır başarıyla sürdürdüğümüz projelere bir yenisini daha eklemek için her zaman hazırız.</p>
                        <a href="#" class="btn-service-outline">İLETİŞİM</a>
                    </div>

                    <!-- Card 2 (Featured) -->
                    <div class="service-card featured">
                        <div class="service-icon-box light">
                            <!-- Architecture/Structure Icon -->
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <path d="M10 6.5h4"></path>
                                <path d="M17.5 10v4"></path>
                                <path d="M6.5 10v8h7.5"></path>
                            </svg>
                        </div>
                        <h3>Mimarlık Hizmetleri</h3>
                        <p>Arsnova Yapı uzun ömürlü ürünlerle büyüleyici atmosferler yaratabilmek için size en seçkin döşeme, duvar kaplamaları ve dekoratif ürünleri sunar.</p>
                        <a href="#" class="btn-service-solid">İLETİŞİM</a>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card">
                        <div class="service-icon-box dark">
                            <!-- Smart Living/Geometric Icon -->
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                <path d="M2 17l10 5 10-5"></path>
                                <path d="M2 12l10 5 10-5"></path>
                            </svg>
                        </div>
                        <h3>Akıllı Yaşam Alanları</h3>
                        <p>Yürüteceğimiz her yeni projede insan ile uyumu daha fazla olan yaşam alanları yaratmak için, yarından sonrasına da hazır projeler sunuyoruz.</p>
                        <a href="#" class="btn-service-outline">İLETİŞİM</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-choose-us">
            <div class="container why-container">
                <div class="why-content">
                    <div class="about-tagline">ARSNOVA YAPI</div>
                    <h2 class="why-title">Neden Arsnova Yapı?</h2>
                    <ul class="why-list">
                        <li>
                            <div class="why-text">
                                <strong>KURUCU DENEYİMİ:</strong> 10+ yıllık sektör tecrübesi
                            </div>
                        </li>
                        <li>
                            <div class="why-text">
                                <strong>ŞEFFAF SÜREÇ:</strong> Her aşamayı an be an takip edin
                            </div>
                        </li>
                        <li>
                            <div class="why-text">
                                <strong>MODERN TEKNOLOJİ:</strong> En güncel inşaat teknikleri
                            </div>
                        </li>
                        <li>
                            <div class="why-text">
                                <strong>ESNEK YAKLAŞIM:</strong> Projenize özel çözümler
                            </div>
                        </li>
                        <li>
                            <div class="why-text">
                                <strong>SIKI BÜTÇE KONTROLÜ:</strong> Sürpriz maliyet yok
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="why-image">
                    <img src="https://images.unsplash.com/photo-1527838832700-5059252407fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Istanbul Cityscape" class="city-img">
                    <div class="year-badge">
                        <span class="year">1955</span>
                        <span class="year-text">Yılından Beridir</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="projects">
            <div class="container projects-container">
                <!-- Header Block -->
                <div class="project-header-block">
                    <div class="project-tagline">BAĞDAT CADDESİ REFERANSLARIMIZ</div>
                    <h2 class="project-title">Bölgedeki prestijli konut projelerimizle kaliteli yaşam alanları sunuyoruz.</h2>
                </div>

                <!-- Project Cards -->
                <!-- 2016 -->
                <div class="project-card">
                    <div class="project-year">2016</div>
                    <p class="project-desc">Neşe Apartmanı Vardar Sk. Caddebostan 2016 da teslim edilmiştir.</p>
                    <span class="project-units">29 DAİRE</span>
                </div>

                <!-- 2017 -->
                <div class="project-card">
                    <div class="project-year">2017</div>
                    <p class="project-desc">Dostlar Apartmanı Ethem Efendi Cad. Hamam Sk. Erenköy 2017 de teslim edilmiştir.</p>
                    <span class="project-units">28 DAİRE</span>
                </div>

                <!-- 2018 -->
                <div class="project-card">
                    <div class="project-year">2018</div>
                    <p class="project-desc">Özlem Apartmanı Vardar Sk. Caddebostan 2018 de teslim edilmiştir.</p>
                    <span class="project-units">12 DAİRE</span>
                </div>

                <!-- 2019 -->
                <div class="project-card">
                    <div class="project-year">2019</div>
                    <p class="project-desc">Hayat Apartmanı Taşmektep sk. Göztepe Aralık 2019 da teslim edilmiştir.</p>
                    <span class="project-units">24 DAİRE</span>
                </div>

                <!-- 2020 -->
                <div class="project-card">
                    <div class="project-year">2020</div>
                    <p class="project-desc">Çayırlıoğlu Apartmanı İclal Karabekir Sk. Suadiye Aralık 2020 de teslim edilmiştir.</p>
                    <span class="project-units">31 DAİRE + 2 VİLLA</span>
                </div>

                <!-- 2021 -->
                <div class="project-card">
                    <div class="project-year">2021</div>
                    <p class="project-desc">Şerafet Apartmanı Şerafettin Sk. Erenköy Aralık 2021 de teslim edilmiştir.</p>
                    <span class="project-units">21 DAİRE</span>
                </div>

                <!-- 2022 -->
                <div class="project-card">
                    <div class="project-year">2022</div>
                    <p class="project-desc">Hayat Apartmanı Kaşaneler Sokak – Erenköy Ekim 2022 de imalatına başlanmıştır. Kasım 2023'de teslim.</p>
                    <span class="project-units">30 DAİRE + 2 DÜKKAN</span>
                </div>

                <!-- 2023 -->
                <div class="project-card">
                    <div class="project-year">2023</div>
                    <p class="project-desc">Güler Apartmanı Suadiye Sahil - Kasım 2022 de imalatın başlanmıştır. Kasım 2024'de teslim.</p>
                    <span class="project-units">24 DAİRE</span>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="experience">
            <div class="experience-image">
                <!-- Using local Çamlıca Tower image -->
                <img src="images/camlica-tower-of-istanbul.webp" alt="Istanbul Çamlıca Tower" class="exp-img">
            </div>
            <div class="experience-content">
                <div class="exp-tagline">İNŞAAT SEKTÖRÜNDE 70 YILLIK TECRÜBE</div>
                <h2 class="exp-title">ARSNOVA YAPI ile Güvenli ve Estetik Yapılar</h2>
                <p class="exp-desc">İstanbul'un köklü inşaat firmalarından biri olarak, 1955 yılından bu yana modern, güvenli ve estetik yapılar inşa ediyoruz. Kadıköy ve çevresindeki projelerimizle sektörde fark yaratmaya devam ediyoruz.</p>
                
                <div class="exp-features">
                    <!-- Feature 1 -->
                    <div class="exp-feature-item">
                        <div class="exp-icon">
                            <!-- Arrow Right in Circle Icon -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16l4-4-4-4"></path>
                                <path d="M8 12h8"></path>
                            </svg>
                        </div>
                        <div class="exp-text">
                            <h3>Güçlü Teknik Kadro</h3>
                            <p>Alanında uzman mühendisler ve mimarlardan oluşan ekibimizle, her projeyi en yüksek kalite standartlarına uygun olarak hayata geçiriyoruz.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="exp-feature-item">
                        <div class="exp-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16l4-4-4-4"></path>
                                <path d="M8 12h8"></path>
                            </svg>
                        </div>
                        <div class="exp-text">
                            <h3>Güvenli ve Modern Yaşam Alanları</h3>
                            <p>Sadece sağlam binalar inşa etmiyor, aynı zamanda modern tasarım anlayışıyla yaşam alanlarını daha konforlu hale getiriyoruz.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="exp-feature-item">
                        <div class="exp-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16l4-4-4-4"></path>
                                <path d="M8 12h8"></path>
                            </svg>
                        </div>
                        <div class="exp-text">
                            <h3>Zamanında ve Eksiksiz Teslimat</h3>
                            <p>Taahhüt ettiğimiz her projeyi planlanan sürede ve eksiksiz bir şekilde teslim ederek müşteri memnuniyetini en üst seviyede tutuyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section">
            <div class="container">
                <div class="map-container">
                    <div id="map" class="map-frame"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="map-legend-grid">
                    <!-- Legend Item 1 -->
                    <div class="legend-card">
                        <div class="legend-icon orange">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="legend-text">ARSNOVA YAPI<br>MERKEZ OFİS</div>
                    </div>

                    <!-- Legend Item 2 -->
                    <div class="legend-card">
                        <div class="legend-icon blue">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="legend-text">TAMAMLANMIŞ<br>PROJELER</div>
                    </div>

                    <!-- Legend Item 3 -->
                    <div class="legend-card">
                        <div class="legend-icon green">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="legend-text">DEVAM EDEN<br>PROJELER</div>
                    </div>

                    <!-- Legend Item 4 -->
                    <div class="legend-card">
                        <div class="legend-icon yellow">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="legend-text">PLANLANAN<br>PROJELER</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Lists Section -->
        <section class="project-lists">
            <div class="container">
                
                <!-- Ongoing Projects -->
                <h2 class="section-title-center">Devam Eden Projelerimiz</h2>
                <div class="projects-grid-3">
                    <!-- Card 1 -->
                    <div class="project-list-card">
                        <div class="plc-image">
                            <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tech Caddebostan Sahil">
                            <div class="plc-date">Teslim tarihi: Kasım 2023</div>
                        </div>
                        <div class="plc-content">
                            <h3>Tech Caddebostan Sahil</h3>
                            <div class="plc-divider"></div>
                            <a href="#" class="plc-btn">
                                PROJE DETAYLARI 
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16l4-4-4-4"></path><path d="M8 12h8"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="project-list-card">
                        <div class="plc-image">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tech Suadiye Sahil">
                            <div class="plc-date">Teslim tarihi: Kasım 2023</div>
                        </div>
                        <div class="plc-content">
                            <h3>Tech Suadiye Sahil</h3>
                            <div class="plc-divider"></div>
                            <a href="#" class="plc-btn">
                                PROJE DETAYLARI 
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16l4-4-4-4"></path><path d="M8 12h8"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="project-list-card">
                        <div class="plc-image">
                            <img src="https://images.unsplash.com/photo-1574362848149-11496d93a7c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tech Göztepe Park">
                            <div class="plc-date">Teslim tarihi: Nisan 2024</div>
                        </div>
                        <div class="plc-content">
                            <h3>Tech Göztepe Park</h3>
                            <div class="plc-divider"></div>
                            <a href="#" class="plc-btn">
                                PROJE DETAYLARI 
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16l4-4-4-4"></path><path d="M8 12h8"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Completed Projects -->
                <h2 class="section-title-center mt-large">Teslim Ettiğimiz Tamamlanmış Projelerimiz</h2>
                <div class="projects-grid-3">
                    <!-- Card 1 -->
                    <div class="project-list-card">
                        <div class="plc-image">
                            <img src="https://images.unsplash.com/photo-1460317442991-0ec209397118?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tech Cadde">
                            <div class="plc-date">Tarih: Aralık 2020</div>
                        </div>
                        <div class="plc-content">
                            <h3>Tech Cadde</h3>
                            <div class="plc-divider"></div>
                            <a href="#" class="plc-btn">
                                PROJE DETAYLARI 
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16l4-4-4-4"></path><path d="M8 12h8"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="project-list-card">
                        <div class="plc-image">
                            <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tech Suadiye">
                            <div class="plc-date">Tarih: Aralık 2019</div>
                        </div>
                        <div class="plc-content">
                            <h3>Tech Suadiye</h3>
                            <div class="plc-divider"></div>
                            <a href="#" class="plc-btn">
                                PROJE DETAYLARI 
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16l4-4-4-4"></path><path d="M8 12h8"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="project-list-card">
                        <div class="plc-image">
                            <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tech Göztepe">
                            <div class="plc-date">Tarih: Kasım 2018</div>
                        </div>
                        <div class="plc-content">
                            <h3>Tech Göztepe</h3>
                            <div class="plc-divider"></div>
                            <a href="#" class="plc-btn">
                                PROJE DETAYLARI 
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16l4-4-4-4"></path><path d="M8 12h8"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="cta-content-box">
                <h2>Güvenli ve Modern Yaşam Alanları</h2>
                <p>Dayanıklı yapılar, estetik tasarım ve konforlu yaşam alanlarıyla geleceğin projelerini inşa ediyoruz.</p>
                <a href="#" class="cta-btn">PROJELERİMİZİ KEŞFEDİN</a>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section">
            <div class="container">
                <div class="testimonials-grid">
                    <!-- Left Content -->
                    <div class="tm-content">
                        <div class="tm-tagline">MÜŞTERİ YORUMLARI</div>
                        <h2 class="tm-title">Bizi Tercih Eden Müşterilerimiz</h2>
                        <p class="tm-desc">İnşaat sektöründeki hizmetimizle ilgili geri bildirimler için teşekkür ederiz. Müşterilerimizin deneyimlerini ve düşüncelerini görmek bizim için çok değerli.</p>
                        
                        <!-- Testimonial Card -->
                        <div class="tm-card">
                            <p class="tm-quote">"Arsnova Yapı'nın elektrik altyapı çözümleri oldukça sağlam ve güvenilir. Çalışmalarında kaliteye verdikleri önem çok açık. Kesinlikle tavsiye ederim."</p>
                            <div class="tm-user">
                                <div class="tm-avatar">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"></path></svg> 
                                    <!-- Placeholder S logo logic, using X for now or simple S text -->
                                    <span style="position:absolute; color:#2c3e50; font-weight:900; font-size:20px;">S</span>
                                </div>
                                <div class="tm-user-info">
                                    <div class="tm-name">Hasan K</div>
                                    <div class="tm-job">ELEKTRİK MÜHENDİSİ</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Map Image -->
                    <div class="tm-map">
                        <!-- Using a darker map image so opacity makes it light grey -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg" alt="World Map">
                        <!-- Markers -->
                        <div class="tm-map-marker" style="top: 30%; left: 20%;"></div>
                        <div class="tm-map-marker" style="top: 40%; left: 50%;"></div>
                        <div class="tm-map-marker" style="top: 35%; left: 80%;"></div>
                        <div class="tm-map-marker" style="top: 60%; left: 30%;"></div>
                        <div class="tm-map-marker" style="top: 50%; left: 60%;"></div>
                        <div class="tm-map-marker" style="top: 70%; left: 75%;"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Steps Section -->
        <section class="process-section">
            <div class="container">
                <div class="tm-tagline" style="margin-bottom: 10px;">NASIL ÇALIŞIYORUZ ?</div>
                <h2 class="section-title-left" style="margin-bottom: 50px;">Güvenli Yaşam Alanları<br>Aşamalar</h2>
                
                <div class="process-grid">
                    <!-- Step 1 (Active/Dark) -->
                    <div class="process-card active">
                        <div class="pc-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        </div>
                        <h3 class="pc-title">Planlama ve Proje Hazırlığı</h3>
                        <p class="pc-desc">Proje başlamadan önce, bölge analizi yapılır ve detaylı bir yol haritası belirlenir.</p>
                        <a href="#" class="pc-btn">DAHA FAZLA BİLGİ</a>
                    </div>

                    <!-- Step 2 -->
                    <div class="process-card">
                        <div class="pc-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 class="pc-title">Hak Sahipleri ile Görüşmeler</h3>
                        <p class="pc-desc">Projeye dahil olan hak sahipleriyle anlaşmalar yapılır ve onay süreçleri başlatılır.</p>
                        <a href="#" class="pc-btn outline">DAHA FAZLA BİLGİ</a>
                    </div>

                    <!-- Step 3 -->
                    <div class="process-card">
                        <div class="pc-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                        </div>
                        <h3 class="pc-title">İmar Planı ve Ruhsat Onayı</h3>
                        <p class="pc-desc">Projeye uygun imar planı hazırlanır ve gerekli inşaat ruhsatları alınır.</p>
                        <a href="#" class="pc-btn outline">DAHA FAZLA BİLGİ</a>
                    </div>

                    <!-- Step 4 -->
                    <div class="process-card">
                        <div class="pc-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                        <h3 class="pc-title">İnşaat ve Yenileme Süreci</h3>
                        <p class="pc-desc">İnşaat başladıktan sonra, yenileme işlemleri ve kalite kontroller gerçekleştirilir.</p>
                        <a href="#" class="pc-btn outline">DAHA FAZLA BİLGİ</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="site-footer">
            <div class="container">
                <div class="footer-grid">
                    <!-- Column 1: Brand -->
                    <div class="footer-col">
                        <div class="footer-logo">
                            <svg class="logo-icon-svg" width="50" height="50" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32 2L12 14V46L32 62L52 46V14L32 2Z" fill="#660000" class="logo-bg"/>
                                <path d="M22 24C22 24 24 28 26 28C28 28 28 24 28 24" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                                <path d="M42 24C42 24 40 28 38 28C36 28 36 24 36 24" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                                <path d="M32 48V38M32 38L26 32H38L32 38Z" stroke="#daa520" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 42L32 48L40 42" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="logo-text">
                                ARSNOVA YAPI
                                <span class="logo-sub">YENİLİĞİN MİMARI</span>
                            </div>
                        </div>
                        <p class="footer-desc">
                            Arsnova Yapı, projelerinde konforlu bir yaşamın tüm gereksinimlerini titizlikle düşünerek, modern mimari anlayışıyla birleştiriyor. Estetik tasarımları, fonksiyonel yaşam alanları ve yüksek kalite standartlarıyla, sizlere güvenli ve huzurlu bir yaşam sunmayı hedefliyor.
                        </p>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                            <a href="#" class="social-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                            <a href="#" class="social-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
                        </div>
                    </div>

                    <!-- Column 2: Quick Menu -->
                    <div class="footer-col">
                        <h4 class="footer-title">Hızlı Menü</h4>
                        <ul class="footer-links">
                            <li><a href="#">Hakkımızda</a></li>
                            <li><a href="#">Hizmetlerimiz</a></li>
                            <li><a href="#">Projelerimiz</a></li>
                            <li><a href="#">İletişim</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Completed Projects -->
                    <div class="footer-col">
                        <h4 class="footer-title">Tamamlanan Projeler</h4>
                        <ul class="footer-links">
                            <li><a href="#">Tech Cadde</a></li>
                            <li><a href="#">Tech Suadiye</a></li>
                            <li><a href="#">Tech Göztepe</a></li>
                            <li><a href="#">Tech Erenköy</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Services -->
                    <div class="footer-col">
                        <h4 class="footer-title">Hizmetler</h4>
                        <ul class="footer-links">
                            <li><a href="#">Kentsel Dönüşüm</a></li>
                            <li><a href="#">Müteahhitlik Hizmetleri</a></li>
                            <li><a href="#">Mimarlık Hizmetleri</a></li>
                            <li><a href="#">Akıllı Yaşam Alanları</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bottom">
                    <p>&copy; 1955-2025 Arsnova Yapı, Her Hakkı Saklıdır.</p>
                </div>
            </div>
        </footer>

    <!-- Floating Contact Buttons -->
    <div class="floating-buttons">
        <a href="https://wa.me/905385595567" target="_blank" class="float-btn whatsapp-btn">
            <!-- Standard WhatsApp Icon -->
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112-.149.224-.579.73-.709.88-.131.149-.261.169-.486.056-.224-.112-.953-.351-1.815-1.12-.673-.6-1.125-1.34-1.257-1.565-.131-.224-.014-.345.098-.458.101-.101.224-.262.336-.393.112-.131.149-.224.224-.374.075-.149.037-.28-.019-.393-.056-.112-.504-1.214-.69-1.662-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.6.28c-.205.225-.785.767-.785 1.871 0 1.104.804 2.171.916 2.32.112.15 1.582 2.415 3.832 3.387 1.336.577 1.859.619 2.536.519.748-.11 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.206-.15-.43-.262"/>
            </svg>
        </a>
        <a href="tel:05385595567" class="float-btn phone-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.01 15.38C18.8 15.38 17.64 15.18 16.55 14.82C16.21 14.7 15.83 14.78 15.57 15.05L13.65 16.97C11.19 15.72 9.15 13.69 7.91 11.23L9.83 9.31C10.1 9.05 10.18 8.67 10.07 8.33C9.71 7.24 9.51 6.08 9.51 4.87C9.51 4.39 9.12 4 8.64 4H5.03C4.55 4 4.16 4.39 4.16 4.87C4.16 13.61 11.25 20.7 20.01 20.7C20.49 20.7 20.88 20.31 20.88 19.83V16.25C20.88 15.77 20.49 15.38 20.01 15.38Z" fill="white"/>
            </svg>
        </a>
    </div>

    <!-- Leaflet JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        // Initialize Map
        var map = L.map('map', {
            center: [40.9801, 29.0523], // Kadıköy/Göztepe Center
            zoom: 13,
            scrollWheelZoom: false // Disable scroll zoom for better page scrolling
        });

        // Add Dark/Light Tile Layer (CartoDB Positron for clean look)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        // Custom Icon Function
        function createCustomIcon(color) {
            return L.divIcon({
                className: 'custom-map-pin',
                html: `<div class="map-pin pin-${color}"><div class="pin-inner">S</div></div>`,
                iconSize: [40, 50],
                iconAnchor: [20, 50] // Center bottom anchor
            });
        }

        // Add Markers
        // Orange: Merkez Ofis
        L.marker([40.968, 29.065], {icon: createCustomIcon('orange')}).addTo(map);

        // Blue: Tamamlanmış (Scattered)
        L.marker([40.985, 29.040], {icon: createCustomIcon('blue')}).addTo(map);
        L.marker([40.975, 29.055], {icon: createCustomIcon('blue')}).addTo(map);
        L.marker([40.990, 29.030], {icon: createCustomIcon('blue')}).addTo(map);

        // Green: Devam Eden
        L.marker([40.982, 29.080], {icon: createCustomIcon('green')}).addTo(map);
        L.marker([40.960, 29.070], {icon: createCustomIcon('green')}).addTo(map);

        // Yellow: Planlanan
        L.marker([40.995, 29.020], {icon: createCustomIcon('yellow')}).addTo(map);
        L.marker([40.970, 29.090], {icon: createCustomIcon('yellow')}).addTo(map);

    </script>

</body>
</html>
