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
            <a class="sign-in-social-icon" href="https://graph.facebook.com/oauth/authorize?redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Ffacebook%2Fcallback&amp;response_type=code&amp;client_id=1947287212159869&amp;state=&amp;scope=email">
                <span class="fa-stack icon-social icon-fb">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a class="sign-in-social-icon" href="https://accounts.google.com/o/oauth2/auth?state=&amp;scope=email&amp;redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Fgoogle%2Fcallback&amp;response_type=code&amp;client_id=943004047393-oqqtc94hmntmej4ivvr25anb57j17lmc.apps.googleusercontent.com">
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


                





                <div class="prices-block-gray">
    <div class="container clearfix">
        <img src="i/new_pages/prices_block_bg.png" class="hidden-xs hidden-sm pull-left margin-right-20" alt="Hashing24 - Start Bitcoin Mining Right Now">
        <h1>Start Bitcoin Mining Right Now</h1>
        <h4 class="tall-line-header">There are two simple steps. Customize a plan that best suits your needs and proceed with the payment.</h4>
    </div>
</div>


                <div class=""></div>
                <div class="container">
                        <div class="forced-client-menu">
                        
                        </div>
                            






<div class="tariffs-wrapper j-tariffs-wrapper">
<div class="tariff-block-title text-center">
    <img src="i/tariff_custom.png" alt="Hashing24 - Set up a plan" />
    Set up a plan
</div>

<div class="row">
        <div class="col-sm-6 ">
            <div class="panel panel-primary panel-contract ">
                <div class="panel-heading text-center">
                    <span>
                        36-month plan
                    </span>
                </div>
                <div class="panel-body">
                    <form class="tariff-block tariff-custom" action="https://hashing24.com/contract/new" method="POST" contract-type="DEFAULT">
                        <input type="hidden" name="ghs" value="1" class="j-custom-tariff-input" />
                        <div class="limit-reached-warn-wrapper">
                            <div class="limit-reached-warn">
                                <div class="limit-reached-warn-title">SOLD OUT <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                                <div class="limit-reached-warn-desc">Unfortunately, hashing power we are selling from data centers of our partners has limited supply. We have stopped sales for a while but will be back soon. Please <a href="register.php">register an account</a> with us if you'd like to stay tuned </div>
                            </div>
                        </div>
                        <fieldset disabled class="limit-reached-disabled">
                            <div class="widget-big-price-wrapper">
                                <div class="widget-big-price-wrapper-currency j-widget-big-price-wrapper-currency"></div>
                                <div class="widget-big-price-wrapper-value j-widget-big-price-wrapper-value"></div>
                            </div>
                            <div class="clearfix tariff-block-blue-text">
                                <div class="bc-label">
                                    <ul class="tariff-block-currency-list">
                                        <li>
                                            <input type="radio"  name="currency" id="custom-tariff-currency-BTC-HASH(0x8b1c068)" value="BTC">
                                            <label for="custom-tariff-currency-BTC-HASH(0x8b1c068)">
                                                BTC
                                                <span class="j-custom-tariff-price-span" currency="BTC"></span>
                                                <div class="custom-tariff-currency-check"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" checked name="currency" id="custom-tariff-currency-USD-HASH(0x8b1c068)" value="USD">
                                            <label for="custom-tariff-currency-USD-HASH(0x8b1c068)">
                                                USD
                                                <span class="j-custom-tariff-price-span" currency="USD"></span>
                                                <div class="custom-tariff-currency-check"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio"  name="currency" id="custom-tariff-currency-EUR-HASH(0x8b1c068)" value="EUR">
                                            <label for="custom-tariff-currency-EUR-HASH(0x8b1c068)">
                                                EUR
                                                <span class="j-custom-tariff-price-span" currency="EUR"></span>
                                                <div class="custom-tariff-currency-check"></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="f12 text-center light_gray clearfix"><small>one-time payment</small></p>
                            <div class="bc-input-wrapper bc-input-wrapper-blue widget-ghs-wrapper">
                                <input name="bc-power" class="bc-input j-custom-tariff-power-new" value="100 GH/s">
                                <div class="bc-input-steps">
                                    <div class="bc-input-step bc-input-step-up" step="100"></div>
                                    <div class="bc-input-step bc-input-step-down" step="-100"></div>
                                </div>
                            </div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Maintenance <span class="j-widget-label-tooltip fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Paid automatically from daily mined BTC volume"></span></div>
                                <div class="bc-label pull-right">$0.00033 per GH/s per day</div>
                            </div>
                            <div class="tariff-block-divider"></div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Amount of hosts</div>
                                <div class="bc-label pull-right"><span class="j-custom-tariff-hosts-amount-span"></span></div>
                            </div>
                            <div class="tariff-block-divider"></div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Delivery Date <span class="j-widget-label-tooltip fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Delivery date – is a date when mining contract gets activated."></span></div>
                                <div class="bc-label pull-right">Instantly</div>
                            </div>
                            <div class="tariff-block-divider"></div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Duration</div>
                                <div class="bc-label pull-right">36 months</div>
                            </div>
                            <div class="tariff-block-button-wrapper text-center">
                                <button type="submit" class="btn btn-lg btn-success">Buy</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="panel panel-primary panel-contract panel-new-price">
                <div class="j-new-price-open new-price-link"></div>
                <div class="j-new-price-wrapper new-price-wrapper">
                    <div class="new-price-wrapper-inner">
                        <div class="new-price-header">Price Increase Announcement!</div>
                        <div class="new-price-desc">The price for pre-order plans will be increased on 16.12.2017 by 3%!<br>Don't miss a chance to buy the contract before the price increase takes place!</div>
                        <a href="#" class="j-new-price-close btn btn-lg btn-warning">Hide</a>
                    </div>
                </div>
                <div class="tariff-block-popular-wrapper"><div class="tariff-block-popular">Start 15.01.2018</div></div>
                <div class="tariff-block-discount-wrapper"><div class="tariff-block-discount"><span>Pre<br>Order</span></div></div>
                <div class="panel-heading text-center">
                    <span>
                        36-month plan
                        <br>Pre-order
                    </span>
                </div>
                <div class="panel-body">
                    <form class="tariff-block tariff-custom" action="https://hashing24.com/contract/new" method="POST" contract-type="P180115_12">
                        <input type="hidden" name="ghs" value="1" class="j-custom-tariff-input" />
                        <input type="hidden" name="coupon_code" value="P180115_12" />
                        <div class="limit-reached-warn-wrapper">
                            <div class="limit-reached-warn">
                                <div class="limit-reached-warn-title">SOLD OUT <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                                <div class="limit-reached-warn-desc">Unfortunately, hashing power we are selling from data centers of our partners has limited supply. We have stopped sales for a while but will be back soon. Please <a href="register.php">register an account</a> with us if you'd like to stay tuned </div>
                            </div>
                        </div>
                        <fieldset disabled class="limit-reached-disabled">
                            <div class="widget-big-price-wrapper">
                                <div class="widget-big-price-wrapper-value-old"><span class="j-widget-big-price-wrapper-value-old"></span></div>
                                <div class="widget-big-price-wrapper-currency j-widget-big-price-wrapper-currency"></div>
                                <div class="widget-big-price-wrapper-value j-widget-big-price-wrapper-value"></div>
                            </div>
                            <div class="clearfix tariff-block-blue-text">
                                <div class="bc-label">
                                    <ul class="tariff-block-currency-list">
                                        <li>
                                            <input type="radio"  name="currency" id="custom-tariff-currency-BTC-HASH(0x7ded3b8)" value="BTC">
                                            <label for="custom-tariff-currency-BTC-HASH(0x7ded3b8)">
                                                BTC
                                                <span class="j-custom-tariff-price-span" currency="BTC"></span>
                                                <div class="custom-tariff-currency-check"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" checked name="currency" id="custom-tariff-currency-USD-HASH(0x7ded3b8)" value="USD">
                                            <label for="custom-tariff-currency-USD-HASH(0x7ded3b8)">
                                                USD
                                                <span class="j-custom-tariff-price-span" currency="USD"></span>
                                                <div class="custom-tariff-currency-check"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio"  name="currency" id="custom-tariff-currency-EUR-HASH(0x7ded3b8)" value="EUR">
                                            <label for="custom-tariff-currency-EUR-HASH(0x7ded3b8)">
                                                EUR
                                                <span class="j-custom-tariff-price-span" currency="EUR"></span>
                                                <div class="custom-tariff-currency-check"></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="f12 text-center light_gray clearfix"><small>one-time payment</small></p>
                            <div class="bc-input-wrapper bc-input-wrapper-blue widget-ghs-wrapper">
                                <input name="bc-power" class="bc-input j-custom-tariff-power-new" value="100 GH/s">
                                <div class="bc-input-steps">
                                    <div class="bc-input-step bc-input-step-up" step="100"></div>
                                    <div class="bc-input-step bc-input-step-down" step="-100"></div>
                                </div>
                            </div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Maintenance <span class="j-widget-label-tooltip fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Paid automatically from daily mined BTC volume"></span></div>
                                <div class="bc-label pull-right">$0.00033 per GH/s per day</div>
                            </div>
                            <div class="tariff-block-divider"></div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Amount of hosts</div>
                                <div class="bc-label pull-right"><span class="j-custom-tariff-hosts-amount-span"></span></div>
                            </div>
                            <div class="tariff-block-divider"></div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Delivery Date <span class="j-widget-label-tooltip fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Delivery date – is a date when mining contract gets activated."></span></div>
                                <div class="bc-label pull-right">15.01.2018</div>
                            </div>
                            <div class="tariff-block-divider"></div>
                            <div class="tariff-block-label-wapper clearfix">
                                <div class="bc-label pull-left">Duration</div>
                                <div class="bc-label pull-right">36 months</div>
                            </div>
                            <div class="tariff-block-button-wrapper text-center">
                                <button type="submit" class="btn btn-lg btn-success">Buy</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

var minHosts = 1,
    convertMultiplier = 1000,
    ghsPerHost = 100;

var pricePerThs = {},
    maxHosts = {};
maxHosts["DEFAULT"] = -127;
pricePerThs["DEFAULT"] = {};
pricePerThs["DEFAULT"]["BTC"] = 0.02310123;
pricePerThs["DEFAULT"]["USD"] = 340;
pricePerThs["DEFAULT"]["EUR"] = 292;
recalcCustomTariffValues(minHosts, $('form[contract-type="DEFAULT"]'));
maxHosts["P180115_12"] = 0;
pricePerThs["P180115_12"] = {};
pricePerThs["P180115_12"]["BTC"] = 0.02032908;
pricePerThs["P180115_12"]["USD"] = 299.2;
pricePerThs["P180115_12"]["EUR"] = 256.96;
recalcCustomTariffValues(minHosts, $('form[contract-type="P180115_12"]'));

function recalcCustomTariffValues(hostsAmount, $form) {
    var $context = $form || $('.j-tariffs-wrapper'),
        contractType = $form ? $form.attr('contract-type') : 'DEFAULT';
    $context.find('.j-custom-tariff-input').val(hostsAmount * ghsPerHost);
    $context.find('.j-custom-tariff-hosts-amount').val(hostsAmount);
    $context.find('.j-custom-tariff-hosts-amount-span').text(hostsAmount);
    $context.find('.j-custom-tariff-power').val(hostsAmount * ghsPerHost);
    var currency = $context.find('.j-trade-currency').find(":selected").val();
    $context.find('.j-custom-tariff-price').val( formatCurrency(hostsAmount * pricePerThs[contractType][currency] * ghsPerHost / 1000, currency) );
    $.each(pricePerThs[contractType], function(currency, price) {
        var $priceElement = $context.find('.j-custom-tariff-price-span[currency="'+currency+'"]');
        if ($priceElement) {
            $priceElement.text( formatCurrency(hostsAmount * price * ghsPerHost / 1000, currency) );
        }
    });
    $context.find('.j-custom-tariff-power-new').val((hostsAmount * ghsPerHost) + ' GH/s');

    // big price
    var curr = $context.find('[name="currency"]:checked').val();
    $context.find('.j-widget-big-price-wrapper-currency').text(curr);
    $context.find('.j-widget-big-price-wrapper-value').text( formatCurrency(hostsAmount * pricePerThs[contractType][curr] * ghsPerHost / 1000, curr) );
    $context.find('.j-widget-big-price-wrapper-value-old').text( formatCurrency(hostsAmount * pricePerThs['DEFAULT'][curr] * ghsPerHost / 1000, curr) );
}

$('.j-custom-tariff-hosts-amount').on('change', function(){
    var value = $(this).val(),
        hostsAmount = extractAmount(value, $(this).closest('form'));

    recalcCustomTariffValues(hostsAmount, $(this).closest('form'));
});

$('.j-custom-tariff-power').on('change', function(){
    var value = $(this).val(),
        hostsAmount = extractAmount((parseInt(value) || ghsPerHost) / ghsPerHost, $(this).closest('form'));

    recalcCustomTariffValues(hostsAmount, $(this).closest('form'));
});

$('.j-custom-tariff-price').on('change', function(){
    var value = $(this).val(),
        k = pricePerThs[$('.j-trade-currency').find(":selected").val()] * ghsPerHost / 1000,
        hostsAmount = extractAmount((value || k) / k, $(this).closest('form'));

    recalcCustomTariffValues(hostsAmount, $(this).closest('form'));
});

$('.j-trade-currency').on('change', function(){
    recalcCustomTariffValues($('.j-custom-tariff-hosts-amount').val(), $(this).closest('form'));
});

$('.j-custom-tariff-power-new').on('change', function(){
    var value = $(this).val(),
        hostsAmount = extractAmount((parseInt(value) || ghsPerHost) / ghsPerHost, $(this).closest('form'));

    recalcCustomTariffValues(hostsAmount, $(this).closest('form'));
});

function extractAmount(value, $form) {
    var contractType = $form ? $form.attr('contract-type') : 'DEFAULT';
    return Math.max(minHosts, Math.min(maxHosts[contractType], (parseInt(value) || 1)))
}

$('.bc-input-step').on('click', function(){
    var step = parseInt($(this).attr('step')) || 0,
        $input = $(this).closest('.bc-input-wrapper').find('.bc-input');

    $input.val(parseFloat($input.val()) + step).change();
});

$('.tariffs-wrapper [name="currency"]').on('change', function() {
    $(this).closest('form').find('.j-custom-tariff-power-new').change();
});

$('.j-widget-label-tooltip[data-toggle="tooltip"]').tooltip();

$('.j-new-price-open').on('click', function() { $('.j-new-price-wrapper').addClass('opened'); return false; });
$('.j-new-price-close').on('click', function() { $('.j-new-price-wrapper').removeClass('opened'); return false; });
</script>




                </div>

                <div class="prices-block-gray">
    <div class="container clearfix">
        <div class="widget-terms-block">
            <h2>The main terms of the mining equipment renting:</h2>
            <ul>
                <li>By purchasing this service, you will be provided on a daily basis the benefit of the ordered power, which will be sourced from equipment located in the data centers of our partners.</li>
                <li>The service fee includes the cost of a one-time allocation of ordered power but you will also pay a daily maintenance fee for the equipment maintenance and its power supply.</li>
                <li>If during three days there will not be enough money on the client’s balance for a daily payment, the mining contract and service will be canceled.</li>
                <li>Mining will start automatically from 00:00 UTC.</li>
            </ul>
            <p>Full terms and conditions for using the service are available at this <a href="terms.php">link</a>.</p>
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

<!-- Mirrored from hashing24.com/tariffs by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:08 GMT -->
</html>