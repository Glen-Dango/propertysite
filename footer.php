


<footer class="section footer-classic context-dark bg-image" style="color:white; background: #080c42;;">

        <div class="container">

          <div class="row row-30">

            <div class="col-md-4 col-xl-5">
              <div style="height:5px;font-size:15px;">&nbsp;</div> <!-- space between logo and top of div -->
              <div class="pr-xl-4">
                <a class="brand" href="index.html"><img class="brand-logo-light" src="/xml_files1/xmlimages/boardnn"  alt="" width="160"  ></a> <br><br>
                <p style="color:white">Williams Estate Agents Sell Property Across: Hereford, Worcester, Malvern, Leominster, Ledbury, Gloucestershire, Monmouthshire.</p>
                <!-- Rights-->
                

                <a class="more " href="https://www.facebook.com/WilliamsEstateAgentsHereford/" target="_blank">
<img src="/xml_files1/xmlimages/face" alt="heart" width="30" height="20" > Property Alerts </a>
              </div>
              <br>
            </div>


            <div style="color:white" class="col-md-4">
              <h5>Head Office</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>Williams HQ, Perseverance Road,  Hereford, HR4 9SE</dd>
              </dl>
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a style="color:#F87E0B"; href="mailto:#">contact@williamsestateagents.co.uk</a></dd>
              </dl>
              <dl class="contact us">
                <dt>Contact Numbers:</dt>
                <dd><a style="color:#F87E0B "; href="tel:#">0333 27 50 30</a> <span>or</span> <a style="color:#F87E0B"; href="tel:#">01432 277734</a>
                </dd>
              </dl>
            </div>


            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a style="color:#F87E0B"; href="#chapter3" >About</a></li>
                <li><a style="color:#F87E0B"; href="#chapter4" >Free Valuations</a></li>
                <li><a style="color:#F87E0B"; href="wordpress_api.php" >News</a></li>
                <li><a style="color:#F87E0B"; href="#chapter4" >Contact Us</a></li>
                <li><a style="color:#F87E0B"; href="#chapter4" >Register For Property</a></li>
              </ul>
<br>
<p style="color:white; font-size:11px;     " class="rights"><span>©  </span><span> </span> <script>document.write(new Date().getFullYear())</script> Williams All Rights Reserved</p></span><span> </span><span></span></p>

            </div>

          </div>


        </div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  
<script>

//removes the on market ribbon

$( ".ribbon-wrapper-corner:contains('On Market')").hide();




 /////// this makes the navbar turn blue on scroll of page  ////////////
///////////////////////////////////////////////////////////////////////////////
$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 5px, adds/removes solid class
          if($(this).scrollTop() > 15) { 
              $('.navbar').addClass('solid');

              $('.nav-link').css('color','#FFFFFF');

          } else {
              $('.navbar').removeClass('solid');

              $('.nav-link').css('color','#ffffff');

          }
        });
});

</script>


<script>

/////////////// makes collapse open navbar change colour on click. /////////////
$(".navbar-toggler").click(function(){
$("nav").toggleClass("navbar-click");
})




</script>

<script>


///wobble effect on mortgage button

class HoverButton {
  constructor(el) {
    this.el = el;
    this.hover = false;
    this.calculatePosition();
    this.attachEventsListener();
  }
  
  attachEventsListener() {
    window.addEventListener('mousemove', e => this.onMouseMove(e));
    window.addEventListener('resize', e => this.calculatePosition(e));
  }
  
  calculatePosition() {
    gsap.set(this.el, {
      x: 0,
      y: 0,
      scale: 1
    });
    const box = this.el.getBoundingClientRect();
    this.x = box.left + (box.width * 0.5);
    this.y = box.top + (box.height * 0.5);
    this.width = box.width;
    this.height = box.height;
  }
  
  onMouseMove(e) {
    let hover = false;
    let hoverArea = (this.hover ? 0.7 : 0.5);
    let x = e.clientX - this.x;
    let y = e.clientY - this.y;
    let distance = Math.sqrt( x*x + y*y );
    if (distance < (this.width * hoverArea)) {
       hover = true;
        if (!this.hover) {
          this.hover = true;
        }
        this.onHover(e.clientX, e.clientY);
    }
    
    if(!hover && this.hover) {
      this.onLeave();
      this.hover = false;
    }
  }
  
  onHover(x, y) {
    gsap.to(this.el,  {
      x: (x - this.x) * 0.4,
      y: (y - this.y) * 0.4,
      scale: 1.15,
      ease: 'power2.out',
      duration: 0.4
    });
    this.el.style.zIndex = 10;
  }
  onLeave() {
    gsap.to(this.el, {
      x: 0,
      y: 0,
      scale: 1,
      ease: 'elastic.out(1.2, 0.4)',
      duration: 0.7
    });
    this.el.style.zIndex = 1;
  }
}

const btn1 = document.querySelector('li:nth-child(1) button1');
new HoverButton(btn1);








</script>



  </body>
  </html>
