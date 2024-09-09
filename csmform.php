<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Satisfaction Measurement Form</title>
    <link rel="stylesheet" href="csmform.css">
</head>
<body>
    <div class="form-container">
        <div class="header">
            <div class="control-number">
                
            </div>
            <div class="header-center">
                <img src="csulogo.png" alt="CSU Logo" class="logo">
                <h2>Cagayan State University Lasam Campus</h2>
                <h3>HELP US SERVE YOU BETTER!</h3>
            </div>
            <div class="header-right">
                <p>Client Satisfaction Measurement Form</p>
                <p>Expires on: <span class="underline">________</span></p>
            </div>
        </div>

        <p class="intro">
            This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your <span class="underline">recently concluded transaction</span> will help this office provide a better service. Personal information shared will be kept confidential and you always have the option to not answer this form.
        </p>
        
        <form id="firstForm">
            <div class="form-row">
                <label>Client type:</label>
                <input type="checkbox" id="citizen" name="client_type[]" value="Citizen">
                <label for="citizen">Citizen</label>
                <input type="checkbox" id="business" name="client_type[]" value="Business">
                <label for="business">Business</label>
                <input type="checkbox" id="government" name="client_type[]" value="Government">
                <label for="government">Government (Employee or another agency)</label>
            </div>

            <div class="form-row">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
                

                <label>Sex:</label>
                <input type="radio" id="male" name="sex" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="Female">
                <label for="female">Female</label>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="1" max="120" step="1">

            </div>

            <div class="form-row">
            <label for="region">Region of Residence:</label>
<select id="region" name="region">
  <option value="">Select your region</option>
  <option value="Region I - Ilocos Region">Region I - Ilocos Region</option>
  <option value="Region II - Cagayan Valley">Region II - Cagayan Valley</option>
  <option value="Region III - Central Luzon">Region III - Central Luzon</option>
  <option value="Region IV-A - CALABARZON">Region IV-A - CALABARZON</option>
  <option value="Region IV-B - MIMAROPA">Region IV-B - MIMAROPA</option>
  <option value="Region V - Bicol Region">Region V - Bicol Region</option>
  <option value="Region VI - Western Visayas">Region VI - Western Visayas</option>
  <option value="Region VII - Central Visayas">Region VII - Central Visayas</option>
  <option value="Region VIII - Eastern Visayas">Region VIII - Eastern Visayas</option>
  <option value="Region IX - Zamboanga Peninsula">Region IX - Zamboanga Peninsula</option>
  <option value="Region X - Northern Mindanao">Region X - Northern Mindanao</option>
  <option value="Region XI - Davao Region">Region XI - Davao Region</option>
  <option value="Region XII - SOCCSKSARGEN">Region XII - SOCCSKSARGEN</option>
  <option value="Region XIII - Caraga Region">Region XIII - Caraga Region</option>
  <option value="NCR - National Capital Region">NCR - National Capital Region</option>
  <option value="CAR - Cordillera Administrative Region">CAR - Cordillera Administrative Region</option>
  <option value="BARMM - Bangsamoro Autonomous Region in Muslim Mindanao">BARMM - Bangsamoro Autonomous Region in Muslim Mindanao</option>
</select>

            </div>

            <div class="form-row">
            <label for="service">Service Availed:</label>
            <input type="text" id="service" name="service" placeholder="">

            </div>
            </form>
            <button type="button" class="next-button" onclick="showSecondForm()">Next</button>
            <div id="secondForm" class="hidden">
            <div class="card">
            <div class="section">
            <h3>INSTRUCTIONS: Check mark (✔) your answer to the Citizen's Charter (CC) question.</h3>
            <p>CC1: I am aware of this office's CC.</p>
            <label><input type="radio" name="cc1" value="yes"> Yes</label><br>
            <label><input type="radio" name="cc1" value="no"> No</label>

            <p>CC2: If aware of CC (answered code 1.3 in CC1), how much did the CC help you in your transaction?</p>
            <label><input type="radio" name="cc2" value="1"> 1. Very much helped</label><br>
            <label><input type="radio" name="cc2" value="2"> 2. Helped</label><br>
            <label><input type="radio" name="cc2" value="3"> 3. Did not help</label><br>
            <label><input type="radio" name="cc2" value="4"> 4. N/A</label>

            <p>CC3: If aware of CC (answered codes 1.3 in CC1), how would you rate this office's CC?</p>
            <label><input type="radio" name="cc3" value="1"> 1. Easy to see</label><br>
            <label><input type="radio" name="cc3" value="2"> 2. Not easy to see</label><br>
            <label><input type="radio" name="cc3" value="3"> 3. Difficult to see</label><br>
            <label><input type="radio" name="cc3" value="4"> 4. Did not see</label><br>
            <label><input type="radio" name="cc3" value="5"> 5. N/A</label>
          </div>


       

       
          <button type="button" class="next-button" onclick="showThirdForm()">Next</button>
                
            </div>
            <div id="secondForm" class="hidden">
            <div class="card">
            <div class="section">
            <h3>INSTRUCTIONS:</h3>
            <p>CC1: I am aware of this office's CC.</p>
            <label><input type="radio" name="cc1" value="yes"> Yes</label><br>
            <label><input type="radio" name="cc1" value="no"> No</label>

            <p>CC2: If aware of CC (answered code 1.3 in CC1), how much did the CC help you in your transaction?</p>
            <label><input type="radio" name="cc2" value="1"> 1. Very much helped</label><br>
            <label><input type="radio" name="cc2" value="2"> 2. Helped</label><br>
            <label><input type="radio" name="cc2" value="3"> 3. Did not help</label><br>
            <label><input type="radio" name="cc2" value="4"> 4. N/A</label>

            <p>CC3: If aware of CC (answered codes 1.3 in CC1), how would you rate this office's CC?</p>
            <label><input type="radio" name="cc3" value="1"> 1. Easy to see</label><br>
            <label><input type="radio" name="cc3" value="2"> 2. Not easy to see</label><br>
            <label><input type="radio" name="cc3" value="3"> 3. Difficult to see</label><br>
            <label><input type="radio" name="cc3" value="4"> 4. Did not see</label><br>
            <label><input type="radio" name="cc3" value="5"> 5. N/A</label>
          </div>

          
                
            </div>

        </div>
        
    </div>

    <script>
        function showFirstForm() {
            document.getElementById('firstForm').style.display = 'block';
            document.getElementById('secondForm').style.display = 'none';

        }

        function showSecondForm() {
            document.getElementById('firstForm').style.display = 'none';
            document.getElementById('secondForm').style.display = 'block';

        }
        function showThirdForm() {
            document.getElementById('firstForm').style.display = 'none';
            document.getElementById('secondForm').style.display = 'block';
        }
    </script>
</body>
</html>
