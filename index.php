<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>MyPortfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="antialiased" style="background-color:#ffffff;color:#11151b;">

  <!-- Header -->
  <header class="fixed inset-x-0 top-0 z-40 bg-white border-b border-gray-100/80 shadow-sm">
    <div class="mx-auto max-w-7xl px-6 py-4 flex items-center justify-center">
      <a href="#" class="text-2xl font-bold tracking-tight text-gray-900">MyPortfolio</a>
    </div>
  </header>

  <!-- Hero Section with Profile -->
  <main>
    <!-- Hero Section: white top-half -->
    <section class="relative w-full min-h-[60vh] bg-white flex items-center justify-center pt-28 pb-16 border-b border-gray-100">
      <div class="relative z-10 mx-auto max-w-6xl px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="space-y-6 text-center lg:text-left">
            <p class="text-xs tracking-[0.3em] uppercase text-gray-500">Portfolio</p>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">Takemoto Yuya</h1>
            <p class="text-base md:text-lg text-gray-700 leading-relaxed">Web開発を専門とするエンジニア。独学でプログラミングを習得しWebサイトやWebアプリケーション開発行っています。</p>
            <div class="flex flex-wrap gap-3 justify-center lg:justify-start">
              <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-xs font-semibold">HTML</span>
              <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-xs font-semibold">CSS</span>
              <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-xs font-semibold">JavaScript</span>
              <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-xs font-semibold">PHP</span>
              <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-xs font-semibold">Git</span>
              <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-xs font-semibold">WordPress</span>
            </div>
          </div>

          <div class="flex justify-center lg:justify-end">
            <div class="w-full max-w-sm">
              <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100 p-8">
                <div class="flex justify-center mb-6">
                  <div class="relative">
                    <div class="profile-image w-40 h-40 rounded-full overflow-hidden border-4 border-blue-200 shadow-lg">
                      <img src="images/googlemegane.png" alt="Takemoto Yuya" class="w-full h-full object-cover">
                    </div>
                  </div>
                </div>
                <div class="text-center space-y-2">
                  <p class="text-sm text-gray-500">Full Stack Developer</p>
                  <p class="text-sm text-gray-500">Osaka, Japan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Works -->
    <section id="works" class="relative w-full bg-gray-50 py-16">
      <div class="relative z-10 mx-auto max-w-6xl px-6">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Works</h2>
          <p class="mt-3 text-base md:text-lg text-gray-600">最近の制作事例を３つ掲載しています。</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <?php
          $works = [
            [
              'title' => 'コーポレートサイト',
              'description' => 'アルテラス株式会社のコーポレートサイトです',
              'url' => 'https://alterrace.take006.com',
              'thumbnail' => 'pages/portfolio/thumbnail.jpg',
              'tags' => ['PHP']
            ],
            [
              'title' => 'Etude',
              'description' => 'WordPressのオリジナルテーマで開発したテックブログ',
              'url' => 'https://blog.take006.com',
              'thumbnail' => 'pages/blog/thumbnail.jpg',
              'tags' => ['WordPress', 'Bootstrap']
            ],
            [
              'title' => 'Learning-record',
              'description' => '個人用の学習記録サイト。主にプログラミング学習内容を記録しています',
              'url' => 'https://learning.take006.com',
              'thumbnail' => 'pages/learning/thumbnail.jpg',
              'tags' => ['PHP', 'Tailwind']
            ]
          ];

          foreach ($works as $work):
          ?>
          <a href="<?php echo $work['url']; ?>" <?php echo $work['url'] !== '#' ? 'target="_blank" rel="noopener noreferrer"' : ''; ?> class="group flex items-center justify-between p-8 bg-white border border-gray-200 rounded-lg hover:shadow-md transition-shadow duration-200">
            <div class="flex-1">
              <h3 class="text-lg font-bold text-gray-900 mb-6"><?php echo $work['title']; ?></h3>
              <p class="text-sm text-gray-600 leading-relaxed"><?php echo $work['url']; ?></p>
              <p class="text-sm text-gray-600 leading-relaxed mb-4"><?php echo $work['description']; ?></p>
              <div class="flex gap-2 flex-wrap">
                <?php foreach ($work['tags'] as $tag): ?>
                <?php
                  $tagColors = [
                    'WordPress' => 'bg-blue-100 text-blue-700',
                    'Bootstrap' => 'bg-purple-100 text-purple-700',
                    'PHP' => 'bg-purple-100 text-purple-700',
                    'Tailwind' => 'bg-blue-100 text-blue-700',
                    'React' => 'bg-yellow-100 text-yellow-700',
                    'TypeScript' => 'bg-blue-100 text-blue-700'
                  ];
                  $color = $tagColors[$tag] ?? 'bg-gray-100 text-gray-700';
                ?>
                <span class="inline-block px-3 py-1 <?php echo $color; ?> rounded-full text-xs font-semibold"><?php echo $tag; ?></span>
                <?php endforeach; ?>
              </div>
            </div>
            <svg class="w-6 h-6 text-gray-400 group-hover:text-gray-900 transition-colors flex-shrink-0 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
          <?php endforeach; ?>
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
              <a href="mailto:take088917761@gmail.com" class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold px-8 py-3 hover:shadow-lg transition-shadow">
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
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        <div>
          <h3 class="text-xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">MyPortfolio</h3>
          <p class="text-gray-400 text-sm">Web開発で、あなたのビジョンを実現します。</p>
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
