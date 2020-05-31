<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://use.fontawesome.com/1fe55a52b0.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<nav class="navbar navbar-light bg-light ">
  <a class="navbar-brand text-color-2" href="index.php">George Schena</a>
  <div class="navbar-right">
    <a class="navbar-item text-color-2" href="posts.php">Posts</a>
  </div>
</nav>

<div class="position-relative overflow-hidden p-md-1 text-center jumbotron-dark-blue-background">
  <div class="col-md-5 p-lg-5 mx-auto my-5 jumbotron-dark-blue-background">
    <h1 class="display-4 font-weight-normal text-color-1">Hey I'm George Schena</h1>
    <p class="lead font-weight-normal text-color-1">Documenting my career through the technology industry</p>
    <a class="btn btn-outline-secondary" href="mailto:georgeschena@hotmail.com">Contact me</a>
    <div class="pt-3">
      <a class="fa fa-github fa-2x icon-colour pr-2" aria-hidden="true" href="https://github.com/georgeschena" target="_blank"></a>
      <a class="fa fa-linkedin-square fa-2x icon-colour pr-2" aria-hidden="true" href="https://www.linkedin.com/in/george-schena/" target="_blank"></a>
      <a class="fa fa-instagram fa-2x icon-colour" aria-hidden="true" href="https://www.instagram.com/georgeschena/" target="_blank"></a>
    </div>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="position-relative overflow-hidden p-md-1 mb-4 text-center jumbotron-white-background ">
  <div class="col-md-10 p-lg-5 mx-auto my-2">
    <p class="font-weight-normal text-color-2">
      As a passionate polyglot software engineer I want to build software that directly impacts the users and improves their lives.
      I love constantly learning as well as learning from more experienced engineers in my field, as well as
      striving to become a better
      engineer everyday.
      <br>
      I have worked across a number of large scale projects affecting tens of thousands of users across multiple
      areas ranging from GovWifi
      which is used across every government building in England to MHCLG which is redefining the way users view
      their Domestic Energy Performance Certificates.
      <br>
      As a polyglot engineer I provide the ability to be dropped into any problem and be able to adapt and
      earn the domain and technical knowledge
      in a short space of time, in order to deliver value for the client from day one.
    </p>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="container-fluid">
  <div class="row mb-4">
    <div class="col-2">
      <img src="./images/mhclg.png" class="align-self-start mr-3 img-thumbnail">
    </div>
    <div class="col-10">
      <h5 class="mt-0 text-color-3">Ministry of Housing, Communities and Local Government</h5>
      <h6>Energy Performance of Buildings Register (EPC): April 2020 - Present</h6>
      <p>A large scale data migration leveraging AWS's Snowball to transfer data using our own reusable ETL pipeline for the transfer of data.
        As part of this we also developed a range of new micro-services in order to for the old system to interact with the new system to allow for a seamless gradual changeover.</p>
      <h6>Technology Used:</h6>
      <ul>
        <li>AWS</li>
        <li>Ruby</li>
        <li>Ruby on Rails</li>
        <li>Sinatra</li>
      </ul>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-2">
      <img src="./images/nhs.png" class="align-self-start mr-3 img-thumbnail">
    </div>
    <div class="col-10">
      <h5 class="mt-0 text-color-3">National Health Service</h5>
      <h6>NHS COVID-19 Virtual Visit: April 2020 - April 2020 (1 week)</h6>
      <p>Part of a small team to deliver a virtual conferencing application for the NHS to allow COVID-19 patients to see and speak
        to their loved ones outside of hospital. Leveraging the NHS design system we created a branded NHS application
        which was used across 50 wards in the United Kingdom. This project was done for free to help with the COVID-19 pandemic.
      </p>
      <h6>Technology Used:</h6>
      <ul>
        <li>Heroku</li>
        <li>JavaScript</li>
        <li>Next.js</li>
      </ul>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-2">
      <img src="./images/moj.png" class="align-self-start mr-3 img-thumbnail">
    </div>
    <div class="col-10">
      <h5 class="mt-0 text-color-3">Ministry of Justice UK</h5>
      <h6>Money to Prisoners Service: Feb 2020 - April 2020 (3 months)</h6>
      <p>Joining the HMPPS Prisoner Money team and Integrating with the existing MoJ development team we focused on how to
        allow prisoners to send and receive money and allow officers to monitor transactions from both parties,
        and allowing them to reject and approve transactions through our system. Requirements ranged from putting
        a spending cap on the virtual bank account for prisoners to allowing fraud prevention agencies to analyse where
        fraud may be taking place within these systems and stop it as well as further features to extend the application.</p>
      <h6>Technology Used:</h6>
      <ul>
        <li>AWS</li>
        <li>Python</li>
        <li>Django</li>
        <li>Kubernetes</li>
      </ul>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-2">
      <img src="./images/hackney.png" class="align-self-start mr-3 img-thumbnail">
    </div>
    <div class="col-10">
      <h5 class="mt-0 text-color-3">London Borough of Hackney</h5>
      <h6>Hackney Manage Arrears System: Aug 2019 - Jan 2020 (6 months)</h6>
      <p>Developing and maintaining an existing Hackney Manage arrears system,
        developed with multiple micro services written in Ruby and C#.
        As well as conducting constant user research to improve the existing
        system to meet the needs of its many users.</p>
      <h6>Technology Used:</h6>
      <ul>
        <li>AWS</li>
        <li>Ruby</li>
        <li>Ruby on Rails</li>
        <li>C#</li>
      </ul>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-2">
      <img src="./images/gds.png" class="align-self-start mr-3 img-thumbnail">
    </div>
    <div class="col-10">
      <h5 class="mt-0 text-color-3">Government Digital Service</h5>
      <h6>GovWifi: Jul 2018 - Jun 2019 (1 year)</h6>
      <p>Rewrote GovWifi from a PHP monolith to a Ruby based set of micro-services, alongside working with the Government Digital Service (GDS)
        we developed the authentication system which used FreeRADIUS to allow staff and visitors to use a single user login to connect to GovWifi
        across multiple government and public sector organisations. As part of this we also developer an administration system with Ruby on Rails
        to allow organisations to manage their infrastructure, team and users.</p>
      <h6>Technology Used:</h6>
      <ul>
        <li>AWS</li>
        <li>Ruby</li>
        <li>Ruby on Rails</li>
        <li>PHP</li>
      </ul>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container-fluid dark-blue-background py-4">
    <span class="text-color-1">Thanks for visiting</span>
  </div>
</footer>
