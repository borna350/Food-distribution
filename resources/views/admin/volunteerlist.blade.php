@extends('admin/inc/header')
 @section('content')
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Volunteer Information List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Branch</th>
                            <th>CV</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    @foreach($input as $data)
                    <tbody>
                        <tr class="odd gradeX">
                            <td>{{$data->id  }}</td>
                            <td>{{$data->vname  }}</td>
                            <td>{{$data->vemail  }}</td>
                            <td>{{$data->branch  }}</td>
                            <td><img src="{{ asset( $data->cv)}}" alt=" " width='100px'/></td>
                            <td>{{str_limit($data->message,255,'...' ) }}</td>
                            
                        </tr>
                        
                    </tbody>
                    @endforeach
                </table>
               </div>
            </div>
        </div>
         @stop   