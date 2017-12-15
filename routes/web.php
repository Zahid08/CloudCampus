<?php


Route::get('/','WelcomeController@index');
Route::get('/about','aboutController@aboutContent');
Route::get('/course','courseController@courseContent');
Route::get('/blog','BlogController@blogContent');
Route::get('/gallery','galleryController@galleryContent');
Route::get('/contact','contactController@contactContent');
Route::get('/service','serviceController@serviceContent');
Route::get('/staff','EmployeeController@showStafContent');
Route::get('/notice','noticeController@showNoticeContent');
Route::get('/message','MessageController@showFrontEndMessageContent');

//Route::get('/blog/details','BlogController@detailsBlog');
Route::get('/blog/details/{id}','BlogController@detailsBlog');
Route::post('/comments/{id}','CommentController@userComment');
Route::post('/save-guest-message','MessageController@saveGuestMessageFrontEnd');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['teacher']], function () {

   // Route::get('/blog/blog','BlogController@showBlogForm');
    Route::post('/new-blog','BlogController@saveBlogInfo');
    Route::get('/blog/blog','BlogController@viewBlogInfo');
    Route::post('/update-blog', 'BlogController@updateBlogInfo');
    Route::get('/delete-blog/{id}', 'BlogController@deleteBlogInfo');

    //Comments
    Route::get('/blog/comment','CommentController@viewCommentInfo');
    Route::get('/delete-comment/{id}','CommentController@deleteCommentInfo');

    // For Profile
    Route::get('/tsp-user-profile/{id}','ProfileController@showTspUserProfileForm');
    Route::post('/user-new-profile','ProfileController@saveProfileInfo');
    //Route::post('/update-profile', 'ProfileController@updateProfileInfo');


});


Route::group(['middleware' => ['admin']], function () {
    // For Course
   // Route::get('/course/add-course','AdminCourseController@showCourseForm');
    Route::post('/course/new-course','AdminCourseController@saveCourseInfo');
    Route::get('/course/add-course','AdminCourseController@viewCourseInfo');
    Route::post('/course/update-course', 'AdminCourseController@updateCourseInfo');
    Route::get('/course/delete-course/{id}', 'AdminCourseController@deleteCourseInfo');

    // For subject
    //Route::get('/subject/subject','SubjectController@showSubjectForm');
    Route::post('/subject/new-subject','SubjectController@saveSubjectInfo');
    Route::get('/subject/subject','SubjectController@viewSubjectInfo');
    Route::post('/subject/update-subject', 'SubjectController@updateSubjectInfo');
    Route::get('/subject/delete-subject/{id}', 'SubjectController@deleteSubjectInfo');

    // For department
    //Route::get('/department/department','DepartmentController@showDepartmentForm');
    Route::post('/new-department','DepartmentController@saveDepartmentInfo');
    Route::get('/department/department','DepartmentController@viewDepartmentInfo');
    Route::post('/update-department', 'DepartmentController@updateDepartmentInfo');
    Route::get('/delete-department/{id}', 'DepartmentController@deleteDepartmentInfo');

    // For Designation
    //Route::get('/designation/designation','DesignationController@showDesignationForm');
    Route::post('/new-designation','DesignationController@saveDesignationInfo');
    Route::get('/designation/designation','DesignationController@viewDesignationInfo');
    Route::post('/update-designation', 'DesignationController@updateDesignationInfo');
    Route::get('/delete-designation/{id}', 'DesignationController@deleteDesignationInfo');

    // For Category
    //Route::get('/category/category','CategoryController@showCategoryForm');
    Route::post('/new-category','CategoryController@saveCategoryInfo');
    Route::get('/category/category','CategoryController@viewCategoryInfo');
    Route::post('/update-category', 'CategoryController@updateCategoryInfo');
    Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');

    // For Occupation
   // Route::get('/occupation/occupation','OccupationController@showOccupationForm');
    Route::post('/new-occupation','OccupationController@saveOccupationInfo');
    Route::get('/occupation/occupation','OccupationController@viewOccupationInfo');
    Route::post('/update-occupation', 'OccupationController@updateOccupationInfo');
    Route::get('/delete-occupation/{id}', 'OccupationController@deleteOccupationInfo');

    // For Profile
    Route::get('/profile/profile/{id}','ProfileController@showProfileForm');
    Route::post('/new-profile','ProfileController@saveProfileInfo');
    Route::get('/profile/user','ProfileController@showManageUserForm');
    Route::post('/update-user-type/{id}', 'ProfileController@updateUserType');

    //Create Admin Message
   // Route::get('/message/message','MessageController@showMessageForm');

    Route::get('/message/message','MessageController@viewMessageInfo');
    Route::post('/new-messages','MessageController@saveMessageInfo');
    Route::post('/update-message', 'MessageController@updateMessageInfo');
    Route::get('/delete-message/{id}', 'MessageController@deleteMessageInfo');
    Route::get('/active-message/{id}', 'MessageController@activeMessageInfo');
    Route::get('/inactive-message/{id}', 'MessageController@inactiveMessageInfo');

    Route::get('/message/user-messages','MessageController@viewGuestUserMessageInfo');
    Route::get('/delete-guest-user-message/{id}', 'MessageController@deleteGuestUserMessageInfo');

    // FOR Employee
    Route::get('/employee/employee','EmployeeController@viewEmployeeInfo');
    Route::post('/new-employee','EmployeeController@saveEmployeeInfo');
    Route::post('/update-employee', 'EmployeeController@updateEmployeeInfo');
    Route::get('/delete-employee/{id}', 'EmployeeController@deleteEmployeeInfo');
    Route::get('/active-employee/{id}', 'EmployeeController@activeEmployeeInfo');
    Route::get('/inactive-employee/{id}', 'EmployeeController@inactiveEmployeeInfo');

    // FOR Gallery
    Route::get('/gallery/gallery','GalleryController@viewGalleryInfo');
    Route::post('/new-gallery','GalleryController@saveGalleryInfo');
    Route::post('/update-gallery', 'GalleryController@updateGalleryInfo');
    Route::get('/delete-gallery/{id}', 'GalleryController@deleteGalleryInfo');
    Route::get('/active-gallery/{id}', 'GalleryController@activeGalleryInfo');
    Route::get('/inactive-gallery/{id}', 'GalleryController@inactiveGalleryInfo');

    //for  file notice
    Route::get('/file-notice/add-notice', 'NoticeController@showFileNoticeForm');
    Route::post('/file-notice/new-notice','NoticeController@savefileNoticetInfo');
    Route::get('/manage-file-notice/manage-notice','NoticeController@viewfileNoticetInfo');
    Route::get('/file-notice/unpublished-file-notice/{id}','NoticeController@unpublishedfileNotice');
    Route::get('/file-notice/published-file-notice/{id}', 'NoticeController@publishedFiletNoticeInfo');
    Route::post('/file-notice/update-notice', 'NoticeController@updateFileNoticeInfo');

    // FOR Blogs
     Route::get('/blog/admin-blog','BlogController@viewAdminBlogInfo');
    Route::get('/unpublish-admin-blog/{id}', 'BlogController@unpublishAdminBlog');
    Route::get('/publish-admin-blog/{id}', 'BlogController@publishAdminBlog');

});

//Route::get('/tsp/home', 'HomeController@tspIndex');

