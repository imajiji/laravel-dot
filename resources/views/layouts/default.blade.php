<!DOCTYPE html>
<html lang="en">
<!-- Start Head -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aperitif - Custom Template</title>

    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/modules.css">

    <!-- Canonical URL usage -->
    <link rel="canonical" href="https://aperitif.io/">

    <!-- Facebook Open Graph -->
    <meta property="og:url"                content="https://aperitif.io/" />
    <meta property="og:title"              content="Aperitif | The web template generator" />
    <meta property="og:description"        content="Aperitif is a rapid web template generation tool." />
    <meta property="og:image"              content="https://aperitif.io/img/aperitif-facebook.png" />
    <meta property="og:image:width"        content="1200" />
    <meta property="og:image:height"       content="630" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Aperitif">
    <meta name="twitter:creator" content="@Aperitif">
    <meta name="twitter:title" content="Aperitif - The web template generator">
    <meta name="twitter:description" content="Aperitif is a rapid web template generation tool.">
    <meta name="twitter:image" content="https://aperitif.io/img/aperitif-card.png">

    <!-- Google Structured Data -->
    <script type="application/ld+json">
    {
    "@context" : "http://schema.org",
    "@type" : "SoftwareApplication",
    "name" : "Aperitif",
    "image" : "https://aperitif.io/img/aperitif-logo.svg",
    "url" : "https://aperitif.io/",
    "author" : {
      "@type" : "Person",
      "name" : "Octavector"
    },
    "datePublished" : "2017-MM-DD",
    "applicationCategory" : "HTML"
    }
    </script>
</head>
<!-- End Head -->

<body class="default">
@if (session('flash_message'))
<div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message') }}</div>
@endif
<!--
START MODULE AREA 1: header1
-->
<header class="MOD_HEADER1">
  <div data-layout="_r">
    <div data-layout="al16 de10" class="MOD_HEADER1_Title">
      <h1 class="MOD_HEADER1_TextLogo"><a href="/">@yield('title')</a></h1>
      <p class="MOD_HEADER1_Slogan">@yield('description')</p>
    </div>
  </div>
</header>
<!--
END MODULE AREA 1: Header 1
-->

<!--
START MODULE AREA 2: Feature 1
-->
@yield('content')
<!--
END MODULE AREA 2: Feature 1
-->

<!--
START MODULE AREA 3: Footer 2
-->
<footer>
  <div class="MOD_FOOTER2" data-theme="_bgd">
    <div data-layout="_r">
      <div data-layout="al16 ch8 ch-o1 ec-third ec-o1">
        <h3>Links</h3>
        <nav>
          <ul>
            <li><a href="#">Footer Link 1</a></li>
            <li><a href="#">Footer Link 2</a></li>
            <li><a href="#">Footer Link 3</a></li>
            <li><a href="#">Footer Link 4</a></li>
            <li><a href="#">Footer Link 5</a></li>
          </ul>
        </nav>
      </div>
      <div data-layout="al16 ch8 ch-o2 ec-third ec-o3">
        <h3>Address</h3>
          <address>
            123 The High Street<br>
            The Town<br>
            The City<br>
            County / State<br>
            Postal / Zip Code
          </address>
      </div>
    </div>
  </div>
</footer>
<!--
END MODULE AREA 3: Footer 2
-->

<script src="/js/index.js"></script>
</body>

</html>