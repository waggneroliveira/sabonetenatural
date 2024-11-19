<div class="mb-3">
    <label for="name" class="form-label">{{__('blades/configEmail.user')}} <span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control" id="name{{isset($banner->id)?$banner->id:''}}" value="{{isset($banner)?$banner->title:''}}" placeholder="Digite o título" required>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{__('blades/configEmail.email')}} <span class="text-danger">*</span></label>
    <input type="email" name="email" value="{{isset($banner)?$banner->email:''}}" class="form-control" id="exampleInputEmail1{{isset($banner->id)?$banner->id:''}}" placeholder="Digite seu email" required>
</div>

<div class="mb-3">
    <label for="password" class="form-label">{{__('blades/configEmail.password')}} <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <input type="password" name="password" id="password-{{ isset($banner->id) ? $banner->id : '' }}" class="form-control" placeholder="Digite sua senha" {{ !isset($banner) ? 'required' : '' }}>
    </div>
</div>

<div class="col-lg-12">
    <div class="mt-3">
        <input type="file" name="path_image" data-plugins="dropify" data-default-file="{{isset($banner)?$banner->path_image<>''?url('storage/'.$banner->path_image):'':''}}"  />
        <p class="text-muted text-center mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
    </div>
</div>
<div class="mb-3">
    <div class="form-check">
        <input name="active" {{ isset($banner->active) && $banner->active == 1 ? 'checked' : '' }} type="checkbox" class="form-check-input" id="invalidCheck{{isset($banner->id)?$banner->id:''}}" />
        <label class="form-check-label" for="invalidCheck">{{__('dashboard.active')}}?</label>
        <div class="invalid-feedback">
            You must agree before submitting.
        </div>
    </div>
</div>
