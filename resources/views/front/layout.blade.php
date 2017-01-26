<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{{$title or 'Бамбини'}}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('front.style')
        @yield('style')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="tKMa94Sq1-hUI2bOnyW5JqnQS-vfTseBPT3GJwfCT90" />
		<meta name="yandex-verification" content="e18864531b17c18e" />
    </head>

    <body>
        <div class="wrapper">
            @include('front.header')
            @yield('header')
            @yield('content')
        </div>
        <div class="popup-hider">
            @yield('ask')
        </div>
        @include('front.scripts')
        @yield('scripts')
        <div class="hide-block">
            @include('front.popups.ask')
            @include('front.popups.lesson')
            @include('front.popups.thank')
            @yield('ask')
            @yield('lesson')
            @yield('thank')
        </div>
		
			<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-82225840-1', 'auto');
				  ga('send', 'pageview');
				
			</script>

			<!-- Yandex.Metrika counter -->
			<script type="text/javascript">
				(function (d, w, c) {
					(w[c] = w[c] || []).push(function() {
						try {
							w.yaCounter38967945 = new Ya.Metrika({
								id:38967945,
								clickmap:true,
								trackLinks:true,
								accurateTrackBounce:true
							});
						} catch(e) { }
					});

					var n = d.getElementsByTagName("script")[0],
						s = d.createElement("script"),
						f = function () { n.parentNode.insertBefore(s, n); };
					s.type = "text/javascript";
					s.async = true;
					s.src = "https://mc.yandex.ru/metrika/watch.js";

					if (w.opera == "[object Opera]") {
						d.addEventListener("DOMContentLoaded", f, false);
					} else { f(); }
				})(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript><div><img src="https://mc.yandex.ru/watch/38967945" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    </body>
</html>
