<?php 
	include("includes/header.php");
	// grab recaptcha library
	require_once "recaptchalib.php";
?>

<script>
	function validateForm() {
  		var x = document.forms["myForm"]["date"].value;
  		var d = document.forms["myForm"]["firstName"].value;
  		var t = document.forms["myForm"]["lastName"].value;
  		var f = document.forms["myForm"]["age"].value;
  		var s = document.forms["myForm"]["birthday"].value;

		if (x == null || x == "") {
    		alert("Please enter the date.");
    		return false;
    	}
		if (d == null || d == "") {
     		alert("Please enter your first name.");
 			return false;
 		}	else if (d.length > 15) {
    			alert("First name length to long.")
    			return false; 
    		}
		if (t == null || t == "") {
     		alert("Please enter your last name.");
 			return false;
 		}	else if (t.length > 15) {
    			alert("Last name length to long.")
    			return false; 
    		}
		if (f == null || f == "") {
     		alert("Please enter your age.");
 			return false;
 		}
		if (s == null || s == "") {
    		alert("Please enter your birthday.");
 			return false;
 		}
	}
 /*

 ***Here is your code I am not sure if this is what you guys wanted, But I am just trying to help out and work on form validation*****

 var x = document.forms["myForm"]["date"].value;
    if (x.length == 0) {
        alert("Date must be filled out");
		x.value = "Date must be filled out";
        return false;
    }
/*	else if{
		var x = document.forms["myForm"]["date"].value;
		return false;
	}
	else if{
		var x = document.forms["myForm"]["date"].value;
		return false;
	}
	else if{
		var x = document.forms["myForm"]["date"].value;
		return false;
	}
	else{
		return true;
	}
} 
 */
</script>

			<form name="myForm" onsubmit="return validateForm()" method="post" action="clients/create.php">
				<fieldset>
				<div class="centerTitle"><legend><h1 id="header">OSU Cascades Counseling Practicum <br> Client Information Form<h1></legend></div>
					<br>			
					<div class="boxed">
						<label for="date">Today's Date</label>
						<input type="date" name="date" placeholder="YYYYMMDD"/>					
						<label for="firstName">First Name</label>
						<input type="text" name="firstName" />
						<label for="lastName">Last Name</label>
						<input type="text" name="lastName"/>
					<br>
						<label for="age">Age</label>
						<input type="text" name="age"/>
						<label for="birthday">Date of Birth</label>
						<input type="date" name="birthday" placeholder="YYYYMMDD" max="1979-12-31"/>
					<br>
					<!--	<label for="address">Address</label>
						<input type="text" name="address"/>
						<label for="address2">Address</label>
						<input type="text" name="address2"/>
						<label for="city">City</label>
						<input type="text" name="city"/>
						<label for="state">State</label>
						<input type="text" name="state"/>  STATES SHOWN at bottom of file
						<label for="zip">Zip</label>
						<input type="text" name="zip"/>
					<br>
						<label for="phone">Phone</label>
						<input type="text" name="phone"/>
						<label for="message">May we contact you at this number if necessary?</label>
					<br>
						<div class="radioButton">
							<label for="option1">Yes</label>
							<input type="radio" name="message" value="yes" />
							<label for="option1">No</label>
							<input type="radio" name="message" value="no" />
						</div>
					
					
					<br>
						<label for="email">Email</label>
						<input type="email" name="email" size="40"/>
					<br>
						<label for="occupation">Occupation</label>
						<input type="text" name="occupation"/>
						<label for="employer">Employer</label>
						<input type="text" name="employer"/>
					<br>
						<label for="workAddress">Employer's address</label>
						<input type="text" name="workAddress"/>
						<label for="workPhone">Work Phone</label>
						<input type="text" name="workPhone"/>
						<label for="workMessage">May we contact this person if necessary?</label>
						<input type="radio" name="workMessage" value="yes" />Yes
						<input type="radio" name="workMessage" value="no" />No
					</div>

					<div class="box"><h2 class="form-header">Spouse or Partner Information</h2></div>

						<label for="partnerName">Name</label>
						<input type="text" name="partnerName"/>
						<label for="partnerAge">Age</label>
						<input type="text" name="partnerAge"/>
						<label for="partnerBday">Date of Birth</label>
						<input type="date" name="partnerBday" placeholder="MM/DD/YYYY"/>
						<label for="partnerOccupation">Occupation</label>
						<input type="text" name="partnerOccupation"/>
						<label for="partnerEmployer">Employer</label>
						<input type="text" name="partnerEmployer"/>
						<label for="partnerPhone">Phone</label>
						<input type="text" name="partnerPhone"/>

					<div class="box"><h2 class="form-header">Other Members of Your Household</h2></div>

					 <!-- Want to do like select a number of members of house --
						<label for="relativeFirstName">First Name</label>
						<input type="text" name="relativeFirstName">
						<label for="relativeLastName">Last Name</label>
						<input type="text" name="relativeLastName">
						<label for="relativeAge">Age</label>
						<input type="number" name="relativeAge">
						<label for="relativeDate">Date of Birth</label>
						<input type="date" name="relativeDate" placeholder="MM/DD/YYYY">
						<label for="relation">Relation</label>
						<input type="text" name="relation">

					<div class="box"><h2 class="form-header">Emergency Contact</h2></div>

						<label for="emergencyName">Name</label>
						<input type="text" name="emergencyName">
						<label for="emergencyRelation">Relation</label>
						<input type="text" name="emergencyRelation">
						<label for="emergencyAddress">Address</label>
						<input type="text" name="emergencyAddress">
						<label for="emergencyPhone">Phone</label>
						<input type="text" name="emergencyPhone">

					<div class="box"><h2 class="form-header">Health Insurance</h2></div>

						<label for="hasInsurance">Do you have health insurance?</label>
						<input type="radio" name="hasInsurance" value="yes" />Yes
						<input type="radio" name="hasInsurance" value="no" />No
						<label for="insuranceCompany">If yes, what company?</label>
					<br>
						<input type="text" name="insuranceCompany">

					<div class="box"><h2 class="form-header"> Medical Information</h2></div>

						<label for="PCP">Primary Care Physician</label>
						<input type="text" name="PCP"/>
						<label for="PCPphone">Phone</label>
						<input type="text" name="PCPphone"/>
					<br>
						<label for="medications">Prescription Medications</label>
						<input type="text" name="medications"/>
					<br>
						<label for="seenBefore">Have you ever seen a counselor before?</label>
						<input type="radio" name="seenBefore" value="yes" />Yes
						<input type="radio" name="seenBefore" value="no" />No
						<br>
						<label for="previousCounselor">If yes, when and where?</label>
						<input type="text" name="previousCounselor"/>
					<br>
						<label for="reason">Reason for seeking help now?</label>
					<br>
						<textarea rows="10" cols="80">Reason for your visit.</textarea>
					<br>-->
						<div class="g-recaptcha" data-sitekey="6LdDRAwUAAAAAP_6x9Z2E9g6KK5tzaRRQYBMnkOg"></div>
						<input type="submit" name ="Submit" />

						
				</fieldset>
			</form>

<?php include("includes/footer.php") ?>

<!--<select name="state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
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
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>				
				-->
