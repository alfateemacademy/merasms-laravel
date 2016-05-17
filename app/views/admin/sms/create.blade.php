@extends('admin.layouts.master')

@section('page-heading')
    <h1 class="page-header">
        SMS
        <small>Create</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="/admin/sms">SMS</a>
    </li>
    <li class="active">
        Add New
    </li>
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New SMS</h3>
                </div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'admin..sms.store', 'method' => 'POST', 'files' => true])  }}

                    <div class="form-group {{ ($errors->has('category_id')) ? 'has-error' : null  }}">
                        <label for="" class="control-label">Select Category</label>
                        {{ Form::select('category_id', ['' => '- Select Category -'] + $categories, null, ['class' => 'form-control']) }}
                        {{--<select name="category_id" id="category_id" class="form-control">
                            <option value="">- Select Category -</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endforeach
                        </select>--}}
                        <span class="help-block">{{ $errors->first('category_id') }}</span>
                    </div>

                    <div class="form-group {{ ($errors->has('title')) ? 'has-error' : null  }}">
                        <label for="" class="control-label">Title</label>
                        {{ Form::text('title', null, ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    </div>

                    <div class="form-group {{ ($errors->has('type')) ? 'has-error' : null  }}">
                        <label for="" class="control-label">Type</label>
                        {{ Form::select('type', ['' => '- Select SMS Type -', 'text' => 'Text', 'image' => 'Image'],
                            null, ['id' => 'sms_type', 'class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('type') }}</span>
                    </div>

                    <div id="sms_content" class="form-group {{ ($errors->has('sms_content')) ? 'has-error' : null  }}" style="display: none;">
                        <label for="" class="control-label">Message</label>
                        {{ Form::textarea('sms_content', null, ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('sms_content') }}</span>
                    </div>

                    <div id="sms_image" class="form-group {{ ($errors->has('image_url')) ? 'has-error' : null  }}" style="display: none;">
                        <label for="" class="control-label">Select Image</label>
                        {{ Form::file('image_url', ['class' => 'form-control']) }}
                        <span class="help-block">{{ $errors->first('image_url') }}</span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add SMS</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer.scripts')
<script>
    function checkSmsType() {
        var selectedValue = $("#sms_type option:selected").val();

        if(selectedValue != "")
        {
            if(selectedValue == 'text')
            {
                $("#sms_content").slideDown();
                $("#sms_image").hide();
            }
            else
            {
                $("#sms_content").hide();
                $("#sms_image").slideDown();
            }
        }
        else
        {
            $("#sms_content").hide();
            $("#sms_image").hide();
        }
    }
    $(document).ready(function() {
        checkSmsType();
        $("#sms_type").on('change', checkSmsType);
    });
</script>
@endsection