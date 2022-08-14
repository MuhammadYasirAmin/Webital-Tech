<style type="text/css">
  
  .header, footer{ display: none!important }

.logo {padding-top: 82px;}

.getQuote .d_t{
    width: 100%;
}
.getQuote .d_t .logo{
    background-color: #2e2e2e;
}

.get_quote.section-padding {
    padding: 10px 0px 60px 0px;
}
.share-wrapper{ background-color: #2e2e2e; }
</style>

 

<!doctype html>
<html>
<title>Get a custom quote | Web Ital Tech</title>


<meta name="description" content="Get yourself a custom quote according to your requirements. Fill out the requirement form to get connected today." />

<head>
<?php include 'partials/links.php'; ?>
<style>
.main-scroll-overlay .slimScrollBar {
    display: none !important;
}
</style>

  <div class="commented-container">




</div>

<?php include 'partials/header.php'; ?>

<!-- <div class="sale-blckfriday">
  <div class="sale-box">
    <a href="javascript:;"  onclick="$zopim.livechat.window.toggle()" >Lets Talk</a>
  </div>
  <div class="salecrcle-btn">
    <h3><span>UPTO</span>50%<span>DISCOUNT</span></h3>
  </div>
</div> -->

<section class="getQuote">
	<div class="share-wrapper">
		<div class="d_t">
		  <div class="d_c">
			<div class="text-center logo"><a href="https://webitaltech.com"><img src="https://webitaltech.com/img/logo-inside.png"></a></div>
			<section class="section-padding gray_bg get_quote">
  <div class="container">
    <div class="row">
      <div class="col-md-push-2 col-md-8">
     
        <h3 class="text-center">Get a Free Quote</h3>

        

        <p class="text-center grey">If you are interested in speaking with Web Ital Tech about an upcoming project, there are a number of ways we can make that happen.

        Filling out the form would help us get the right person in touch with you, or you could give us a call.</p>
        <form method="POST" action="includes/contact.php" id="quoteForm" autocomplete="off">

          <div class="row">
                                       <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
              </div>
              <input type="hidden" name="_token" value="hyEVRDaVyX6lDocb5hPFgfarx6uaw0K9LjpZfmI9">
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Phone Number" name="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="required" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                <input type="text" autocomplete="off" class="form-control" placeholder="Country" name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"   required="required"/>
              </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
              <select class="cs-select cs-skin-elastic services" name="interest" id="interest" required="required">
                  <option value="" disabled >I am Interested in</option>
                  <option value="Logo Design">Logo Design  </option>
                  <option value="Brand Development ">Brand Development </option>
                  <option value="Web Design & Development ">Web Design & Development </option>
                  <option value="App Design & Development">App Design & Development </option>
                  <option value="Back-End Development">Back-End Development </option>
                  <option value="Digital Marketing ">Digital Marketing </option>
                  <option value="Marketing Collaterals">Marketing Collaterals </option>
                  <option value="Motion Graphics">Motion Graphics </option>
                  <option value="Website Management">Website Management </option>
                  <option value="Domain Registration">Domain Registration </option>
                  <option value="Creative Copywriting">Creative Copywriting </option>
                  <option value="2D & 3D Illustration">2D & 3D Illustration </option>
              </select>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
              <select class="cs-select cs-skin-elastic" name="budget" id="budget" required="required">
                <option value="" disabled >Forecasted-Budget</option>
                <option>$5000 to $10,000 </option>
                <option>$20,000 to $30,000</option>
                <option>$35,000 to $50,000</option>
                <option>$50,000 and above</option>
              </select>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20">
              <textarea class="form-control" name="description" placeholder="Talk about your project" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="required"></textarea>
            </div>
            <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft">
              <div class="clearfix">
                
                <!--<div class="col-lg-12">
                  



                <div class="company_profile pull-right">
                  <label class="control control--checkbox">
                  include Company Profile
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                  </label>
                </div>



                <div class="company_profile fill-help pull-left">
                  <label class="control control--checkbox">
                  Please Fill all the field
                 
                  
                  </label>
                </div>

                </div>-->

              </div>
              <div class="text-center">
                <button class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="submit" />CONTACT OUR TEAM</button>
              </div>
            </div>
          </div>
          <!-- <input type="hidden" name="page" value="https://webitaltech.com/Get-a-Free-Quote" /> -->
        </form>
      </div>
      <!-- end col-md-6 --> 
      
    </div>
    <!-- end row --> 
    
  </div>
  <!-- end container --> 
  
</section>
<?php include 'partials/get_quote.php'; ?>
 <?php include 'partials/footer.php'; ?>
 


<script type="text/javascript" src="https://webitaltech.com/js/jquery.min.js"></script>



<script src="https://webitaltech.com/js/pricing-slide.js"></script>

  

<script src="https://webitaltech.com/js/selectFx.js" ></script>

 
<script src="https://webitaltech.com/js/classie.js" ></script>

<script src="https://webitaltech.com/js/app.js" ></script>


<script type="text/javascript" src="https://webitaltech.com/js/revolution.min.js" ></script>

<script src="https://webitaltech.com/js/scripts.js"></script>

<script src="https://webitaltech.com/js/jquery-ui.js" ></script>

<script src="https://webitaltech.com/js/jquery.dataTables.min.js" ></script>

<script src="https://webitaltech.com/js/dataTables.material.min.js" ></script>

<script src="https://webitaltech.com/js/jquery.datetimepicker.full.min.js" ></script>

<script src="https://webitaltech.com/js/tscripts.js"></script>


<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3ERREXEymAInmKXq4xzkffOwPshRiisJ";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104261100-1', 'auto');
  ga('send', 'pageview');

</script>

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<script>
  $(function() {
        var myLazyLoad = new LazyLoad({
   elements_selector: ".lazy"
   // load_delay: 300 //adjust according to use case
});
    });
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 924845129;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/924845129/?guid=ON&amp;script=0"/>
</div>
</noscript>


<script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>

</body>
</html>