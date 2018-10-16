<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/attendance', function () {
//     return view('attendance');
// });

//============================ADMIN================================================
Route::prefix('admin')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register','Auth\AdminRegisterController@index')->name('admin.register');
    Route::post('/register','Auth\AdminRegisterController@create')->name('admin.register.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //password reset Routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


});

//=========================END of ADMIN ===========================================

Route::get('/generate-pdf','PdfGenerateController@pdfview')->name('generate-pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barcode',function (){
  return view ('barcode');
});

Route::get('/attendance','AttendanceController@show')->name('attendance');

Route::post('attendance','AttendanceController@store');
Route::get('/attendance/{id}','AttendanceController@destroy');
Route::get('/calendar',function (){
 return view ('calendar');
});


//=================================Employee and Payroll=======================================================================
Route::get('/employees/bin', 'EmployeeController@bin')->name('employees.bin');
Route::get('/employees/restore/{id}', 'EmployeeController@restore')->name('employees.restore');
Route::get('/employees/kill/{id}', 'EmployeeController@kill')->name('employees.kill');

Route::get('/employees/import','ImportController@getImport')->name('import');
Route::post('/employees/import/import_parse','ImportController@parseImport')->name('import_parse');
Route::post('/employees/import/import_process','ImportController@processImport')->name('import_process');

Route::get('/employee/payroll/{id}', 'PayrollController@payrollIndex')->name('payrolls.show');
Route::get('/payrolls/create/{id}', 'PayrollController@create')->name('payrolls.create');
Route::post('/payrolls/{id}', 'PayrollController@store')->name('payrolls.store');
Route::get('/employee/payroll/{id}/edit', 'PayrollController@edit')->name('payrolls.edit');
Route::patch('/payrolls/update/{id}', 'PayrollController@update')->name('payrolls.update');

Route::delete('/payrolls/delete/{id}', 'PayrollController@destroy')->name('payrolls.destroy');
Route::get('/payroll/bin', 'PayrollController@bin')->name('payrolls.bin');
Route::get('/payroll/restore/{id}', 'PayrollController@restore')->name('payrolls.restore');
Route::get('/payroll/kill/{id}', 'PayrollController@kill')->name('payrolls.kill');
Route::get('/payrolls/download/{id}','DownloadController@pdfDownload')->name('payrolls.pdf');
Route::get('/payroll/single/{id}','DownloadController@singlePayroll')->name('singlepayroll.pdf');

Route::resources([
	'departments' => 'DepartmentController',
	'roles' => 'RoleController',
	'employees' => 'EmployeeController',
]);
// Route::get('/image',function (){
//  return view ('library.librarydashboard');
// });
Route::get('/image',function (){
 return view ('library.add-books');
});
Route::post('/library/books/addbook','BookController@fileUpload')->name('imagesimport');

//========================LIBRARIAN====================================


Route::get('/library', 'BookController@index')->name('library.librarydashboard');
Route::get('/library/books', 'BookController@show')->name('library.showbooks');
Route::get('/library/books/{id}/edit', 'BookController@edit')->name('books.edit');
Route::get('/library/books/addbook', 'BookController@addview')->name('books.add');
Route::post('/library/books/{id}/edit','BookController@update')->name('book.edit');
Route::get('/library/books/search' , 'BookController@search')->name('searchbooks');
Route::get('/library/books/{id}/details','BookController@bookshow')->name('book.show');
Route::get('/library/books/issue-books', 'BookIssueController@issueView')->name('IssueView');
Route::post('/library/books/issue-books','BookIssueController@issueBook')->name('book.issue');
Route::get('/library/issued-books','BookIssueController@show')->name('issued.books');
Route::get('/library/issued-books/{id}/mail','BookIssueController@reminderEmail')->name('issue.email');
Route::get('/library/books/return-books', 'BookIssueController@returnView')->name('return.view');
Route::post('/library/books/return-books','BookIssueController@bookReturn')->name('book.return');
Route::get('/library/books/{id}','BookController@destroy');


Route::get('/extra_activities','ExtraCurricularController@show')->name('extra-activities');
Route::get('/extra_activities/add','ExtraCurricularController@index')->name('extra-activities-add');
Route::post('/extra_activities','ExtraCurricularController@create')->name('create-activity');
Route::get('/extra_activities/{id}/edit','ExtraCurricularController@edit')->name('edit.extra');
Route::post('/extra_activities/{id}/edit','ExtraCurricularController@update')->name('extra.update');
Route::get('/extra_activities/{id}','ExtraCurricularController@destroy');
//===================END-OF-LIBRARIAN====================================

//Route::get('/edit-user/{id}/edit','UserRegisterController@edit')->name('edit-register-view');
Route::get('/edit-user/{id}/edit','UserRegisterController@edit')->name('edit-register-view');
Route::post('/edit-user/{id}/edit','UserRegisterController@update')->name('edit-register');
Route::get('/users','UserRegisterController@showStudents')->name('users-view');    //showUsers
Route::get('/users/all','UserRegisterController@showUsers')->name('allusers-view');
Route::get('/users/change-password','UserRegisterController@resetPassword')->name('password_change');
Route::post('/users/change-password','UserRegisterController@postCredentials')->name('password_changes');
Route::get('/users/{id}/details','UserRegisterController@userShow')->name('user.show');
Route::get('/users/delete/{id}','UserRegisterController@destroy');
Route::get('/users/all/search' , 'UserRegisterController@search')->name('searchusers');


Route::get('/users/ach','AchievementsController@show')->name('users-achievements');
Route::get('/users/ach/{id}/add','AchievementsController@add')->name('add-users-achievements-view');
Route::post('/users/ach/{id}/add','AchievementsController@create')->name('add-users-achievements');
Route::get('/users/ach/edit','AchievementsController@edit')->name('edit-users-achievements');
Route::get('/users/ach/delete','AchievementsController@destroy')->name('delete-users-achievements');

//============================ACCOUNTANT===========================

Route::get('/accounts', 'ExpenseController@show')->name('accountantdashboard');
Route::get('/accounts/expenses/delete/{id}', 'ExpenseController@destroy')->name('delete.expenses');























Route::get('/accounts/add_expenses', 'ExpenseController@addview')->name('add.expenses');
Route::post('/accounts/add_expenses', 'ExpenseController@add')->name('expense.add');
Route::get('/accounts/search' , 'ExpenseController@search')->name('searchexpenses');

Route::get('/accounts/expenses/import','ExpenseController@getImport')->name('expenses_import');
Route::post('/accounts/expenses/import/import_parse','ExpenseController@parseImport')->name('expenses_import_parse');
Route::post('/accounts/expenses/import/import_process','ExpenseController@processImport')->name('expenses_import_process');


//==================ALUMNI and EVENT CREATION ======================

Route::get('/alumni', 'EventsController@show')->name('alumnidashboard');
Route::get('/alumni/add_event', 'EventsController@addview')->name('add.event');
Route::post('/alumni/add_event', 'EventsController@add')->name('event.add');

Route::get('/alumni/search' , 'EventsController@search')->name('searchevents');
Route::get('/alumni/events/delete/{id}', 'EventsController@destroy')->name('delete.events');
Route::get('/alumni/events/delete/{id}', 'EventsController@destroy')->name('delete.events');


//=====================END OF ALUMNI ====================

Route::get('/users/subjects', 'SubjectsController@show')->name('user.show');
Route::get('/users/subjects/add_subject/{id}', 'SubjectsController@addview')->name('add.subject');
Route::post('/users/subjects/add_subject/{id}', 'SubjectsController@add')->name('subject.add');

Route::get('/users/subjects/search' , 'SubjectsController@search')->name('searchevents');








//
