<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>MyPortfolioSite</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="antialiased" style="background-color:#ffffff;color:#11151b;">

  <!-- Header -->
  <header class="fixed inset-x-0 top-0 z-40 bg-white/80 backdrop-blur-md border-b border-blue-100/50 shadow-sm">
    <div class="mx-auto max-w-7xl px-6 py-4">
      <nav class="flex items-center justify-between">
        <a href="#" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">MyPortfolio</a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8">
          <a href="#works" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Works</a>
          <a href="#service" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Service</a>
          <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Contact</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden flex items-center justify-center">
          <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md border-t border-blue-100/50">
      <div class="mx-auto max-w-7xl px-6 py-4 space-y-4">
        <a href="#works" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Works</a>
        <a href="#service" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Service</a>
        <a href="#contact" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Contact</a>
      </div>
    </div>
  </header>

  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Close menu when link is clicked
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
      });
    });
  </script>

  <!-- Hero Section with Profile -->
  <main>
    <!-- Modern Pastel Hero Section -->
    <section class="relative w-full min-h-screen bg-gradient-to-br from-blue-200 via-blue-100 to-purple-100 flex items-center justify-center pt-24 pb-16">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-10 w-72 h-72 bg-gradient-to-br from-blue-300 to-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute bottom-0 left-10 w-80 h-80 bg-gradient-to-tr from-purple-200 to-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
      </div>

      <div class="relative z-10">
        <div class="mx-auto max-w-6xl px-6">
          <!-- Main Content Grid -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center justify-center">
            
            <!-- Left Side: Text Content -->
            <div class="flex flex-col justify-center">
              <div class="mb-8">
                <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-6xl font-bold text-gray-800 leading-loose mb-4">
                  Web開発受託と<br />
                  <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">未経験エンジニア向け</span><br />
                  コーチング
                </h1>
                <p class="text-xl text-gray-700 mt-6 leading-relaxed">
                  モダンで使いやすいWebアプリケーションの開発から、エンジニアとしてのキャリア支援まで。あなたの目標達成をサポートします。
                </p>
              </div>

              <!-- CTA Buttons -->
              <div class="flex gap-4 flex-wrap mt-8">
                <a href="#works" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold px-8 py-3 hover:shadow-lg transition-shadow">
                  Works を見る
                </a>
                <a href="#contact" class="inline-flex items-center justify-center rounded-full border-2 border-blue-500 text-blue-600 font-semibold px-8 py-3 hover:bg-blue-50 transition-colors">
                  お問い合わせ
                </a>
              </div>
            </div>

            <!-- Right Side: Profile Card -->
            <div class="flex justify-center lg:justify-end">
              <div class="w-full max-w-sm">
                <!-- Profile Card -->
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden backdrop-blur-md bg-opacity-95 p-8">
                  
                  <!-- Profile Image -->
                  <div class="flex justify-center mb-6">
                    <div class="relative">
                      <div class="profile-image w-40 h-40 rounded-full overflow-hidden border-4 border-gradient-to-br from-blue-400 to-purple-400 shadow-lg">
                        <img src="images/googlemegane.png" alt="Takemoto Yuya" class="w-full h-full object-cover">
                      </div>
                    </div>
                  </div>

                  <!-- Profile Info -->
                  <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Takemoto Yuya</h2>
                    <p class="text-gray-600 mb-4">📍 Osaka, Japan</p>
                    
                    <!-- Bio -->
                    <p class="text-gray-700 text-sm leading-relaxed mb-6">
                      Web開発を専門とするエンジニア。Reactやその他のモダンフレームワークを使用した開発を得意としています。未経験者のコーチングも積極的に行っています。
                    </p>

                    <!-- Skills Tags -->
                    <div class="space-y-4">
                      <h3 class="text-sm font-semibold text-gray-800 mb-3">Skills</h3>
                      <div class="flex flex-wrap gap-2 justify-center">
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-100 to-blue-50 text-blue-700 rounded-full text-xs font-semibold">HTML</span>
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-100 to-blue-50 text-blue-700 rounded-full text-xs font-semibold">CSS</span>
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-yellow-100 to-yellow-50 text-yellow-700 rounded-full text-xs font-semibold">JavaScript</span>
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-purple-100 to-purple-50 text-purple-700 rounded-full text-xs font-semibold">PHP</span>
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-red-100 to-red-50 text-red-700 rounded-full text-xs font-semibold">Git</span>
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-100 to-blue-50 text-blue-700 rounded-full text-xs font-semibold">WordPress</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Works -->
    <section id="works" class="relative w-full bg-gradient-to-br from-blue-50 via-white to-purple-50 py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/3 w-96 h-96 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-0 right-10 w-80 h-80 bg-gradient-to-tl from-blue-300 to-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-800">Works</h2>
          <p class="mt-4 text-lg text-gray-600">最近の制作事例を３つ掲載しています。</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <article class="group rounded-2xl overflow-hidden bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-blue-100/50">
            <div class="h-48 bg-cover bg-center group-hover:scale-105 transition-transform duration-300" style="background-image: url('https://source.unsplash.com/800x600/?web,design&sig=1');"></div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800">Etude</h3>
              <p class="mt-3 text-sm text-gray-600 leading-relaxed">WordPressのオリジナルテーマで開発したテックブログ</p>
              <div class="mt-6 flex items-center justify-between">
                <div class="flex gap-2 flex-wrap">
                  <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">WordPress</span>
                  <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Bootstrap</span>
                </div>
                <a href="https://blob.take006.com" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-blue-600 hover:text-purple-600 transition-colors">View →</a>
              </div>
            </div>
          </article>
          <article class="group rounded-2xl overflow-hidden bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-blue-100/50">
            <div class="h-48 bg-cover bg-center group-hover:scale-105 transition-transform duration-300" style="background-image: url('https://source.unsplash.com/800x600/?web,design&sig=2');"></div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800">Learning-record</h3>
              <p class="mt-3 text-sm text-gray-600 leading-relaxed">個人用の学習記録サイト</p>
              <div class="mt-6 flex items-center justify-between">
                <div class="flex gap-2 flex-wrap">
                  <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">PHP</span>
                  <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">Tailwind</span>
                </div>
                <a href="https://blob.take006.com" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-blue-600 hover:text-purple-600 transition-colors">View →</a>
              </div>
            </div>
          </article>
          <article class="group rounded-2xl overflow-hidden bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-blue-100/50">
            <div class="h-48 bg-cover bg-center group-hover:scale-105 transition-transform duration-300" style="background-image: url('https://source.unsplash.com/800x600/?web,design&sig=3');"></div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800">Portfolio</h3>
              <p class="mt-3 text-sm text-gray-600 leading-relaxed">モダンなポートフォリオサイト</p>
              <div class="mt-6 flex items-center justify-between">
                <div class="flex gap-2 flex-wrap">
                  <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">React</span>
                  <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">TypeScript</span>
                </div>
                <a href="#" class="text-sm font-semibold text-blue-600 hover:text-purple-600 transition-colors">View →</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Service Section -->
    <section id="service" class="relative w-full bg-gradient-to-br from-blue-50 via-purple-50 to-white py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-0 left-1/3 w-80 h-80 bg-gradient-to-tl from-purple-200 to-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-800">Services</h2>
          <p class="mt-4 text-lg text-gray-600">提供するサービス</p>
        </div>

        <div class="max-w-4xl mx-auto">
          <!-- Main Service Card -->
          <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-blue-100/50">
 
            <!-- Services Grid -->
            <div class="p-8 md:p-12">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <!-- Web Development Service -->
                <div class="flex flex-col items-center text-center">
                  <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4m0 0l1 12m-17 0a2 2 0 002 2h12a2 2 0 002-2m0-12V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14z"></path>
                    </svg>
                  </div>
                  <h4 class="text-2xl font-bold text-gray-800 mb-3">Web開発事業</h4>
                  <p class="text-gray-700 leading-relaxed">
                    モダンで使いやすいWebアプリケーション・Webサイトの設計と実装。React、PHP、Tailwind CSSなどの最新技術を活用します。
                  </p>
                </div>

                <!-- Coaching Service -->
                <div class="flex flex-col items-center text-center">
                  <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                  </div>
                  <h4 class="text-2xl font-bold text-gray-800 mb-3">未経験者コーチング</h4>
                  <p class="text-gray-700 leading-relaxed">
                    Web開発を始めたばかりの方向けの個別・グループコーチング。実務的なスキルとキャリア形成をサポートします。
                  </p>
                </div>
              </div>

              <!-- CTA Button -->
              <div class="flex justify-center pt-8 border-t border-gray-200">
                <a href="service.php" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold px-10 py-4 hover:shadow-lg transition-shadow text-lg">
                  サービス詳細を見る
                  <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="relative w-full bg-gradient-to-br from-purple-50 via-white to-blue-50 py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-br from-purple-200 to-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-10 left-1/4 w-80 h-80 bg-gradient-to-tr from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-800">Skills</h2>
          <p class="mt-4 text-lg text-gray-600">使用技術と得意分野</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
          <div class="flex justify-center">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-blue-100/50">
              <svg viewBox="0 0 128 128" class="w-12 h-12">
                <path fill="#E44D26" d="M19.037 113.876L9.032 1.661h109.936l-10.016 112.198-45.019 12.48z"></path>
                <path fill="#F16529" d="M64 116.8l36.378-10.086 8.559-95.878H64z"></path>
              </svg>
            </div>
          </div>
          <div class="flex justify-center">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-blue-100/50">
              <svg viewBox="0 0 128 128" class="w-12 h-12">
                <path fill="#1572B6" d="M18.814 114.123L8.76 1.352h110.48l-10.064 112.754-45.243 12.543-45.119-12.526z"></path>
              </svg>
            </div>
          </div>
          <div class="flex justify-center">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-blue-100/50">
              <svg viewBox="0 0 128 128" class="w-12 h-12">
                <path fill="#F0DB4F" d="M1.408 1.408h125.184v125.185H1.408z"></path>
              </svg>
            </div>
          </div>
          <div class="flex justify-center">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-blue-100/50">
              <svg viewBox="0 0 128 128" class="w-12 h-12">
                <path fill="#777bb3" d="M64 95.167c33.965 0 61.5-13.955 61.5-31.167 0-17.214-27.535-31.167-61.5-31.167S2.5 46.786 2.5 64c0 17.212 27.535 31.167 61.5 31.167Z"></path>
              </svg>
            </div>
          </div>
          <div class="flex justify-center">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-blue-100/50">
              <svg viewBox="0 0 128 128" class="w-12 h-12">
                <path fill="#f0513f" d="M27.271.11c-.2.078-5.82 3.28-12.487 7.112-8.078 4.644-12.227 7.09-12.449 7.32-.19.225-.34.482-.438.76-.167.564-.179 82.985-.01 83.578.061.23.26.568.44.754.436.46 48.664 28.19 49.25 28.324.272.065.577.054.88-.03.658-.165 48.76-27.834 49.188-28.286.175-.195.375-.532.44-.761.084-.273.115-4.58.115-13.655v-13.26l11.726-6.735c11.056-6.357 11.733-6.755 12.017-7.191l.29-.47V43.287c0-15.548.03-14.673-.585-15.235-.165-.146-5.798-3.433-12.53-7.31L100.89 13.71h-1.359l-11.963 6.87c-6.586 3.788-12.184 7.027-12.457 7.203-.272.18-.597.512-.73.753l-.242.417-.054 13.455-.048 13.46-9.879 5.69c-5.434 3.124-9.957 5.71-10.053 5.734-.175.049-.187-1.232-.187-25.966V15.293l-.26-.447c-.326-.545 1.136.324-13.544-8.114C27.803-.348 28.098-.2 27.27.11z"></path>
              </svg>
            </div>
          </div>
          <div class="flex justify-center">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-blue-100/50">
              <svg viewBox="0 0 128 128" class="w-12 h-12">
                <g fill="#181616">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M64 1.512c-23.493 0-42.545 19.047-42.545 42.545 0 18.797 12.19 34.745 29.095 40.37 2.126.394 2.907-.923 2.907-2.047 0-1.014-.04-4.366-.058-7.92-11.837 2.573-14.334-5.02-14.334-5.02-1.935-4.918-4.724-6.226-4.724-6.226-3.86-2.64.29-2.586.29-2.586 4.273.3 6.523 4.385 6.523 4.385 3.794 6.504 9.953 4.623 12.38 3.536.383-2.75 1.485-4.628 2.702-5.69-9.45-1.075-19.384-4.724-19.384-21.026 0-4.645 1.662-8.44 4.384-11.42-.442-1.072-1.898-5.4.412-11.26 0 0 3.572-1.142 11.7 4.363 3.395-.943 7.035-1.416 10.65-1.432 3.616.017 7.258.49 10.658 1.432 8.12-5.504 11.688-4.362 11.688-4.362 2.316 5.86.86 10.187.418 11.26 2.728 2.978 4.378 6.774 4.378 11.42 0 16.34-9.953 19.938-19.427 20.99 1.526 1.32 2.886 3.91 2.886 7.88 0 5.692-.048 10.273-.048 11.674 0 1.13.766 2.458 2.922 2.04 16.896-5.632 29.07-21.574 29.07-40.365C106.545 20.56 87.497 1.512 64 1.512z"></path>
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- In Development -->
    <section class="relative w-full bg-gradient-to-br from-blue-50 via-white to-purple-50 py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
        <div class="absolute bottom-0 right-1/3 w-80 h-80 bg-gradient-to-tl from-purple-300 to-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-800">Currently Developing</h2>
          <p class="mt-4 text-lg text-gray-600">現在開発中のプロジェクト</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php for ($i = 1; $i <= 3; $i++): ?>
            <article class="group rounded-2xl overflow-hidden bg-white shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-blue-100/50">
              <div class="h-48 bg-cover bg-center group-hover:scale-105 transition-transform duration-300" style="background-image: url('https://source.unsplash.com/800x600/?web,design&sig=<?php echo 10 + $i; ?>');"></div>
              <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800">Project <?php echo $i; ?></h3>
                <p class="mt-3 text-sm text-gray-600 leading-relaxed">UI設計とフロントエンド実装を担当したプロジェクト。モダンで使いやすいインターフェースを実現しています。</p>
                <div class="mt-6 flex items-center justify-between">
                  <div class="flex gap-2 flex-wrap">
                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">UI</span>
                    <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Frontend</span>
                  </div>
                  <a href="#" class="text-sm font-semibold text-blue-600 hover:text-purple-600 transition-colors">View →</a>
                </div>
              </div>
            </article>
          <?php endfor; ?>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="relative w-full bg-gradient-to-br from-purple-100 via-blue-50 to-blue-100 py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 right-1/4 w-80 h-80 bg-gradient-to-br from-purple-300 to-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute bottom-10 left-1/4 w-96 h-96 bg-gradient-to-tr from-blue-300 to-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-3xl px-6">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-blue-100/50">
          <div class="bg-gradient-to-r from-blue-500 to-purple-500 px-8 py-12 text-center text-white">
            <h2 class="text-4xl font-bold">Contact Me</h2>
            <p class="mt-3 text-lg opacity-90">案件のご相談やご質問はお気軽にご連絡ください</p>
          </div>

          <div class="p-8 md:p-12">
            <p class="text-gray-700 text-center mb-8">以下のメールまたはSNSからご連絡ください。</p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
              <a href="mailto:you@example.com" class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold px-8 py-3 hover:shadow-lg transition-shadow">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                メールで連絡
              </a>
              <a href="https://x.com/Take227389Take" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-blue-500 text-blue-600 font-semibold px-8 py-3 hover:bg-blue-50 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                SNS
              </a>
            </div>

            <div class="pt-6 border-t border-gray-200">
              <p class="text-xs text-gray-500 text-center">通常24時間以内にご返信いたします</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-gray-800 via-gray-900 to-gray-800 text-white">
    <div class="mx-auto max-w-7xl px-6 py-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        <div>
          <h3 class="text-xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">MyPortfolio</h3>
          <p class="text-gray-400 text-sm">Web開発とエンジニアコーチングで、あなたのビジョンを実現します。</p>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Quick Links</h4>
          <div class="space-y-2">
            <a href="#works" class="text-gray-400 hover:text-blue-400 transition-colors text-sm block">Works</a>
            <a href="#service" class="text-gray-400 hover:text-blue-400 transition-colors text-sm block">Service</a>
            <a href="#contact" class="text-gray-400 hover:text-blue-400 transition-colors text-sm block">Contact</a>
          </div>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Follow</h4>
          <div class="flex gap-4">
            <a href="https://qiita.com/take006" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition-colors">Qiita</a>
            <a href="https://github.com/take006" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition-colors">GitHub</a>
            <a href="https://zenn.dev/nnez_wa" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition-colors">Zenn</a>
          </div>
        </div>
      </div>
      <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="text-sm text-gray-400">©2025 Takemoto Yuya. All rights reserved.</div>
        <div class="text-xs text-gray-500">Designed with 💙 and built with modern web technologies</div>
      </div>
    </div>
  </footer>

</body>

</html>
