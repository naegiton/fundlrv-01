@extends('admin.home')
@section('title','โปรแกรมระบบบริหารงานฌาปนกิจและงานสารบัญ')
@section('header')
<a href='{{url('fundtype')}}' ><i class="fa  fa-home  text-Primary" style="font-size:25px"></i></a>
   รายละเอียดงานฌาปนกิจ
 @endsection
@section('content')
 <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr class="info" >
          <th>รหัส</th>
           <th>ชื่อฌาปนกิจ</th>
            <th>อักษรย่อ</th>
             <th>เลขที่บัญชี</th>
             <th ><a href='{{url('fundtype/create')}}' ><i class="fa  fa-plus-circle  text-info" style="font-size:25px"></i> </a>  </th>
           </tr>
         </thead>
         <tbody>

           @foreach ($data as $data)

           <tr>
                <td>  {{ App\fundtype::namefund($data->fundid)}}</td>
                <td>  {{ $data->fundname."(".$data->fundname2.")" }}  </td>
                <td>  {{ $data->fundname2}}</td>
                <td>  {{ $data->accsama}}</td>
                <td align="center">

                <a href="{{ url('fundtype/'.$data->fundid .'/edit') }}"> <i class="fa fa-edit text-success" style="font-size:16px"></i></a>
                <a href="{{ url('fundtype-delete/'. $data->fundid) }}" onclick="return confirm('ยืนยันการลบ')"  style="font-size:16px"><i class="fa fa-times text-danger" ></i> </a>
                    {{ $fundidd=App\fundtype_de::getfundidd($data->fundid,'0000')}}
					@if ($fundidd=='0')
                      <a href="{{ url('fundtype_de/create?fundid='.$data->fundid) }}"   style="font-size:16px"><i class="fa fa-file-text text-primary" ></i> </a>

					@else
                      <a href="{{ url('fundtype_de/'.$fundidd.'/edit?fundid='.$data->fundid) }}"   style="font-size:16px"><i class="fa fa-file-text text-primary" ></i> </a>
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
