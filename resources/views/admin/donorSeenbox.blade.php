@extends('admin/inc/header')
 @section('content')
  <div class="grid_10">
            <div class="box round first grid">
          <h1>  Donor Seen Box </h1>
 
                    <form action=""  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}

                    <table class="form">
                       
                     
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
							<td>
                             <input type="text" value="{{ $input->dname }}"  name="dname" class="medium" />
							 </td>
                        </tr>
						   <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->demail }}"  name="demail" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Food Ammount</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->dammount }}"  name="dammount" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Location</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->dlocation }}"  name="dlocation" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Food Type</label>
                            </td>
                            <td>
                                <input type="text" value="{{ $input->cname }}"  name="cname" class="medium" />
                            </td>
                        </tr>
                                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message</label>
                            </td>
                            <td>
                                <textarea  name="dmessage"   class="">{{$input->dmessage}}</textarea>
                            </td>
                        </tr>
						
                       
                    </table>
                               </form>
                              
                              

               
  
</div>

   
      </div>

   @stop
               
 
 