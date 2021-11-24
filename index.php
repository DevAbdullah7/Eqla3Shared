<?php

 include_once 'template/header.php';
include "classes/Service.php";
include "classes/Upload.php";
$service = new Service;
$date = date('Ym');
$upload = new Upload('upload'.$date);

 ?>
<div class="sectionsContainer">
 <div class="section IT">
  <div class="shap">
   <i class="fa fa-microchip" aria-hidden="true"></i>
  </div>
  <div class="description">
   <p class="sectionTitle">تقنية المعلومات</p>
   <p class="sectionDescription">كل مايخص تقنية المعلومات تجده هنا</p>
  </div>
  <div class="actionCallBtn">
   <a href="pages/IT/informationTech.html">تصفح المواضيع</a>
  </div>
 </div>
 <div class="section DB">
  <div class="shap">
   <i class="fa fa-database" aria-hidden="true"></i>
  </div>
  <div class="description">
   <p class="sectionTitle">قواعد البيانات</p>
   <p class="sectionDescription">كل مايخص قواعد البيانات تجده هنا</p>
  </div>
  <div class="actionCallBtn">
   <a href="pages/database/database.html">تصفح المواضيع</a>
  </div>
 </div>
 <div class="section NET">
  <div class="shap">
   <i class="fa fa-server" aria-hidden="true"></i>
  </div>
  <div class="description">
   <p class="sectionTitle">الشبكات</p>
   <p class="sectionDescription">كل مايخص الشبكات تجده هنا</p>
  </div>
  <div class="actionCallBtn">
   <a href="pages/networks/networks.html">تصفح المواضيع</a>
  </div>
 </div>
 <div class="section C++ cpp">
  <div class="shap">
   <i class="fa fa-code" aria-hidden="true"></i>
  </div>
  <div class="description">
   <p class="sectionTitle">++C</p>
   <p class="sectionDescription">كل مايخص لغة البرمجة ++C تجده هنا</p>
  </div>
  <div class="actionCallBtn">
   <a href="pages/c++/c++.html">تصفح المواضيع</a>
  </div>
 </div>
 <div class="section WIN">
  <div class="shap">
   <i class="fa fa-windows" aria-hidden="true"></i>
  </div>
  <div class="description">
   <p class="sectionTitle">Windows</p>
   <p class="sectionDescription">كل مايخص نظام التشغيل Windows تجده هنا</p>
  </div>
  <div class="actionCallBtn">
   <a href="pages/windows/windows.html">تصفح المواضيع</a>
  </div>
 </div>
 <div class="section LIN">
  <div class="shap">
   <i class="fa fa-linux" aria-hidden="true"></i>
  </div>
  <div class="description">
   <p class="sectionTitle">Linux</p>
   <p class="sectionDescription">كل مايخص نظام التشغيل Linux تجده هنا</p>
  </div>
  <div class="actionCallBtn">
   <a href="pages/linux/linux.html">تصفح المواضيع</a>
  </div>
 </div>
</div>
</div>
</div>
<div class="lastNewsPage" id="lastNews">
 <div class="lastNewsContent" dir="rtl">
  <div class="lastNewsInfo">
   <div class="infoContent">
    <h3>اخر الاخبار</h3>
   </div>
   <div class="websiteControls">
    <a href="#sections" class="fa fa-arrow-right" aria-hidden="true"></a>
    <a href="#contact" class="fa fa-arrow-left" aria-hidden="true"></a>
   </div>
  </div>
  <div class="lastNewsContainer">
   <div class="lastNewsSection lastNewsIT">
    <div class="lastNewsDetail">
     <div class="lastNewsControls">
      <i class="fa fa-arrow-right" aria-hidden="true" id="lastNewsPrev"></i>
      <i class="fa fa-arrow-left" aria-hidden="true" id="lastNewsNext"></i>
     </div>
    </div>
    <div class="lastNewsSecContent" id="IT">
     <div class="subInfo">
      <div class="subImg"><i class="fa fa-microchip" aria-hidden="true"></i></div>
      <div class="subTitle">تقنية المعلومات</div>
     </div>
     <div class="subContent">
      <table>
       <thead>
       <tr>
        <th class="subTitle">الموضوع</th>
        <th class="subWriter">الكاتب</th>
        <th class="subDate">تاريخ النشر</th>
       </tr>
       </thead>
       <tbody>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       </tbody>
      </table>
     </div>
     <a href="./pages/IT/informationTech.html" class="subActionCall">اكمل قراءة القسم ...</a>
    </div>
    <div class="lastNewsSecContent" id="DB">
     <div class="subInfo">
      <div class="subImg"><i class="fa fa-database" aria-hidden="true"></i></div>
      <div class="subTitle">قواعد البيانات</div>
     </div>
     <div class="subContent">
      <table>
       <thead>
       <tr>
        <th class="subTitle">الموضوع</th>
        <th class="subWriter">الكاتب</th>
        <th class="subDate">تاريخ النشر</th>
       </tr>
       </thead>
       <tbody>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>
        <td class="subWriter">
         subject writer
        </td>
        <td class="subDate">
         subject date
        </td>
       </tr>
       <tr>
        <td class="subTitle">
         <a href="./subject.html">subject title</a>
        </td>

<td class="subWriter">
 subject writer
</td>
<td class="subDate">
 subject date
</td>
</tr>
<tr>
 <td class="subTitle">
  <a href="./subject.html">subject title</a>
 </td>
 <td class="subWriter">
  subject writer
 </td>
 <td class="subDate">
  subject date
 </td>
</tr>
</tbody>
</table>
</div>
<a href="./pages/database/database.html" class="subActionCall">اكمل قراءة القسم ...</a>
</div>
<div class="lastNewsSecContent" id="NET">
 <div class="subInfo">
  <div class="subImg"><i class="fa fa-server" aria-hidden="true"></i></div>
  <div class="subTitle">الشبكات</div>
 </div>
 <div class="subContent">
  <table>
   <thead>
   <tr>
    <th class="subTitle">الموضوع</th>
    <th class="subWriter">الكاتب</th>
    <th class="subDate">تاريخ النشر</th>
   </tr>
   </thead>
   <tbody>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   </tbody>
  </table>
 </div>
 <a href="./pages/networks/networks.html" class="subActionCall">اكمل قراءة القسم ...</a>
</div>
<div class="lastNewsSecContent" id="CPP">
 <div class="subInfo">
  <div class="subImg"><i class="fa fa-code" aria-hidden="true"></i></div>
  <div class="subTitle">++C</div>
 </div>
 <div class="subContent">
  <table>
   <thead>
   <tr>
    <th class="subTitle">الموضوع</th>
    <th class="subWriter">الكاتب</th>
    <th class="subDate">تاريخ النشر</th>
   </tr>
   </thead>
   <tbody>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   </tbody>
  </table>
 </div>
 <a href="./pages/c++/c++.html" class="subActionCall">اكمل قراءة القسم ...</a>
</div>
<div class="lastNewsSecContent" id="WIN">
 <div class="subInfo">
  <div class="subImg"><i class="fa fa-windows" aria-hidden="true"></i></div>
  <div class="subTitle">Windows</div>
 </div>
 <div class="subContent">
  <table>
   <thead>
   <tr>
    <th class="subTitle">الموضوع</th>
    <th class="subWriter">الكاتب</th>
    <th class="subDate">تاريخ النشر</th>
   </tr>
   </thead>
   <tbody>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   </tbody>
  </table>
 </div>
 <a href="./pages/windows/windows.html" class="subActionCall">اكمل قراءة القسم ...</a>
</div>
<div class="lastNewsSecContent" id="LIN">
 <div class="subInfo">
  <div class="subImg"><i class="fa fa-linux" aria-hidden="true"></i></div>
  <div class="subTitle">Linux</div>
 </div>
 <div class="subContent">
  <table>
   <thead>
   <tr>
    <th class="subTitle">الموضوع</th>
    <th class="subWriter">الكاتب</th>
    <th class="subDate">تاريخ النشر</th>
   </tr>
   </thead>
   <tbody>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   <tr>
    <td class="subTitle">
     <a href="./subject.html">subject title</a>
    </td>
    <td class="subWriter">
     subject writer
    </td>
    <td class="subDate">
     subject date
    </td>
   </tr>
   </tbody>
  </table>
 </div>
 <a href="./pages/linux/linux.html" class="subActionCall">اكمل قراءة القسم ...</a>
</div>
<div class="lastNewsSecIcons">
 <i class="sctionIcon IT fa fa-microchip" aria-hidden="true"></i>
 <i class="sctionIcon DB fa fa-database" aria-hidden="true"></i>
 <i class="sctionIcon NET fa fa-server" aria-hidden="true"></i>
 <i class="sctionIcon CPP fa fa-code" aria-hidden="true"></i>
 <i class="sctionIcon WIN fa fa-windows" aria-hidden="true"></i>
 <i class="sctionIcon LIN fa fa-linux" aria-hidden="true"></i>
</div>
</div>
</div>
</div>
</div>
<div class="contactPage" id="contact">
 <div class="contactPageInfo" dir="rtl">
  <div class="infoContent">
   <h3>اتصل بنا</h3>
  </div>
  <div class="websiteControls">
   <a href="#lastNews" class="fa fa-arrow-right" aria-hidden="true"></a>
   <a href="#home" class="fa fa-arrow-left" aria-hidden="true"></a>
  </div>
 </div>
 <div class="contactContainer">
  <div class="contactMsg">
   <div class="msgContent">
    <h3>للاستفسارات والاسئلة لا تردد بمراسلتنا</h3>
    <form action="">
     <div class="clintName inputBox">
      <div class="clintFirstName">
       <span>First Name:</span>
       <input type="text" name="firstName">
      </div>
      <div class="clintLastName">
       <span>Last Name:</span>
       <input type="text" name="lastName">
      </div>
     </div>
     <div class="clintEmail inputBox">
      <span>Email:</span>
      <input type="email" name="email">
     </div>
     <div class="clintMsg inputBox">
      <span>Message:</span>
      <textarea name="msg" cols="30" rows="10"></textarea>
     </div>
     <button type="submit">ارسال</button>
    </form>
   </div>
  </div>
  <div class="contactCard">
   <div class="websiteInfo">
    <a href="#home"><img src="<?php echo $config['app_url'].'/template' ?>/assets/media/logo/logoWhite.png" alt="website logo"></a>
    <h6 dir="ltr"><span class='Eng'>Eqla3 Tech</span> <span class="highLine">|</span> إقلاع تيك
    </h6>
    <div class="homeSocialCards">
     <div class="instagram">
      <a href="https://www.instagram.com/mraziz20000/" target="blanck"><i
           class="fa fa-instagram" aria-hidden="true"></i></a>
     </div>
     <div class="telegram">
      <a href="https://t.me/technology_site20" target="blanck"><i class="fa fa-telegram"
                                                                  aria-hidden="true"></i></a>
     </div>
     <div class="twitter">
      <a href="https://twitter.com/SiteTechnologys" target="blanck"><i
           class="fa fa-twitter" aria-hidden="true"></i></a>
     </div>
    </div>
   </div>
  </div>
 </div>
<?php
include_once 'template/footer.php';
?>


