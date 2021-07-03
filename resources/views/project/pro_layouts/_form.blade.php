<div class="col-12 mb-30">
    <div class="box">
        <div class="box-body">
            <div class="row mbn-20">
                <!--Small Field-->
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">Session</h6>

                    <div class="row mbn-15">

                        <div class="col-12 mb-15"><input name="name" value="{{ old('name',isset($threesession)?$threesession->name:null) }}" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Enter session Name"></div>
                        @error('name')
                        <div class="pl-1 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <!--Small Field-->
            </div>
        </div>
    </div>
</div>
{{--
<div class="col-12">
    <div class="box">
        <div class="box-body">
            <div class="row mbn-20">
                <!--File Input-->
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">File Input</h6>

                    <input type="file" class="form-control">

                </div>
                <!--File Input-->

                <!--Input Range-->
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">Range</h6>

                    <input type="range" class="form-control-range">

                </div>
                <!--Input Range-->
                <!--Inline Checkbox & Radio-->
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">Inline Checkbox & Radio</h6>

                    <div class="form-group">
                        <label class="inline"><input type="checkbox">One</label>
                        <label class="inline"><input type="checkbox">Two</label>
                    </div>

                    <div class="form-group">
                        <label class="inline"><input type="radio" name="inlineBasicRadio">One</label>
                        <label class="inline"><input type="radio" name="inlineBasicRadio">Two</label>
                    </div>

                </div>
                <!--Inline Checkbox & Radio-->

            </div>
        </div>
    </div>
</div>
<div class="col-12 mb-30">
    <div class="box">
        <div class="box-head">
            <h3 class="title">Date Range Picker</h3>
        </div>
        <div class="box-body">
            <div class="row mbn-20">

                <!--Single Date Picker-->
                <div class="col-lg-4 col-12 mb-20">
                    <h6 class="mb-15">Single Date Picker</h6>
                    <input type="text" class="form-control input-date-single">
                </div>
                <!--Single Date Picker-->

                <!--Date Range Picker-->
                <div class="col-lg-4 col-12 mb-20">
                    <h6 class="mb-15">Date Range Picker</h6>
                    <input type="text" class="form-control input-date">
                </div>
                <!--Date Range Picker-->

                <!--Date Range Picker With Times-->
                <div class="col-lg-4 col-12 mb-20">
                    <h6 class="mb-15">Date Range Picker With Times</h6>
                    <input type="text" class="form-control input-date-time">
                </div>
                <!--Date Range Picker With Times-->

                <!--Predefined Date Ranges-->
                <div class="col-lg-4 col-12 mb-20">
                    <h6 class="mb-15">Predefined Date Ranges</h6>
                    <input type="text" class="form-control input-date-predefined">
                </div>
                <!--Predefined Date Ranges-->

                <!--Input Initially Empty-->
                <div class="col-lg-4 col-12 mb-20">
                    <h6 class="mb-15">Input Initially Empty</h6>
                    <input type="text" class="form-control input-date-empty">
                </div>
                <!--Input Initially Empty-->

            </div>
        </div>
    </div>
</div>
<div class="col-12 mb-30">
    <div class="box">
        <div class="box-head">
            <h3 class="title">Summernote</h3>
        </div>
        <div class="box-body">
            <textarea class="summernote"></textarea>
        </div>
    </div>
</div>
<script>$('.input-date').daterangepicker();</script>
<script>$('.summernote').summernote({
        height: 250,
    });</script>--}}


{{--<div class="col-12 mb-15">
    <select class="form-control form-control-sm">
        <option>Select Small</option>
        <option>One</option>
        <option>Two</option>
        <option>Three</option>
    </select>
</div>--}}
