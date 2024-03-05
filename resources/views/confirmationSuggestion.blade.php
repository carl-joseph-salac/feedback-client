<tr>
    <td>
        <strong>SUGGESTION</strong>
    </td>
    <td></td>
    <td rowspan="2">
        <a href="{{ route('suggestionAnswered') }}" class="btn btn-success btn-sm rounded-1 btn-edit" type="button"
            data-toggle="tooltip" data-placement="top" title="Edit" id="suggestion">
            <i class="fa fa-edit mr-1"></i>
            Edit
        </a>
    </td>
</tr>
<tr class="border-bottom">
    <td></td>
    <td>
        <span class="fa fa-circle bg-success"></span>
        {{ session('suggestion') }}
    </td>
</tr>
