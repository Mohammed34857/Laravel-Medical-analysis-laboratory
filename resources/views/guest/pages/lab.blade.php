<x-guest-layout>

    <link rel="stylesheet" href="/guest/css/Branches.css">

    {{-- <label for="checkbox">
        <input id="checkbox" type="checkbox"  onchange="toggleNightMode()">
        <span class="check"></span>
    </label> --}}

    {{-- <div id="loginWindow" class="login">
        <div class="login_form">
            <button id="close_bt"><i class="fa-solid fa-close"></i></button>
        <h2 id="loginText">تسجيل الدخول</h2>
        <form action="">
        <div class="input_group"><i class="fa-solid fa-user"></i>
            <input
            type="text"
            placeholder="اسم المستخدم"
            class="input_text"
            autocomplete="off"
            >
        </div>
        <div class="input_group"><i class="fa-solid fa-unlock"></i>
            <input
            type="password"
            placeholder="كلمة المرور"
            class="input_text"
            autocomplete="off"
            >
        </div>
        <button class="button_group" id="login_butt" type="submit">تسجيل</button>
        <div class="fotter">
            <a href=""> هل نسيت كلمة المرور ?</a>
            <a href=""> انشاء حساب </a>
        </div>
       </form>
    </div> --}}


    <section id="ss" class="s">


    </section>

 <section id="card" class="cards">

         <div class="info">
           <div class="card_lab" >
            <img src="guest/image/مخبركروة.jpg" alt="">
           </div>
           <button id="loginButton" onclick="login_Button()">تسجيل الدخول</button>
         </div>

       <div>
             <div class="card_lab">
                 <!-- <h1>  الموقع </h1> -->
                  <p><b>مخبر د.ريم كرزه</b><br>عنوان المخبر: الإسماعيلية - مقابل مشفى فريْشو</p>
                 <div class="icon_arr">
                   <i class="fa fa-map-marker fa-2xl"></i>
               </div>
             </div>
              <div class="card_lab">
                 <h1 style="padding-bottom: 20px; margin-bottom: 10px; "> الهاتف <br> 0212262227</h1>
                 <div class="icon_arr" >
                   <i class=" fa fa-phone fa-2xl" ></i>
               </div>
              </div>
       </div>
      <div class="info">
       <div class="card_lab" id="analys">

         <ul><h2>التحاليل المتوفرة بالمخبر:</h2>

               <li>  تحاليل الفحص الشامل</li>
               <li> تحاليل مرض السكر</li>
               <li>تحاليل وظائف الكبد</li>
               <li>تحاليل وظائف الكلى</li>
               <li> تحاليل املاح و معادن</li>
       </ul>
         <div class="icon_arr" id="icon1">
           <i class=" fa fa-bars fa-2xl" ></i>
       </div>
       </div>
      </div>
 </section>



</x-guest-layout>



