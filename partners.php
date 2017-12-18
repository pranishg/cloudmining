<?php include_once 'header.php';?>

<!-- Modal -->
<div class="modal fade modal-open bs-example-modal-sm" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
		<div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Sign In</h4>
	        <small class="js_or-register-new">OR <a href="register.php">REGISTER NEW ACCOUNT</a></small>
	    </div>
        <div class="modal-body">
            
<div class="row">
    <div class="col-md-12">
        <div class="alert hidden js-login_alert"></div>
    </div>
</div>
<form class="form-horizontal" method="POST" action="https://hashing24.com/authenticate" id="js-authenticate">
    <input type="hidden" name="api_key" value="">
    <input type="hidden" name="ask_pin" value="0">
    <input type="hidden" name="ask_2step" value="0">
    <div class="js-auth_inputs js-auth_login">
        <div class="row form-group">
            <div class="col-md-12">
                <input type="text" class="form-control" name="email" placeholder="Email" />
            </div>
        </div>
        <div class="row form-group signin-password-wrapper">
            <div class="col-md-12">
                <input type="password" class="form-control" name="password" placeholder="Password" />
            </div>
        </div>
    </div>
    <div class="js-auth_inputs js-auth_verification display_none">
        <div class="row form-group">
            <div class="col-md-12">
                <h4>
                    2-Step Verification
                    <a href="#"  class="btn btn-default btn-sm j_cancel-2step">Cancel</a>
                </h4>
                Enter the verification code generated by your mobile application &quot;Google Authenticator&quot;.
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
              <input type="text" class="form-control" name="verification_code" placeholder="Verification code" />
            </div>
        </div>
    </div>
    <div class="js-pin-block hidden">
        <div class="row form-group">
            <div class="col-md-12">
                <h4>Help us serve you better</h4>
                Create a 4-digit PIN to increase your security level.
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <input type="text" class="form-control" name="pin" placeholder="0000" maxlength="4" pattern="\d{4}" />
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <small class="gray">It is very important to remember your PIN. It can not be changed or restored.</small>
            </div>
        </div>
    </div>
    <div class="row form-group js-signin-recaptcha hidden">
        <div class="col-md-12">
            <div id="authRC" class="g-recaptcha" data-sitekey="6Lf-tzMUAAAAAGtf_pw_wsolTKqAqifJ7MYsqPmT"></div>
        </div>
    </div>
    <div class="row form-group signin-button-wrapper">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary col-md-12 js-signin" data-loading-text="Loading...">Sign In</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="index.php" class="btn btn-link js-reset_password" data-loading-text="Loading..."><small>I can&#39;t access my account</small></a>
        </div>
    </div>
    <div class="js-auth_inputs js-auth_verification display_none">
        <p class="small text-center margin-top-5">Wrong code generated?<br>Solution is <a href="faq.php#q19">here</a>.</p>
    </div>
    <div class="js-auth_inputs js-auth_login">
        <div class="sign-in-divider">
            <span>OR</span>
        </div>
        <div class="sign-in-social">sign in with social account</div>
        <div class="sign-in-social-icons">
            <a class="sign-in-social-icon" href="https://graph.facebook.com/oauth/authorize?response_type=code&amp;client_id=1947287212159869&amp;redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Ffacebook%2Fcallback&amp;scope=email&amp;state=">
                <span class="fa-stack icon-social icon-fb">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a class="sign-in-social-icon" href="https://accounts.google.com/o/oauth2/auth?client_id=943004047393-oqqtc94hmntmej4ivvr25anb57j17lmc.apps.googleusercontent.com&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Fgoogle%2Fcallback&amp;scope=email&amp;state=">
                <span class="fa-stack icon-social icon-gp">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </div>
    </div>
</form>


<script type="text/javascript">

function preShowCaptcha() {
    $.ajax({
        type: "POST",
        url: '/loginnc'
    })
    .done(function(data) {
        if (data.captcha_is_needed) {
            $('.js-signin-recaptcha').removeClass('hidden');
//            if (grecaptcha && typeof(RCids['authRC']) != 'undefined') {
//                grecaptcha.execute(RCids['authRC']);
//            }
        }
    });
}

$(document).ready(function() {
        $(".js-auth_verification").hide();
        $('.js-pin-block').addClass('hidden');
        $(".js-auth_login").show();
        $(".js-signin").html('Sign In');
        $(".js-login_alert").addClass('hidden');
        $(".js-login_alert").removeClass('alert-danger');
        $(".js-login_alert").removeClass('alert-info');
        $("input[name=email]").focus();
});

var isAuthSubmitting = false;
$("#js-authenticate").submit( function() {
    if (isAuthSubmitting) {
        return false;
    }

    if (!$('.js-pin-block').hasClass('hidden') && $('[name="agreement_external_system"]').length) {
        var stopSubmit = false;
        if ( !$('[name="agreement_external_system"]').prop('checked') ) {
            $('.j_agreement-external-system').addClass('has-error');
            stopSubmit = true;
        }

        if ( !$('[name="disclaimer_external_system"]').prop('checked') ) {
            $('.j_disclaimer-external-system').addClass('has-error');
            stopSubmit = true;
        }

        if (stopSubmit) { return false; }
    }

    isAuthSubmitting = true;
    $(".js-login_alert").addClass('hidden');
    $(".js-login_alert").removeClass('alert-danger');

    $.ajax({
        type: "POST",
        url: '/authenticate',
        data: $('#js-authenticate').serialize(),
    })
    .done(function(data) {
        isAuthSubmitting = false;

        if (data.is_pin_added && typeof(ga) != 'undefined' ) {
            ga('send', 'event', 'REGISTER', 'REGISTER', 'REGISTER');
        }

        if (data.captcha_is_needed) {
            $('.js-signin-recaptcha').removeClass('hidden');
        }
        if (data.error_message || data.captcha_is_needed) {
            if (grecaptcha && typeof(RCids['authRC']) != 'undefined') {
                grecaptcha.reset(RCids['authRC']);
//                grecaptcha.execute(RCids['authRC']);
            }
            if (data.verification_code_error) {
                $("input[name=verification_code]").val('').focus();
            } else {
                $(".js-auth_verification").hide();
                if (!data.pin_error) {
                    $(".js-auth_login").show();
                    $(".js-signin").html('Sign In');
                    $("input[name=password]").val('').focus();
                }
            }
            $(".js-login_alert").addClass('alert-danger');
            $(".js-login_alert").html(data.error_message);
            if (data.error_message) { $(".js-login_alert").removeClass('hidden'); }
        }
        else {
            if (data.google_auth) {
                $('.js-signin-recaptcha').addClass('hidden');
                $(".js_or-register-new").hide();
                $(".js-reset_password").hide();
                //$(".js-auth_inputs").toggle();
                $(".js-auth_login").hide();
                $(".js-auth_verification").show();
                $(".js-signin").html('Verify');
                $("input[name=verification_code]").focus();
                return false;
            }

            if (data.pin_is_needed) {
                $(".js-auth_inputs, .js_or-register-new").hide();
                $(".js-reset_password").hide();
                $('.js-pin-block').removeClass('hidden');
                $(".js-signin").html('Complete registration');
                return false;
            }

            $('#signInModal').hide();
            if (data.redirect_url) {
                document.location.assign(data.redirect_url);
            }
            else {
                if ($('#js-order_form').get(0) && (document.location.pathname == '/' || document.location.pathname == '')) {
                    $ghs = $('input[name=ghs]').val();
                    $currency = $('input[name=currency]:checked').val().toLowerCase();
                    document.location.assign('/portfolio/' + $ghs + '/' + $currency);
                }
                else {
                    if ( data.has_plans ) {
                        document.location.assign('/contract');
                    }
                    else {
                            document.location.assign('/portfolio');
                    }
                }
            }
        }
    })
    .always(function () {
        isAuthSubmitting = false;
        // btn.button('reset')
    });

    return false;
});

$(".js-reset_password").click( function() {
    if ( !$('#js-authenticate').hasClass('js_reseting-password') ) {
        $('#js-authenticate').addClass('js_reseting-password')
//        $('.js-signin-recaptcha').removeClass('hidden');
//        $(".js-reset_password").removeClass('btn-link').addClass('btn btn-danger col-md-12');
    }
    else {
        var la = $(".js-login_alert");
        la.removeClass('alert-danger').addClass('alert-info').html('Checking...').removeClass('hidden');

        $.ajax({
            type: "POST",
            url: '/forgot_password',
            data: $('#js-authenticate').serialize()
        })
        .done(function(data) {
            if (data.message) {
                la.addClass('alert-info').html(data.message).removeClass('hidden');
                $('#js-authenticate').removeClass('js_reseting-password');
            }
            else if (data.error_message) {
                la.addClass('alert-danger').html(data.error_message).removeClass('hidden');
                $('input[name=email]').focus();
            }
        })
        .always(function () {
            // btn.button('reset')
        });
    }
	return false;
});

$('.j_cancel-2step').on('click', function(e){
    $('input[name="ask_2step"]').val(0);
    $(".js-auth_verification").hide();
    $('.js-pin-block').addClass('hidden');
    $(".js-auth_login").show();
    $(".js-signin").html('Sign In');
    $(".js-login_alert").addClass('hidden');
    $(".js-login_alert").removeClass('alert-danger');
    $(".js-login_alert").removeClass('alert-info');
    $(".js_or-register-new").show();
    $(".js-reset_password").show();
    $("input[name=email]").focus();
    return false;
});

</script>

	 	</div>
    </div>
  </div>
</div>

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