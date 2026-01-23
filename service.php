<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Services - MyPortfolioSite</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="antialiased" style="background-color:#ffffff;color:#11151b;">

  <!-- Header -->
  <header class="fixed inset-x-0 top-0 z-40 bg-white/80 backdrop-blur-md border-b border-blue-100/50 shadow-sm">
    <div class="mx-auto max-w-7xl px-6 py-4">
      <nav class="flex items-center justify-between">
        <a href="index.php" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">MyPortfolio</a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8">
          <a href="index.php#works" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Works</a>
          <a href="service.php" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Service</a>
          <a href="index.php#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Contact</a>
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
        <a href="index.php#works" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Works</a>
        <a href="service.php" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Service</a>
        <a href="index.php#contact" class="block text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Contact</a>
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

  <main>
    <!-- Hero Section -->
    <section class="relative w-full min-h-screen bg-gradient-to-br from-blue-200 via-blue-100 to-purple-100 flex items-center justify-center pt-24 pb-16">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-10 w-72 h-72 bg-gradient-to-br from-blue-300 to-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute bottom-0 left-10 w-80 h-80 bg-gradient-to-tr from-purple-200 to-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
      </div>

      <div class="relative z-10">
        <div class="mx-auto max-w-6xl px-6">
          <div class="text-center mb-16">
            <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-6xl font-bold text-gray-800 leading-loose mb-4">
              提供する<br />
              <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">サービス</span>
            </h1>
            <p class="text-xl text-gray-700 mt-6 leading-relaxed max-w-3xl mx-auto">
              Web開発事業と未経験エンジニア向けコーチングで、お客様とキャリア志望者の目標達成をサポートします。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Web Development Service -->
    <section class="relative w-full bg-gradient-to-br from-white via-gray-50 to-white py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/3 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-5"></div>
        <div class="absolute bottom-0 right-10 w-80 h-80 bg-gradient-to-tl from-blue-100 to-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-5"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Content -->
          <div>
            <div class="flex items-center mb-6">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4m0 0l1 12m-17 0a2 2 0 002 2h12a2 2 0 002-2m0-12V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14z"></path>
                </svg>
              </div>
              <h2 class="text-4xl font-bold text-gray-800 ml-4">Web開発事業</h2>
            </div>

            <p class="text-gray-700 text-lg mb-6 leading-relaxed">
              モダンで使いやすいWebアプリケーション・Webサイトの設計と実装を承ります。
            </p>

            <!-- Services List -->
            <div class="space-y-4 mb-8">
              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">Webアプリケーション開発</h3>
                  <p class="text-gray-600 mt-1">React、Vue、Svelte などモダンなフレームワークを使用した動的なWebアプリケーション開発</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">Webサイト構築</h3>
                  <p class="text-gray-600 mt-1">WordPress、PHP、Static Site Generators を使用した高速で保守性の高いWebサイト構築</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">UI/UX設計・実装</h3>
                  <p class="text-gray-600 mt-1">ユーザーが使いやすいインターフェース設計からフロントエンド実装まで、トータルでサポート</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-blue-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">バックエンド開発</h3>
                  <p class="text-gray-600 mt-1">PHP、Node.js、Python を使用した API 開発やデータベース設計</p>
                </div>
              </div>
            </div>

            <!-- Tech Stack -->
            <div>
              <h3 class="text-lg font-semibold text-gray-800 mb-3">使用技術</h3>
              <div class="flex flex-wrap gap-2">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">React</span>
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">Vue</span>
                <span class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold">PHP</span>
                <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-semibold">Node.js</span>
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">Tailwind CSS</span>
                <span class="inline-block px-4 py-2 bg-orange-100 text-orange-700 rounded-full text-sm font-semibold">WordPress</span>
              </div>
            </div>
          </div>

          <!-- Image/Card -->
          <div class="flex justify-center">
            <div class="w-full max-w-md">
              <div class="bg-gradient-to-br from-blue-500 to-purple-500 rounded-3xl shadow-2xl p-8 text-white text-center">
                <svg class="w-20 h-20 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-3">開発期間の目安</h3>
                <ul class="text-left space-y-2 text-sm">
                  <li>✓ 小規模サイト: 2～4週間</li>
                  <li>✓ 中規模アプリ: 1～3ヶ月</li>
                  <li>✓ 大規模プロジェクト: 応相談</li>
                </ul>
                <p class="text-sm mt-6 opacity-90">※ 要件ヒアリング後、より正確な見積もりを提供します</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Coaching Service -->
    <section class="relative w-full bg-gradient-to-br from-gray-50 via-white to-gray-50 py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-5"></div>
        <div class="absolute bottom-0 left-1/3 w-80 h-80 bg-gradient-to-tl from-purple-100 to-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-5"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Image/Card -->
          <div class="flex justify-center order-2 lg:order-1">
            <div class="w-full max-w-md">
              <div class="bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl shadow-2xl p-8 text-white text-center">
                <svg class="w-20 h-20 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                </svg>
                <h3 class="text-2xl font-bold mb-3">コーチング形式</h3>
                <ul class="text-left space-y-2 text-sm">
                  <li>✓ 個別コーチング (1対1)</li>
                  <li>✓ グループコーチング (少人数)</li>
                  <li>✓ オンライン/オフライン対応</li>
                  <li>✓ 柔軟なスケジュール</li>
                </ul>
                <p class="text-sm mt-6 opacity-90">※ 無料相談も受け付けています</p>
              </div>
            </div>
          </div>

          <!-- Content -->
          <div class="order-1 lg:order-2">
            <div class="flex items-center mb-6">
              <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                </svg>
              </div>
              <h2 class="text-4xl font-bold text-gray-800 ml-4">未経験者コーチング</h2>
            </div>

            <p class="text-gray-700 text-lg mb-6 leading-relaxed">
              Web開発を始めたばかりの方向けの個別・グループコーチング。基礎から応用まで、実務的なスキルとキャリア形成をサポートします。
            </p>

            <!-- Services List -->
            <div class="space-y-4 mb-8">
              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-purple-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">HTML/CSS基礎</h3>
                  <p class="text-gray-600 mt-1">Webサイトの構造とスタイリングの基本から丁寧に指導</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-purple-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">JavaScriptプログラミング</h3>
                  <p class="text-gray-600 mt-1">変数、関数、DOM操作など、実務で必要なJavaScriptスキル習得</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-purple-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">フレームワーク学習</h3>
                  <p class="text-gray-600 mt-1">React、Vue など実務で使われるモダンフレームワークの習得</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-purple-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">キャリア相談</h3>
                  <p class="text-gray-600 mt-1">エンジニアとしてのキャリア構築、就職活動、ポートフォリオ作成をサポート</p>
                </div>
              </div>

              <div class="flex gap-4">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center h-8 w-8 rounded-md bg-purple-500 text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-lg font-semibold text-gray-800">実装プロジェクト指導</h3>
                  <p class="text-gray-600 mt-1">自分のプロジェクト開発時の課題解決や最適な実装方法をリアルタイムで指導</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pricing Section -->
    <section class="relative w-full bg-gradient-to-br from-white via-gray-50 to-white py-20">
      <!-- Decorative Elements -->
      <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-gradient-to-br from-blue-100 to-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-5"></div>
        <div class="absolute bottom-0 left-1/3 w-80 h-80 bg-gradient-to-tl from-purple-100 to-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-5"></div>
      </div>

      <div class="relative z-10 mx-auto max-w-7xl px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-800">料金</h2>
          <p class="mt-4 text-lg text-gray-600">各サービスの料金目安です。プロジェクト内容によって異なります。</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Web Development Pricing -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-blue-100/50 hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-8 text-white">
              <h3 class="text-2xl font-bold mb-2">Web開発</h3>
              <p class="text-sm opacity-90">カスタムWebアプリケーション</p>
            </div>
            <div class="p-8">
              <div class="mb-6">
                <p class="text-4xl font-bold text-gray-800">¥<span class="text-3xl">500k</span></p>
                <p class="text-gray-600 text-sm mt-2">〜 (規模による)</p>
              </div>
              <ul class="space-y-3 mb-8">
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">要件ヒアリング</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">設計・実装</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">テスト・デプロイ</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">保守サポート</span>
                </li>
              </ul>
              <button class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600 transition-colors">お問い合わせ</button>
            </div>
          </div>

          <!-- Coaching Pricing -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-purple-100/50 hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 px-6 py-8 text-white">
              <h3 class="text-2xl font-bold mb-2">コーチング</h3>
              <p class="text-sm opacity-90">個別・グループセッション</p>
            </div>
            <div class="p-8">
              <div class="mb-6">
                <p class="text-gray-600 text-sm">1時間あたり</p>
                <p class="text-4xl font-bold text-gray-800">¥<span class="text-3xl">5k</span></p>
                <p class="text-gray-600 text-sm mt-2">〜</p>
              </div>
              <ul class="space-y-3 mb-8">
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">1対1個別指導</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">グループコース対応</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">カスタマイズ可能</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">事後サポート</span>
                </li>
              </ul>
              <button class="w-full bg-purple-500 text-white py-3 rounded-lg font-semibold hover:bg-purple-600 transition-colors">お問い合わせ</button>
            </div>
          </div>

          <!-- Consultation Pricing -->
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-green-100/50 hover:shadow-xl transition-shadow">
            <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-8 text-white">
              <h3 class="text-2xl font-bold mb-2">無料相談</h3>
              <p class="text-sm opacity-90">まずはお気軽に</p>
            </div>
            <div class="p-8">
              <div class="mb-6">
                <p class="text-gray-600 text-sm">初回</p>
                <p class="text-4xl font-bold text-gray-800">¥<span class="text-3xl">0</span></p>
                <p class="text-gray-600 text-sm mt-2">30分程度</p>
              </div>
              <ul class="space-y-3 mb-8">
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">要件ヒアリング</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">見積もり提示</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">アドバイス</span>
                </li>
                <li class="flex gap-3">
                  <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-gray-700">オンライン対応</span>
                </li>
              </ul>
              <button class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition-colors">相談を申し込む</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="relative w-full bg-gradient-to-r from-blue-600 to-purple-600 py-20">
      <div class="relative z-10 mx-auto max-w-4xl px-6 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">
          プロジェクトのご相談や<br />
          コーチングをお考えですか？
        </h2>
        <p class="text-white text-lg opacity-90 mb-8">
          お気軽にお問い合わせください。無料で初回相談も承っています。
        </p>
        <div class="flex gap-4 justify-center flex-wrap">
          <a href="index.php#contact" class="inline-flex items-center justify-center rounded-full bg-white text-purple-600 font-semibold px-10 py-4 hover:shadow-lg transition-shadow text-lg">
            お問い合わせ
          </a>
          <a href="index.php" class="inline-flex items-center justify-center rounded-full border-2 border-white text-white font-semibold px-10 py-4 hover:bg-white/10 transition-colors text-lg">
            トップへ戻る
          </a>
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
            <a href="index.php#works" class="text-gray-400 hover:text-blue-400 transition-colors text-sm block">Works</a>
            <a href="service.php" class="text-gray-400 hover:text-blue-400 transition-colors text-sm block">Service</a>
            <a href="index.php#contact" class="text-gray-400 hover:text-blue-400 transition-colors text-sm block">Contact</a>
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
