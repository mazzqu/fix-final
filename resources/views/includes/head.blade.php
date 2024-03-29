  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {!! SEO::generate(true) !!}

<!--In this file only for injection header directory for HTML setup-->
<!--CSS のみファイルのためディレクトリー-->

  <!-- Favicons -->
  <link href="{{ asset('favicon.ico') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/artikel_v2/vendor/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/artikel_v2/vendor/aos.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin_v2/css/fontawesome-free/css/all.min.css') }}" />

	<!-- Extract CSS file for adjustment -->
	<!-- 自分からの設定 CSS fileを読み込み -->
	<link rel="stylesheet" href="{{asset('css/adjustment.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/artikel_v2/main.css') }}" rel="stylesheet">
