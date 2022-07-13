@extends('user.app.layout')
@section('title', 'Home page')
@section('content')
<div class="image">
    <div class="container">
        <div class="title">
         <div class="row">
            <div class="col-lg-7">
             <h1 class="header">We help you to inquire about the results of your medical tests. </h1> 
                <p class="paragraph">
                     <small> The Medical Lab Manager website helps you to make inquiries about your tests faster and in an organized manner.
                      So that it is easy for you to access the results of the analyzes that you conducted at any time so that it is added to your file through the host of the medical laboratory in which you conducted the examination</small>
                </p>
                </div>
            </div>
        </div>
    </div>
 </div>
 <br>
 <br>
 <br>
 <div id="about_section">
  <br>
  <br>
 <div class="about_us">
    <h1 class="header" >About Us</h1>
    <div class="container">
        <div class="row">
           <div class="col-lg-7 mb-3">
            <img  data-aos="fade-right" src="/images/about_us.png" alt=""width="80%">
           </div>
           <div class="col-lg-5 mb-3">
            <div><h4> The medical laboratory website</h4></div>
            <div><h6>produced by a company sgosoft, is the first Palestinian website that organizes and facilitates the process of displaying test results</h6></div>
            <div><h6>as it includes a large group of laboratories in various cities.</h6></div>
           </div>
        </div>
    </div>
 </div>
 <div class="clients">
 <h1 class="header">Our Clients</h1>
  <div class="container">
    <div class="row">
    <div class="col-2"><img class="img1" src="/images/medicalone.jpg" ></a> </div>
    <div class="col-2"><img class="img2" src="/images/medicaltwo.jpg" ></a></div>
    <div class="col-2"><img class="img3" src="/images/medicalthree.png" ></a></div>
    <div class="col-3"><img class="img4" src="/images/medicalfour.png" ></a></div>
    <div class="col-3"><img class="img5" src="/images/medicalfive.jpg" ></a></div>
    </div>
  </div>
</div>
</div>

 <div id="contact_section">
  <div class="container">
    <br>
    <br>
    <br>
    <div class="col-12 text-center">
            <h1>Contact Us</h1>
    </div>
    <div class="img_contact">
        <div class="contact shadow p-3 mb-5 bg-body rounded">
        <form action="#" method="POST">
          <div class="row">
            <h3 class="text-black mb-1">Contact Form</h3>
          </div>
           <div class="row">
             <div class="col-md-6 mb-3">
               <label for="first_name">First name</label>
               <input type="text"name="first_name" class="form-control rounded-0" placeholder="Abd">
               @error('first_name')
                 <div class="text-danger text-sm">{{$message}}</div>
               @enderror
             </div>
             <div class="col-md-6 mb-3">
               <label for="last_name">Last name</label>
               <input type="text" name="last_name" class="form-control rounded-0"  placeholder="Sawalha" >
               @error('last_name')
                  <div class="text-danger text-sm">{{$message}}</div>
               @enderror
             </div>
           </div>
          <div class="row">
             <div class="col-md-12 mb-3">
               <label for="email">Email</label>
               <input type="text" name="email" class="form-control rounded-0"  placeholder="@mail">
               @error('email')
                 <div class="text-danger text-sm">{{$message}}</div>
               @enderror
             </div>
          </div>
          <div class="row">
           <div class="col-md-12 mb-3">
               <label for="subject">Subject</label>
               <input type="text" name="subject" class="form-control rounded-0"  placeholder="Subject">
                @error('subject')
                  <div class="text-danger text-sm">{{$message}}</div>
                @enderror
             </div>
           </div>
           <div class="row">
           <div class="col-md-12 mb-3">
               <label class="text-black" for="message">Message</label> 
               <textarea name="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Leave your message here..."></textarea>
               @error('message')
                 <div class="text-danger text-sm">{{$message}}</div>
                @enderror
              </div>
           </div>
           <div class="row">
               <div class="col-md-12 mb-3">
                <button class="btn btn-primary rounded-pill"  type="button" >Submit form</button>
               </div>
           </div>
         </form>
       </div>
       <br>
     </div>
    </div>
   </div>
@endsection