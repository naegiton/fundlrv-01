@extends('admin.home')
@section('title','โปรแกรมระบบบริหารงานฌาปนกิจและงานสารบัญ')
@section('header','รายละเอียดงานฌาปนกิจ')
@section('content')
    <form class="form-horizontal"  method="post" action="{{url( $url )}}">
@if( $id != 0)
    <input type="hidden" name="_method" value="PUT" />
  @endif
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ชื่อฌาปนกิจ</label>
            <div class="col-sm-10">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">ชื่อฌาปนกิจ</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="fundname" placeholder="ชื่อฌาปนกิจ" value="{{ $data ? $data->fundnamel : old('fundname') }}">
                  {!! $errors->first('fundname') !!}
               </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">ชื่อย่อ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="fundname2l" placeholder="ชื่อย่อ"value="{{ $data ? $data->fundname2l : old('fundname') }}" >
                  {!! $errors->first('fundname2l') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">บันทึก</button>
            </div>
        </div>
    </form>
@endsection
