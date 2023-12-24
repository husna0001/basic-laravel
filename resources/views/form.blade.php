@extends('layout')
@section('title', 'เขียนบทความ')
@section('content')
   <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    <form>

        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control"> 
             
        </div>
        <div class="form-group">
            <label for="content">เนื้อหาบทความ</label>
            <textarea name="content" cols="30" role="5" class="form-control"></textarea>
        </div>
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>

   @endsection
