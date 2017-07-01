@extends('admin.home')
@section('title','โปรแกรมระบบบริหารงานฌาปนกิจและงานสารบัญ')
@section('header','รายละเอียดงานฌาปนกิจ')
@section('content')
 <div class="table-responsive"   >
    <table class="table table-hover">
      <thead>
        <tr class="info" >
          <th >#</th>
            <th>ID</th>
           <th>ชื่อฌาปนกิจ</th>
            <th>อักษรย่อ</th>
             <th ><a href='{{url('fundtype/create')}}' ><img src="{{ url('public\button\create.png') }}"  /> </a>  </th>
           </tr>
         </thead>
         <tbody>
           @foreach ($data as $data)
           <tr>
               <th scope="row">{{++$no}}</th>
               <td>   {{ $data->fundidL}}</td>
              <td>   {{ $data->fundnamel}}</td>
              <td>  {{ $data->fundname2l}}</td>
              <td><a href="{{ url('fundtype/'.$data->fundidL .'/edit') }}"> <i class="fa fa-edit text-success" style="font-size:16px"></i></a>  <a href="{{ url('fundtype-delete/'. $data->fundidL ) }}" onclick="return confirm('ยืนยันการลบ')"  style="font-size:16px"><i class="fa fa-times text-danger" ></i> </a></td>
            </tr>
       @endforeach
                   </tbody>
                 </table>
               </div>
@endsection
