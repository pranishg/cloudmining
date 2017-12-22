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


                





                

                <div class="bordered-top"></div>
                <div class="container">
                        <div class="forced-client-menu">
                        
                        </div>
                            




                </div>

                <div class="partners-block-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="margin-bottom-15">Partners</h1>
                <p class="f18">Our services are available to all mining companies. If you are interested to sell your mining capacities and your company meets the following requirements, please contact us using form below.</p>
            </div>
        </div>
    </div>
</div>
<div class="partners-block-wrapper">
    <div class="container">
        <div class="partners-block-list">
            <img src="i/new_pages/partners_logo_1.png">
            <img src="i/new_pages/partners_logo_8.png">
            <img src="i/new_pages/partners_logo_4.png">
            <img src="i/new_pages/partners_logo_6.png">
            <img src="i/new_pages/partners_logo_7.png">
        </div>
    </div>
</div>
<div class="page-block-wrapper text-center">
    <div class="container">
        <h1>Requirements:</h1>
        <div class="partners-imgs">
            <div class="row">
                <div class="col-sm-4">
                    <div class="partners-img-wrapper"><img src="i/new_pages/partners_img_1.png" /></div>
                    You have working mining capacities of not less than 10 PH/s
                </div>
                <div class="col-sm-4">
                    <div class="partners-img-wrapper"><img src="i/new_pages/partners_img_2.png" /></div>
                    You have long-term contracts with reputable datacenters or you operate your own
                </div>
                <div class="col-sm-4">
                    <div class="partners-img-wrapper"><img src="i/new_pages/partners_img_3.png" /></div>
                    You can guarantee our customers stable payouts and compensation for downtime
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-block-wrapper gray-wrapper">
    <div class="container">
        <h1 class="text-center">Contact us</h1>
        <div class="partner-contacts">
            <div class="row">
                <div class="col-md-4">
                    <div class="partner-contact partner-contact-skype">
                        <div class="partner-contact-label">Skype</div>
                        <div class="partner-contact-value">partners@hashing24.com</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="partner-contact partner-contact-email">
                        <div class="partner-contact-label">Email</div>
                        <div class="partner-contact-value">partners@hashing24.com</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="partner-contact partner-contact-phone">
                        <div class="partner-contact-label">Phone</div>
                        <div class="partner-contact-value">+44 141 536 0163</div>
                    </div>
                </div>
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

<!-- Mirrored from hashing24.com/partners by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:12 GMT -->
</html>
