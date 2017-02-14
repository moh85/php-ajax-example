<?php
error_reporting(E_ERROR | E_PARSE);

if ($_POST['first'] && $_POST['last']) { // في حال تم ارسال البيانات
	
	echo "الاسم هو: " . $_POST['first'] . " " . $_POST['last']; // طباعة الاسم و الكنية
	
}

else {
	
	echo "الرجاء تعبئة كافة الخانات"; // في حال لم يتم ارسال البيانات
	
}
?>
