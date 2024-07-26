<!DOCTYPE html>
<html>

<head>
    <title>PRIMEDOC</title>
    <link rel="stylesheet" href="primedoc.css"/>
    <script src="primedoc.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div id="sectionhome">
        <div class="homebackground">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 navbarback">
            <a class="navbar-brand" href="#"> <img src="https://th.bing.com/th?id=OIP.4GYKvJjmuwHfGZPPQz9otgHaIY&w=234&h=265&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2" class="navbarimage" /><span class="navbarheading">PRIMEDOC</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto navbarelments">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Find Doctors</a>
                    <a class="nav-link" href="#sectionsignupform"><button class="login" onclick="display('sectionsignupform')">Login /Signup</button></a>
                </div>
            </div>
        </nav>
        <div class="mb-3">
            <input type="text" placeholder="Enter city" class="w-40 inputbar" />
            <input type="text" placeholder="Search Doctors" class="w-40 inputbar" id="searchdoctor"/>
            <button class="btn btn-primary" onclick="display('sectiondoctor')">Search</button>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner p-3">
                <div class="carousel-item active">
                    <img src="https://res.cloudinary.com/dfs06nupz/image/upload/v1695532139/specalist_doctors_vis9li.png" class="d-block w-100 coroselphotos" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/id/1261457574/vector/patient-using-mobile-app-and-choosing-doctor-to-book-appointment-online.jpg?s=612x612&w=0&k=20&c=TIlLjz56lqcBgjAMsUEM-FQY4bKD__A_2rtrb3H5Des=" class="d-block w-100 coroselphotos" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container m-4">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <div>
                        <div class=" homepageimagecard homepageimagecard1">
                            <img class="w-100" src="https://www.practostatic.com/consumer-home/desktop/images/1597423628/dweb_find_doctors.png" />
                        </div>
                        <div class="p-3 homepagetext">
                            <a href="" class="homepagecardlargetext"> Find Doctors Near You
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                            <p class="homepagecardsmalltext">Confirmed Appoinments</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4  mb-3">
                    <div>
                        <div class="homepageimagecard homepageimagecard2">
                            <img class="w-100 image3" src="https://th.bing.com/th/id/OIP.3Z18dp5JaDepX8dlnn6XvAHaE8?w=276&h=184&c=7&r=0&o=5&dpr=1.5&pid=1.7" />
                        </div>
                        <div class="p-3 homepagetext">
                            <form action="login.php" method="post">
                            <a href="#sectiondetails" class="homepagecardlargetext" onclick="display('sectiondetails')">Know Your Prescriptions 
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                            </form>
                            <p class="homepagecardsmalltext">Use Pescribed Medicines</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <div>
                        <div class="homepageimagecard homepageimagecard3">
                            <img class="w-100 image3" src="https://th.bing.com/th/id/OIP.CVQOvp06FAXpVYPUfWoN9gHaE8?w=244&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"/>
                        </div>
                        <div class="p-3 homepagetext">
                            <a href="#sectiondetails1" class="homepagecardlargetext" onclick="display('sectiondetails1')">Know Your Reports
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                            <p class="homepagecardsmalltext">Cure disease</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="sectiondoctor">
        <div class="doctorsectionback">
        <div class="d-flex flex-row justify-content-end ">
            <button class="btn btn-primary" onclick="display('sectionhome')">Home</button>
        </div>
        <div>
            <div class="card1 d-flex flex-row">
                <img src="https://img.freepik.com/free-photo/portrait-doctor_144627-39387.jpg?w=360&t=st=1695554055~exp=1695554655~hmac=7fd0231a98021f3351873dc0a036bcb57bbd9c2d5b6a7c6994aba10f5bb0c0b0" class="img1" />
                <div class="contentcontainer">
                    <h1 class="h1">Dr.Jyoshna Pratty</h1>
                    <p class="paragraph1">Dermatologist.16 Years Exp.</p>
                    <p class="paragraph2">MBBS,MRCP (UK),P.G Diploma in Medical Toxicology,MRCP(Acute Medicine)</p>
                    <p class="paragraph3">Price: 200/- at clinic 300/- online</p>
                    <p class="paragraph4">@Address: Coastal Poly Clinic,Visakhapatnam</p>
                    <p class="paragraph5">?Next Available Slot: 05:00 PM - 07:00 PM,MON</p>
                    <h4 class="h4">@See all Timings</h4>
                    <div class="d-flex flex-row justify-content-end">
                        <button class="btn3" onclick="display('sectionbooking')">Book Appointment</button>
                    </div>
                </div>
            </div>
            <div class="card1 d-flex flex-row">
                <img src="https://img.freepik.com/free-photo/portrait-smiling-handsome-male-doctor-man_171337-5055.jpg?size=626&ext=jpg&ga=GA1.1.355241524.1695554023&semt=sph" class="img1" />
                <div class="contentcontainer">
                    <h1 class="h1">Dr.Abdul D Khan</h1>
                    <p class="paragraph1">Dermatologist.14 years Experience</p>
                    <p class="paragraph2">MBBS,FRCS,P.G Diploma in Medical Toxicology,MRCP(Acute Medicine)</p>
                    <p class="paragraph3">Price: 400/- at clinic 600/- online</p>
                    <p class="paragraph4">@Address: Apoorva Clinic,Visakhapatnam</p>
                    <p class="paragraph5">?Next Available Slot: 02:00 PM - 07:00 PM,TUE</p>
                    <h4 class="h4">@See all Timings</h4>
                    <div class="d-flex flex-row justify-content-end">
                        <button class="btn3" onclick="display('sectionbooking')">Book Appointment</button>
                    </div>
                </div>
            </div>
            <div class="card1 d-flex flex-row">
                <img src="https://img.freepik.com/free-photo/young-woman-doctor-with-stethoscope-hospital_1303-20691.jpg?size=626&ext=jpg&ga=GA1.1.355241524.1695554023&semt=sph" class="img1" />
                <div class="contentcontainer">
                    <h1 class="h1">Dr.Anita Kolukula</h1>
                    <p class="paragraph1">Dermatoligist.24 Years Exp.</p>
                    <p class="paragraph2">MBBS</p>
                    <p class="paragraph3">Price: 600/- at clinic 800/- online</p>
                    <p class="paragraph4">@Address: Apollo Hospitals,Visakhapatnam</p>
                    <p class="paragraph5">?Next Available Slot: 02:00 AM - 07:00 AM,WED</p>
                    <h4 class="h4">@See all Timings</h4>
                    <div class="d-flex flex-row justify-content-end">
                        <button class="btn3" onclick="display('sectionbooking')">Book Appointment</button>
                    </div>
                </div>
            </div>
            <div class="card1 d-flex flex-row">
                <img src="https://img.freepik.com/free-photo/woman-with-stethoscope-holding-clipboard_1098-2502.jpg?size=626&ext=jpg&ga=GA1.1.355241524.1695554023&semt=sph" class="img1" />
                <div class="contentcontainer">
                    <h1 class="h1">Dr.Tippala Anusha</h1>
                    <p class="paragraph1">Dermatologist.13 Years Exp.</p>
                    <p class="paragraph2">MBBS,M.S Gold Medalist</p>
                    <p class="paragraph3">Price: 400/- at clinic 500/- online</p>
                    <p class="paragraph4">@Address: Apollo Hospitals,Visakhapatnam</p>
                    <p class="paragraph5">?Next Available Slot: 04:00 AM - 06:00 PM,THU</p>
                    <h4 class="h4">@See all Timings</h4>
                    <div class="d-flex flex-row justify-content-end">
                        <button class="btn3" onclick="display('sectionbooking')">Book Appointment</button>
                    </div>
                </div>
            </div>
            <div class="card1 d-flex flex-row">
                <img src="https://img.freepik.com/free-photo/businesswoman-short-hair-specialist-frustrated-touching_1134-975.jpg?size=626&ext=jpg&ga=GA1.1.355241524.1695554023&semt=sph" class="img1" />
                <div class="contentcontainer">
                    <h1 class="h1">Dr.Manchala Ramesh Kumar</h1>
                    <p class="paragraph1">Dermatologist.23 yers Exp.</p>
                    <p class="paragraph2">MBBS,M.S</p>
                    <p class="paragraph3">Price: 600/- at clinic 800/- online</p>
                    <p class="paragraph4">@Address: Foot Care Hospitals,Visakhapatnam</p>
                    <p class="paragraph5">?Next Available Slot: 02:00 AM - 06:00 PM,FRI</p>
                    <h4 class="h4">@See all Timings</h4>
                    <div class="d-flex flex-row justify-content-end">
                        <button class="btn3" onclick="display('sectionbooking')">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="sectionbooking">
        <div class="appoint">
            <h1 class="h4">Clinic Visit Slots</h1>
            <div>
                <h6>Purpose of visit</h6>
                <input type="text" placeholder="Enterpurpose" class="inputbar" />
                <p>Consultation</p>
            </div>
            <div class="d-flex flex-row">
                <button class="btn4">Today</button>
                <button class="btn4">Tomorrow</button>
            </div>
            <div class="d-flex flex-row">
                <button class="btn6" onclick="appointment()">11:00 AM</button>
                <button class="btn6" onclick="appointment()">11:15 AM</button>
                <button class="btn6" onclick="appointment()">11:30 AM</button>
                <button class="btn6" onclick="appointment()">11:45 AM</button>
            </div>
            <button onclick="display('sectiondoctor')">back</button>
        </div>
    </div>
    </div>
</div>

<div id="sectionsignupform">
<div class="loginform d-flex flex-row justify-content-center">
    <div class="loginforminner ">   
        <div class="loginformheading">
          <h1 class="text-center">Sign Up</h1>
        </div>
        <form action="signup.php" method="post">
          <div>
            <label for="name">Name:</label>
            <input type="text" 
            id="name" placeholder="Enter name" autocomplete="off" name="name">
          </div>
          <br/>
          <div>
            <label for="phno">Phno:</label>
            <input type="text" 
            id="phno" placeholder="Enter phno" autocomplete="off" name="phno">
          </div>
          <br/>
          <div>
            <label for="email">Email:</label>
            <input type="email" 
            id="email" placeholder="Enter Email" autocomplete="off" name="email">
          </div>
          <br/>
          <div>
            <label for="password">Password:</label>
            <input type="password"
            id="password" placeholder="Enter password" autocomplete="off" name="password">
          </div>
          <br/>
          <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" 
            id="cpassword" placeholder="Enter Confirm password" autocomplete="off" name="cpassword">
          </div>
          <button type="submit" class="btn btn-success w-100 my-3" name="signup">Sign up</button>
        </form>
        </div>
    <p style="color:white; font-size:30px;"> Already signin please login</p>
    <div>
   <a href="#sectionloginform" <button class="loginbutton " style="font-size:30px;" onclick="display('sectionloginform')">login</button></a> 
</div>
    </div>
</div>
</body>
</html>
</div>
<div id="sectionloginform">
<div class="loginform d-flex flex-row justify-content-center">
<div class="loginforminner ">
        <div class="loginformheading ">
    <p> Login Form</p>
        </div>
<form action="login.php" method="post">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" 
            id="name" placeholder="Enter name" autocomplete="off" name="name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" 
            id="password" placeholder="Enter password" autocomplete="off" name="password">
        </div>
        <button type="submit" class="btn btn-success w-100" name="login">Login</button>
        </form>
</div>
</div>
</div>
<div id="sectiondetails">
    <div class="loginform d-flex flex-row justify-content-center">
    <div class="loginforminner ">
        <form>
            <div class="loginformheading ">
        <p> Enter Details</p>
    </div>
        <label for="name">Name :</label>
        <input name="name" type="text" placeholder="Enter your Name"/>
        <br/>
        <br/>
        <label for="password">password:</label>
        <input name="name" type="password" placeholder="Enter your password"/>
        <br/>
        <div style="text-align: center;">
       <a href="#section-prescription-page" <button class="loginbutton" onclick="display('section-prescription-page')">Submit</button></a>
    </div>
    </form>
    </div>
</div>
</div>
<div id="sectiondetails1">
    <div class="loginform d-flex flex-row justify-content-center">
    <div class="loginforminner ">
        <form>
            <div class="loginformheading ">
        <p> Enter Details</p>
    </div>
        <label for="name">Name :</label>
        <input name="name" type="text" placeholder="Enter your Name"/>
        <br/>
        <br/>
        <label for="password">password:</label>
        <input name="name" type="password" placeholder="Enter your password"/>
        <br/>
        <div style="text-align: center;">
       <a href="#section-reports-page" <button class="loginbutton" onclick="display('section-reports-page')">Submit</button></a>
    </div>
    </form>
    </div>
</div>
</div>

<div id="section-reports-page">
    <div class="d-flex flex-row flex-card-presc">
        <div>
            <img src="https://img.freepik.com/free-photo/portrait-doctor_144627-39387.jpg?w=360&t=st=1695554055~exp=1695554655~hmac=7fd0231a98021f3351873dc0a036bcb57bbd9c2d5b6a7c6994aba10f5bb0c0b0" class="img-presc1"/>
        </div>
        <div class="matter">
            <p class="h">Reports by Dr.Jyoshna Pratty</p>
            <p class="para1">Date:12/03/2021</p>
            <p class="para1">Time:11:45 AM</p>
            <p class="para1">Purpose: Heavy Body pains</p>
            <button class="btn btn-primary" onclick="display('section-page3')">view Reports</button>
        </div>
    </div>
    <div class="d-flex flex-row flex-card-presc">
        <div>
            <img src="https://img.freepik.com/free-photo/portrait-smiling-handsome-male-doctor-man_171337-5055.jpg?size=626&ext=jpg&ga=GA1.1.355241524.1695554023&semt=sph" class="img-presc1"/>
        </div>
        <div class="matter">
            <p class="h">Reports by Dr.D. Abdul Khan</p>
            <p class="para1">Date:20/08/2021</p>
            <p class="paragraph1">Time:11:00 AM</p>
            <p class="para1">Purpose: High Fever</p>
            <button class="btn btn-primary" onclick="display('section-page2-card2')">view Reports</button>
        </div>
    </div>
   <div>
    <button class="btn btn-primary" onclick="display('sectionhome')">Back</button>
</div>
</div>
<div  id="section-page3">
    <div class="d-flex flex-column page21">
<div>
    <p class="para2">Report Details</p>
    <img src="https://images.drlogy.com/assets/uploads/lab/image/mri%20liver%20report%20format%20-%20drlogy.webp" class="img2"/>
</div>
<div>
    <button class="btn btn-primary button" onclick="display('section-reports-page')">Back</button>
</div>
</div>
</div>
<div id="section-page2-card2">
    <div class="d-flex flex-column page21">
    <div>
        <p class="para2">Report Details</p>
        <img src="https://onlinelibrary.wiley.com/cms/asset/0083dd6f-d0be-404c-a2bb-fff3e7b5b004/agm212100-fig-0001-m.jpg" class="img2"/>
    </div>
    <div>
        <button class="btn btn-primary button" onclick="display('section-reports-page')">Back</button>
    </div>
    </div>
    </div>
    </div>
    <div id="section-prescription-page">
        <div class="d-flex flex-row flex-card-presc">
            <div>
                <img src="https://img.freepik.com/free-photo/portrait-doctor_144627-39387.jpg?w=360&t=st=1695554055~exp=1695554655~hmac=7fd0231a98021f3351873dc0a036bcb57bbd9c2d5b6a7c6994aba10f5bb0c0b0" class="img-presc1"/>
            </div>
            <div class="matter">
                <p class="h">Prescribed by Dr.Jyoshna Pratty</p>
                <p class="para1">Date:12/03/2021</p>
                <p class="para1">Time:11:45 AM</p>
                <p class="para1">Purpose: Heavy Body pains</p>
                <button class="btn btn-primary" onclick="display('section-page2')">view prescription</button>
            </div>
        </div>
        <div class="d-flex flex-row flex-card-presc">
            <div>
                <img src="https://img.freepik.com/free-photo/portrait-smiling-handsome-male-doctor-man_171337-5055.jpg?size=626&ext=jpg&ga=GA1.1.355241524.1695554023&semt=sph" class="img-presc1"/>
            </div>
            <div class="matter">
                <p class="h">Prescribed by Dr.D. Abdul Khan</p>
                <p class="para1">Date:20/08/2021</p>
                <p class="paragraph1">Time:11:00 AM</p>
                <p class="para1">Purpose: High Fever</p>
                <button class="btn btn-primary" onclick="display('section-page2-card3')">view prescription</button>
            </div>
        </div>
       <div>
        <button class="btn btn-primary" onclick="display('sectionhome')">Back</button>
    </div>
    </div>
    <div  id="section-page2">
        <div class="d-flex flex-column page21">
    <div>
        <p class="para2">Prescription Details</p>
        <img src="https://i.ibb.co/JFFy0XL/img1.png" class="img2"/>
    </div>
    <div>
        <button class="btn btn-primary button" onclick="display('section-prescription-page')">Back</button>
    </div>
    </div>
    </div>
    <div id="section-page2-card3">
        <div class="d-flex flex-column page21">
        <div>
            <p class="para2">Prescription Details</p>
            <img src="https://i.ibb.co/3CFVFhq/img4.png" class="img2"/>
        </div>
        <div>
            <button class="btn btn-primary button" onclick="display('section-prescription-page')">Back</button>
        </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>

</body>

</html>