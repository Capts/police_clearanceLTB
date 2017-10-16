<!-- need to fix:  
  a. responsiveness of grids. overlapping texts.
-->
@extends('layouts.app')

@section('title', 'Dashboard | ' . ucfirst(auth()->user()->firstname) . ' ' .ucfirst(auth()->user()->lastname))

@section('content')

<div class="wrapper">
  @include('partials.nav')
  @include('partials.loggedin.sidebar')
  
  <div class="content-wrapper">
  
      <section  id="user_picture">
        @include('applications.upload_modal')
        <section id="picture">
          <a href="#" data-toggle="modal" data-target="#upload"><i class="fa fa-camera fa-2x" data-toggle="tooltip" title="Change picture"></i></a>
          @if (auth()->user()->avatar == 'public/default/avatars/default.jpg')
            <img src="/default/avatars/default.jpg" class="thumbnailImage img-circle">
          @else
            <img src="/upload/avatars/{{auth()->user()->avatar}}" class="thumbnailImage img-circle">
          @endif
         
          
        </section>

        <p><b>{{ ucfirst(auth()->user()->firstname) . ' '. ucfirst(auth()->user()->profile->middle_name[0]). '. ' .ucfirst(auth()->user()->lastname) }}</b></p>
        
        <section class="text-center">
          <a href="{{ route('applications.edit', auth()->user()->id) }}" class="btn btn-flat btn-primary">Apply for clearance</a>
        </section>
      </section>
      
      <section id="body_ng_user">
        <div class="row" style="margin:10px 10px;border-radius: 0px;background-color: #f9f9f9;">
          <div class="col-md-6">
            
            <div class="col-md-12">
              <fieldset>
                <legend>
                  <h4>Personal Information</h4>
                </legend>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>First name</b></div>
                  <div class="section col-md-6">
                    <dd>{{ ucfirst(auth()->user()->firstname) }}</dd>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Middle name</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->middle_name))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->middle_name) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Last name</b></div>
                  <div class="section col-md-6">
                    <dd>{{ ucfirst(auth()->user()->lastname) }}</dd>
                  </div>
                </div>

                <div class="col-md-12">
                  @if (is_null(auth()->user()->profile->extension_name))
                  @else
                  <div class="section col-md-6"><b>Qualifier</b></div>
                  <div class="section col-md-6">
                    <dd>{{ ucfirst(auth()->user()->profile->extension_name) }}</dd>
                  </div>
                  @endif
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Gender</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->gender))
                       <dd class="red">*</dd>
                    @else
                       <dd>{{ ucfirst(auth()->user()->profile->gender) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Date of birth</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->dob))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->dob) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Place of birth</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->pob))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->pob) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Age</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->age))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->age) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Civil status</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->civil_status))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->civil_status) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Citizenship</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->citizenship))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->citizenship) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Height</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->height))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->height) }}</dd>
                    @endif
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="section col-md-6"><b>Weight(kg)</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->weight))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ ucfirst(auth()->user()->profile->weight) }} kg</dd>
                    @endif
                  </div>
                </div>


              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <legend>
                  <h4>Contact Details</h4>
                </legend>
               <p class="label label-default">Numbers and e-mail</p>
                <div class="col-md-12">
                  <div class="section col-md-6"><b>Mobile number</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->contact->mobile))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ auth()->user()->contact->mobile }}</dd>
                    @endif
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="section col-md-6"><b>Telephone number</b></div>
                  <div class="section col-md-6">
                    @if (is_null(auth()->user()->contact->telephone))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ auth()->user()->contact->telephone }}</dd>
                    @endif
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="section col-md-6"><b>E-mail address </b></div>
                  <div class="section col-md-6">
                   <dd>{{ auth()->user()->email }}</dd>
                  </div>
                </div>

                <br><br>      
                
               <p class="label label-default">Address</p>
               <div class="col-md-12">
                 <div class="section col-md-6"><b>Present address</b></div>
                 <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->present_add))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ auth()->user()->profile->present_add }}</dd>
                    @endif
                 </div>
               </div>
               <div class="col-md-12" style="padding-bottom: 20px;">
                 <div class="section col-md-6"><b>Provincial address</b></div>
                 <div class="section col-md-6">
                    @if (is_null(auth()->user()->profile->provincial_add))
                      <dd class="red">*</dd>
                    @else
                      <dd>{{ auth()->user()->profile->provincial_add }}</dd>
                    @endif
                 </div>
               </div>


              </fieldset>
            </div>

          </div>
          <div class="col-md-6">
            <div class="col-md-12">
              <fieldset>
                <legend>
                  <h4>Family Background</h4>
                </legend>

               <div class="col-md-12">
                 <div class="section col-md-6"><b>Mother's name</b></div>
                 <div class="section col-md-6">
                   @if (is_null(auth()->user()->mother->m_first_name))
                    <dd class="red">*</dd>
                   @else
                    <p>{{ ucfirst(auth()->user()->mother->m_first_name) }} {{ ucfirst(auth()->user()->mother->m_middle_name) }} {{ ucfirst(auth()->user()->mother->m_last_name) }}</p>
                   @endif

                 </div>
               </div>

               <div class="col-md-12">
                 <div class="section col-md-6"><b>Father's name</b></div>
                 <div class="section col-md-6">
                   @if (is_null(auth()->user()->father->f_first_name))
                    <p class="red">*</p>
                   @else
                    <p>
                      {{ ucfirst(auth()->user()->father->f_first_name) }} {{ ucfirst(auth()->user()->father->f_middle_name) }} {{ ucfirst(auth()->user()->father->f_last_name) }}

                      @if (is_null(auth()->user()->father->f_extension_name))
                      @else
                        {{ ucfirst(auth()->user()->father->f_extension_name) . '.'}}
                      @endif

                    </p>
                    
                   @endif

                 </div>
               </div>
              </fieldset>
            </div>

            <div class="col-md-12">
              <fieldset>
                <legend>
                  <h4>Other Details</h4>
                </legend>
                <div class="col-md-12">
                  @if (is_null(auth()->user()->other->visible_marks) OR auth()->user->other->visible_marks = 'none')
                  @else
                   <section class="col-md-12">
                     <p><b>Visible marks:</b> &nbsp; {{ auth()->user()->profile->visible_marks }}</p>
                   </section>
                   <section class="col-md-6">
                   
                   </section>
                  @endif
                </div>
                <div class="col-md-12">
                  @if (is_null(auth()->user()->other->cedula))
                    <section class="col-md-6">
                      <p><b>Cedula no:</b></p>
                    </section>
                    <section class="col-md-6">
                      <p class="red">*</p>
                    </section>
                  @else
                  
                   <section class="col-md-6">
                     <p><b>Cedula no:</b> &nbsp; <kbd>{{ auth()->user()->other->cedula }}</kbd></p>
                   </section>
                   <section class="col-md-6">
                     <p><b>Date issued:</b> &nbsp; <kbd>{{ auth()->user()->other->cedula_day }}/{{ auth()->user()->other->cedula_month }}/{{ auth()->user()->other->cedula_year }}</kbd></p>
                   </section>
                  @endif
                </div>
                <div class="col-md-12">
                  @if (is_null(auth()->user()->other->passport))
                  @else
                      <section class="col-md-4">
                       Passport no
                      </section>
                      <section class="col-md-4">
                       {{ auth()->user()->other->passport }}
                      </section>
                     <section class="col-md-4">
                    {{ auth()->user()->other->passport_day }}/{{ auth()->user()->other->passport_month }}/{{ auth()->user()->other->passport_year }}
                    </section>
                  @endif
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </section>

   
 
      

  </div>
  



</div>

@endsection