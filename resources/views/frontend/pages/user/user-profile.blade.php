@extends("frontend.template.layout")

@section('per_page_css')
<link rel="stylesheet" href="{{ asset('frontend/css/lc_switch.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/google_auth.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/simple-line-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/weather-icons/css/weather-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/linea-icons/linea.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/flag-icon-css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/material-design-iconic-font/css/materialdesignicons.min.css') }}">
<style>
    .paginate-row{
        padding-left: 15px;
    }
    .spinner-border{
        position: absolute;
        left: 50%;
        top: 50%;
        background: #ee344e;
        display: none;
    }
    .input-group-addon:not(:last-child) {
    border-right: 0;
    }
    .custom-btn {
    height: 27px;
    width: 62px;
    border-radius: 5px;
    margin-left: 2px;
    }
    .card-body .text-left{
        padding-left: 2px;
    }
    .display-none{
        display:none;
    }
    .display-show{
        display: block;
    }

</style>
@endsection

@section('body-content')
      <!-- [ content ] Start -->
      <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Account Settings</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Account Settings</li>
            </ol>
        </div>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#security-settings">Security Settings</a>
                    </div>
                </div>
                {{-- user information start --}}

                <div class="col-md-9">
            
                <!--page loader start from j-->
                <div class="loading">Loading&#8230;</div>
                <!-- Start Page Loading -->
                <div id="loader-wrapper">
                    <div id="loader"></div>
                    <div class="loader-section section-left"></div>
                    <div class="loader-section section-right"></div>
                </div>
                <!--page loader ends from j-->
                    <form action="{{ route('user.profile.update' ) }}"  method="post" class="ajax-form" enctype="multipart/form-data">
                        @csrf
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account-general">

                            <div class="card-body media align-items-center">
                                @if(auth('web')->user()->image)
                                    <img src="{{ asset('images/profile/user/'.auth('web')->user()->image) }}" alt="User fdgfd Image"style="height: 50px;width:50px;">
                                @else
                                    <img src="{{ asset('images/profile/user.png') }}"  class="d-block ui-w-80" alt="User Image" id="image-preview" style="height: 50px;width:50px;">
                                @endif
                                
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" name="image" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">

                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control mb-1" name="name" value="{{ auth('web')->user()->name }}">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control mb-1" name="email" value="{{ auth('web')->user()->email }}">
                                    <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.
                                        <br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control"  name="company_name" value="{{ auth('web')->user()->company_name }}">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <i class="fas fa-eye show-password"></i>
                                    <i class="fas fa-eye-slash hide-password"></i>
                                    <input type="password" class="form-control" id="password-field" name="old_password">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <i class="fas fa-eye show-password"></i>
                                    <i class="fas fa-eye-slash hide-password"></i>
                                    <input type="password" class="form-control" id="password-field"  name="password">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <i class="fas fa-eye show-password"></i>
                                    <i class="fas fa-eye-slash hide-password"></i>
                                    <input type="password" class="form-control" id="password-field"  name="password_confirmation" >
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                </div>
                                <div class="form-group" style="display: none">
                                    <label class="form-label">Birthday</label>
                                    <input type="text" class="form-control" value="May 3, 1995">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="custom-select" name="address">
                                        <option value="USA" @if(auth('web')->user()->address  ==  "USA") selected @endif>USA</option>
                                        <option value="UK" @if(auth('web')->user()->address  ==  "UK") selected @endif>UK</option>
                                        <option value="Germany" @if(auth('web')->user()->address  ==  "Germany") selected @endif>Germany</option>
                                        <option value="France" @if(auth('web')->user()->address  ==  "France") selected @endif>France</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Languages</label>
                                    <select multiple class="account-settings-multiselect form-control w-100" name="language">
                                        <option value="English" @if( auth('web')->user()->language == "English" ) selected @endif >English</option>
                                        <option value="German"  @if(auth('web')->user()->language  ==  "German") selected  @endif >German</option>
                                        <option value="French"  @if(auth('web')->user()->language  ==  "French") selected  @endif >French</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control"  name="phone" value="{{ auth('web')->user()->phone }}">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group" style="display: none">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" value="">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2"  style="display: none">
                                <h6 class="mb-4">Interests</h6>
                                <div class="form-group">
                                    <label class="form-label">Favorite music</label>
                                    <input type="text" class="form-control account-settings-tagsinput" value="Rock,Alternative,Electro,Drum & Bass,Dance">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Favorite movies</label>
                                    <input type="text" class="form-control account-settings-tagsinput" value="The Green Mile,Pulp Fiction,Back to the Future,WALL·E,Django Unchained,The Truman Show,Home Alone,Seven Pounds">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control"  name="twitter" value="{{ auth('web')->user()->twitter }}">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{ auth('web')->user()->facebook }}">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Google+</label>
                                    <input type="text" class="form-control" name="google_plus" value="{{ auth('web')->user()->google_plus }}">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control"  name="linkedin" value="{{ auth('web')->user()->linkedin }}">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control"  name="instagram" value="{{ auth('web')->user()->instagram }}">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-connections">
                            <div class="card-body">
                                <button type="button" class="btn btn-twitter">Connect to<strong>Twitter</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <h5 class="mb-2">
                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny">
                                        <i class="ion ion-md-close"></i> Remove
                                    </a>
                                    <i class="ion ion-logo-google text-google"></i>You are connected to Google:
                                </h5> nmaxwell@mail.com
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-facebook">Connect to<strong>Facebook</strong></button>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-instagram">Connect to<strong>Instagram</strong></button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="security-settings">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" {{  auth('web')->user()->auth_type == "no_auth" ? "checked" : "" }} >
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" {{  auth('web')->user()->auth_type == "email_auth" ? "checked" : "" }} >
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                        <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone answers on my forum thread</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input " id="googleAuth" {{  auth('web')->user()->auth_type == "google_auth" ? "checked" : "" }} >
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Google 2Step Authentication</span>
                                         
                                    </label>                                  
                                    
                                </div>
                                
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2" id="gauth">

                                
                                <div class="layout-content">
                                    {{-- google  authenticator  design start --}}
                                    <!-- [ content ] Start -->
                                    <div class="container-fluid flex-grow-1 container-p-y">
                                       
                                        <div class="row justify-content-center">
                                            <!-- liveline-section start -->
                                            <div class="col-sm-4">
                                                    <div class="text-center" id="qrimage">
                                                         <img src="{{auth('web')->user()->google2fa_url }}" alt="">                                                   
                                                    </div>
                                                
                                            </div>
                                            <div class="col-sm-4">
                                                <div class=""  id="qrcode">
                                                    <div class=" text-left"  style="margin-left: 1px;">
                                                        <input class="text-center text-muted"  type="text" value="{{ auth('web')->user()->google2fa_secret }}" readonly>
                                                        <p style="margin-bottom: 1px; margin-top:5px;">you can input to your app</p>   
                                                        <a  href=""><i class="ti ti-android"  data-toggle="tooltip" data-placement="top" title="Download  Google  Authenticator  App"></i></a>                                                
                                                        <a class="ml-5" href=""><i  class="ti ti-apple"  data-toggle="tooltip" data-placement="top" title="Download  IOS  Authenticator  App"></i></a>                                                
                                                        <form class="form-inline">                                                            
                                                            <div class="row  d-flex  mt-2"  style="margin-left: 1px;">
                                                              <input class="form-group  text-center" type="text"  placeholder="Enter Secret Code">
                                                              {{-- <button type="submit" class="btn btn-primary btn-sm ml-2 mb-2">Verify</button> --}}
                                                              <button type="submit" class="btn btn-warning btn-sm  custom-btn">Verify</button>
                                                            </div>
                                                            
                                                          </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- liveline-section end -->
                                        </div>
                                    </div>
                                    {{-- google  authenticator  design ends --}}

                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                        <button type="submit" class="btn btn-default">Cancel</button>
                    </div>
                </form>
                </div>
                
                {{-- user information end --}}
            </div>
        </div>

        

    </div>
    <!-- [ content ] End -->
   
@endsection
@section('per_page_js')
    <script>      

          $("#googleAuth").on('click',function(e){
              e.preventDefault();
                
                    // $("#gauth").fadeToggle();
                        if($(this).is(":checked")){
                            
                            $("#gauth").fadeIn();
                            //console.log('generate QR Code');                   
                        var userId = '{{ auth("web")->check() ? auth("web")->user()->id : null }}';
                            //console.log(userId);
                            
                            $.ajax({
                                "type" : 'GET',
                                "url": '{{ route("generate.qr.code") }}',

                                data:{
                                    userIdVal : userId,   
                                    
                                },
                                success: function (response) { 
                                          
                                if (response.success) {
                                    swal("", `${response.success}`, "success");
                                    $('#qrcode').load(location.href + " #qrcode");
                                    $('#qrimage').load(location.href + " #qrimage");
                                   
                                    
                                    }
                                if (response.warning) {
                                    swal("", `${response.warning}`, "warning");
                                }
                            }
                    });
                }else{
                        $("#gauth").fadeOut();
                    }

          });

     </script>
   

     <script>
    
    $(".show-password").click(function(){
        let $this = $(this)
        $this.closest(".password-box").find("#password-field").attr("type","text")
        $this.closest(".password-box").find(".show-password").hide()
        $this.closest(".password-box").find(".hide-password").show()
    })
    
    $(".hide-password").click(function(){
        let $this = $(this)
        $this.closest(".password-box").find("#password-field").attr("type","password")
        $this.closest(".password-box").find(".show-password").show()
        $this.closest(".password-box").find(".hide-password").hide()
    })
    
</script>
@endsection


