
						
                         
       @extends('admin/inc/header')
 @section('content')

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					@foreach($input as $data)
					<tbody>
						<tr class="odd gradeX">
							<td>{{$data->id  }}</td>
							<td>{{$data->name  }}</td>
							<td>{{$data->email  }}</td>
							<td>{{str_limit($data->massage,255,'...' ) }}</td>
							<td><a href="view&{{$data->id}}">Seen</a>
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