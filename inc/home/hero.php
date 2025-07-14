<style>
    #hero{
        margin:70px 0px;
 position:relative;
      display: block;
    }

.hero_container{
    position:relative;
      display: block;
    background:url('./images/images/sonia-nadales-iTYVXGu-ArM-unsplash.jpg');
    background-repeat: no-repeat;
    background-position:top center;
    background-size: cover;
    width:100%;
    min-height:300px;
    border-radius: 7px;
}


.hero_overlay {
    position: absolute;
    top: 50%;
    left: 60px;
    transform: translateY(-50%);
    color: #000000;
    font-weight: bold;
    padding: 14px 31px;
    z-index: 1;
}


 /* .hero_overlay {
   position: absolute;
    bottom: 38%;
    left: 60px;
    color: #000000;
    font-weight: bold;
    padding: 14px 31px;
    z-index: 1;



    
  } */

  .day{
     font-size:20px;
     font-weight:bold;
     color:white;
  }

  .fly{
 font-size:30px;
     font-weight:bold;
    color:white;
  }

  .view{
          padding: 9px 5px;
    background-color: rgb(209 62 60);
    cursor: pointer;
    text-align: center;
    font-size: 20px;
    border-radius: 8px;
    color:white;
    font-weight: bolder;
  }

  .hero_overlay a:hover{
        text-decoration: none;
  }

    @media (max-width: 767px) {
 .hero_overlay {
   position: absolute;
   display: block;
    bottom: 10%;
    right: 20%;
    color: #000000;
    font-weight: bold;
    padding: 5px 10px;
    z-index: 1;
  }

    }

</style>

<div id="hero">
    <div class="container-fluid">
        <div class="hero_container">

        </div>

 <div class="hero_overlay">
              <p class="day">Cheapest days</p>
              <p class="fly">to fly in 2025</p>
          <a href="tel:(877) 694-3693">   <p class="view">Call Now</p></a> 
            </div>
    </div>
</div>