<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KAAVE - QR Sipariş</title>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=description content="KAAVE - QR Kod Sipariş Sistemi">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="KAAVE" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#e4e4e4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="KAAVE" />
    <meta name="msapplication-TileColor" content="#e4e4e4" />
    <meta name="msapplication-TileImage" content="/images/touch/mstile-150x150.png" />
    <meta name="theme-color" content="#fff" />
    <link rel="apple-touch-icon" href="/images/touch/apple-touch-icon.jpg" />
    <link rel="icon" type="image/png" href="/images/touch/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/images/touch/favicon-16x16.png" sizes="16x16" />
    <link rel="shortcut icon" href="/images/touch/favicon.ico">
    <link rel="manifest" href="/manifest.json">
    <link rel="preload" as="script" href="/app/decoder.min.js">
    <link href="bundle.css" rel="stylesheet">
</head>
<body>
<div class="app__layout">
    <!-- Header -->
    <header class="app__header">
        <span class="app__header-icon" onclick="window.open('https://kaavekeyfi.com', '_blank', 'toolbar=0,location=0,menubar=0');">
          <svg fill="#FFFFFF" height="27" viewBox="0 0 24 24" width="27" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"
            />
          </svg>
        </span>
    </header>

    <main class="app__layout-content">
        <video autoplay></video>

        <!-- Dialog  -->
        <div class="app__dialog app__dialog--hide">
            <div class="app__dialog-content">
                <h5>Kodu Takip Et</h5>
                <input type="text" id="result">
            </div>
            <div class="app__dialog-actions">
                <button type="button" class="app__dialog-open">Devam</button>
                <button type="button" class="app__dialog-close">Kapat</button>
            </div>
        </div>

        <div class="app__dialog-overlay app__dialog--hide"></div>

        <!-- Snackbar -->
        <div class="app__snackbar"></div>
    </main>
</div>
<div class="app__overlay">
    <div class="app__overlay-frame"></div>
    <!-- Scanner animation -->
    <div class="custom-scanner"></div>
    <div class="app__help-text"></div>
</div>

<div class="app__select-photos"></div>

<script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.6/pwacompat.min.js" integrity="sha384-GOaSLecPIMCJksN83HLuYf9FToOiQ2Df0+0ntv7ey8zjUHESXhthwvq9hXAZTifA"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="/bundle.js"></script>

</body>
</html>
