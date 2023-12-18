@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <center> <h1> Home Page Brand Sections</h1> </center>
      </div>
      <div>
        <a href="{{route ('admin.home_brand')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>
      <div class="row"> 
          <div class="card card-default">
            <div class="card-body">
              <div class="ec-vendor-uploads">
                <div class="col-lg-12">
                  <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('admin.brand_store')}}" enctype="multipart/form-data">
                      @csrf  
                      <div class="append-row">                    
                        <div class="col-md-6">
                          <label class="form-label">Image:</label>
                          <input class="form-control" type="file" name="image[]">
                        </div>
                      </div>                     
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                         <a class="btn btn-success" id="add-new">Add New</a>
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


<div class="row d-none new-banner-row">
  <div class="col-md-6">
      <label class="form-label">Image:</label>
      <input class="form-control" type="file" name="image[]" required>
      <button class="btn btn-danger mb-4 remove-row">Remove</button>
  </div>     
</div>

@stop

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
   $(document).ready(function() {
    $("#add-new").on('click',  function(e)
    {
      e.preventDefault();
      var newAddRow =  $('.new-banner-row').html();
      $('.append-row').append(newAddRow);
    });
     
  });
</script>



<script>
  $(document).ready(function() {
   $(".remove-row").on('click',  function(e){
     alert('remove');
           e.preventDefault();
           $(this).closest('.new-banner-row').remove();
       });

  });
</script>
