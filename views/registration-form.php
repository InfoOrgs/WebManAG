<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    body {
        margin: 0px;
        background-color: rgb(255, 255, 255);
        width: 100%;
    }

    h5 {
        font-size: 16px;
    }

    h4 {
        margin: 0px;
        margin-top: 21px;
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
    }

    input {
        border: 2px solid rgb(99, 97, 97);
        border-radius: 5px;
        width: 250px;
        height: 23px;
        padding: 5px;
        background-color: #fff;
    }

    input[value="Class X"] {
        color: rgb(0, 0, 0);
        text-align: center;
        font-size: medium;
        font: italic small-caps bold 22px/30px Georgia, serif;
    }

    .m {
        width: 50px;
        padding-bottom: 50px;
        display: inline-block;
    }

    .m1 {
        width: 150px;
        height: 23px;
    }

    .p1 {
        display: inline-block;
        margin: 0px;
        margin-bottom: 8px;
        position: relative;
        bottom: 6px;
    }

    #hrlst {
        color: blue;
    }

    input[type=submit] {
        color: rgb(0, 0, 0);
        text-align: center;
        height: 38px;
        width: 163px;
        background-color: rgb(24, 238, 184);
        margin-bottom: 20px;
    }

    input[type=submit]:hover {
        background-color: #fff;
    }

    input[type=submit]:active {
        background-color: #fff;
    }

    input[type=reset] {
        color: rgb(0, 0, 0);
        text-align: center;
        height: 38px;
        width: 130px;
        background-color: rgb(247, 132, 1);
        margin-bottom: 20px;
    }

    input[type="file"] {
        position: absolute;
        border: none;
        left: 123px;
        z-index: -1;
    }

    .custom-file {
        border: 2px solid rgb(216, 95, 95);
        display: inline-block;
        cursor: pointer;
        background-color: rgb(148, 13, 8);
        color: white;
        z-index: 1;
        font-size: 19px;
        border-radius: 8px;
        height: 30px;
        width: 200px;
        text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    label:active {
        background-color: #fff;
        color: aqua;
        border: none;
    }

    label:focus {
        background-color: rgb(104, 0, 0);
    }

    select {
        height: 37px;
        width: 259px;
        margin: 5px;
        padding: 9px;
        border-radius: 5px;
        border: 2px solid black;
    }

    div {
        display: inline-block;
        margin-left: 10px;
    }

    input[type="radio"] {
        margin-left: 20px;
        border: 1px solid #888;
    }

    .subcl {
        margin-left: 38%;
    }

    .sublist {
        background-color: rgb(200, 189, 189);
        padding: 10px;
        border-radius: 5px;
    }

    h2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>


<body>
    <style>
#succ{
    display: none;
    margin: auto;
    width: 75%;
    height: 250px;
    background-color: rgb(29, 206, 212);
    color: #fff;
}



    </style>

<div style="display: none;" id="succ">

<h1>successfully Submited</h1>







</div>

</div>


    <div id="mainbiz" style="margin: 0%;">
        <h2
            style="    width: 100%;height: 24px;background-color: rgb(236, 92, 35); position: relative;margin: 0px; text-align: center;color: white; padding: 26px;">
            STUDENT REGISTRATION FORM
        </h2>
        <form style="margin-left: 10px;" action="" method="POST" enctype="multipart/form-data">
            <div>
                <h4>First Name:</h4>
                <input type="text" name="fname" id="name" placeholder="First Name" required>
            </div>
            <div>
                <h4>Last Name:</h4>
                <input type="text" name="lname" placeholder="Last Name" required></div>
            <div>
                <h4>Date of Birth:</h4>
                <input type="date" name="dob" placeholder="12/12/2001" required>
            </div>
            <div>
                <h4>Email ID:</h4>
                <input type="email" id="email" name="email" required placeholder="abc@gmail.com">
            </div>
            <div>
                <h4>Mobile No:</h4>
                <input type="text" name="mnumber" required placeholder="12345-67890">
            </div>
            <div>
                <h4> Gender:</h4>
                <input type="radio" name="gender" value="male" class="m" required>
                <p class="p1">MALE</p>
                </input>
                <input type="radio" name="gender" value="female" class="m" required>
                <p class="p1">FEMALE</p>
                </input>
            </div>
            <div>
                <h4>Medium:</h4>
                <input name="medium" required type="text">
            </div>
            <div>
                <h4>Caste:</h4>
                <input name="caste" required type="text">
            </div>
            <div>
                <h4>Religion</h4>
                <select required name="religion">
                    <option value="Hinduism">Select</option>
                    <option value="Hinduism">Hinduism</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Islam">Islam</option>
                    <option value="Christianity">Christianity</option>


                </select>
            </div>
            <hr>
            <h2>
                <u>Address</u>
            </h2>
            <div>
                <h4>
                    Residential Address:
                </h4>
                <textarea name="resaddress" required rows="5" cols="40"></textarea>

            </div>
            <br>
            <div>
                <h4>City/District</h4>
                <input type="text" name="city" placeholder="City/area/district name" required>
            </div>
            <div>
                <h4>Pin No:</h4>
                <input type="text" name="pin" placeholder="780000" required>
            </div>
            <div>
                <h4>State:</h4>
                <select name="state" required>
                    <option value="">Select</option>
                    <option value="Assam">Assam</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <hr>
                    <option value="Tripura">Tripura</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Manipur">Manipur</option>
                </select>
            </div>
            <div>
                <h4>Country:</h4>
                <input type="text" name="Country" value="India" readonly="readonly">
            </div>
            <h2><u>QUALIFICATION OF PRE TEST </u>:</h2>
            <div>
                <div id="stli">
                    <h4> Examination</h4>
                    <strong><input type="text" value="Class X" readonly></strong>
                </div>
                <div>
                    <h4>Board</h4>
                    <input type="text" name="qualification" required>
                </div>
            </div>
            <div>
                <div>
                    <h4>Percentage</h4>
                    <input type="text" required name="Percentage">
                </div>
                <div>
                    <h4> >Year of Passing</h4>
                    <input type="text" required name="yopass">
                </div>
            </div>
            <div>
                <h4><u>Course Applied for:</u></h4>
                <h4>Stream:</h4>
                <input type="radio" required class="m" name="stream" value="arta">
                <p class="p1">Arts</p>
                <input type="radio" required class="m" name="stream" value="Science">
                <p class="p1">Science</p>
                <input type="radio" required class="m" name="stream" value="Commerce">
                <p class="p1">Commerce</p>
                <hr>
                <input class="m" type="radio" value="english" name="sub" checked>
                <p class="p1">English</p>
                <input class="m" type="radio" value="mil" name=sub>
                <p class="p1">MIL(Assamese, Bengali , Hindi) / Alternative English</p>
                <div id="artsub" class="subcl" style="display: block;margin-left: 25%;">
                    <div>
                        <h4>You Select :</h4>
                        <select name="subj1">Subjec1
                            <option value="">Select</option>
                            <option value="Economics">Economics</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Education">Education</option>
                            <option value="Logic & Philosophy">Logic & Philosophy</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Geography">Geography</option>
                            <option value="Advance Assamese / Advance Hindi">Advance Assamese / Advance Hindi</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Sanskrit">Sanskrit</option>
                            <option value="Swadesh  Adhyayan">Swadesh Adhyayan</option>
                            <option value="Bihu">Bihu</option>
                            <option value="Computer science">Computer science</option>
                            <option disabled></option>
                            <option disabled>>Science :---------</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Biology ">Biology</option>
                            <option value=" Statistics"> Statistics</option>
                            <option value=" Geography and Economics"> Geography and Economics</option>
                            <option value="  Computer Science"> Computer Science</option>
                            <option disabled></option>
                            <option disabled>>Commerce :---------</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value=" Business Mathematics and statistics">Business Mathematics and statistics
                            </option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Economics">Economics</option>
                            <option value="Finance">Finance</option>
                        </select>


                        <select name="subj2">Subjec2
                            <option value="">Select</option>
                            <option value="Economics">Economics</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Education">Education</option>
                            <option value="Logic & Philosophy">Logic & Philosophy</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Geography">Geography</option>
                            <option value="Advance Assamese / Advance Hindi">Advance Assamese / Advance Hindi</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Sanskrit">Sanskrit</option>
                            <option value="Swadesh  Adhyayan">Swadesh Adhyayan</option>
                            <option value="Bihu">Bihu</option>
                            <option value="Computer science">Computer science</option>
                            <option disabled></option>
                            <option disabled>>Science :---------</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Biology ">Biology</option>
                            <option value=" Statistics"> Statistics</option>
                            <option value=" Geography and Economics"> Geography and Economics</option>
                            <option value="  Computer Science"> Computer Science</option>
                            <option disabled></option>
                            <option disabled>>Commerce :---------</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value=" Business Mathematics and statistics">Business Mathematics and statistics
                            </option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Economics">Economics</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div><br>
                    <div>
                        <select name="subj3">Subjec3
                            <option value="">Select</option>
                            <option value="Economics">Economics</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Education">Education</option>
                            <option value="Logic & Philosophy">Logic & Philosophy</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Geography">Geography</option>
                            <option value="Advance Assamese / Advance Hindi">Advance Assamese / Advance Hindi</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Sanskrit">Sanskrit</option>
                            <option value="Swadesh  Adhyayan">Swadesh Adhyayan</option>
                            <option value="Bihu">Bihu</option>
                            <option value="Computer science">Computer science</option>
                            <option disabled></option>
                            <option disabled>>Science :---------</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Biology ">Biology</option>
                            <option value=" Statistics"> Statistics</option>
                            <option value=" Geography and Economics"> Geography and Economics</option>
                            <option value="  Computer Science"> Computer Science</option>
                            <option disabled></option>
                            <option disabled>>Commerce :---------</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value=" Business Mathematics and statistics">Business Mathematics and statistics
                            </option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Economics">Economics</option>
                            <option value="Finance">Finance</option>
                        </select>

                        <select name="subj4">Subjec4
                            <option value="">Select</option>
                            <option value="Economics">Economics</option>
                            <option value="Political Science">Political Science</option>
                            <option value="Education">Education</option>
                            <option value="Logic & Philosophy">Logic & Philosophy</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Geography">Geography</option>
                            <option value="Advance Assamese / Advance Hindi">Advance Assamese / Advance Hindi</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Sanskrit">Sanskrit</option>
                            <option value="Swadesh  Adhyayan">Swadesh Adhyayan</option>
                            <option value="Bihu">Bihu</option>
                            <option value="Computer science">Computer science</option>
                            <option disabled></option>
                            <option disabled>>Science :---------</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Biology ">Biology</option>
                            <option value=" Statistics"> Statistics</option>
                            <option value=" Geography and Economics"> Geography and Economics</option>
                            <option value="  Computer Science"> Computer Science</option>
                            <option disabled></option>
                            <option disabled>>Commerce :---------</option>
                            <option value="Accountancy">Accountancy</option>
                            <option value=" Business Mathematics and statistics">Business Mathematics and statistics
                            </option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Economics">Economics</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                </div>

            </div>
    </div>
    <hr id="hrlst">
    <div>
        <h2><u>UPLOAD YOUR DOCUMENT</u></h2>
        <h4>UPLOAD PHOTO</h4> <label for="file-upload" class="custom-file" required
            onclick=" document.getElementById('file-upload').value.write()">
            Upload
        </label>
        <input id="file-upload" type="file" name="photo1">

        <br>
        <h4> UPLOAD BIRTH CERTIFICATE:</h4> <label for="file-upload1" class="custom-file" required>
            Upload
        </label>
        <input id="file-upload1" type="file" name="photo2">

        <h4> UPLOAD MARKSHEET</h4> <label for="file-upload2" class="custom-file" required>
            Upload
        </label>
        <td><input id="file-upload2" type="file" name="photo3">

            <h4> UPLOAD SCHOOL CERTIFICATE:</h4> <label for="file-upload3" class="custom-file" required>
                Upload
            </label>
            <input id="file-upload3" type="file" name="photo4">
            <br><br>
            <!-- =================================rezor pay============== -->
            <hr>

            <h5>
                Read carefully before filling out the admission form<br> 1.Fill in the details of the form correctly.
                <br> 2.One must submit proper photos in the required field. <br> 3.Your photo and xerox copies documents
                are to be submitted offline
                along with the bill.(Before attending college) <br> 4.You can download your prospectus and bill <br>
                after you make the payment online. <br> 5.If the payment cancels, try again after sometime or submit a
                query at our website. <br> 6.Details
                regarding payment of admission fees are sent on your email provided. <br> 7.Any other problem persists
                visit FRESIFY or whatsapp us on +91 8822722516<br> 8.The form will not be accepted until the payment is
                made.The form can be re-submitted
                if the payment cancels.
            </h5>
            <hr style="font-style: italic;">
            <!-- ================================rezpay================== -->
            <br>
            <div id="sub" class="subs" style="margin:-8px; display: none; margin-left: 20px; ">
                <br><br><br>
                <h3 style="color: rgb(226, 66, 66);">
                    <p style="color: rgb(8, 95, 19); display: inline-block;">Notice : </p> The form will not be accepted
                    until the payment is made.The form
                    can be re-submitted if the payment cancels.
                </h3>
                <br><br>
                <input onclick="sendemail()" type="submit" name="submit">

                <input type="reset" name="reset">
                <br><br><br><br>

            </div>

    </div>
    </Form>

    </div>
    <br> <br>


    <div id="pay" onclick="runtwo()" style="display: block; margin: auto; width:173px; height: 39px;">
        <form>
            <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_H9wYG7VRkcgwOw"
                async="" style="font-size: 0px;">
                    var gt = document.getElementsByClassName("Screen-closeBtn").style = "font-size:0px!important;"
                </script>
            <br>
        </form>
        <!-- ================= -->
        <!-- -=================== -->

        <br>
        <br>
        <br>
        <br>
        <br>

        <script>
            function runtwo() {
                on1();
                on2();
            }

            function on1() {

                var to = document.getElementById("pay");
                to.style.display = "none";

            }

            function on2() {
                var get = document.getElementById("sub");
                get.style.display = "block";
            }
        </script>


        <script>
            window.onload = function () {
                let link = document.createElement("link");
                link.href = "xampp/style.css";
                link.rel = "stylesheet";
                link.type = "text/css";
                frames[0].document.head.appendChild(link);
            }
        </script>
    </div>

    <?php
$server ="localhost";
$username="root";
$password="";

$con = mysqli_connect($server, $username, $password);

if(!con){
    die("fail to connect".mysqli_connect_error());
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mnumber = $_POST['mnumber'];
$gender = $_POST['gender'];
$medium = $_POST['medium'];
$caste = $_POST['caste'];
$religion = $_POST['religion'];
$resaddress = $_POST['resaddress'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$state = $_POST['state'];
$country = $_POST['country'];
$Percentage = $_POST['Percentage'];
$yopass = $_POST['yopass'];
$stream = $_POST['stream'];
$subj1 = $_POST['subj1'];
$subj2 = $_POST['subj2'];
$subj3 = $_POST['subj3'];
$subj4 = $_POST['subj4'];
$file1 = addslashes(file_get_contents($_FILES["photo1"]["tmp_name"]));
$file2 = addslashes(file_get_contents($_FILES["photo2"]["tmp_name"]));
$file3 = addslashes(file_get_contents($_FILES["photo3"]["tmp_name"]));
$file4 = addslashes(file_get_contents($_FILES["photo4"]["tmp_name"]));

       
$sql = "INSERT INTO `xbackend7`.`registration` (`fname`, `lname`, `dob`, `email`, `mnumber`, `gender`, `medium`, `caste`, `religion`, `resaddress`, `city`, `pin`, `state`, `country`, `Percentage`, `yopass`, `stream`, `subj1`, `subj2`, `subj3`, `subj4`, `photo1`, `photo2`, `photo3`, `photo4`, `dt`) VALUES ('$fname', '$lname', '$dob', '$email', '$mnumber', '$gender', '$medium', '$caste', '$religion', '$resaddress', '$city', '$pin', '$state', '$country', '$Percentage', '$yopass', '$stream', '$subj1', '$subj2', '$subj3', '$ubj4', '$file1','$file2','$file3','$file4' , current_timestamp());";
#echo $sql ;
if($con->query($sql) == false){
        echo "<script>" ;
        echo " function doit() ;";
        echo "</script>";
}
else{
    echo  "fail to insert: $sql <br> $con->error";
}
$con->close();
?>

    <script>

        function doit() {
            sendemail();
            change();
        }
        function sendemail() {
            var name = $('#name').val();
            var email = $('#email').val();
            var Body = 'Hello Dear,  ' + '\xa0\xa0' + name + '<br> <br>' + 'Your form has been submited successfully for Kalong Kapili Vidyapith . ' + email + '"' + '<br> <b>' + '\xa0\xa0' + 'To Admission Succesfully contact your college ASAP.' + '\xa0\xa0';
            Email.send({
                Host: "smtp.gmail.com",
                Username: "mr.roboxe@gmail.com",
                Password: "m@sethrollins",
                To: email,
                From: "mr.roboxe@gmail.com",
                Subject: '-' + name,
                Body: Body
            })
        }

        function change() {
            var lsd = document.getElementById('mainbiz');
            var lss = document.getElementById('succ');
            lsd.style.display="none";
            lss.style.display="block";
        }
    </script>
</body>

</html>