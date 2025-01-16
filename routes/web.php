<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesiLulusanController;
use App\Http\Controllers\CplController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AdminPenelitianController;
use App\Http\Controllers\AdminPenelitian2Controller;
use App\Http\Controllers\AdminPegabdianController;
use App\Http\Controllers\AdminInovasiController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\HimpunanController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\PageAdminController;
use App\Http\Controllers\PageDosenController;
use App\Http\Controllers\PageUserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\MobilityController;
use App\Http\Controllers\CourseJointDegreeController;
use App\Http\Controllers\JointController;
use App\Http\Controllers\JointDegreeController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\JointOldController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Auth;

Auth::routes();


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
//USER
// - Home
Route::get('/', [PageUserController::class, 'show']);

// - About
Route::get('sekilas', [AboutController::class, 'show']);
Route::get('visimisi', [VisiMisiController::class, 'show']);
Route::get('pl', [ProfesiLulusanController::class, 'show']);
Route::get('cpl', [CplController::class, 'show']);

// - Academic
Route::get('kalender', [KalenderController::class, 'show']);
Route::get('kurikulum', [KurikulumController::class, 'show']);
Route::get('dosen', [DosenController::class, 'show']);
Route::get('fasilitas', [DosenController::class, 'show']);

// - Research
Route::get('penelitian', [AdminPenelitianController::class, 'show']);
Route::get('pengabdian', [PengabdianController::class, 'show']);
Route::get('inovasi', [InovasiController::class, 'show']);
Route::get('sertifikasi', [SertifikasiController::class, 'show']);
Route::get('laboratorium', [LaboratoriumController::class, 'show'])->name('laboratorium');

// - Student
Route::get('himpunan-mahasiswa', [HimpunanController::class, 'show']);
Route::get('prestasi', [PrestasiController::class, 'show']);
Route::get('alumni', [AlumniController::class, 'show']);

//AWARD
    Route::get('award',[AwardController::class, 'show']);

//MOBILITY
    Route::get('mobility',[MobilityController::class, 'show']);

//PROSPECTS
    Route::get('prospect',[ProspectController::class, 'show']);

// - Joint Degree
Route::get('joint-degree', [JointDegreeController::class, 'show']);
Route::get('coursejoint-degree', [CourseJointDegreeController::class, 'show']);

// - News
Route::get('berita', [BeritaController::class, 'show']);
Route::get('announcement', [AnnouncementController::class, 'show']);
Route::get('read-berita/{id}',[BeritaController::class, 'read']);
Route::get('read-sarana/{id}',[SaranaController::class, 'read']);
Route::get('read-announcement/{id}',[AnnouncementController::class, 'tampil']);
Route::get('sarana', [SaranaController::class, 'show']);

// - Admission
Route::get('admission', [AdmissionController::class, 'show']);

// - UKM
Route::get('ukm', [UkmController::class, 'showUKM']);

// - Contact
Route::get('kontak', function () {
    return view('kontak');
});

Route::get('/storage-link',function(){
	$targetFolder = storage_path('app/public');
	$linkFolder = $_SERVER['DOCUMENT_ROOT']. '/storage';
	symlink($targetFolder,$linkFolder);	
});

// ADMIN PAGE
Route::get('/admin', [PageAdminController::class, 'showlogin'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('home', function () {
        return view('home');
    });
    
    Route::get('/adminpage', [PageAdminController::class, 'show'])->name('adminpage');
    Route::get('adminedit-carousel', [PageAdminController::class, 'editcarousel']);
    Route::get('adminadd-carousel', [PageAdminController::class, 'create']);
    Route::post('adminaddcarousel', [PageAdminController::class, 'store']);
    Route::get('admindelete-carousel/{id}',[PageAdminController::class, 'delete']);
    Route::delete('admindelete-carousel/{id}',[PageAdminController::class, 'destroy']);
    // Halaman Academic Admin

    //Kalender Akademik
    Route::get('adminkalender', [KalenderController::class, 'showadmin'])->middleware('auth');
    Route::get('adminadd-kalender',[KalenderController::class, 'create'])->middleware('auth');
    Route::post('adminaddkalender', [KalenderController::class, 'store'])->middleware('auth');
    Route::delete('/kalender/{id}', [KalenderController::class, 'deleteImage'])->name('delete_kalender');


    // Kurikulum
    Route::get('adminkurikulum', [KurikulumController::class, 'showadmin'])->middleware('auth');
    Route::get('adminadd-kurikulum', [KurikulumController::class, 'create'])->middleware('auth');
    Route::post('adminaddkurikulum', [KurikulumController::class, 'store'])->middleware('auth');
    Route::get('adminedit-descmatkul/{id}',[KurikulumController::class, 'editmatkul'])->middleware('auth');
    Route::put('adminmatkul/{id}',[KurikulumController::class, 'updatematkul'])->middleware('auth');
    Route::get('adminedit-kurikulum/{id}',[KurikulumController::class, 'edit'])->middleware('auth');
    Route::put('adminkurikulum/{id}',[KurikulumController::class, 'update'])->middleware('auth');
    Route::get('admindelete-kurikulum/{id}',[KurikulumController::class, 'delete'])->middleware('auth');
    Route::delete('admindelete-kurikulum/{id}',[KurikulumController::class, 'destroy'])->middleware('auth');

    // Dosen
    Route::get('admindosen', [DosenController::class, 'showadmin'])->middleware('auth');
    Route::get('adminadd-dosen', [DosenController::class, 'create'])->middleware('auth');
    Route::post('adminadddosen', [DosenController::class, 'store'])->middleware('auth');
    Route::get('adminedit-dosen/{id}',[DosenController::class, 'edit'])->middleware('auth');
    Route::put('admindosen/{id}',[DosenController::class, 'update'])->middleware('auth');
    Route::get('admindelete-dosen/{id}',[DosenController::class, 'delete'])->middleware('auth');
    Route::delete('admindelete-dosen/{id}',[DosenController::class, 'destroy'])->middleware('auth');

    // Fasilitas
    Route::get('adminsarana', [SaranaController::class, 'showadmin'])->middleware('auth');
    Route::get('adminadd-sarana',[SaranaController::class, 'create'])->middleware('auth');
    Route::post('adminaddsarana', [SaranaController::class, 'store'])->middleware('auth');
    Route::get('adminedit-sarana/{id}',[SaranaController::class, 'edit'])->middleware('auth');
    Route::put('admineditsarana/{id}',[SaranaController::class, 'update'])->middleware('auth');
    Route::get('admindelete-sarana/{id}',[SaranaController::class, 'delete'])->middleware('auth');
    Route::delete('admindelete-sarana/{id}',[SaranaController::class, 'destroy'])->middleware('auth');

    // MK Elektif 2018
    Route::get('adminadd-mkelektif', [KurikulumController::class, 'create2'])->middleware('auth');
    Route::post('adminaddmkelektif', [KurikulumController::class, 'store2'])->middleware('auth');
    Route::get('adminedit-mkelektif/{id}',[KurikulumController::class, 'edit2'])->middleware('auth');
    Route::put('adminmkelektif/{id}',[KurikulumController::class, 'update2'])->middleware('auth');
    Route::get('admindelete-mkelektif/{id}',[KurikulumController::class, 'delete2'])->middleware('auth');
    Route::delete('admindelete-mkelektif/{id}',[KurikulumController::class, 'destroy2'])->middleware('auth');

    // Kurikulum Merdeka
    Route::get('adminadd-merdeka', [KurikulumController::class, 'create3'])->middleware('auth');
    Route::post('adminaddmerdeka', [KurikulumController::class, 'store3'])->middleware('auth');
    Route::get('adminedit-merdeka/{id}',[KurikulumController::class, 'edit3'])->middleware('auth');
    Route::put('adminmerdeka/{id}',[KurikulumController::class, 'update3'])->middleware('auth');
    Route::get('admindelete-merdeka/{id}',[KurikulumController::class, 'delete3'])->middleware('auth');
    Route::delete('admindelete-merdeka/{id}',[KurikulumController::class, 'destroy3'])->middleware('auth');

    // Alur Kurikulum
    Route::get('adminadd-alurkurikulum', [KurikulumController::class, 'create4']);
    Route::post('adminaddalur', [KurikulumController::class, 'store4']);
    Route::get('adminedit-alur/{id}',[KurikulumController::class, 'edit4']);
    Route::put('adminalur/{id}',[KurikulumController::class, 'update4']);
    Route::delete('/alur/{id}', [KurikulumController::class, 'deleteImage'])->name('delete_image');


    //ABOUT
    Route::get('adminsekilas', [AboutController::class, 'showadmin']);
    Route::get('adminedit-sekilas/{id}', [AboutController::class, 'edit']);
    Route::put('adminsekilas/{id}', [AboutController::class, 'update']);

    //VISI MISI
    Route::get('adminvisimisi', [VisiMisiController::class, 'showadmin']);
    Route::get('adminedit-visimisi/{id}', [VisiMisiController::class, 'edit']);
    Route::put('adminvisimisi/{id}', [VisiMisiController::class, 'update']);


    // Graduate Profile
    Route::get('adminpl', [ProfesiLulusanController::class, 'showadmin']);
    Route::get('adminadd-pl',[ProfesiLulusanController::class, 'create']);
    Route::post('adminaddpl', [ProfesiLulusanController::class, 'store']);
    Route::get('adminedit-pl/{id}',[ProfesiLulusanController::class, 'edit']);
    Route::put('adminpl/{id}',[ProfesiLulusanController::class, 'update']);
    Route::get('admindelete-pl/{id}',[ProfesiLulusanController::class, 'delete']);
    Route::delete('admindelete-pl/{id}',[ProfesiLulusanController::class, 'destroy']);

    // Capaian Pembelajaran
    // CPL 1
    Route::get('admincpl', [CplController::class, 'showadmin']);
    Route::get('adminadd-cpl',[CplController::class, 'create']);
    Route::post('adminaddcpl', [CplController::class, 'store']);
    Route::get('adminedit-cpl/{id}',[CplController::class, 'edit']);
    Route::put('admincpl/{id}',[CplController::class, 'update']);
    Route::get('admindelete-cpl/{id}',[CplController::class, 'delete']);
    Route::delete('admindelete-cpl/{id}',[CplController::class, 'destroy']);


    // CPL 2
    Route::get('adminadd-cpl2',[CplController::class, 'create2']);
    Route::post('adminaddcpl2', [CplController::class, 'store2']);
    Route::get('adminedit-cpl2/{id}',[CplController::class, 'edit2']);
    Route::put('admincpl2/{id}',[CplController::class, 'update2']);
    Route::get('admindelete-cpl2/{id}',[CplController::class, 'delete2']);
    Route::delete('admindelete-cpl2/{id}',[CplController::class, 'destroy2']);

    // Halaman Research Admin
    Route::get('adminresearch', [AdminPenelitianController::class, 'index']);

    // Internal Research
    Route::get('adminadd-penelitian',[AdminPenelitianController::class, 'create']);
    Route::post('adminresearch', [AdminPenelitianController::class, 'store']);
    Route::get('adminedit-penelitian/{id}',[AdminPenelitianController::class, 'edit']);
    Route::put('adminresearch/{id}',[AdminPenelitianController::class, 'update']);
    Route::get('admindelete-penelitian/{id}',[AdminPenelitianController::class, 'delete']);
    Route::delete('admindelete-penelitian/{id}',[AdminPenelitianController::class, 'destroy']);

    //Research Grants DIKTI
    Route::get('adminadd-penelitian2',[AdminPenelitianController::class, 'create2']);
    Route::post('adminresearch2', [AdminPenelitianController::class, 'store2']);
    Route::get('adminedit-penelitian2/{id}',[AdminPenelitianController::class, 'edit2']);
    Route::put('adminresearch2/{id}',[AdminPenelitianController::class, 'update2']);
    Route::get('admindelete-penelitian2/{id}',[AdminPenelitianController::class, 'delete2']);
    Route::delete('admindelete-penelitian2/{id}',[AdminPenelitianController::class, 'destroy2']);

    // Independent Research
    Route::get('adminadd-penelitian3',[AdminPenelitianController::class, 'create3']);
    Route::post('adminresearch3', [AdminPenelitianController::class, 'store3']);
    Route::get('adminedit-penelitian3/{id}',[AdminPenelitianController::class, 'edit3']);
    Route::put('adminresearch3/{id}',[AdminPenelitianController::class, 'update3']);
    Route::get('admindelete-penelitian3/{id}',[AdminPenelitianController::class, 'delete3']);
    Route::delete('admindelete-penelitian3/{id}',[AdminPenelitianController::class, 'destroy3']);

    // Pengabdian
    Route::get('adminpengabdian', [PengabdianController::class, 'showadmin']);
    Route::get('adminadd-pengabdian',[PengabdianController::class, 'create']);
    Route::post('adminaddpengabdian', [PengabdianController::class, 'store']);
    Route::get('adminedit-pengabdian/{id}',[PengabdianController::class, 'edit']);
    Route::put('adminpengabdian/{id}',[PengabdianController::class, 'update']);
    Route::get('admindelete-pengabdian/{id}',[PengabdianController::class, 'delete']);
    Route::delete('admindelete-pengabdian/{id}',[PengabdianController::class, 'destroy']);

    // Inovasi 1
    Route::get('admininovasi', [InovasiController::class, 'showadmin']);
    Route::get('adminadd-inovasi',[InovasiController::class, 'create']);
    Route::post('adminaddinovasi', [InovasiController::class, 'store']);
    Route::get('adminedit-inovasi/{id}',[InovasiController::class, 'edit']);
    Route::put('admininovasi/{id}',[InovasiController::class, 'update']);
    Route::get('admindelete-inovasi/{id}',[InovasiController::class, 'delete']);
    Route::delete('admindelete-inovasi/{id}',[InovasiController::class, 'destroy']);

    // Inovasi 2
    Route::get('adminadd-inovasi2',[InovasiController::class, 'create2']);
    Route::post('adminaddinovasi2', [InovasiController::class, 'store2']);
    Route::get('adminedit-inovasi2/{id}',[InovasiController::class, 'edit2']);
    Route::put('admininovasi2/{id}',[InovasiController::class, 'update2']);
    Route::get('admindelete-inovasi2/{id}',[InovasiController::class, 'delete2']);
    Route::delete('admindelete-inovasi2/{id}',[InovasiController::class, 'destroy2']);

    // Sertifikasi
    Route::get('adminsertifikasi', [SertifikasiController::class, 'showadmin']);
    Route::get('adminadd-sertifikasi',[SertifikasiController::class, 'create']);
    Route::post('adminaddsertifikasi', [SertifikasiController::class, 'store']);
    Route::get('adminedit-sertifikasi/{id}',[SertifikasiController::class, 'edit']);
    Route::put('adminsertifikasi/{id}',[SertifikasiController::class, 'update']);
    Route::get('admindelete-sertifikasi/{id}',[SertifikasiController::class, 'delete']);
    Route::delete('admindelete-sertifikasi/{id}',[SertifikasiController::class, 'destroy']);

    //Student

    Route::get('adminhimpunan', [HimpunanController::class, 'showadmin']); // Guest

    //Profile HMIF
    Route::get('adminadd-profilehimpunan',[HimpunanController::class, 'createprofile']);
    Route::post('adminaddprofilehimpunan', [HimpunanController::class, 'storeprofile']);
    Route::get('adminedit-profilehimpunan/{id}',[HimpunanController::class, 'editprofile']);
    Route::put('admineditprofilehimpunan/{id}',[HimpunanController::class, 'updateprofile']);
    Route::get('admindelete-profilehimpunan/{id}',[HimpunanController::class, 'deleteprofile']);
    Route::delete('admindelete-profilehimpunan/{id}',[HimpunanController::class,  'destroyprofile']);

    //Program HMIF
    Route::get('adminadd-program',[HimpunanController::class, 'createprogram']);
    Route::post('adminaddprogram', [HimpunanController::class, 'storeprogram']);
    Route::get('adminedit-program/{id}',[HimpunanController::class, 'editprogram']);
    Route::put('admineditprogram/{id}',[HimpunanController::class, 'updateprogram']);
    Route::get('admindelete-program/{id}',[HimpunanController::class, 'deleteprogram']);
    Route::delete('admindelete-program/{id}',[HimpunanController::class,  'destroyprogram']);

    //Loho HMIF
    Route::get('adminedit-logohmif/{id}',[HimpunanController::class, 'editlogo']);
    Route::put('admineditlogohmif/{id}',[HimpunanController::class, 'updatelogo']);
    Route::get('adminedit-hmif1/{id}',[HimpunanController::class, 'edithmif1']);
    Route::put('adminedithmif1/{id}',[HimpunanController::class, 'updatehmif1']);
    Route::get('adminedit-hmif2/{id}',[HimpunanController::class, 'edithmif2']);
    Route::put('adminedithmif2/{id}',[HimpunanController::class, 'updatehmif2']);
    Route::get('adminedit-kontakhmif/{id}',[HimpunanController::class, 'editkontak']);
    Route::put('admineditkontakhmif/{id}',[HimpunanController::class, 'updatekontak']);

	//ADMISSIOn
    Route::get('adminadmission',[AdmissionController::class, 'showadmin']);
    Route::get('adminedit-admission/{id}',[AdmissionController::class, 'editadmission']);
    Route::put('admineditadmission/{id}',[AdmissionController::class, 'updateadmission']);
    
    Route::get('adminedit-admission2/{id}',[AdmissionController::class, 'editadmission2']);
    Route::put('admineditadmission2/{id}',[AdmissionController::class, 'updateadmission2']);

    Route::get('adminedit-admission4/{id}',[AdmissionController::class, 'editadmission4']);
    Route::put('admineditadmission4/{id}',[AdmissionController::class, 'updateadmission4']);
    Route::get('adminadd-admission4',[AdmissionController::class, 'createadmission4']);
    Route::post('adminaddadmission4',[AdmissionController::class, 'storeadmission4']);
    Route::get('admindelete-admission4/{id}',[AdmissionController::class, 'deleteadmission4']);
    Route::delete('admindelete-admission4/{id}',[AdmissionController::class,  'destroyadmission4']);
	
    //AWARD
    Route::get('adminaward',[AwardController::class, 'showadmin']);
    Route::get('adminadd-award',[AwardController::class, 'createaward']);
    Route::post('adminaddaward', [AwardController::class, 'storeaward']);
    Route::get('adminedit-award/{id}',[AwardController::class, 'editaward']);
    Route::put('admineditaward/{id}',[AwardController::class, 'updateaward']);
    Route::get('admindelete-award/{id}',[AwardController::class, 'deleteaward']);
    Route::delete('admindelete-award/{id}',[AwardController::class,  'destroyaward']);

    //MOBILITY

    Route::get('adminmobility',[MobilityController::class, 'showadmin']);
    Route::get('adminedit-mobility/{id}',[MobilityController::class, 'editmobility']);
    Route::put('admineditmobility/{id}',[MobilityController::class, 'updatemobility']);
    
    Route::get('adminedit-mobility2/{id}',[MobilityController::class, 'editmobility2']);
    Route::put('admineditmobility2/{id}',[MobilityController::class, 'updatemobility2']);

    Route::get('adminedit-mobility3/{id}',[MobilityController::class, 'editmobility3']);
    Route::put('admineditmobility3/{id}',[MobilityController::class, 'updatemobility3']);
    Route::get('adminadd-mobility3',[MobilityController::class, 'createmobility3']);
    Route::post('adminaddmobility3',[MobilityController::class, 'storemobility3']);
    Route::get('admindelete-mobility3/{id}',[MobilityController::class, 'deletemobility3']);
    Route::delete('admindelete-mobility3/{id}',[MobilityController::class,  'destroymobility3']);

    //PROSPECTS

    Route::get('adminprospect',[ProspectController::class, 'showadmin']);
    Route::get('adminadd-prospect',[ProspectController::class, 'createprospect']);
    Route::post('adminaddprospect', [ProspectController::class, 'storeprospect']);
    Route::get('adminedit-prospect/{id}',[ProspectController::class, 'editprospect']);
    Route::put('admineditprospect/{id}',[ProspectController::class, 'updateprospect']);
    Route::get('admindelete-prospect/{id}',[ProspectController::class, 'deleteprospect']);
    Route::delete('admindelete-prospect/{id}',[ProspectController::class,  'destroyprospect']);

    
    //UKM
    Route::get('adminukm', [UkmController::class, 'showadmin']);

    Route::get('adminadd-profileukm',[UkmController::class, 'createprofile']);
    Route::post('adminaddprofileukm', [UkmController::class, 'storeprofile']);
    Route::get('adminedit-profileukm/{id}',[UkmController::class, 'editprofile']);
    Route::put('admineditprofileukm/{id}',[UkmController::class, 'updateprofile']);
    Route::get('admindelete-profileukm/{id}',[UkmController::class, 'deleteprofile']);
    Route::delete('admindelete-profileukm/{id}',[UkmController::class,  'destroyprofile']);
    

    //Logo UKM
    Route::get('adminedit-logoukm/{id}',[UkmController::class, 'editlogo']);
    Route::put('admineditlogoukm/{id}',[UkmController::class, 'updatelogo']);
    Route::get('adminedit-ukm1/{id}',[UkmController::class, 'editukm1']);
    Route::put('admineditukm1/{id}',[UkmController::class, 'updateukm1']);
    Route::get('adminedit-ukm2/{id}',[UkmController::class, 'editukm2']);
    Route::put('admineditukm2/{id}',[UkmController::class, 'updateukm2']);

    //Programs UKM
    Route::get('adminadd-programsukm',[UkmController::class, 'createprogramsukm']);
    Route::post('adminaddprogramsukm', [UkmController::class, 'storeprogramsukm']);
    Route::get('adminedit-programsukm/{id}',[UkmController::class, 'editprogramsukm']);
    Route::put('admineditprogramsukm/{id}',[UkmController::class, 'updateprogramsukm']);
    Route::get('admindelete-programsukm/{id}',[UkmController::class, 'deleteprogramsukm']);
    Route::delete('admindelete-programsukm/{id}',[UkmController::class, 'destroyprogramsukm']);

    //Achievment
    Route::get('adminprestasi', [PrestasiController::class, 'showadmin']);
    Route::get('adminadd-prestasi',[PrestasiController::class, 'create']);
    Route::post('adminaddprestasi', [PrestasiController::class, 'store']);
    Route::get('adminedit-prestasi/{id}',[PrestasiController::class, 'edit']);
    Route::put('adminprestasi/{id}',[PrestasiController::class, 'update']);
    Route::get('admindelete-prestasi/{id}',[PrestasiController::class, 'delete']);
    Route::delete('admindelete-prestasi/{id}',[PrestasiController::class, 'destroy']);

    //OLD
    Route::get('adminjointold', [JointOldController::class, 'show']);

    //Alumni
    Route::get('adminalumni', [AlumniController::class, 'showadmin']);
    Route::get('adminadd-alumni',[AlumniController::class, 'create']);
    Route::post('adminaddalumni', [AlumniController::class, 'store']);
    Route::get('adminedit-alumni/{id}',[AlumniController::class, 'edit']);
    Route::put('adminalumni/{id}',[AlumniController::class, 'update']);

    //JOINT
    Route::get('adminjoint',[JointController::class, 'showadmin']);
    Route::get('adminadd-joint',[JointController::class, 'createjoint']);
    Route::post('adminaddjoint', [JointController::class, 'storejoint']);
    Route::get('adminedit-joint/{id}',[JointController::class, 'editjoint']);
    Route::put('admineditjoint/{id}',[JointController::class, 'updatejoint']);
    Route::get('admindelete-joint/{id}',[JointController::class, 'deletejoint']);
    Route::delete('admindelete-joint/{id}',[JointController::class,  'destroyjoint']);
    Route::get('adminadd-joint2',[JointController::class, 'createjoint2']);
    Route::post('adminaddjoint2', [JointController::class, 'storejoint2']);
    Route::get('adminedit-joint2/{id}',[JointController::class, 'editjoint2']);
    Route::put('admineditjoint2/{id}',[JointController::class, 'updatejoint2']);
    Route::get('admindelete-joint2/{id}',[JointController::class, 'deletejoint2']);
    Route::delete('admindelete-joint2/{id}',[JointController::class,  'destroyjoint2']);

    
    //Berita
    Route::get('adminberita', [BeritaController::class, 'showadmin']);
    Route::get('adminadd-berita',[BeritaController::class, 'create']);
    Route::post('adminaddberita', [BeritaController::class, 'store']);
    Route::get('adminedit-berita/{id}',[BeritaController::class, 'edit']);
    Route::put('admineditberita/{id}',[BeritaController::class, 'update']);
    Route::get('admindelete-berita/{id}',[BeritaController::class, 'delete']);
    Route::delete('admindelete-berita/{id}',[BeritaController::class, 'destroy']);

    //Pengumuman
    Route::get('adminannouncement', [AnnouncementController::class, 'showadmin']);
    Route::get('adminadd-announcement',[AnnouncementController::class, 'create']);
    Route::post('adminaddannouncement', [AnnouncementController::class, 'store']);
    Route::get('adminedit-announcement/{id}',[AnnouncementController::class, 'edit']);
    Route::put('admineditannouncement/{id}',[AnnouncementController::class, 'update']);
    Route::get('admindelete-announcement/{id}',[AnnouncementController::class, 'delete']);
    Route::delete('admindelete-announcement/{id}',[AnnouncementController::class, 'destroy']);


    Route::get('adminkontak',[PageAdminController::class, 'kontak']);
    


    Route::get('/alladmin', [AdminController::class, 'show'])->name('alladmin');
    Route::get('adminedit-alladmin/{id}',[AdminController::class, 'editadmin']);
    Route::put('/alladmin/{id}',[AdminController::class, 'updateadmin']);
    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');


    Route::get('/addadmin',[AdminController::class, 'showform'])->name('addadmin');
    Route::post('/registeradmin', [AdminController::class, 'createadmin'])->name('registeradmin');
    Route::get('admindelete-admin/{id}',[AdminController::class, 'deleteadmin'])->middleware('auth');
    Route::delete('admindelete-admin/{id}',[AdminController::class, 'destroyadmin'])->middleware('auth');

    // Route::get('/updatedosenrole', [AdminController::class, 'showdosenrole'])->name('updatedosenrole');
    // Route::post('/updatedosenrole/{id}', [AdminController::class, 'updatedosenrole']);

});
