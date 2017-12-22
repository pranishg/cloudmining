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

                            
<style>
#ppBody {
    font-size: 11pt;
    width: 100%;
    margin: 0 auto;
    text-align: justify;
}

#ppHeader {
    font-family: verdana;
    font-size: 21pt;
    width: 100%;
    margin: 0 auto;
}
</style>

<h3 class="page-head">Privacy Policy</h3>

<div id='ppBody'>
    <div class='innerText'>This privacy policy has been compiled to better serve those who are concerned with how their &#39;Personally identifiable information&#39; (PII) is being used online. PII is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.<br>
    </div>
    <br>
    <div class='grayText'>
        <strong>What personal information do we collect from the people that visit our blog, website or app?</strong>
    </div>
    <br />
    <div class='innerText'>When ordering or registering on our site, as appropriate, you may be asked to enter your email address or other details to help you with your experience.</div>
    <br>
    <div class='grayText'>
        <strong>When do we collect information?</strong>
    </div>
    <br />
    <div class='innerText'>We collect information from you when you register on our site or enter information on our site.</div>
    <br>
    <div class='grayText'>
        <strong>How do we use your information? </strong>
    </div>
    <br />
    <div class='innerText'>We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:</div>

    <ul>
    <li>To quickly process your transactions.</li>
    <li>To send periodic emails regarding your order or other products and services.</li>
    </ul>

    <div class='grayText'>
        <strong>How do we protect visitor information?</strong>
    </div>
    <br />
    <div class='innerText'>We only provide articles and information. We never ask for credit card numbers.</div>
    <div class='innerText'>Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.</div>
    <br>
    <div class='innerText'>We implement a variety of security measures when a user places an order enters, submits, or accesses their information to maintain the safety of your personal information.</div>
    <br>
    <div class='innerText'>All transactions are processed through a gateway provider and are not stored or processed on our servers.</div>
    <br>
    <div class='grayText'>
        <strong>Do we use &#39;cookies&#39;?</strong>
    </div>
    <br />
    <div class='innerText'>Yes. Cookies are small files that a site or its service provider transfers to your computer&#39;s hard drive through your Web browser (if you allow) that enables the site&#39;s or service provider&#39;s systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</div>
    <div class='innerText'>
        <br>
        <strong>We use cookies to:</strong>
    </div>

    <ul>
      <li>Help remember and process the items in the shopping cart.</li>
      <li>Understand and save user&#39;s preferences for future visits.</li>
      <li>Keep track of advertisements.</li>
      <li>Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third-party services that track this information on our behalf.</li>
    </ul>

    <div class='innerText'>You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer) settings. Each browser is a little different, so look at your browser&#39;s Help menu to learn the correct way to modify your cookies.<br>
    </div>
    <br>
    <div class='innerText'>If you disable cookies off, some features will be disabled It won&#39;t affect the user&#39;s experience that make your site experience more efficient and some of our services will not function properly.</div>
    <br>
    <div class='innerText'>However, you can still place orders .</div>
    <br>
    <div class='grayText'>
        <strong>Third-party disclosure</strong>
    </div>
    <br />
    <div class='innerText'>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when it&#39;s release is appropriate to comply with the law, enforce our site policies, or protect ours or others&#39; rights, property or safety.<br><br>
        However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.
    </div>
    <br>
    <div class='grayText'>
        <strong>Third-party links</strong>
    </div>
    <br />
    <div class='innerText'>We do not include or offer third-party products or services on our website.</div>
    <br>
    <div class='innerText'>Our Privacy Policy link includes the word &#39;Privacy&#39; and can be easily be found on the home page or as a minimum on the first significant page after entering our website.</div>
    <div class='innerText'>Users will be notified of any privacy policy changes on our Privacy Policy Page.</div>
    <div class='innerText'>Users are able to change their personal information by logging in to their account</div>
    <div class='innerText'>
        <br>
        <strong>How does our site handle do not track signals?</strong>
    </div>
    <div class='innerText'>We honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.</div>
    <br>
    <div class='innerText'>
        <strong>We collect your email address in order to:</strong>
    </div>
    <ul>
      <li>Send information, respond to inquiries, and/or other requests or questions.</li>
      <li>Process orders and to send information and updates pertaining to orders.</li>
      <li>We may also send you additional information related to your product and/or service.</li>
      <li>Market to our mailing list or continue to send emails to our clients after the original transaction has occurred.</li>
    </ul>

    <div class='innerText'>
        <strong>If at any time you would like to unsubscribe from receiving future emails, you can follow the instructions at the bottom of each email.</strong>
    </div>
    We will promptly remove you from the correspondence.
</div>

<br>
<br>

<div class='blueText'>
    <strong>Contacting Us</strong>
</div>
<br />
<div class='innerText'>
    If there are any questions regarding this privacy policy you may contact us using <a href='support.php'>this form</a>.
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

<!-- Mirrored from hashing24.com/privacy by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:15 GMT -->
</html>
