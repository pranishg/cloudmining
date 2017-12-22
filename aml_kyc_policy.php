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

<h3 class="page-head">AML/KYC Policy</h3>
<p>For purposes of this Policy, “us,” “we,” or “our” refer to the company d/b/a Hashing24.</p>
<p>Our Anti-Money Laundering and Know Your Customer Policy (hereinafter - the “AML/KYC Policy”) are designated to prevent and mitigate possible risks of us being involved in any kind of illegal activity.</p>

<p>Both international and local regulations require us to implement effective internal procedures and mechanisms to prevent money laundering, terrorist financing, drug and human trafficking, proliferation of weapons of mass destruction, corruption and bribery and to take action in case of any form of suspicious activity of our customers.</p>
<p>AML/KYC Policy covers the following matters:</p>
<ul>
    <li>Compliance Officer;</li>
    <li>Risk Assessment;</li>
    <li>Verification procedures;</li>
    <li>Monitoring Transactions.</li>
</ul>
<p><b>Compliance Officer</b></p>
<p>The Compliance Officer is the person, duly authorized by us, whose duty is to ensure the effective implementation and enforcement of the AML/KYC Policy. It is the Compliance Officer’s responsibility to supervise all aspects of our anti-money laundering and counter-terrorist financing, including but not limited to:</p>
<ul>
    <li>Collecting customers’ identification information;</li>
    <li>Establishing and updating internal policies and procedures for the completion, review, submission and retention of all reports and records required under the applicable laws and regulations;</li>
    <li>Monitoring transactions and investigating any significant deviations from normal activity;</li>
    <li>Implementing a records management system for appropriate storage and retrieval of documents, files, forms and logs;</li>
    <li>Updating risk assessment regularly;</li>
    <li>Providing law enforcement with information as required under the applicable laws and regulations.</li>
</ul>
<p>The Compliance Officer is entitled to interact with law enforcement, which are involved in the prevention of money laundering, terrorist financing and other illegal activities.</p>
<p><b>Risk Assessment</b></p>
<p>We, in line with the international requirements, have adopted a risk-based approach to combating money laundering and terrorist financing. By adopting a risk-based approach, we are able to ensure that measures to prevent or mitigate money laundering and terrorist financing are commensurate with the identified risks. This will allow resources to be allocated in the most efficient ways. The principle is that resources should be directed in accordance with priorities so that the greatest risks receive the highest attention.</p>

<p><b>Verification procedures</b></p>
<p>One of the international standards for preventing illegal activity is customer due diligence (“CDD”). According to CDD, we establish our own verification procedures within the standards of Anti-Money Laundering and “Know Your Customer” frameworks.</p>

<p>a) Identity verification</p>
<p>Our identity verification procedure requires the customer to provide us with reliable, independent source documents, data or information (e.g., national ID, international passport, bank statement, utility bill). For such purposes, we reserve the right to collect customer’s identification information for the AML/KYC Policy purposes.</p>
<p>We will take steps to confirm the authenticity of documents and information provided by the customers. All legal methods for double-checking identification information will be used and we reserve the right to investigate certain customers who have been determined to be risky or suspicious.</p>
<p>We reserve the right to verify a customer’s identity in an on-going basis, especially when their identification information has been changed or their activity seemed to be suspicious (unusual for the particular customer). In addition, we reserve the right to request up-to-date documents from the customers, even though they have passed identity verification in the past.</p>
<p>Customer’s identification information will be collected, stored, shared and protected strictly in accordance with our Privacy Policy and related regulations.</p>
<p>Once the customer’s identity has been verified, we are able to remove ourselves from potential legal liability in a situation where our services are used to conduct illegal activity.</p>
<p>b) Card verification</p>
<p>The customers who use payment cards connected with our services can be asked to pass card verification. It may include:</p>
<ul>
    <li>Scan/photo of the card statement of the page which shows there was a payment for our services.</li>
    <li>Scans/photo of the payment card (both sides). We require cardholder name and signature, first 6 and last 4 digits of the card’s number have to be clearly seen. CVV code and remain part of the card’s number must be hidden by a piece of paper. </li>
    <li>Selfie, where the customer is holding clearly visible payment card in the hand (only first 6 and last 4 digits of the number have to be seen well) plus a piece of paper with a sign "Hashing24" and current date for the moment customer is taking the selfie.</li>

    <li>Any other documents confirming that the payment has been authorized by the cardholder indeed. </li>
</ul>
<p><b>Monitoring Transactions</b></p>

<p>The customers are known not only by verifying their identity (who they are) but, more important, by analyzing their transactional patterns (what they do). Therefore, we rely on data analysis as a risk-assessment and suspicion detection tool. We perform a variety of compliance-related tasks, including capturing data, filtering, recordkeeping, investigation management, and reporting. System functionalities include:</p>
<p>a) A daily check of customers against recognized “black lists” (e.g. OFAC), aggregating transfers by multiple data points, placing customers on watch and service denial lists, opening cases for investigation if it is essential, sending internal communications and filling out statutory reports, if applicable;</p>
<p>b) Case and document management.</p>
<p>With regard to the AML/KYC Policy, we will monitor all transactions and it reserves the right to:</p>
<ul>
    <li>ensure that transactions of suspicious nature are reported to the proper law enforcement through the Compliance Officer;</li>
    <li>request the customer to provide any additional information and documents in case of suspicious transactions;</li>
    <li>suspend or terminate customer’s account when we have reasonable suspicion that such customer is engaged in illegal activity.</li>
</ul>
<p>The above list is not exhaustive and the Compliance Officer will monitor customers’ transactions on a day-to-day basis in order to define whether such transactions are to be reported and treated as suspicious or are to be treated as bona fide.</p>

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

<!-- Mirrored from hashing24.com/aml_kyc_policy by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:15 GMT -->
</html>
