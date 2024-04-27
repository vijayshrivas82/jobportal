<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="companies.css">
    </head>
    <body>
        <div class="background-image">
        <div class="search-wrapper">
            <div class="search-box">
                <div class="search-card">
                    <input class="search-input" type="text" placeholder="Job title or keywords">
                    <button class="search-button">Search</button>
                </div>
            </div>
        </div>
        <!-- Filter Box -->
      
         <div class="filter-dropdown">
            <select class="filter-select" id="job-level" name="job-level">
                
            <option>Job Level</option>
                <option>Entry</option>
                <option>Mid-senior</option>
                <option>Director</option>
            </select>
            <select class="filter-select" id="job-function" name="job-function">
                <option>Job Function</option>
                <option>IT</option>
                <option>CS</option>
                <option>Management</option>
                <option>Education</option>
            </select>
            <select class="filter-select" id="employment" name="employment">
                <option>Employment Type</option>
                <option>Internship</option>
                <option>Part Time</option>
                <option>Full Time</option>
            </select>
            <select class="filter-select" id="location" name="location">
                <option>Location</option>
                <option>Remote</option>
                <option>US</option>
                <option>UK</option>
            </select>
            <select class="filter-select" id="education" name="education">
                <option>Education</option>
                <option>High School</option>
                <option>Bachelor's Degree</option>
                <option>Master's Degree</option>
            </select>
        </div>
       </div>
    </body>
    <style>
        .background-image{
            background-image: url('https://images.pexels.com/photos/3861972/pexels-photo-3861972.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            width: 1500px;
            height: 1500px;
        }
        
    </style>
    <div>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('path/to/background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #000a0a;
        }

        header {
            background-color: rgba(89, 172, 244, 0.7);
            padding: 1em;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        section {
            padding: 2em;
            text-align: center;
        }

        .company-info {
            max-width: 800px;
            margin: 0 auto;
        }

        .company-logo {
            width: 150px;
            height: auto;
            border-radius: 50%;
            border: 2px solid #0b0000;
            margin-bottom: 1em;
            transition: transform 0.5s ease-in-out;
        }

        .company-logo:hover {
            transform: rotate(360deg);
        }

        .company-description {
            font-size: 1.5em;
            margin-bottom: 2em;
        }

        .mission-statement {
            font-size: 1.2em;
            color: #060000;
            margin-bottom: 2em;
        }

        .section-title {
            font-size: 2em;
            color: #120101;
            margin-bottom: 1em;
        }

        .btn-contact {
            display: inline-block;
            padding: 0.8em 1.5em;
            background-color: #060000;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .btn-contact:hover {
            background-color: #333;
            color: #000000;
        }

        /* Animation for the header text */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        header h1 {
            animation: fadeInUp 1s ease-out;
        }
    </style>
</head>
<body>

    <header>
        <h1>Your Company</h1>
    </header>

    <section>
        <div class="company-info">
            <img src="https://images.freecreatives.com/wp-content/uploads/2015/04/logo007.png" alt="Company Logo" class="company-logo">
            <p class="company-description">Welcome to Your Company! We are dedicated to delivering high-quality products and services to our clients.</p>
            <p class="mission-statement">Our mission is to empower businesses through innovative solutions, fostering growth and success in an ever-evolving digital landscape.</p>
        </div>
    </section>

    <section>
        <div class="company-info">
            <h2 class="section-title">Our Services</h2>
            <p>We offer a wide range of services tailored to meet the unique needs of our clients. From web development to digital marketing, we've got you covered.</p>
        </div>
    </section>

    <section>
        <div class="company-info">
            <h2 class="section-title">Contact Us</h2>
            <p>If you have any questions or would like to discuss how we can help your business, feel free to reach out to us.</p>
            <a href="#" class="btn-contact">Contact Us</a>
        </div>
    </section>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Portal</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                overflow-x: hidden;
            }
    
            header {
                background-color: #333;
                color: #fff;
                padding: 2em 1em;
                text-align: center;
                animation: fadeInDown 1s ease-out;
            }
    
            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            section {
                padding: 2em;
                text-align: center;
                animation: fadeInUp 1s ease-out;
            }
    
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            .job-listing {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 1em;
                justify-content: center;
                animation: fadeIn 1s ease-out;
            }
    
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
    
            .job-card {
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 1.5em;
                transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
                cursor: pointer;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                animation: fadeInJobCard 1s ease-out;
            }
    
            @keyframes fadeInJobCard {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            .job-card:hover {
                transform: scale(1.05);
            }
    
            .job-title {
                font-size: 1.5em;
                font-weight: bold;
                margin-bottom: 0.5em;
                color: #333;
            }
    
            .job-company {
                font-size: 1.2em;
                color: #555;
                margin-bottom: 0.5em;
            }
    
            .job-location {
                font-size: 1em;
                color: #777;
                margin-bottom: 1em;
            }
    
            .job-description {
                font-size: 1em;
                color: #444;
            }
    
            .apply-button {
                display: inline-block;
                margin-top: 1em;
                padding: 0.8em 1.5em;
                background-color: #333;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease-in-out;
                cursor: pointer;
            }
    
            .apply-button:hover {
                background-color: #555;
            }
    
            .company-list {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                margin-top: 2em;
                animation: bounceIn 2s ease-out;
            }
    
            @keyframes bounceIn {
                from {
                    opacity: 0;
                    transform: scale(0.5);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
    
            .company-list-item {
                margin: 0.5em;
                padding: 1em;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                animation: fadeInCompany 1s ease-out;
            }
    
            @keyframes fadeInCompany {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
    
            .company-list-item img {
                max-width: 100px;
                max-height: 50px;
                margin: 0 auto;
                border-radius: 4px;
            }
        </style>
    </head>
    <body>
    
        <header>
            <h1>Explore Exciting Job Opportunities</h1>
        </header>
    
        <section>
            <h2>Current Job Openings</h2>
            <div class="job-listing">
                <div class="job-card" onclick="showJobDetails('Frontend Developer', 'TechCo Innovations', 'New York, NY', 'Join our dynamic team and contribute to building innovative and user-friendly web applications.', 'Apply Now')">
                    <div class="job-title">Frontend Developer</div>
                    <div class="job-company">TechCo Innovations</div>
                    <div class="job-location">New York, NY</div>
                </div>
    
                <div class="job-card" onclick="showJobDetails('UX/UI Designer', 'DesignHub Solutions', 'San Francisco, CA', 'We are looking for a creative UX/UI designer to shape the user experience and design of our products.', 'Apply Now')">
                    <div class="job-title">UX/UI Designer</div>
                    <div class="job-company">DesignHub Solutions</div>
                    <div class="job-location">San Francisco, CA</div>
                </div>
    
                <div class="job-card" onclick="showJobDetails('Marketing Specialist', 'Digital Growth Agency', 'Los Angeles, CA', 'Exciting opportunity for a marketing specialist to drive growth and engagement through digital marketing strategies.', 'Apply Now')">
                    <div class="job-title">Marketing Specialist</div>
                    <div class="job-company">Digital Growth Agency</div>
                    <div class="job-location">Los Angeles, CA</div>
                </div>
            </div>
        </section>
    
        <section>
            <h2>Popular Companies</h2>
            <div class="company-list">
                <div class="company-list-item">
                    <img src="http://ww1.prweb.com/prfiles/2011/03/18/8219307/BlackRock_Logo.jpg" alt="Company 1 Logo">
                    <h1>
                        <a href="https://careers.blackrock.com/" target="_blank"> Blackrock</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="http://1000logos.net/wp-content/uploads/2016/11/New-Google-Logo.jpg" alt="Company 2 Logo">
                    <h1>
                        <a href="https://www.google.com/about/careers/applications/" target="_blank"> Google</a>
                    </h1>
                     
                </div>
                <div class="company-list-item">
                    <img src="https://lh5.googleusercontent.com/-Q6N-vTG04fI/TYpdRn-ArgI/AAAAAAAAMUI/Q9wAdNtXm-k/s1600/microsoft_logo20.gif" alt="Company 2 Logo">
                    <h1>
                        <a href="https://careers.microsoft.com/v2/global/en/home.html" target="_blank"> Microsoft</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://images.hdqwalls.com/wallpapers/amazon-4k-logo-qhd.jpg" alt="Company 4 Logo">
                    <h1>
                        <a href="https://www.amazon.jobs/en/teams/in"> Amazon</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://www.freepnglogos.com/uploads/facebook-logo-16.png" alt="Company 5 Logo">
                    <h1>
                        <a href="https://www.metacareers.com/areas-of-work/Facebook%20App/?p[divisions][0]=Facebook&divisions[0]=Facebook" target="_blank"> Facebook</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://logospng.org/download/apple/logo-apple-2048.png" alt="Company 6 Logo">
                    <h1>
                        <a href="https://www.apple.com/careers/in/" target="_blank"> Apple </a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://www.gannett-cdn.com/-mm-/526c32e3985b7d7a3a026753ab945435cbc0ceb5/c=0-38-768-472/local/-/media/USATODAY/test/2014/01/22/1390420312000-ibm-logo.jpg?width=3200&height=1680&fit=crop" alt="Company 7 Logo">
                    <h1>
                        <a href="https://www.ibm.com/in-en/careers" target="_blank"> IBM</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://logos-world.net/wp-content/uploads/2020/09/Oracle-Symbol.png" alt="Company 8 Logo">
                    <h1>
                        <a href="https://www.oracle.com/in/careers/" target="_blank"> Oracle</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://logodix.com/logo/4653.jpg" alt="Company 9 Logo">
                    <h1>
                        <a href="https://jobs.intel.com/en/search-jobs" target="_blank">Intel</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://1000logos.net/wp-content/uploads/2016/11/Cisco-logo.png" alt="Company 10 Logo">
                    <h1>
                        <a href="https://jobs.cisco.com/" target="_blank"> Cisco</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://companieslogo.com/img/orig/TCS.NS-7401f1bd.png?t=1631949260" alt="Company 11 Logo">
                     <h1>
                        <a href="https://www.tcs.com/careers" target="_blank"> Tata Consultancy Services</a>
                    </h1>
                    </span><br></h1>
                </div>
                <div class="company-list-item">
                    <img src="http://1.bp.blogspot.com/_AcBUSVxs82w/TIT5c_3PrpI/AAAAAAAAhLM/V6MJS1UZUQE/w1200-h630-p-k-no-nu/Infosys_Logo.jpg" alt="Company 12 Logo">
                    <h1>
                        <a href="https://career.infosys.com/joblist" target="_blank"> Infosys limited </a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://www.logolynx.com/images/logolynx/84/84eb24c8038d31cea10dda54f01fa90c.jpeg" alt="Company 13 Logo">
                    <h1>
                        <a href="https://jobs.capgemini.com/" target="_blank"> Capgemini</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://1000logos.net/wp-content/uploads/2021/09/Cognizant-Logo.jpg" alt="Company 13 Logo">
                    <h1>
                        <a href="https://careers.cognizant.com/in/en/" target="_blank"> Cognizant</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://boomi.com/wp-content/uploads/wipro-logo.jpg" alt="Company 14 Logo">
                    <h1>
                        <a href="https://careers.wipro.com/global-india#!" target="_blank"> Wipro</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://logosmarcas.net/wp-content/uploads/2020/06/Accenture-Logo.png" alt="Company 15 Logo">
                    <h1>
                        <a href="https://www.accenture.com/in-en/careers/jobsearch?jk=&vw=0&is_rj=0" target="_blank"> Accenture</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="http://www.cultjer.com/img/ug_photo/2016_09/76248820160921034356.jpg" alt="Company 16 Logo">
                    <h1>
                        <a href="https://jobs.netflix.com/intern-program" target="_blank"> Netflix</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://logos-world.net/wp-content/uploads/2020/11/Flipkart-Logo.png" alt="Company 17 Logo">
                    <h1>
                        <a href="https://www.flipkartcareers.com/#!/joblist" target="_blank"> Flipkart</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://1000logos.net/wp-content/uploads/2021/10/logo-Meta.png" alt="Company 18 Logo">
                    <h1>
                        <a href="https://www.meta.com/" target="_blank"> Meta</a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://seekvectorlogo.com/wp-content/uploads/2019/12/adani-group-vector-logo.png" alt="Company 19 Logo">
                    <h1>
                        <a href="https://www.adani.com/" target="_blank"> Adani group </a>
                    </h1>
                </div>
                <div class="company-list-item">
                    <img src="https://logos-world.net/wp-content/uploads/2020/11/Jio-Logo.png" alt="Company 20 Logo">
                    <h1>
                        <a href="https://www.jio.com/" target="_blank"> Jio </a>
                    </h1>
                </div>
                <div class="more">
                    <a href="login.html">more</a>
                </div>
                
            </div>
        </section>
    
        <div id="jobDetailsModal" style="display: none;">
            <div>
                <h2 id="jobTitleModal"></h2>
                <p id="jobCompanyModal"></p>
                <p id="jobLocationModal"></p>
                <p id="jobDescriptionModal"></p>
                <a id="applyButtonModal" class="apply-button" href="#" target="_blank">Apply Now</a>
                <button onclick="closeJobDetails()">Close</button>
            </div>
        </div>
    
        <script>
            function showJobDetails(title, company, location, description, applyText) {
                document.getElementById('jobTitleModal').innerText = title;
                document.getElementById('jobCompanyModal').innerText = `Company: ${company}`;
                document.getElementById('jobLocationModal').innerText = `Location: ${location}`;
                document.getElementById('jobDescriptionModal').innerText = description;
                document.getElementById('applyButtonModal').innerText = applyText;
                document.getElementById('applyButtonModal').href = `mailto:jobs@${company.replace(/\s/g, '').toLowerCase()}.com?subject=Applying for ${title} position`;
                document.getElementById('jobDetailsModal').style.display = 'block';
            }
    
            function closeJobDetails() {
                document.getElementById('jobDetailsModal').style.display = 'none';
            }
        </script>
    
    </body>
    

</body>
</html>

    </div>
</html>
