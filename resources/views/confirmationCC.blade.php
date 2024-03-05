{{-- If cc1 answer is equal to choices 4, cc2 and cc3 will become automatically not applicable --}}
@if (session('cc1') == $cc1Choices4)
    @foreach ($cc as $question)
        @if ($question->question_no == 'cc1')
            <tr>
                <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
                <td>{{ $question->question }}</td>
                <td rowspan="2">
                    <a href="{{ route($question->question_no . 'Checked') }}"
                        class="btn btn-success btn-sm rounded-1 btn-edit" type="button" data-toggle="tooltip"
                        data-placement="top" title="Edit">
                        <i class="fa fa-edit mr-1"></i>
                        Edit
                    </a>
                </td>
            </tr>
            <tr class="border-bottom">
                <td></td>
                <td>
                    <span class="fa fa-circle bg-success"></span>
                    {{ session($question->question_no) }}
                </td>
            </tr>
        @else
            <tr class="bg-white">
                <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
                <td>{{ $question->question }}</td>
                <td rowspan="2">
                    <button disabled="disabled" class="btn btn-secondary btn-sm">N/A</button>
                </td>
            </tr>
            <tr class="border-bottom">
                <td></td>
                <td>
                    <i>Not Applicable</i>
                </td>
            </tr>
        @endif
    @endforeach
@else
    @foreach ($cc as $question)
        <tr>
            <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
            <td>{{ $question->question }}</td>
            <td rowspan="2">
                <a href="{{ route($question->question_no . 'Checked') }}"
                    class="btn btn-success btn-sm rounded-1 btn-edit" type="button" data-toggle="tooltip"
                    data-placement="top" title="Edit">
                    <i class="fa fa-edit mr-1"></i>
                    Edit
                </a>
            </td>
        </tr>
        <tr class="border-bottom">
            <td></td>
            <td>
                <span class="fa fa-circle bg-success"></span>
                {{ session($question->question_no) }}
            </td>
        </tr>
    @endforeach
@endif
