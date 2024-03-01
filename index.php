<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin") || urlIs("/add_search_category") || urlIs("/admin_user")  || urlIs("/add_category")|| urlIs("/admin_categories") || urlIs("/admin_student_history") || urlIs("/admin_user/edit")) { 
    require "admin_router.php";
} else if (urlIs('/signin') || urlIs('/signup') ||urlIs('/admin2024*pnc*')) {
    require "authentication_router.php";
}else{
    require 'router.php';
}



