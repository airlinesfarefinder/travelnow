

<style>


#cruise_banner {
  position: relative;
  display: block;
  width: 100%;
  padding-bottom: 30px;
}

#cruise_banner .head {
  position: relative;
  display: block;
  width: 100%;
  background: #6a11cb;
  padding: 16px;
  text-transform: capitalize;
  text-align: center;
  font-size: 18px;
  color: #fff;
  font-weight: 600;
}

#cruise_banner .banner {
  position: relative;
  display: block;
  width: 100%;
  height: 250px;
  background-position: top center;
  background-repeat: no-repeat;
  background-size: cover;
}

#cruise_banner .featured_lines {
  position: relative;
  display: block;
  width: 100%;
  text-align: center;
  padding: 10px;
}

#cruise_banner .featured_lines .line {
  position: relative;
  display: inline-block;
  padding: 7px 15px;
  background: #ffb700;
  border-radius: 5px;
  font-size: 15px;
  font-weight: 600;
  width: auto;
  margin-top: -1px;
}

#cruise_banner .cta {
  position: relative;
  display: block;
  width: 100%;
  text-align: center;
}

#cruise_banner .cta .title {
  position: relative;
  display: block;
  width: 100%;
  text-align: center;
  font-size: 17px;
  font-weight: 600;
}

#cruise_banner .cta .blink_title {
  font-size: 16px;
  color: #b31b4f;
  font-weight: 800;
  margin: 8px 0px;
  position: relative;
  display: block;
}

.call_button {
  position: relative;
  display: flex;
  justify-content: center; /* Horizontal center */
  align-items: center; /* Vertical center */
  gap: 15px;
  width: 100%;
  /* background: linear-gradient(45deg, #0072a5, #002634); */
background: linear-gradient(45deg, #6a11cb, #2575fc);

  padding: 15px 20px;
  border: none;
  text-align: left;
  box-shadow: 1px 4px 7px -1px #00000094;
}

.call_button .icon {
  width: 50px;
  height: 50px;
  background: url("../img/popup/phone-call.png") center/contain no-repeat;
  flex-shrink: 0;
}

.call_button .text {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.call_button .text h3 {
  font-size: 14px;
  color: #fff;
  margin: 0;
  text-transform: capitalize;
}

.call_button .text p {
  font-size: 25px;
  color: #fff;
  margin: 5px 0 0 0;
  font-weight: 700;
}

.blink {
  animation: blink 1s ease-in-out infinite;
}

@keyframes blink {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

#cruise_banner .gutter {
  padding: 10px;
}

#cruise_banner .call_button {
  border-radius: 25px;
}

#cruise_banner .outrow {
  position: relative;
  display: block;
  width: 100%;
  text-align: center;
  padding: 10px 20px;
  font-size: 15px;
  font-weight: 600;
  color: #2d2d2d;
}

#cruise_banner .pills {
  position: relative;
  display: block;
  width: 100%;
  padding: 0 15px;
  margin: 0;
  list-style: none;
}

#cruise_banner .pills li {
  position: relative;
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  background: #6a11cb;
 
  border-radius: 12px;
  margin: 10px 0;
  padding-left: 40px;
  color: #fff;
}

#cruise_banner .pills li::after {
  content: "";
  position: absolute;
  top: 13px;
  left: 15px;
  width: 7px;
  height: 12px;
  border: 2px solid #ffb530;
  border-left: 0;
  border-top: 0;
  transform: rotate(45deg);
}

#call_now_btn {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
}

#call_now_btn .call_button {
  background: #c6d8f9;
  box-shadow: -1px -4px 7px -1px #00000094;
}

#call_now_btn .call_button h3 {
  color: #000;
}

#call_now_btn .call_button h3 span {
  background: #ffb700;
  padding: 7px;
  border: 1px solid #6f301c;
  border-radius: 7px;
}

#call_now_btn .call_button p {
  color: #000;
  font-weight: 800;
}


   #cruise_banner, #call_now_btn {
    display: none;
  }



  @media screen and (max-width: 768px) {
    #cruise_banner, #call_now_btn {
      display: block;
    }
  }
</style>


<div id="cruise_banner">
 
    <a href="tel:+1-888-556-2276"></a>
    <div class="head">Flight Reservation Helpline</div>
    <div class="banner" style="background-image:url('images/flight/support-banner.png'); "></div>
    <div class="featured_lines">
        <div class="line">Limited-Time Flight Deals | Last-Minute Getaways</div>
        <div class="line">Exciting Shore Adventures</div>
    </div>
    <div class="cta">
        <span class="title">No Wait Time – Talk to an Agent Instantly</span>
        <span class="blink_title blink">Tap to Book Your Ideal Flight!</span>
        <div class="gutter">
            <button class="call_button">
                <div class="icon animated_icon" style="background-image:url('./images/images/phone.gif')"></div>
                <div class="text">
                    <h3>exclusive call-only flight deals</h3>
                    <p>+1-888-556-2276</p>
                </div>
            </button>
        </div>
        <p class="outrow">Speak with Our Flight Specialists to Save Up to 60% on Destinations Like Alaska, the Caribbean, Europe & More!</p>
    </div>
    <ul class="pills">
        <li>All-Inclusive Vacation Packages</li>
        <li>Gourmet Dining & Onboard Shows</li>
        <li>Land Excursions & Guided Tours</li>
        <li>Round-the-Clock Assistance</li>
        <li>Flexible Payment Methods</li>
    </ul>
</div>

<div id="call_now_btn" 

style="
z-index: 9999; 
position: fixed; bottom: 0; left: 0; width: 100%; 
 justify-content: center; align-items: center; 
">
    <button class="call_button"  >
        <div class="icon animated_icon" style="background-image:url('./images/images/call-ezgif.com-resize.gif');background-size:120%"></div>
        <div class="text">
            <h3>Sail with <span>upto 60%</span> Flight Deals !</h3>
            <p>+1-888-556-2276</p>
        </div>
    </button>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const banner = document.getElementById("cruise_banner");

        if (banner) {
            banner.addEventListener("click", function() {
                const link = banner.querySelector("a");
                if (link) {
                    link.click();
                }
            });
        }
    });
</script>