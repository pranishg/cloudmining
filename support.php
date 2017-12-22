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


                





                <div class="support-block-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="margin-bottom-15">Customer Support</h1>
                <p class="f18">If you have any inquiries about our work, or you need help, please contact any of our offices</p>
            </div>
        </div>
    </div>
</div>


                <div class="bordered-top"></div>
                <div class="container">
                        <div class="forced-client-menu">
                        
                        </div>
                            





<div class="page-block-wrapper">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h1 class="support-form-title">Get in touch</h1>
                <p class="support-form-subtitle">Please fill out the form, and the Hashing24 team will reply within 24 hours.</p>
                <form action='https://hashing24.com/client/support' method="POST" class="support-form">
                    <input type="hidden" name="support" value="1" />
                    <input required class="support-field" name="name" placeholder="Your first and last name" />
                    <input type="email" required class="support-field" name="email" placeholder="E-mail" />
                    <input required name="message" placeholder="Your message" class="support-field" />
                    <div class="support-recapthca-wrapper">
                        <div id="supportRC" class="g-recaptcha" data-sitekey="6Lf-tzMUAAAAAGtf_pw_wsolTKqAqifJ7MYsqPmT"></div>
                    </div>
                    <input class="btn btn-success btn-lg support-submit-btn" type="submit" value="Submit" />
                </form>
            </div>
        </div>

    </div>
</div>

                </div>
<!--
             <div class="offices-gray-wrapper">
    <div class="container">
        <h1 class="text-center">Representative offices</h1>
<div class="row margin-top-55 margin-bottom-15">
    <div class="col-sm-4">
        <div class="clearfix margin-bottom-15 office-block">
            <img src="i/new_pages/office_scc81e.png?2" class="pull-left margin-right-20 office-photo" alt="Hashing24 - Scotland, UK">
            <div class="office-country">Scotland, UK <img src="i/new_pages/flag_scc81e.png?2" alt="Scotland, UK"></div>
            <div class="office-address">272 Bath Street, Glasgow, G2 4JR</div>
            <div class="office-phone">+44 141 536 0163</div>
            <div class="office-email"><a href="mailto:headquarter@hashing24.com">headquarter@hashing24.com</a></div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="clearfix margin-bottom-15 office-block">
            <img src="i/new_pages/office_thc81e.png?2" class="pull-left margin-right-25 office-photo" alt="Hashing24 - Thailand">
            <div class="office-country">Thailand <img src="i/new_pages/flag_thc81e.png?2" alt="Thailand"></div>
            <div class="office-phone">+66 60 002 4027</div>
            <div class="office-email"><a href="mailto:thailand@hashing24.com">thailand@hashing24.com</a></div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="clearfix margin-bottom-15 office-block">
            <img src="i/new_pages/office_ukc81e.png?2" class="pull-left margin-right-25 office-photo" alt="Hashing24 - Ukraine">
            <div class="office-country">Ukraine <img src="i/new_pages/flag_ukc81e.png?2" alt="Ukraine"></div>
            <div class="office-phone">+380 44 290 8495</div>
            <div class="office-email"><a href="mailto:ukraine@hashing24.com">ukraine@hashing24.com</a></div>
        </div>
    </div>
</div>

    </div>
</div>
-->
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

<!-- Mirrored from hashing24.com/support by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:13 GMT -->
</html>
