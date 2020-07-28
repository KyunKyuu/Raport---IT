<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $students = Student::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $students = Student::paginate(10);
        }

        
        return view('Admin.Student.index', compact('students'));
    }

    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'email' => 'required|unique:users|email',
            'kelas' => 'required'

        ]);
       // inser ke tabel user
       $user = new \App\User;
       $user->role = 'siswa';
       $user->name = $request->nama;
       $user->email = $request->email;
       $user->password = bcrypt('rahasia');
       $user->remember_token = Str::random(100);
       $user->save(); 

        // insert ke tabel student
       $request->request->add(['user_id'=>$user->id]);
       $siswa = Student::create($request->all());


        return redirect('/student')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $matapelajaran = \App\Mapel::all();

        return view('Admin.student.detail', compact('student', 'matapelajaran'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('Admin.student.edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            // 'email' => 'required|email',
            'kelas' => 'required'
        ]);

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $student->avatar = $request->file('avatar')->getClientOriginalName();
        }

        Student::where('id',$student->id)
                ->update([
                    'nama' => $request->nama,
                    'nis' => $request->nis,
                    // 'email' => $request->email,
                    'kelas' => $request->kelas,
                    'avatar' => $student->avatar
                ]);
        return redirect('/student')->with('pesan', 'Data berhasil diubah');
    }

     public function editsiswa($id)
    {
        if(auth()->user()->student->id == $id){
        $student = Student::findOrFail($id);
        return view('dashboards.editsiswa', compact('student'));
        }else{
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function updatesiswa(Request $request, Student $student)
    {
        // $student = Student::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'kelas' => 'required'
        ]);

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $student->avatar = $request->file('avatar')->getClientOriginalName();
        }

        Student::where('id',$student->id)
                ->update([
                    'nama' => $request->nama,
                    'nis' => $request->nis,
                    'kelas' => $request->kelas,
                    'avatar' => $student->avatar
                ]);
        return redirect('/profilesaya')->with('pesan', 'Data berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student->id);
        return redirect('/student')->with('pesan', 'Data berhasil dihapus');
    }

    public function deletenilai($student,$idmapel)
    {
        $siswa = Student::find($student);
        $siswa->mapel()->detach($idmapel);

        return redirect()->back()->with('sukses', 'data nilai berhasil dihapus');
    }

    public function addnilai(Request $request,$student)
    {
        $siswa = Student::find($student);
        if ($siswa->mapel()->where('mapel_id', $request->mapel)->exists()) {
             return redirect('student/'.$student)->with('error', 'Data mata pelajaran sudah ada');
        }
        $siswa->mapel()->attach($request->mapel,['nilai' => $request->nilai]);

        return redirect('student/'.$student)->with('sukses', 'Data nilai berhasil dimasukan');
    }


    public function exportExcel()
    {
        return Excel::download( new StudentExport, 'Student.xlsx');
    }
    


    public function exportPdf()
    {
        $siswa = Student::all();
        $pdf = PDF::loadView('export/siswapdf', compact('siswa'));
        return $pdf->download('invoice.pdf');
    }

    public function importExcel(Request $request)
    {
        Excel::import(new \App\imports\StudentImport, $request->file('data_siswa'));
       
       return redirect()->back()->with('pesan', 'Data Siswa berhasil dimasukan');
    }
}
