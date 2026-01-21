<?php

namespace App\Http\Controllers;

use App\Models\FormList;
use App\Models\FormCategory;
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function formIndex(){
    $formCategories = FormCategory::where('IsActive', 1)
    ->whereHas('list')
    ->get();

    return view('form.formList',compact('formCategories'));
}

    public function getFormList(Request $request){

        $forms = FormList::where('CategoryID', $request->categoryId)
        ->get();

        $formsWithImages = $forms->map(function($form) {
            return [
                'id' => $form->id,
                'title' => $form->title,
                'file' => $form->file,
                'image' => getImage('files', $form->file)
            ];
        });

        return response()->json([
            'data'=>$formsWithImages,
            'status'=>true
        ]);
    }
}
