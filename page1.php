<!DOCTYPE HTML>
	<html>
	<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Job Application Page 1</title>

	<!--stylesheets-->	
	<link rel="stylesheet" type='text/css' href="css/application.css">
	<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">	

	<!--jquery-->		
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript" type="text/javascript" ></script>
	
	<!--validation-->		
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

	<script>
	jQuery(document).ready(function(){
	//  submission and fields to the validation engine
	jQuery("#mainForm").validationEngine();
	});
	</script>
	<script type ="text/JavaScript">
	$(document).ready(function() {
	$("#field13").mask("(999) 999-9999? x9999"),{placeholder:"_"};
	$("#field14").mask("(999) 999-9999? x9999");
	$("#field11").mask("99999? -9999");
	$('#field18').mask('99/99/9999');
    $('#field20').mask('99/99/9999');
    $('#field21').mask('99/99/9999');
    $('#field29').mask('99/99/9999');
    $('#field30').mask('99/99/9999');
	});	
	</script>
	<script type="text/JavaScript">
    $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")==""){
                    $(".box").hide();
                    $(".hotel").hide();
                    $(".restaurant").hide();
                }
                if($(this).attr("value")=="hotel"){
                    $(".box").hide();
                    $(".hotel").show();
                }
                if($(this).attr("value")=="restaurant"){
                    $(".box").hide();
                    $(".restaurant").show();
                }
            });
        }).change();
    });
	</script>
</head>
<body>
	<div id="main">
<table><tr><td id = "topNavBar">
<ul class="topNav">
<li class="uberlink"><a href="page1.php">Testing Form</a></li>
<li class="topNav"><a href="index.php">Public Form</a></li>
</ul>
</td></tr></table>
<div id="content"></div>
<h1>Application for Employment</h1>
<p style="text-align:right; display: block"><span class = "warning">*</span>Required Field</p>
<div>
<form name="mainForm" id = "mainForm" method="post" action="page2.php">
	<!--position top content-->
	<div class="hotel box"><p class="announcement">JBH Acquisitions, LLC dba Red Lion Hotel Jantzen Beach is an equal opportunity employer. This company will make reasonable accommodation in the application process, if needed.</p></div>
    <div class="restaurant box"><p class="announcement">TFBP Holdings, LLC dba Jantzen Beach Bar &amp; Grill is an equal opportunity employer. This company will make reasonable accommodation in the application process, if needed.</p></div>
	<label for = "location" class="input required">Where would you like to apply?</label>
	<select name = "field1" id="field1" class="validate[required]">
	<option value = "">Choose Location</option>
	<option value = "hotel">Red Lion Hotel Jantzen Beach Hotel</option>
	<option value = "restaurant">Jantzen Beach Bar &amp; Grill</option>
	</select>
	<br ><br >
	<!--position applying for and date of application-->
	<!--position applying for and date of application-->
    <div class = "pinfo">
	<table class="white_border">
	<tr><td>
  	<label for="position" class="input required">Position(s) Applied For:</label>
  	<input type="text" name="field2" id="field2" value="" class="validate[required]">
	</td><td>
  	  	<label for="dateDisplay">Today's Date:<p style="display: inline; margin-left: 10px" id="dateDisplay" name="dateDisplay"></p></label>
	</td></tr>
	<tr><td>
  <label class="superLabel required">How did you learn about us?</label><br>
    <input id="advertisment" name="field3" type="radio" value="advertisment" class="validate[required] hearabout" onClick="if(this.checked){document.getElementById('details').style.display='none';}">
    <label for="advertisment">Advertisement</label>
    <input id="individual" name="field3" type="radio" value="individual" class="validate[required] hearabout" onClick="if(this.checked){document.getElementById('details').style.display='block';}">
    <label for="individual">Individual</label>
    <input id="friend" name="field3" type="radio" value="friend" class="validate[required] hearabout" onClick="if(this.checked){document.getElementById('details').style.display='block';}">
    <label for="friend">Friend</label>
    <input id="agency" name="field3" type="radio" value="agency" class="validate[required] hearabout" onClick="if(this.checked){document.getElementById('details').style.display='none';}">
    <label for="agency">Employment Agency</label>
    <input id="other" name="field3" type="radio" value="other" class="validate[required] hearabout" onClick="if(this.checked){document.getElementById('details').style.display='block';}">            
	<label class="other" >Other</label>
	</td><td>		
    <div id="details">
	<br>
    <label for="field4" class="required">Details:</label>
        <input type="text" name="field4" id="field4" class="validate[condRequired[other]]">
	</div>
	</td></tr>
	</table>
	</div>
<div class = "pinfo">
	<table class="white_border">
	<tr><td>
<label for="field5" class="input required">First Name:</label>
<input type="text" name="field5" id="field5" class="validate[required]" maxlength="55">
	</td><td colspan = "2">
<label for="field6" class="input required">Last Name:</label>
<input type="text" name="field6" id="field6" class="validate[required]" maxlength="55">
	</td><td>
<label for="field7">Initial:</label>
<input type="text" name="field7" id="field7" maxlength="1" size="1">
	</td></tr>
	<tr><td>
<label for="field8" class="input required">Street Address:</label>
<input type="text" name="field8" id="field8" class="validate[required]" maxlength="55">
	</td><td colspan = "2"> 
<label for="field9" class="input required">City:</label>
<input type="text" name="field9" id="field9" class="validate[required]" maxlength="55">
	</td><td> 
<label for="field10" class="input required">State:</label>
<select name="field10" id="field10" class="validate[required]">
     <option value="">-Select-</option>
     <option value="AL">Alabama</option>
     <option value="AK">Alaska</option>
     <option value="AZ">Arizona</option>
     <option value="AR">Arkansas</option>
     <option value="CA">California</option>
     <option value="CO">Colorado</option>
     <option value="CT">Connecticut</option>
     <option value="DE">Delaware</option>
     <option value="DC">Dist of Columbia</option>
     <option value="FL">Florida</option>
     <option value="GA">Georgia</option>
     <option value="HI">Hawaii</option>
     <option value="ID">Idaho</option>
     <option value="IL">Illinois</option>
     <option value="IN">Indiana</option>
     <option value="IA">Iowa</option>
     <option value="KS">Kansas</option>
     <option value="KY">Kentucky</option>
     <option value="LA">Louisiana</option>
     <option value="ME">Maine</option>
     <option value="MD">Maryland</option>
     <option value="MA">Massachusetts</option>
     <option value="MI">Michigan</option>
     <option value="MN">Minnesota</option>
     <option value="MS">Mississippi</option>
     <option value="MO">Missouri</option>
     <option value="MT">Montana</option>
     <option value="NE">Nebraska</option>
     <option value="NV">Nevada</option>
     <option value="NH">New Hampshire</option>
     <option value="NJ">New Jersey</option>
     <option value="NM">New Mexico</option>
     <option value="NY">New York</option>
     <option value="NC">North Carolina</option>
     <option value="ND">North Dakota</option>
     <option value="OH">Ohio</option>
     <option value="OK">Oklahoma</option>
     <option value="OR">Oregon</option>
     <option value="PA">Pennsylvania</option>
     <option value="RI">Rhode Island</option>
     <option value="SC">South Carolina</option>
     <option value="SD">South Dakota</option>
     <option value="TN">Tennessee</option>
     <option value="TX">Texas</option>
     <option value="UT">Utah</option>
     <option value="VT">Vermont</option>
     <option value="VA">Virginia</option>
     <option value="WA" selected="selected">Washington</option>
     <option value="WV">West Virginia</option>
     <option value="WI">Wisconsin</option>
     <option value="WY">Wyoming</option>
	</select>
	</td></tr>
	<tr><td colspan = "2">
	<label for="field11" class="input required">Zip:</label>
	<input type="text" name="field11" id="field11" class="validate[required]" size="10">	
	</td><td colspan = "2">	
	<label for="field12" class="required">Email:</label>
	<input type="email" name="field12" id="field12" class="validate[required]" maxlength="90">
	</td></tr>
	<tr><td colspan = "2">
	<label for="field13" class="required">Phone:</label>
	<input type="text" name="field13" id="field13" class="validate[required]">
	</td><td colspan = "2">
	<label for="field14">Alternate Phone:</label>
	<input type="text" name="field14" id="field14" maxlength="25">
	</td></tr>
	</table></div>
		<!--Big, long list of questions-->    
<table class="white_border"><tr><td colspan="2">
	<label for="field15" class="input required">Best time to contact you at home</label>
	<input type="text" name="field15" id="field15" size="10" class="validate[required]">
</td></tr><tr><td colspan="2">
<label class="superLabel required">If you are under 18 years of age, can you provide proof of your eligibility to work?</label>
    <input type="radio" id="noeligibility" name="field16" class="validate[required]" value="No">
    <label for "noeligibility">No</label>
	<input type="radio" id="yeseligibility" name="field16" class="validate[required]" value="Yes">
	<label for "yeseligibility">Yes</label>	                 
</td></tr><tr><td>
<label class="superLabel required">Have you applied with us before?</label>
    <input type="radio" id="noapplied" name="field17" class="validate[required] applied" value="No" onClick="if(this.checked){document.getElementById('appliedBeforeDate').style.display='none';}">
    <label for "noapplied">No</label>                    
	<input type="radio" id="yesapplied" name="field17" class="validate[required] applied" value="Yes"  onClick="if(this.checked){document.getElementById('appliedBeforeDate').style.display='block';}">
	<label for "yesapplied">Yes</label>   	
</td><td>
	<div id="appliedBeforeDate" style="display:none;">
	<label for "field18" class="input required">Date of last application</label>  
	<input type ="text" name="field18" id="field18" value="" size="10" class="validate[condRequired[yesapplied]]">
	</div>
</td></tr><tr><td>
<label class="superLabel required">Have you been employed with us before?</label>
    <input type="radio" id="noemployedb4" name="field19" class="validate[required] employedbefore" value="No" onClick="if(this.checked){document.getElementById('employedBeforeDate').style.display='none';}">
    <label for "noemployedb4">No</label>                    
	<input type="radio" id="yesemployedb4" name="field19" class="validate[required] employedbefore" value="Yes" onClick="if(this.checked){document.getElementById('employedBeforeDate').style.display='block';}else{document.getElementById('employedBeforeDate').style.display='none';}">
	<label for "yesemployedb4">Yes</label>   	
</td><td>
	<div id="employedBeforeDate" style="display:none;">
<label class="superLabel required">Dates of employment: </label><br>
	<label for="field20">Start Date : </label>
	<input type="text" id="field20" name="field20" size="10" class="validate[condRequired[yesemployedb4]]" value="">
	<label for="field21">End Date : </label>
	<input type="text" id="field21" name="field21" size="10" class="validate[condRequired[yesemployedb4]]" value="" >
	</div>
</td></tr><tr><td>
<label class="superLabel required">Are you currently employed?</label>
    <input type="radio" id="currentlyEmployedno" name="field22" value="No" class="validate[required] employed"  onClick="if(this.checked){document.getElementById('currentlyEmployed_contact').style.display='none';}">
    <label for "currentlyEmployedno">No</label>
	<input type="radio" id="currentlyEmployedyes" name="field22" value="Yes" class="validate[required] employed"  onClick="if(this.checked){document.getElementById('currentlyEmployed_contact').style.display='block';}else{document.getElementById('currentlyEmployed_contact').style.display='none';}">
	<label for "currentlyEmployedyes">Yes</label>             
</td><td>
	<div id="currentlyEmployed_contact" style="display:none;">
	<label for="present_employer" class="input required">May we contact your present employer?</label>
	<input type="radio" id="presentEmployerno" name="field23" value="No"  class="validate[condRequired[currentlyEmployedyes]]">
    <label for "presentEmployerno">No</label>
    <input type="radio" id="presentEmployeryes" name="field23" value="Yes"  class="validate[condRequired[currentlyEmployedyes]]">
    <label for "presentEmployeryes">Yes</label>             
	</div>
</td></tr><tr><td colspan = "2">
	<p class="announcement">Federal Law requires proof of identity and employment authorization for all new employees.</p>
	<label class="superLabel required">Have you ever been convicted of a felony or misdemeaner?</label>
    <input type="radio" id="convictedno" name="field24" value="No" class="validate[required]">
	<label for "convictedno">No</label>                      
    <input type="radio" id="convictedyes" name="field24" value="Yes" class="validate[required]">
	<label for "convictedyes">Yes</label> 
	<br><br> 
	<p class="announcement">A "yes" response does not automatically disqualify you for employment.</p>
<label class="superLabel required">Are you available to work?</label><br>
	<input type="checkbox" name="field25" id="full_time" value="full_time" class="validate[minCheckbox[1]] available">
	<label for "full_time">Full Time</label><br>	
</td></tr><tr><td>
	<input type="checkbox" name="field25" id="part_time" value="part_time" class="validate[minCheckbox[1]] available" onClick="if(this.checked){document.getElementById('timetowork').style.display='block';}else{document.getElementById('timetowork').style.display='none';}">
	<label for "part_time">Part Time</label>
</td></tr><tr><td>
		<div id="timetowork" style="display:block;" class = "indented">
			<input id="mornings" name="field27" type="radio" value="Mornings" class="validate[condRequired[part_time]]">
			<label for "mornings">Mornings</label><br/ >
			<input id="afternoons" name="field27" type="radio" value="Afternoons" class="validate[condRequired[part_time]]">     
			<label for "afternoons">Afternoons</label><br/ >              
			<input id="evenings" name="field27" type="radio" value="Evenings" class="validate[condRequired[part_time]]">
			<label for "evenings">Evenings</label><br/ >
		</div>
</td></tr><tr><td colspan = "2">
    <div style="display:block;">
	<input type="checkbox" name="field25" id="temporary" value="temporary" class="validate[minCheckbox[1]] available" onClick="if(this.checked){document.getElementById('tempavaildates').style.display='block';}else{document.getElementById('tempavaildates').style.display='none';}">
	<label for "temporary">Temporary</label>
	</div>
</td></tr><tr><td colspan = "2">
		<div id="tempavaildates" style="display:block;" class = "indented">
			<superLabel>Please indicate dates available: </label><br>
			<label for="field29" >Available From:</label>
			<input type="text" id="field29" name="field29" value="" size="10" class="validate[condRequired[field25]]">
			<label for="field30" >Available To:</label>
			<input type="text" id="field30" name="field30" value="" size="10" class="validate[condRequired[field25]]">
		</div>
        <br>
	<label class="superLabel required">Are you currently on "lay-off" status and subject to recall?</label>
			<input id="norecall" name="field31" type="radio" value="Not subject to recall" class="validate[required]">
            <label for "norecall">No</label>
            <input id="recall" name="field31" type="radio" value="Is subject to recall" class="validate[required]">
            <label for "recall">Yes</label>            
	<br><br>
	<label class="superLabel required">Can you travel if the job requires it?</label>       
            <input id="notravel" name="field32" type="radio" value="Cannot travel" class="validate[required]">
            <label for "notravel">No</label>            
            <input id="travel" name="field32" type="radio" value="Can travel" title="Can you travel if the job requires it?" class="validate[required]">	
	    <label for "travel">Yes</label>
</td></tr></table>
        <h2>EDUCATION</h2>
<table style="margin-left: auto; margin-right: auto; cell-padding:0;border-spacing: 0;"><tr><td style="border: #369 solid 1px;">
<table class="blue_border">
<tr><td class="colorful">School</td>
<td class="colorful">Name and Address of School</td>
<td class="colorful">Course<br >of Study</td>
<td class="colorful">No of Years<br >Completed</td>
<td class="colorful">Diploma/<br >Degree</td>
</tr>
<tr><td class="colorful">High School</td>
<td><input id="field33" name="field33" type="text" size="45" ></td>
<td><input id="field34" name="field34" type="text" size="25" maxsize="2" class="centered" ></td>
<td style="text-align: center;"><input id="field35" name="field35" type="text" size="2" maxsize="2" ></td>	
<td style="border-right-color: #036;"><input id="field36" name="field36" type="text" size="15" ></td>
</tr>
<tr><td class="colorful">Undergraduate College</td>
<td><input id="field37" name="field37" type="text" size="45" ></td>
<td><input id="field38" name="field38" type="text" size="25" ></td>
<td style="text-align: center;"><input id="field39" name="field39" type="text" size="2" maxsize="2" ></td>
<td style="border-right-color: #036;"><input id="field40" name="field40" type="text" size="15" ></td>
</tr>
<tr><td class="colorful">Graduate/Professional</td>
<td><input id="field41" name="field41" type="text" size="45" ></td>
<td><input id="field42" name="field42" type="text" size="25" ></td>
<td style="text-align: center;"><input id="field43" name="field43" type="text" size="2" maxsize="2" ></td>	
<td style="border-right-color: #036;"><input id="field44" name="field44" type="text" size="15" ></td>
</tr>
<tr style="border-bottom-color: #036;"><td class="colorful">Other</td>
<td style="border-bottom-color: #036;"><input id="field46" name="field46" type="text" size="45" ></td>
<td style="border-bottom-color: #036;"><input id="field47" name="field47" type="text" size="25" ></td>
<td style="border-bottom-color: #036; text-align: center;"><input id="field48" name="field48" type="text" size="2" maxsize="2" ></td>	
<td style="border-bottom-color: #036; border-right-color: #036;"><input id="field49" name="field49" type="text" size="15" ></td>
</tr></table>
</td></tr></table>
    <input name="submit" type="submit" value="Next" class="nextbutton">
	<br><br>
	<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();">
	<br><br><br><br>
</form>
<script type="text/JavaScript">
var d = new Date();
document.getElementById("dateDisplay").innerHTML = d.toDateString();
</script>
</div>
	<!--Cookies-->
  <script type="text/javascript" src="js/jquery.cookie.js"></script>	
  <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>
<script type="text/javascript">
  function getCookie(name){var re=new RegExp(name+"=([^;]+)");
  var value=re.exec(document.cookie);return(value!=null)?unescape(value[1]):null;
  }
 var today=new Date();var expiry=new Date(today.getTime()+30*24*3600*1000);var expired=new Date(today.getTime()-24*3600*1000);
 function setCookie(name,value){document.cookie=name+"="+escape(value)+"; path=/; expires="+expiry.toGMTString();
 }
 function deleteCookie(name){document.cookie=name+"=null; path=/; expires="+expired.toGMTString();}
 function storeValues(form)
 {setCookie("field1",form.field1.value);
 setCookie("field2",form.field2.value);
 setCookie("field3",form.field3.value);
 setCookie("field4",form.field4.value);
 setCookie("field5",form.field5.value);
 setCookie("field6",form.field6.value);
 setCookie("field7",form.field7.value);
 setCookie("field8",form.field8.value);
 setCookie("field9",form.field9.value);
 setCookie("field10",form.field10.value);
 setCookie("field11",form.field11.value);
 setCookie("field12",form.field12.value);
 setCookie("field13",form.field13.value);
 setCookie("field14",form.field14.value);
 setCookie("field15",form.field15.value);
 setCookie("field16",form.field16.value);
 setCookie("field17",form.field17.value);
 setCookie("field18",form.field18.value);
 setCookie("field19",form.field19.value);
 setCookie("field20",form.field20.value);
 setCookie("field21",form.field21.value);
 setCookie("field22",form.field22.value);
 setCookie("field23",form.field23.value);
 setCookie("field24",form.field24.value);
 setCookie("field25",form.field25.value);
 setCookie("field26",form.field26.value);
 setCookie("field27",form.field27.value);
 setCookie("field28",form.field28.value);
 setCookie("field29",form.field29.value);
 setCookie("field30",form.field30.value);
 setCookie("field31",form.field31.value);
 setCookie("field32",form.field32.value);
 setCookie("field33",form.field33.value);
 setCookie("field34",form.field34.value);
 setCookie("field35",form.field35.value);
 setCookie("field36",form.field36.value);
 setCookie("field37",form.field37.value);
 setCookie("field38",form.field38.value);
 setCookie("field39",form.field39.value);
 setCookie("field40",form.field40.value);
 setCookie("field41",form.field41.value);
 setCookie("field42",form.field42.value);
 setCookie("field43",form.field43.value);
 setCookie("field44",form.field44.value);
 setCookie("field45",form.field45.value);
 setCookie("field46",form.field46.value);
 setCookie("field47",form.field47.value);
 setCookie("field48",form.field48.value);
 setCookie("field49",form.field49.value);
 return true;
 }
 </script>
 <script type="text/JavaScript">
 if(field1=getCookie("field1"))document.mainForm.field1.value=field1;
 if(field2=getCookie("field2"))document.mainForm.field2.value=field2;
 if(field3=getCookie("field3"))document.mainForm.field3.value=field3;
 if(field4=getCookie("field4"))document.mainForm.field4.value=field4;
 if(field5=getCookie("field5"))document.mainForm.field5.value=field5;
 if(field6=getCookie("field6"))document.mainForm.field6.value=field6;
 if(field7=getCookie("field7"))document.mainForm.field7.value=field7;
 if(field8=getCookie("field8"))document.mainForm.field8.value=field8;
 if(field9=getCookie("field9"))document.mainForm.field9.value=field9;
 if(field10=getCookie("field10"))document.mainForm.field10.value=field10;
 if(field11=getCookie("field11"))document.mainForm.field11.value=field11;
 if(field12=getCookie("field12"))document.mainForm.field12.value=field12;
 if(field13=getCookie("field13"))document.mainForm.field13.value=field13;
 if(field14=getCookie("field14"))document.mainForm.field14.value=field14;
 if(field15=getCookie("field15"))document.mainForm.field15.value=field15;
 if(field16=getCookie("field16"))document.mainForm.field16.value=field16;
 if(field17=getCookie("field17"))document.mainForm.field17.value=field17;
 if(field18=getCookie("field18"))document.mainForm.field18.value=field18;
 if(field19=getCookie("field19"))document.mainForm.field19.value=field19;
 if(field20=getCookie("field20"))document.mainForm.field20.value=field20;
 if(field21=getCookie("field21"))document.mainForm.field21.value=field21;
 if(field22=getCookie("field22"))document.mainForm.field22.value=field22;
 if(field23=getCookie("field23"))document.mainForm.field23.value=field23;
 if(field24=getCookie("field24"))document.mainForm.field24.value=field24;
 if(field25=getCookie("field25"))document.mainForm.field25.value=field25;
 if(field26=getCookie("field26"))document.mainForm.field26.value=field26;
 if(field27=getCookie("field27"))document.mainForm.field27.value=field27;
 if(field28=getCookie("field28"))document.mainForm.field28.value=field28;
 if(field29=getCookie("field29"))document.mainForm.field29.value=field29;
 if(field30=getCookie("field30"))document.mainForm.field30.value=field30;
 if(field31=getCookie("field31"))document.mainForm.field31.value=field31;
 if(field32=getCookie("field32"))document.mainForm.field32.value=field32;
 if(field33=getCookie("field33"))document.mainForm.field33.value=field33;
 if(field34=getCookie("field34"))document.mainForm.field34.value=field34;
 if(field35=getCookie("field35"))document.mainForm.field35.value=field35;
 if(field36=getCookie("field36"))document.mainForm.field36.value=field36;
 if(field37=getCookie("field37"))document.mainForm.field37.value=field37;
 if(field38=getCookie("field38"))document.mainForm.field38.value=field38;
 if(field39=getCookie("field39"))document.mainForm.field39.value=field39;
 if(field40=getCookie("field40"))document.mainForm.field40.value=field40;
 if(field41=getCookie("field41"))document.mainForm.field41.value=field41;
 if(field42=getCookie("field42"))document.mainForm.field42.value=field42;
 if(field43=getCookie("field43"))document.mainForm.field43.value=field43;
 if(field44=getCookie("field44"))document.mainForm.field44.value=field44;
 if(field45=getCookie("field45"))document.mainForm.field45.value=field45;
 if(field46=getCookie("field46"))document.mainForm.field46.value=field46;
 if(field47=getCookie("field47"))document.mainForm.field47.value=field47;
 if(field48=getCookie("field48"))document.mainForm.field48.value=field48;
 if(field49=getCookie("field49"))document.mainForm.field49.value=field49;
 
 function clearCookies()
 {deleteCookie("field1");
 deleteCookie("field2");
 deleteCookie("field3");
 deleteCookie("field4");
 deleteCookie("field5");
 deleteCookie("field6");
 deleteCookie("field7");
 deleteCookie("field8");
 deleteCookie("field9");
 deleteCookie("field10");
 deleteCookie("field11");
 deleteCookie("field12");
 deleteCookie("field13");
 deleteCookie("field14");
 deleteCookie("field15");
 deleteCookie("field16");
 deleteCookie("field17");
 deleteCookie("field18");
 deleteCookie("field19");
 deleteCookie("field20");
 deleteCookie("field21");
 deleteCookie("field22");
 deleteCookie("field23");
 deleteCookie("field24");
 deleteCookie("field25");
 deleteCookie("field26");
 deleteCookie("field27");
 deleteCookie("field28");
 deleteCookie("field29");
 deleteCookie("field30");
 deleteCookie("field31");
 deleteCookie("field32");
 deleteCookie("field33");
 deleteCookie("field34");
 deleteCookie("field35");
 deleteCookie("field36");
 deleteCookie("field37");
 deleteCookie("field38");
 deleteCookie("field39");
 deleteCookie("field40");
 deleteCookie("field41");
 deleteCookie("field42");
 deleteCookie("field43");
 deleteCookie("field44");
 deleteCookie("field45");
 deleteCookie("field46");
 deleteCookie("field47");
 deleteCookie("field48");
 deleteCookie("field49");
 alert('Your cookies have been deleted!');}
 </script>
 <script type="text/JavaScript">
      $(":checkbox").on("change", function(){
        var checkboxValues = {};
        $(":checkbox").each(function(){
          checkboxValues[this.id] = this.checked;
        });
        $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
      });

      function repopulateCheckboxes(){
        var checkboxValues = $.cookie('checkboxValues');
        if(checkboxValues){
          Object.keys(checkboxValues).forEach(function(element) {
            var checked = checkboxValues[element];
            $("#" + element).prop('checked', checked);
          });
        }
      }
      $.cookie.json = true;
      repopulateCheckboxes();  
      $(":radio").on("change", function(){
        var radioValues = {};
        $(":radio").each(function(){
          radioValues[this.id] = this.checked;
        });
        $.cookie('radioValues', radioValues, { expires: 7, path: '/' })
      });

      function repopulateRadioes(){
        var radioValues = $.cookie('radioValues');
        if(radioValues){
          Object.keys(radioValues).forEach(function(element) {
            var checked = radioValues[element];
            $("#" + element).prop('checked', checked);
          });
        }
      }

      $.cookie.json = true;
      repopulateRadioes();
    </script>
<p><a class="totop" href="#content" onclick="document.getElementById('content').scrollIntoView(true); return false;">Back to top</a></p><br/ ><br/ >
</body>
</html>
