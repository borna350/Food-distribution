
						
                         
       @extends('admin/inc/header')
 @section('content')

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Donor Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Food Ammount</th>
							<th>Location</th>
							<th>Food Type</th>
							<th>Message</th>
							<th>Action</th>
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
							<td><a href="view1&{{$data->id}}">Seen</a>
						</tr>
						
					</tbody>
					@endforeach
				</table>
               </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
      @stop   