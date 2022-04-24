@extends("layouts.app")
@section("content")

 


  <div class="inner_section">

  <div class="inner_section_banner">
    <img style="width:100%;height:100%;" src="assets/images/inner-banner-4.jpg" alt="">
    <div class="banner_contant">
        <h1>Contact Us</h1>
        <span><a href="#">Home</a> / <a>Contact Us</a></span>
    </div>
  </div>


</div>

  
  <div class="inner_cnt_sec" style="margin-top: 50px;">
    <div class="container">
        

      <div class="row">
          <div class="col-md-5">
              <div class="contact_details_box">
                    <h2>Contact Details</h2>
                    <p>Get in touch with us for any questions about our<br> industries or projects.</p>

                    <div class="contact_left_cnt_box">

                        <div class="contact_left_cnt_box_row">
                            <div class="contact_left_cnt_box_ico"><i class="fa fa-map-marker"></i></div>
                           <strong>Shalcos Manufactures LLP</strong>
                            <br> Kinfra, Taliparamba,<br> Kannur, kerala 670142, India.
                        </div>
                        <div class="contact_left_cnt_box_row">
                          <div class="contact_left_cnt_box_ico"><i class="fa fa-phone"></i></div>
                         +91 9107006644
                      </div>
                      <div class="contact_left_cnt_box_row">
                        <div class="contact_left_cnt_box_ico"><i class="fa fa-envelope"></i></div>
                       info@shalcos.com
                    </div>

                    </div>

                    <div class="contact_left_cnt_box_soc_sec">
                      <div class="top_social_sec">
                        <a href="#"><div class="top_social_sec_ico"><img src="assets/images/whatapp.png" alt=""></div></a>
                        <a href="#"><div class="top_social_sec_ico"><img src="assets/images/youtube.png" alt=""></div></a>
                          <a href="#"><div class="top_social_sec_ico"><img src="assets/images/insta.png" alt=""></div></a>
                          <a href="#"><div class="top_social_sec_ico"><img src="assets/images/facebook.png" alt=""></div></a>
                      </div>
                    </div>

              </div>
          </div>

          <div class="col-md-7" style="border: solid 1px #e5e5e5;">
           
          <p  id="msgSubmit">   </p>
          @if(session()->has('success'))
          <div class="alert alert-success">
            {!! session('success') !!}
          </div>                
          @endif
          <!--
            @if ( $errors->any())            
              @foreach($errors->all() as $error)
            <p style="color:red"> {{$error}}</p>           
              @endforeach 
              @endif-->         

           <form id="enq_from" method="POST"  action="/contact" >            
           {{ csrf_field() }}
           <!-- or use this token <input type="hidden" name="_token" value="{{ csrf_token() }}"--> 
          
              <div class="contact_right_sec">
                <h2>Send a Message</h2>
                <div class="row">
                  <div class="col-md-6">
                      <div class="estimate_section_box">
                        <label for="inp" class="inp">
                          <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="&nbsp;">
                          <span class="label">Your Name</span>
                          @if($errors->has('name'))
                              <div class="error" style="color:red">{{ $errors->first('name') }}</div>
                          @endif
                          <span class="focus-bg"></span>
                         
                        </label>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="estimate_section_box">
                      <label for="inp1" class="inp">
                        <input type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="&nbsp;">
                        <span class="label">Your Phone</span>
                        @if($errors->has('phone'))
                              <div class="error" style="color:red">{{ $errors->first('phone') }}</div>
                          @endif
                        <span class="focus-bg error"></span>
                      </label>
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="estimate_section_box">
                    <label for="inp2" class="inp">
                      <input type="text" name="email" id="email" value="{{old('email')}}" placeholder="&nbsp;">
                      <span class="label">Your Email</span>
                      @if($errors->has('email'))
                              <div class="error" style="color:red">{{ $errors->first('email') }}</div>
                          @endif
                      <span class="focus-bg"></span>
                    </label>
                  </div>
              </div>
              <div class="col-md-12">
                <div class="estimate_section_box">
                  <label for="inp3" class="inp">
                    <input type="text" name="message" id="message" value="{{old('message')}}" placeholder="&nbsp;">
                    <span class="label">Your Message</span>
                    @if($errors->has('message'))
                              <div class="error" style="color:red">{{ $errors->first('message') }}</div>
                          @endif
                    <span class="focus-bg"></span>
                  </label>
                </div>
            </div>

            <div class="col-md-12">
              <!--captcha div-->
            <div class="g-recaptcha" data-sitekey="6LdimpkfAAAAAGMyUTcMokGMj9Rc50FKNpDgRJKc"></div>
            <!--captcha div-->
            <button type="button" onclick="submitform()" class="submit_btn_sec sana">SUBMIT</button>
              <input type="submit" class="submit_btn_sec contact_frm" name="submit" value="submit">
             <!-- <a href="#"><div onclick="submitform()" class="submit_btn_sec sana">SUBMIT</div></a>
            captcha vdo-  https://www.youtube.com/watch?v=4cr85kvM8I0


            captcha
            sitekey: 6LezSZkfAAAAAHp-xuSQs0D95mRWBZmfrzcKb5qo
            secretkey: 6LezSZkfAAAAAPSsfW4F5SIFbdQlqnwe6Y8npNSA
            -->
              
            </div>
   
              </div>
              </div>
        </form>


          </div>

      </div>




    </div>




  </div>


 
  <div class="contact_map_container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.127706698484!2d75.40416051481317!3d12.103408791429622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90a78405bd76a250!2zMTLCsDA2JzEyLjMiTiA3NcKwMjQnMjIuOSJF!5e0!3m2!1sen!2sin!4v1637124135853!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>


@endsection
