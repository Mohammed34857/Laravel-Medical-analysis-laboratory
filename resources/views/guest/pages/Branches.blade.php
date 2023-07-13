<x-guest-layout>


    <link rel="stylesheet" href="/guest/css/Branches.css">
    <link rel="stylesheet" href="/guest/css/Styel.css">
    <x-slot name="title">
      Branches
    </x-slot>

    <x-slot name="masterheader">
          <x-master-header/>
     </x-slot>

     <div id="parent">

        <div class="content" id="cont" ></div>
           <div class="content-text" id="cont_t">

             <h1 > فروعنا </h1>
             <hr>
             <h3> نقدم لكم جميع مخابرنا لتأمين التواصل السريع بين المواطن والمخبر </h3>

          </div>
     </div>



 <section class="cards" id="cardss">


             <div >
                 <div class="card">
                   <h1> في حلب </h1>
                   <div class="icon_arrow"  onclick="toggleContent(1)">
                     <i class="fa-sharp fa-solid fa-arrow-down fa-2xl" id="down2" style="color: #093c95;"></i>

                 </div>
             </div>
             <div class="Lab_content" id="lab1">
                     <a href="#" class="lin"> مخبر د.ريم كرزه </a>
                     <a href="#" class="lin"> مخبر خليل عثمان </a>
                     <a href="#" class="lin"> مخبر د. منى عنجْريني </a>
                     <a href="#" class="lin"> المخبر العلمي </a>
                     <a href="#" class="lin"> مخبر بريمو </a>
                     <a href="#" class="lin"> مخبر الحمدانية </a>
                     <a href="#" class="lin"> مخبر ابن سينا - حلب </a>
                     <a href="#" class="lin"> مخبر د. نريمان الناصر </a>
                     <a href="#" class="lin">  مخبر د. سامر عزيزي </a>
                     <a href="#" class="lin"> مخبر الكمال للتحاليل الطبية </a>
             </div>
         </div>



         <div >
             <div class="card">
                 <h1> في دمشق </h1>
                 <div class="icon_arrow" onclick="toggleContent(2)">
                     <i class="fa-sharp fa-solid fa-arrow-down fa-2xl" id="down2" style="color: #093c95;"></i>
                 </div>
             </div>
             <div class="Lab_content" id="lab2">
                     <a href="lab" > مخبر القطرنجي </a>
                     <a href="lab" > مخبر د. غسان منصور  </a>
                     <a href="lab" > مخبر تسابحجي </a>
                     <a href="lab" > مخبر المرادي </a>
                     <a href="lab" > مخبر الفا </a>
                     <a href="lab" >  مخبر الهيثم </a>
                     <a href="lab" > مخبر الواحدي </a>
                     <a href="lab" > مخبر سابا </a>
                     <a href="lab" > مخبر الشعلان </a>
                     <a href="lab" > مخبر رياض شلهوب </a>
             </div>
         </div>


 </section>


</x-guest-layout>
