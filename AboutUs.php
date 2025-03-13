<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <!-- Font Awesome CDN-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="about1.css" />
    <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  font: bolder;
}
body{
    background-image: url("black.jpg");
}
section {
  height: 50vh;
  width: 100%;
  display: grid;
  place-items: center;
}
.row {
  display: flex;
  flex-wrap: wrap;
}
.column {
  width: 100%;
  padding: 0 1em 1em 1em;
  text-align: center;
}
.card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.3s;
}
h3 {
  font-size: 30px;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
}
h1 {
  font-size: 50px;
  font-weight: 800;
  color:#000;
  margin: 1em 0;
}


p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
}
.icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
}
.card:hover {
  background-position: 0 100%;
}
.card:hover .icon-wrapper {
  background-color: #ffffff;
  color: #2c7bfe;
}
.card:hover h3 {
  color: #ffffff;
}
.card:hover p {
  color: #f0f0f0;
}
@media screen and (min-width: 768px) {
  section {
    padding: 0 2em;
  }
  .column {
    flex: 0 50%;
    max-width: 50%;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em 3em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
  }
}
  </head>
  </style>
<body>
    <section>
      <div class="row">
        <h1 class="section-heading">About Us</h1>
      </div>
        <p>Gone are the days when people used to stand in lines and wait patiently for their turn to book a bus.
            Not just bus booking, every sector needed a way to book tickets. 
            Now everything is done online right from buying clothes, accessories, groceries, flight tickets, and even bus tickets. 
            Booking bus tickets is the same as train and flight tickets booking. 
            If you want to know further reasons why booking bus tickets online is important, then
             go through the below list of advantages which you get while doing online bus booking.</p><br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
      
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fa fa-book"></i>
            </div>
            <h3>MISSION</h3> 
            <p>
                The main objective of a bus reservation system is to provide better work efficiency, security, accuracy, reliability, and feasibility. 
                The error occurrence could be reduced to nil and working conditions can be improved.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-globe"></i>
            </div>
            <h3>VISION</h3>
            <p>
                With the above advantages, you could have probably concluded why online bus booking is not only cheap but also safe. 
                You feel relaxed as you don't have to rush to the bus stand and stand in a queue to get a bus booking done. 
                So, travel hassle-free with online bus booking.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-book"></i>
            </div>
            <h3>VALUES</h3>
            <p>
                There were long queues to book tickets that were time-consuming as well as tiring. 
                Booking tickets via telephone was a difficult task because the telephone line remains either out of service or busy most of the time. 
                But the time has changed. There are plenty of luxurious buses available now, 
                providing the best and efficient services to the customers.
            </p>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>