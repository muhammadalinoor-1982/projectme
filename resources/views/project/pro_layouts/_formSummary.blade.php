<div class="col-12 mb-30">
    <div class="box">
        <div class="box-body">
            <div class="row mbn-20">
                <!--Small Field-->
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">Name</h6>

                    <div class="row mbn-15">

                        <div class="col-12 mb-15"><input name="name" value="{{ old('name',isset($agent_summary)?$agent_summary->name:null) }}" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Enter Summary Name"></div>
                        @error('name')
                        <div class="pl-1 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">Session Name</h6>

                    <div class="row mbn-15">
                        @php
                            if(old("threesession_id")){
                                $threesession_id = old('threesession_id');
                            }elseif(isset($agent_summary)){
                                $threesession_id = $agent_summary->threesession_id;
                            }else{
                                $threesession_id = null;
                            }
                        @endphp
                        <select name="threesession_id" id="threesession" class="form-control form-control-sm @error('threesession_id') is-invalid @enderror">
                            <option>Select Session</option>
                            @foreach($threesessions as $row)
                                <option @if($threesession_id == $row->id) selected @endif value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                        @error('threesession_id')
                        <div class="pl-1 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">Total call</h6>

                    <div class="row mbn-15">

                        <div class="col-12 mb-15"><input name="total_call" value="{{ old('total_call',isset($agent_summary)?$agent_summary->total_call:null) }}" type="text" class="form-control form-control-sm @error('total_call') is-invalid @enderror" placeholder="Enter Total Call"></div>
                        @error('total_call')
                        <div class="pl-1 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-20">

                    <h6 class="mb-15">Total Ticket</h6>

                    <div class="row mbn-15">

                        <div class="col-12 mb-15"><input name="total_ticket" value="{{ old('total_ticket',isset($agent_summary)?$agent_summary->total_ticket:null) }}" type="text" class="form-control form-control-sm @error('total_ticket') is-invalid @enderror" placeholder="Enter Total Ticket"></div>
                        @error('total_ticket')
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



