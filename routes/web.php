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

//Route::resource('personaldetails','PersonalDetailsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','HomeController@about');

//contacts

//phonenumber
Route::get('phonenumbers/create','PhonenumberController@create');
Route::post('phonenumbers/create','PhonenumberController@store');
Route::get('phonenumbers/show','PhonenumberController@show');
Route::patch('phonenumbers/{id}/edit','PhonenumberController@update');
Route::get('phonenumbers/{id}/edit','PhonenumberController@edit');

//address
Route::get('address/create','AddressController@create');
Route::post('address/create','AddressController@store');
Route::get('address/show','AddressController@show');
Route::patch('address/edit','AddressController@update');
Route::get('address/edit','AddressController@edit');


Route::get('personaldetails/create','PersonalDetailsController@create');
Route::post('personaldetails/create','PersonalDetailsController@store');
Route::get('personaldetails/show','PersonalDetailsController@show');
Route::get('personaldetails/edit','PersonalDetailsController@edit');
Route::patch('personaldetails/edit','PersonalDetailsController@update'); 

Route::get('educationdetails/create','EducationDetailsController@create');
Route::post('educationdetails/create','EducationDetailsController@store');
Route::get('educationdetails/show','EducationDetailsController@show');

//contacts
 /* Route::get('contacts/create','ContactController@create');
Route::post('contacts/create','ContactController@store');
Route::get('contacts/show','ContactController@show'); */


//oleve
Route::get('olevel/create','OlevelController@create');
Route::post('olevel/create','OlevelController@store');
Route::get('olevel/show','OlevelController@show');
Route::get('olevel/{id}/edit','OlevelController@edit');
Route::patch('olevel/{id}/edit','OlevelController@update');


//alevel
Route::get('alevel/create','AlevelController@create');
Route::post('alevel/create','AlevelController@store');
Route::get('alevel/show','AlevelController@show');
Route::get('alevel/{id}/edit','AlevelController@edit');
Route::patch('alevel/{id}/edit','AlevelController@update');

//clevel
Route::get('clevel/create','CertificatelevelController@create');
Route::post('clevel/create','CertificatelevelController@store');
Route::get('clevel/show','CertificatelevelController@show');
Route::get('clevel/{id}/edit','CertificatelevelController@edit');
Route::patch('clevel/{id}/edit','CertificatelevelController@update');


//dlevel
Route::get('dlevel/create','DiplomalevelController@create');
Route::post('dlevel/create','DiplomalevelController@store');
Route::get('dlevel/show','DiplomalevelController@show');
Route::get('dlevel/{id}/edit','DiplomalevelController@edit');
Route::patch('dlevel/{id}/edit','DiplomalevelController@update');


//dglevel
Route::get('dglevel/create','DegreelevelController@create');
Route::post('dglevel/create','DegreelevelController@store');
Route::get('dglevel/show','DegreelevelController@show');
Route::get('dglevel/{id}/edit','DegreelevelController@edit');
Route::patch('dglevel/{id}/edit','DegreelevelController@update');


//Masterslevel
Route::get('mlevel/create','MasterslevelController@create');
Route::post('mlevel/create','MasterslevelController@store');
Route::get('mlevel/show','MasterslevelController@show');
Route::get('mlevel/{id}/edit','MasterslevelController@edit');
Route::patch('mlevel/{id}/edit','MasterslevelController@update');

//Phdlevel
Route::get('plevel/create','PhdlevelController@create');
Route::post('plevel/create','PhdlevelController@store');
Route::get('plevel/show','PhdlevelController@show');
Route::get('plevel/{id}/edit','PhdlevelController@edit');
Route::patch('plevel/{id}/edit','PhdlevelController@update');

//Mycv
Route::get('mycv/show','MycvController@index');
Route::get('mycv/edit','MycvController@edit');

//experiences
Route::get('experience/create','ExperienceController@create');
Route::post('experience/create','ExperienceController@store');
Route::get('experience/show','ExperienceController@show');
Route::get('experience/{id}/edit','ExperienceController@edit');
Route::patch('experience/{id}/edit','ExperienceController@update');

//interests
Route::get('interests/create','InterestsController@create');
Route::post('interests/create','InterestsController@store');
Route::get('interests/show','InterestsController@show');
Route::get('interests/{id}/edit','InterestsController@edit');
Route::patch('interests/{id}/edit','InterestsController@update');

//skills
Route::get('skills/create','SkillsController@create');
Route::post('skills/create','SkillsController@store');
Route::get('skills/show','SkillsController@show');
Route::get('skills/{id}/edit','SkillsController@edit');
Route::patch('skills/{id}/edit','SkillsController@update');


//referees
Route::get('referees/create','RefereesController@create');
Route::post('referees/create','RefereesController@store');
Route::get('referees/show','RefereesController@show');
Route::get('referees/{id}/edit','RefereesController@edit');
Route::patch('referees/{id}/edit','RefereesController@update');


//researches
Route::get('research/create','ResearchesController@create');
Route::post('research/create','ResearchesController@store');
Route::get('research/show','ResearchesController@show');
Route::get('research/{id}/edit','ResearchesController@edit');
Route::patch('research/{id}/edit','ResearchesController@update');


//professional affliations
Route::get('professionalaffiliation/create','ProfessionalAffliationController@create');
Route::post('professionalaffiliation/create','ProfessionalAffliationController@store');
Route::get('professionalaffiliation/show','ProfessionalAffliationController@show');
Route::get('professionalaffiliation/{id}/edit','ProfessionalAffliationController@edit');
Route::patch('professionalaffiliation/{id}/edit','ProfessionalAffliationController@update');

//awards
Route::get('awards/create','AwardsController@create');
Route::post('awards/create','AwardsController@store');
Route::get('awards/show','AwardsController@show');
Route::get('awards/{id}/edit','AwardsController@edit');
Route::patch('awards/{id}/edit','AwardsController@update');

//job descriptions ProjectsController
Route::get('jobdesc/create','JobdescriptionController@create');
Route::post('jobdesc/create','JobdescriptionController@store');
Route::get('jobdesc/show','JobdescriptionController@show');
Route::get('jobdesc/{id}/edit','JobdescriptionController@edit');
Route::patch('jobdesc/{id}/edit','JobdescriptionController@update');

//projects
Route::get('projects/create','ProjectsController@create');
Route::post('projects/create','ProjectsController@store');
Route::get('projects/show','ProjectsController@show');
Route::get('projects/{id}/edit','ProjectsController@edit');
Route::patch('projects/{id}/edit','ProjectsController@update');

//professional trainings
Route::get('trainings/create','TrainingsController@create');
Route::post('trainings/create','TrainingsController@store');
Route::get('trainings/show','TrainingsController@show');
Route::get('trainings/{id}/edit','TrainingsController@edit');
Route::patch('trainings/{id}/edit','TrainingsController@update');

//academic presentations
Route::get('presentation/create','PresentationsController@create');
Route::post('presentation/create','PresentationsController@store');
Route::get('presentation/show','PresentationsController@show');
Route::get('presentation/{id}/edit','PresentationsController@edit');
Route::patch('presentation/{id}/edit','PresentationsController@update');


//other activities
Route::get('activities/create','OtherActivitiesController@create');
Route::post('activities/create','OtherActivitiesController@store');
Route::get('activities/show','OtherActivitiesController@show');
Route::get('activities/{id}/edit','OtherActivitiesController@edit');
Route::patch('activities/{id}/edit','OtherActivitiesController@update');