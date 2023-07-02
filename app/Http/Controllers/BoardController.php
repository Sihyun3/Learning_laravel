<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Http\Requests\BoardRequest;
use App\Http\Resources\BoardResource;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{

    // 사실상 아무 쓰잘데기 없는 것들 임포트만 잘시켜주고 그러면
    // 내가 이름을정해주고 쓰면 된다.
    //리스폰스 보내는법 찾아봐야한다.
    

    //리퀘스트를 내가 정의해서 사용해도 된다.
    /**
     * Display a listing of the resource.
     */
    // 모든 목록 보여주는거
    // public function index() 
    // {
    //     $all = Board::all();
    //     return $all;
    // }

    public function index() 
    {
        $all = Board::all();
        $filterData = BoardResource::collection($all);
        // return new BoardResource($all);
        return $filterData;
    }
    /**
     * Show the form for creating a new resource.
     */
    // api 만들때 필요 없는 메소드 
    //화면 반환
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // 새 데이터 추가
    public function store(BoardRequest $request)
    {
        $input = $request->all();
        $newBoard = Board::create($input);
        return $newBoard;
    }
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     $newBoard = Board::create($input);
    //     return $newBoard;
    // }
    /**
     * Display the specified resource.
     */
    // 특정 데이터 가져오기
    // $id이거로 가져오면 안되고 검색할거로 이름 정해줘야하는듯
    public function show(string $id)
    {
        $data = Board::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    // api 만들때 필요 없는 메소드 기존 데이터를 보여주는 화면
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // 기존 데이터를 수정
    public function update(Request $request, string $id)
    {
        $fetchedTodo = Board::find($id);
        $fetchedTodo->update($request->all());
        return $fetchedTodo;
    }

    /**
     * Remove the specified resource from storage.
     */
    // 데이터 삭제
    public function destroy(string $id)
    {
        $delete = Board::find($id);
        $delete->delete();

    }
    //이름 맘대로 지정해도 괜찮을라나
    // 잘 작동하네 인덱스 값만 지정해주면 되는듯
    public function test(){
        $data = Board::select('board_idx','board_content')->get();
        return $data;
    }
    public function test1(int $idx){
        $test = DB::table("boards")->where("board_idx",$idx)->get();
        return $test;
    }
}
