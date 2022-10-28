<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;

//el mismo nombre que tiene el modelo + controller
class TopicController extends Controller
{

    public function index()
    {
        return Topic::paginate();
        //return DB::table('topic')->select("title");
    }


    public function show($id)
    {
        $topic = Topic::find($id);
        if (!$topic) {
            return response()->json(["message" => "failed"], 404);
        }
        return $topic;
    }

    public function store(Request $request)
    {
        $topic = new Topic();/* regsitro topic vacio */
        $r = $topic->fill($request->all())->save();/* llenar el obj topic con el request y hacer el insert*/
        if (!$r) {
            return response()->json(["message" => "failed"], 404);
        }
        return $topic;
    }

    public function update(Request $request, $id)
    {
        $topic = topic::find($id);
        if (!$topic) {
            return response()->json(["mesagge"=>"failed"], 404);
        }

        $r = $topic->fill($request->all())->save();
        if (!$r) {
            return response()->json(["mesagge"=>"failed"], 404);
        }
        return $topic;
    }

    public function destroy($id)
    {
        $topic = topic::find($id);
        if (!$topic) {
            return response()->json(["message"=>"failed"], 404);
        }
        $topic->delete();
        return response()->json(["message"=>"success"]);
    }
}
