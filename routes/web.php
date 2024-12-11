<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\studentCont;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//From  controller 
// Route::get('/',[homeController::class,'Index']);

Route::get('about',function(){
    return view('about');
});
Route::get('service',function(){
    return view('service');
});
Route::get('contact',function(){
    return view('contact');
});

Route::get('price',function(){
    return view('price');
});

Route::get('team',function(){
    return view('team');
});

Route::get('testimonial',function(){
    return view('testimonial');
});

Route::get('appointment',function(){
    return view('appointment');
});

Route::get('form',function(){
    return view('form');
});

Route::get('adminIndex',function(){
    return view('adminIndex');
});

Route::get('doctorform',function(){
    return view('doctorform');
});

Route::get('specialization',function(){
    return view('specialization');
});


//doctorform
Route::POST('InsertStudent',[studentCont::class,'insertchild']);
Route::get('formdata',[studentCont::class,'viewData']);
//Specialization 
Route::POST('InsertSpecialization',[studentCont::class,'insertSpecialization']);
Route::get('doctorform',[studentCont::class,'viewSpecialization']);
//add Doctor
Route::POST('InsertDoctor',[studentCont::class,'insertdoctor']);
Route::get('team',[studentCont::class,'viewDoctors']);
Route::get('/',[studentCont::class,'viewDoctorsIndex']);

//Rooute for Add hospital
Route::get('HospitalForm',function(){
    return view('addhospital');
});
Route::POST('InsertHospital',[studentCont::class,'inserthospital']);

Route::get('HospitalView',function(){
    return view('hospitalView');
});
//hospital list 
Route::get('HospitalView',[studentCont::class,'viewhospitals']);
//Doctor View As admin
Route::get('ViewDoctorAsadmin',[studentCont::class,'viewDoctorAdmin']);
//Specialization As Admin Dashbord
Route::get('ViewSpecAsadmin',[studentCont::class,'viewSpecializationAsAdmin']);

Route::get('adminIndex',[studentCont::class,'SumOFDoctorAdmin']);

//route form Vaccination Form
Route::get('vaacinationform',function(){
    return view('vaccinationForm');
});

Route::get('viewVaccineDetailsAsAdmin',[studentCont::class,'viewVaccineAsAdmin']);
//Vaccination Insert Form
Route::POST('insertVaccine',[studentCont::class,'insertVaccine']);

//Route for Edit Vaccine
Route::get('EditData/{id}',[studentCont::class,'Edit_Data']);
Route::POST('/updatevaccines',[studentCont::class,'update_vaccines']);
Route::get('DeleteData/{id}',[studentCont::class,'Delete_Data']);


//Route for child Details Form parent
Route::get('childDetailsform',function(){
    return view('childDetailsform');
});
Route::POST('child_detail',[studentCont::class,'insertchil_details']);
//See child Details As a Admin

Route::get('allchilddetailsreport',[studentCont::class,'allchilddetailsreport']);

Route::get('appointment',[studentCont::class,'viewAppointmentForm']);

//Delete Doctor
Route::get('DeleteDoctor/{id}',[studentCont::class,'Delete_Doctor']);

//appointment form Data inserted 
Route::POST('InsertAppForm',[studentCont::class,'insertapp_form']);

Route::get('viewappointment',[studentCont::class,'viewApp_details']);
//Contact page
Route::post('InsertContact',[studentCont::class,'insertContact']);
Route::get('viewaContact',[studentCont::class,'View_Contact']);


//Route for register and login
Route::get('registerPage',function(){
    return view('registerPage');
});
Route::get('loginPage',function(){
    return view('login');
});
Route::post('register_Page',[studentCont::class,'registerPage']);
Route::post('login_verify',[studentCont::class,'Login']);
Route::get('logout',[studentCont::class,'logout']);

Route::get('profile',[studentCont::class,'profile']);



Route::get('generate_pfd',[studentCont::class,'GeneratePdf']);