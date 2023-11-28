@extends('admin.layout.app')
@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Test Instruction</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-body">
            <div class="row ec-vendor-uploads">
              <div class="col-lg-12">
                <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{ url('admin/exam/instruction/save') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                      <label class="form-label">Instruction:</label>
                      <textarea class="form-control slug-title" name="instruction">{{ ($instruction == null) ? old('instruction') : $instruction->instruction}}</textarea>                    
                    </div>
                   
                    <div class="col-md-12 mt-2">
                      <button type="submit" class="btn btn-primary">Save</button>
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

<!-- Add these lines before the closing body tag -->
<script>
// Replace 'textarea' with the appropriate selector for your textarea
CKEDITOR.replace('instruction');
</script>

@endsection