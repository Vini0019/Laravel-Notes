<?php

namespace App\Http\Controllers;

use App\Http\Requests\submitRequest;
use App\Models\Note;
use App\Models\User;
use App\Services\Operations;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MainController extends Controller
{
    public function index()
    {

        $id = session('user.id');
        $notes = User::find($id)->notes()->whereNull('deleted_at')->get()->toArray();

        return view('home', [
            'notes' => $notes
        ]);
    }

    public function newNote()
    {
        return view('new_note');
    }

    public function newNoteSubmit(submitRequest $request)
    {
        $id = session('user.id');

        $note = new Note();
        $note->user_id = $id;
        $note->title = $request->text_title;
        $note->text = $request->text_note;
        $note->save();

        return redirect()->route('home');
    }

    public function editNote($id)
    {
        // $id = $this->decryptId($id);
        $id = Operations::decryptId($id);

        if($id === null){
            return redirect()->route('home');
        }

        $note = Note::find($id);

        return view('edit_note', [
            'note' => $note
        ]);
    }

    public function editNoteSubmit(submitRequest $request)
    {

        if ($request->note_id == null) {
            return redirect()->route('home');
        }

        $id = Operations::decryptId($request->note_id);

        if($id === null){
            return redirect()->route('home');
        }

        $note = Note::find($id);

        $note->title = $request->text_title;
        $note->text = $request->text_note;
        $note->save();

        return redirect()->route('home');
    }

    public function deleteNote($id)
    {
        $id = Operations::decryptId($id);

        if($id === null){
            return redirect()->route('home');
        }
        
        $note = Note::find($id);

        return view('delete_note', ['note' => $note]);

    }

    public function deleteNoteConfirm($id)
    {
        $id = Operations::decryptId($id);

        if($id === null){
            return redirect()->route('home');
        }

        $note = Note::find($id);

        $note->delete();

        return redirect()->route('home');

    }

}
