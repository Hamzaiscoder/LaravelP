<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Appointment;
use App\Models\Student;
use App\Models\specialization;
use App\Models\doctors;
use App\Models\hospital;
use App\Models\customerRegister;
use App\Models\Users;
use App\Models\Vaccination;
use App\Models\chilDetailsform;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class studentCont extends Controller
{
    //
    public function insertchild(Request $request)
    {

        $Student = new Student();
        $Student->Name = $request->txtname;
        $Student->Email = $request->txtemail;
        $Student->Age = $request->txtage;
        $Student->picture = rand() . "_" . $request->file('txtfile')->getClientOriginalName();
        $request->file('txtfile')->move("images", $Student->picture);
        $Student->save();

        return redirect()->back()->with('success', "Data Inserted Successfully!");
    }


    public function viewData()
    {
        $student = Student::all();
        return view('formdata', compact('student'));
    }

    public function insertSpecialization(Request $request)
    {

        $specialization = new specialization();
        $specialization->Spe_Name = $request->txtname;
        $specialization->save();
        return redirect()->back()->with('success', "Data Inserted");
    }

    public function viewSpecialization()
    {
        $specialization = specialization::all();
        return view('doctorform', compact('specialization'));
    }

    public function insertdoctor(Request $request)
    {

        $doctors = new doctors();
        $doctors->Name = $request->dname;
        $doctors->Cnic = $request->dcnic;
        $doctors->Phone = $request->dphone;
        $doctors->Address = $request->dadress;
        $doctors->Email = $request->demail;
        $doctors->Password = Hash::make($request->dpass);
        $doctors->Picture = rand() . "_" . $request->file('dfile')->getClientOriginalName();
        $request->file('dfile')->move('images', $doctors->Picture);
        $doctors->Specialization = $request->dspec;
        $doctors->save();
        return redirect('ViewDoctorAsadmin')->with('success', "Data Inserted Successfully!");
    }
    //View Doctors in team page
    public function viewDoctors()
    {
        // Use DB::select for raw queries
        $doctors = DB::select('
            SELECT d.Name, d.Picture, s.Spe_Name 
            FROM doctors d
            INNER JOIN specializations s ON d.Specialization = s.id
        ');
    
        // Fetch all specializations using Eloquent
        $specialization = Specialization::all();
    
        // Pass data to the view
        return view('team', compact('doctors', 'specialization'));
    }
    //View Doctors in Indexfile
    public function viewDoctorsIndex()
    {
         // Use DB::select for raw queries
         $doctors = DB::select('
         SELECT d.Name, d.Picture, s.Spe_Name 
         FROM doctors d
         INNER JOIN specializations s ON d.Specialization = s.id
     ');
 
     // Fetch all specializations using Eloquent
     $specialization = Specialization::all();
 
     // Pass data to the view
     return view('index', compact('doctors', 'specialization'));
    }

    public function inserthospital(Request $request)
    {

        $hospital = new hospital();
        $hospital->Hospital_name = $request->txtname;
        $hospital->save();
        return redirect()->back()->with('success', "Data Inserted Successfully!");
    }


    public function viewhospitals()
    {
        $hospital = hospital::all();
        return view('HospitalView', compact('hospital'));
    }
    //Doctor View for Admin
    public function viewDoctorAdmin()
    {
        
        $doctors = DB::select('
        SELECT d.id,d.Cnic,d.Phone,d.Address,d.Email,d.Name, d.Picture, s.Spe_Name 
        FROM doctors d
        INNER JOIN specializations s ON d.Specialization = s.id
    ');

    $specialization = Specialization::all();
        return view('doctorViwe', compact('doctors','specialization'));
    }
    //View Specialization in Admin form
    public function viewSpecializationAsAdmin()
    {
        $specialization = specialization::all();
        return view('viewSpecializationAsAdmin', compact('specialization'));
    }

    public function SumOFDoctorAdmin()
    {
        $doctors = doctors::all();
        $idSum = doctors::sum('id'); // Calculate the sum of IDs
        return view('adminIndex', compact('doctors', 'idSum'));
    }

    public function insertVaccine(Request $request)
    {

        $Vacciination = new Vaccination();
        $Vacciination->Vaccine_Name = $request->txtname;
        $Vacciination->Status = $request->status;
        $Vacciination->save();
        return redirect()->back()->with('success', "Data Inserted Successfully!");
    }
    public function viewVaccineAsAdmin()
    {
        $Vaccination = Vaccination::all();
        return view('viewVaccineAsAdmin', compact('Vaccination'));
    }
    //Function for View data for update page
    public function Edit_Data($id)
    {
        $Vaccination = Vaccination::find($id);
        return view('updatepage', compact('Vaccination'));
    }
//Update vaccine
    public function update_vaccines(Request $request)
    {

        $Vaccination = Vaccination::find($request->id);
        $Vaccination->Vaccine_Name = $request->txtname;
        $Vaccination->Status = $request->status;
        $Vaccination->save();
        return redirect('viewVaccineDetailsAsAdmin')->with('success', "Data Inserted Successfully!");
    }

    public function Delete_Data($id)
    {
        $Vaccination = Vaccination::find($id);
        $Vaccination->delete();
        return redirect()->back()->with('success', 'Data Delete Successfully!');
    }


    //Child Detials form 
    public function insertchil_details(Request $request)
    {
        $chilDetailsform = new chilDetailsform();
      
        $chilDetailsform->Name = $request->txtname;
        $chilDetailsform->guardian_name = $request->gdname;
        $chilDetailsform->gender = $request->gender;
        $chilDetailsform->dob = $request->dob;
        $chilDetailsform->address = $request->address;
        $chilDetailsform->contact_number = $request->contact;
        
        // for picture
        $chilDetailsform->Picture = rand() . "_" . $request->file('txtfile')->getClientOriginalName();
        $request->file('txtfile')->move("images", $chilDetailsform->Picture);
        //end picture
    
        $chilDetailsform->vaccination_history = $request->vacc_history;
        $chilDetailsform->diseses = $request->diseases;
        $chilDetailsform->save();
    
        // Store a success message in session
        session()->flash('success', 'Child registration successfully sent!');
    
        return redirect('/'); // Redirect to the home page or any page
    }
    
    public function allchilddetailsreport()
    {
        $chilDetailsform = chilDetailsform::all();
        return view('allchilddetailsreport', compact('chilDetailsform'));
    }


//View Doctor in Appoitment form
public function viewAppointmentForm()
{
    $doctors = doctors::all();
    $Vaccination = DB::select('select * from vaccinations where Status ="Available"');
    $hospital = hospital::all();
    return view('appointment', compact('doctors', 'Vaccination','hospital'));
}

public function Delete_Doctor($id)
{
    $doctors = doctors::find($id);
    $doctors->delete();
    return redirect()->back()->with('success', 'Data Delete Successfully!');
}

//Insert appoitement form 
public function insertapp_form(Request $request)
{
    $Appointment = new Appointment();

    // Assign values from the request
    $Appointment->vaccine = $request->vaccine;
    $Appointment->parent = $request->parent;
    $Appointment->child = $request->child;
    $Appointment->contact = $request->contact;
    $Appointment->age = $request->age;
    $Appointment->doctor = $request->doctor;
    $Appointment->hospital = $request->hospital;
    $Appointment->app_date = $request->app_date;
    $Appointment->userId = $request->userId;
    $Appointment->userName = $request->userName;
   
    // Generate a random token for the 'token' column
    $Appointment->token = Str::random(8);// Example: Generates a unique ID like '2312f101'

    // Save the record
    $Appointment->save();
    // Redirect with success message, including the generated token
    return redirect()->back()->with('success', 'Appointment Successful! Your token is: ' . $Appointment->token);
}

public function viewApp_details()
{
   
    $Appointment =DB::select('SELECT 
    d.id,
    s.Vaccine_Name,
    d.parent,
    d.child,
    d.contact,
    d.age,
    a.Name AS Doctor_Name,
    h.Hospital_name,
    d.app_date,
    d.userid,
    d.userName,
    d.Status
FROM 
    appointments d
INNER JOIN 
    vaccinations s
ON 
    d.vaccine = s.id
INNER JOIN 
    doctors a
ON 
    d.doctor = a.id
INNER JOIN 
    hospitals h
ON 
    d.hospital = h.id;');
    $Vaccination = Vaccination::all();
    $hospital = hospital::all();
    return view('viewappform', compact('Appointment','Vaccination','hospital'));
}

//Contact page
public function insertContact(Request $request){

    $Contact = new Contact();
    $Contact->Name = $request->txtname;
    $Contact->Email = $request->txtemail;
    $Contact->Subject = $request->Subject;
    $Contact->Message = $request->message;
    $Contact->save();
    
    return redirect()->back()->with('success', '"Thank you for reaching out! We will get back to you as soon as possible."');

}


public function View_Contact(){
    $Contact=Contact::all();
    return view('contactForm',compact('Contact'));
}

//Register Page Function

public function registerPage(Request $request){

    $user = new customerRegister();
    $user->userName=$request->txtname;
    $user->userEmail=$request->txtemail;
    $user->userPassword=Hash::make($request->txtpassword);
    //Picture
    $user->userPicture =rand(). "_".$request->file('txtfile')->getClientOriginalName();
    $request->file('txtfile')->move("images", $user->userPicture);
    $user->save();
    return redirect('/loginPage')->with('success', '"Thank for creating Account Now Login."');

}

//Login Page
public function Login(Request $request)
{
    // Retrieve the user based on email
    $user = customerRegister::where('userEmail', $request->txtemail)->first();

    // Check if the user exists and the password is correct
    if ($user && Hash::check($request->txtpassword, $user->userPassword)) {

        // Set session data
        Session::put('Username', $user->userName);
        Session::put('UserID', $user->id);
       
        // Check if the user is an admin
        if ($user->role === 'admin') {
            return redirect('adminIndex'); // Redirect to admin dashboard
        } else {
            return redirect('/'); // Redirect to user dashboard
        }
    } else {
        // Redirect back with an error if credentials are invalid
        return redirect()->back()->with('error', 'Invalid email or password');
    }
}


public function logout()
{
    // Forget session keys
    Session::forget('Username');
    Session::forget('UserID');
    

    return redirect('loginPage');
}
public function profile()
{
    $user = customerRegister::find(Session::get('UserID'));
    return view('profileview', compact('user'));
}


//For pdf 

public function GeneratePdf(){

    $data=[
    'title'=>'Doctors Data',
    'date'=>date('d/m/y'),
    'doctors_Data'=>DB::table('doctors')->get()
    ];
    
    $pdf=PDF::loadView('indexpdf',$data);
    return $pdf->download('invoice.pdf');
    }
    
}
