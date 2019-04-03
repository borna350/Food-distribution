@extends('admin/inc/header')
 @section('content')
  <div class="grid_10">
            <div class="box round first grid">
            <h1>Seen Box</h1>
 
                    <form action=""  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}

                    <table class="form">
                       
                     
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
							<td>
                             <input type="text" value="{{ $input->vname }}"  name="vname" class="medium" />
							 </td>
                        </tr>
						   <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->vemail }}"  name="vemail" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Branch</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->branch }}"  name="branch" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>CV</label>
                            </td>
                            <td>
                                <img src="{{ asset( $input->cv)}}" alt=" " width='100px'/>
                            </td>
                        </tr>
                                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message</label>
                            </td>
                            <td>
                                <textarea  name="message"   class="">{{$input->message}}</textarea>
                            </td>
                        </tr>
						
                       
                    </table>
                               </form>
                              
                              

               
  
</div>

   
      </div>

   @stop
               
 
 