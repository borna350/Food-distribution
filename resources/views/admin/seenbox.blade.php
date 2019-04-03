@extends('admin/inc/header')
 @section('content')
  <div class="grid_10">
            <div class="box round first grid">
             <h1>Inbox Seen Box</h1>
 
                    <form action=""  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}

                    <table class="form">
                       
                     
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
							<td>
                             <input type="text" value="{{ $input->name }}"  name="name" placeholder="Enter name..." class="medium" />
							 </td>
                        </tr>
						   <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->email }}"  name="email" placeholder="Enter email..." class="medium" />
                            </td>
                        </tr>
                                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message</label>
                            </td>
                            <td>
                                <textarea  name="massage"   class="">{{$input->massage}}</textarea>
                            </td>
                        </tr>
						
                       
                    </table>
                               </form>
                              
                              

               
  
</div>

   
      </div>

   @stop
               
 
 