@extends('admin.home')
@section('title','โปรแกรมระบบบริหารงานฌาปนกิจและงานสารบัญ(กำหนดรายละเอียด)')
@section('header')
  <a href='{{url('fundtype')}}' ><i class="fa  fa-home  text-Primary" style="font-size:25px"></i></a>
   รายละเอียดงานฌาปนกิจ (กำหนดรายละเอียด)
 @endsection
@section('content')
    <form class="form-horizontal"  method="post" action="{{url( $url )}}">
@if( $id != 0)
    <input type="hidden" name="_method" value="PUT" />
  @endif

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">ชื่อฌาปนกิจ</label>
                <div class="col-sm-10   ">
                    <div   class="form-control"   >{{App\f_fundtype_l::namefund(Request::input('fundid'))}}</div>
               </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">เลขที่บัญชีสหกรณ์</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="accsaha" placeholder="เลขที่บัญชีสหกรณ์"value="{{ $data ? $data->accsaha : old('accsaha') }}" >
                  {!! $errors->first('accsaha') !!}
            </div>
        </div>



        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">เหรัญญิกสมาคมผู้จัดการ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="moneyname" placeholder="เหรัญญิกสมาคมผู้จัดการ"value="{{ $data ? $data->accsaha : old('moneyname') }}" >
                  {!! $errors->first('moneyname') !!}
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">หักค้ำประกัน</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="numpay" placeholder="หักค้ำประกัน"value="{{ $data ? $data->numpay : old('numpay') }}" >
                  {!! $errors->first('numpay') !!}
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">ลายเซ็น</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="signature" placeholder="ลายเซ็น"value="{{ $data ? $data->signature : old('signature') }}" >
                  {!! $errors->first('signature') !!}
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">บันทึก</button>
            </div>
        </div>
    </form>
@endsection
