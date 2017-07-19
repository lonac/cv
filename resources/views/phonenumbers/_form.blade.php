<div class="form-group">
    <label for="phonenumber" class="col-sm-2 control-label">phonenumber</label>
    <div class="col-sm-10">
        <input type="number" name="phonenumber" class="form-control" id="phonenumber" required="required">
        @if($errors->has('phonenumber'))
            <p class="help-block">
                <span class="alert alert-danger">
                    {{ $errors->first('phonenumber') }}
                </span>
            </p>
        @endif
    </div>
</div>