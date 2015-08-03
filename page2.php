<?php
session_start();
$_SESSION['field1'] = $_POST['field1'];
$_SESSION['field2'] = $_POST['field2'];
$_SESSION['field3'] = $_POST['field3']; 
$_SESSION['field4'] = $_POST['field4'];
$_SESSION['field5'] = $_POST['field5'];
$_SESSION['field6'] = $_POST['field6']; 
$_SESSION['field7'] = $_POST['field7']; 
$_SESSION['field8'] = $_POST['field8'];
$_SESSION['field9'] = $_POST['field9'];
$_SESSION['field10'] = $_POST['field10']; 
$_SESSION['field11'] = $_POST['field11']; 
$_SESSION['field12'] = $_POST['field12'];
$_SESSION['field13'] = $_POST['field13'];
$_SESSION['field14'] = $_POST['field14']; 
$_SESSION['field15'] = $_POST['field15']; 
$_SESSION['field16'] = $_POST['field16'];
$_SESSION['field17'] = $_POST['field17'];
$_SESSION['field18'] = $_POST['field18']; 
$_SESSION['field19'] = $_POST['field19']; 
$_SESSION['field20'] = $_POST['field20'];
$_SESSION['field21'] = $_POST['field21'];
$_SESSION['field22'] = $_POST['field22']; 
$_SESSION['field23'] = $_POST['field23']; 
$_SESSION['field24'] = $_POST['field24'];
$_SESSION['field25'] = $_POST['field25'];
$_SESSION['field26'] = $_POST['field26']; 
$_SESSION['field27'] = $_POST['field27']; 
$_SESSION['field28'] = $_POST['field28'];
$_SESSION['field29'] = $_POST['field29'];
$_SESSION['field30'] = $_POST['field30'];
$_SESSION['field31'] = $_POST['field31'];
$_SESSION['field32'] = $_POST['field32'];
$_SESSION['field33'] = $_POST['field33']; 
$_SESSION['field34'] = $_POST['field34'];
$_SESSION['field35'] = $_POST['field35'];
$_SESSION['field36'] = $_POST['field36'];
$_SESSION['field37'] = $_POST['field37']; 
$_SESSION['field38'] = $_POST['field38'];
$_SESSION['field39'] = $_POST['field39']; 
$_SESSION['field40'] = $_POST['field40'];
$_SESSION['field41'] = $_POST['field41'];
$_SESSION['field42'] = $_POST['field42'];
$_SESSION['field43'] = $_POST['field43']; 
$_SESSION['field44'] = $_POST['field44'];
$_SESSION['field45'] = $_POST['field45'];
$_SESSION['field46'] = $_POST['field46'];
$_SESSION['field47'] = $_POST['field47'];
$_SESSION['field48'] = $_POST['field48'];
$_SESSION['field49'] = $_POST['field49'];
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
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
	jQuery("#secondForm").validationEngine();
	});
	</script>
	<script type ="text/JavaScript">
	$(document).ready(function() {
    $('#field55').mask('99/99/9999');
    $('#field56').mask('99/99/9999');
    $('#field70').mask('99/99/9999');
    $('#field71').mask('99/99/9999');
    $('#field84').mask('99/99/9999');
    $('#field85').mask('99/99/9999');
	$("#field63").mask("(999) 999-9999? x9999");
	$("#field77").mask("(999) 999-9999? x9999");
	$("#field91").mask("(999) 999-9999? x9999");
	$("#field94").mask("(999) 999-9999? x9999");
	$("#field98").mask("(999) 999-9999? x9999");
	$("#field102").mask("(999) 999-9999? x9999");
	$("#field54").mask("99999? -9999");
	$("#field69").mask("99999? -9999");
	$("#field83").mask("99999? -9999");
	});	
	</script>	

</head>
<body>
	<div id="main">
<div id="content"></div>
<table><tr><td id = "topNavBar">
<ul class="topNav">
<li class="topNav"><a href="page1.php">Testing Form</a></li>
<li class="uberlink"><a href="http://lesliestesting.com">Public Form</a></li>
</ul>
</td></tr></table>
<h1>Application for Employment</h1>
<a href="index.php">Edit First Page</a> 
<form name="secondForm" id = "secondForm"  action="scripts/application.php" method="post">
<h2>EMPLOYMENT EXPERIENCE</h2>	
<p style="float: right; display: block"><span class = "warning">*</span>Required Field</p>
<p>Start with your present or last job. Include any job-related skills and qualifications. Applicants should exclude information that discloses affiliation of a protected class.</p>
 <div class = "experience">
<table class="white_border">
<tr><td style="text-align:right;"><label for="field50">Employer:</label>
</td><td><input id="field50" name="field50" type="text" value="">
</td><td rowspan="3" colspan="4" style="text-align:left; vertical-align:middle;">
<label for="field60">Work Performed:</label><br>
<textarea id="field60" name="field60" cols="40" rows="3" class="validate[condRequired[field50]]"></textarea>
</td></tr>
<tr><td style="text-align:right;"><label for="field51">Street Address:</label>
</td><td>
<input id="field51" name="field51" type="text" value="" class="validate[condRequired[field50]]">
</td></tr>
<tr><td style="text-align:right;"><label for="field52">City:</label>
</td><td><input id="field52" name="field52" type="text" value="" class="validate[condRequired[field50]]">
</td></tr>
<tr><td style="text-align:right;"><label for="field53">State:</label>
</td><td>
<select id="field53" name="field53">
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
<tr><td style="text-align:right;"><label for="field54">Zip:</label>
</td><td><input id="field54" name="field54" type="text" value="" size="10" class="validate[condRequired[field50]]">
</td><td><label class="superLabel">Dates Employed:</label>
</td><td colspan="2">
<label for="field55" >Start Date: </label>
<input type="text" id="field55" name="field55" value="" size=10 class="validate[condRequired[field50]]">
<label for="field56">&nbsp;&nbsp;&nbsp;&nbsp;End Date: </label>
<input type="text" id="field56" name="field56" value="" size=10 class="validate[condRequired[field50]]">
</td></tr>
<tr><td style="text-align:right;"><label for="field57">Reason for leaving:</label>
</td><td><input id="field57" name="field57" type="text" value="" class="validate[condRequired[field50]]">
</td><td><label class="superLabel">Hourly Rates:</label>
</td><td colspan="2">
<label for="field58" >Beginning: </label><input id="field58" name="field58" type="text" value="" size="6" class="validate[condRequired[field50]]">  
 <label for="field59" >&nbsp;&nbsp;&nbsp;&nbsp;Ending: </label><input id="field59" name="field59" type="text" value="" size="6" class="validate[condRequired[field50]]">
<tr><td style="text-align:right;"><label for=""field61">Supervisor:</label>
    </td><td><input id="field61" name="field61" type="text" value="" class="validate[condRequired[field50]]">
	</td><td><label class="superLabel">May we contact?</label>            
    </td><td><label for "contact1no">No</label>
	<input id="contact1no" name="field62" type="radio" value="No" onClick="if(this.checked){document.getElementById('superNum1').style.display='none';}" >
	<label for "contact1yes">Yes</label>
	<input id="contact1yes" name="field62" type="radio" value="Yes" onClick="if(this.checked){document.getElementById('superNum1').style.display='block';}else{document.getElementById('superNum1').style.display='none';}">
</td><td>	
	<div id="superNum1">
	<label for="field63">Supervisor Phone:</label>
	<input type="text" name="field63" id="field63" size="15" class="validate[condRequired[contact1yes]]">
	</div>
</td></tr></table>
</div>
 <div class = "experience">
<table class="white_border">
<tr><td style="text-align:right;"><label for="field64">Employer:</label>
    </td><td><input id="field64" name="field64" type="text" value="">
</td><td colspan="3">
	<label for="field66">Work Performed:</label>
</td></tr>
<tr><td style="text-align:right"><label for="field65">Street Address:</label>
        </td><td><input id="field65" name="field65" type="text" value="" class="validate[condRequired[field64]]">
</td>
<td rowspan="3" colspan="3" style="text-align:left; vertical-align:top;"><textarea cols="40" rows="3" id="field66" name="field66" class="validate[condRequired[employer2]]"></textarea>
</td></tr>
<tr><td style="text-align:right;"><label for="field67">City:</label>
        </td><td><input id="field67" name="field67" type="text" value="" class="validate[condRequired[field64]]">
</td></tr>
<tr><td style="text-align:right;"><label for="field68">State:</label>
        </td><td>
<select id="field68" name="field68">
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
<tr><td style="text-align:right;"><label for="field69">Zip:</label>
        </td><td><input id="field69" name="field69" type="text" value="" size="10" class="validate[condRequired[field64]]">
</td><td><label class="superLabel">Dates Employed:</label>
        </td><td colspan="2">
		<label for="field70" >Start Date: </label>
			<input type="text" id="field70" name="field70" value="" size=10 class="validate[condRequired[field64]]">
	    <label for="field71">&nbsp;&nbsp;&nbsp;&nbsp;End Date: </label>
			<input type="text" id="field71" name="field71" value="" size=10 class="validate[condRequired[field64]]">
</td></tr>
<tr><td style="text-align:right;"><label for="field72">Reason for leaving:</label>
    </td><td><input id="field72" name="field72" type="text" value="" class="validate[condRequired[field64]]">
</td><td><label class="superLabel">Hourly Rates:</label>
    </td><td colspan="2">
	<label for="field73" >Beginning: </label><input id="field73" name="field73" type="text" value="" size="6" class="validate[condRequired[field64]]">  
	 <label for="field74" >&nbsp;&nbsp;&nbsp;&nbsp;Ending: </label><input id="field74" name="field74" type="text" value="" size="6" class="validate[condRequired[field64]]">
<tr><td style="text-align:right;"><label for="field75">Supervisor:</label>
    </td><td><input id="field75" name="field75" type="text" value="" class="validate[condRequired[field64]]">
	</td><td><label class="superLabel">May we contact?:</label>            
</td><td><label for "contact2no">No</label>
	<input id="contact2no" name="field76" type="radio" value="No" onClick="if(this.checked){document.getElementById('superNum2').style.display='none';}" >
	<label for "contact2yes">Yes</label>
	<input id="contact2yes" name="field76" type="radio" value="Yes" onClick="if(this.checked){document.getElementById('superNum2').style.display='block';}else{document.getElementById('superNum2').style.display='none';}">
</td><td>	
	<div id="superNum2">
	<label for="field77">Supervisor Phone:</label>
	<input type="text" name="field77" id="field77" size="15" class="validate[condRequired[contact2yes]]">
	</div>
</td></tr></table>
</div>
<div class = "experience">
<table class="white_border">
<tr><td style="text-align:right;"><label for="field78">Employer:</label>
    </td><td><input id="field78" name="field78" type="text" value="">
</td><td colspan="3">
	<label for="work3">Work Performed:</label>
</td></tr>
<tr><td style="text-align:right;"><label for="field79">Street Address:</label>
        </td><td><input id="field79" name="field79" class="element" type="text" value="" class="validate[condRequired[field78]]">
</td>
<td rowspan="3" colspan="3" style="text-align:left; vertical-align:top;"><textarea cols="40" rows="3" id="work3" name="field80"  class="validate[condRequired[field78]]"></textarea>
</td></tr>
<tr><td style="text-align:right;"><label for="field81">City:</label>
        </td><td><input id="field81" name="field81"  class="validate[condRequired[field78]]" type="text" value="">
</td></tr>
<tr><td style="text-align:right;"><label for="field82">State:</label>
        </td><td>
<select id="field82" name="field82" class="validate[condRequired[field78]]">
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
<tr><td style="text-align:right;"><label for="field83">Zip:</label>
</td><td><input id="field83" name="field83"  class="validate[condRequired[field78]]" type="text" value="" size="10">
</td><td><label class="superLabel">Dates Employed:</label>
</td><td colspan="2">
<label for="field84" >Start Date: </label>
<input type="text" id="field84" name="field84" value="" size=10 class="validate[condRequired[field78]]">
<label for="field85">&nbsp;&nbsp;&nbsp;&nbsp;End Date: </label>
<input type="text" id="field85" name="field85" value="" size=10 class="validate[condRequired[field84]]">
</td></tr>
<tr><td style="text-align:right;"><label for="field86">Reason for leaving:</label>
    </td><td><input id="field86" name="field86" class="validate[condRequired[field78]]" type="text" value="">
</td><td><label class="superLabel">Hourly Rates:</label>
    </td><td colspan="2">
	<label for="field87" >Beginning: </label><input id="field87" name="field87"  class="validate[condRequired[field78]]" type="text" value="" size="6">  
	 <label for="field88" >&nbsp;&nbsp;&nbsp;&nbsp;Ending: </label><input id="field88" name="field88"  class="validate[condRequired[field78]]" type="text" value="" size="6">
<tr><td style="text-align:right;"><label for="field89">Supervisor:</label>
    </td><td><input id="field89" name="field89" class="element" type="text" value="">
	</td><td><label class="superLabel">May we contact?:</label>            
    </td><td><label for "contact3no">No</label>
	<input id="contact3no" name="field90" type="radio" value="No" onClick="if(this.checked){document.getElementById('superNum3').style.display='none';}" >
	<label for "contact3yes">Yes</label>
	<input id="contact3yes" name="field90" type="radio" value="Yes" onClick="if(this.checked){document.getElementById('superNum3').style.display='block';}else{document.getElementById('superNum3').style.display='none';}">
</td><td>
	<div id="superNum3">
	<label for="field91">Supervisor Phone:</label>
	<input type="text" name="field91" id="field91" size="15" class="validate[condRequired[contact3yes]]" >
	</div>
</td></tr></table>
</div>
        <h2>ADDITIONAL INFORMATION</h2>
		<p>Summarize special job-related skills and qualifications acquired from employment.</p>
  <textarea rows="5" cols="120" id ="field92" name ="field92" class="experience"></textarea>
        <h2>PROFESSIONAL REFERENCES</h2>
		<p>Include Business/Professional Contacts. Do not include personal references (friends or family members).</p>
		<table style="margin-left: auto; margin-right: auto; cell-padding:0;border-spacing: 0;"><tr><td style="border: #369 solid 1px;">
		<table class="blue_border">
		<tr><td class="colorful"> </td><td class="colorful">Name</td><td class="colorful">Phone Number</td>
		<td class="colorful">Best Time to Call</td><td class="colorful">Occupation</td></tr>
		<tr><td class="colorful"><label class="input required">1.</label></td>
		<td><input type="text" id="field93" name="field93" value=" " class="validate[required]"></td>
		<td><input type="tel" name="field94" id="field94" class="validate[required]"></td>
		<td><input type="text" id="field95" name="field95" value=" " class="validate[required]"></td>
		<td><input type="text" id="field96" name="field96" value=" " class="validate[required]"></td>
		<tr><td class="colorful"><label class="input required">2.</label></td>
		<td><input type="text" id="field97" name="field97" value=" " class="validate[required]"></td>
		<td><input type="tel" name="field98" id="field98" class="validate[required]"></td>
		<td><input type="text" id="field99" name="field99" value=" " class="validate[required]"></td>
		<td style="border-right-color: #036;">
		<input type="text" id="field100" name="field100" value=" " class="validate[required]"></td>
		<tr><td class="colorful"><label class="input required">3.</label></td>
		<td><input type="text" id="field101" name="field101" value=" " class="validate[required]"></td>
		<td><input type="tel" name="field102" id="field102" class="validate[required]"></td>
		<td style="border-bottom-color: #036;">
		<input type="text" id="field103" name="field103" value=" " class="validate[required]"></td>
		<td style="border-bottom-color: #036; border-right-color: #036;">
		<input type="text" id="field104" name="field104" value=" " class="validate[required]"></td>		
		</tr></table>
		</td></tr></table>
 <h2>APPLICANT'S STATEMENT</h2>
	<input type="checkbox" name="field105" id="field105" class="validate[required]">&nbsp;&nbsp;<label class="input required">I accept </label><a href="termsofuse.html">Terms of Use</a>
	<br>
    <input name="submit" type="submit" id="submit" value="Submit" class="submitbutton">
	<br><br>
	<input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();">
	<br><br><br><br>
</form>
	</div><!--end wrap div-->
</body>
		<!--Cookies-->
  <script type="text/javascript" src="js/jquery.cookie.js"></script>	
  <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>
<script type="text/javascript">
  function getCookie(name){var re=new RegExp(name+"=([^;]+)");
  var value=re.exec(document.cookie);return(value!=null)?unescape(value[1]):null;
  }
 var today=new Date();var expiry=new Date(today.getTime()+30*24*3600*1000);var expired=new Date(today.getTime()24*3600*1000);
 function setCookie(name,value){document.cookie=name+"="+escape(value)+"; path=/; expires="+expiry.toGMTString();
 }
 function deleteCookie(name){document.cookie=name+"=null; path=/; expires="+expired.toGMTString();}
 function storeValues(form)
 {setCookie("field50",form.field50.value);
 setCookie("field51",form.field51.value);
 setCookie("field52",form.field52.value);
 setCookie("field53",form.field53.value);
 setCookie("field54",form.field54.value);
 setCookie("field55",form.field55.value);
 setCookie("field56",form.field56.value);
 setCookie("field57",form.field57.value);
 setCookie("field58",form.field58.value);
 setCookie("field59",form.field59.value);
 setCookie("field60",form.field60.value);
 setCookie("field61",form.field61.value);
 setCookie("field62",form.field62.value);
 setCookie("field63",form.field63.value);
 setCookie("field64",form.field64.value);
 setCookie("field65",form.field65.value);
 setCookie("field66",form.field66.value);
 setCookie("field67",form.field67.value);
 setCookie("field68",form.field68.value);
 setCookie("field69",form.field69.value);
 setCookie("field70",form.field70.value);
 setCookie("field71",form.field71.value);
 setCookie("field72",form.field72.value);
 setCookie("field73",form.field73.value);
 setCookie("field74",form.field74.value);
 setCookie("field75",form.field75.value);
 setCookie("field76",form.field76.value);
 setCookie("field77",form.field77.value);
 setCookie("field78",form.field78.value);
 setCookie("field79",form.field79.value);
 setCookie("field80",form.field80.value);
 setCookie("field81",form.field81.value);
 setCookie("field82",form.field82.value);
 setCookie("field83",form.field83.value);
 setCookie("field84",form.field84.value);
 setCookie("field85",form.field85.value);
 setCookie("field86",form.field86.value);
 setCookie("field87",form.field87.value);
 setCookie("field88",form.field88.value);
 setCookie("field89",form.field89.value);
 setCookie("field90",form.field90.value);
 setCookie("field91",form.field91.value);
 setCookie("field92",form.field92.value);
 setCookie("field93",form.field93.value);
 setCookie("field94",form.field94.value);
 setCookie("field95",form.field95.value);
 setCookie("field96",form.field96.value);
 setCookie("field97",form.field97.value);
 setCookie("field98",form.field98.value);
 setCookie("field99",form.field99.value);
 setCookie("field100",form.field100.value);
 setCookie("field101",form.field101.value);
 setCookie("field102",form.field102.value);
 setCookie("field103",form.field103.value);
 setCookie("field104",form.field104.value);
 setCookie("field105",form.field105.value);
 return true;
 }
 </script>
 <script type="text/JavaScript">
 if(field50=getCookie("field50"))document.secondForm.field50.value=field50;
 if(field51=getCookie("field51"))document.secondForm.field51.value=field51;
 if(field52=getCookie("field52"))document.secondForm.field52.value=field52;
 if(field53=getCookie("field53"))document.secondForm.field53.value=field53;
 if(field54=getCookie("field54"))document.secondForm.field54.value=field54;
 if(field55=getCookie("field55"))document.secondForm.field55.value=field55;
 if(field56=getCookie("field56"))document.secondForm.field56.value=field56;
 if(field57=getCookie("field57"))document.secondForm.field57.value=field57;
 if(field58=getCookie("field58"))document.secondForm.field58.value=field58;
 if(field59=getCookie("field59"))document.secondForm.field59.value=field59;
 if(field60=getCookie("field60"))document.secondForm.field60.value=field60;
 if(field61=getCookie("field61"))document.secondForm.field61.value=field61;
 if(field62=getCookie("field62"))document.secondForm.field62.value=field62;
 if(field63=getCookie("field63"))document.secondForm.field63.value=field63;
 if(field64=getCookie("field64"))document.secondForm.field64.value=field64;
 if(field65=getCookie("field65"))document.secondForm.field65.value=field65;
 if(field66=getCookie("field66"))document.secondForm.field66.value=field66;
 if(field67=getCookie("field67"))document.secondForm.field67.value=field67;
 if(field68=getCookie("field68"))document.secondForm.field68.value=field68;
 if(field69=getCookie("field69"))document.secondForm.field69.value=field69;
 if(field70=getCookie("field70"))document.secondForm.field70.value=field70;
 if(field71=getCookie("field71"))document.secondForm.field71.value=field71;
 if(field72=getCookie("field72"))document.secondForm.field72.value=field72;
 if(field73=getCookie("field73"))document.secondForm.field73.value=field73;
 if(field74=getCookie("field74"))document.secondForm.field74.value=field74;
 if(field75=getCookie("field75"))document.secondForm.field75.value=field75;
 if(field76=getCookie("field76"))document.secondForm.field76.value=field76;
 if(field77=getCookie("field77"))document.secondForm.field77.value=field77;
 if(field78=getCookie("field78"))document.secondForm.field78.value=field78;
 if(field79=getCookie("field79"))document.secondForm.field79.value=field79;
 if(field80=getCookie("field80"))document.secondForm.field80.value=field80;
 if(field81=getCookie("field81"))document.secondForm.field81.value=field81;
 if(field82=getCookie("field82"))document.secondForm.field82.value=field82;
 if(field83=getCookie("field83"))document.secondForm.field83.value=field83;
 if(field84=getCookie("field84"))document.secondForm.field84.value=field84;
 if(field85=getCookie("field85"))document.secondForm.field85.value=field85;
 if(field86=getCookie("field86"))document.secondForm.field86.value=field86;
 if(field87=getCookie("field87"))document.secondForm.field87.value=field87;
 if(field88=getCookie("field88"))document.secondForm.field88.value=field88;
 if(field89=getCookie("field89"))document.secondForm.field89.value=field89;
 if(field80=getCookie("field80"))document.secondForm.field80.value=field80;
 if(field81=getCookie("field81"))document.secondForm.field81.value=field81;
 if(field82=getCookie("field82"))document.secondForm.field82.value=field82;
 if(field83=getCookie("field83"))document.secondForm.field83.value=field83;
 if(field84=getCookie("field84"))document.secondForm.field84.value=field84;
 if(field85=getCookie("field85"))document.secondForm.field85.value=field85; 
 if(field86=getCookie("field86"))document.secondForm.field86.value=field86;
 if(field87=getCookie("field87"))document.secondForm.field87.value=field87;
 if(field88=getCookie("field88"))document.secondForm.field88.value=field88;
 if(field89=getCookie("field89"))document.secondForm.field89.value=field89;
 if(field90=getCookie("field90"))document.secondForm.field90.value=field90;
 if(field91=getCookie("field91"))document.secondForm.field91.value=field91;
 if(field92=getCookie("field92"))document.secondForm.field92.value=field92;
 if(field93=getCookie("field93"))document.secondForm.field93.value=field93;
 if(field94=getCookie("field94"))document.secondForm.field94.value=field94;
 if(field95=getCookie("field95"))document.secondForm.field95.value=field95; 
 if(field96=getCookie("field96"))document.secondForm.field96.value=field96;
 if(field97=getCookie("field97"))document.secondForm.field97.value=field97;
 if(field98=getCookie("field98"))document.secondForm.field98.value=field98;
 if(field99=getCookie("field99"))document.secondForm.field99.value=field99;
 if(field100=getCookie("field100"))document.secondForm.field100.value=field100;  
 if(field101=getCookie("field101"))document.secondForm.field101.value=field101; 
 if(field102=getCookie("field102"))document.secondForm.field102.value=field102;  
 if(field103=getCookie("field103"))document.secondForm.field103.value=field103; 
 if(field104=getCookie("field104"))document.secondForm.field104.value=field104; 
 if(field105=getCookie("field105"))document.secondForm.field105.value=field105;
 function clearCookies()
 {
 deleteCookie("field50");
 deleteCookie("field51");
 deleteCookie("field52");
 deleteCookie("field53");
 deleteCookie("field54");
 deleteCookie("field55");
 deleteCookie("field56");
 deleteCookie("field57");
 deleteCookie("field58");
 deleteCookie("field59");
 deleteCookie("field60");
 deleteCookie("field61");
 deleteCookie("field62");
 deleteCookie("field63");
 deleteCookie("field64");
 deleteCookie("field65");
 deleteCookie("field66");
 deleteCookie("field66");
 deleteCookie("field67");
 deleteCookie("field68");
 deleteCookie("field69");
 deleteCookie("field70");
 deleteCookie("field71");
 deleteCookie("field72");
 deleteCookie("field73");
 deleteCookie("field74");
 deleteCookie("field75");
 deleteCookie("field76");
 deleteCookie("field77");
 deleteCookie("field78");
 deleteCookie("field79");
 deleteCookie("field80");
 deleteCookie("field81");
 deleteCookie("field82");
 deleteCookie("field83");
 deleteCookie("field84");
 deleteCookie("field85");
 deleteCookie("field86");
 deleteCookie("field87");
 deleteCookie("field88");
 deleteCookie("field89");
 deleteCookie("field90");
 deleteCookie("field91");
 deleteCookie("field92");
 deleteCookie("field93");
 deleteCookie("field94");
 deleteCookie("field95");
 deleteCookie("field96");
 deleteCookie("field97");
 deleteCookie("field98");
 deleteCookie("field99");
 deleteCookie("field100");
 deleteCookie("field101");
 deleteCookie("field102");
 deleteCookie("field103");
 deleteCookie("field104");
 deleteCookie("field105");
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
</html>