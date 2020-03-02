@extends('layout.master')
@section('title', 'My Profile')
@section('parentPageTitle', 'Dashboard')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/select2/select2.css')}}"/>
@stop

@section('page-script')
@parent
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@stop

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong><i class="zmdi zmdi-account"></i> Account</strong> Profile</h2>
            </div>
            <div class="body">
                <div class="nav-vertical">
                    <div class="row">

                      <div class="col-lg-2 col-md-4 col-sm-4">
                        <ul class="nav nav-tabs nav-left flex-column mt-md-0 mt-1" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">
                              <i class="feather icon-globe mr-50 font-medium-3"></i>
                              Profile Info
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-settings" data-toggle="tab" aria-controls="account-vertical-settings" href="#account-vertical-settings" aria-expanded="false">
                              <i class="feather icon-message-circle mr-50 font-medium-3"></i>
                              Account settings
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="tab" aria-controls="account-vertical-password" href="#account-vertical-password" aria-expanded="false">
                              <i class="feather icon-lock mr-50 font-medium-3"></i>
                              Account Security
                            </a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="tab" aria-controls="account-vertical-social" href="#account-vertical-social" aria-expanded="false">
                              <i class="feather icon-camera mr-50 font-medium-3"></i>
                              Social links
                            </a>
                          </li>


                        </ul>
                      </div>
                      <div class="col-lg-10 col-md-8 col-sm-8">
                        <div class="tab-content">

                            {{-- profile info --}}
                            <div class="tab-pane active" id="tab1" role="tab" aria-labelledby="account-pill-general" aria-expanded="false" >
                              <div class="media">
                                <a href="javascript: void(0);">
                                  <img src="{{ asset('assets/images/profile_av.jpg') }}" class="rounded mr-75"
                                    alt="profile image" height="64" width="64">
                                </a>
                                <div class="media-body mt-75">
                                  <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                    <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                      for="account-upload">Upload new photo</label>
                                    <input type="file" id="account-upload" hidden>
                                    <button class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                                  </div>
                                  <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                      size of
                                      1000kB</small></p>
                                </div>
                              </div>
                              <hr>
                              <form novalidate>
                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="accountTextarea">Bio</label>
                                      <textarea class="form-control" id="accountTextarea" rows="3"
                                        placeholder="Your Bio data here..."></textarea>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <div class="controls">
                                        <label for="account-birth-date">Birth date</label>
                                        <input type="text" class="form-control birthdate-picker" required placeholder="Birth date"
                                          id="account-birth-date" data-validation-required-message="This birthdate field is required">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="accountSelect">Country</label>
                                      <select class="form-control show-tick ms" id="accountSelect">
                                        <option>Egypt</option>
                                        <option>USA</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="languageselect2">Languages</label>
                                      <select class="form-control show-tick ms select2" id="languageselect2" multiple="multiple">
                                        <option value="English" selected>English</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="French">French</option>
                                        <option value="Russian">Russian</option>
                                        <option value="German">German</option>
                                        <option value="Arabic" selected>Arabic</option>
                                        <option value="Sanskrit">Sanskrit</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <div class="controls">
                                        <label for="account-phone">Phone</label>
                                        <input type="text" class="form-control" id="account-phone" required placeholder="Phone number"
                                          value="(+656) 254 2568"
                                          data-validation-required-message="This phone number field is required">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="account-website">Website</label>
                                      <input type="text" class="form-control" id="account-website" placeholder="Website address">
                                    </div>
                                  </div>

                                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                      changes</button>
                                    <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                  </div>
                                </div>
                              </form>

                            </div>

                            {{-- profile security --}}
                            <div class="tab-pane fade" id="account-vertical-password" role="tab" aria-labelledby="account-pill-password" aria-expanded="false">
                              <form novalidate>
                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <div class="controls">
                                        <label for="account-old-password">Old Password</label>
                                        <input type="password" class="form-control" id="account-old-password" required
                                          placeholder="Old Password"
                                          data-validation-required-message="This old password field is required">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <div class="controls">
                                        <label for="account-new-password">New Password</label>
                                        <input type="password" name="password" id="account-new-password" class="form-control"
                                          placeholder="New Password" required
                                          data-validation-required-message="The password field is required" minlength="6">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <div class="controls">
                                        <label for="account-retype-new-password">Retype New
                                          Password</label>
                                        <input type="password" name="con-password" class="form-control" required
                                          id="account-retype-new-password" data-validation-match-match="password"
                                          placeholder="New Password"
                                          data-validation-required-message="The Confirm password field is required" minlength="6">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                      changes</button>
                                    <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                  </div>
                                </div>
                              </form>
                            </div>

                            {{-- profile settings --}}
                            <div class="tab-pane fade" id="account-vertical-settings" role="tab" aria-labelledby="account-pill-settings" aria-expanded="false">
                              <div class="row">
                                <h6 class="m-1">Security</h6>
                                <div class="col-12 mb-1">
                                    <div class="custom-control custom-switch custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" checked id="accountSwitch1">
                                      <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                      <span class="switch-label w-100">Enable 2FA Authentication</span>
                                    </div>
                                  </div>
                                <h6 class="m-1">Activity</h6>
                                <div class="col-12 mb-1">
                                  <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch1">
                                    <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                                    <span class="switch-label w-100">Email me when someone comments
                                      onmy
                                      article</span>
                                  </div>
                                </div>
                                <div class="col-12 mb-1">
                                  <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch2">
                                    <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                                    <span class="switch-label w-100">Email me when someone answers on
                                      my
                                      form</span>
                                  </div>
                                </div>
                                <div class="col-12 mb-1">
                                  <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                                    <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                                    <span class="switch-label w-100">Email me hen someone follows
                                      me</span>
                                  </div>
                                </div>
                                <h6 class="m-1">Application</h6>
                                <div class="col-12 mb-1">
                                  <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch4">
                                    <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                                    <span class="switch-label w-100">News and announcements</span>
                                  </div>
                                </div>
                                <div class="col-12 mb-1">
                                  <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                                    <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                                    <span class="switch-label w-100">Weekly product updates</span>
                                  </div>
                                </div>
                                <div class="col-12 mb-1">
                                  <div class="custom-control custom-switch custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" checked id="accountSwitch6">
                                    <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                                    <span class="switch-label w-100">Weekly blog digest</span>
                                  </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                  <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                    changes</button>
                                  <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                </div>
                              </div>
                            </div>

                            {{-- Social Info --}}
                            <div class="tab-pane fade" id="account-vertical-social" role="tab" aria-labelledby="account-pill-social" aria-expanded="false">
                              <form>
                                <div class="row">
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="account-twitter">Twitter</label>
                                      <input type="text" id="account-twitter" class="form-control" placeholder="Add link"
                                        value="https://www.twitter.com">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="account-facebook">Facebook</label>
                                      <input type="text" id="account-facebook" class="form-control" placeholder="Add link">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="account-google">Google+</label>
                                      <input type="text" id="account-google" class="form-control" placeholder="Add link">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="account-linkedin">LinkedIn</label>
                                      <input type="text" id="account-linkedin" class="form-control" placeholder="Add link"
                                        value="https://www.linkedin.com">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="account-instagram">Instagram</label>
                                      <input type="text" id="account-instagram" class="form-control" placeholder="Add link">
                                    </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                      <label for="account-quora">Quora</label>
                                      <input type="text" id="account-quora" class="form-control" placeholder="Add link">
                                    </div>
                                  </div>
                                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                      changes</button>
                                    <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                  </div>
                                </div>
                              </form>
                            </div>

                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('page-script')

<script src="{{asset('assets/js/pages/index.js')}}"></script>
@stop
