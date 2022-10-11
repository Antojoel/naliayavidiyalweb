<?php include("header.php"); ?>

<!----alert messages end-->

  <!-- member join form -->

<div class="container mem-container">
  <div class="row">
    <div class="col-12">
      <form action="join.php" method="post">
        <h2 style="text-align: center;">
          Volunteer/Supporter 
        </h2>

        <h4 style="text-align: center;">
          தன்னார்வலர்/ஆதரவாளர்
        </h4>
        <h5>
          1.Profile Details/சுய விவரங்கள்:
        </h5>

        <div class="form-group">
          <label>
            1.Name/பெயர்:
          </label>
          <input type="text" class="form-control" name="name" required>
        </div>

        <labe>
          2.Gender/பாலினம்:
        </labe>

        <div class="form-check">
          <label>
            <input type="radio" class="form-check-input" name="gender">Male/ஆண்
          </label>
        </div>

        <div class="form-check">
          <label>
            <input type="radio" class="form-check-input" name="gender">Feamale/பெண்
          </label>
        </div>

        <div class="form-check">
          <label>
            <input type="radio" class="form-check-input" name="gender">Transgender/மூன்றாம் பாலினம்
          </label>
        </div>

        <div class="form-group">
          <label>
            3.Date of Birth/பிறந்த தேதி:
          </label>
          <input type="date" class="form-control"  name="dob" required>
        </div>

        <div class="form-group">
          <label>
            4.Education/கல்வி:
          </label>
          <input type="text" class="form-control" name="education" required>
        </div>

        <div class="form-group">
          <label>
            5.Occupation/தொழில்:
          </label>
          <input type="text" class="form-control" name="occupation" required>
        </div>

        <div class="form-group">
          <label>
            6.Blood group/இரத்த வகை:
          </label>
          <input type="text" class="form-control" name="bloodgroup" required>
        </div>

        <div class="form-group">
          <label>
            7.Mobile No/கைபேசி எண்:
          </label>
          <input type="text" class="form-control" name="phone" required>
        </div>

        <div class="form-group">
          <label>
            8.Email id/மின்னஞ்சல்:
          </label>
          <input type="email" class="form-control" name="mailid" required>
        </div>

        <label>
          9.Physically Challenged/மாற்றுத் திறனாளியா (yes/no):
        </label>

        <div class="form-group">
          <label>
            <input type="text" class="form-control" name="Physically-chalenged">
          </label>
        </div><br>
                
        <h5>
          2.Current Contact Details/தற்போதைய தொடர்பு விவரங்கள்:
        </h5>

        <div class="form-group">
          <label>
            1.Address/முகவரி:
          </label>
          <textarea class="form-control" rows="4" name="currentaddress" required></textarea>
        </div>

        <div class="form-group">
          <label>
            2.Pin Code/அஞ்சல் குறியீடு:
          </label>
          <input type="text" class="form-control" name="pincode" required>
        </div>

        <div class="form-group">
          <label>
            3.District/மாவட்டம்:
          </label>
          <input type="text" class="form-control" name="district" required>
        </div>

        <div class="form-group">
          <label>
            4.State/மாநிலம்:
          </label>
          <input type="text" class="form-control" name="state" required>
        </div>

        <label>
          5.Services/சேவை விவரங்கள்:
        </label>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="option1">Helping field Work/களப்பணிக்கு உதவுதல்
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="option2">Blood Donation/இரத்த தானம்
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="option3">Financial Support/நிதி உதவி
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="option4">Direct Field Work/நேரடி கள வேலை
          </label>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="option5">All The Above/மேலே உள்ள அனைத்தும்
          </label>
        </div><br>

        <div class="form-group">
          <label>
            6.About Your Self/உங்களை பற்றி:
          </label>
          <textarea class="form-control" rows="5" name="about" required></textarea>
        </div>

        <label>
          7.I Would Like To Work In IT Department of Nalaiya Vidiyal/
          நான் நாளைய விடியல் தொழில்நுட்பப் பிரிவில் பங்களிக்க விரும்புகிறேன்:
        </label>

        <div class="form-check">
          <label>
            <input type="radio" class="form-check-input" name="it-yes">Yes/ஆம்
          </label>
        </div>

        <div class="form-check">
          <label>
            <input type="radio" class="form-check-input" name="it-no">No/இல்லை
          </label>
        </div>

        <label>
          8.Declaration/உறுதிமொழி:
        </label>

        <p style="text-align: justify;line-height: 30px;">

          1.  I will work with the sole aim of Helping others| service by overcoming caste and religious politics and personal preferences and hatred.<br>
 
          2.  I will not use team Nalaiya Vidiyal's name, ID card and uniform for illegal and criminal activities and personal needs.<br>
                  
          3.  The charity members should not engage in political violence or pointing out the shortcomings of the government. Everyone should operate only with a &nbsp;&nbsp;&nbsp;&nbsp;service mindset throughout.<br>
                  
          4   Do not attend Nalaiya Vidiyal's meetings in an intoxicated mode. Intoxicating substances and alcohol usage must be avoided during all deeds of the &nbsp;&nbsp;&nbsp;&nbsp;Nalaiya Vidiyal team.<br>
                  
          5.  Do not broadcast messages other than our group-based events or speak inappropriate words on Facebook and WhatsApp groups and other social media.<br>
                  
          6.  Conversations beyond the group with the individual through Facebook and other social websites should not be allowed.<br>
                  
          7.  Gender equality must be maintained. Don't speak behind about our Team Nalaiya Vidiyal or its members.<br>
                  
          8.  In case of any personal conversation or discussions by the team and its affiliates, the Committee Chairperson should be informed immediately. Late &nbsp;&nbsp;&nbsp;&nbsp;complaints will not be endorsed and the management is not responsible for them.<br>
                  
          9.  Caste, Religion, Ethnic and Hate Politics also speaking inappropriate words should be avoided and be cautious not to offend others.<br>
                  
          10. Attendance at group events and meetings compulsory.<br> 
                  
          11. Be obedient to the leadership of the team and those in charge.<br>
                   
          12. If you are a member of a group other than Team Nalaiya Vidiyal, be sure to let the administration know.<br>
                  
          13. I assure you that in any case, I will act by the legal procedures of the Committee.

        </p>

        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" id="accept">I accept
          </label>
        </div>

        <div>
          <input type="button" class="btn btn-primary" value="Submit" id="submitbtn" disabled="disabled">
        </div>
      </form><br>
    </div>
  </div>
</div><br>



<?php include("footer.php"); ?>
     
      <script>
        //  check box
$('#accept').click(function() {
	if ($('#submitbtn').is(':disabled')) {
    	$('#submitbtn').removeAttr('disabled');
    } else {
    	$('#submitbtn').attr('disabled', 'disabled');
    }
});
      </script>
   