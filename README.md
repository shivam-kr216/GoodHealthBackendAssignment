# GoodHealthBackendAssignment
<b>Tools:</b>
<ul><li> HTML </li><li> CSS </li><li> JavaScript </li><li> PHP</li></ul>

<b>Functionality: </b>
<ul><li>Add username, password, email and mobile into the table.</li><li>Password should be of minimum length 6.</li><li>Password will store in encrypted form into the database. </li><li> OTP is sent to the registered email id.</li><li>OTP verification is necessary to proceed onto next page. </li></ul>

<b>Usage Instructions: </b> <ul><li> Download the assignment from the given link. </li><li> Import the database file to your phpMyAdmin. </li><li> User must have an account registered into database to login, if not create it using registration form. </li><li> Registered user can login using email address and password.</li><li> After entering correct email address and password user will otp to their registered email.</li><li> Verify the otp and redirect to message page. </li></ul>

<b>Description: </b>
<p>In the project, SendGrid API is used to send otp to the registered email address. Username and email must be unique. In case, if username or email address contradict user will get a pop-up to either create a fresh account or can use registered email address and password to login.  </p>
<p>After entering correct email address and password user will be redirected to otp page where user must enter the same otp received into the registered email which is of 6 digits. In case, if user enter wrong otp, he/she will remain on the same page.</p> 
<p>After entering correct otp user will redirect to the message page where username and user email address will be displayed. User can also logout from the page. </p><br>
<b>Note: </b><p>We need to install the dependencies for using SendGrip API. So you can download it from readme file inside sendGrid folder or download the whole assignment.</p> <br>


<b>Screenshots: </b>
  <img src="https://user-images.githubusercontent.com/48478625/85928902-480ff300-b8ce-11ea-817a-240b990c05ff.png">
  <p align="center"><b>Fig 1: Registration</b></p><br>

<img src="https://user-images.githubusercontent.com/48478625/85928941-8c9b8e80-b8ce-11ea-9fc1-e953c95ff556.png">
<p align="center"><b>Fig 2: Login form</b></p><br>
<img src="https://user-images.githubusercontent.com/48478625/85929037-0a5f9a00-b8cf-11ea-90d5-b5fdab0a4ee9.png">
<p align="center"><b>Fig 3: OTP form</b></p><br>
<img src="https://user-images.githubusercontent.com/48478625/85928993-ccfb0c80-b8ce-11ea-9309-febbb75831ee.png">
<p align="center"><b>Fig 4: Messgae</b></p>
