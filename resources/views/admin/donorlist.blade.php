@extends('admin/inc/header')
 @section('content')
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Donor Information List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>No.</th>
							<th>Name</th>
                            <th>Email</th>
							<th>Donation Amount</th>
							<th>Location</th>
                            <th>Food Type</th>
                            <th>Message</th>
						</tr>
					</thead>
					 @foreach($input as $data)
					<tbody>
						<tr class="odd gradeX">
							<td>{{$data->id  }}</td>
							<td>{{$data->dname  }}</td>
							<td>{{$data->demail  }}</td>
							<td>{{$data->dammount  }}</td>
							<td>{{$data->dlocation  }}</td>
							<td>{{$data->cname  }}</td>
							<td>{{str_limit($data->dmessage,255,'...' ) }}</td>
							
						</tr>
						
					</tbody>
					@endforeach
				</table>
               </div>
            </div>
        </div>
         @stop   