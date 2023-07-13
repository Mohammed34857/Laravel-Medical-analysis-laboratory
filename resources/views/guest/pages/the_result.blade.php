<x-guest-layout>
        <link rel="stylesheet" href="/guest/CSS/result.css">
        <link rel="stylesheet" href="/guest/CSS/cc.css">


        <div id="Subhead">
            <div class="container">
                    <h1>نتيجة التحاليل</h1>
                    <ul>
                            <li>نتيجة التحليل</li>
                            <i class="fa-solid fa-angle-left"
                                    style="color: rgba(255, 255, 255, 0.5);padding-left: 10px;"></i>
                            <li><a href="laboratory.html"
                                            style=" text-decoration: none; text-transform: capitalize;color: aliceblue;">الرئيسية</a>
                            </li>
                    </ul>
            </div>
    </div>

    <div class="the-content">

            <div class="imi"><img src="guest/image/h22-min.jpg" alt=""></div>

            <h2 class="rr">نتائج تحاليل الأفراد</h2>
            <form action method="post" name="get-ruslet">
                    <input type="hidden" name="Etqan-form-count-num" value="1">
                    <p> ":كود العميل"</p>

                    <input id="etqan-user-code" name="etqan-user-code" value type="text">
                    <p> " :كلمة المرور"</p>

                    <input name="etqan-user-password" id="etqan-user-password" value type="password">

                    <!-- <button type="submit" class="ShowTheResult">  إظهار النتيجة </button> -->
                    <a href="Analysis_result.html" class="ShowTheResult" style="text-decoration:none;margin-left: 100px;">إظهار النتيجة</a>
            </form>

    </div>
</x-guest-layout>
