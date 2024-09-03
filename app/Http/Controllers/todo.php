<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class todo extends Controller
{
   
    //
    function addTODO(Request $req){
            $req->validate([
            "title"=>"required",
            "todo-body"=>"required"
        ]);
        echo($req->todo_body);
        $result = DB::insert("insert into todos(title,body) values(?,?)",[$req->title,$req->input("todo-body")]);

        if($result){
            return redirect("/");
        }
    }

    function getTodo(){
        $todos = DB::select("select * from todos");

        return view("view",["todos"=>$todos]);
    }

    function editTodo(Request $req){
        $id = $req->id;
        // print_r("id" . $id);
        $todo = DB::select("select * from todos where id = ? limit 1",[$id]);

        if($todo){
            return view("edit",["todo"=>$todo[0],"id"=>$todo[0]->id]);
        }

        return redirect("/");
    }

    function editTodoAPi(Request $req){
        $req->validate([
            "title"=>"required",
            "todo-body"=>"required",
        ]);

        $result = DB::update("update todos set title = ?, body = ? where id = ?",[$req->title,$req->input("todo-body"),$req->id]);
        print_r("result".$result);
        if($result != 0){
            return redirect("/");
        }
    }

    function deleteTODOApi(Request $req){

        $result = DB::delete("delete from todos where id = ?",[$req->id]);


        if($result != 0){
            return redirect("/");
        }

        
    }
}
