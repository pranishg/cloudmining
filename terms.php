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

                            

<h3 class="page-head">Terms and Conditions</h3>

<p>Updated May 23, 2016</p>
<p>YOUR ORDER OF, USE OF, AND ACCESS TO, THE PRODUCTS, PRODUCT SITES AND CONTENT ARE SUBJECT TO ALL TERMS AND CONDITIONS CONTAINED HEREIN AND ALL APPLICABLE LAWS AND REGULATIONS. PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY. YOUR ORDER OF, ACCEPTANCE OF, USE OF, AND/OR ACCESS TO, THE PRODUCTS, PRODUCT SITES AND/OR CONTENT CONSTITUTES YOUR AGREEMENT TO ABIDE BY EACH OF THE TERMS AND CONDITIONS SET FORTH HEREIN. IF YOU DO NOT AGREE WITH ANY OF THESE TERMS OR CONDITIONS, DO NOT ORDER, USE OR ACCESS ANY PRODUCT, PRODUCT SITES OR CONTENT, OR ANY OF THE INFORMATION WITHIN THE PRODUCT, PRODUCT SITES, OR CONTENT, AND CONTACT CUSTOMER SUPPORT TO CANCEL YOUR MEMBERSHIP.</p>
<p><b>HOW TO ACCEPT THIS AGREEMENT</b></p>
<p>You accept this agreement by:</p>
<p>Agreeing in writing through accepting this Agreement in the Site, via e-mail or otherwise by executing this Agreement or activating the Services.</p>
<p>When you accept, you are representing that you are at least 18 years old and are legally able to enter into a contract. If you're accepting for an organization, you are representing that you are authorized to bind that organization, and where the context requires, 'you' means the organization. By accepting, you are agreeing to every provision of this Agreement whether or not you have to read it.</p>
<p>Once you have accepted this Agreement, we will process your acceptance as an offer to receive Service. We will then review the offer, including without limitation assessing your identity and authenticity. Once we are ready to offer Service for you, we will inform you that your Service has commenced, constituting our acceptance of your offer.</p>
<p>If we feel unable, or if at our sole discretion, we decide not to provide you with Service, we will inform you of this by email and we will not process your order. If you have already paid for the Services, we will refund you the full amount as soon as possible in the same method of payment used in the attempted purchase of Services.</p>
<p>Our Agreement</p>
<p>This Agreement establishes the legal terms and conditions of the agreement between us (collectively this “Agreement”) on which we sell to you any of the Services (defined below) that are described on our website (the “Site”).</p>
<p>For purposes of this Agreement, “you” or “your” refer to the customer agreeing to the terms and conditions of this Agreement; “us,” “we,” or “our” refer to NEWSTAR L.P. (272 Bath Street, Glasgow, G2 4JR, Scotland, UK, L.P. No. SL22689) d/b/a Hashing24; “Bitcoin” refers to the peer-to-peer internet commodity further described at www.bitcoin.org and “Bitcoins” refers to individual units of Bitcoin.</p>
<p>This Agreement will apply to any Services (defined below). Please read this Agreement carefully and make sure that you understand it before ordering any Services from the Site. Please note that by purchasing a Service, you agree to be bound by this Agreement and the other documents expressly referred to herein. Please execute this Agreement by clicking the button labeled “Register an account” on the Site version. If you refuse to accept the terms and conditions of this Agreement, you will not be able to purchase a Services, or to access your portal related to an existing Services.</p>
<p>You should print a copy of this Agreement or save it for your future reference.</p>
<p>Every time you purchase a Service, please refer to the most current version of this Agreement made available on the Site to ensure you understand the terms which will apply at that time. This Agreement was most recently updated on May 23, 2016.</p>
<p>This Agreement are only in the English language.</p>
<ol>
<li>INFORMATION ABOUT US</li>
<dl>
<dt><b>1.1.</b> We operate the Site <a href='index.php' rel='nofollow'>Hashing24.com</a>. To contact us, please see our <a href='support.php' rel='nofollow'>Support page</a>.</dt>
</dl>
<li>OUR SERVICES</li>
<dl>
<dt><b>2.1.</b> <u>Mining Hardware, Services and Pool</u>. Bitcoin mining hardware (“Mining Hardware”) consists of specialized computing hardware, computer programs, networking interconnectivity and associated facilities that run proprietary Bitcoin mining software (“Software”). We are selling you the specific volume of processing power (the 'Service' or 'Services') of that Mining Hardware corresponding to an amount of processing power (measured in billions of Bitcoin calculations per second or “Gigahashes”) specified in each order for opportunity to make possible, but not guaranteed profit. We rent all Mining Hardware to provide Services to you and our other users (“Users”) and which we also use ourselves for our own account.</dt><br>
<dt><b>2.2.</b> <u>Mining Contracts</u>.</dt><br>
<dd><b>a.</b> When you enter this Agreement to offer us the right to provide you Service, and we accept your offer by sending you an order confirmation (an “Order Confirmation”), a contract (a “Mining Contract”) to provide Service is formed. Upon commencement of Service, we will allocate a part of Mining Hardware equal to certain amount of Bitcoin mining computer computational power (“Mining Contract Capacity”) to you for your use in mining Bitcoins.</dd>
<dd><b>b.</b> The types of Mining Contracts potentially available at any time are described in detail at <a href='index.php' rel='nofollow'>Hashing24.com</a>. You must have purchased a Mining Contract to have any right to use Services to obtain any right to Product (defined below).</dd><br>
<dt><b>2.3.</b> <u>Rental of Mining Hardware</u>. We rent the Mining Hardware to provide Services to you and our other Users, including customers who have current and valid Mining Contracts and also to use ourselves for our own account. You acknowledge that by executing this Agreement and reserving a Mining Contract, and by logging into our Site and accessing your account, you are undertaking Bitcoin mining on your behalf only, at your own risk and for your own benefit. In allocating to you the Mining Contract Capacity, we will use commercially reasonable efforts to rent the Mining Hardware on your behalf, partially on behalf of our other Users, and partially on behalf of ourselves. We retain for our own benefit the portion of the total Mining Hardware not allocated through Mining Contracts.</dt><br>
<dt><b>2.4.</b> <u>Mining Product</u>. The Mining Hardware will mine Bitcoins by utilizing Hashing Power. The Bitcoins produced by the Mining Hardware (the “Product”) will be centrally collected by us, and we will distribute a portion of the Product to Users (“Customer Portion”) based upon the Mining Contract Capacity allocated under valid Mining Contracts held by Users during the period of effectiveness of your Mining Contract (the “Term”), with such distributions subject to Maintenance Fees.</dt><br>
<dt><b>2.5.</b> <u>Distribution of Product Portions</u>. Customer Portions will be distributed to your Bitcoin Wallet (defined below).</dt><br>
<dt><b>2.6.</b> <u>Service Fee</u>. The fee that you pay for the Mining Contract, as described on the website.</dt><br>
<dt><b>2.7.</b> <u>Maintenance fees</u>. A fee that we may charge you daily from your Customer Portion to cover running costs of Mining Hardware, as described on the website. Fee will be converted to the number of Bitcoins based on the previous day's Bitcoin closing price in US$ in the Bitcoin Price Index published on CoinDesk.com. Hashing24 can change the maintenance fee any time with 7 days' notice.</dt><br>
</dl>
<li>YOUR ACCOUNT</li>
<dl>
<dt><b>3.1.</b> <u>Password</u>. As part of the process of selecting and paying for a Services, you are required to create an account on the Site (“Account”) and to provide your email (“User Name”) and password (“Password”). To protect your Account and to prevent unauthorized access to it, keep your Password confidential. You are responsible for any activity that happens on or through your Account. If you become aware of or suspect any unauthorized use of your Password or Account, please change your Password immediately and notify us immediately. If we believe that there has been unauthorized access to your Account, we reserve the unilateral right to suspend or discontinue any and all Services, your Account, in which event we will endeavor to notify you.</dt><br>
<dt><b>3.2.</b> <u>Bitcoin Wallet</u>. Your “Bitcoin Wallet” is the Bitcoin address that you provide to us from time to time for the payment to you of your Customer Portions. You have no ownership interest in any Bitcoin held by us. We do not operate your Bitcoin Wallet. By entering Bitcoin's Wallet number you acknowledge the ownership of it. You are solely responsible for maintaining and controlling your Bitcoin Wallet. Be sure to safeguard the access credentials to your Bitcoin Wallet. Any Product is only as secure as your confidential access credentials. If you forget or misplace your access credentials to your Bitcoin Wallet or if others gain access to your Bitcoin Wallet, with or without your authorization, you could permanently lose your Bitcoins, including any Customer Portions we transfer to your Bitcoin Wallet. To be clear, we have no liability for any operation or failure of your Bitcoin Wallet.</dt><br>
</dl>
<li>USE OF THE SITE</li>
<dl>
<dt>Your use of the Site is governed by this Agreement as posted on the Site from time to time. Please take the time to read these and to check regularly for changes, as they include important terms which apply to you.</dt><br>
</dl>
<li>USE OF OUR SERVICES</li>
<dl>
<dt><b>5.1.</b> <u>Access Requirements</u>. Before you can use our Services, you must have a valid Service, we must approve such Service, and you must have a valid Account.</dt><br>
<dt><b>5.2.</b> <u>Customer Identification</u>. Because providing Services may entail us undertaking financial risk on your behalf, whenever you reserve a Service, we may investigate your personal history in public records or your credit history or score. To register as a customer, as well as while being serviced, we may require you to provide us with identification or other documentation in order to help us prevent fraud or money laundering. This may include photographic identification and a recent proof of address. We may also undertake our own identity, fraud and credit checks. You permit us to share credit information about you with credit reporting agencies and any of our other affiliated companies.</dt><br>
<dt><b>5.3.</b> <u>Your Due Diligence</u>. In using our Services, you acknowledge and warrant that you have conducted sufficient due diligence to understand the risks associated with Bitcoin mining. You acknowledge that due to the difficulties in renting Mining Hardware, there may be delays which affect the rate at which we are able to bring online Mining Hardware.</dt><br>
<dt><b>5.4.</b> <u>Necessary Hardware/Software</u>. Unless otherwise provided, you are responsible for providing the hardware and software necessary to access our Services and for ensuring such hardware and software is capable of accessing the Site and using our Services, and you will bear all costs associated with the acquisition and maintenance of such hardware and software. We do not guarantee the functionality of our Services or the Site on any hardware or software. We will not be responsible or liable for any errors or failures from any malfunction of your hardware or software.</dt><br>
</dl>
<li>PRICE OF SERVICES</li>
<dl>
<dt><b>6.1.</b> <u>Prices</u>. Price for Services will be as quoted on the Site from time to time. We take all reasonable care to ensure that the prices of the Services are correct at the time when the relevant information was entered onto the system. However, if we discover an error in the price of a Service you ordered, your order will be revised.</dt><br>
<dt><b>6.2.</b> <u>Change in Prices</u>. Prices for our Services may change from time to time.</dt><br>
<dt><b>6.3.</b> <u>VAT</u>. Where applicable, the price of a Service includes VAT (value added tax) at the applicable current rate chargeable in the UK at the time of the order. However, if the rate of VAT changes between the date of your order and the Order Confirmation, we will adjust the VAT you pay, unless you have already paid for the Services in full before the change in VAT takes effect.</dt><br>
<dt><b>6.4.</b> <u>Credit card</u>. Credit Card purchases may require proof of ownership of the payment method and an identification request. In case of any Credit Card purchase we have the right to place your account on hold (hold the ability to withdraw any mined funds from your account balance) for a period of up to 30 days as a security measure of anti-fraud related regulations and policies.</dt><br>
</dl>
<li>RESTRICTIONS ON USE</li>
<dl>
<dt><b>7.1.</b> <u>Restrictions on Use</u>. You will not use our Services or the content or information delivered through our Services to conduct any business or activity or solicit the performance of any activity for any illegal, fraudulent, unauthorized or improper purpose. You will comply with all applicable constitutions, laws, ordinances, principles of common law, codes, regulations, statutes or treaties and all applicable orders, rulings, instructions, requirements, directives or requests of any courts, regulators or other governmental authorities (“Law”) in connection with your use of our Services.</dt><br>
<dt><b>7.2.</b> <u>Your Promises</u>. You agree that you will not attempt to: (a) access any Software or part of our Services for which your use has not been authorized; or (b) access or use or attempt to access or use another User’s account; or (c) interfere in any manner with the provision of our Services or Software, the security of our Services of Software, or other Users, or otherwise abuse our Services or Software.</dt><br>
<dt><b>7.3.</b> <u>Our Remedies</u>. If we have reason to believe that you or any entity under your common ownership or control have engaged in any of the prohibited or unauthorized activities described in this Agreement, have otherwise breached your obligations under this Agreement, have misappropriated our trade secrets or our Confidential Information, copyrights, patents or other intellectual property rights, then without demand or prior notice and without limiting any of its other available remedies, we may:</dt><br>
<dd><b>a.</b> terminate, suspend or limit your access to or use of your Account or our Services;</dd>
<dd><b>b.</b> terminate or suspend this Agreement or any Service;</dd>
<dd><b>c.</b> withhold distribution of any Customer Portions to you;</dd>
<dd><b>d.</b> notify law enforcement, regulatory authorities, impacted third parties and others as we deem appropriate;</dd>
<dd><b>e.</b> refuse to provide our Services to you in the future;</dd>
<dd><b>f.</b> take legal action against you.</dd>
</dl>
<li>TECHNOLOGY</li>
<dl>
<dt><b>8.1.</b> <u>Definition</u>. “Technology” means our or our Suppliers’ computer programs, literary works, audiovisual works, all other original works of expression, methods, apparati and processes that we publish, distribute, use or otherwise exploit to facilitate your use of our Services, and includes without limitation our Software, software tools, user interface designs, and any derivatives, improvements, enhancements or extensions thereof developed or provided by us or our Suppliers and used in the provision of our Services.</dt><br>
<dt><b>8.2.</b> <u>Ownership</u>. This Agreement does not transfer to you any ownership or proprietary rights in the Technology or any work or any part thereof, and all right, title and interest in and to the Technology will remain solely with us or our Suppliers. You are not purchasing title to any Technology. If you are approved to use our Services, you are permitted to use Technology only as enabled and attended through your Account at the Site and only during the Term. That permission is for the sole purpose of enabling you to use our Services in the manner permitted by this Agreement. Your rights under this Agreement are not transferable to any other person absent our prior express written consent.</dt><br>
<dt><b>8.3.</b> <u>Restrictions on Use</u>. You will not copy Technology or use Technology independently other than as set forth above, and we grant you no license, whether express or implied, in any copyright, patent or any other intellectual property rights embodied in Technology.</dt><br>
</dl>
<li>HOW WE USE YOUR PERSONAL INFORMATION</li>
<dl>
<dt>When considering your offer to order Service, for our own security we reserve the right to use any of the information you have provided in order to research your bona fides, credit and legal history, and any other information about you in publicly available sources. You grant us the full permission to research you and your background before accepting your offer.</dt><br>
</dl>
<li>CHANGES TO THIS AGREEMENT</li>
<dl>
<dt><b>10.1.</b> <u>Our Right to Change this Agreement</u>. We may change this Agreement, or otherwise modify the terms of use for our Services, or the Term (all such changes and modifications “Changes”), from time to time, including but not limited to in the following circumstances:</dt><br>
<dd><b>a.</b> changes in how we accept payment from you;</dd>
<dd><b>b.</b> changes in how we interact or communicate with you;</dd>
<dd><b>c.</b> changes in any relevant Law;</dd>
<dd><b>d.</b> changes in the financial viability (to be decided at our sole discretion) of the Service;</dd>
<dd><b>e.</b> occurrence of an Event Outside Our Control;</dd>
<dd><b>f.</b> and changes in Law applicable to the Service.</dd><br>
<dt><b>10.2.</b> <u>Notice of Changes</u>. We will notify you of any Changes in one of the following ways, in our sole discretion: (a) sending an email; or (b) providing notice when you log in to your Account or otherwise use our Services. Notice of any Changes will be considered to have been given to and received by you on the same day after such notice was provided or made available to you.</dt><br>
<dt><b>10.3.</b> <u>Your Consent</u>. Your continued use of our Services or your purchase of any additional Service after the effective date of any Changes will constitute your acceptance of any such Changes. As part of any Changes, you may be required to affirmatively accept a revised Agreement in order to continue using our Services.</dt><br>
<dt><b>10.4.</b> <u>Application of Changes</u>. Unless otherwise provided by this Agreement or applicable Law, Changes will only apply after their effective dates and will not apply retroactively.</dt><br>
<dt><b>10.5.</b> <u>Changes Made for Legal Reasons</u>. Changes made for legal reasons, including but not limited to Changes to comply with any relevant Laws, will be effective immediately. We will contact you as soon as reasonably possible to notify you of such Changes.</dt><br>
</dl>
<li>TERMINATION</li>
<dl>
<dt><b>11.1.</b> <u>Your Right to Terminate</u>. You may terminate this Agreement and any Service by giving notice of termination to us. You normally will not be entitled to receive any refund of your Service.</dt><br>
<dt><b>11.2.</b> <u>Consequences of Termination</u>. If you terminate any Service, or terminate or otherwise refuse to accept the terms of this Agreement, we will cease to provide any Services and you will no longer be obligated to pay any regularly charged fee. If you terminate a Service pursuant to this Section, your Service Fee will not be refunded. If you terminate this Agreement and your own wrongful activity or violations of this Agreement entitle or potentially entitle us to damages or you otherwise have unpaid obligations or potential obligations to us at the time of termination, in which event we are permitted to retain any amounts owed to you as a setoff against those damages and other obligations.</dt><br>
</dl>
<li><b>OUR LIABILITY TO YOU IS LIMITED TO THE SERVICE FEE</b></li>
<dl>
<dt><b>12.1.</b> <u>Exclusions</u>. Nothing in this Agreement limits or excludes our liability for:</dt><br>
<dd><b>a.</b> death or personal injury caused by our negligence; or</dd>
<dd><b>b.</b> fraud or fraudulent misrepresentation.</dd><br>
<dt><b>12.2.</b> <u>WAIVER OF CLAIMS AGAINST THE COMPANY’S SUPPLIERS</u>.</dt><br>
<dd><b>a.</b> We are your only obligor under this Agreement, and in relation to providing you the Service. <b>YOU HEREBY VOLUNTARILY, IRREVOCABLY, AND UNCONDITIONALLY RELEASE, ACQUIT, AND FOREVER DISCHARGE AND FULLY WAIVE YOUR RIGHT TO BRING ANY TYPE OF LAWSUIT, LEGAL ACTION, CHARGE, DEMAND, COMPLAINT OR CLAIM OF ANY TYPE AGAINST ANY OF OUR SUPPLIERS, OR ANYONE OTHER THAN US, RELATING TO THE SERVICE.</b></dd>
<dd><b>b.</b> In some jurisdictions, this waiver of claims against our Suppliers may not be enforceable. To the extent that is the case, the provisions of this Agreement that limit our liability or disclaim warranties also apply to our Suppliers.</dd><br>
<dt><b>12.3.</b> <u>Your Service Fee is at Risk, and There Is No Guarantee That the Service Will Produce Product</u>. The fact that people have profited from Bitcoin mining in the past is no indication that you will profit from Bitcoin mining, or from the Service, in the future. You should view your entire Service Fee as being at risk as you enter this Agreement. We make no representation, warranty or guarantee that you will receive Product from the Services.</dt><br>
<dt>IN USING OUR SERVICES, YOU ACKNOWLEDGE AND WARRANT THAT YOU HAVE CONDUCTED SUFFICIENT DUE DILIGENCE TO UNDERSTAND THE RISKS ASSOCIATED WITH BITCOIN MINING. NOTWITHSTANDING OUR PROVISION OF CONSTANT HASH-RATE UNDER YOUR MINING CONTRACT, YOUR MINING CONTRACT MAY NOT RESULT IN THE CONSTANT GENERATION OF NEW BITCOIN DUE TO OTHER FACTORS, INCLUDING THE INCREASE IN THE OVERALL NETWORK HASH-RATE, THE INCREASE IN ELECTRICITY COSTS, THE DECREASE IN PRICE OF BITCOIN, OR THE DECREASE IN THE COINBASE BLOCK REWARD. YOU ALSO ACKNOWLEDGE AND REPRESENT AND WARRANT THAT YOU HAVE MADE AN INDEPENDENT DECISION TO PURCHASE AND USE THE SERVICES FROM US BASED ON THE INFORMATION AVAILABLE TO YOU, WHICH YOU HAVE DETERMINED IS ADEQUATE FOR THAT PURPOSE. WE HAVE NOT GIVEN ANY INFORMATION OR INVESTMENT ADVICE OR RENDERED ANY OPINION TO YOU AS TO WHETHER THE PURCHASE AND USE OF THE SERVICES IS PRUDENT OR SUITABLE, AND YOU ARE NOT RELYING ON ANY REPRESENTATION OR WARRANTY BY US EXCEPT AS EXPRESSLY SET FORTH IN THIS AGREEMENT.</dt><br>
<dt><b>12.4.</b> <u>Inability to Perform</u>. Except as otherwise provided by nonwaivable, nondisclaimable applicable Law or the express provisions of this Agreement, we will not be liable for our inability to perform our obligations under this Agreement if we have taken reasonable precautions and exercised the diligence required by the circumstances when our inability to perform is the result of an Event Outside Our Control.</dt><br>
<dt><b>12.5.</b> <u>Other Disclaimers of Liability</u>. Except as otherwise provided by nonwaivable, nondisclaimable applicable Law or the express provisions of this Agreement, we will not be liable for any losses or damages caused by: (a) your misconduct, errors or negligence, including your failure to comply with the terms of this Agreement; (b) an act or failure to act of any person not directly within our control; (c) unauthorized access of your Account or Bitcoin Wallet or your failure to report such unauthorized access promptly to us; or (d) your use or misuse of our Services.</dt><br>
<dt><b>12.6.</b> <u>WARRANTY DISCLAIMERS</u>. You understand and agree that your use of the Service is at your own sole risk.</dt><br>
<dt>WE PROVIDE THE SERVICE 'AS IS' AND WITHOUT WARRANTY BY US, OUR DIRECTORS, OFFICERS, AGENTS, EMPLOYEES, PARENTS, SUBSIDIARIES, AFFILIATES, LICENSORS, MARKETERS ADVERTISERS OR SUPPLIERS (THE 'OTHER ENTITIES'), AS APPLICABLE, AND, TO THE MAXIMUM EXTENT ALLOWED BY APPLICABLE LAW, WE AND THE OTHER ENTITIES EXPRESSLY DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE AND ANY WARRANTY OF NONINFRINGEMENT OF THIRD PARTY RIGHTS. THERE IS NO WARRANTY, WHETHER BY US OR THE OTHER ENTITIES, THAT THE SERVICE WILL MEET YOUR REQUIREMENTS, OR THAT YOUR ACCESS TO THE SAME WILL BE UNINTERRUPTED OR ERROR-FREE, OR REGARDING THE USE OR THE RESULTS OF THE USE OF THE SERVICE OR WITH RESPECT TO PERFORMANCE, ACCURACY, RELIABILITY, SECURITY CAPABILITY, CURRENTNESS OR OTHERWISE. NO ORAL OR WRITTEN INFORMATION OR ADVICE GIVEN BY ANY PERSON SHALL CREATE A WARRANTY IN ANY WAY WHATSOEVER RELATING TO US OR THE OTHER ENTITIES, AS APPLICABLE. UNDER NO CIRCUMSTANCES WILL WE OR THE OTHER ENTITIES BE LIABLE FOR ANY UNAUTHORIZED USE OF THE SERVICE OR YOUR ACCOUNT.</dt><br>
<dt>UNDER NO CIRCUMSTANCES WILL WE OR THE OTHER ENTITIES BE LIABLE TO YOU FOR ANY INDIRECT, CONSEQUENTIAL, INCIDENTAL, PUNITIVE, OR SPECIAL DAMAGES (INCLUDING DAMAGES FOR LOSS OF PROFITS, BUSINESS INTERRUPTION, LOSS OF YOUR INFORMATION, AND THE LIKE), WHETHER BASED ON CONTRACT, NEGLIGENCE, STRICT LIABILITY, TORT, OR OTHERWISE, ARISING OUT OF OR RELATED TO THIS AGREEMENT, THE MARKETING OR PURCHASE OF THE SERVICE OR ANY USE OR INABILITY TO USE THE SERVICE OR YOUR ACCOUNT, EVEN IF WE OR THE OTHER ENTITIES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</dt><br>
<dt>BECAUSE SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU. TO THE EXTENT THAT IN A PARTICULAR CIRCUMSTANCE ANY DISCLAIMER OR LIMITATION ON DAMAGES OR LIABILITY SET FORTH HEREIN IS PROHIBITED BY APPLICABLE LAW, THEN WE AND THE OTHER ENTITIES WILL BE ENTITLED TO THE MAXIMUM DISCLAIMERS OR LIMITATIONS ON DAMAGES AND LIABILITY AVAILABLE AT LAW OR IN EQUITY AND IN NO EVENT WILL THOSE DAMAGES OR LIABILITY EXCEED THE GREATER OF $100.</dt><br>
</dl>
<li>INDEMNIFICATION</li>
<dl>
<dt>You agree to indemnify, defend and hold harmless us and the Other Entities, in their individual capacities or otherwise, from and against any third party claims, liability, damages or costs (including reasonable attorneys’ fees) arising from (a) your negligence; (b) any claim by a third party (“Third Party Claim”) alleging that your use of our Services violates the rights of any third party, or violates any Law; (c) your failure to comply with the terms of this Agreement; (d) your violation of any applicable Law; (e) your violation of any rights of a third party; or (f) your use of our Services.</dt><br>
</dl>
<li>EVENTS OUTSIDE OUR CONTROL</li>
<dl>
<dt><b>14.1.</b> <u>Definition</u>. An “Event Outside Our Control” means any act or event beyond our reasonable control, including without limitation any act of God, strikes, lockouts or other industrial action by third parties, civil commotion, riot, invasion, terrorist attack or threat of terrorist attack, war (whether declared or not) or threat or preparation for war, fire, explosion, storm, flood, earthquake, subsidence, epidemic or other natural disaster, failure of public or private telecommunications or power networks, equipment failure, system failure, material change to Law, or change in industry self-regulation regarding Bitcoin, Bitcoin mining or associated services.</dt><br>
<dt><b>14.2.</b> <u>Our Liability</u>. We will not be liable or responsible for any failure to perform, or delay in performance of, any of our obligations to deliver the Services that is caused by an Event Outside Our Control.</dt><br>
<dt><b>14.3.</b> <u>Effect</u>. If an Event Outside Our Control takes place that affects the performance of our obligations to deliver Services, (a) we will contact you as soon as reasonably possible to notify you; and (b) our obligations to you will be suspended and the time for performance of our obligations will be extended for the duration of the Event Outside Our Control. Where the Event Outside Our Control affects our delivery of Services to you for a period of greater than six months (an “Extended Event Outside Our Control”) we shall have sole discretion to cease provision of the Services to you.</dt><br>
<dt><b>14.4.</b> <u>Allocation</u>. We are also entitled, during Events Outside Our Control, to allocate the disruption or harm across a number of affected Users or Services. You acknowledge that this may reduce your allocated Services and the Customer Portion which is distributed to you.</dt><br>
<dt><b>14.5.</b> <u>Regulation</u>. We have the right to redeem the current active mining contracts at the current one-time allocation price in order to avoid disputes in connection with entry into force the goverment regulation (if any) of the Services with 7 days' notice via internal email.</dt><br>
</dl>
<li>HOW DO I RESOLVE DISPUTES ABOUT THE SERVICES?</li>
<dl>
<dt><b>15.1.</b> <u>General</u>. YOU AND WE AGREE TO RESOLVE DISPUTES ARISING UNDER, CONCERNING, OR RELATING TO THIS AGREEMENT (INCLUDING ANY SERVICES), ITS INTERPRETATION, ITS VALIDITY (INCLUDING ANY CLAIM THAT ALL OR ANY PART OF THIS AGREEMENT IS VOID OR VOIDABLE), ITS TERMINATION, OR ITS SUBJECT MATTER, THE MARKETING OR PURCHASE OF THE SERVICE OR ANY USE OR INABILITY TO USE THE SERVICE, WHETHER THEY ARE WITH US OR ANY OF OUR SUPPLIERS (TO THE EXTENT NOT WAIVED, AS SET FORTH ABOVE) ONLY BY MANDATORY, FINAL, BINDING ARBITRATION. THAT MEANS YOU ARE WAIVING THE RIGHT TO A TRIAL BY JUDGE OR JURY, SINCE THERE IS NONE IN ARBITRATION. IN ARBITRATION, THE PROCEDURES MAY BE DIFFERENT THAN IN COURT, BUT AN ARBITRATOR CAN AWARD YOU THE SAME DAMAGES AND RELIEF, AND MUST HONOR THE SAME TERMS IN THIS AGREEMENT, AS A COURT WOULD. YOU AGREE THAT IN SOME CASES, THE LAW PERMITS THE PREVAILING PARTY TO BE REIMBURSED FOR ITS ATTORNEYS FEES, AND THE SAME APPLIES TO DISPUTES THAT YOU RAISE IN ARBITRATION.</dt><br>
<dt><b>15.2.</b> <u>Arbitration of Disputes</u>. Any controversy, claim, or dispute (“Dispute”) arising under, concerning, or relating to this Agreement (including any Services), its interpretation, its validity (including any claim that all or any part of this Agreement is void or voidable), its termination, or its subject matter, the marketing or purchase of the Service or any use or inability to use the Service, whether the Dispute is with us or any or any Supplier (to the extent not waived, as set forth above), whether the Dispute is for breach of contract, tort, or any other matter can only be resolved or adjudicated only by mandatory, final, binding arbitration.</dt><br>
<dt><b>15.3.</b> <u>Raising a Dispute</u>. To raise a Dispute, you must give us notice of the Dispute by sending an e-mail to <a href='mailto:support@hashing24.com'>support@hashing24.com</a> with the words “RAISING A DISPUTE” in the subject line), along with a written description of your Dispute, including any documents and information that you believe will help us understand your Dispute, and your requested resolution. In order to discuss the Dispute with you, you permit us (or the Disputed party) to contact you by phone, text message, email or physical mail through any and all addresses or phone numbers that you have provided. You must send us notice of any Dispute within 30 days of your discovering the act or omission that gave rise to your Dispute. If you do not so notify us, then you lose your right to raise the Dispute.</dt><br>
<dt><b>15.4.</b> <u>Resolution Offer</u>. Within the first 30 days of your submitting your Dispute, we will have the right, but no obligation, to provide you with a proposed resolution of the Dispute (the “Offer”). If you are unsatisfied with the Offer, you must reject the Offer by notice to us within 14 days of the Offer. If you do not reject the Offer within at 14-day period, you will be deemed to have accepted it and forfeit your right to raise the Dispute. If we do not make the Offer within 30 days of your submitting your Dispute or if you reject an Offer as set forth above, either you or we may commence arbitration of the Dispute as set forth below.</dt><br>
<dt><b>15.5.</b> <u>Place and Language</u>. The arbitration proceeding shall be conducted in the English language, in the UK. We shall choose the arbitration service to be used for the Dispute.</dt><br>
<dt><b>15.6.</b> <u>Award</u>. Any award of the arbitrator shall be in writing and shall state the reasons for the award. Judgment upon an award may be entered in any court having competent jurisdiction. The decision of the arbitrator must be based upon this Agreement and applicable Law. The decision of the arbitrator is final and binding except for fraud, misconduct, or errors of law, and judgment upon the decision rendered may be entered in any court having jurisdiction.</dt><br>
<dt><b>15.7.</b> <u>Waiver of Rights</u>.</dt><br>
<dt>IT IS IMPORTANT THAT YOU READ THIS ARBITRATION CLAUSE. IT PROVIDES THAT YOU MAY BE REQUIRED TO SETTLE ANY CLAIM OR DISPUTE THROUGH ARBITRATION, EVEN IF YOU WOULD PREFER TO LITIGATE THE CLAIM IN COURT. YOU ARE GIVING UP THE RIGHTS YOU MIGHT HAVE TO LITIGATE SUCH CLAIMS BEFORE A JURY, TO ENGAGE IN DISCOVERY, AND TO PARTICIPATE IN A CLASS ACTION OR SIMILAR PROCEEDING. OTHER RIGHTS THAT YOU WOULD HAVE IF YOU WENT TO COURT, SUCH AS THE RIGHT TO APPEAL THE ARBITRATOR’S AWARD, MAY NOT BE AVAILABLE IN ARBITRATION OR MAY BE MORE LIMITED. YOU SHOULD CONSULT LEGAL COUNSEL TO DETERMINE WHETHER THIS ARBITRATION CLAUSE IS APPROPRIATE FOR YOU.</dt><br>
<dt>YOU UNDERSTAND AND AGREE THAT ANY DISPUTE WILL BE RESOLVED BY BINDING ARBITRATION. ARBITRATION REPLACES THE RIGHT TO GO TO COURT, INCLUDING THE RIGHT TO HAVE A JURY, TO ENGAGE IN DISCOVERY (EXCEPT AS MAY BE PROVIDED IN THE ARBITRATION RULES), AND TO PARTICIPATE IN A CLASS ACTION OR SIMILAR PROCEEDING. IN ARBITRATION, A DISPUTE IS RESOLVED BY AN ARBITRATOR INSTEAD OF A JUDGE OR JURY. ARBITRATION PROCEDURES ARE SIMPLER AND MORE LIMITED THAN COURT PROCEDURES. YOU ALSO AGREE ANY ARBITRATION WILL BE LIMITED TO THE DISPUTE BETWEEN YOU AND THE COMPANY AND WILL NOT BE PART OF A CLASS-WIDE OR CONSOLIDATED ARBITRATION PROCEEDING.</dt><br>
<dt><b>15.8.</b> <u>NO CLASS ACTIONS</u>. EVEN IF APPLICABLE LAW, OR THE ARBITRATOR OTHERWISE PERMITS CLASS ACTIONS OR CLASS ARBITRATIONS, THE DISPUTE RESOLUTION PROCEDURE SPECIFIED HERE APPLIES AND YOU WAIVE ANY RIGHT TO PURSUE DISPUTES ON A CLASSWIDE BASIS – THAT IS – TO EITHER JOIN A CLAIM WITH THE CLAIM OF ANY OTHER PERSON OR ENTITY, OR ASSERT A CLAIM IN A REPRESENTATIVE CAPACITY ON BEHALF OF ANYONE ELSE IN ANY LAWSUIT, ARBITRATION OR OTHER PROCEEDING.</dt><br>

</dl>
<li>OTHER IMPORTANT TERMS</li>
<dl>
<dt><b>16.1.</b> <u>Governing Law</u>. English laws will govern any disputes relating to the Service or these Terms, notwithstanding the English conflicts of laws rules or any other jurisdiction.</dt><br>
<dt><b>16.2.</b> <u>Entire Agreement</u>. This Agreement (including any Services) constitutes the entire agreement between you and us. You acknowledge that you have not relied on any statement, promise or representation made or given by or on behalf of us which is not set out in this Agreement.</dt><br>
<dt><b>16.3.</b> <u>Our Assignment</u>. We may transfer or assign our rights and obligations under this Agreement or a Service to another entity, but this will not affect your rights or our obligations under this Agreement or the terms of the Service. We will endeavor to notify you in writing if this happens.</dt><br>
<dt><b>16.4.</b> <u>Your Assignment.</u> A Service is between you and us, and you may not assign, transfer, sublease, encumber or subject to any security interest a Service without written authorization from us. Any attempted assignment in violation of this Agreement will be void and of no effect.</dt><br>
<dt><b>16.5.</b> <u>Third Party Beneficiaries</u>. No other person, other than you, shall have any rights to enforce this Agreement or a Service, whether under the Contracts or otherwise.</dt><br>
<dt><b>16.6.</b> <u>Severability</u>. If any provision of this Agreement is held to be invalid or unenforceable, including without limitation anything regarding the arbitration process, such provision will be struck from this Agreement only to the extent it is invalid or unenforceable. Unless otherwise provided, all other terms of this Agreement will remain in full force and effect.</dt><br>
<dt><b>16.7.</b> <u>Waiver</u>. If we fail to insist that you perform any of your obligations under this Agreement, or if we do not enforce our rights against you, or if we delay in doing so, that will not mean that we have waived our rights against you and will not mean that you do not have to comply with those obligations. If we do waive a default by you, we will only do so in writing, and that will not mean that we will automatically waive any later default by you.</dt><br>
<dt><b>16.8.</b> <u>Conflict</u>. If there is a conflict between this Agreement and something stated by any Other Entity, whether before or after you enter into this Agreement, the terms of this Agreement will prevail.</dt><br>
<dt><b>16.9.</b> <u>Survival</u>. Any terms of this Agreement which by their nature should survive will survive the termination of this Agreement.</dt><br>
</dl>
</ol>

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

<!-- Mirrored from hashing24.com/terms by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2017 16:48:14 GMT -->
</html>
