<footer>
        <div class="container">
            <div class="footer-body">
                <img src="img/logo-white.png" alt="">
                <h3>Contact Info</h3>
                <ul>
                    <li><img src="img/maps-and-flags.png" alt="">203, Second Floor, Sagardeep Complex, above Nazeer Foods, opp. Karkardooma metro station, Saini Enclave, Karkardooma, Anand Vihar, Delhi, 110092</li>
                    <li><img src="img/telephone.png" alt=""> <a href="tel:919810704309">+91 9810704309</a></li>
            
                </ul>
              
            </div>
            <div class="copyright">
               <div class="left">
                <p>Holiday Advisor all Rights Reserved</p>
               </div>
               <div class="right">
                  <ul>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">terms & conditions</a></li>
                  </ul>
               </div>
            </div>
        </div>
      </footer>

    
       <script>
            var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?69257';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url;
            var options = {
            "enabled":true,
            "chatButtonSetting":{
                "backgroundColor":"#28D146",
                "ctaText":"Chat with our Travel Specialist",
                "borderRadius":"25",
                "marginLeft": "0",
                "marginRight": "20",
                "marginBottom": "20",
                "ctaIconWATI":false,
                "position":"right"
            },
            "brandSetting":{
                "brandName":"namibia-safari",
                "brandSubTitle":"undefined",
                "brandImg":"../img/",
                "welcomeText":"Hi there!\nHow can I help you?",
                "messageText":" I'd like to chat with you - from africaincoming.co.za/namibia-safari",
                "backgroundColor":"#28D146",
                "ctaText":"Chat with our Travel Specialist",
                "borderRadius":"25",
                "autoShow":false,
                "phoneNumber":"27780336483"
            }
            };
            s.onload = function() {
                CreateWhatsappChatWidget(options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        </script>
    
    
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="js/validation.js"></script>
<script src="js/custom.js"></script>
<script>
  $(function () {
            $("#date").datepicker({
                minDate: 0
            });
        });

// $("#submit").click(function () { 
// 	var r= validate();
// 	if(r){ 
// 	var data=$("#contactform").serialize();
// 	$.ajax ({		
// 		type : "POST", 
// 		url : "submit-form.php",
// 		data : {data:data},		
// 		success : function (data) { 
// 			data=JSON.parse(data); 
// 			if(data['null']=='Please input the captcha')
// 			 alert('Please input the captcha');
// 			 if(data['captcha']=='Please input the correct captcha')
// 			 alert('Please input the correct captcha');
// 			  if(data['success']=='success')
// 			  window.location.href = "thankyou.php" ;
// 			  if(data['error']=='Error Found... Please mail us at : info@africaincoming.com')
// 			 alert('Error Found... Please mail us at : info@africaincoming.com');			
// 		}		
// 		});	
// 	}		
// 		return false;
// });



// tabs 
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  var cityElement = document.getElementById(cityName);
  cityElement.style.display = "block";

  evt.currentTarget.className += " active";
}





$(document).ready(function () {

    $(document).on("change", ".country_data", function () {
        var getval = $(this).val();        
		var get_countrycode = $('option:selected', this).attr('data-countrycode');		
		if(getval!=''){
			$('#country_std_code').val("+"+get_countrycode);
		}else{
			$('#country_std_code').val('');
		}
	});

});
</script>

<script>
        grecaptcha.ready(function() {
          grecaptcha.execute('6LdZ4twqAAAAABerUc6fmSbuhoirwaoyEPwKQc1U', {action: 'submit'}).then(function(token) {
            var response = document.getElementById("token3");
            response.value = token;
            // console.log(token);
          });
        });
  </script>
</body>
</html>

