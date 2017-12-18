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
            <a class="sign-in-social-icon" href="https://graph.facebook.com/oauth/authorize?scope=email&amp;state=&amp;client_id=1947287212159869&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Ffacebook%2Fcallback">
                <span class="fa-stack icon-social icon-fb">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <a class="sign-in-social-icon" href="https://accounts.google.com/o/oauth2/auth?redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Fgoogle%2Fcallback&amp;response_type=code&amp;client_id=943004047393-oqqtc94hmntmej4ivvr25anb57j17lmc.apps.googleusercontent.com&amp;state=&amp;scope=email">
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

                <div class="bc-wrapper">
    <div class="container">
        <h1 class="margin-bottom-30">Mining Calculator</h1>
        <div class="row">
            <div class="col-md-5">
                <div class="bc-label">One-time cost</div>
                <div class="bc-info-block">
                    <div currency="BTC" class="bc-cost-option text-center hidden j_bc-cost-label"></div>
                    <div currency="USD" class="bc-cost-option text-center hidden j_bc-cost-label"></div>
                    <div currency="EUR" class="bc-cost-option text-center hidden j_bc-cost-label"></div>
                </div>
                <div class="bc-info-block bc-info-block-first">
                    <div class="bc-cost-option">Block reward</div>
                    <div class="bc-cost-option text-center">12.5 BTC</div>
                </div>
                <div class="bc-info-block bc-info-block-last">
                    <div class="bc-cost-option">Current difficulty</div>
                    <div class="bc-cost-option text-center">1 590 896 927 258</div>
                </div>
                <div class="bc-info-block bc-info-block-first">
                    <div class="bc-cost-option">Daily maintenance</div>
                    <div class="bc-cost-option text-center"><span class="j_maintenance">&mdash;</span> USD</div>
                </div>
                <div class="bc-info-block bc-info-block-last">
                    <div class="bc-cost-option">Current price BTC/USD</div>
                    <div class="bc-cost-option text-center">15453.7263 USD</div>
                </div>
                <div class="bc-tip">* Calculations are just for information purposes and can differ from real results</div>
            </div>
            <div class="col-md-4">
                <div class="bc-label">Power</div>
                <div class="bc-input-wrapper">
                    <input name="bc-power" class="bc-input" value="100 GH/s">
                    <div class="bc-input-steps">
                        <div class="bc-input-step bc-input-step-up" step="100"></div>
                        <div class="bc-input-step bc-input-step-down" step="-100"></div>
                    </div>
                </div>
                <div class="bc-label">Change Difficulty*</div>
                <div class="bc-input-wrapper">
                    <input name="bc-difficulty" class="bc-input" value="0.00%">
                    <div class="bc-input-steps">
                        <div class="bc-input-step bc-input-step-up" step="10"></div>
                        <div class="bc-input-step bc-input-step-down" step="-10"></div>
                    </div>
                </div>
                <div class="bc-label">Change Price*</div>
                <div class="bc-input-wrapper">
                    <input name="bc-rate" class="bc-input" value="0.00%">
                    <div class="bc-input-steps">
                        <div class="bc-input-step bc-input-step-up" step="10"></div>
                        <div class="bc-input-step bc-input-step-down" step="-10"></div>
                    </div>
                </div>
                <a href="#" class="bc-button j_go-calc">Calculate</a>
            </div>
        </div>
    </div>
</div>
<div class="bc-loading hidden"></div>
<div class="bc-results hidden">
    <div class="container j_result-current">
        <div class="bc-results-header">Current Difficulty <span class="j_difficulty"></span></div>
        <div class="bc-results-table-wrapper">
            <table class="bc-results-table">
                <tr>
                    <th></th>
                    <th>Day</th>
                    <th>Week</th>
                    <th>Month</th>
                </tr>
                <tr>
                    <td>Mining</td>
                    <td><span class="j_mining-day"></span> BTC</td>
                    <td><span class="j_mining-week"></span> BTC</td>
                    <td><span class="j_mining-month"></span> BTC</td>
                </tr>
                <tr>
                    <td>Maintenance</td>
                    <td><span class="j_maintenance-usd-day"></span> USD / <span class="j_maintenance-btc-day"></span> BTC</td>
                    <td><span class="j_maintenance-usd-week"></span> USD / <span class="j_maintenance-btc-week"></span> BTC</td>
                    <td><span class="j_maintenance-usd-month"></span> USD / <span class="j_maintenance-btc-month"></span> BTC</td>
                </tr>
                <tr>
                    <td>Net Income</td>
                    <td><b><span class="j_income-day-usd"></span> USD</b> / <span class="j_income-day"></span> BTC</td>
                    <td><b><span class="j_income-week-usd"></span> USD</b> / <span class="j_income-week"></span> BTC</td>
                    <td><b><span class="j_income-month-usd"></span> USD</b> / <span class="j_income-month"></span> BTC</td>
                </tr>
            </table>
        </div>
        <div class="bc-results-divider"></div>
    </div>
    <div class="container j_result-next">
        <div class="bc-results-header">Next Difficulty <span class="j_difficulty"></span></div>
        <div class="bc-results-table-wrapper bc-results-table-wrapper-black">
            <table class="bc-results-table">
                <tr>
                    <th></th>
                    <th>Day</th>
                    <th>Week</th>
                    <th>Month</th>
                </tr>
                <tr>
                    <td>Mining</td>
                    <td><span class="j_mining-day"></span> BTC</td>
                    <td><span class="j_mining-week"></span> BTC</td>
                    <td><span class="j_mining-month"></span> BTC</td>
                </tr>
                <tr>
                    <td>Maintenance</td>
                    <td><span class="j_maintenance-usd-day"></span> USD / <span class="j_maintenance-btc-day"></span> BTC</td>
                    <td><span class="j_maintenance-usd-week"></span> USD / <span class="j_maintenance-btc-week"></span> BTC</td>
                    <td><span class="j_maintenance-usd-month"></span> USD / <span class="j_maintenance-btc-month"></span> BTC</td>
                </tr>
                <tr>
                    <td>Net Income</td>
                    <td><b><span class="j_income-day-usd"></span> USD</b> / <span class="j_income-day"></span> BTC</td>
                    <td><b><span class="j_income-week-usd"></span> USD</b> / <span class="j_income-week"></span> BTC</td>
                    <td><b><span class="j_income-month-usd"></span> USD</b> / <span class="j_income-month"></span> BTC</td>
                </tr>
            </table>
        </div>
        <div class="bc-results-divider"></div>
    </div>
    <div class="container">
        <p><b>Disclaimers of Liability:</b> The expected Bitcoin earnings are calculated based on the values entered and do not consider difficulty, exchange rate fluctuations, stale/reject/orphan rate, etc. These and other factors change every day/every week and can have effects on the expected earnings. Hashing24 will not be liable for any losses or damages caused by your use or misuse of this calculator.</p>
        <div class="text-center margin-top-40">
            <a href="tariffs.php" class="btn btn-lg btn-success w200">Start Mining</a>
        </div>
    </div>
</div>

<script>

var pricePerThs = new Array();
pricePerThs["BTC"] = 0.0231;
pricePerThs["USD"] = 340;
pricePerThs["EUR"] = 292;

var minPower = 100,
    maxPower = 1000000,
    maintenanceUSD = 0.00033;
    currencyRateUSD = 15453.726300;

var calcModel = {
    power: undefined,
    difficulty: undefined,
    rate: undefined
};

function updateModel() {
    // power
    var value = parseInt( $("[name='bc-power']").val() );
    value = isNaN(value) ? minPower : value;
    if (value < minPower) {
        value = minPower;
    }
    else {
        value = parseInt(value / minPower) * minPower;
    }
    value = Math.max(Math.min(maxPower, value), minPower);
    calcModel.power = value;
    // difficulty
    value = parseFloat( $("[name='bc-difficulty']").val() );
    value = isNaN(value) ? 10 : value;
    value = Math.max(Math.min(1000, value), -99.99);
    calcModel.difficulty = value;
    // rate
    value = parseFloat( $("[name='bc-rate']").val() );
    value = isNaN(value) ? 10 : value;
    value = Math.max(Math.min(1000, value), -99.99);
    calcModel.rate = value;
}
updateModel();

function updateInfo() {
    $('.j_bc-cost-label').each(function(){
        var curr = $(this).attr('currency'),
            cost = pricePerThs[curr];
        $(this).toggleClass('hidden', !cost).text(curr + ' ' +  formatCurrency(pricePerThs[curr] * calcModel.power / 1000, curr));
    });

    $('.j_maintenance').text(formatCurrency(maintenanceUSD * calcModel.power, 'USD', 4));
}
updateInfo();

$('.bc-input-step').on('click', function(){
    var step = parseInt($(this).attr('step')) || 0,
        $input = $(this).closest('.bc-input-wrapper').find('.bc-input');

    $input.val(parseFloat($input.val()) + step).change();
});

$("[name='bc-power']").on('change', function(){
    updateModel();
    updateInfo();
    $(this).val(calcModel.power + ' GH/s');
});
$("[name='bc-difficulty']").on('change', function(){
    updateModel();
    var prefix = calcModel.difficulty > 0 ? '+' : '';
    $(this).val(prefix + calcModel.difficulty.toFixed(2) + '%');
});
$("[name='bc-rate']").on('change', function(){
    updateModel();
    var prefix = calcModel.rate > 0 ? '+' : '';
    $(this).val(prefix + calcModel.rate.toFixed(2) + '%');
});

var isRequesting = false;
$('.j_go-calc').on('click', function(e){
    e.preventDefault();
    if (!isRequesting) {
        isRequesting = true;
        $('.bc-loading').removeClass('hidden');
        $('.bc-results').addClass('hidden');
        $.ajax({
            type: "POST",
            url: '/calculator',
            data: calcModel
        })
        .done(function(data) {
            if (data.success) {
                var nDay = 7,
                    nMonth = 31;
                    data = data.data;

                $('.bc-results .j_result-current .j_difficulty').html(triads(data.current.difficulty));
                $('.bc-results .j_result-next .j_difficulty').html(triads(data.next.difficulty));


                $('.bc-results .j_result-current .j_mining-day').text(formatCurrency(data.current.mining, 'BTC'));
                $('.bc-results .j_result-current .j_mining-week').text(formatCurrency(data.current.mining * nDay, 'BTC'));
                $('.bc-results .j_result-current .j_mining-month').text(formatCurrency(data.current.mining * nMonth, 'BTC'));

                $('.bc-results .j_result-next .j_mining-day').text(formatCurrency(data.next.mining, 'BTC'));
                $('.bc-results .j_result-next .j_mining-week').text(formatCurrency(data.next.mining * nDay, 'BTC'));
                $('.bc-results .j_result-next .j_mining-month').text(formatCurrency(data.next.mining * nMonth, 'BTC'));

                $('.bc-results .j_result-current .j_income-day-usd').text(formatCurrency(currencyRateUSD * data.current.income, 'USD'));
                $('.bc-results .j_result-current .j_income-week-usd').text(formatCurrency(currencyRateUSD * data.current.income * nDay, 'USD'));
                $('.bc-results .j_result-current .j_income-month-usd').text(formatCurrency(currencyRateUSD * data.current.income * nMonth, 'USD'));
                $('.bc-results .j_result-current .j_income-day').text(formatCurrency(data.current.income, 'BTC'));
                $('.bc-results .j_result-current .j_income-week').text(formatCurrency(data.current.income * nDay, 'BTC'));
                $('.bc-results .j_result-current .j_income-month').text(formatCurrency(data.current.income * nMonth, 'BTC'));

                $('.bc-results .j_result-next .j_income-day-usd').text(formatCurrency(currencyRateUSD / 100 * (100 + calcModel.rate) * data.next.income, 'USD'));
                $('.bc-results .j_result-next .j_income-week-usd').text(formatCurrency(currencyRateUSD / 100 * (100 + calcModel.rate) * data.next.income * nDay, 'USD'));
                $('.bc-results .j_result-next .j_income-month-usd').text(formatCurrency(currencyRateUSD / 100 * (100 + calcModel.rate) * data.next.income * nMonth, 'USD'));
                $('.bc-results .j_result-next .j_income-day').text(formatCurrency(data.next.income, 'BTC'));
                $('.bc-results .j_result-next .j_income-week').text(formatCurrency(data.next.income * nDay, 'BTC'));
                $('.bc-results .j_result-next .j_income-month').text(formatCurrency(data.next.income * nMonth, 'BTC'));

                $('.bc-results .j_result-current .j_maintenance-btc-day').text(formatCurrency(data.current.maintenance, 'BTC'));
                $('.bc-results .j_result-current .j_maintenance-btc-week').text(formatCurrency(data.current.maintenance * nDay, 'BTC'));
                $('.bc-results .j_result-current .j_maintenance-btc-month').text(formatCurrency(data.current.maintenance * nMonth, 'BTC'));

                $('.bc-results .j_result-current .j_maintenance-usd-day').text(formatCurrency(data.maintenance_usd, 'USD', 4));
                $('.bc-results .j_result-current .j_maintenance-usd-week').text(formatCurrency(data.maintenance_usd * nDay, 'USD', 4));
                $('.bc-results .j_result-current .j_maintenance-usd-month').text(formatCurrency(data.maintenance_usd * nMonth, 'USD', 4));

                $('.bc-results .j_result-next .j_maintenance-btc-day').text(formatCurrency(data.next.maintenance, 'BTC'));
                $('.bc-results .j_result-next .j_maintenance-btc-week').text(formatCurrency(data.next.maintenance * nDay, 'BTC'));
                $('.bc-results .j_result-next .j_maintenance-btc-month').text(formatCurrency(data.next.maintenance * nMonth, 'BTC'));

                $('.bc-results .j_result-next .j_maintenance-usd-day').text(formatCurrency(data.maintenance_usd, 'USD', 4));
                $('.bc-results .j_result-next .j_maintenance-usd-week').text(formatCurrency(data.maintenance_usd * nDay, 'USD', 4));
                $('.bc-results .j_result-next .j_maintenance-usd-month').text(formatCurrency(data.maintenance_usd * nMonth, 'USD', 4));

                $('.bc-results').removeClass('hidden');
            }
    	})
        .always(function () {
            isRequesting = false;
            $('.bc-loading').addClass('hidden');
        });
    }
});
</script>


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

<!-- Mirrored from hashing24.com/calculator by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:09 GMT -->
</html>