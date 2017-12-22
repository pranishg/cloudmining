<?php include_once 'header.php';

 include_once './sign.php';
?>


<script>

//$('#signInModal').on('shown.bs.modal', function (e) {
//    $('#js-authenticate').removeClass('js_reseting-password');
//    $("input[name=email]").focus();
//        preShowCaptcha();
//});
//
//var user_balances = new Array();
//

$(document).ready(function() {

    $.cookie("tm", (0-(new Date()).getTimezoneOffset()), { expires : 365 });
//    $(document).ready(function(){
    
//    $('#email,#password').val(" ");
    
//});
});


//function isBreakpoint( alias ) {
//	return $('.device-' + alias).is(':visible');
//}
//
//var waitForFinalEvent=function(){var b={};return function(c,d,a){a||(a="");b[a]&&clearTimeout(b[a]);b[a]=setTimeout(c,d)}}();
//var fullDateString = new Date();


</script>
<!-- END .header -->


                





                

<div class="register-blocks-wrapper text-center">
<div class="container">
<div class="row register-blocks col-xs-offset-1 col-sm-offset-1 col-md-offset-3  col-lg-offset-3" >
    <div class="col-md-8" >
        <form action="" class="form-horizontal text-left" id="js-register_form" method="POST">

        <div class="row">
            <div class="col-md-12 lead register-page-header">
                Register an account
            </div>
        </div>
 <!--<div class="form-group input-icon-wrapper">-->
               <div class="form-group">
            <div class="col-sm-12">
            <!--<i class="fa fa-envelope" aria-hidden="true"></i>-->
            <input class="form-control input-lg" id="username"  placeholder="User Name" type="text" value="" autofocus="on"/>
            
        </div>
        </div>
             <div class="form-group">
            <div class="col-sm-12">
            <!--<i class="fa fa-envelope" aria-hidden="true"></i>-->
            <input class="form-control input-lg" id="fullname"  placeholder="Full Name" type="text" value="" />
            
        </div>
        </div>
        <div class="form-group ">
            <div class="col-sm-12">
            <!--<i class="fa fa-envelope" aria-hidden="true"></i>-->
                <input class="form-control input-lg" id="email"  placeholder="Email" type="email"  required=""/>
            <small class="gray">
            Please make sure to enter the correct email address. This email will be used as proof of your identity for financial transactions.
            </small>
        </div>
        </div>

        <div class="form-group ">
            <div class="col-sm-12">
                <!--<i class="fa fa-lock" aria-hidden="true"></i>-->
                <input class="form-control input-lg" id="password" name="password" placeholder="Password" type="password" value=" "/>
<!--                <small class="gray">
                Password must be at least 8 characters, and must necessarily contain numbers and uppercase and lowercase letters of the Latin alphabet.
                </small>-->
            </div>
        </div>
        <div class="form-group ">
            <div class="col-sm-12">
                <!--<i class="fa fa-lock" aria-hidden="true"></i>-->
                <input class="form-control input-lg" id="confirmpassword" name="password_verify" placeholder="Confirm password" type="password" />
            </div>
        </div>
        <div class="form-group form-group-no-margin ">
            <div class="col-sm-12">
                <div class="checkbox">
                    <label>
                    <small>
                        <input type="checkbox" name="agreement" value="1" checked="checked" disabled="disabled"> I accept and agree with the terms of the  <a href="terms.php">User Agreement</a>.
                    </small>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-sm-12">
                <div class="checkbox">
                    <label>
                    <small>
                        <input type="checkbox" name="disclaimer" value="1" checked="checked" disabled="disabled"> I agree to the Terms of  <a href="disclaimer.php">Disclaimer</a>.
                    </small>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <div id="registerRC" class="g-recaptcha" data-sitekey="6Lf-tzMUAAAAAGtf_pw_wsolTKqAqifJ7MYsqPmT"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <button type="button"
                        class="btn btn-warning btn-lg"
id="registeracc"
                        >
                    Register an account
                </button>
            </div>
        </div>
</form>   
    
    </div>
<!--    <div class="col-md-5 col-md-offset-2">
        <div class="margin-bottom-30">
            <div class="lead register-page-subheader margin-top-10">Sign Up with</div>
            <a class="btn btn-social btn-facebook margin-bottom-15" href="https://graph.facebook.com/oauth/authorize?scope=email&amp;state=&amp;client_id=1947287212159869&amp;response_type=code&amp;redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Ffacebook%2Fcallback">
                <span class="fa-stack icon-social icon-fb">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
                <span class="btn-social-inner">Facebook</span>
            </a>
            <a class="btn btn-social btn-google-plus margin-bottom-15" href="https://accounts.google.com/o/oauth2/auth?scope=email&amp;state=&amp;response_type=code&amp;client_id=943004047393-oqqtc94hmntmej4ivvr25anb57j17lmc.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fhashing24.com%2Foauth2%2Fgoogle%2Fcallback">
                <span class="fa-stack icon-social icon-gp">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                </span>
                <span class="btn-social-inner">Google +</span>
            </a>
        </div>
    </div>-->
<!--    <div class="register-blocks-divider hidden-sm hidden-xs">
        <div>OR</div>
    </div>-->
</div>
<div class="text-center margin-top-20">
    <small class="gray">Already registered? Login <a href="index.html#" class="navbar-link" data-toggle="modal" data-target="#signInModal">here</a></small>
</div>
</div>
</div>

<!--<script type="text/javascript">
$(document).ready(function(){
    $('#input-captcha').val('');


});
</script>-->



                <div class=""></div>
                <div class="container">
                        <div class="forced-client-menu">
                        
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
<!--        <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78502902-1', 'auto');
  ga('send', 'pageview');



</script>-->

<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript">
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
<noscript><div><img src="https://mc.yandex.ru/watch/37629880" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!-- /Yandex.Metrika counter -->

        <script type="text/javascript">
//window.__lc = window.__lc || {};
//window.__lc.license = 8095831;
//(function() {
//var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
//lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
//var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
//})();

$(document).ready(function(){
    
   $('#email,#password').val("");
   $('#username').focus();
    
});
$('#username').blur(function(){
    if($(this).val().trim()!="")
    {  
         $.ajax
            ({
                type: "POST",
                url: "checkuserexist.php",
                data: {username: $('#username').val().trim()},
                success: function (data)
                {
//                    alert(data)
                    if(data.trim()!="0")
                    {
                 alert("This User Name is already exist");
                   $('#username').val("");
                
                 $('#username').focus();
         event.preventDefault();          
        }
                    
                    //alert(data1);

                }
            });
        }
});

$('#email').blur(function(){
    if($(this).val().trim()!="")
    {  
         $.ajax
            ({
                type: "POST",
                url: "checkemailexist.php",
                data: {email: $('#email').val().trim()},
                success: function (data)
                {
//                    alert(data);
                    if(data.trim()!="0" && data.trim()!="")
                    {
                 alert("This Email is already exist");
                   $('#email').val("");
                
                 $('#email').focus();
         event.preventDefault();          
        }
                    
                    //alert(data1);

                }
            });
        }
});

$('#registeracc').click(function(){
//    alert("dfdf");
 if (Isvalid())
        {
     $.ajax
            ({
                type: "POST",
                url: "registerprocess.php",
                data: {username: $('#username').val().trim(),fullname:$('#fullname').val().trim(),password:$('#password').val().trim(),email:$('#email').val().trim()},
                success: function (data)
                {
//                    alert(data)
                    if(data.trim()=="1")
                    {
                    $('#regtxt').text("Registered Seccessfully please sign in")
                    $('#signInModal').modal();
                    $('#username,#fullname,#password,#email,#confirmpassword').val("");
                    }
                    
                    //alert(data1);

                }
            });
        }
        else{
            alert(validmessage1);
             $(ctrfocus1).focus();
             event.preventDefault();
            return false;
        }
    
});



var validmessage1 = "";
var ctrfocus1 = "";
function Isvalid()
{
    validmessage1 = "";
    ctrfocus1 = "";
    var valid1 = true;
    if ($('#username').val().trim() === "")
    {
        if (ctrfocus1 == "")
        {
            ctrfocus1 = '#username';
        }
        validmessage1 = validmessage1 + "Please enter User Name. \n";
        valid1 = false;
    }
    if ($('#fullname').val().trim() === "")
    {
        if (ctrfocus1 == "")
        {
            ctrfocus1 = '#fullname';
        }
        validmessage1 = validmessage1 + "Please enter Full Name . \n";
        valid1 = false;
    }
    if ($('#email').val().trim() == "")
    {
        if (ctrfocus1 == "")
        {
            ctrfocus1 = '#email';
        }
        validmessage1 = validmessage1 + "Please enter Email. \n";
        valid1 = false;
    }
       if ($('#email').val().trim() != "")
       {      
      if( !validateEmail($('#email').val().trim())) {
    
         if (ctrfocus1 == "")
        {
            ctrfocus1 = '#email';
        }
        validmessage1 = validmessage1 + "Password enter valid Email. \n";
      
        valid1 = false;
        
        }
    }
    if ($('#password').val().trim() == "")
    {
        if (ctrfocus1 == "")
        {
            ctrfocus1 = '#password';
        }
        validmessage1 = validmessage1 + "Please enter Password. \n";
      
        valid1 = false;
    }
    
      if ($('#confirmpassword').val().trim() == "")
    {
        if (ctrfocus1 == "")
        {
            ctrfocus1 = '#confirmpassword';
        }
        validmessage1 = validmessage1 + "Please enter Confirm Password. \n";
      
        valid1 = false;
    }
       if ($('#confirmpassword').val().trim() != "")
    {
      if ($('#password').val().trim()!=$('#confirmpassword').val().trim())
    {
        if (ctrfocus1 == "")
        {
            ctrfocus1 = '#confirmpassword';
        }
        validmessage1 = validmessage1 + "Password and Confirm Password should be same. \n";
      
        valid1 = false;
    }
    }
  
    return valid1;
}

 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
</script>


    </body>

<!-- Mirrored from hashing24.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:10 GMT -->
</html>
