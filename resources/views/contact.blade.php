@include('layouts._head')
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Contact Us</h2>
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; Contact</p>
    </div>
  </div>
</section>

<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            
            <div class="row cont-main-top">
               
                <!-- contact address -->
                <div class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">
                           <div class="cont-add-rgt">
                                <h4>Address:</h4>
                                <p><i><b>{{$data['address'][0]['key']}}</i></b></p>
                                <p class="contact-text-sub">{{$data['address'][0]['value']}}</p>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="cont-add">
                           <div class="cont-add-rgt">
                                <p><i><b>{{$data['address'][2]['key']}}</i></b></p>
                                <p class="contact-text-sub">{{$data['address'][2]['value']}}</p>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="cont-add">
                           <div class="cont-add-rgt">
                                <p><i><b>{{$data['address'][1]['key']}}</i></b></p>
                                <p class="contact-text-sub">{{$data['address'][1]['value']}}</p>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                            </div>
                        </div>
                        {{-- <div class="cont-add add-2">
                            <div class="cont-add-rgt">
                                <h4>Email:</h4>
                                <a href="mailto:{{$data['topnav'][1]}}">
                                    <p class="contact-text-sub">{{$data['topnav'][1]}}</p>
                                </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="cont-add">
                           <div class="cont-add-rgt">
                                 <h4>Phone:</h4>
                                 <a href="tel:{{$data['topnav'][0]}}">
                                    <p class="contact-text-sub">{{$data['topnav'][0]}}</p>
                                 </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="cont-add add-3">
                           
                            <div class="cont-add-rgt">
                                 <h4>Find Us On</h4>
                                 <div class="main-social-1 mt-2">
                                    @foreach($data['social_media_link'] as $row)
                                    <a href="{{$row['value3']}}" class="{{$row['value']}}"><span class="fa fa-{{$row['value']}}"></span></a>
                                    @endforeach
                                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="cont-add-lft">
                               
                           </div>
                        </div> --}}
                    </div>
                </div>
                <!-- //contact address -->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">
                   
                    <form action="#" method="" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Name" name="w3lName" id="w3lName" required="">
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                        </div>
                        <input type="text" placeholder="Phone Number" name="w3lName" id="w3lName" required="">
                        <textarea placeholder="Message" name="w3lMessage" id="w3lMessage" required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-theme2">Submit Now</button>
                        </div>
                    </form>
                </div>
                <!-- //contact form -->
            </div>
        </div>
        <!-- map -->
        <div class="map">
            <iframe src="{{$data['map'][0]['value']}}" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
@include('layouts._foot')