<tr>
    <td>
        <strong>SUGGESTION</strong>
    </td>
    <td class="d-none d-sm-table-cell"></td>
    <td class="d-none d-sm-table-cell" rowspan="2">
        <a href="{{ route('suggestionAnswered') }}" class="btn btn-primary btn-sm rounded-1 btn-edit" type="button"
            data-toggle="tooltip" data-placement="top" title="Edit" id="suggestion">
            <i class="fa fa-edit mr-1"></i>
            Edit
        </a>
    </td>
</tr>
<tr class="border-bottom border-bottom-xs-none">
    <td></td>
    <td class="d-none d-sm-table-cell">
        <span class="fa fa-circle bg-danger"></span>
        {{ session('suggestion') }}
    </td>
</tr>
{{-- For mobile responsive --}}
<tr class="d-sm-none new-row">
    <td colspan="3">
        <span class="fa fa-circle bg-danger"></span>
        {{ session('suggestion') }}
    </td>
</tr>
<tr class="d-sm-none border-bottom text-center new-row">
    <td colspan="3">
        <a href="{{ route('suggestionAnswered') }}" class="btn btn-primary btn-sm rounded-1 btn-edit" type="button"
            data-toggle="tooltip" data-placement="top" title="Edit" id="suggestion">
            <i class="fa fa-edit mr-1"></i>
            Edit
        </a>
    </td>
</tr>

