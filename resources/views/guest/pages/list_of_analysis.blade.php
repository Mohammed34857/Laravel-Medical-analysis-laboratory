<x-guest-layout>
    <link rel="stylesheet" href="guest/CSS/cc.css">

    <x-slot name="title">
        ListOfAnalysis
    </x-slot>


     <div id="Subheader">
        <div class="container" id="cl">
            <h1>قائمة التحاليل</h1>
            <ul>
                <li>قائمة التحاليل</li>
                <i class="fa-solid fa-angle-left" style="color: rgba(255, 255, 255, 0.5);padding-left: 10px;"></i>
                <li><a href="laboratory.html">الرئيسية</a>
                    <i class="fa-solid fa-house" style="color: rgba(255, 255, 255, 0.5);padding-left: 10px;"></i>
                </li>
            </ul>
          </div>
    </div>

<div>
    <div class="section mcb-section   ">
        <div class="column-mcb-column-one ">
            <div class="question"  onclick="toggle_show_or_hide(1)">
                <div class="title" id="t1"><span class="num">1</span>
                    <i class="fa-solid fa-plus" id="f1"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل الفحص الشامل

                </div>
            </div>
            <div class="answer" id="ans1">
                <img src="guest/image/complete analysis.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        وتشمل مجموعة من التحاليل الطبية يتم عملها دوريا ( كل ستة اشهر ) وهى كما يلى :
                        <br><br>
                        - وظائف الكبد SGOT , SGPT <br>
                        - وظائف الكلى Urea , Creatinine <br>
                        - صورة دم CBC <br>
                        - سكر صائم FBS <br>
                        - سرعة ترسيب ESR <br>
                        - املاح النقرس Uric Acid <br>
                        - تحليل بول Urine Analysis <br>
                        - دهنيات الدم كاملة Lipid profile <br>
                    </p>
                    <a href="Analysis_information" class="Show"> عرض المزيد </a>
                </div>
            </div>

            <div class=" question" onclick="toggle_show_or_hide(2)">
                <div class="title" id="t2"><span class="num">2</span>
                    <i class="fa-solid fa-plus" id="f2"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل مرض السكر
                </div>
            </div>
            <div class="answer" id="ans2">
                <img src="guest/image/Sugar analysis.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        - سكر صائم FBS <br>
                        - سكر بعد الاكل 2hrPP <br>
                        - الهيموجلوبين السكرى HBA1C <br>
                        - منحنى السكر Glucose curve <br>
                        - الميكروالبيومينوريا Microalbuminuria <br>
                    </p>
                    <a href="Analysis_information.html#d2" class="Show"> عرض المزيد </a>
                </div>
            </div>


            <div class="question" onclick="toggle_show_or_hide(3)">
                <div class="title" id="t3"><span class="num">3</span>
                    <i class="fa-solid fa-plus" id="f3"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل وظائف الكبد
                </div>
            </div>
            <div class="answer" id="ans3">
                <img src="guest/image/Liver function analysis.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>

                        Bilirubin (Total + Direct) + <br>
                        ALT (SGPT) + AST (SGOT) + <br>
                        PT +Albumin + GGT + <br>
                        Total Protein + Alkaline Phosphatase
                    </p>
                    <a href="Analysis_information.html#d3" class="Show"> عرض المزيد </a>
                </div>
            </div>
            <div class="question" onclick="toggle_show_or_hide(4)">
                <div class="title" id="t4"><span class="num">4</span>
                    <i class="fa-solid fa-plus" id="f4"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل وظائف الكلى
                </div>
            </div>
            <div class="answer" id="ans4">
                <img src="guest/image/Renal function analysis.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>

                        Creatinine + Urea + Uric acid + Urine analysis + Sodium and Potassium
                    </p>
                    <a href="Analysis_information.html#d4" class="Show"> عرض المزيد </a>
                </div>
            </div>
            <div class="question" onclick="toggle_show_or_hide(5)">
                <div class="title" id="t5"><span class="num">5</span>
                    <i class="fa-solid fa-plus" id="f5"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل وظائف القلب
                </div>
            </div>
            <div class="answer" id="ans5">
                <img src="guest/image/Cardiac function analysis.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        إنزيم كرياتين فوسفو كاينيز (Creatine phosphokinase)<br>
                        إنزيم أسبرتات أمينو ترانسفيراز (Aspartate Amino Transferase – AST)
                        <br>تروبونين (Troponin)
                        <br>5- ميوجلوبين (Myoglobin)
                    </p>
                    <a href="Analysis_information.html#d5" class="Show"> عرض المزيد </a>
                </div>
            </div>
        </div>

        <div class="column-mcb-column-two">

            <div class="question" onclick="toggle_show_or_hide(6)">
                <div class="title" id="t6"><span class="num">6</span>
                    <i class="fa-solid fa-plus" id="f6"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل املاح ومعادن جسم الانسان
                </div>
            </div>
            <div class="answer" id="ans6">
                <img src="guest/image/electrolyte.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        الصوديوم Sodium – Na+
                        <br>البوتاسيوم Potassium K+
                        <br>الكلوريد Chloride – CL.
                        <br>الكالسيوم Calcium Ca++
                        <br>الفوسفور غير العضوي Inorganic Phosphorus.
                        <br>الماغنسيوم Magnesium – Mg++
                    </p>
                    <a href="Analysis_information.html#d6" class="Show"> عرض المزيد </a>
                </div>
            </div>
            <div class=" question" onclick="toggle_show_or_hide(7)">
                <div class="title" id="t7"><span class="num">7</span>
                    <i class="fa-solid fa-plus" id="f7"></i>
                    <i class="fa-solid fa-minus"></i>
                    دهنيات الدم
                </div>
            </div>
            <div class="answer" id="ans7">
                <img src="guest/image/Blood lipids.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        كوليستيرول + الدهون الثلاثية + كوليستيرول منخفض الكثافة + كوليستيرول مرتفع الكثافة
                        Total Cholesterol + Triglycerides + HDL + LDL
                    </p>
                    <a href="Analysis_information.html#d7" class="Show">عرض المزيد </a>
                </div>
            </div>



            <div class="question" onclick="toggle_show_or_hide(8)">
                <div class="title" id="t8"><span class="num">8</span>
                    <i class="fa-solid fa-plus" id="f8"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل سيولة الدم
                </div>
            </div>
            <div class="answer" id="ans8">
                <img src="guest/image/Blood fluidity.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        - سرعة النزف Bleeding time (BT) <br>
                        - سرعة التجلط Clotting time (CT) <br>
                        - سيولة الدم Prothrombin time (PT) <br>
                        - تخسر الدم Partial Thromboplastin Time (PTT) <br>
                        - عدد الصفائح Platelets count <br>
                        - مستوى الفيبرينوجين Fibrinogen Level <br>
                        - مستوى Fibrinogen Degradation Products <br>
                    </p>
                    <a href="Analysis_information.html#d8" class="Show"> عرض المزيد</a>
                </div>
            </div>
            <div class="question" onclick="toggle_show_or_hide(9)">
                <div class="title" id="t9"><span class="num">9</span>
                    <i class="fa-solid fa-plus" id="f9"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل الباثولوجي
                </div>
            </div>
            <div class="answer" id="ans9">
                <img src="guest/image/Pathological analysis.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        -عينات مأخوذة من انسجة بالجسم وتحتاج الى فحصها للتأكد من عدم وجود اورام بها(Biopsy) <br>
                        - سوائل مسحوبة من الجسم وتحتاج الى فحصها للتأكـــد من عـــــدم وجــــود أورام بهـــا
                        (Cytology) <br>
                        - شرائح مرسلة للفحص من عنق الرحم (PAPsmear) <br>
                        - شـــرائح مرسلــة وقــد تــم فــحصهــا سابقـــا مـــن طبيب آخــــر ومطلـــــوب رأى
                        المعمـــل
                        فيهـــــا(Consultation) <br>
                        - شرائــــح مرســـلة غير مصبوغـة أو بلوكات شمــع ومطلـــوب صبغات مناعــية لخلايــا
                        الاورام
                        (Immunohistochemistry) <br>
                    </p>
                    <a href="Analysis_information.html#d9" class="Show"> عرض المزيد </a>
                </div>
            </div>
            <div class="question" onclick="toggle_show_or_hide(10)">
                <div class="title" id="t10"><span class="num">10</span>
                    <i class="fa-solid fa-plus" id="f10"></i>
                    <i class="fa-solid fa-minus"></i>
                    تحاليل الوراثة
                </div>
            </div>
            <div class="answer" id="ans10">
                <img src="guest/image/Genetics analysis.jpg" class="immg" alt="">
                <div class="img-body">
                    <p>
                        كروموزومات الدم Blood Chromosomes <br>
                        كروموزومات الانسجة Tissue Karyotyping <br>
                        احماض امينية بالدم Aminogram in plasma <br>
                        احماض امينية بالبول Aminogram in urine <br>
                        فيلادلفيا كروموسوم Philadilphia chromosome <br>
                    </p>
                    <a href="Analysis_information.html#d10" class="Show"> عرض المزيد </a>
                </div>
            </div>


        </div>
    </div>
</div>
</x-guest-layout>
