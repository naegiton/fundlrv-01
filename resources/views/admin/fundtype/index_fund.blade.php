@extends('admin.home')
@section('title','โปรแกรมระบบบริหารงานฌาปนกิจและงานสารบัญ')
@section('header')
  <a href='{{url('fundtype')}}' ><i class="fa  fa-home  text-Primary" style="font-size:25px"></i></a>
   รายละเอียดงานฌาปนกิจ
 @endsection
@section('content')
 <div class="table-responsive"   >
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr class="info" >
          <th >#</th>
            <th>กลุ่ม</th>
            <th>รหัส</th>
           <th>ชื่อฌาปนกิจ</th>
            <th>อักษรย่อ</th>
             <th ><a href='{{url('fundtype/create')}}' ><i class="fa  fa-plus-circle  text-success" style="font-size:25px"></i> </a>  </th>
           </tr>
         </thead>
         <tbody>

           @foreach ($data as $data)

           <tr>
               <th scope="row">{{++$no}}</th>
               <td>   {{ $data->fundidL}} </td>
               <td>   {{ $data->fundid}}</td>
              <td>   {{ $data->fundname}}</td>
              <td>  {{ $data->fundname2}}</td>
              <td>
                <a href="{{ url('fundtype/'.$data->fundid .'/edit') }}"> <i class="fa fa-edit text-success" style="font-size:16px"></i></a>
                <a href="{{ url('fundtype-delete/'. $data->fundid) }}" onclick="return confirm('ยืนยันการลบ')"  style="font-size:16px"><i class="fa fa-times text-danger" ></i> </a>

                    {{$ck=App\fundtype_de::tdata($data->fundid,'0000')}}

                    @if($ck=='yes')
                  <a href="{{ url('fundtype_d/'. $data->fundid) }}"   style="font-size:16px"><i class="fa fa-file-text text-primary" ></i> </a>
                 @else
                    <a href="{{ url('fundtype_d/create?fundid='.$data->fundid) }}"   style="font-size:16px"><i class="fa fa-file-text text-primary" ></i> </a>
                  @endif

              </td>
            </tr>
       @endforeach
                   </tbody>
                 </table>
               </div>

               <div class="text-center">
              <i class="fa  fa-plus-circle  text-success" style="font-size:16px"></i> การเพิ่ม &nbsp;<i class="fa fa-edit text-success" style="font-size:16px"></i>&nbsp; การแก้ไข <i class="fa fa-times text-danger" ></i> การลบ</div>
@endsection
