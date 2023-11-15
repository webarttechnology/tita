@extends('installer.layout.app')
@section('content')

<div class="col-lg-12 col-xl-12">
    <div class="profile-content-right profile-right-spacing py-5">
        
        <div class="tab-content px-3 px-xl-5" id="myTabContent">
            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <div class="tab-pane-content mt-5">
                    @if($location == null) 
                    <form action="{{ url('installer/location-save', 'save') }}" method="post" enctype="multipart/form-data">
                    @else
                    <form action="{{ url('installer/location-save', 'update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        

                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="lastName">Address (Line 1) *</label>
                                    <input type="text" class="form-control" id="address_line_1"
                                        name="address_line_1" value="@if($location!= null) {{ ($location->address_line_1) }} @endif">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="lastName">Address (Line 2)</label>
                                    <input type="text" class="form-control" id="address_line_2"
                                        name="address_line_2" value="@if($location!= null) {{ ($location->address_line_2) }} @endif">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="lastName">Country *</label>
                                    <input type="text" class="form-control" id="country"
                                        name="country" value="@if($location!= null) {{ ($location->country) }} @endif">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="lastName">State *</label>
                                    <input type="text" class="form-control" id="state"
                                        name="state" value="@if($location!= null) {{ ($location->state) }} @endif">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="lastName">City *</label>
                                    <input type="text" class="form-control" id="city"
                                        name="city" value="@if($location!= null) {{ ($location->city) }} @endif">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="lastName">Zip *</label>
                                    <input type="text" class="form-control" id="zip"
                                        name="zip" value="@if($location!= null) {{ ($location->zip) }} @endif">
                                </div>
                            </div>
                        </div>
                        
                        <!-- existing zips -->
                        <h3>Available Zips</h3>

                        @foreach($location->availableLocation as $aval)
                        <div class="row mb-2">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="zip"
                                        name="existing_zips[]" value="{{ $aval->zip }}">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-danger m-2"><i class="fa fa-trash"></i></button>
                           </div>
                        </div>
                        @endforeach

                        <!-- Add New -->
                        <div class="row mb-2">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="lastName">Add Available Zips</label>
                                    <input type="text" class="form-control" id="zip"
                                        name="available_zips[]">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                 <button type="button" class="btn btn-primary m-2" onclick="addRows()"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>

                        <div class="row" id="outerdiv">
                            <div style="padding:10px;" id="more_zips"></div>
                        </div>
                        <br>

                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                Profile</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- dynamically add features section -->
<script>
    function addRows(){
        var container = document.getElementById('more_zips');
        var row = document.createElement('div');
        row.classList.add('row');  

        row.innerHTML = `<div class="row mb-2">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                        name="available_zips[]">
                                </div>
                            </div>
                            <div class="col-lg-1 text-center pl-0">
                                 <button type="button" class="btn btn-danger" onclick="removeRow(this)"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>`;
                
        container.appendChild(row);
    }

    function removeRow(button) {
        // Get the parent row and remove it
        var row = button.closest('.row');
        row.remove();
    }
</script>
@endsection