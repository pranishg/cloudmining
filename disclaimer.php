<?php include_once 'header.php';

include_once './sign.php';
?>


<script>

$('#signInModal').on('shown.bs.modal', function (e) {
    $('#js-authenticate').removeClass('js_reseting-password');
    $("input[name=email]").focus();
        preShowCaptcha();
});

var user_balances = new Array();


$(document).ready(function() {

    $.cookie("tm", (0-(new Date()).getTimezoneOffset()), { expires : 365 });
});

function isBreakpoint( alias ) {
	return $('.device-' + alias).is(':visible');
}

var waitForFinalEvent=function(){var b={};return function(c,d,a){a||(a="");b[a]&&clearTimeout(b[a]);b[a]=setTimeout(c,d)}}();
var fullDateString = new Date();


</script>
<!-- END .header -->


                





                

                <div class=""></div>
                <div class="container">
                    <div class="panel panel-default main_panel">
                        
                        <div class="panel-body">

                            

<h3 class="page-head">Disclaimer</h3>

<div class="disclaimer-page"><p>The website <a href="index.php">https://hashing24.com/</a> (hereinafter, referred to as the “Web site”) provides Bitcoin mining services. You are not authorized and nor should you rely on the Website for legal advice, business advice, or advice of any kind. You act at your own risk in reliance on the services of the Website. Should you make a decision to act or not act you should do your own research and due diligence. In no way are the owners of the Website responsible for the actions, decisions, or other behavior taken or not taken by you in reliance upon the Website.</p>
<p>The Website may contain translations of the English version of the content available on the Website. These translations are provided only as a convenience. In the event of any conflict between the English language version and the translated version, the English language version shall take precedence. If you notice any inconsistency, please report them to our Support.</p>
<p>Using of Bitcoin mining services provided by Website should be done with care and proper financial consultation only, and even after that, with spare money only -if at all.</p>
<p>Before deciding to invest in Bitcoin mining you should carefully consider your investment objectives, level of experience, and risk appetite. Please do your own research and due diligence on the services provided by Website. Past performance is not indicative of future possible returns or results.</p>
<p>The investment in Bitcoin mining can lead to loss of money over short or even long periods. The investors in Bitcoin mining should expect prices to have large range fluctuations. The information published on the Web site can’t guarantee that the investors in Bitcoin mining would not lose money.</p>
<p>The Website is provided on an “as is” basis without any warranties of any kind regarding the Website and/or any content, data, materials and/or services provided on the Website.</p>
</div>


                        </div>
                    </div>
                </div>

                
            </div>
            


<div class="modal fade modal-open" id="maintenanceModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Current Maintenance Cost</h4>
        </div>
        <div class="modal-body margin-bottom-0 padding-bottom-0">
            <div class="row">
                <div class="col-md-12">
                    To cover electricity use and system upkeep, we charge a small commission for cloud-based THS.
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="margin-bottom-0 padding-bottom-0">1 THS maintenance = $
                        <button class="btn btn-default btn-lg" disabled><b>0.33</b></button>
                        <small class="black">per day</small>
                    </h2>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="text-left">
            Find detailed information on how the cost is covered and calculated in our terms of use <a href="terms.php">here</a>.
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>
</div>



<?php include_once 'footer.php';?>

        <div class='notifications top-right'></div>
        <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78502902-1', 'auto');
  ga('send', 'pageview');



</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37629880 = new Ya.Metrika({
                    id:37629880,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "../d31j93rd8oukbv.cloudfront.net/metrika/watch_ua.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37629880" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

        <script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 8095831;
(function() {
var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>


    </body>

<!-- Mirrored from hashing24.com/disclaimer by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:16 GMT -->
</html>
