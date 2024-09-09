<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Satisfaction Measurement Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="csmform.css">
</head>
<body>


    <div class="form-container">
        <div class="header">
          
            <img src="csulogo.png" alt="CSU Logo" class="logo">
            <div class="header-center">
            
            <h2>Cagayan State University Lasam Campus</h2>
                <h3>HELP US SERVE YOU BETTER!</h3>
                <div class="header-cente"><p>Client Satisfaction Measurement Form</p></div>
            
                
                
                
            </div>
            <img src="images.jpg" alt="CSU Logo" class="logo">
        
        </div>
        

        

        <form id="csmForm">
            <!-- Form 1 -->
            <div class="form-card" id="form1">
            <div class="form-row">
    <label>Client type:</label>
    <input type="radio" id="citizen" name="client_type" value="Citizen" required>
    <label for="citizen">Citizen</label>
    <input type="radio" id="business" name="client_type" value="Business" required>
    <label for="business">Business</label>
    <input type="radio" id="government" name="client_type" value="Government" required>
    <label for="government">Government (Employee or another agency)</label>
</div>

                <div class="form-row">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                    <label>Sex:</label>
                    <input type="radio" id="male" name="sex" value="Male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="Female" required>
                    <label for="female">Female</label>
                    <label for="age" required>Age:</label>
                    <input type="number" id="age" name="age" min="1" max="120" step="1">
                    <label for="offices" required>Offices:</label>

                    <select id="Offices" name="Offices" required>
  <option value="Registrar Office">Registrar Office</option>
  <option value="Cashier Office">Cashier Office</option>
  <option value="Accounting Office">Accounting Office </option>
</select>
                </div>
                <div class="form-row">
                <label for="region">Region of Residence:</label>
            
                <select id="region" name="region" required>
                <option value="Region II - Cagayan Valley">Region II - Cagayan Valley</option>
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
<label for="region">Services:</label>
<select id="Services" name="Services" required>
  
  <option value="Request for Certification">Request for Certification</option>
  <option value="Request for Transfer Credentials">Request for Transfer Credentials</option>
  <option value="Rectification of Grades">Rectification of Grades</option>
  <option value="Collection of Fees">Collection of Fees</option>
  <option value="Releasing of Checks">Releasing of Checks </option>
  <option value="Releasing of Cash">Releasing of Cash</option>
  <option value="Validation of Enrollment">Validation of Enrollment</option>
  <option value="Issuance of Statement of Account">Issuance of Statement of Account</option>
  <option value="Signing of Clearance">Signing of Clearance</option>
</select>

                </div>
                <button type="button" class="next-button" onclick="showNextForm(2)" disabled>Next</button>
            </div>

            <!-- Form 2 -->
            <div class="form-card" id="form2" >
            <h3>INSTRUCTIONS: Check mark (✔) your answer to the Citizen's Charter (CC) question. The Citizen's Charter is an official document that reflects the 
                services of a government agency/office including it requirements, fees, and processing times among others.</h3>

            <p>CC1: Which of the following best describe your awareness of  CC?</p>
            <label><input type="radio" name="cc1" value="yes" required> I know what a CC is and I this office's CC.</label><br>
            <label><input type="radio" name="cc1" value="no"required> I know what a CC is but I did NOT see this office's CC.</label><br>
            <label><input type="radio" name="cc1" value="yes"required> I learned of the CC only when I saw this office's CC.</label><br>
            <label><input type="radio" name="cc1" value="no"required> I do not know what a CC is and I did not see one in this office.</label>

            <p>CC2: If aware of CC (answered code 1.3 in CC1),would you say that the CC of this office was...?</p>
            <label><input type="radio" name="cc2" value="1"required> 1. Easy to see</label><br>
            <label><input type="radio" name="cc2" value="2"required> 2. Somewhat easy to see</label><br>
            <label><input type="radio" name="cc2" value="3"required> 3. Difficult to see</label><br>
            <label><input type="radio" name="cc2" value="4"required> 4. Not visible at all</label><br>
            <label><input type="radio" name="cc2" value="5"required> 5. N/A</label>

            <p>CC3: If aware of CC (answered codes 1.3 in CC1), how much did the CC help you in your transaction?</p>
            <label><input type="radio" name="cc3" value="1"required> 1. Helped very much</label><br>
            <label><input type="radio" name="cc3" value="2"required> 2. Somewhat helped</label><br>
            <label><input type="radio" name="cc3" value="3"required> 3. Did not help</label><br>
            <label><input type="radio" name="cc3" value="4"required> 4. N/A</label><br><br>

            
                <button type="button" class="next-button" onclick="showNextForm(3)" disabled>Next</button>
                <button type="button" class="prev-button" onclick="showNextForm(1)">Previous</button>
            </div>

            <!-- Form 3 -->
            <div class="form-card" id="form3" >

                <!-- Add your form fields for Form 3 here -->
                <div class="instructions">
        <p>INSTRUCTIONS:<br>
        For SQD 0-8, please put a check mark (✔) on the column that best corresponds to your answer.</p>
    </div>
    <form>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Strongly Disagree</th>
                    <th>Disagree</th>
                    <th>Neither Agree nor Disagree</th>
                    <th>Agree</th>
                    <th>Strongly Agree</th>
                    <th>N/A</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SQD0. I am satisfied with the service that I availed.</td>
                    <td><input type="radio" name="sqd0" value="1"required></td>
                    <td><input type="radio" name="sqd0" value="2"required></td>
                    <td><input type="radio" name="sqd0" value="3"required></td>
                    <td><input type="radio" name="sqd0" value="4"required></td>
                    <td><input type="radio" name="sqd0" value="5"required></td>
                    <td><input type="radio" name="sqd0" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD1. I spent a reasonable amount of time for my transaction.</td>
                    <td><input type="radio" name="sqd1" value="1"required></td>
                    <td><input type="radio" name="sqd1" value="2"required></td>
                    <td><input type="radio" name="sqd1" value="3"required></td>
                    <td><input type="radio" name="sqd1" value="4"required></td>
                    <td><input type="radio" name="sqd1" value="5"required></td>
                    <td><input type="radio" name="sqd1" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD2. The office followed the transaction's requirements and steps based on the information provided.</td>
                    <td><input type="radio" name="sqd2" value="1"required></td>
                    <td><input type="radio" name="sqd2" value="2"required></td>
                    <td><input type="radio" name="sqd2" value="3"required></td>
                    <td><input type="radio" name="sqd2" value="4"required></td>
                    <td><input type="radio" name="sqd2" value="5"required></td>
                    <td><input type="radio" name="sqd2" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD3. The steps (including payment) I needed to do for my transaction were easy and simple.</td>
                    <td><input type="radio" name="sqd3" value="1"required></td>
                    <td><input type="radio" name="sqd3" value="2"required></td>
                    <td><input type="radio" name="sqd3" value="3"required></td>
                    <td><input type="radio" name="sqd3" value="4"required></td>
                    <td><input type="radio" name="sqd3" value="5"required></td>
                    <td><input type="radio" name="sqd3" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD4. I easily found information about my transaction from the office or its website.</td>
                    <td><input type="radio" name="sqd4" value="1"required></td>
                    <td><input type="radio" name="sqd4" value="2"required></td>
                    <td><input type="radio" name="sqd4" value="3"required></td>
                    <td><input type="radio" name="sqd4" value="4"required></td>
                    <td><input type="radio" name="sqd4" value="5"required></td>
                    <td><input type="radio" name="sqd4" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD5. I paid a reasonable amount of fees for my transaction.</td>
                    <td><input type="radio" name="sqd5" value="1"required></td>
                    <td><input type="radio" name="sqd5" value="2"required></td>
                    <td><input type="radio" name="sqd5" value="3"required></td>
                    <td><input type="radio" name="sqd5" value="4"required></td>
                    <td><input type="radio" name="sqd5" value="5"required></td>
                    <td><input type="radio" name="sqd5" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD6. I feel the office was fair to everyone, or "walang palakasan", during my transaction.</td>
                    <td><input type="radio" name="sqd6" value="1"required></td>
                    <td><input type="radio" name="sqd6" value="2"required></td>
                    <td><input type="radio" name="sqd6" value="3"required></td>
                    <td><input type="radio" name="sqd6" value="4"required></td>
                    <td><input type="radio" name="sqd6" value="5"required></td>
                    <td><input type="radio" name="sqd6" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD7. I was treated courteously by the staff, and (if asked for help) the staff was helpful.</td>
                    <td><input type="radio" name="sqd7" value="1"required></td>
                    <td><input type="radio" name="sqd7" value="2"required></td>
                    <td><input type="radio" name="sqd7" value="3"required></td>
                    <td><input type="radio" name="sqd7" value="4"required></td>
                    <td><input type="radio" name="sqd7" value="5"required></td>
                    <td><input type="radio" name="sqd7" value="N/A"required></td>
                </tr>
                <tr>
                    <td>SQD8. I got what I needed from the government office, or (if denied) denial of request was sufficiently explained to me.</td>
                    <td><input type="radio" name="sqd8" value="1"required></td>
                    <td><input type="radio" name="sqd8" value="2"required></td>
                    <td><input type="radio" name="sqd8" value="3"required></td>
                    <td><input type="radio" name="sqd8" value="4"required></td>
                    <td><input type="radio" name="sqd8" value="5"required></td>
                    <td><input type="radio" name="sqd8" value="N/A"required></td>
                </tr>
            </tbody>
        </table>
        <div>
            <label for="suggestions">Suggestions on how we can further improve our services (optional):</label>
            <textarea id="suggestions" name="suggestions" class="optional-input" rows="4"></textarea>
        </div>
        <div>
            <label for="email">Email address (optional):</label>
            <input type="email" id="email" name="email" class="optional-input">
        </div>


                <button type="button" class="next-button" onclick="showNextForm(4)" disabled>Submit</button>
                <button type="button" class="prev-button" onclick="showNextForm(2)">Previous</button>
            </div>

  
            
         <!--Form 4 -->
            <div class="form-card" id="form4">
             <h1 style="text-align: center; font-size:80px;"> <p > Thank You!!!</p></h1>

        

            </div>
            <div class="opacity-25">
                
                <footer><p>Copyright 2024 Develop by RRJM  </p> </footer>
             
            
             
               
        </form>
    </div>

    <script>
        function showNextForm(formNumber) {
            const totalForms = 4;
            for (let i = 1; i <= totalForms; i++) {
                document.getElementById('form' + i).style.display = (i === formNumber) ? 'block' : 'none';
            }
            checkFormCompletion(formNumber); // Check completion when showing form
        }

        function checkFormCompletion(formNumber) {
            const form = document.getElementById('form' + formNumber);
            const requiredFields = form.querySelectorAll('input[required], select[required]');
            let allFilled = true;

            requiredFields.forEach((field) => {
                if (field.type === 'radio') {
                    if (!form.querySelector(`input[name="${field.name}"]:checked`)) {
                        allFilled = false;
                    }
                } else {
                    if (!field.value) {
                        allFilled = false;
                    }
                }
            });

            const nextButton = form.querySelector('.next-button');
            if (nextButton) {
                nextButton.disabled = !allFilled;
            }
        }

        // Add event listeners to required fields in each form
        document.querySelectorAll('input[required], select[required]').forEach((element) => {
            element.addEventListener('input', function () {
                const formCard = this.closest('.form-card');
                const formId = formCard.id.replace('form', '');
                checkFormCompletion(formId);
            });
        });

        // Initialize form display
        showNextForm(1);


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   
</body>
</html>
