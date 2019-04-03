
						
                         
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
							<th>Branch</th>
							<th>CV</th>
							<th>Message</th>
							<th>Action</th>
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
							<td><a href="view2&{{$data->id}}">Seen</a>
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