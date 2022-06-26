
@section('content')
<form action="{{url('/lost-and-find')}}" method="Post" id="LostAndFind"
      name="LostAndFind" onsubmit="$('#id').val($('#id').val());
      return $(this).valid() && saveDataAjax('LostAndFind', 'id');">
    <div class="panel-body">
        <table id="LostAndFind" class="table table-bordered dynamictableCE2">
            <tbody>
            <tr style="display: none !important">
                <td colspan="4">
                    @isset($data)
                        <input type="hidden" name="id" id="id" value="{{ $data->id}}"/>
                    @endisset
                    @empty($data)
                        <input type="hidden" name="id" id="FEID" value="-1"/>
                        @endempty
                </td>
            </tr>
            <tr>
                <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="width border-first">
                        <div class="input-field col-md-12 col-lg-12 col-sm-12 col-xs-12 float">
                            <input id="item_name" name="item_name" type="number"
                                   class="validate" value="@isset($data){{$data->item_name}}@endisset"/>
                            <label for="item_name"> Item Name:</label>
                        </div>
                        <div class="collapse input-field col-md-10 col-lg-10 col-sm-10 col-xs-12 float"
                             id="WCcollapseE1">
                            <textarea id="FoundDate" name="FoundDate"
                                      class="materialize-textarea">@isset($data){{$data->FoundDate}}@endisset</textarea>
                            <label for="FoundDate">Found Date:</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="width border-first">

                        <div class="input-field col-md-12 col-lg-12 col-sm-12 col-xs-12 float">
                            <input id="Category" name="Category" type="number"
                                   class="validate"
                                   value="@isset($data){{$data->Category}}@endisset"/>
                            <label for="Category">Category:</label>
                        </div>
                        <div class="collapse input-field col-md-10 col-lg-10 col-sm-10 col-xs-12 float"
                             id="WCcollapseE2">
                            <input id="Email" name="Email"
                                      class="materialize-textarea">@isset($data){{$data->Email}}@endisset</textarea>
                            <label for="Email">Email:</label>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <button id="SaveForm" type="submit" class="btn btn-primary btn-lg" value="save">Save</button>
    </div>
</form>
@endsection